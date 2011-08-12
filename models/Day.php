<?php

/**
 * This is the model class for table "day".
 *
 * The followings are the available columns in table 'day':
 * @property integer $id
 * @property integer $routine_id
 * @property integer $exercise_id
 * @property string $day
 * @property integer $sort
 *
 * The followings are the available model relations:
 * @property Routine $routine
 * @property Exercise $exercise
 */
class Day extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Day the static model class
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
		return 'day';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('routine_id, exercise_id, day, sort', 'required'),
			array('routine_id, exercise_id, sort', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, routine_id, exercise_id, day, sort', 'safe', 'on'=>'search'),
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
			'routine' => array(self::BELONGS_TO, 'Routine', 'routine_id'),
			'exercise' => array(self::BELONGS_TO, 'Exercise', 'exercise_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'routine_id' => 'Routine',
			'exercise_id' => 'Exercise',
			'day' => 'Day',
			'sort' => 'Sort',
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
		$criteria->compare('routine_id',$this->routine_id);
		$criteria->compare('exercise_id',$this->exercise_id);
		$criteria->compare('day',$this->day,true);
		$criteria->compare('sort',$this->sort);
		$criteria->condition='routine_id=:routineID';
		$criteria->params=array(':routineID'=>$this->routine_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
    }

    /**
     * For Drop Down Box in the view
     */

    public function getDayOptions() 
    {
        return array(
            'Sunday'=>'Sunday',
            'Monday'=>'Monday',
            'Tuesday'=>'Tuesday',
            'Wednesday'=>'Wednesday',
            'Thursday'=>'Thursday',
            'Friday'=>'Friday',
            'Saturday'=>'Saturday',
        );
    }

}
