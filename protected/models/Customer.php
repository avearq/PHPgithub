<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $CusID
 * @property string $CusName
 * @property string $CusAddress
 * @property string $CusMobile
 * @property string $CusEmail
 * @property string $CusPassword
 * @property integer $CusType
 */
class Customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CusName, CusAddress, CusMobile, CusEmail, CusPassword', 'required'),
			array('CusType', 'numerical', 'integerOnly'=>true),
			array('CusName', 'length', 'max'=>512),
			array('CusAddress', 'length', 'max'=>1024),
			array('CusMobile, CusPassword', 'length', 'max'=>64),
			array('CusEmail', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CusID, CusName, CusAddress, CusMobile, CusEmail, CusPassword, CusType', 'safe', 'on'=>'search'),
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
			'CusID' => 'Cus',
			'CusName' => 'Cus Name',
			'CusAddress' => 'Cus Address',
			'CusMobile' => 'Cus Mobile',
			'CusEmail' => 'Cus Email',
			'CusPassword' => 'Cus Password',
			'CusType' => 'Cus Type',
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

		$criteria->compare('CusID',$this->CusID);
		$criteria->compare('CusName',$this->CusName,true);
		$criteria->compare('CusAddress',$this->CusAddress,true);
		$criteria->compare('CusMobile',$this->CusMobile,true);
		$criteria->compare('CusEmail',$this->CusEmail,true);
		$criteria->compare('CusPassword',$this->CusPassword,true);
		$criteria->compare('CusType',$this->CusType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function ValidatePassword($password){
		return $this->CusPassword===$password;
	}
}
