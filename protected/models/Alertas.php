<?php

/**
 * This is the model class for table "alertas".
 *
 * The followings are the available columns in table 'alertas':
 * @property integer $id
 * @property integer $Paciente_id
 * @property string $asunto
 * @property string $descripcion
 * @property string $fecha
 * @property string $hora
 * @property integer $prioridad
 * @property string $dato1
 * @property string $dato2
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 */
class Alertas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alertas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Paciente_id, asunto, descripcion, fecha, hora, prioridad', 'required'),
			array('Paciente_id, prioridad', 'numerical', 'integerOnly'=>true),
			array('asunto', 'length', 'max'=>45),
			array('dato1, dato2', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Paciente_id, asunto, descripcion, fecha, hora, prioridad, dato1, dato2', 'safe', 'on'=>'search'),
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
			'paciente' => array(self::BELONGS_TO, 'Paciente', 'Paciente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Paciente_id' => 'Paciente',
			'asunto' => 'Asunto',
			'descripcion' => 'Descripcion',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'prioridad' => 'Prioridad',
			'dato1' => 'Dato1',
			'dato2' => 'Dato2',
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
		$criteria->compare('Paciente_id',$this->Paciente_id);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('prioridad',$this->prioridad);
		$criteria->compare('dato1',$this->dato1,true);
		$criteria->compare('dato2',$this->dato2,true);
		$criteria->order='id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alertas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
