<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="FK_PRODUCTS_BELONGTO_CATEGORI", columns={"cID"})})
 * @ORM\Entity
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="pID", type="integer", nullable=false, options={"comment"="идентификатор"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="pName", type="string", length=1000, nullable=false, options={"comment"="название"})
     */
    private $pname;

    /**
     * @var string
     *
     * @ORM\Column(name="pUTID", type="string", length=1100, nullable=false, options={"comment"="уникальный текстовый идентификатор"})
     */
    private $putid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pPrice", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL","comment"="цена в рублях с копейками"})
     */
    private $pprice = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pImageLink", type="string", length=1000, nullable=true, options={"default"="NULL","comment"="изображение"})
     */
    private $pimagelink = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pFileUploadDate", type="datetime", nullable=true, options={"default"="NULL","comment"="дата загрузки файла"})
     */
    private $pfileuploaddate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="pFileSize", type="bigint", nullable=true, options={"default"="NULL","comment"="размер файла"})
     */
    private $pfilesize = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pFileLink", type="string", length=1000, nullable=true, options={"default"="NULL","comment"="файл"})
     */
    private $pfilelink = 'NULL';

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cID", referencedColumnName="cID")
     * })
     */
    private $cid;

    public function getPid(): ?int
    {
        return $this->pid;
    }

    public function getPname(): ?string
    {
        return $this->pname;
    }

    public function setPname(string $pname): self
    {
        $this->pname = $pname;

        return $this;
    }

    public function getPutid(): ?string
    {
        return $this->putid;
    }

    public function setPutid(string $putid): self
    {
        $this->putid = $putid;

        return $this;
    }

    public function getPprice(): ?string
    {
        return $this->pprice;
    }

    public function setPprice(?string $pprice): self
    {
        $this->pprice = $pprice;

        return $this;
    }

    public function getPimagelink(): ?string
    {
        return $this->pimagelink;
    }

    public function setPimagelink(?string $pimagelink): self
    {
        $this->pimagelink = $pimagelink;

        return $this;
    }

    public function getPfileuploaddate(): ?\DateTimeInterface
    {
        return $this->pfileuploaddate;
    }

    public function setPfileuploaddate(?\DateTimeInterface $pfileuploaddate): self
    {
        $this->pfileuploaddate = $pfileuploaddate;

        return $this;
    }

    public function getPfilesize(): ?string
    {
        return $this->pfilesize;
    }

    public function setPfilesize(?string $pfilesize): self
    {
        $this->pfilesize = $pfilesize;

        return $this;
    }

    public function getPfilelink(): ?string
    {
        return $this->pfilelink;
    }

    public function setPfilelink(?string $pfilelink): self
    {
        $this->pfilelink = $pfilelink;

        return $this;
    }

    public function getCid(): ?Categories
    {
        return $this->cid;
    }

    public function setCid(?Categories $cid): self
    {
        $this->cid = $cid;

        return $this;
    }


}
