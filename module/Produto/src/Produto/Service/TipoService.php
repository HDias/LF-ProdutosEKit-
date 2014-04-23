<?php
namespace Produto\Service;

use Doctrine\ORM\EntityManager;
class TipoService extends AbstractService{

    public function __construct(EntityManager $em){
        parent::__construct($em);
        $this->entity = "Produto\Entity\TipoEntity";
    }
}
