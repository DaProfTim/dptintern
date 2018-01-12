<?php

namespace AppBundle\Entity\AccessControl;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Session
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=128)
     */
    protected $sessId;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $sessData;

    /**
     * @ORM\Column(type="integer", length=11, nullable=true)
     */
    protected $sessTime;

    /**
     * @ORM\Column(type="integer", length=11, nullable=true)
     */
    protected $sessLifetime;

    /**
     * Set sessId
     *
     * @param string $sessId
     *
     * @return Session
     */
    public function setSessId($sessId)
    {
        $this->sessId = $sessId;

        return $this;
    }

    /**
     * Get sessId
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sessId;
    }

    /**
     * Set sessData
     *
     * @param string $sessData
     *
     * @return Session
     */
    public function setSessData($sessData)
    {
        $this->sessData = $sessData;

        return $this;
    }

    /**
     * Get sessData
     *
     * @return string
     */
    public function getSessData()
    {
        return $this->sessData;
    }

    /**
     * Set sessTime
     *
     * @param integer $sessTime
     *
     * @return Session
     */
    public function setSessTime($sessTime)
    {
        $this->sessTime = $sessTime;

        return $this;
    }

    /**
     * Get sessTime
     *
     * @return integer
     */
    public function getSessTime()
    {
        return $this->sessTime;
    }

    /**
     * Set sessLifetime
     *
     * @param integer $sessLifetime
     *
     * @return Session
     */
    public function setSessLifetime($sessLifetime)
    {
        $this->sessLifetime = $sessLifetime;

        return $this;
    }

    /**
     * Get sessLifetime
     *
     * @return integer
     */
    public function getSessLifetime()
    {
        return $this->sessLifetime;
    }
}
