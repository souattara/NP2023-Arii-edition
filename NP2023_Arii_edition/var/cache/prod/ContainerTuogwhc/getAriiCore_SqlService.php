<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_core.sql' shared service.

return $this->services['arii_core.sql'] = new \Arii\CoreBundle\Service\AriiSQL(${($_ = isset($this->services['arii_core.session']) ? $this->services['arii_core.session'] : $this->load('getAriiCore_SessionService.php')) && false ?: '_'});