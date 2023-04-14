<?php

namespace App\Entity;

use App\Repository\ExerciseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Symfony\Component\DependencyInjection\Attribute\Target;

#[ORM\Entity(repositoryClass: ExerciseRepository::class)]
class Exercise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity:"Session")]
    #[ORM\JoinColumn(name:"session_id", referencedColumnName:"id")]
    private ?int $session_id = null;

    #[ORM\Column]
    private ?int $bodypart_id = null;

    #[ORM\Column]
    private ?int $repetiton = null;

    #[ORM\Column(nullable: true)]
    private ?int $weight = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $time_exercise = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $time_rest = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSessionId(): ?int
    {
        return $this->session_id;
    }

    public function setSessionId(int $session_id): self
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getBodypartId(): ?int
    {
        return $this->bodypart_id;
    }

    public function setBodypartId(int $bodypart_id): self
    {
        $this->bodypart_id = $bodypart_id;

        return $this;
    }

    public function getRepetiton(): ?int
    {
        return $this->repetiton;
    }

    public function setRepetiton(int $repetiton): self
    {
        $this->repetiton = $repetiton;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getTimeExercise(): ?\DateTimeInterface
    {
        return $this->time_exercise;
    }

    public function setTimeExercise(?\DateTimeInterface $time_exercise): self
    {
        $this->time_exercise = $time_exercise;

        return $this;
    }

    public function getTimeRest(): ?\DateTimeInterface
    {
        return $this->time_rest;
    }

    public function setTimeRest(\DateTimeInterface $time_rest): self
    {
        $this->time_rest = $time_rest;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
