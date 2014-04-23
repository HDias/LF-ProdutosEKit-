<?php
namespace Produto\Form;

use Zend\Form\Form;

class TipoForm extends Form{
	public function __construct($name = null)
	{
		parent::__construct('tipoform');

		$this->setAttribute('method', 'post');
		
		$this->add(array(
				'name' => 'id',
				'type' => 'Hidden',
		));
		

		$this->add(array(
				'name' => 'nome',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Tipo: ',
				),
		));
	
		$this->add(array(
				'name' => 'submit',
				'type' => 'Submit',
				'attributes' => array(
						'id' => 'submitbutton',
						'class' =>'btn btn-primary',
				        'value' => 'salvar',
				),
		));
	}
}