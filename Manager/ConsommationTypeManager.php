<?php

class ConsommationTypeManager {

    /**
     * Get consommations types from database.
     * @return array
     */
    public function getConsommationsType(): array {
        $consommationsType = [];
        $stmt = Db::getInstance()->prepare("SELECT * FROM consommation_type");
        if($stmt->execute()) {
            $result = $stmt->fetchAll();
            foreach ($result as $ligneTable) {
                $consommationType = new ConsommationType();
                $consommationType->setId($ligneTable['id']);
                $consommationType->setName($ligneTable['name']);
                $consommationType->setUnity($ligneTable['unite']);
                $consommationType->setUnitPrice($ligneTable['unite_price']);
                $consommationsType[] = $consommationType;
            }
        }
        return $consommationsType;
    }

}