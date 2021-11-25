<?php

namespace Container5SqjfvX;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf8cb3 = null;
    private $initializer897d1 = null;
    private static $publicProperties16af7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getConnection', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getMetadataFactory', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getExpressionBuilder', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'beginTransaction', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getCache', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getCache();
    }
    public function transactional($func)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'transactional', array('func' => $func), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'commit', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->commit();
    }
    public function rollback()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'rollback', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getClassMetadata', array('className' => $className), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'createQuery', array('dql' => $dql), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'createNamedQuery', array('name' => $name), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'createQueryBuilder', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'flush', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'clear', array('entityName' => $entityName), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->clear($entityName);
    }
    public function close()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'close', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->close();
    }
    public function persist($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'persist', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'remove', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'refresh', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'detach', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'merge', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'contains', array('entity' => $entity), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getEventManager', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getConfiguration', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'isOpen', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getUnitOfWork', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getProxyFactory', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'initializeObject', array('obj' => $obj), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'getFilters', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'isFiltersStateClean', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'hasFilters', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return $this->valueHolderf8cb3->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer897d1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf8cb3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8cb3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf8cb3->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__get', ['name' => $name], $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        if (isset(self::$publicProperties16af7[$name])) {
            return $this->valueHolderf8cb3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8cb3;
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
        $targetObject = $this->valueHolderf8cb3;
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
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8cb3;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf8cb3;
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
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__isset', array('name' => $name), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8cb3;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf8cb3;
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
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__unset', array('name' => $name), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8cb3;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf8cb3;
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
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__clone', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        $this->valueHolderf8cb3 = clone $this->valueHolderf8cb3;
    }
    public function __sleep()
    {
        $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, '__sleep', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
        return array('valueHolderf8cb3');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer897d1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer897d1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer897d1 && ($this->initializer897d1->__invoke($valueHolderf8cb3, $this, 'initializeProxy', array(), $this->initializer897d1) || 1) && $this->valueHolderf8cb3 = $valueHolderf8cb3;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8cb3;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8cb3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
