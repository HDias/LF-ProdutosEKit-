<?php

namespace DoctrineORMModule\Proxy\__CG__\Venda\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VendaEntity extends \Venda\Entity\VendaEntity implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'dataCompra', 'dataEntrega', 'valorTotalKit', 'valorTotalFrete', 'idCliente');
        }

        return array('__isInitialized__', 'id', 'dataCompra', 'dataEntrega', 'valorTotalKit', 'valorTotalFrete', 'idCliente');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VendaEntity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCompra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCompra', array());

        return parent::getDataCompra();
    }

    /**
     * {@inheritDoc}
     */
    public function getDataEntrega()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataEntrega', array());

        return parent::getDataEntrega();
    }

    /**
     * {@inheritDoc}
     */
    public function getValorTotalKit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorTotalKit', array());

        return parent::getValorTotalKit();
    }

    /**
     * {@inheritDoc}
     */
    public function getValorTotalFrete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorTotalFrete', array());

        return parent::getValorTotalFrete();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCliente', array());

        return parent::getIdCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCompra($dataCompra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCompra', array($dataCompra));

        return parent::setDataCompra($dataCompra);
    }

    /**
     * {@inheritDoc}
     */
    public function setDataEntrega($dataEntrega)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataEntrega', array($dataEntrega));

        return parent::setDataEntrega($dataEntrega);
    }

    /**
     * {@inheritDoc}
     */
    public function setValorTotalKit($valorTotalKit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorTotalKit', array($valorTotalKit));

        return parent::setValorTotalKit($valorTotalKit);
    }

    /**
     * {@inheritDoc}
     */
    public function setValorTotalFrete($valorTotalFrete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorTotalFrete', array($valorTotalFrete));

        return parent::setValorTotalFrete($valorTotalFrete);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCliente($idCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCliente', array($idCliente));

        return parent::setIdCliente($idCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdKit($idKit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdKit', array($idKit));

        return parent::setIdKit($idKit);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}
