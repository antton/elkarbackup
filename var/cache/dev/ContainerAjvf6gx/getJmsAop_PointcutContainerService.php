<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_aop.pointcut_container' shared service.

include_once $this->targetDirs[3].'/vendor/jms/aop-bundle/Aop/PointcutContainer.php';

return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(['security.access.method_interceptor' => ${($_ = isset($this->services['security.access.pointcut']) ? $this->services['security.access.pointcut'] : $this->load('getSecurity_Access_PointcutService.php')) && false ?: '_'}]);
