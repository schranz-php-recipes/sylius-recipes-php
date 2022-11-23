<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SyliusReturnPlugin/config/config.yaml');

    $containerConfigurator->extension('sylius_return', [
        'pdf_generator' => [
            'enabled' => true,
        ],
    ]);
};
