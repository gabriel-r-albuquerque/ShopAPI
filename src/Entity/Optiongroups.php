<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Optiongroups
 *
 * @ORM\Table(name="optiongroups")
 * @ORM\Entity
 */
class Optiongroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="OptionGroupID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optiongroupid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OptionGroupName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $optiongroupname = 'NULL';

    public function getOptiongroupid(): ?int
    {
        return $this->optiongroupid;
    }

    public function getOptiongroupname(): ?string
    {
        return $this->optiongroupname;
    }

    public function setOptiongroupname(?string $optiongroupname): self
    {
        $this->optiongroupname = $optiongroupname;

        return $this;
    }


}
