<?php

namespace App\Entity;

use App\Repository\BodyPartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BodyPartRepository::class)]
class BodyPart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $session_id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $exercise_example = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getExerciseExample(): ?string
    {
        return $this->exercise_example;
    }

    public function setExerciseExample(string $exercise_example): self
    {
        $this->exercise_example = $exercise_example;

        return $this;
    }
}
