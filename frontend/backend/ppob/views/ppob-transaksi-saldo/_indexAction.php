<?php
use kartik\helpers\Html;
use kartik\detail\DetailView;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;

// print_r($dataProviderDetail);
// die();

$indexTransaksiSaldo=$this->render('_indexTransaksiSaldo',[
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider,
]);
$aryStt= [
    ['STATUS' => 0, 'STT_NM' => 'NEW Price'],		  
    ['STATUS' => 1, 'STT_NM' => 'Paid'],
  ];
	$attInfoTransaksi=[	
        [
            'group'=>true,
            'label'=>'SECTION 1: Information User',
            'rowOptions'=>['class'=>'info']
        ],
        [
            'columns' => [
                [
                    'attribute' =>'nmdepan',
                    //'value'=>$dataProviderDetail->nmdepan,
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
                [
                    'attribute' =>'ktp',
                    //'value'=>$dataProviderDetail->ktp,
                    'labelColOptions' => ['style' => 'text-align:right;width: 10%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ],
        ],
        [
            'columns'=>[
                [
                    'attribute' =>'alamat',
                   // 'value'=>$dataProviderDetail->alamat,
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ]
        ],
        [
            'columns'=>[
                [
                   // 'attribute' =>'Temapt/Tanggal Lahir',
                    'attribute' =>'tgllahir',
                   // 'value'=>$dataProviderDetail->lahirtempat.'/'.$dataProviderDetail->tgllahir,
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ]
            ]
        ],
        [
            'group'=>true,
            'label'=>'SECTION 2: Information Store',
            'rowOptions'=>['class'=>'info']
        ],
        [
            'columns' => [
                [
                    'attribute' =>'storeid',
                    //'value'=>$dataProviderDetail->storeid,
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
                [
                    'attribute' =>'storenm',
                    //'value'=>$dataProviderDetail->storenm,
                    'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ],
        ],
        [
            'group'=>true,
            'label'=>'SECTION 2: Information Transction',
            'rowOptions'=>['class'=>'info']
        ],
        [
            'columns' => [
                [
                    'attribute' =>'TRANS_ID',
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
                [
                    'attribute' =>'TRANS_DATE',
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ],
        ],
        [
            'columns' => [
                [
                    'attribute' =>'SALDO_DEPOSIT',
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
                [
                    'attribute' =>'DES_STORE',
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ],
        ],
        [
            'columns' => [
                [
                    'attribute' =>'SALDO_CURRENT',
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
                [
                    'attribute' =>'SALDO_BACK',
                    'labelColOptions' => ['style' => 'text-align:right;width: 30%'],
                    'displayOnly'=>true,	
                    'format'=>'raw', 
                ],
            ],
        ],
        [
            'group'=>true,
            'label'=>'SECTION 4: Information Transction',
            'rowOptions'=>['class'=>'info']
        ],
        [
            'columns' => [
                [
                    'attribute' =>'STATUS',
                    'value'=>function () use($dataProviderDetail)
                    {
                        if ($dataProviderDetail->STATUS==1) {
                          return "Paid";
                        } else {
                            return "New Price";
                        }
                    }
                    ,
                    'labelColOptions' => ['style' => 'text-align:right;width: 20%'],
                    'displayOnly'=>FALSE,	
                    'format'=>'raw', 
                    'type'=>DetailView::INPUT_SELECT2, 
                    'widgetOptions'=>[
                        'data'=>ArrayHelper::map($aryStt, 'STATUS', 'STT_NM'),
                        'options' => ['placeholder' => 'Select ...'],
                        'pluginOptions' => ['allowClear'=>true, 'width'=>'100%'],
                    ],
                ]
            ],
        ],
	];


	$dvTransaksi=DetailView::widget([
		'id'=>'dv-transaksi-data',
		'model' => $dataProviderDetail,
		'attributes'=>$attInfoTransaksi,
		'condensed'=>true,
		'hover'=>true,
		'panel'=>[
			'heading'=>'<b>Info Transaksi Deposit </b>',
            'type'=>DetailView::TYPE_DEFAULT,
            //'footer'=>tombolAmbil($url, $model),
		],
        'mode'=>DetailView::MODE_VIEW,
        'buttons1'=>'{update}',
        'buttons2'=>'{view}{save}',	
	]);
	
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
	<div class="col-xs-12 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
         <?=$indexTransaksiSaldo?>
        </div>
	</div>
    <div class="col-xs-12 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
		        <?=$dvTransaksi ?>	
            </div>
        </div>
	</div>
</div>