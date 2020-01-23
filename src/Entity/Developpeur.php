<?php
/**
 * @author <julienrajerison5@gmail.com>.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeveloppeurRepository")
 */
class Developpeur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $poste;

    /**
     * @var string|null
     */
    private $fullname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @return string|null
     */
    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    /**
     * @param string|null $fullname
     *
     * @return \App\Entity\Developpeur
     */
    public function setFullname(?string $fullname): Developpeur
    {
        $this->fullname = $fullname;

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
