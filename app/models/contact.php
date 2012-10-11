<?php
class Contact extends AppModel {
	var $name = 'Contact';
	var $_schema = array(
		'nombre' =>array('type'=>'string', 'length'=>100),
		'email' =>array('type'=>'string', 'length'=>255),
		'empresa' =>array('type'=>'string', 'length'=>255),
		'mensaje' =>array('type'=>'text')
	);
	var $skipValidation = true;
	var $useTable = false;
	var $validate = array(
		'nombre' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Escriba su nombre por favor.'
		),
		'mail' => array(
			'rule'=>'blank',
			'required' => true,
			'allowEmpty' => true,
			'message' => 'Non-Human.'
		),
		'email' => array(
			'format'=>array(
				'rule' => 'email',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Ingrese una dirección de correo válida.'
			),
			'vacio' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Este campo no puede quedar vacío.'
			)		
		),
		'mensaje' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => '¡No ha escrito su mensaje!'
		)
	);
}
?>