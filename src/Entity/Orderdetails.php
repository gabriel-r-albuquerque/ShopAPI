<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderdetails
 *
 * @ORM\Table(name="orderdetails")
 * @ORM\Entity
 */
class Orderdetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="DetailID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $detailid;

    /**
     * @var int
     *
     * @ORM\Column(name="DetailOrderID", type="integer", nullable=false)
     */
    private $detailorderid;

    /**
     * @var int
     *
     * @ORM\Column(name="DetailProductID", type="integer", nullable=false)
     */
    private $detailproductid;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailName", type="string", length=250, nullable=false)
     */
    private $detailname;

    /**
     * @var float
     *
     * @ORM\Column(name="DetailPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $detailprice;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailSKU", type="string", length=50, nullable=false)
     */
    private $detailsku;

    /**
     * @var int
     *
     * @ORM\Column(name="DetailQuantity", type="integer", nullable=false)
     */
    private $detailquantity;

    public function getDetailid(): ?int
    {
        return $this->detailid;
    }

    public function getDetailorderid(): ?int
    {
        return $this->detailorderid;
    }

    public function setDetailorderid(int $detailorderid): self
    {
        $this->detailorderid = $detailorderid;

        return $this;
    }

    public function getDetailproductid(): ?int
    {
        return $this->detailproductid;
    }

    public function setDetailproductid(int $detailproductid): self
    {
        $this->detailproductid = $detailproductid;

        return $this;
    }

    public function getDetailname(): ?string
    {
        return $this->detailname;
    }

    public function setDetailname(string $detailname): self
    {
        $this->detailname = $detailname;

        return $this;
    }

    public function getDetailprice(): ?float
    {
        return $this->detailprice;
    }

    public function setDetailprice(float $detailprice): self
    {
        $this->detailprice = $detailprice;

        return $this;
    }

    public function getDetailsku(): ?string
    {
        return $this->detailsku;
    }

    public function setDetailsku(string $detailsku): self
    {
        $this->detailsku = $detailsku;

        return $this;
    }

    public function getDetailquantity(): ?int
    {
        return $this->detailquantity;
    }

    public function setDetailquantity(int $detailquantity): self
    {
        $this->detailquantity = $detailquantity;

        return $this;
    }


}
