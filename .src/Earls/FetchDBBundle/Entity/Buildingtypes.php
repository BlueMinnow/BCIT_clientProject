<?php

namespace Earls\FetchDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buildingtypes
 *
 * @ORM\Table(name="buildingTypes")
 * @ORM\Entity
 */
class Buildingtypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="buildingType", type="string", length=45, nullable=true)
     */
    private $buildingtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="buildingTypeID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $buildingtypeid;


}
