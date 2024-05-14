<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AssetRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AssetRepository::class)]
class Asset
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getAssetCategory"])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(["getAssetCategory"])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(["getAssetCategory"])]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    private ?AssetCategory $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCategory(): ?AssetCategory
    {
        return $this->category;
    }

    public function setCategory(?AssetCategory $category): static
    {
        $this->category = $category;

        return $this;
    }

}
