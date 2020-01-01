<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellet(): ?string
    {
        return $this->libellet;
    }

    public function setLibellet(string $libellet): self
    {
        $this->libellet = $libellet;

        return $this;
    }
}
