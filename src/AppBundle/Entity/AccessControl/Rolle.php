<?php

namespace AppBundle\Entity\AccessControl;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 */
class Rolle implements RoleInterface, \Serializable
{
    /** Prefix, mit dem alle Rollen fuer Symfony beginnen muessen. */
    const ROLE_NAME_PREFIX = "ROLE_";

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true, name="name")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="beschreibung")
     */
    protected $beschreibung;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Rolle
     */
    public function setName($name)
    {
        // Stelle sicher, dass der Rollenname mit ROLE_NAME_PREFIX beginnt
        if ($name !== null) {
            if (strpos($name, self::ROLE_NAME_PREFIX) !== 0) {
                $name = self::ROLE_NAME_PREFIX . $name;
            }
            $name = strtoupper(preg_replace("/[^A-Za-z0-9_]+/", "", str_replace(" ", "_", $name)));
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set beschreibung
     *
     * @param string $beschreibung
     *
     * @return Rolle
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;

        return $this;
    }

    /**
     * Get beschreibung
     *
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    public function getRole()
    {
        return $this->name;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return \serialize(array(
            $this->id,
            $this->name,
            $this->beschreibung
        ));
    }

    /**
     * @param string $serialized String Repraesentation
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->name,
            $this->beschreibung
            ) = \unserialize($serialized);
    }
}
