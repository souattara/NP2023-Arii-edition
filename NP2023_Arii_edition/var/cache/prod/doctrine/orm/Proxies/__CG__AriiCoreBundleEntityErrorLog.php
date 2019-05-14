<?php

namespace Proxies\__CG__\Arii\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ErrorLog extends \Arii\CoreBundle\Entity\ErrorLog implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'username', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'id', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'logtime', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'ip', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'action', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'status', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'module', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'message', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'code', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'file', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'line', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'trace'];
        }

        return ['__isInitialized__', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'username', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'id', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'logtime', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'ip', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'action', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'status', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'module', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'message', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'code', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'file', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'line', '' . "\0" . 'Arii\\CoreBundle\\Entity\\ErrorLog' . "\0" . 'trace'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ErrorLog $proxy) {
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
    public function setLogtime($logtime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogtime', [$logtime]);

        return parent::setLogtime($logtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogtime', []);

        return parent::getLogtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', [$ip]);

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', []);

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setModule($module)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModule', [$module]);

        return parent::setModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function getModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModule', []);

        return parent::getModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setLine($line)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLine', [$line]);

        return parent::setLine($line);
    }

    /**
     * {@inheritDoc}
     */
    public function getLine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLine', []);

        return parent::getLine();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrace($trace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrace', [$trace]);

        return parent::setTrace($trace);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrace', []);

        return parent::getTrace();
    }

}
