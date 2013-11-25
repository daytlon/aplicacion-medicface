<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property integer $ciudad_id
 * @property integer $Paciente_id
 * @property integer $Rol_id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $genero
 * @property string $fecha_nacimiento
 * @property string $username
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Medicamento[] $medicamentos
 * @property Recomendacion[] $recomendacions
 * @property Ciudad $ciudad
 * @property Paciente $paciente
 * @property Rol $rol
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, ciudad_id, Paciente_id, Rol_id, nombre, apellido, direccion, telefono, email, genero, fecha_nacimiento, username, password', 'required'),
			array('id, ciudad_id, Paciente_id, Rol_id', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, direccion, genero, username, password', 'length', 'max'=>45),
			array('email', 'length', 'max'=>255),
			array('email', 'email'),
			array('id', 'length', 'min'=>8, 'max'=>11),
			array('telefono', 'numerical'),
			array('telefono', 'length', 'min'=>7, 'max'=>10),
			#array('telefono', 'Min'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ciudad_id, Paciente_id, Rol_id, nombre, apellido, direccion, telefono, email, genero, fecha_nacimiento, username, password', 'safe', 'on'=>'search'),
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
			'medicamentos' => array(self::HAS_MANY, 'Medicamento', 'usuario_id'),
			'recomendacions' => array(self::HAS_MANY, 'Recomendacion', 'usuario_id'),
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id'),
			'paciente' => array(self::BELONGS_TO, 'Paciente', 'Paciente_id'),
			'rol' => array(self::BELONGS_TO, 'Rol', 'Rol_id'),
		);
	}

	protected function beforeSave() {
       $this->password = sha1($this->password);
       return parent::beforeSave();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identificacion',
			'ciudad_id' => 'Ciudad',
			'Paciente_id' => 'Paciente',
			'Rol_id' => 'Rol',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'genero' => 'Genero',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'username' => 'Username',
			'password' => 'Password',
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
		$criteria->compare('Paciente_id',$this->Paciente_id);
		$criteria->compare('Rol_id',$this->Rol_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
