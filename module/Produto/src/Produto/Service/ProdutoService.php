<?php
namespace Produto\Service;

use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ClassMethods;
class ProdutoService extends AbstractService{

    function __construct(EntityManager $em){
        parent::__construct($em);
        $this->entity = "Produto\Entity\ProdutoEntity";
    }
    public function insert(array $data){
    	$entity = new $this->entity($data);
    
    	$tipo = $this->em->getReference("Produto\Entity\TipoEntity",$data['tipo']);
    	$entity->setTipo($tipo); // Injetando entidade carregada
    	
    	$this->em->persist($entity);
    	$this->em->flush();
    	return $entity;
    }
    
    public function update(array $data){
    	$entity = $this->em->getReference($this->entity, $data['id']);
    
    	$hydrate =new ClassMethods();
    	$hydrate->hydrate($data, $entity);
    	//(new Hydrator\ClassMethods())->hydrate($data, $entity);
    
    	$tipo = $this->em->getReference("Produto\Entity\TipoEntity",$data['tipo']);
    	$entity->setTipo($tipo); // Injetando entidade carregada
    
    	$this->em->persist($entity);
    	$this->em->flush();
    	return $entity;
    }
}
