<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.serializer' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/JMSSerializerAdapter.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';

if ($lazyLoad) {
    return $this->services['fos_rest.serializer'] = $this->createProxy('JMSSerializerAdapter_a5dd94b', function () {
        return \JMSSerializerAdapter_a5dd94b::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getFosRest_SerializerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \FOS\RestBundle\Serializer\JMSSerializerAdapter(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'});
