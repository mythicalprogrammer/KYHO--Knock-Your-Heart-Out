<?php

/**
 * This is the model class for table "routine".
 *
 * The followings are the available columns in table 'routine':
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property integer $creator_user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Goon $creatorUser
 * @property Day[] $days
 */
class Routine extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Routine the static model class
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
		return 'routine';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, creator_user_id', 'required'),
			array('creator_user_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('type', 'length', 'max'=>30),
			array('create_time, update_time, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type, creator_user_id, create_time, update_time, description', 'safe', 'on'=>'search'),
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
			'creatorUser' => array(self::BELONGS_TO, 'Goon', 'creator_user_id'),
			'days' => array(self::HAS_MANY, 'Day', 'routine_id'),
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
			'type' => 'Type',
			'creator_user_id' => 'Creator User',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'description' => 'Description',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('creator_user_id',$this->creator_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
