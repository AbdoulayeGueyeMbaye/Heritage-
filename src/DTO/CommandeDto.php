<?php

namespace App\DTO;

class CommandeDto
{
     public function __construct(
        public float $prixFinal,
        public bool $reductionAppliquee
    ) {}
}
