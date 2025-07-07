<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SyliusOnePageCheckoutPlugin/config/routing.yml')
        ->prefix('/{_locale}')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);

    $routingConfigurator->import('@SyliusShopBundle/Resources/config/routing/checkout.yml')
        ->condition(false);

    $routingConfigurator->add('sylius_shop_checkout_complete', '/{_locale}/checkout')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);

    $routingConfigurator->add('sylius_shop_checkout_start', '/{_locale}/checkout')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);
};
