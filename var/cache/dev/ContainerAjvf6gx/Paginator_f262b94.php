<?php

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf262b94 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf262b94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf262b94 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        return $this->valueHolderf262b94->setDefaultPaginatorOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        return $this->valueHolderf262b94->paginate($target, $page, $limit, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        return $this->valueHolderf262b94->subscribe($subscriber);
    }

    /**
     * {@inheritDoc}
     */
    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        return $this->valueHolderf262b94->connect($eventName, $listener, $priority);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        unset($instance->eventDispatcher, $instance->defaultOptions);

        $instance->initializerf262b94 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolderf262b94) {
            $reflection = $reflection ?: new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolderf262b94 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolderf262b94->__construct($eventDispatcher);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__get', ['name' => $name], $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        if (isset(self::$publicPropertiesf262b94[$name])) {
            return $this->valueHolderf262b94->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf262b94;

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

        $targetObject = $this->valueHolderf262b94;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf262b94;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf262b94;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__isset', array('name' => $name), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf262b94;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf262b94;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__unset', array('name' => $name), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf262b94;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf262b94;
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
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__clone', array(), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        $this->valueHolderf262b94 = clone $this->valueHolderf262b94;
    }

    public function __sleep()
    {
        $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, '__sleep', array(), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;

        return array('valueHolderf262b94');
    }

    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerf262b94 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf262b94;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf262b94 && ($this->initializerf262b94->__invoke($valueHolderf262b94, $this, 'initializeProxy', array(), $this->initializerf262b94) || 1) && $this->valueHolderf262b94 = $valueHolderf262b94;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf262b94;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf262b94;
    }


}
