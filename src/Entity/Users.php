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
     * @ORM\Column(name="UserID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserEmail", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $useremail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserPassword", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $userpassword = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserFirstName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $userfirstname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserLastName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $userlastname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserCity", type="string", length=90, nullable=true, options={"default"="NULL"})
     */
    private $usercity = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserState", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $userstate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserZip", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $userzip = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="UserEmailVerified", type="boolean", nullable=true)
     */
    private $useremailverified = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="UserRegistrationDate", type="datetime", nullable=true, options={"default"="current_timestamp()"})
     */
    private $userregistrationdate = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserVerificationCode", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $userverificationcode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserIP", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $userip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserPhone", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $userphone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserFax", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $userfax = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserCountry", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $usercountry = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserAddress", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $useraddress = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserAddress2", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $useraddress2 = 'NULL';

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function getUseremail(): ?string
    {
        return $this->useremail;
    }

    public function setUseremail(?string $useremail): self
    {
        $this->useremail = $useremail;

        return $this;
    }

    public function getUserpassword(): ?string
    {
        return $this->userpassword;
    }

    public function setUserpassword(?string $userpassword): self
    {
        $this->userpassword = $userpassword;

        return $this;
    }

    public function getUserfirstname(): ?string
    {
        return $this->userfirstname;
    }

    public function setUserfirstname(?string $userfirstname): self
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    public function getUserlastname(): ?string
    {
        return $this->userlastname;
    }

    public function setUserlastname(?string $userlastname): self
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    public function getUsercity(): ?string
    {
        return $this->usercity;
    }

    public function setUsercity(?string $usercity): self
    {
        $this->usercity = $usercity;

        return $this;
    }

    public function getUserstate(): ?string
    {
        return $this->userstate;
    }

    public function setUserstate(?string $userstate): self
    {
        $this->userstate = $userstate;

        return $this;
    }

    public function getUserzip(): ?string
    {
        return $this->userzip;
    }

    public function setUserzip(?string $userzip): self
    {
        $this->userzip = $userzip;

        return $this;
    }

    public function getUseremailverified(): ?bool
    {
        return $this->useremailverified;
    }

    public function setUseremailverified(?bool $useremailverified): self
    {
        $this->useremailverified = $useremailverified;

        return $this;
    }

    public function getUserregistrationdate(): ?\DateTimeInterface
    {
        return $this->userregistrationdate;
    }

    public function setUserregistrationdate(?\DateTimeInterface $userregistrationdate): self
    {
        $this->userregistrationdate = $userregistrationdate;

        return $this;
    }

    public function getUserverificationcode(): ?string
    {
        return $this->userverificationcode;
    }

    public function setUserverificationcode(?string $userverificationcode): self
    {
        $this->userverificationcode = $userverificationcode;

        return $this;
    }

    public function getUserip(): ?string
    {
        return $this->userip;
    }

    public function setUserip(?string $userip): self
    {
        $this->userip = $userip;

        return $this;
    }

    public function getUserphone(): ?string
    {
        return $this->userphone;
    }

    public function setUserphone(?string $userphone): self
    {
        $this->userphone = $userphone;

        return $this;
    }

    public function getUserfax(): ?string
    {
        return $this->userfax;
    }

    public function setUserfax(?string $userfax): self
    {
        $this->userfax = $userfax;

        return $this;
    }

    public function getUsercountry(): ?string
    {
        return $this->usercountry;
    }

    public function setUsercountry(?string $usercountry): self
    {
        $this->usercountry = $usercountry;

        return $this;
    }

    public function getUseraddress(): ?string
    {
        return $this->useraddress;
    }

    public function setUseraddress(?string $useraddress): self
    {
        $this->useraddress = $useraddress;

        return $this;
    }

    public function getUseraddress2(): ?string
    {
        return $this->useraddress2;
    }

    public function setUseraddress2(?string $useraddress2): self
    {
        $this->useraddress2 = $useraddress2;

        return $this;
    }


}
