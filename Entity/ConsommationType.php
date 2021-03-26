<?php

class ConsommationType {

    private ?int $id;
    private ?string $name;
    private ?string $unity;
    private ?float $unitPrice;

    /**
     * ConsommationType constructor.
     * @param int|null $id
     * @param string|null $name
     * @param string|null $unity
     * @param float $unitPrice
     */
    public function __construct(int $id = null, string $name = null, string $unity = null, float $unitPrice = 0.0) {
        $this->id = $id;
        $this->name = $name;
        $this->unity = $unity;
        $this->unitPrice = $unitPrice;
    }

    /**
     * Return the consommation type id.
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the consommation type id.
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Return the consommation type name.
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Set the consommation type name.
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }

    /**
     * Return the consomation type unity.
     * @return string
     */
    public function getUnity(): string {
        return $this->unity;
    }

    /**
     * Set the consommation type unity.
     * @param string $unity
     */
    public function setUnity(string $unity): void {
        $this->unity = $unity;
    }

    /**
     * Return the consommation type unit price.
     * @return float
     */
    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    /**
     * Set the consommation type unit price.
     * @param float $unitPrice
     */
    public function setUnitPrice(float $unitPrice): void {
        $this->unitPrice = $unitPrice;
    }


}