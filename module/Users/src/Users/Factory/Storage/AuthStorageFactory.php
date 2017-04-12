<?php

namespace Users\Factory\Storage;
 
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Users\Storage\AuthStorage;
 

class AuthStorageFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $storage = new AuthStorage('asistencia_uisrael');
        
        $storage->setServiceLocator($serviceLocator);
        
        $storage->setDbHandler();
         
        return $storage;
    }
}









