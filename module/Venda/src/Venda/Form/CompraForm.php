<?php
namespace Kit\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;

class CompraForm extends Form{

    protected $cliente;
    protected $kit; 

    function __construct($name = null, array $cliente = null, array $kit = null){
        parent::__construct($name);
        $this->cliente = $cliente;
        $this->kit = $kit;       
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden'
        ));
        
        $this->add(array(
            'name' => 'cLiente',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Digite aqui...',
                'maxlength' => '100'
            ),
            'options' => array(
                'label' => 'Cliente: '
            )
        ));
        
        $this->add(array(
            'name' => 'quantidade',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Digite aqui...',
                'maxlength' => '100'
            ),
            'options' => array(
                'label' => 'Quantidade: '
            )
        ));
        $this->add(array(
            'name' => 'tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo:',
                'empty_option' => 'Por favor escolha',
                'value_options' => $tipos,
            ),
            'attributes' => array(
            		'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'descricao',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Digite aqui...',
                'maxlength' => '100'
            ),
            'options' => array(
                'label' => 'Descrição: '
            )
        ));
        
        $this->add(array(
            'name' => 'valor',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Digite aqui...',
                'maxlength' => '100'
            ),
            'options' => array(
                'label' => 'Valor: '
            )
        ));
        
        $this->add(array(
            'name' => 'imagem',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Digite aqui...',
                'maxlength' => '100'
            ),
            'options' => array(
                'label' => 'Imagem: '
            )
        ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'id' => 'submitbutton',
                'class' => 'btn btn-primary',
                'value' => 'salvar'
            )
        ));
    }
}
      
