<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productoptions
 *
 * @ORM\Table(name="productoptions")
 * @ORM\Entity
 */
class Productoptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="ProductOptionID", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productoptionid;

    /**
     * @var int
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productid;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionID", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $optionid;

    /**
     * @var float|null
     *
     * @ORM\Column(name="OptionPriceIncrement", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $optionpriceincrement = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionGroupID", type="integer", nullable=false)
     */
    private $optiongroupid;

    public function getProductoptionid(): ?int
    {
        return $this->productoptionid;
    }

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function setProductid(int $productid): self
    {
        $this->productid = $productid;

        return $this;
    }

    public function getOptionid(): ?int
    {
        return $this->optionid;
    }

    public function setOptionid(int $optionid): self
    {
        $this->optionid = $optionid;

        return $this;
    }

    public function getOptionpriceincrement(): ?float
    {
        return $this->optionpriceincrement;
    }

    public function setOptionpriceincrement(?float $optionpriceincrement): self
    {
        $this->optionpriceincrement = $optionpriceincrement;

        return $this;
    }

    public function getOptiongroupid(): ?int
    {
        return $this->optiongroupid;
    }

    public function setOptiongroupid(int $optiongroupid): self
    {
        $this->optiongroupid = $optiongroupid;

        return $this;
    }


}
