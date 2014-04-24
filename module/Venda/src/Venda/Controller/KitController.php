<?php
namespace Venda\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class KitController extends AbstractActionController{

    public function kitAction(){
        $id = $this->params()->fromRoute('id', 0);
        
        $list = $this->getEm()
                     ->getRepository('Venda\Entity\KitEntity');
        $result = $list->findBy(array('idVenda' => $id));
        
        return new ViewModel(array(
            'lista' => $result,
            'nome' => $this->params()->fromRoute('name', false),
            'id' => $id,
        ));
    }

    /**
     *
     * @return EntityManager
     */
    protected function getEm(){
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        return $em;
    }
}