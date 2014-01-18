<?php

/**
 * This is the model class for table "{{district}}".
 *
 * The followings are the available columns in table '{{district}}':
 * @property integer $id
 * @property string $district_name
 * @property string $region
 */
class District extends CActiveRecord
{
	public $budget_type;
	public $budget_amount;
	public $budget_source;
	public $district_id;
	public $budget_year;
	public $user_rating_score;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return District the static model class
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
		return '{{district}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('district_name, region', 'length', 'max'=>100),
			array('budget_type,budget_amount,budget_source,budget_year','required'),
			array('district_id,user_rating_score','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, district_name, region', 'safe', 'on'=>'search'),
			array('budget_amount','numerical'),
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
			'district_name' => 'District Name',
			'region' => 'Region',
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
		$criteria->compare('district_name',$this->district_name,true);
		$criteria->compare('region',$this->region,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}