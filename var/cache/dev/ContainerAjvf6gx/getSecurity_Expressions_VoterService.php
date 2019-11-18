<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.expressions.voter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/Expression/ExpressionVoter.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/Expression/LazyLoadingExpressionVoter.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/Expression/ExpressionHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/security-extra-bundle/Security/Authorization/Expression/ContainerAwareExpressionHandler.php';

$this->services['security.expressions.voter'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter(${($_ = isset($this->services['security.expressions.handler']) ? $this->services['security.expressions.handler'] : ($this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});

$instance->setLazyCompiler($this, 'security.expressions.compiler');
$instance->setCacheDir(($this->targetDirs[0].'/jms_security/expressions'));

return $instance;