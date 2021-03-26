<?php


class User
{
    private ?int $id;
    private ?string $mail;
    private ?string $prenom;
    private ?string $nom;
    private ?string $pass;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $mail
     * @param string|null $prenom
     * @param string|null $nom
     * @param string|null $pass
     */

    public function __construct(int $id = null, string $mail = null, string $prenom = null, string $nom = null, string $pass = null)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->pass = $pass;
    }

    /**
     * @return int|null
     */

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */

    public function setId(?int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */

    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */

    public function setMail(?string $mail): User
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string|null
     */

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */

    public function setPrenom(?string $prenom): User
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return string|null
     */

    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */

    public function setNom(?string $nom): User
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string|null
     */

    public function getPass(): ?string
    {
        return $this->pass;
    }

    /**
     * @param string|null $pass
     */

    public function setPass(?string $pass): User
    {
        $this->pass = $pass;
        return $this;
    }
}