<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.navigation_tab' shared service.

return $this->services['form.type.navigation_tab'] = new \PrestaShopBundle\Form\Admin\Type\NavigationTabType(($this->services['logger'] ?? $this->getLoggerService()), ($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->isDebug());