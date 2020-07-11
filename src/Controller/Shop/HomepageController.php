<?php

declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Controller\Shop;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;

final class HomepageController
{
    /** @var EngineInterface */
    private $templatingEngine;

    public function __construct(EngineInterface $templatingEngine)
    {
        $this->templatingEngine = $templatingEngine;
    }

    public function indexAction(): Response
    {
        return $this->templatingEngine->renderResponse('@SyliusShop/Homepage/index.html.twig');
    }
}
