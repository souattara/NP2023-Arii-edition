<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_core.folder' shared service.

return $this->services['arii_core.folder'] = new \Arii\CoreBundle\Service\AriiFolder(${($_ = isset($this->services['arii_core.session']) ? $this->services['arii_core.session'] : $this->load('getAriiCore_SessionService.php')) && false ?: '_'});
