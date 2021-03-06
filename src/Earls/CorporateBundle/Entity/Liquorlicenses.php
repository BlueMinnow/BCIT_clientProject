<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liquorlicenses
 *
 * @ORM\Table(name="liquorlicenses")
 * @ORM\Entity
 */
class Liquorlicenses
{
    /**
     * @var string
     *
     * @ORM\Column(name="businessLicense", type="string", length=45, nullable=true)
     */
    private $businesslicense;

    /**
     * @var string
     *
     * @ORM\Column(name="liquorLicense", type="string", length=45, nullable=true)
     */
    private $liquorlicense;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenseDate", type="date", nullable=true)
     */
    private $licensedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="liquorLicenseID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $liquorlicenseid;

    /**
     * @var \Earls\CorporateBundle\Entity\Restaurants
     *
     * @ORM\ManyToOne(targetEntity="Earls\CorporateBundle\Entity\Restaurants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="restaurantID", referencedColumnName="restaurantID")
     * })
     */
    private $restaurantid;



    /**
     * Set businesslicense
     *
     * @param string $businesslicense
     * @return Liquorlicenses
     */
    public function setBusinesslicense($businesslicense)
    {
        $this->businesslicense = $businesslicense;
    
        return $this;
    }

    /**
     * Get businesslicense
     *
     * @return string 
     */
    public function getBusinesslicense()
    {
        return $this->businesslicense;
    }

    /**
     * Set liquorlicense
     *
     * @param string $liquorlicense
     * @return Liquorlicenses
     */
    public function setLiquorlicense($liquorlicense)
    {
        $this->liquorlicense = $liquorlicense;
    
        return $this;
    }

    /**
     * Get liquorlicense
     *
     * @return string 
     */
    public function getLiquorlicense()
    {
        return $this->liquorlicense;
    }

    /**
     * Set licensedate
     *
     * @param \DateTime $licensedate
     * @return Liquorlicenses
     */
    public function setLicensedate($licensedate)
    {
        $this->licensedate = $licensedate;
    
        return $this;
    }

    /**
     * Get licensedate
     *
     * @return \DateTime 
     */
    public function getLicensedate()
    {
        return $this->licensedate;
    }

    /**
     * Get liquorlicenseid
     *
     * @return integer 
     */
    public function getLiquorlicenseid()
    {
        return $this->liquorlicenseid;
    }

    /**
     * Set restaurantid
     *
     * @param \Earls\CorporateBundle\Entity\Restaurants $restaurantid
     * @return Liquorlicenses
     */
    public function setRestaurantid(\Earls\CorporateBundle\Entity\Restaurants $restaurantid = null)
    {
        $this->restaurantid = $restaurantid;
    
        return $this;
    }

    /**
     * Get restaurantid
     *
     * @return \Earls\CorporateBundle\Entity\Restaurants 
     */
    public function getRestaurantid()
    {
        return $this->restaurantid;
    }
}