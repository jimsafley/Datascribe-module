<?php

namespace DoctrineProxies\__CG__\Datascribe\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DatascribeRecord extends \Datascribe\Entity\DatascribeRecord implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'item', 'needsReview', 'needsWork', 'values', 'id', 'owner', 'createdBy', 'modifiedBy', 'created', 'modified', 'transcriberNotes', 'reviewerNotes'];
        }

        return ['__isInitialized__', 'item', 'needsReview', 'needsWork', 'values', 'id', 'owner', 'createdBy', 'modifiedBy', 'created', 'modified', 'transcriberNotes', 'reviewerNotes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DatascribeRecord $proxy) {
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
    public function setItem(\Datascribe\Entity\DatascribeItem $item): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItem', [$item]);

        parent::setItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getItem(): \Datascribe\Entity\DatascribeItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItem', []);

        return parent::getItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setNeedsReview(?bool $needsReview): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNeedsReview', [$needsReview]);

        parent::setNeedsReview($needsReview);
    }

    /**
     * {@inheritDoc}
     */
    public function getNeedsReview(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNeedsReview', []);

        return parent::getNeedsReview();
    }

    /**
     * {@inheritDoc}
     */
    public function setNeedsWork(?bool $needsWork): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNeedsWork', [$needsWork]);

        parent::setNeedsWork($needsWork);
    }

    /**
     * {@inheritDoc}
     */
    public function getNeedsWork(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNeedsWork', []);

        return parent::getNeedsWork();
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
    public function setOwner(\Omeka\Entity\User $owner = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner(): ?\Omeka\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\Omeka\Entity\User $createdBy = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?\Omeka\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy(\Omeka\Entity\User $modifiedBy = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy(): ?\Omeka\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setModified(\DateTime $modified): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', [$modified]);

        parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', []);

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $eventArgs): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$eventArgs]);

        parent::prePersist($eventArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function setTranscriberNotes(?string $transcriberNotes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranscriberNotes', [$transcriberNotes]);

        parent::setTranscriberNotes($transcriberNotes);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranscriberNotes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranscriberNotes', []);

        return parent::getTranscriberNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewerNotes(?string $reviewerNotes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewerNotes', [$reviewerNotes]);

        parent::setReviewerNotes($reviewerNotes);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewerNotes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewerNotes', []);

        return parent::getReviewerNotes();
    }

}
