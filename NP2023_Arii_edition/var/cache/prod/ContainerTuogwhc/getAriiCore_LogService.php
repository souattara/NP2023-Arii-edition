<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_core.log' shared service.

return $this->services['arii_core.log'] = new \Arii\CoreBundle\Service\AriiLog(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.session']) ? $this->services['arii_core.session'] : $this->load('getAriiCore_SessionService.php')) && false ?: '_'});