<?php

/**
 * This is the model class for table "tbl_productos".
 *
 * The followings are the available columns in table 'tbl_productos':
 * @property integer $id
 * @property integer $sublinea_id
 * @property integer $unidad_id
 * @property string $clave
 * @property string $descripcion_producto
 * @property string $producto
 * @property string $ficha_tecnica
 * @property string $imagen
 * @property integer $vistos
 *
 * The followings are the available model relations:
 * @property TblImagenes[] $tblImagenes
 * @property TblUnidades $unidad
 * @property TblSublineas $sublinea
 */
class Productos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Productos the static model class
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
		return 'tbl_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sublinea_id, unidad_id, clave, descripcion_producto', 'required'),
			array('sublinea_id, unidad_id, vistos', 'numerical', 'integerOnly'=>true),
			array('clave', 'length', 'max'=>30),
			array('descripcion_producto', 'length', 'max'=>200),
			array('producto', 'length', 'max'=>100),
			array('imagen', 'length', 'max'=>50),
			array('ficha_tecnica', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sublinea_id, unidad_id, clave, descripcion_producto, producto, ficha_tecnica, imagen, vistos', 'safe', 'on'=>'search'),
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
			'tblImagenes' => array(self::MANY_MANY, 'TblImagenes', 'tbl_imagenes_has_tbl_productos(producto_id, imagen_id)'),
			'unidad' => array(self::BELONGS_TO, 'TblUnidades', 'unidad_id'),
			'sublinea' => array(self::BELONGS_TO, 'Sublineas', 'sublinea_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sublinea_id' => 'Sublinea',
			'unidad_id' => 'Unidad',
			'clave' => 'Clave',
			'descripcion_producto' => 'Descripcion Producto',
			'producto' => 'Producto',
			'ficha_tecnica' => 'Ficha Tecnica',
			'imagen' => 'Imagen',
			'vistos' => 'Vistos',
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
		$criteria->compare('sublinea_id',$this->sublinea_id);
		$criteria->compare('unidad_id',$this->unidad_id);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('descripcion_producto',$this->descripcion_producto,true);
		$criteria->compare('producto',$this->producto,true);
		$criteria->compare('ficha_tecnica',$this->ficha_tecnica,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('vistos',$this->vistos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}