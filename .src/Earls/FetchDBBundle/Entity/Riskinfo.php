<?php

namespace Earls\FetchDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riskinfo
 *
 * @ORM\Table(name="riskInfo")
 * @ORM\Entity
 */
class Riskinfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="rentAbatement", type="string", length=45, nullable=true)
     */
    private $rentabatement;

    /**
     * @var string
     *
     * @ORM\Column(name="exteriormaintenance", type="string", length=45, nullable=true)
     */
    private $exteriormaintenance;

    /**
     * @var integer
     *
     * @ORM\Column(name="riskID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $riskid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Constructiontypes
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Constructiontypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="constructionID", referencedColumnName="constructionID")
     * })
     */
    private $constructionid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Owners
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Owners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="insuredBy", referencedColumnName="ownerID")
     * })
     */
    private $insuredby;

    /**
     * @var \Earls\FetchDBBundle\Entity\Restaurants
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Restaurants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="restaurantID", referencedColumnName="restaurantID")
     * })
     */
    private $restaurantid;


}
