<?php
namespace Venda\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * @ORM\Table(name="kit")
 * @ORM\Entity
 */
class KitEntity{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=false)
     */
    private $quantidade;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_frete", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorFrete;

    /**
     * @var \Produtos
     *
     * @ORM\ManyToOne(targetEntity="Produto\Entity\ProdutoEntity")
     * @ORM\JoinColumn(name="id_produto", referencedColumnName="id")
     */
    private $idProduto;
    
    /**
     * @var \Vendas
     *
     * @ORM\ManyToOne(targetEntity="Venda\Entity\VendaEntity")
     * @ORM\JoinColumn(name="id_venda", referencedColumnName="id")
     */
    private $idVenda;
    
    public function __construct(array $options = array()){
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getValorFrete()
    {
        return $this->valorFrete;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    public function setValorFrete($valorFrete)
    {
        $this->valorFrete = $valorFrete;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }
}
