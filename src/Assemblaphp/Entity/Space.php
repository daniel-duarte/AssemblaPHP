<?php
/**
 * Created for No Reason on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp\Entity;

/**
 * Class Space
 *
 * @package Assemblaphp\Entity
 */
class Space extends EntityAbstract
{
    private $id;
    private $name;
    private $description;
    private $wikiName;
    private $publicPermissions;
    private $teamPermissions;
    private $watcherPermissions;
    private $sharePermissions;
    private $teamTabRole;
    private $createdAt;
    private $updatedAt;
    private $defaultShowpage;
    private $tabsOrder;
    private $parentId;
    private $restricted;
    private $restrictedDate;
    private $commercialFrom;
    private $banner;
    private $bannerHeight;
    private $bannerText;
    private $bannerLink;
    private $style;
    private $status;
    private $approved;
    private $isManager;
    private $isVolunteer;
    private $isCommercial;
    private $canJoin;
    private $wikiFormat;

    /**
     * @param mixed $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param mixed $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @param mixed $bannerHeight
     */
    public function setBannerHeight($bannerHeight)
    {
        $this->bannerHeight = $bannerHeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerHeight()
    {
        return $this->bannerHeight;
    }

    /**
     * @param mixed $bannerLink
     */
    public function setBannerLink($bannerLink)
    {
        $this->bannerLink = $bannerLink;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerLink()
    {
        return $this->bannerLink;
    }

    /**
     * @param mixed $bannerText
     */
    public function setBannerText($bannerText)
    {
        $this->bannerText = $bannerText;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerText()
    {
        return $this->bannerText;
    }

    /**
     * @param mixed $canJoin
     */
    public function setCanJoin($canJoin)
    {
        $this->canJoin = $canJoin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanJoin()
    {
        return $this->canJoin;
    }

    /**
     * @param mixed $commercialFrom
     */
    public function setCommercialFrom($commercialFrom)
    {
        $this->commercialFrom = $commercialFrom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommercialFrom()
    {
        return $this->commercialFrom;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $defaultShowpage
     */
    public function setDefaultShowpage($defaultShowpage)
    {
        $this->defaultShowpage = $defaultShowpage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultShowpage()
    {
        return $this->defaultShowpage;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $isCommercial
     */
    public function setIsCommercial($isCommercial)
    {
        $this->isCommercial = $isCommercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsCommercial()
    {
        return $this->isCommercial;
    }

    /**
     * @param mixed $isVolunteer
     */
    public function setIsVolunteer($isVolunteer)
    {
        $this->isVolunteer = $isVolunteer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsVolunteer()
    {
        return $this->isVolunteer;
    }

    /**
     * @param mixed $isManager
     */
    public function setIsManager($isManager)
    {
        $this->isManager = $isManager;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsManager()
    {
        return $this->$isManager;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $publicPermissions
     */
    public function setPublicPermissions($publicPermissions)
    {
        $this->publicPermissions = $publicPermissions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicPermissions()
    {
        return $this->publicPermissions;
    }

    /**
     * @param mixed $restricted
     */
    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestricted()
    {
        return $this->restricted;
    }

    /**
     * @param mixed $restrictedDate
     */
    public function setRestrictedDate($restrictedDate)
    {
        $this->restrictedDate = $restrictedDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestrictedDate()
    {
        return $this->restrictedDate;
    }

    /**
     * @param mixed $sharePermissions
     */
    public function setSharePermissions($sharePermissions)
    {
        $this->sharePermissions = $sharePermissions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSharePermissions()
    {
        return $this->sharePermissions;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $tabsOrder
     */
    public function setTabsOrder($tabsOrder)
    {
        $this->tabsOrder = $tabsOrder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTabsOrder()
    {
        return $this->tabsOrder;
    }

    /**
     * @param mixed $teamPermissions
     */
    public function setTeamPermissions($teamPermissions)
    {
        $this->teamPermissions = $teamPermissions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamPermissions()
    {
        return $this->teamPermissions;
    }

    /**
     * @param mixed $teamTabRole
     */
    public function setTeamTabRole($teamTabRole)
    {
        $this->teamTabRole = $teamTabRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamTabRole()
    {
        return $this->teamTabRole;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $watcherPermissions
     */
    public function setWatcherPermissions($watcherPermissions)
    {
        $this->watcherPermissions = $watcherPermissions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWatcherPermissions()
    {
        return $this->watcherPermissions;
    }

    /**
     * @param mixed $wikiFormat
     */
    public function setWikiFormat($wikiFormat)
    {
        $this->wikiFormat = $wikiFormat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWikiFormat()
    {
        return $this->wikiFormat;
    }

    /**
     * @param mixed $wikiName
     */
    public function setWikiName($wikiName)
    {
        $this->wikiName = $wikiName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWikiName()
    {
        return $this->wikiName;
    }


} 