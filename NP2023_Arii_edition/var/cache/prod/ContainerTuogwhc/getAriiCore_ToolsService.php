<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_core.tools' shared service.

return $this->services['arii_core.tools'] = new \Arii\CoreBundle\Service\AriiTools(${($_ = isset($this->services['arii_core.session']) ? $this->services['arii_core.session'] : $this->load('getAriiCore_SessionService.php')) && false ?: '_'}, 'D:/Apps/Arii_NP2023/Symfony/workspace');
