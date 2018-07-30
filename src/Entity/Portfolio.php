<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PortfolioRepository")
 */
class Portfolio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $por_title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $por_short_desc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $por_link;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $por_long_desc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $por_main_techno;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $por_image;

    public function getId()
    {
        return $this->id;
    }

    public function getPorTitle(): ?string
    {
        return $this->por_title;
    }

    public function setPorTitle(?string $por_title): self
    {
        $this->por_title = $por_title;

        return $this;
    }

    public function getPorShortDesc(): ?string
    {
        return $this->por_short_desc;
    }

    public function setPorShortDesc(?string $por_short_desc): self
    {
        $this->por_short_desc = $por_short_desc;

        return $this;
    }

    public function getPorLink(): ?string
    {
        return $this->por_link;
    }

    public function setPorLink(?string $por_link): self
    {
        $this->por_link = $por_link;

        return $this;
    }

    public function getPorLongDesc(): ?string
    {
        return $this->por_long_desc;
    }

    public function setPorLongDesc(?string $por_long_desc): self
    {
        $this->por_long_desc = $por_long_desc;

        return $this;
    }

    public function getPorMainTechno(): ?string
    {
        return $this->por_main_techno;
    }

    public function setPorMainTechno(?string $por_main_techno): self
    {
        $this->por_main_techno = $por_main_techno;

        return $this;
    }

    public function getPorImage(): ?string
    {
        return $this->por_image;
    }

    public function setPorImage(string $por_image): self
    {
        $this->por_image = $por_image;

        return $this;
    }
}
