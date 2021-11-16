<?php

namespace ContainerCTJwPRx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd24e5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb6dd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc10dd = [
        
    ];

    public function getConnection()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getConnection', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getMetadataFactory', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getExpressionBuilder', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'beginTransaction', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getCache', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'transactional', array('func' => $func), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'commit', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->commit();
    }

    public function rollback()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'rollback', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getClassMetadata', array('className' => $className), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'createQuery', array('dql' => $dql), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'createNamedQuery', array('name' => $name), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'createQueryBuilder', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'flush', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'clear', array('entityName' => $entityName), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->clear($entityName);
    }

    public function close()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'close', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->close();
    }

    public function persist($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'persist', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'remove', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'refresh', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'detach', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'merge', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'contains', array('entity' => $entity), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getEventManager', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getConfiguration', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'isOpen', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getUnitOfWork', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getProxyFactory', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'initializeObject', array('obj' => $obj), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'getFilters', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'isFiltersStateClean', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'hasFilters', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return $this->valueHolderd24e5->hasFilters();
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

        $instance->initializereb6dd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd24e5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd24e5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd24e5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__get', ['name' => $name], $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        if (isset(self::$publicPropertiesc10dd[$name])) {
            return $this->valueHolderd24e5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24e5;

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

        $targetObject = $this->valueHolderd24e5;
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
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24e5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd24e5;
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
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__isset', array('name' => $name), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24e5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd24e5;
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
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__unset', array('name' => $name), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24e5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd24e5;
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
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__clone', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        $this->valueHolderd24e5 = clone $this->valueHolderd24e5;
    }

    public function __sleep()
    {
        $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, '__sleep', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;

        return array('valueHolderd24e5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb6dd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb6dd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb6dd && ($this->initializereb6dd->__invoke($valueHolderd24e5, $this, 'initializeProxy', array(), $this->initializereb6dd) || 1) && $this->valueHolderd24e5 = $valueHolderd24e5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd24e5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd24e5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
