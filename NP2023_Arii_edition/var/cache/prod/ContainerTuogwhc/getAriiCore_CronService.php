<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_core.cron' shared service.

return $this->services['arii_core.cron'] = new \Arii\CoreBundle\Service\AriiCron(${($_ = isset($this->services['arii_core.session']) ? $this->services['arii_core.session'] : $this->load('getAriiCore_SessionService.php')) && false ?: '_'});
