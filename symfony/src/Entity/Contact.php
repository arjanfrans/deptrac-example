<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    
    #[Assert\GreaterThan(0)]
    private int $id;
    
    #[Assert\Length(min: 3, max: 20)]
    private string $name;
    
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
