<?php

/**
 * This is the model class for table "tbl_contacto".
 *
 * The followings are the available columns in table 'tbl_contacto':
 * @property integer $id
 * @property string $nombre
 * @property string $email
 * @property string $telefono
 * @property string $comentarios
 * @property string $otros
 *
 * The followings are the available model relations:
 * @property TblProductos[] $tblProductoses
 */
class Contacto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contacto the static model class
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
		return 'tbl_contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, comentarios, otros', 'required'),
			array('nombre, email, telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, email, telefono, comentarios, otros', 'safe', 'on'=>'search'),
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
			'Productos' => array(self::MANY_MANY, 'Productos', 'tbl_productos_has_tbl_contacto(contacto_id, producto_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'comentarios' => 'Comentarios',
			'otros' => 'Otros',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('otros',$this->otros,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getProductos($model){
        
         $Productos="";
         $count=1;
        foreach ($model->Productos as $key => $value) {
        	$Productos.= $count.".-  Clave: ".$value->clave.' Producto:'.$value->producto.". <br>";
        	$count++;

        }


        return $Productos;
 
	}
}