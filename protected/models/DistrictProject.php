<?php

/**
 * This is the model class for table "{{district_project}}".
 *
 * The followings are the available columns in table '{{district_project}}':
 * @property integer $id
 * @property string $project_name
 * @property string $location
 * @property string $description
 * @property string $photos
 * @property string $start_date
 * @property string $end_date
 * @property double $budget_allocated
 * @property string $completion_date
 */
class DistrictProject extends CActiveRecord
{
	public $budget_type;
	public $photos;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DistrictProject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{district_project}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('budget_allocated', 'numerical'),
			array('project_name, location, photos', 'length', 'max'=>150),
			array('description, start_date, end_date, completion_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_name, location, description, start_date, end_date, budget_allocated, completion_date,budget_type', 'required'),			
			array('id, project_name, location, description, photos, start_date, end_date, budget_allocated, completion_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_name' => 'Project Name',
			'location' => 'Location',
			'description' => 'Description',
			'photos' => 'Photos',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'budget_allocated' => 'Budget Allocated',
			'completion_date' => 'Completion Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('photos',$this->photos,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('budget_allocated',$this->budget_allocated);
		$criteria->compare('completion_date',$this->completion_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}