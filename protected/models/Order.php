<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $Order_ID
 * @property string $Order_Date
 * @property string $Contact_Name
 * @property string $Contact_Mobile
 * @property string $Contact_Email
 * @property string $Contact_Address
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Contact_Name, Contact_Mobile, Contact_Email, Contact_Address', 'required'),
			array('Contact_Name', 'length', 'max'=>512),
			array('Contact_Mobile', 'length', 'max'=>64),
			array('Contact_Email', 'length', 'max'=>256),
			array('Contact_Address', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Order_ID, Order_Date, Contact_Name, Contact_Mobile, Contact_Email, Contact_Address', 'safe', 'on'=>'search'),
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
			'Order_ID' => 'Order',
			'Order_Date' => 'Order Date',
			'Contact_Name' => 'Contact Name',
			'Contact_Mobile' => 'Contact Mobile',
			'Contact_Email' => 'Contact Email',
			'Contact_Address' => 'Contact Address',
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

		$criteria->compare('Order_ID',$this->Order_ID);
		$criteria->compare('Order_Date',$this->Order_Date,true);
		$criteria->compare('Contact_Name',$this->Contact_Name,true);
		$criteria->compare('Contact_Mobile',$this->Contact_Mobile,true);
		$criteria->compare('Contact_Email',$this->Contact_Email,true);
		$criteria->compare('Contact_Address',$this->Contact_Address,true);
		
		if(Yii::app()->session['CusType']==2){
			$criteria->condition='CusID='.Yii::app()->session['CusID'];
		}
	
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
