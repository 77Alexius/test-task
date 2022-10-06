<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="uID", type="integer", nullable=false, options={"comment"="идентификатор"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="uEmail", type="string", length=100, nullable=false, options={"comment"="емейл"})
     */
    private $uemail;

    /**
     * @var string
     *
     * @ORM\Column(name="uPassword", type="string", length=100, nullable=false, options={"comment"="пароль"})
     */
    private $upassword;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getUemail(): ?string
    {
        return $this->uemail;
    }

    public function setUemail(string $uemail): self
    {
        $this->uemail = $uemail;

        return $this;
    }

    public function getUpassword(): ?string
    {
        return $this->upassword;
    }

    public function setUpassword(string $upassword): self
    {
        $this->upassword = $upassword;

        return $this;
    }


}
