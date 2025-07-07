<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SyliusMarketplaceSuitePlugin/config/config.yaml');

    $containerConfigurator->extension('sylius_channel', [
        'resources' => [
            'channel' => [
                'classes' => [
                    'repository' => 'App\Repository\ChannelRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_customer', [
        'resources' => [
            'customer' => [
                'classes' => [
                    'repository' => 'App\Repository\CustomerRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_order', [
        'resources' => [
            'order' => [
                'classes' => [
                    'repository' => 'App\Repository\OrderRepository',
                    'controller' => 'Sylius\MarketplaceSuite\Component\Core\Common\Controller\Resource\OrderController',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_payment', [
        'resources' => [
            'payment' => [
                'classes' => [
                    'repository' => 'App\Repository\PaymentRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_product', [
        'resources' => [
            'product' => [
                'classes' => [
                    'repository' => 'App\Repository\ProductRepository',
                ],
            ],
            'product_variant' => [
                'classes' => [
                    'repository' => 'App\Repository\ProductVariantRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_review', [
        'resources' => [
            'product' => [
                'review' => [
                    'classes' => [
                        'repository' => 'App\Repository\ProductReviewRepository',
                    ],
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_shipping', [
        'resources' => [
            'shipment' => [
                'classes' => [
                    'repository' => 'App\Repository\ShipmentRepository',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sylius_taxonomy', [
        'resources' => [
            'taxon' => [
                'classes' => [
                    'repository' => 'App\Repository\TaxonRepository',
                ],
            ],
        ],
    ]);
};
