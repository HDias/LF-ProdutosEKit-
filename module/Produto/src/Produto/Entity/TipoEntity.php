<?php
namespace Produto\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Tipo
 *
 * @ORM\Table(name="tipo")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Produto\Entity\TipoRepository")
 */
class TipoEntity{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    public function __construct($options = null){
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
    }
    
    public function getId()
    {
    	return $this->id;
    }
    
    public function setId($id)
    {
    	$this->id = $id;
    	return $this;
    }
    
    public function getNome()
    {
    	return $this->nome;
    }
    
    public function setNome($nome)
    {
    	$this->nome = $nome;
    	return $this;
    }
    
    public function toArray(){
        $arrayUser = new ClassMethods();
    	return $arrayUser->extract($this);
    }
    
    
}
