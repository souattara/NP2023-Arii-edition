<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.block.stats' shared service.

return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService('sonata.admin.block.stats', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
