<?php

declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Controller;

use Wkdks\SyliusExamplePlugin\Form\MaintenanceType;
use Wkdks\SyliusExamplePlugin\Entity\Configuration;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Sylius\Component\Resource\ResourceActions;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ConfigurationController extends Controller
{
    /**
     * @param string|null $request
     *
     * @return Response
     */
    public function indexAction(Request $request): Response
    {
        $conf = new Configuration();
        $form = $this->createForm(MaintenanceType::class, $conf);
        return $this->render(
            '@WkdksSyliusExamplePlugin/Admin/Configuration/_form.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
