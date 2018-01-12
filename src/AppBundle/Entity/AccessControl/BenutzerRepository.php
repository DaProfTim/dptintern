<?php

namespace AppBundle\Entity\AccessControl;

use AppBundle\Entity\DefaultRepository;

/**
 * Repository fuer Benutzer.
 *
 * @package AppBundle\Entity\AccessControl
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class BenutzerRepository extends DefaultRepository
{
    /**
     * Liefert eine Collection mit den uebergebenen Parametern/Filtern.
     *
     * @param int $start Start
     * @param int $limit Limit
     * @param string $sortProperty Sortierungsfeld
     * @param string $sortDir Sortierungsrichtung
     * @param array $limitRoles Zeige nur Benutzer mit diesen Rollen; wenn leer, alle
     * @return array Array mit 'data' => Collection und 'count' => Anzahl Datensaetze
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function getCollection($start, $limit, $sortProperty, $sortDir, $limitRoles = array())
    {
        $query = $this->createQueryBuilder('b')
            ->leftJoin('b.rolle', 'r')
            ->select('b');
        $queryCount = $this->createQueryBuilder('b')
            ->leftJoin('b.rolle', 'r')
            ->select('COUNT(b.id)');

        // Rollen Einschraenkung
        if (!empty($limitRoles)) {
            $query->where('r.name IN (:limitRoles)')->setParameter('limitRoles', $limitRoles);
            $queryCount->where('r.name IN (:limitRoles)')->setParameter('limitRoles', $limitRoles);
        }

        // Sortieren
        if (!empty($sortProperty)) {
            switch ($sortProperty) {
                case 'id':
                case 'email':
                case 'istAktiv':
                case 'vorname':
                case 'nachname':
                default:
                    $sortProperty = 'b.id';
            }
            $query->orderBy($sortProperty, $sortDir);
        } else {
            $query->orderBy('b.id', 'ASC');
        }

        $count = $queryCount->getQuery()->getSingleScalarResult();
        $projects = $query->setFirstResult($start)->setMaxResults($limit)->getQuery()->getResult();

        $response = array(
            'data' => $projects,
            'total' => $count
        );

        /*
         * TODO: Paginator benutzen
         *
         * $paginator = new Paginator($logEntriesQry, $fetchJoinCollection = true);
         * $data = iterator_to_array($paginator->getIterator());
         */

        return $response;
    }

    /**
     * Liefert true, wenn kein anderer Benutzer mit der E-Mail Adresse des uebergebenen Benutzers existiert.
     *
     * @param Benutzer $ben Benutzer
     * @return bool true, wenn unique
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function isUniqueEmail($ben)
    {
        $query = $this->createQueryBuilder('b')
            ->select('COUNT(b)')
            ->where('b.email = :email');
        $parameters = array(
            'email' => $ben->getEmail()
        );
        if (!empty($ben->getId())) {
            $query->andWhere('b.id != :benutzerId');
            $parameters['benutzerId'] = $ben->getId();
        }
        $query->setParameters($parameters);
        $count = $query->getQuery()->getSingleScalarResult();

        return $count == 0;
    }
}
