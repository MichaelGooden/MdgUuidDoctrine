<?php
/**
 * Strategy for using UUIDs with Doctrine2.
 *
 * @link      http://github.com/MichaelGooden/MdgUuidDoctrine for the canonical source repository
 * @copyright Copyright (c) 2013 Michael Gooden (http://michaelgooden.github.io)
 */
namespace MdgUuidDoctrine;

use Doctrine\DBAL\Types\Type;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements AutoloaderProviderInterface, BootstrapListenerInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/', __NAMESPACE__)
                )
            )
        );
    }

    public function onBootstrap(EventInterface $e)
    {
        Type::addType('uuid', 'MdgUuidDoctrine\UuidType');
    }
}
