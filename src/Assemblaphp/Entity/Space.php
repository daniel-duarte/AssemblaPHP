<?php
/**
 * Created for Krush on 1/20/14.
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
    protected $id;
    protected $name;
    protected $description;
    protected $wikiName;
    protected $publicPermissions;
    protected $teamPermissions;
    protected $watcherPermissions;
    protected $sharePermissions;
    protected $teamTabRole;
    protected $createdAt;
    protected $updatedAt;
    protected $defaultShowpage;
    protected $tabsOrder;
    protected $parentId;
    protected $restricted;
    protected $restrictedDate;
    protected $commercialFrom;
    protected $banner;
    protected $bannerHeight;
    protected $bannerText;
    protected $bannerLink;
    protected $style;
    protected $status;
    protected $approved;
    protected $isManager;
    protected $isVolunteer;
    protected $isCommercial;
    protected $canJoin;
    protected $wikiFormat;

    /**
     * @param mixed $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
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
    }

    /**
     * @return mixed
     */
    public function getIsVolunteer()
    {
        return $this->isVolunteer;
    }

    /**
     * @param mixed $is_manager
     */
    public function setIsManager($is_manager)
    {
        $this->is_manager = $is_manager;
    }

    /**
     * @return mixed
     */
    public function getIsManager()
    {
        return $this->is_manager;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    }

    /**
     * @return mixed
     */
    public function getWikiName()
    {
        return $this->wikiName;
    }
} 