<?php
namespace Venda\Controller;

class VendaController extends CrudController{
    public function __construct(){
        $this->entity = "Venda\Entity\VendaEntity";
    }   
}
