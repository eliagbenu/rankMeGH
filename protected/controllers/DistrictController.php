<?php

class DistrictController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','customizedDistrictList','districtBreakDown','allProjects','budgetsPerDistrict',
				                 'allDistrictRankings'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','allocateBudget','viewBudgetAllocated'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionCustomizedDistrictList()
	{
		$this->render('customizedDistrictList');
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new District;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['District']))
		{
			$model->attributes=$_POST['District'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['District']))
		{
			$model->attributes=$_POST['District'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	public function actionAllProjects()
	{
		$this->render("allProjects");
	}

	public function actionAllDistrictRankings()
	{
		$this->render('allDistrictRankings');
	}
	
	public function actionBudgetsPerDistrict()
	{
		$this->render("budgetsPerDistrict");
	}
	
	public function actionAllocateBudget($id)
	{
		$model=$this->loadModel($id);
		$DistrictObject = new DistrictClass;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['District']))
		{
			$model->attributes=$_POST['District'];
			$budget_type=$model->budget_type;
			$budget_source =$model->budget_source;			
			$budget_amount =$model->budget_amount;	
			$budget_year = $model->budget_year;		
			$district_id=$model->district_id;			
					
			$DistrictObject->saveBudgetAllocated($budget_year,$budget_type,$budget_source,$district_id,$budget_amount);
  			
			$this->redirect(array('viewBudgetAllocated','id'=>$model->id));
		}


		$this->render('allocateBudget',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	 
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('District');
		
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionDistrictBreakDown()
	{
		$this->render('districtBreakDown');
	}

	public function actionViewBudgetAllocated()
	{
		$id = $_GET['id'];
		$sql = "SELECT sum(budget_amount) FROM `tbl_district_budget` where district_id = $id";
		$total_budgeted = Yii::app()->db->createCommand($sql)->queryScalar();
		
		
		$this->render('viewBudgetAllocated',array('id'=>$_GET['id'],'total_budgeted'=>$total_budgeted));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new District('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['District']))
			$model->attributes=$_GET['District'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=District::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='district-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
