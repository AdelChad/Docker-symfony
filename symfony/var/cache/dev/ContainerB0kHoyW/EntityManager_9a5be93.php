<?php

namespace ContainerB0kHoyW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ca62 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4883 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52b78 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getConnection', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getMetadataFactory', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getExpressionBuilder', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'beginTransaction', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getCache', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'transactional', array('func' => $func), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'commit', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->commit();
    }

    public function rollback()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'rollback', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'createQuery', array('dql' => $dql), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'createQueryBuilder', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'flush', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'clear', array('entityName' => $entityName), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'close', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->close();
    }

    public function persist($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'persist', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'remove', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'refresh', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'detach', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'merge', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'contains', array('entity' => $entity), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getEventManager', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getConfiguration', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'isOpen', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getUnitOfWork', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getProxyFactory', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'getFilters', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'isFiltersStateClean', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'hasFilters', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return $this->valueHolder8ca62->hasFilters();
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

        $instance->initializerb4883 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ca62) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ca62 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ca62->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__get', ['name' => $name], $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        if (isset(self::$publicProperties52b78[$name])) {
            return $this->valueHolder8ca62->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca62;

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

        $targetObject = $this->valueHolder8ca62;
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
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca62;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ca62;
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
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__isset', array('name' => $name), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca62;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ca62;
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
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__unset', array('name' => $name), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca62;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ca62;
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
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__clone', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        $this->valueHolder8ca62 = clone $this->valueHolder8ca62;
    }

    public function __sleep()
    {
        $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, '__sleep', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;

        return array('valueHolder8ca62');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4883 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4883;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4883 && ($this->initializerb4883->__invoke($valueHolder8ca62, $this, 'initializeProxy', array(), $this->initializerb4883) || 1) && $this->valueHolder8ca62 = $valueHolder8ca62;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ca62;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ca62;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
