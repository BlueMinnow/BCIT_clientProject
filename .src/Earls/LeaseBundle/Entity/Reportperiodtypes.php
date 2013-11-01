<?php

namespace Earls\LeaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportperiodtypes
 *
 * @ORM\Table(name="reportPeriodTypes")
 * @ORM\Entity
 */
class Reportperiodtypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="periodType", type="string", length=45, nullable=true)
     */
    private $periodtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="reportTypeID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reporttypeid;


}
