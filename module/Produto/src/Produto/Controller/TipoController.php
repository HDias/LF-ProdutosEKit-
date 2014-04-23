<?php
namespace Produto\Controller;

class TipoController extends CrudController{

    public function __construct(){
        $this->entity = "Produto\Entity\TipoEntity";
        $this->service = "Produto\Service\TipoService";
        $this->form = "Produto\Form\TipoForm";
        $this->controller = "TipoController";
        $this->route = "produto-admin/default";
    	
    }
    
}
    


