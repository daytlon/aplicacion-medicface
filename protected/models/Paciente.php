<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id
 * @property integer $ciudad_id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $fecha_nacimiento
 * @property string $telefono
 * @property string $genero
 * @property double $peso
 * @property double $estatura
 * @property string $grupo_sanguineo
 *
 * The followings are the available model relations:
 * @property Alertas[] $alertases
 * @property HistorialEjercicio[] $historialEjercicios
 * @property HistorialPeso[] $historialPesos
 * @property HistorialPresionArterial[] $historialPresionArterials
 * @property Medicamento[] $medicamentos
 * @property Ciudad $ciudad
 * @property Recomendacion[] $recomendacions
 * @property Usuario[] $usuarios
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, ciudad_id, nombre, apellido, direccion, fecha_nacimiento, telefono, genero, peso, estatura, grupo_sanguineo', 'required'),
			array('id, ciudad_id', 'numerical', 'integerOnly'=>true),
			array('telefono, peso, estatura', 'numerical'),
			array('nombre, apellido, direccion', 'length', 'max'=>45),
			array('genero', 'length', 'max'=>1),
			array('grupo_sanguineo', 'length', 'max'=>15),
			array('id', 'length', 'min'=>8, 'max'=>11),
			array('peso, estatura', 'length', 'max'=>4),
			array('telefono', 'length', 'min'=>7, 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ciudad_id, nombre, apellido, direccion, fecha_nacimiento, telefono, genero, peso, estatura, grupo_sanguineo', 'safe', 'on'=>'search'),
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
			'alertases' => array(self::HAS_MANY, 'Alertas', 'Paciente_id'),
			'historialEjercicios' => array(self::HAS_MANY, 'HistorialEjercicio', 'Paciente_id'),
			'historialPesos' => array(self::HAS_MANY, 'HistorialPeso', 'Paciente_id'),
			'historialPresionArterials' => array(self::HAS_MANY, 'HistorialPresionArterial', 'Paciente_id'),
			'medicamentos' => array(self::HAS_MANY, 'Medicamento', 'Paciente_id'),
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id'),
			'recomendacions' => array(self::HAS_MANY, 'Recomendacion', 'Paciente_id'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'Paciente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identificacion',
			'ciudad_id' => 'Ciudad',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'telefono' => 'Telefono',
			'genero' => 'Genero',
			'peso' => 'Peso',
			'estatura' => 'Estatura',
			'grupo_sanguineo' => 'Grupo Sanguineo',
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
		$criteria->compare('ciudad_id',$this->ciudad_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('peso',$this->peso);
		$criteria->compare('estatura',$this->estatura);
		$criteria->compare('grupo_sanguineo',$this->grupo_sanguineo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
