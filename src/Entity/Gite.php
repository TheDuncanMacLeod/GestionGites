<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;




/**
 * @ORM\Entity(repositoryClass=GiteRepository::class)
 */
class Gite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     * @Assert\Length(
     *          min=5,
     *          max=30
     * )
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $Surface;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $Bedrooms;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $City;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     *  *  @Assert\Length(
     *          min=5,
     *          max=5
     * )
     */
    private $Postal_code;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Animals;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Created_at;

    public function __construct()
    {
        $this->Animals = false;
        $this->Created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->Surface;
    }

    public function setSurface(int $Surface): self
    {
        $this->Surface = $Surface;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->Bedrooms;
    }

    public function setBedrooms(int $Bedrooms): self
    {
        $this->Bedrooms = $Bedrooms;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->Postal_code;
    }

    public function setPostalCode(string $Postal_code): self
    {
        $this->Postal_code = $Postal_code;

        return $this;
    }

    public function getAnimals(): ?bool
    {
        return $this->Animals;
    }

    public function setAnimals(bool $Animals): self
    {
        $this->Animals = $Animals;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->Created_at;
    }

    public function setCreatedAt(\DateTimeInterface $Created_at): self
    {
        $this->Created_at = $Created_at;

        return $this;
    }
}


