<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'arii_jid.graphviz' shared service.

return $this->services['arii_jid.graphviz'] = new \Arii\JIDBundle\Service\AriiGraphviz(${($_ = isset($this->services['arii_core.tools']) ? $this->services['arii_core.tools'] : $this->load('getAriiCore_ToolsService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.dhtmlx']) ? $this->services['arii_core.dhtmlx'] : $this->load('getAriiCore_DhtmlxService.php')) && false ?: '_'}, ${($_ = isset($this->services['arii_core.sql']) ? $this->services['arii_core.sql'] : $this->load('getAriiCore_SqlService.php')) && false ?: '_'});
