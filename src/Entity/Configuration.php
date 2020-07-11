<?php

namespace Wkdks\SyliusExamplePlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

use Sylius\Component\Resource\Model\ResourceInterface;

use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="Wkdks\SyliusExamplePlugin\Repository\ConfigurationRepository")
 */
class Configuration implements ResourceInterface, TranslatableInterface
{
    use TranslatableTrait {
        __construct as protected initializeTranslationsCollection;
    }

    public function __construct()
    {
        $this->initializeTranslationsCollection();
    }


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateAdd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateUpd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        //return $this->title;
        return $this->getTranslation()->getTitle();
    }

    public function setTitle(?string $title): self
    {
        // $this->title = $title;
        // return $this;
        $this->getTranslation()->setTitle($title);
    }

    public function getShortDescription(): ?string
    {
        // return $this->shortDescription;
        return $this->getTranslation()->getShortDescription();
    }

    public function setShortDescription(?string $shortDescription): self
    {
        // $this->shortDescription = $shortDescription;
        // return $this;
        $this->getTranslation()->setShortDescription($shortDescription);
    }

    public function getDescription(): ?string
    {
        //return $this->description;
        return $this->getTranslation()->getDescription();
    }

    public function setDescription(?string $description): self
    {
        // $this->description = $description;
        // return $this;
        $this->getTranslation()->setDescription($description);
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function createTranslation(): ConfigurationTranslation
    {
        return new ConfigurationTranslation();
    }
}
