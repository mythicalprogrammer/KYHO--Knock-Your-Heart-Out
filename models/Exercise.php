<?php

/**
 * This is the model class for table "exercise".
 *
 * The followings are the available columns in table 'exercise':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $preparation
 * @property string $execution
 * @property string $note
 * @property string $video_link
 * @property string $pic_link
 *
 * The followings are the available model relations:
 * @property Day[] $days
 */
class Exercise extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Exercise the static model class
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
			array('name, preparation, execution', 'required'),
			array('name', 'length', 'max'=>256),
			array('video_link, pic_link', 'length', 'max'=>100),
			array('description, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, preparation, execution, note, video_link, pic_link', 'safe', 'on'=>'search'),
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
			'days' => array(self::HAS_MANY, 'Day', 'exercise_id'),
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
			'description' => 'Description',
			'preparation' => 'Preparation',
			'execution' => 'Execution',
			'note' => 'Note',
			'video_link' => 'Video Link',
			'pic_link' => 'Pic Link',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('preparation',$this->preparation,true);
		$criteria->compare('execution',$this->execution,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('video_link',$this->video_link,true);
		$criteria->compare('pic_link',$this->pic_link,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}