<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Subject::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Subject;

    /**
     * @ORM\ManyToOne(targetEntity=Student::class, inversedBy="scores")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Student;

    /**
     * @ORM\Column(type="float")
     */
    private $Point1;

    /**
     * @ORM\Column(type="float")
     */
    private $Point2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?Subject
    {
        return $this->Subject;
    }

    public function setSubject(Subject $Subject): self
    {
        $this->Subject = $Subject;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->Student;
    }

    public function setStudent(?Student $Student): self
    {
        $this->Student = $Student;

        return $this;
    }

    public function getPoint1(): ?float
    {
        return $this->Point1;
    }

    public function setPoint1(float $Point1): self
    {
        $this->Point1 = $Point1;

        return $this;
    }

    public function getPoint2(): ?float
    {
        return $this->Point2;
    }

    public function setPoint2(float $Point2): self
    {
        $this->Point2 = $Point2;

        return $this;
    }
}
