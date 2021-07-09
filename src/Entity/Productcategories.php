<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productcategories
 *
 * @ORM\Table(name="productcategories")
 * @ORM\Entity
 */
class Productcategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="CategoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="CategoryName", type="string", length=50, nullable=false)
     */
    private $categoryname;

    public function getCategoryid(): ?int
    {
        return $this->categoryid;
    }

    public function getCategoryname(): ?string
    {
        return $this->categoryname;
    }

    public function setCategoryname(string $categoryname): self
    {
        $this->categoryname = $categoryname;

        return $this;
    }


}
