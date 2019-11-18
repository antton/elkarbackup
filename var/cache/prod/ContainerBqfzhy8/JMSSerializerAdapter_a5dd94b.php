<?php

class JMSSerializerAdapter_a5dd94b extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera5dd94b = null;
    private $initializera5dd94b = null;
    private static $publicPropertiesa5dd94b = [
        
    ];
    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        return $this->valueHoldera5dd94b->serialize($data, $format, $context);
    }
    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        return $this->valueHoldera5dd94b->deserialize($data, $type, $format, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);
        $instance->initializera5dd94b = $initializer;
        return $instance;
    }
    public function __construct(\JMS\Serializer\SerializerInterface $serializer, ?\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory = null, ?\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory = null)
    {
        static $reflection;
        if (! $this->valueHoldera5dd94b) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHoldera5dd94b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
        }
        $this->valueHoldera5dd94b->__construct($serializer, $serializationContextFactory, $deserializationContextFactory);
    }
    public function & __get($name)
    {
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__get', ['name' => $name], $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        if (isset(self::$publicPropertiesa5dd94b[$name])) {
            return $this->valueHoldera5dd94b->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5dd94b;
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
        $targetObject = $this->valueHoldera5dd94b;
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
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5dd94b;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldera5dd94b;
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
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__isset', array('name' => $name), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5dd94b;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera5dd94b;
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
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__unset', array('name' => $name), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5dd94b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera5dd94b;
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
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__clone', array(), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        $this->valueHoldera5dd94b = clone $this->valueHoldera5dd94b;
    }
    public function __sleep()
    {
        $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, '__sleep', array(), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
        return array('valueHoldera5dd94b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializera5dd94b = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializera5dd94b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera5dd94b && ($this->initializera5dd94b->__invoke($valueHoldera5dd94b, $this, 'initializeProxy', array(), $this->initializera5dd94b) || 1) && $this->valueHoldera5dd94b = $valueHoldera5dd94b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera5dd94b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera5dd94b;
    }
}
