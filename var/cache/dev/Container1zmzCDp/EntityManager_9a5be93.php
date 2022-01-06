<?php

namespace Container1zmzCDp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere0767 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc636e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9640a = [
        
    ];

    public function getConnection()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getConnection', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getMetadataFactory', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getExpressionBuilder', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'beginTransaction', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getCache', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'transactional', array('func' => $func), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'commit', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->commit();
    }

    public function rollback()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'rollback', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getClassMetadata', array('className' => $className), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'createQuery', array('dql' => $dql), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'createNamedQuery', array('name' => $name), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'createQueryBuilder', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'flush', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'clear', array('entityName' => $entityName), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->clear($entityName);
    }

    public function close()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'close', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->close();
    }

    public function persist($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'persist', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'remove', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'refresh', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'detach', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'merge', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'contains', array('entity' => $entity), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getEventManager', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getConfiguration', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'isOpen', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getUnitOfWork', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getProxyFactory', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'initializeObject', array('obj' => $obj), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'getFilters', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'isFiltersStateClean', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'hasFilters', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return $this->valueHoldere0767->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc636e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere0767) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0767 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere0767->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__get', ['name' => $name], $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        if (isset(self::$publicProperties9640a[$name])) {
            return $this->valueHoldere0767->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0767;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0767;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0767;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0767;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__isset', array('name' => $name), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0767;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere0767;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__unset', array('name' => $name), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0767;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere0767;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__clone', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        $this->valueHoldere0767 = clone $this->valueHoldere0767;
    }

    public function __sleep()
    {
        $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, '__sleep', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;

        return array('valueHoldere0767');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc636e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc636e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc636e && ($this->initializerc636e->__invoke($valueHoldere0767, $this, 'initializeProxy', array(), $this->initializerc636e) || 1) && $this->valueHoldere0767 = $valueHoldere0767;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0767;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere0767;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
