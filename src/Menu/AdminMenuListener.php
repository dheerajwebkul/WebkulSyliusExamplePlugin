<?php
declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $menu
            ->getChild('configuration')
                ->addChild('wk_configuration', ['route' => 'wkdks_example_admin_configuration_index'])
                    ->setLabel('wkdks_sylius_example_plugin.menu.admin.maintenance.header')
                    ->setLabelAttribute('icon', 'newspaper')
        ;
    }

}