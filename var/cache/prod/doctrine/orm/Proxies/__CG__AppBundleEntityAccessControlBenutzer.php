<?php

namespace Proxies\__CG__\AppBundle\Entity\AccessControl;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Benutzer extends \AppBundle\Entity\AccessControl\Benutzer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'istAktiv', 'ersterLogin', 'ablaufdatum', 'benutzername', 'loginVersuche', 'loginSperrdatum', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'passwort', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'resetToken', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'emailTmp', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'vorname', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'nachname', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'geschlecht', 'rolle', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'createdBy', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'updatedBy', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', 'id', 'istAktiv', 'ersterLogin', 'ablaufdatum', 'benutzername', 'loginVersuche', 'loginSperrdatum', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'passwort', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'resetToken', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'emailTmp', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'vorname', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'nachname', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'geschlecht', 'rolle', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'createdBy', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'updatedBy', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\AccessControl\\Benutzer' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Benutzer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setErsterLogin($ersterLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErsterLogin', [$ersterLogin]);

        return parent::setErsterLogin($ersterLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getErsterLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErsterLogin', []);

        return parent::getErsterLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function addRolle(\AppBundle\Entity\AccessControl\Rolle $rolle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRolle', [$rolle]);

        return parent::addRolle($rolle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRolle(\AppBundle\Entity\AccessControl\Rolle $rolle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRolle', [$rolle]);

        return parent::removeRolle($rolle);
    }

    /**
     * {@inheritDoc}
     */
    public function setRolle($rolle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRolle', [$rolle]);

        return parent::setRolle($rolle);
    }

    /**
     * {@inheritDoc}
     */
    public function clearRolle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearRolle', []);

        return parent::clearRolle();
    }

    /**
     * {@inheritDoc}
     */
    public function getRolle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRolle', []);

        return parent::getRolle();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswort($passwort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswort', [$passwort]);

        return parent::setPasswort($passwort);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswort', []);

        return parent::getPasswort();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setResetToken($resetToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResetToken', [$resetToken]);

        return parent::setResetToken($resetToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getResetToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResetToken', []);

        return parent::getResetToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailTmp($emailTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailTmp', [$emailTmp]);

        return parent::setEmailTmp($emailTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailTmp', []);

        return parent::getEmailTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setVorname($vorname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVorname', [$vorname]);

        return parent::setVorname($vorname);
    }

    /**
     * {@inheritDoc}
     */
    public function getVorname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVorname', []);

        return parent::getVorname();
    }

    /**
     * {@inheritDoc}
     */
    public function setNachname($nachname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNachname', [$nachname]);

        return parent::setNachname($nachname);
    }

    /**
     * {@inheritDoc}
     */
    public function getNachname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNachname', []);

        return parent::getNachname();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeschlecht($geschlecht)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeschlecht', [$geschlecht]);

        return parent::setGeschlecht($geschlecht);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeschlecht()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeschlecht', []);

        return parent::getGeschlecht();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function isResetTokenExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isResetTokenExpired', []);

        return parent::isResetTokenExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($roleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$roleName]);

        return parent::hasRole($roleName);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAblaufdatum($ablaufdatum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAblaufdatum', [$ablaufdatum]);

        return parent::setAblaufdatum($ablaufdatum);
    }

    /**
     * {@inheritDoc}
     */
    public function getAblaufdatum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAblaufdatum', []);

        return parent::getAblaufdatum();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setBenutzername($benutzername)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBenutzername', [$benutzername]);

        return parent::setBenutzername($benutzername);
    }

    /**
     * {@inheritDoc}
     */
    public function getBenutzername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBenutzername', []);

        return parent::getBenutzername();
    }

    /**
     * {@inheritDoc}
     */
    public function setIstAktiv($istAktiv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIstAktiv', [$istAktiv]);

        return parent::setIstAktiv($istAktiv);
    }

    /**
     * {@inheritDoc}
     */
    public function getIstAktiv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIstAktiv', []);

        return parent::getIstAktiv();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginVersuche($loginVersuche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginVersuche', [$loginVersuche]);

        return parent::setLoginVersuche($loginVersuche);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginVersuche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginVersuche', []);

        return parent::getLoginVersuche();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginSperrdatum($loginSperrdatum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginSperrdatum', [$loginSperrdatum]);

        return parent::setLoginSperrdatum($loginSperrdatum);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginSperrdatum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginSperrdatum', []);

        return parent::getLoginSperrdatum();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy($updatedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
