<?php

namespace App\Model\Entity;


abstract class AbstractEntity
{
    protected ?int $id = null;
    protected ?\DateTime $createdatecreation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedatecreation(): ?\DateTime
    {
        return $this->createdatecreation;
    }

    public function setCreatedatecreation(?\DateTime $createdatecreation): void
    {
        $this->createdatecreation = $createdatecreation;
    }
}