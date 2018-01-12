<?php

namespace AppBundle\Entity\AccessControl;

use AppBundle\Traits\Entity\Blameable;
use AppBundle\Traits\Entity\Timestampable;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Exclude;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AccessControl\BenutzerRepository")
 */
class Benutzer implements AdvancedUserInterface, \Serializable
{
    use Blameable;
    use Timestampable;

    /** Lebenszeit eines gesetzten Reset-Tokens. */
    const RESET_TOKEN_LIFETIME = 172800;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $istAktiv;

    /**
     * @ORM\Column(type="datetime", nullable=true, name="erster_login")
     */
    protected $ersterLogin;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $ablaufdatum;

    /**
     * @ORM\Column(type="string", unique=true, length=100, nullable=true)
     */
    protected $benutzername;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     * @Exclude
     */
    protected $loginVersuche;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Exclude
     */
    protected $loginSperrdatum;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Exclude
     */
    private $passwort;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Exclude
     */
    private $resetToken;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Exclude
     */
    private $emailTmp;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $geschlecht;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\AccessControl\Rolle", fetch="EAGER")
     * @ORM\JoinTable(
     *     name="rolle_benutzer",
     *     joinColumns={@ORM\JoinColumn(name="benutzer_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="rolle_id", referencedColumnName="id", nullable=false)}
     * )
     */
    protected $rolle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rolle = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set id
     *
     * @param integer $id
     *
     * @return Benutzer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set ersterLogin
     *
     * @param \DateTime $ersterLogin
     *
     * @return Benutzer
     */
    public function setErsterLogin($ersterLogin)
    {
        $this->ersterLogin = $ersterLogin;

        return $this;
    }

    /**
     * Get ersterLogin
     *
     * @return \DateTime
     */
    public function getErsterLogin()
    {
        return $this->ersterLogin;
    }

    /**
     * Add rolle
     *
     * @param Rolle $rolle
     *
     * @return Benutzer
     */
    public function addRolle(Rolle $rolle)
    {
        $this->rolle[] = $rolle;

        return $this;
    }

    /**
     * Remove rolle
     *
     * @param Rolle $rolle
     */
    public function removeRolle(Rolle $rolle)
    {
        $this->rolle->removeElement($rolle);
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $rolle
     *
     * @return Benutzer
     */
    public function setRolle($rolle)
    {
        $this->rolle = $rolle;

        return $this;
    }

    /**
     * Clear all rolle
     *
     * @return Benutzer
     */
    public function clearRolle()
    {
        $this->getRolle()->clear();

        return $this;
    }

    /**
     * Get rolle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRolle()
    {
        return $this->rolle;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Benutzer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->setBenutzername($email);

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set passwort
     *
     * @param string $passwort
     *
     * @return Benutzer
     */
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;

        return $this;
    }

    /**
     * Get passwort
     *
     * @return string
     */
    public function getPasswort()
    {
        return $this->passwort;
    }

    public function getPassword()
    {
        return $this->passwort;
    }

    /**
     * Set resetToken
     *
     * @param string $resetToken
     *
     * @return Benutzer
     */
    public function setResetToken($resetToken)
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    /**
     * Get resetToken
     *
     * @return string
     */
    public function getResetToken()
    {
        return $this->resetToken;
    }

    /**
     * Set emailTmp
     *
     * @param string $emailTmp
     *
     * @return Benutzer
     */
    public function setEmailTmp($emailTmp)
    {
        $this->emailTmp = $emailTmp;

        return $this;
    }

    /**
     * Get emailTmp
     *
     * @return string
     */
    public function getEmailTmp()
    {
        return $this->emailTmp;
    }

    /**
     * Set vorname
     *
     * @param string $vorname
     *
     * @return Benutzer
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set nachname
     *
     * @param string $nachname
     *
     * @return Benutzer
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set geschlecht
     *
     * @param string $geschlecht
     *
     * @return Benutzer
     */
    public function setGeschlecht($geschlecht)
    {
        $this->geschlecht = $geschlecht;

        return $this;
    }

    /**
     * Get geschlecht
     *
     * @return string
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->istAktiv,
            $this->ablaufdatum,
            $this->rolle,
            $this->benutzername,
            $this->passwort
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
            $this->istAktiv,
            $this->ablaufdatum,
            $this->rolle,
            $this->benutzername,
            $this->passwort
            ) = unserialize($serialized);
    }

    /**
     * Liefert true, wenn der Token aelter als RESET_TOKEN_LIFETIME.
     *
     * @return bool true, wenn der Token aelter als RESET_TOKEN_LIFETIME
     */
    public function isResetTokenExpired()
    {
        return ($this->getUpdatedAt() === null
            || $this->getUpdatedAt()->add(new \DateInterval('PT' . (int) self::RESET_TOKEN_LIFETIME . 'S')) < new \DateTime());
    }

    public function getRoles()
    {
        $roles = array();
        if (!empty($this->rolle)) {
            foreach ($this->rolle as $role) {
                /** @var $role Rolle */
                $roles[] = $role->getRole();
            }
        }
        return $roles;
    }

    public function hasRole($roleName)
    {
        $hasRole = false;
        if (!empty($this->rolle)) {
            foreach ($this->rolle as $role) {
                /** @var $role Rolle */
                if ($role->getName() == $roleName) {
                    $hasRole = true;
                    break;
                }
            }
        }
        return $hasRole;
    }

    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->istAktiv;
    }

    public function getSalt()
    {
        // Generierung erfolgt automatisch durch bcrypt
        return null;
    }

    /**
     * Set ablaufdatum
     *
     * @param \DateTime $ablaufdatum
     *
     * @return Benutzer
     */
    public function setAblaufdatum($ablaufdatum)
    {
        $this->ablaufdatum = $ablaufdatum;

        return $this;
    }

    /**
     * Get ablaufdatum
     *
     * @return \DateTime
     */
    public function getAblaufdatum()
    {
        return $this->ablaufdatum;
    }

    public function getUsername()
    {
        return $this->benutzername;
    }

    /**
     * Set benutzername
     *
     * @param string $benutzername
     *
     * @return Benutzer
     */
    public function setBenutzername($benutzername)
    {
        $this->benutzername = $benutzername;

        return $this;
    }

    /**
     * Get benutzername
     *
     * @return string
     */
    public function getBenutzername()
    {
        return $this->benutzername;
    }

    /**
     * Set istAktiv
     *
     * @param boolean $istAktiv
     *
     * @return Benutzer
     */
    public function setIstAktiv($istAktiv)
    {
        $this->istAktiv = $istAktiv;

        return $this;
    }

    /**
     * Get istAktiv
     *
     * @return boolean
     */
    public function getIstAktiv()
    {
        return $this->istAktiv;
    }

    /**
     * Set loginVersuche
     *
     * @param integer $loginVersuche
     *
     * @return Benutzer
     */
    public function setLoginVersuche($loginVersuche)
    {
        $this->loginVersuche = $loginVersuche;

        return $this;
    }

    /**
     * Get loginVersuche
     *
     * @return integer
     */
    public function getLoginVersuche()
    {
        return $this->loginVersuche;
    }

    /**
     * Set loginSperrdatum
     *
     * @param \DateTime $loginSperrdatum
     *
     * @return Benutzer
     */
    public function setLoginSperrdatum($loginSperrdatum)
    {
        $this->loginSperrdatum = $loginSperrdatum;

        return $this;
    }

    /**
     * Get loginSperrdatum
     *
     * @return \DateTime
     */
    public function getLoginSperrdatum()
    {
        return $this->loginSperrdatum;
    }
}
