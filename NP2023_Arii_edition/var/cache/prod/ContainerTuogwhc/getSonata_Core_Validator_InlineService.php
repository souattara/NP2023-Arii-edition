<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.validator.inline' shared service.

return $this->services['sonata.core.validator.inline'] = new \Sonata\Form\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->load('getValidator_ValidatorFactoryService.php')) && false ?: '_'});
