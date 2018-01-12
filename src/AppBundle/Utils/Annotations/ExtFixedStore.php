<?php

namespace AppBundle\Utils\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * Annotation fuer Entities, um diese als Fixed Stores zu markieren. Der Inhalt der Datenbanktabelle wird dann als Ext-Store generiert, wenn das ExtJsStoreGenerationCommand ausgefuehrt wird.
 *
 * @package AppBundle\Utils\Annotations
 * @copyright 2016 NPO Applications GmbH
 * @author Alex Schnelle <alexander.schnelle@npo-applications.de>
 *
 * @Annotation
 * @Target({"CLASS"})
 */
class ExtFixedStore extends Annotation
{

}
