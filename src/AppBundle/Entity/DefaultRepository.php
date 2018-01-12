<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMInvalidArgumentException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * DefaultRepository.
 *
 * @package AppBundle\Entity
 * @copyright 2017 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class DefaultRepository extends EntityRepository
{
    /**
     * Gibt die Entity mit der uebergebenen ID zurueck oder wirft eine EntityNotFoundException.
     *
     * @param int $entityId ID
     * @return object Entity-Instanz
     * @throws EntityNotFoundException
     */
    public function findOrThrowNotFound($entityId)
    {
        $entity = null;
        try {
            $entity = $this->find($entityId);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entity)) {
            throw new EntityNotFoundException($this->getClassName());
        }

        return $entity;
    }

    /**
     * Gibt die Entity mit der uebergebenen ID zurueck oder legt eine neue Instanz an, falls nicht gefunden.
     *
     * @param int $entityId ID
     * @param string $entityClassname Entity-Klassenname
     * @throws \LogicException
     * @return object Entity-Instanz
     */
    public function findOrCreate($entityId, $entityClassname)
    {
        $entity = null;
        try {
            $entity = $this->find($entityId);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entity)) {
            if (!class_exists($entityClassname)) {
                throw new \LogicException('Entity class not found: ' . $entityClassname);
            }
            $entity = new $entityClassname();
        }

        return $entity;
    }

    /**
     * Gibt die Entity mit der uebergebenen ID zurueck oder wirft eine AccessDeniedException.
     *
     * @param int $entityId ID
     * @return object Entity-Instanz
     * @throws AccessDeniedException
     */
    public function findOrThrowAccessDenied($entityId)
    {
        $entity = null;
        try {
            $entity = $this->find($entityId);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entity)) {
            throw new AccessDeniedException($this->getClassName());
        }

        return $entity;
    }

    /**
     * Gibt die Entity mit den uebergebenen Kritieren zurueck oder wirft eine EntityNotFoundException.
     *
     * @param array $criteria
     * @return object Entity-Instanz
     * @throws EntityNotFoundException
     */
    public function findOneByOrThrowNotFound(array $criteria)
    {
        $entities = null;
        try {
            $entities = $this->findOneBy($criteria);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entities)) {
            throw new EntityNotFoundException($this->getClassName());
        }

        return $entities;
    }

    /**
     * Gibt die Entity mit den uebergebenen Kritieren zurueck oder wirft eine AccessDeniedException.
     *
     * @param array $criteria
     * @return object Entity-Instanz
     * @throws AccessDeniedException
     */
    public function findOneByOrThrowAccessDenied(array $criteria)
    {
        $entities = null;
        try {
            $entities = $this->findOneBy($criteria);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entities)) {
            throw new AccessDeniedException($this->getClassName());
        }

        return $entities;
    }

    /**
     * Gibt Entities mit den uebergebenen Kritieren zurueck oder wirft eine EntityNotFoundException.
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     * @return array Entities
     * @throws EntityNotFoundException
     */
    public function findByOrThrowNotFound(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $entities = null;
        try {
            $entities = $this->findBy($criteria, $orderBy, $limit, $offset);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entities)) {
            throw new EntityNotFoundException($this->getClassName());
        }

        return $entities;
    }

    /**
     * Gibt Entities mit den uebergebenen Kritieren zurueck oder wirft eine AccessDeniedException.
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     * @return array Entities
     * @throws AccessDeniedException
     */
    public function findByOrThrowAccessDenied(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $entities = null;
        try {
            $entities = $this->findBy($criteria, $orderBy, $limit, $offset);
        } catch (\Exception $e) {
            // $entity bleibt null
        }

        if (empty($entities)) {
            throw new AccessDeniedException($this->getClassName());
        }

        return $entities;
    }

    /**
     * Speichert die Entity.
     *
     * @param object $entity
     * @throws ORMInvalidArgumentException
     * @throws OptimisticLockException
     */
    public function save($entity)
    {
        $em = $this->getEntityManager();
        $em->persist($entity);
        $em->flush();
    }

    /**
     * Entfernt die Entity.
     *
     * @param object $entity
     * @throws ORMInvalidArgumentException
     * @throws OptimisticLockException
     */
    public function remove($entity)
    {
        $em = $this->getEntityManager();
        $em->remove($entity);
        $em->flush();
    }
}
