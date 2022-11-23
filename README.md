# Symfony Recipes using PHP Config Files

This repository provides [Sylius/SyliusRecipes](https://github.com/Sylius/SyliusRecipes)
using `PHP` instead of YAML files.

The project is using [symplify/config-transformer](https://github.com/symplify/config-transformer)
to convert the `.yaml` config files to `.php` config files. To make 100%
sure you are getting the same recommendation as the official recipes provides.

A big thank you to [TomasVotruba](https://github.com/TomasVotruba) for providing the `symplify/config-transformer`
package and fixing a lot of issues without this project would not be possible.

The converter can be found in the [schranz-php-recipes/symfony-recipes-yaml-to-php-converter](https://github.com/schranz-php-recipes/symfony-recipes-yaml-to-php-converter)
repository.

## Using in exist projects

First convert your project with [symplify/config-transformer](https://github.com/symplify/config-transformer) from `.yaml` to `.php` configs
after add the following to the `composer` `extra.symfony.endpoint` configuration:

```json
    "extra": {
        "symfony": {
            "allow-contrib": false,
            "require": "6.1.*",
            "endpoint": [
                "https://raw.githubusercontent.com/schranz-php-recipes/sylius-recipes-php/flex/main/index.json",
                "flex://defaults"
            ]
        }
    }
```

### Contributing

Update recipes manually:

```bash
composer install

vendor/bin/yaml-to-php git@github.com:sylius/SyliusRecipes.git
```
