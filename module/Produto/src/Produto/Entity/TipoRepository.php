<?php
namespace Produto\Entity;

use Doctrine\ORM\EntityRepository;
class TipoRepository extends EntityRepository{
    public function buscaTipo(){        
        $entities = $this->findAll();
        $array = array();
        
        foreach($entities as $entity){
        	$array[$entity->getId()]=$entity->getNome();
        }
        
        return $array;
    }
}

