<?php

namespace Earls\FetchDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offices
 *
 * @ORM\Table(name="offices")
 * @ORM\Entity
 */
class Offices
{
    /**
     * @var string
     *
     * @ORM\Column(name="officeName", type="string", length=255, nullable=true)
     */
    private $officename;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postalZip", type="string", length=45, nullable=true)
     */
    private $postalzip;

    /**
     * @var integer
     *
     * @ORM\Column(name="officeID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $officeid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Provincestate
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Provincestate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provinceStateID", referencedColumnName="provinceStateID")
     * })
     */
    private $provincestateid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Northamericancities
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Northamericancities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city", referencedColumnName="northAmericanCityID")
     * })
     */
    private $city;


}
