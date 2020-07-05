<?php

declare(strict_types=1);

namespace Webkul\SyliusExamplePlugin;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;

final class WebkulSyliusExamplePlugin extends Bundle
{
    use SyliusPluginTrait;
}
