<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AssetCategoryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AssetCategoryRepository::class)]
class AssetCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getAssetCategory"])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(["getAssetCategory"])]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Asset::class, cascade: ['remove'], orphanRemoval: true)]
    #[Groups(["getAssetCategory"])]
    private Collection $assets;

    public function __construct()
    {
        $this->assets = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Asset>
     */
    public function getAssets(): Collection
    {
        return $this->assets;
    }

    public function addAsset(Asset $asset): static
    {
        if (!$this->assets->contains($asset)) {
            $this->assets->add($asset);
            $asset->setCategory($this);
        }

        return $this;
    }

    public function removeAsset(Asset $asset): static
    {
        if ($this->assets->removeElement($asset)) {
            // set the owning side to null (unless already changed)
            if ($asset->getCategory() === $this) {
                $asset->setCategory(null);
            }
        }

        return $this;
    }
}
