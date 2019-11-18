<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access.method_interceptor' shared service.

include_once $this->targetDirs[3].'/vendor/jms/cg/src/CG/Proxy/MethodInterceptorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/Interception/MethodSecurityInterceptor.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/AfterInvocation/AfterInvocationManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/AfterInvocation/AfterInvocationManager.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/RunAsManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/RunAsManager.php';

return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager([]), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), ${($_ = isset($this->services['security.extra.metadata_factory']) ? $this->services['security.extra.metadata_factory'] : $this->load('getSecurity_Extra_MetadataFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});