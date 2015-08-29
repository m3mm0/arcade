<?php

/**
 * This is the model class for table "avisos".
 *
 * The followings are the available columns in table 'avisos':
 * @property integer $ID
 * @property string $TIPO
 * @property string $TEXTO
 * @property string $HORA
 * @property string $MINUTO
 * @property string $DESCOLGAR_SN
 * @property integer $DESCOLGAR
 * @property string $ESTADO
 * @property string $CREADO_POR
 * @property string $FECHA_CREACION
 * @property string $EDITADO_POR
 * @property string $FECHA_EDICION
 */
class Avisos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Avisos the static model class
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
		return 'avisos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TEXTO', 'required'),
			//array('DESCOLGAR', 'numerical', 'integerOnly'=>true),
			array('TIPO', 'length', 'max'=>18),
			array('TEXTO', 'length', 'max'=>4000),
			array('HORA, MINUTO, DESCOLGAR_SN', 'length', 'max'=>2),
			array('ESTADO', 'length', 'max'=>10),
			array('CREADO_POR, EDITADO_POR', 'length', 'max'=>500),
			array('FECHA_CREACION, FECHA_EDICION', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, TIPO, TEXTO, HORA, MINUTO, DESCOLGAR_SN, DESCOLGAR, ESTADO, CREADO_POR, FECHA_CREACION, EDITADO_POR, FECHA_EDICION', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => '#',
			'TIPO' => 'Tipo',
			'TEXTO' => 'Texto',
			'HORA' => 'Hora',
			'MINUTO' => 'Minuto',
			'DESCOLGAR_SN' => 'Descolgar aviso?',
			'DESCOLGAR' => 'Descolgar',
			'ESTADO' => 'Estado',
			'CREADO_POR' => 'Creado Por',
			'FECHA_CREACION' => 'Fecha Creacion',
			'EDITADO_POR' => 'Editado Por',
			'FECHA_EDICION' => 'Fecha Edicion',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('TIPO',$this->TIPO,true);
		$criteria->compare('TEXTO',$this->TEXTO,true);
		$criteria->compare('HORA',$this->HORA,true);
		$criteria->compare('MINUTO',$this->MINUTO,true);
		$criteria->compare('DESCOLGAR_SN',$this->DESCOLGAR_SN,true);
		$criteria->compare('DESCOLGAR',$this->DESCOLGAR);
		$criteria->compare('ESTADO',$this->ESTADO,true);
		$criteria->compare('CREADO_POR',$this->CREADO_POR,true);
		$criteria->compare('FECHA_CREACION',$this->FECHA_CREACION,true);
		$criteria->compare('EDITADO_POR',$this->EDITADO_POR,true);
		$criteria->compare('FECHA_EDICION',$this->FECHA_EDICION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
	        'pagination' => array(
            	'pageSize' => 70,
    	    ),
        	'sort' => array('defaultOrder' => 'ID DESC'),				
		));
	}

	public function beforeSave()
	{
		if ($this->DESCOLGAR == 'SI'){
			$this->DESCOLGAR = mktime($_POST['DESCOLGAR_HORA'],$_POST['DESCOLGAR_MIN'],'00',$_POST['DESCOLGAR_MES'],$_POST['DESCOLGAR_DIA'],$_POST['DESCOLGAR_AÑO']) ;
		}else{
			$this->DESCOLGAR =null;
		}		
		return parent::beforeSave();
	}

	public function afterFind()
	{
		/*if ( $this->DESCOLGAR != null) {
    	 $this->DESCOLGAR =  date('Y-m-d-H-i', $this->DESCOLGAR);
    	}*/   	
        return parent::afterFind();
	}
}