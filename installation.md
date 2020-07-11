## Installation

1. Run `composer require wkdks/sylius-example-plugin`

2. Enable the plugin in bundles.php.

```php
<?php
// config/bundles.php

return [
    // ...
    Wkdks\SyliusExamplePlugin\WkdksSyliusExamplePlugin::class => ['all' => true],
];
```

3. Import the plugin configurations

```yml
# config/packages/_sylius.yaml
imports:
    ...

    - { resource: "@WkdksSyliusExamplePlugin/Resources/config/config.yml" }
```

4. Add the shop and admin routes

```yml
# config/routes.yaml
wkdks_sylius_example_plugin:
    resource: "@WkdksSyliusExamplePlugin/Resources/config/admin_routing.yml"
```
5. To use translation strings, need to clear cache

Run `php bin/console cache:clear`

--------------------------

```
php bin/console ckeditor:install
php bin/console assets:install public
```

6. Finish the installation updating the database schema and installing assets

```
php bin/console doctrine:schema:update --force
php bin/console sylius:theme:assets:install
```