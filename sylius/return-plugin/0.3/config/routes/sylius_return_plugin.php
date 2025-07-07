<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SyliusReturnPlugin/config/admin_routing.yaml')
        ->prefix('/%sylius_admin.path_name%');

    $routingConfigurator->import('@SyliusReturnPlugin/config/shop_routing.yaml')
        ->prefix('/{_locale}')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);
};
