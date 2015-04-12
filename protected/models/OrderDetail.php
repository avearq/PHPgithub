<?php

/**
 * This is the model class for table "order_detail".
 *
 * The followings are the available columns in table 'order_detail':
 * @property integer $Detail_ID
 * @property integer $Order_ID
 * @property integer $Product_ID
 * @property double $Product_Price
 * @property integer $Product_Qty
 */
class OrderDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Order_ID, Product_ID, Product_Price, Product_Qty', 'required'),
			array('Order_ID, Product_ID, Product_Qty', 'numerical', 'integerOnly'=>true),
			array('Product_Price', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Detail_ID, Order_ID, Product_ID, Product_Price, Product_Qty', 'safe', 'on'=>'search'),
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
			'OrderRelation'=>array(self::BELONGS_TO, 'Product', 'Product_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Detail_ID' => 'Detail',
			'Order_ID' => 'Order',
			'Product_ID' => 'Product',
			'Product_Price' => 'Product Price',
			'Product_Qty' => 'Product Qty',
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

		$criteria->compare('Detail_ID',$this->Detail_ID);
		$criteria->compare('Order_ID',$this->Order_ID);
		$criteria->compare('Product_ID',$this->Product_ID);
		$criteria->compare('Product_Price',$this->Product_Price);
		$criteria->compare('Product_Qty',$this->Product_Qty);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchByOrderId($orderId)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Order_ID',$orderId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function fetchTotalPrice($records)
    {
		$totalPrice=0.0;
        foreach($records as $record)
			$totalPrice+=$record->Product_Price * $record->Product_Qty;
        return number_format($totalPrice, 2);
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
