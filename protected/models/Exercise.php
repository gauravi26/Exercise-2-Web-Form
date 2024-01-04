<?php

/**
 * This is the model class for table "exercise".
 *
 * The followings are the available columns in table 'exercise':
 * @property integer $id
 * @property string $name
 * @property string $profession
 * @property string $location
 * @property string $country
 * @property string $volunteer
 * @property string $email
 * @property string $phone
 * @property string $remark
 */
class Exercise extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'exercise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, profession, location, country, volunteer, email, phone, remark', 'required'),
			array('name, profession, location, country, volunteer, email, phone, remark', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, profession, location, country, volunteer, email, phone, remark', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'profession' => 'Profession',
			'location' => 'Location',
			'country' => 'Country',
			'volunteer' => 'Volunteer',
			'email' => 'Email',
			'phone' => 'Phone',
			'remark' => 'Remark',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('volunteer',$this->volunteer,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('remark',$this->remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Exercise the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
