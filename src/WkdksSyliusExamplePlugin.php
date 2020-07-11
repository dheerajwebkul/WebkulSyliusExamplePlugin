<?php

declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

final class WkdksSyliusExamplePlugin extends Bundle
{
    use SyliusPluginTrait;

    /**
     * Returns the plugin's container extension.
     *
     * @return ExtensionInterface|null The container extension
     *
     * @throws \LogicException
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->containerExtension) {
            $extension = $this->createContainerExtension();

            if (null !== $extension) {
                if (!$extension instanceof ExtensionInterface) {
                    throw new \LogicException(sprintf('Extension %s must implement %s.', get_class($extension), ExtensionInterface::class));
                }
                $this->containerExtension = $extension;
            } else {
                $this->containerExtension = false;
            }
        }
        return $this->containerExtension ?: null;
    }
}
