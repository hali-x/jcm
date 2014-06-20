<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property string $contactid
 * @property string $agentId
 * @property string $name
 * @property string $tel
 * @property integer $dtag
 *
 * The followings are the available model relations:
 * @property Agent $agent
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('agentId, name', 'required'),
			array('dtag', 'numerical', 'integerOnly'=>true),
			array('agentId', 'length', 'max'=>4),
			array('name', 'length', 'max'=>50),
			array('tel', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contactid, agentId, name, tel, dtag', 'safe', 'on'=>'search'),
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
			'agent' => array(self::BELONGS_TO, 'Agent', 'agentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contactid' => 'Contactid',
			'agentId' => 'Agent',
			'name' => 'Name',
			'tel' => 'Tel',
			'dtag' => 'Dtag',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('contactid',$this->contactid,true);
		$criteria->compare('agentId',$this->agentId,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('dtag',$this->dtag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getContactList($id) 
	{ 		
	$currContact = $this->findAll('agentId=:agentId',array('agentId'=>$id)); 
	return CHtml::listData($currContact, 'contactid', 'name');
	} 
	
	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
