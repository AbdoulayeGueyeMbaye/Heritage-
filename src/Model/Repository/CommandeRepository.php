<?php

namespace App\Model\Repository;



class CommandeRepository
{
    public function __construct(
        private App\Core\Database $pdo
    ) {
    }

    public function enregistrer(App\DTO\CommandeDto $commande): void
    {
        $sql = "
            INSERT INTO commande (
                prix_final,
                reduction_appliquee
            )
            VALUES (
                :prix_final,
                :reduction_appliquee
            )
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':prix_final' => $commande->prixFinal,
            ':reduction_appliquee' => $commande->reductionAppliquee
        ]);
    }
}