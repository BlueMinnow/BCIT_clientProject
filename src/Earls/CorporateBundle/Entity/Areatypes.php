<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areatypes
 *
 * @ORM\Table(name="areatypes")
 * @ORM\Entity
 */
class Areatypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="areaType", type="string", length=45, nullable=true)
     */
    private $areatype;

    /**
     * @var integer
     *
     * @ORM\Column(name="areaTypeID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $areatypeid;



    /**
     * Set areatype
     *
     * @param string $areatype
     * @return Areatypes
     */
    public function setAreatype($areatype)
    {
        $this->areatype = $areatype;
    
        return $this;
    }

    /**
     * Get areatype
     *
     * @return string 
     */
    public function getAreatype()
    {
        return $this->areatype;
    }

    /**
     * Get areatypeid
     *
     * @return integer 
     */
    public function getAreatypeid()
    {
        return $this->areatypeid;
    }
}