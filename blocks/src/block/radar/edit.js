import { THEME_NAME, hexToRgba } from '../../helpers';
import { useRef, useEffect, useState } from '@wordpress/element';
import { useSelect, useDispatch } from '@wordpress/data';
import {
  store as blockEditorStore,
  InspectorControls,
  PanelColorSettings,
} from '@wordpress/block-editor';
import {
  PanelBody,
  TextControl,
  RangeControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

const MIN_SIZE = 200;
const MAX_SIZE = 1920;
const DEFAULT_COLOR = 'rgba(255, 99, 132, 0.2)';
const DEFAULT_BORDER_COLOR = 'rgba(255, 99, 132, 0.9)';

export default function edit( props ) {
  const { attributes, setAttributes, clientId } = props;
  const { imageSize, labels, data, chartId, chartColor } = attributes;
  const canvasRef = useRef(null);
  const chartInstanceRef = useRef(null); // useRefで管理

  const { isSelected } = useSelect((select) => ({
    isSelected: select(blockEditorStore).isBlockSelected(clientId),
  }));

  const { selectBlock } = useDispatch(blockEditorStore);

  useEffect(() => {
    if (!chartId) {
      const newChartId = `radarChart-${Math.random().toString(36).substr(2, 9)}`;
      setAttributes({ chartId: newChartId });
    }
  }, []);

  // チャートの破棄関数
  const destroyChart = () => {
    if (chartInstanceRef.current) {
      chartInstanceRef.current.destroy();
      chartInstanceRef.current = null;
    }
  };

  const renderChart = () => {
    const ctx = canvasRef.current.getContext('2d');

    destroyChart(); // 既存のチャートがあれば破棄

    // 新しいチャートを生成
    chartInstanceRef.current = new Chart(ctx, {
      type: 'radar',
      data: {
        labels: labels,
        datasets: [{
          data: data,
          backgroundColor: chartColor ? hexToRgba(chartColor, 0.2) : DEFAULT_COLOR,
          borderColor: chartColor ? hexToRgba(chartColor, 0.9) : DEFAULT_BORDER_COLOR,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          r: {
            min: 0,
            max: 5,
            ticks: {
              stepSize: 1,
            },
          }
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
        },
      },
    });
  };

  // チャートのレンダリングとサイズ調整
  useEffect(() => {
    if (canvasRef.current && imageSize) {
      canvasRef.current.width = imageSize;
      canvasRef.current.height = imageSize;
      renderChart();
    }

    return () => {
      destroyChart(); // クリーンアップ時にチャートを破棄
    };
  }, [imageSize, labels, data, chartColor, chartId]);

  // マウスクリックでブロックを選択（フォーカス）する
  useEffect(() => {
    if (canvasRef.current) {
      const handleClick = () => {
        selectBlock(clientId);
      };
      canvasRef.current.addEventListener('click', handleClick);

      return () => {
        canvasRef.current.removeEventListener('click', handleClick);
      };
    }
  }, [canvasRef.current]);

  return (
    <div className="radar-chart-block">
      <canvas ref={canvasRef} id={chartId} width={imageSize} height={imageSize} tabIndex="0" />
      <InspectorControls>
        <PanelBody title={ __( 'チャート設定', THEME_NAME ) }>
          <RangeControl
            label={ __( 'チャートサイズ', THEME_NAME ) }
            value={ imageSize }
            onChange={ ( value ) => setAttributes({ imageSize: value }) }
            min={ MIN_SIZE }
            max={ MAX_SIZE }
          />
          <TextControl
            label={ __( '項目', THEME_NAME ) + __( '（カンマ区切り）', THEME_NAME ) }
            value={labels.join(', ')}
            onChange={(value) => setAttributes({ labels: value.split(',').map(label => label.trim()) })}
          />
          <TextControl
            label={ __( '値', THEME_NAME ) + __( '（カンマ区切り）', THEME_NAME ) }
            value={data.join(', ')}
            onChange={(value) => {
              const newData = value.split(',').map(d => parseFloat(d.trim()) || 0);
              setAttributes({ data: newData });
            }}
          />
        </PanelBody>
        <PanelColorSettings
          title={ __( '色設定', THEME_NAME ) }
          colorSettings={[
            {
              label: __( 'チャートカラー', THEME_NAME ),
              onChange: ( newColor ) => setAttributes({ chartColor: newColor }),
              value: chartColor,
            },
          ]}
        />
      </InspectorControls>
    </div>
  );
}
