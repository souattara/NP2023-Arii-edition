<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.validator.inline' shared service.

return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->load('getValidator_ValidatorFactoryService.php')) && false ?: '_'});