<?php

declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;

final class WkdksSyliusExamplePlugin extends Bundle
{
    use SyliusPluginTrait;
}
