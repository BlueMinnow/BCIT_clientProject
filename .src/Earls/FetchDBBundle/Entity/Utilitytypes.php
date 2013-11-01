<?php

namespace Earls\FetchDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilitytypes
 *
 * @ORM\Table(name="utilityTypes")
 * @ORM\Entity
 */
class Utilitytypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="utilityType", type="string", length=45, nullable=true)
     */
    private $utilitytype;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilityTypeID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utilitytypeid;


}
