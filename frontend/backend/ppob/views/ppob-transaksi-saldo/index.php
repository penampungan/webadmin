<?php
use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use kartik\widgets\Spinner;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use yii\helpers\Json;
use yii\web\Response;
use yii\widgets\Pjax;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use yii\web\View;

$this->registerCss("
	:link {
		color: #fdfdfd;
	}
	/* mouse over link */
	a:hover {
		color: #5a96e7;
	}
	/* selected link */
	a:active {
		color: blue;
	}
	#gv-data-transaksi-saldo .kv-grid-container{
			height:400px
        }
	#gv-data-transaksi-saldo-paid .kv-grid-container{
			height:400px
        }
	#gv-data-transaksi-saldo-ambil .kv-grid-container{
			height:400px
        }
	#gv-data-transaksi-saldo-expierd .kv-grid-container{
			height:400px
        }
	#gv-data-transaksi-saldo-mutasi .kv-grid-container{
			height:400px
        }
    #w7 :link {
        color: black;
    }
    /* mouse over link */
    #w7-container a:hover {
        color: #5a96e7;
    }
    /* selected link */
    #w7-container a:active {
        color: blue;
    }
");

$this->registerJs($this->render('ppobTransaksiSaldo_script.js'),View::POS_READY);
echo $this->render('ppobTransaksiSaldo_modal'); //echo difinition
echo $this->render('ppobTransaksiSaldo_colum'); //echo difinition
echo $this->render('ppobTransaksiSaldo_colum_ambil'); //echo difinition
echo $this->render('ppobTransaksiSaldo_colum_expired'); //echo difinition
echo $this->render('ppobTransaksiSaldo_colum_mutasi'); //echo difinition
echo $this->render('ppobTransaksiSaldo_colum_paid'); //echo difinition
echo $this->render('ppobTransaksiSaldo_button'); //echo difinition
$this->title = 'PPOB-Transaksi Saldo';

$Action=$this->render('_indexAction',[
	'searchModel' => $searchModel,
	'dataProviderDetail' => $dataProviderDetail,
    'dataProvider' => $dataProvider,
]);

$HistoriPaid=$this->render('_indexHistoriPaid',[
	'searchModel' => $searchModel,
	'dataProviderPaid' => $dataProviderPaid,
]);

$HistoriMutasi=$this->render('_indexHistoriMutasi',[
	'searchModel' => $searchModel,
	'dataProviderMutasi' => $dataProviderMutasi,
]);

$HistoriExpired=$this->render('_indexHistoriExpired',[
	'searchModel' => $searchModel,
	'dataProviderExpired' => $dataProviderExpired,
]);

$HistoriAmbil=$this->render('_indexHistoriAmbil',[
	'searchModel' => $searchModel,
	'dataProviderAmbil' => $dataProviderAmbil,
]);

$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Detail Transaksi',
        'content'=>$Action,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> History Paid',
        'content'=>$HistoriPaid
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> History Mutasi',
        'content'=>$HistoriMutasi
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> History Expierd',
        'content'=>$HistoriExpired
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> History Pengembalian Saldo',
        'content'=>$HistoriAmbil
    ],
];

$tabIndex=TabsX::widget([
    'items'=>$items,
	'enableStickyTabs'=>true,
    'encodeLabels'=>false
]);

?>
<div class="col-xs-12 col-sm-12 col-lg-12">
<div style="margin-top: -10px; margin-bottom:10px">
		<?=tombolKembali()?>
<div class="pull-right">
    <?=tombolSearchData()?>
</div>
	</div>
</div>
<?=$tabIndex?>