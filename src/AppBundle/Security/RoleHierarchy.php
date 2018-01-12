<?php

namespace AppBundle\Security;

use AppBundle\Entity\AccessControl\Rolle;
use Doctrine\ORM\EntityManager;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;

/**
 * Ueberschreibt die Rollen Hierarchie vom Symfony, damit sie in der Datenbank gespeichert werden kann.
 *
 * @copyright 2014 Npo Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 * @link http://stackoverflow.com/questions/11602337/how-to-change-role-hierarchy-storage-in-symfony2
 * @Service("security.role_hierarchy")
 */
class RoleHierarchy extends \Symfony\Component\Security\Core\Role\RoleHierarchy
{
    /**
     * EntityManger.
     * @var $em EntityManager
     */
    private $em;

    /**
     * RoleHierarchy constructor.
     *
     * @param EntityManager $em
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager")
     * })
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        parent::__construct($this->buildRolesTree());
    }

    /**
     * Erstellt das Array der Rollen-Hierarchie (in der Form, wie das normalerweise in der Config angegeben werden wuerde).
     *
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function buildRolesTree()
    {
        $hierarchy = array();
        $roles = $this->em->createQuery('select r from AppBundle\Entity\AccessControl\Rolle r')->execute();
        foreach ($roles as $role) {
            /** @var $role Rolle */
            $hierarchy[$role->getName()] = array();
        }

        return $hierarchy;
    }
}
