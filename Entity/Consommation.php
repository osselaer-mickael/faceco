<?php

class Consommation {

    private ?int $id;
    private ?float $quantity;
    private ?User $user;
    private ?ConsommationType $consommationType;

    /**
     * Consommation constructor.
     * @param int|null $id
     * @param float|null $quantity
     * @param User|null $user
     * @param ConsommationType|null $consommationType
     */
    public function __construct(int $id = null, float $quantity = null, User $user = null, ConsommationType $consommationType = null) {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->user = $user;
        $this->consommationType = $consommationType;
    }

    /**
     * Return the consommation ID.
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set the consommation id.
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Return the consommation quantity.
     * @return float|null
     */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Set the consommation quantity.
     * @param float|null $quantity
     */
    public function setQuantity(?float $quantity): void {
        $this->quantity = $quantity;
    }

    /**
     * Return the consommation User.
     * @return User|null
     */
    public function getUser(): ?User {
        return $this->user;
    }

    /**
     * Set the consommation User.
     * @param User|null $user
     */
    public function setUser(?User $user): void {
        $this->user = $user;
    }

    /**
     * Return the consommation ConsommationType.
     * @return ConsommationType|null
     */
    public function getConsommationType(): ?ConsommationType {
        return $this->consommationType;
    }

    /**
     * Set the consommation ConsommationType.
     * @param ConsommationType|null $consommationType
     */
    public function setConsommationType(?ConsommationType $consommationType): void {
        $this->consommationType = $consommationType;
    }



}