<?php

namespace Earls\FetchDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corporatedirectors
 *
 * @ORM\Table(name="corporateDirectors")
 * @ORM\Entity
 */
class Corporatedirectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=45, nullable=true)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="corporatedirectorID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $corporatedirectorid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Directors
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Directors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="directorID", referencedColumnName="directorID")
     * })
     */
    private $directorid;

    /**
     * @var \Earls\FetchDBBundle\Entity\Corporations
     *
     * @ORM\ManyToOne(targetEntity="Earls\FetchDBBundle\Entity\Corporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporateID", referencedColumnName="corporateID")
     * })
     */
    private $corporateid;


}
