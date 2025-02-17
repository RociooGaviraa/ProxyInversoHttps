<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosRGL")]
class TablaRGL
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseRGL;
 public function getId(): int
 {
 return $this->id;
 }
 public function getfraseRGL(): string
 {
 return $this->fraseRGL;
 }
 public function setfraseRGL(string $fraseRGL): self
 {
 $this->fraseRGL = $fraseRGL;
 return $this;
 }
}