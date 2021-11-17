<?php

namespace Container0msyZeG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf251 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer789ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties54224 = [
        
    ];

    public function getConnection()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getConnection', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getMetadataFactory', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getExpressionBuilder', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'beginTransaction', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getCache', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getCache();
    }

    public function transactional($func)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'transactional', array('func' => $func), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'wrapInTransaction', array('func' => $func), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'commit', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->commit();
    }

    public function rollback()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'rollback', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getClassMetadata', array('className' => $className), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'createQuery', array('dql' => $dql), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'createNamedQuery', array('name' => $name), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'createQueryBuilder', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'flush', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'clear', array('entityName' => $entityName), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->clear($entityName);
    }

    public function close()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'close', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->close();
    }

    public function persist($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'persist', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'remove', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'refresh', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'detach', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'merge', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getRepository', array('entityName' => $entityName), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'contains', array('entity' => $entity), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getEventManager', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getConfiguration', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'isOpen', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getUnitOfWork', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getProxyFactory', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'initializeObject', array('obj' => $obj), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'getFilters', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'isFiltersStateClean', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'hasFilters', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return $this->valueHolderdf251->hasFilters();
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

        $instance->initializer789ab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf251) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf251 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf251->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__get', ['name' => $name], $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        if (isset(self::$publicProperties54224[$name])) {
            return $this->valueHolderdf251->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf251;

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

        $targetObject = $this->valueHolderdf251;
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
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf251;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf251;
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
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__isset', array('name' => $name), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf251;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf251;
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
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__unset', array('name' => $name), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf251;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf251;
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
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__clone', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        $this->valueHolderdf251 = clone $this->valueHolderdf251;
    }

    public function __sleep()
    {
        $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, '__sleep', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;

        return array('valueHolderdf251');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer789ab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer789ab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer789ab && ($this->initializer789ab->__invoke($valueHolderdf251, $this, 'initializeProxy', array(), $this->initializer789ab) || 1) && $this->valueHolderdf251 = $valueHolderdf251;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf251;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf251;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
