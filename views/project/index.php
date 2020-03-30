<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,		
        'filterModel' => $searchModel,	
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_project',
            //'created_on',
            //'created_by',
			'name_country',
            'name_customer',
            //'role_customer',
			'role.content_role',
            //'industry_customer',
            //
            //'text_requirements',
            'text_solutions',
			//'mode_selling',
			'sellmodel.content_selling_model',
            //'name_sales',
            //'name_FAE',
            //'name_PM',
            'quantity_sim',
            //'type_sim',
            'simtype.content_type_sim',
			//'service_data',
            //'service_platform',
            //'service_software',
            //'cycle_data',
            'cycle.content_type_cycle',
			'size_data',
			'name_supplier',
            'coverage',
            //'sales_exp_data',
            //'sales_act_data',
            //'sales_exp_sim',
            //'sales_act_sim',
            //'sales_exp_platform',
            //'sales_act_platform',
            //'sales_exp_software',
            //'sales_act_software',
            
			[
				'attribute'=>'sales_exp_total',
				'format'=>'currency',	
				'pageSummary' => true,		
			],
			
            [
				'attribute'=>'sales_act_total',
				'format'=>'currency',
				'pageSummary' => true,
			],
            [
				'attribute'=>'sales_weighed_total',
				'format'=>'currency',
				'pageSummary' => true,	
			],
            //'tag_eSIM',
            //'progress',
            'progressx.content_progress',
			'status.content_data_status',
			'exp_mp_date',	
			//'statusy',
            
			//'name_operation',
            
			[
				'attribute'=>'weekly.item_week',
				
			],	
				
            ['class' => 'yii\grid\ActionColumn'],
			//check box	
			[
    			'class' => 'kartik\grid\CheckboxColumn',
    			'headerOptions' => ['class' => 'kartik-sheet-style'],
			],	
				
        ], 
		//'tableOptions' =>['style' => 'width: 1800px;'],	
			/*
		'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false	
		'exportConfig' => [
    		GridView::CSV => ['label' => 'Save as CSV'],
    		//GridView::HTML => [ html settings],
    		GridView::PDF => [ 'label'=> 'Save as PDF'],
		],
		'headerRowOptions' => ['class' => 'kartik-sheet-style'],
				'pjax' => true,		
		'export' => [
        	'fontAwesome' => true
    	],	
		'toolbar' =>  [
        	['content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                    'type'=>'button', 
                    'title'=>'Add Book', 
                    'class'=>'btn btn-success'
                ]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], [
                    'class' => 'btn btn-default', 
                    'title' => 'Reset Grid'
                ]),
			],
        	'{export}',
        	'{toggleData}',
		],	
		*/
	'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'pjax' => true, // pjax is set to always true for this demo
    // set your toolbar
    'toolbar' =>  [
        /*['content' => 
            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => 'Reset Grid'])
        ],*/
        '{export}',
        '{toggleData}',
    ],
    // set export properties
    'export' => [
        'fontAwesome' => true,
		//'label'=>'export',
		'icon'=>'glyphicon glyphicon-download-alt',
    ],
    // parameters from the demo form
    //'bordered' => true,
    'striped' => true,
    'condensed' => true,
    'responsive' =>true,
    'hover' => true,
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_DEFAULT,
        'heading' => true,
    ], 
    'persistResize' => false,
    'toggleDataOptions' => ['minCount' => 10],
    'exportConfig' => [
    		GridView::CSV => ['label' => 'Save as CSV'],
    		//GridView::HTML => [ html settings],
    		GridView::PDF => [ 'label'=> 'Save as PDF'],
		],
    'itemLabelSingle' => 'book',
			'itemLabelPlural' => 'books',
			
    ]); ?>

    <?php Pjax::end(); ?>

</div>
