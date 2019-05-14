<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_jid.history' shared service.

return $this->services['arii_jid.history'] = new \Arii\JIDBundle\Service\AriiHistory(${($_ = isset($this->services['arii_core.dhtmlx']) ? $this->services['arii_core.dhtmlx'] : $this->load('getAriiCore_DhtmlxService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.sql']) ? $this->services['arii_core.sql'] : $this->load('getAriiCore_SqlService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.date']) ? $this->services['arii_core.date'] : $this->load('getAriiCore_DateService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.tools']) ? $this->services['arii_core.tools'] : $this->load('getAriiCore_ToolsService.php')) && false ?: '_'});
