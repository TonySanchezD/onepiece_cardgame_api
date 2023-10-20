<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageUrl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alternate;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $power;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $effect = [];

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $counter;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $cardTrigger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cardSet;

    /**
     * @ORM\Column(type="array")
     */
    private $color = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rarity;

    /**
     * @ORM\Column(type="array")
     */
    private $type = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $attribute;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cost;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function isAlternate(): ?bool
    {
        return $this->alternate;
    }

    public function setAlternate(bool $alternate): self
    {
        $this->alternate = $alternate;

        return $this;
    }

    public function getPower(): ?float
    {
        return $this->power;
    }

    public function setPower(?float $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getEffect(): ?array
    {
        return $this->effect;
    }

    public function setEffect(?array $effect): self
    {
        $this->effect = $effect;

        return $this;
    }

    public function getCounter(): ?float
    {
        return $this->counter;
    }

    public function setCounter(?float $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->cardTrigger;
    }

    public function setCardTrigger(?string $cardTrigger): self
    {
        $this->cardTrigger = $cardTrigger;

        return $this;
    }

    public function getSet(): ?string
    {
        return $this->cardSet;
    }

    public function setCardSet(string $cardSet): self
    {
        $this->cardSet = $cardSet;

        return $this;
    }

    public function getColor(): ?array
    {
        return $this->color;
    }

    public function setColor(array $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getRarity(): ?string
    {
        return $this->rarity;
    }

    public function setRarity(string $rarity): self
    {
        $this->rarity = $rarity;

        return $this;
    }

    public function getType(): ?array
    {
        return $this->type;
    }

    public function setType(array $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAttribute(): ?string
    {
        return $this->attribute;
    }

    public function setAttribute(?string $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }
}
