<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SyliusB2BKitPlugin/config/config.yaml');

    $containerConfigurator->extension('sylius_addressing', [
        'resources' => [
            'address' => [
                'classes' => [
                    'repository' => 'Sylius\B2BKit\Repository\AddressRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_customer', [
        'resources' => [
            'customer' => [
                'classes' => [
                    'repository' => 'Sylius\B2BKit\Repository\CustomerRepository',
                ],
            ],
            'customer_group' => [
                'classes' => [
                    'repository' => 'Sylius\B2BKit\Repository\CustomerGroupRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_order', [
        'resources' => [
            'order' => [
                'classes' => [
                    'repository' => 'Sylius\B2BKit\Repository\OrderRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_user', [
        'resources' => [
            'shop' => [
                'user' => [
                    'classes' => [
                        'repository' => 'Sylius\B2BKit\Repository\UserRepository',
                    ],
                ],
            ],
        ],
    ]);
};
