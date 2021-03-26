<?php

class ConsommationManager {

    /**
     * Add a new consommation.
     * @param User $user
     * @param ConsommationType $consommationType
     * @param int $amount
     */
    public function addConsommation(User $user, ConsommationType $consommationType, int $amount) {
        $user_fk = $user->getId();
        $consommation_type_fk = $consommationType->getId();
        // TODO pas encore fait.
    }
}