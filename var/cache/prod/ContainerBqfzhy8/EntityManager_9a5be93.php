<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9a5be93 = null;
    private $initializer9a5be93 = null;
    private static $publicProperties9a5be93 = [
        
    ];
    public function getConnection()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getConnection', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getMetadataFactory', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getExpressionBuilder', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'beginTransaction', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getCache', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'transactional', array('func' => $func), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->transactional($func);
    }
    public function commit()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'commit', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->commit();
    }
    public function rollback()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'rollback', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getClassMetadata', array('className' => $className), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'createQuery', array('dql' => $dql), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'createNamedQuery', array('name' => $name), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'createQueryBuilder', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'flush', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'clear', array('entityName' => $entityName), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->clear($entityName);
    }
    public function close()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'close', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->close();
    }
    public function persist($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'persist', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'remove', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'refresh', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'detach', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'merge', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'contains', array('entity' => $entity), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getEventManager', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getConfiguration', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'isOpen', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getUnitOfWork', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getProxyFactory', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'initializeObject', array('obj' => $obj), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'getFilters', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'isFiltersStateClean', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'hasFilters', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return $this->valueHolder9a5be93->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9a5be93 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9a5be93) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a5be93 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9a5be93->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__get', ['name' => $name], $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        if (isset(self::$publicProperties9a5be93[$name])) {
            return $this->valueHolder9a5be93->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a5be93;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder9a5be93;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a5be93;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder9a5be93;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__isset', array('name' => $name), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a5be93;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9a5be93;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__unset', array('name' => $name), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a5be93;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9a5be93;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__clone', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        $this->valueHolder9a5be93 = clone $this->valueHolder9a5be93;
    }
    public function __sleep()
    {
        $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, '__sleep', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
        return array('valueHolder9a5be93');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9a5be93 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer9a5be93;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9a5be93 && ($this->initializer9a5be93->__invoke($valueHolder9a5be93, $this, 'initializeProxy', array(), $this->initializer9a5be93) || 1) && $this->valueHolder9a5be93 = $valueHolder9a5be93;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a5be93;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a5be93;
    }
}
