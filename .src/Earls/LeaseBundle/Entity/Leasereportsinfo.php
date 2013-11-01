<?php

namespace Earls\LeaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leasereportsinfo
 *
 * @ORM\Table(name="leaseReportsInfo")
 * @ORM\Entity
 */
class Leasereportsinfo
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="isCertifiedSales", type="boolean", nullable=true)
     */
    private $iscertifiedsales;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="date", nullable=true)
     */
    private $duedate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAudit", type="boolean", nullable=true)
     */
    private $isaudit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isCertified", type="boolean", nullable=true)
     */
    private $iscertified;

    /**
     * @var integer
     *
     * @ORM\Column(name="leaseReportInfoID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $leasereportinfoid;

    /**
     * @var \Earls\LeaseBundle\Entity\Reportperiodtypes
     *
     * @ORM\ManyToOne(targetEntity="Earls\LeaseBundle\Entity\Reportperiodtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportTypeID", referencedColumnName="reportTypeID")
     * })
     */
    private $reporttypeid;

    /**
     * @var \Earls\LeaseBundle\Entity\Leases
     *
     * @ORM\ManyToOne(targetEntity="Earls\LeaseBundle\Entity\Leases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leaseID", referencedColumnName="leaseID")
     * })
     */
    private $leaseid;


}
