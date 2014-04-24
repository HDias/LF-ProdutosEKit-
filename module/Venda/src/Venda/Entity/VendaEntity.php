<?php
namespace Venda\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * @ORM\Table(name="venda")
 * @ORM\Entity
 */
class VendaEntity{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_compra", type="datetime", nullable=false)
     */
    private $dataCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=false)
     */
    private $dataEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total_kit", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorTotalKit;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total_frete", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorTotalFrete;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Produto\Entity\ClienteEntity")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    private $idCliente;
    
    public function __construct(array $options = array()){
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
        
        $this->dataCompra = new \DateTime("now", new \DateTimeZone('America/Araguaina'));
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDataCompra()
    {
        return $this->dataCompra;
    }

    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    public function getValorTotalKit()
    {
        return $this->valorTotalKit;
    }

    public function getValorTotalFrete()
    {
        return $this->valorTotalFrete;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setDataCompra($dataCompra)
    {
        $this->dataCompra = $dataCompra;
    }

    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;
    }

    public function setValorTotalKit($valorTotalKit)
    {
        $this->valorTotalKit = $valorTotalKit;
    }

    public function setValorTotalFrete($valorTotalFrete)
    {
        $this->valorTotalFrete = $valorTotalFrete;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function setIdKit($idKit)
    {
        $this->idKit = $idKit;
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
