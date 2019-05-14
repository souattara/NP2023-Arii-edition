<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.main' shared service.

return $this->services['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ${($_ = isset($this->services['security.user.provider.concrete.chain_provider']) ? $this->services['security.user.provider.concrete.chain_provider'] : $this->load('getSecurity_User_Provider_Concrete_ChainProviderService.php')) && false ?: '_'}], '8cfa2bd0b50b7db00e9c186be68f7ce7465123d3', 'main', ['remember_me_parameter' => 'login[remember_me]', 'name' => 'REMEMBERME', 'lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false], ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});
