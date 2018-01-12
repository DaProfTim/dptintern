<?php

namespace AppBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Fuegt Felder fuer CreatedBy und UpdatedBy mit entsprechenden Methoden hinzu.
 *
 * @package AppBundle\Traits\Entity
 * @copyright 2015 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
trait Blameable
{
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Gedmo\Blameable(on="create")
     * @var string
     */
    private $createdBy;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Gedmo\Blameable(on="update")
     * @var string
     */
    private $updatedBy;

    /**
     * Sets createdBy.
     *
     * @param  string $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Returns createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets updatedBy.
     *
     * @param  string $updatedBy
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Returns updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
