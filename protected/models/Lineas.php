<?php

/**
 * This is the model class for table "tbl_lineas".
 *
 * The followings are the available columns in table 'tbl_lineas':
 * @property integer $id
 * @property string $clave
 * @property string $descripcion
 * @property string $imagen
 *
 * The followings are the available model relations:
 * @property TblSublineas[] $tblSublineases
 */
class Lineas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lineas the static model class
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
		return 'tbl_lineas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clave, descripcion', 'required'),
			array('clave, imagen', 'length', 'max'=>45),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clave, descripcion, imagen', 'safe', 'on'=>'search'),
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
			'sublineas' => array(self::HAS_MANY, 'Sublineas', 'linea_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'clave' => 'Clave',
			'descripcion' => 'Descripcion',
			'imagen' => 'Imagen',
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
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('imagen',$this->imagen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function getImage($clave){
           $imagen="";  
           if(file_exists(getcwd()."/lineasImages/".$clave.".jpg")){
                $imagen=Yii::app()->request->baseUrl."/lineasImages/".$clave.".jpg";
           }else{
           	     $imagen="http://placehold.it/200x200";
           }
           return $imagen;

	}
}