<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WeekRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WeekRepository::class)
 */
#[ApiResource]
class Week
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity=halfday::class, inversedBy="weeks")
     */
    private $halfdays;

    public function __construct()
    {
        $this->halfdays = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|halfday[]
     */
    public function getHalfdays(): Collection
    {
        return $this->halfdays;
    }

    public function addHalfday(halfday $halfday): self
    {
        if (!$this->halfdays->contains($halfday)) {
            $this->halfdays[] = $halfday;
        }

        return $this;
    }

    public function removeHalfday(halfday $halfday): self
    {
        $this->halfdays->removeElement($halfday);

        return $this;
    }
}
