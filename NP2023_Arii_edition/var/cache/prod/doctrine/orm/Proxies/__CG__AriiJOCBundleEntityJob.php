<?php

namespace Proxies\__CG__\Arii\JOCBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Job extends \Arii\JOCBundle\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'spooler_id', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'job_name', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'title', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'state', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'all_steps', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'all_tasks', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'ordered', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'has_description', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'tasks', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'in_period', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'enabled', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'last_write_time', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'last_warning', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'next_start_time', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'process_class'];
        }

        return ['__isInitialized__', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'spooler_id', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'job_name', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'title', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'state', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'all_steps', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'all_tasks', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'ordered', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'has_description', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'tasks', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'in_period', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'enabled', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'last_write_time', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'last_warning', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'next_start_time', '' . "\0" . 'Arii\\JOCBundle\\Entity\\Job' . "\0" . 'process_class'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Job $proxy) {
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
    public function setSpoolerId($spoolerId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpoolerId', [$spoolerId]);

        return parent::setSpoolerId($spoolerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpoolerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpoolerId', []);

        return parent::getSpoolerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setJobName($jobName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJobName', [$jobName]);

        return parent::setJobName($jobName);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobName', []);

        return parent::getJobName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllSteps($allSteps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllSteps', [$allSteps]);

        return parent::setAllSteps($allSteps);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllSteps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllSteps', []);

        return parent::getAllSteps();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllTasks($allTasks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllTasks', [$allTasks]);

        return parent::setAllTasks($allTasks);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllTasks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllTasks', []);

        return parent::getAllTasks();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdered($ordered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdered', [$ordered]);

        return parent::setOrdered($ordered);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdered', []);

        return parent::getOrdered();
    }

    /**
     * {@inheritDoc}
     */
    public function setHasDescription($hasDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHasDescription', [$hasDescription]);

        return parent::setHasDescription($hasDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getHasDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasDescription', []);

        return parent::getHasDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasks($tasks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasks', [$tasks]);

        return parent::setTasks($tasks);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasks', []);

        return parent::getTasks();
    }

    /**
     * {@inheritDoc}
     */
    public function setInPeriod($inPeriod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInPeriod', [$inPeriod]);

        return parent::setInPeriod($inPeriod);
    }

    /**
     * {@inheritDoc}
     */
    public function getInPeriod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInPeriod', []);

        return parent::getInPeriod();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastWriteTime($lastWriteTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastWriteTime', [$lastWriteTime]);

        return parent::setLastWriteTime($lastWriteTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastWriteTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastWriteTime', []);

        return parent::getLastWriteTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastWarning($lastWarning)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastWarning', [$lastWarning]);

        return parent::setLastWarning($lastWarning);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastWarning()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastWarning', []);

        return parent::getLastWarning();
    }

    /**
     * {@inheritDoc}
     */
    public function setNextStartTime($nextStartTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNextStartTime', [$nextStartTime]);

        return parent::setNextStartTime($nextStartTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getNextStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNextStartTime', []);

        return parent::getNextStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessClass($processClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessClass', [$processClass]);

        return parent::setProcessClass($processClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessClass', []);

        return parent::getProcessClass();
    }

}
