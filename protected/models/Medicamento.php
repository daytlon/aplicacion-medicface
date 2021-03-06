<?php

/**
 * This is the model class for table "medicamento".
 *
 * The followings are the available columns in table 'medicamento':
 * @property integer $id
 * @property integer $Paciente_id
 * @property integer $usuario_id
 * @property string $fecha_agregado
 * @property string $nombre
 * @property double $dosis
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 * @property Usuario $usuario
 */
class Medicamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medicamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Paciente_id, usuario_id, fecha_agregado, nombre, dosis, descripcion', 'required'),
			array('Paciente_id, usuario_id', 'numerical', 'integerOnly'=>true),
			array('dosis', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Paciente_id, usuario_id, fecha_agregado, nombre, dosis, descripcion', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
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
			'usuario_id' => 'Medico',
			'fecha_agregado' => 'Fecha Agregado',
			'nombre' => 'Nombre',
			'dosis' => 'Dosis',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('usuario_id',$this->usuario_id);
		$criteria->compare('fecha_agregado',$this->fecha_agregado,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('dosis',$this->dosis);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medicamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
