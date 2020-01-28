<?php

namespace DoctrineProxies\__CG__\Datascribe\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DatascribeField extends \Datascribe\Entity\DatascribeField implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
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
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'dataset', 'position', 'isPrimary', 'dataType', 'values', 'id', 'name', 'description', 'data'];
        }

        return ['__isInitialized__', 'dataset', 'position', 'isPrimary', 'dataType', 'values', 'id', 'name', 'description', 'data'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DatascribeField $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setDataset(\Datascribe\Entity\DatascribeDataset $dataset): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataset', [$dataset]);

        parent::setDataset($dataset);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataset(): \Datascribe\Entity\DatascribeDataset
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataset', []);

        return parent::getDataset();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition(int $position): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPrimary(bool $isPrimary): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPrimary', [$isPrimary]);

        parent::setIsPrimary($isPrimary);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPrimary(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPrimary', []);

        return parent::getIsPrimary();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataType(?string $dataType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataType', [$dataType]);

        parent::setDataType($dataType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataType', []);

        return parent::getDataType();
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValues', []);

        return parent::getValues();
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setData(array $data): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', [$data]);

        parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', []);

        return parent::getData();
    }

}
