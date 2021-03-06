<?php

namespace Earls\CorporateBundle\Form\Model;

use Earls\CorporateBundle\Entity\Corporations;
use Earls\CorporateBundle\Entity\Offices;
use Earls\CorporateBundle\Entity\Jurisdictions;
use Earls\CorporateBundle\Entity\Corporatedirectors;
use Earls\CorporateBundle\Entity\Memberships;

use Symfony\Component\Validator\Constraints as Assert;


class CorpInfoModel {

    protected $corporationId;
    protected $corporationinfo;
    protected $officeinfo;
    protected $jurisdictioninfo;
    protected $corpdirectorinfo;
    protected $membershipinfo;

    public function setCorporationId($corporationId)
    {
        $this->corporationId = $corporationId;
    }

    public function getCorporationId()
    {
        return $this->corporationId;
    }

    public function setCorporationInfo(Corporations $corporationinfo)
    {
        $this->corporationinfo = $corporationinfo;
    }

    public function getCorporationInfo()
    {
        return $this->corporationinfo;
    }

    public function setOfficeInfo(Offices $officeinfo)
    {
        $this->officeinfo = $officeinfo;
    }

    public function getOfficeInfo()
    {
        return $this->officeinfo;
    }

    public function setJurisdictionInfo(Jurisdictions $jurisdictioninfo)
    {
        $this->jursidictioninfo = $jurisdictioninfo;
    }

    public function getJurisdictionInfo()
    {
        return $this->jurisdictioninfo;
    }

    public function setCorpdirectorInfo(Corporatedirectors $corpdirectorinfo)
    {
        $this->corpdirectorinfo = $corpdirectorinfo;
    }

    public function getCorpdirectorInfo()
    {
        return $this->corpdirectorinfo;
    }

    public function setMembershipInfo(Memberships $membershipinfo)
    {
        $this->membershipinfo = $membershipinfo;
    }

    public function getMembershipInfo()
    {
        return $this->membershipinfo;
    }
} 