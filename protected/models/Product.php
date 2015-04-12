<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $ProID
 * @property string $ProName
 * @property string $ProDesc
 * @property double $ProPrice
 * @property string $ProImage
 * @property integer $CateID
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProName, ProPrice, ProImage, CateID', 'required'),
			array('CateID', 'numerical', 'integerOnly'=>true),
			array('ProPrice', 'numerical'),
			array('ProName', 'length', 'max'=>256),
			array('ProDesc, ProImage', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ProID, ProName, ProDesc, ProPrice, ProImage, CateID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('CategoryRelation' => array(self::BELONGS_TO, 'Category', 'CateID'));
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ProID' => 'Pro',
			'ProName' => 'Product Name',
			'ProDesc' => 'Pro Desc',
			'ProPrice' => 'Pro Price',
			'ProImage' => 'Pro Image',
			'CateID' => 'Cate',
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

		$criteria->compare('ProID',$this->ProID);
		$criteria->compare('ProName',$this->ProName,true);
		$criteria->compare('ProDesc',$this->ProDesc,true);
		$criteria->compare('ProPrice',$this->ProPrice);
		$criteria->compare('ProImage',$this->ProImage,true);
		$criteria->compare('CateID',$this->CateID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function customFindAll(){
		return new CActiveDataProvider($this);
	
	}
}
