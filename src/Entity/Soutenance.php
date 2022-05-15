<?php

namespace App\Entity;

use App\Repository\SoutenanceRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=SoutenanceRepository::class)
 */
class Soutenance
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
    private $dateSoutenance;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 0,
     *      max = 20,
     *      notInRangeMessage = "la note doit entre entre {{ min }} et {{ max }}",
     * ) 
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $matricule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSoutenance(): ?\DateTimeInterface
    {
        return $this->dateSoutenance;
    }

    public function setDateSoutenance(\DateTimeInterface $dateSoutenance): self
    {
        $this->dateSoutenance = $dateSoutenance;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getMatricule(): ?Enseignant
    {
        return $this->matricule;
    }

    public function setMatricule(?Enseignant $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }
}
