<?php
namespace Produto\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Produtos
 *
 * @ORM\Table(name="produtos")
 * @ORM\Entity
 */
class ProdutoEntity{
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem", type="string", length=255, nullable=true)
     */
    private $imagem;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var \Tipo
     *
     * @ORM\ManyToOne(targetEntity="Produto\Entity\TipoEntity")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     */
    private $tipo;
    
    public function __construct(array $options = array()){
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
        
        $this->dateCreate = new \DateTime("now", new \DateTimeZone('America/Araguaina'));
        
    }
    
    public function getId(){
    	return $this->id;
    }    
    public function setId($id){
    	$this->id = $id;
    	return $this;
    }
    
    public function getNome(){
    	return $this->nome;
    }    
    public function setNome($nome){
    	$this->nome = $nome;
    	return $this;
    }
    
    public function getQuantidade(){
    	return $this->quantidade;
    }    
    public function setQuantidade($quantidade){
    	$this->quantidade = $quantidade;
    	return $this;
    }
    
    public function getValor(){
    	return $this->valor;
    }
    public function setValor($valor){
    	$this->valor = $valor;
    	return $this;
    }
    
    public function getDescricao(){
    	return $this->descricao;
    }
    public function setDescricao($descricao){
    	$this->descricao = $descricao;
    	return $this;
    }
    
    public function getDateCreate(){
    	return $this->dateCreate;
    }
    public function setDateCreate($dateCreate){
    	$this->dateCreate = $dateCreate;
    	return $this;
    }
    
    public function getImagem(){
    	return $this->imagem;
    }
    public function setImagem($imagem){
    	$this->imagem = $imagem;
    	return $this;
    }
    
    public function getTipo(){
    	return $this->tipo;
    }
    public function setTipo($tipo){
    	$this->tipo = $tipo;
    	return $this;
    }
    
    public function toArray(){
        return array(
        	'id' => $this->id,
            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'valor' => $this->valor,
            'descricao' => $this->descricao,
            'imagem' => $this->imagem,
            'tipo' => $this->tipo->getId()
        );
    }
}
