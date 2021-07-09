<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductSKU", type="string", length=50, nullable=false)
     */
    private $productsku;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductName", type="string", length=100, nullable=false)
     */
    private $productname;

    /**
     * @var float
     *
     * @ORM\Column(name="ProductPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $productprice;

    /**
     * @var float
     *
     * @ORM\Column(name="ProductWeight", type="float", precision=10, scale=0, nullable=false)
     */
    private $productweight;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductCartDesc", type="string", length=250, nullable=false)
     */
    private $productcartdesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductShortDesc", type="string", length=1000, nullable=false)
     */
    private $productshortdesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductLongDesc", type="text", length=65535, nullable=false)
     */
    private $productlongdesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductThumb", type="string", length=100, nullable=false)
     */
    private $productthumb;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductImage", type="string", length=100, nullable=false)
     */
    private $productimage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProductCategoryID", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $productcategoryid = NULL;

    /**
     * @var \DateTime
     * @ORM\Column(name="ProductUpdateDate", type="datetime", nullable=false, options={"default": "CURRENT_TIMESTAMP()"})
     */
    private $productupdatedate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ProductStock", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $productstock = NULL;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ProductLive", type="boolean", nullable=true)
     */
    private $productlive = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ProductUnlimited", type="boolean", nullable=true, options={"default"="1"})
     */
    private $productunlimited = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProductLocation", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $productlocation = 'NULL';

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function getProductsku(): ?string
    {
        return $this->productsku;
    }

    public function setProductsku(string $productsku): self
    {
        $this->productsku = $productsku;

        return $this;
    }

    public function getProductname(): ?string
    {
        return $this->productname;
    }

    public function setProductname(string $productname): self
    {
        $this->productname = $productname;

        return $this;
    }

    public function getProductprice(): ?float
    {
        return $this->productprice;
    }

    public function setProductprice(float $productprice): self
    {
        $this->productprice = $productprice;

        return $this;
    }

    public function getProductweight(): ?float
    {
        return $this->productweight;
    }

    public function setProductweight(float $productweight): self
    {
        $this->productweight = $productweight;

        return $this;
    }

    public function getProductcartdesc(): ?string
    {
        return $this->productcartdesc;
    }

    public function setProductcartdesc(string $productcartdesc): self
    {
        $this->productcartdesc = $productcartdesc;

        return $this;
    }

    public function getProductshortdesc(): ?string
    {
        return $this->productshortdesc;
    }

    public function setProductshortdesc(string $productshortdesc): self
    {
        $this->productshortdesc = $productshortdesc;

        return $this;
    }

    public function getProductlongdesc(): ?string
    {
        return $this->productlongdesc;
    }

    public function setProductlongdesc(string $productlongdesc): self
    {
        $this->productlongdesc = $productlongdesc;

        return $this;
    }

    public function getProductthumb(): ?string
    {
        return $this->productthumb;
    }

    public function setProductthumb(string $productthumb): self
    {
        $this->productthumb = $productthumb;

        return $this;
    }

    public function getProductimage(): ?string
    {
        return $this->productimage;
    }

    public function setProductimage(string $productimage): self
    {
        $this->productimage = $productimage;

        return $this;
    }

    public function getProductcategoryid(): ?int
    {
        return $this->productcategoryid;
    }

    public function setProductcategoryid(?int $productcategoryid): self
    {
        $this->productcategoryid = $productcategoryid;

        return $this;
    }

    public function getProductupdatedate(): ?\DateTimeInterface
    {
        return $this->productupdatedate;
    }

    public function setProductupdatedate(\DateTimeInterface $productupdatedate): self
    {
        $this->productupdatedate = $productupdatedate;

        return $this;
    }

    public function getProductstock(): ?float
    {
        return $this->productstock;
    }

    public function setProductstock(?float $productstock): self
    {
        $this->productstock = $productstock;

        return $this;
    }

    public function getProductlive(): ?bool
    {
        return $this->productlive;
    }

    public function setProductlive(?bool $productlive): self
    {
        $this->productlive = $productlive;

        return $this;
    }

    public function getProductunlimited(): ?bool
    {
        return $this->productunlimited;
    }

    public function setProductunlimited(?bool $productunlimited): self
    {
        $this->productunlimited = $productunlimited;

        return $this;
    }

    public function getProductlocation(): ?string
    {
        return $this->productlocation;
    }

    public function setProductlocation(?string $productlocation): self
    {
        $this->productlocation = $productlocation;

        return $this;
    }


}
