<?php

namespace App\Entity;

use App\Repository\SessionExerciseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionExerciseRepository::class)]
class SessionExercise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity:"Session")]
    #[ORM\JoinColumn(name:"session_id", referencedColumnName:"id")]
    private ?int $session_id = null;

    #[ORM\Column]
    private ?int $exercise_id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

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

    public function getExerciseId(): ?int
    {
        return $this->exercise_id;
    }

    public function setExerciseId(int $exercise_id): self
    {
        $this->exercise_id = $exercise_id;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
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
