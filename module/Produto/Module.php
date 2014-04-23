<?php
namespace Produto;

class Module{
    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig(){
        return array(
              'factories' => array(
        	       "Produto\Service\TipoService" => function($sm){
        	           return new Service\TipoService($sm->get('Doctrine\ORM\EntityManager')) ; 
        	       },
        	       "Produto\Service\ProdutoService" => function($sm){
        	       	return new Service\ProdutoService($sm->get('Doctrine\ORM\EntityManager')) ;
        	       },
        	       "Produto\Form\ProdutoForm" => function($sm){
            	       	$em = $sm->get('Doctrine\ORM\EntityManager');
            	       	$repoTipos = $em->getRepository('Produto\Entity\TipoEntity');
            	       	$tipos = $repoTipos->buscaTipo();
            	                	       
            	       	return new Form\ProdutoForm("produtoform", $tipos);
        	       },
            )  
        );
    }
}
