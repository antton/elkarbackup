<?php

namespace Proxies\__CG__\Binovo\ElkarBackupBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Binovo\ElkarBackupBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'description', 'id', 'isActive', 'jobs', 'name', 'postScripts', 'url', 'preScripts', 'quota', 'logEntry', 'owner', 'sshArgs', 'rsyncShortArgs', 'rsyncLongArgs'];
        }

        return ['__isInitialized__', 'description', 'id', 'isActive', 'jobs', 'name', 'postScripts', 'url', 'preScripts', 'quota', 'logEntry', 'owner', 'sshArgs', 'rsyncShortArgs', 'rsyncLongArgs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function hasBackups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasBackups', []);

        return parent::hasBackups();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function addJob(\Binovo\ElkarBackupBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJob', [$jobs]);

        return parent::addJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJob(\Binovo\ElkarBackupBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJob', [$jobs]);

        return parent::removeJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobs', []);

        return parent::getJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogEntry(\Binovo\ElkarBackupBundle\Entity\LogRecord $logEntry = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogEntry', [$logEntry]);

        return parent::setLogEntry($logEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogEntry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogEntry', []);

        return parent::getLogEntry();
    }

    /**
     * {@inheritDoc}
     */
    public function getDiskUsage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiskUsage', []);

        return parent::getDiskUsage();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuota($quota)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuota', [$quota]);

        return parent::setQuota($quota);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuota()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuota', []);

        return parent::getQuota();
    }

    /**
     * {@inheritDoc}
     */
    public function addPostScript(\Binovo\ElkarBackupBundle\Entity\Script $postScripts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPostScript', [$postScripts]);

        return parent::addPostScript($postScripts);
    }

    /**
     * {@inheritDoc}
     */
    public function removePostScript(\Binovo\ElkarBackupBundle\Entity\Script $postScripts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePostScript', [$postScripts]);

        return parent::removePostScript($postScripts);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostScripts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostScripts', []);

        return parent::getPostScripts();
    }

    /**
     * {@inheritDoc}
     */
    public function addPreScript(\Binovo\ElkarBackupBundle\Entity\Script $preScripts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPreScript', [$preScripts]);

        return parent::addPreScript($preScripts);
    }

    /**
     * {@inheritDoc}
     */
    public function removePreScript(\Binovo\ElkarBackupBundle\Entity\Script $preScripts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePreScript', [$preScripts]);

        return parent::removePreScript($preScripts);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreScripts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreScripts', []);

        return parent::getPreScripts();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Binovo\ElkarBackupBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setSshArgs($sshArgs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSshArgs', [$sshArgs]);

        return parent::setSshArgs($sshArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getSshArgs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSshArgs', []);

        return parent::getSshArgs();
    }

    /**
     * {@inheritDoc}
     */
    public function setRsyncShortArgs($rsyncShortArgs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRsyncShortArgs', [$rsyncShortArgs]);

        return parent::setRsyncShortArgs($rsyncShortArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getRsyncShortArgs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRsyncShortArgs', []);

        return parent::getRsyncShortArgs();
    }

    /**
     * {@inheritDoc}
     */
    public function setRsyncLongArgs($rsyncLongArgs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRsyncLongArgs', [$rsyncLongArgs]);

        return parent::setRsyncLongArgs($rsyncLongArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getRsyncLongArgs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRsyncLongArgs', []);

        return parent::getRsyncLongArgs();
    }

}