<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="OrderID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderid;

    /**
     * @var int
     *
     * @ORM\Column(name="OrderUserID", type="integer", nullable=false)
     */
    private $orderuserid;

    /**
     * @var float
     *
     * @ORM\Column(name="OrderAmount", type="float", precision=10, scale=0, nullable=false)
     */
    private $orderamount;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderShipName", type="string", length=100, nullable=false)
     */
    private $ordershipname;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderShipAddress", type="string", length=100, nullable=false)
     */
    private $ordershipaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderShipAddress2", type="string", length=100, nullable=false)
     */
    private $ordershipaddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderCity", type="string", length=50, nullable=false)
     */
    private $ordercity;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderState", type="string", length=50, nullable=false)
     */
    private $orderstate;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderZip", type="string", length=20, nullable=false)
     */
    private $orderzip;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderCountry", type="string", length=50, nullable=false)
     */
    private $ordercountry;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderPhone", type="string", length=20, nullable=false)
     */
    private $orderphone;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderFax", type="string", length=20, nullable=false)
     */
    private $orderfax;

    /**
     * @var float
     *
     * @ORM\Column(name="OrderShipping", type="float", precision=10, scale=0, nullable=false)
     */
    private $ordershipping;

    /**
     * @var float
     *
     * @ORM\Column(name="OrderTax", type="float", precision=10, scale=0, nullable=false)
     */
    private $ordertax;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderEmail", type="string", length=100, nullable=false)
     */
    private $orderemail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OrderDate", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $orderdate = 'current_timestamp()';

    /**
     * @var bool
     *
     * @ORM\Column(name="OrderShipped", type="boolean", nullable=false)
     */
    private $ordershipped = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrderTrackingNumber", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $ordertrackingnumber = 'NULL';

    public function getOrderid(): ?int
    {
        return $this->orderid;
    }

    public function getOrderuserid(): ?int
    {
        return $this->orderuserid;
    }

    public function setOrderuserid(int $orderuserid): self
    {
        $this->orderuserid = $orderuserid;

        return $this;
    }

    public function getOrderamount(): ?float
    {
        return $this->orderamount;
    }

    public function setOrderamount(float $orderamount): self
    {
        $this->orderamount = $orderamount;

        return $this;
    }

    public function getOrdershipname(): ?string
    {
        return $this->ordershipname;
    }

    public function setOrdershipname(string $ordershipname): self
    {
        $this->ordershipname = $ordershipname;

        return $this;
    }

    public function getOrdershipaddress(): ?string
    {
        return $this->ordershipaddress;
    }

    public function setOrdershipaddress(string $ordershipaddress): self
    {
        $this->ordershipaddress = $ordershipaddress;

        return $this;
    }

    public function getOrdershipaddress2(): ?string
    {
        return $this->ordershipaddress2;
    }

    public function setOrdershipaddress2(string $ordershipaddress2): self
    {
        $this->ordershipaddress2 = $ordershipaddress2;

        return $this;
    }

    public function getOrdercity(): ?string
    {
        return $this->ordercity;
    }

    public function setOrdercity(string $ordercity): self
    {
        $this->ordercity = $ordercity;

        return $this;
    }

    public function getOrderstate(): ?string
    {
        return $this->orderstate;
    }

    public function setOrderstate(string $orderstate): self
    {
        $this->orderstate = $orderstate;

        return $this;
    }

    public function getOrderzip(): ?string
    {
        return $this->orderzip;
    }

    public function setOrderzip(string $orderzip): self
    {
        $this->orderzip = $orderzip;

        return $this;
    }

    public function getOrdercountry(): ?string
    {
        return $this->ordercountry;
    }

    public function setOrdercountry(string $ordercountry): self
    {
        $this->ordercountry = $ordercountry;

        return $this;
    }

    public function getOrderphone(): ?string
    {
        return $this->orderphone;
    }

    public function setOrderphone(string $orderphone): self
    {
        $this->orderphone = $orderphone;

        return $this;
    }

    public function getOrderfax(): ?string
    {
        return $this->orderfax;
    }

    public function setOrderfax(string $orderfax): self
    {
        $this->orderfax = $orderfax;

        return $this;
    }

    public function getOrdershipping(): ?float
    {
        return $this->ordershipping;
    }

    public function setOrdershipping(float $ordershipping): self
    {
        $this->ordershipping = $ordershipping;

        return $this;
    }

    public function getOrdertax(): ?float
    {
        return $this->ordertax;
    }

    public function setOrdertax(float $ordertax): self
    {
        $this->ordertax = $ordertax;

        return $this;
    }

    public function getOrderemail(): ?string
    {
        return $this->orderemail;
    }

    public function setOrderemail(string $orderemail): self
    {
        $this->orderemail = $orderemail;

        return $this;
    }

    public function getOrderdate(): ?\DateTimeInterface
    {
        return $this->orderdate;
    }

    public function setOrderdate(\DateTimeInterface $orderdate): self
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    public function getOrdershipped(): ?bool
    {
        return $this->ordershipped;
    }

    public function setOrdershipped(bool $ordershipped): self
    {
        $this->ordershipped = $ordershipped;

        return $this;
    }

    public function getOrdertrackingnumber(): ?string
    {
        return $this->ordertrackingnumber;
    }

    public function setOrdertrackingnumber(?string $ordertrackingnumber): self
    {
        $this->ordertrackingnumber = $ordertrackingnumber;

        return $this;
    }


}
