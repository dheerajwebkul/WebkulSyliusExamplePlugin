<?php

/*
 * This file has been created by developers from Webkul.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://store.webkul.com and write us
 * an email on support@webkul.com.
 */

declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;

class ConfigurationTranslation extends AbstractTranslation implements ResourceInterface
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $title;

    /** @var string */
    protected $shortDescription;

    /** @var string */
    protected $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    public function getDescription(): ?string
    {
        return $this->link;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
