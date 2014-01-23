<?php
/**
 * Created for Krush on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp\Entity;

/**
 * Class Ticket
 *
 * @package Assemblaphp
 */
class Ticket extends EntityAbstract
{
    protected $id;
    protected $number;
    protected $summary;
    protected $description;
    protected $priority;
    protected $completedDate;
    protected $componentId;
    protected $createdOn;
    protected $permissionType;
    protected $importance;
    protected $isStory;
    protected $milestoneId;
    protected $tags;
    protected $followers;
    protected $notificationList;
    protected $spaceId;
    protected $state;
    protected $status;
    protected $storyImportance;
    protected $updatedAt;
    protected $workingHours;
    protected $estimate;
    protected $totalEstimate;
    protected $totalInvestedHours;
    protected $totalWorkingHours;
    protected $assignedToId;
    protected $reporterId;
    protected $customFields;
    protected $hierarchyType;

    /**
     * @param mixed $assignedToId
     */
    public function setAssignedToId($assignedToId)
    {
        $this->assignedToId = $assignedToId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssignedToId()
    {
        return $this->assignedToId;
    }

    /**
     * @param mixed $completedDate
     */
    public function setCompletedDate($completedDate)
    {
        $this->completedDate = $completedDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * @param mixed $componentId
     */
    public function setComponentId($componentId)
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * @param mixed $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param mixed $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->customFields;
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
     * @param mixed $estimate
     */
    public function setEstimate($estimate)
    {
        $this->estimate = $estimate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstimate()
    {
        return $this->estimate;
    }

    /**
     * @param mixed $followers
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param mixed $hierarchyType
     */
    public function setHierarchyType($hierarchyType)
    {
        $this->hierarchyType = $hierarchyType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHierarchyType()
    {
        return $this->hierarchyType;
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
     * @param mixed $importance
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @param mixed $isStory
     */
    public function setIsStory($isStory)
    {
        $this->isStory = $isStory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsStory()
    {
        return $this->isStory;
    }

    /**
     * @param mixed $milestoneId
     */
    public function setMilestoneId($milestoneId)
    {
        $this->milestoneId = $milestoneId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneId()
    {
        return $this->milestoneId;
    }

    /**
     * @param mixed $notificationList
     */
    public function setNotificationList($notificationList)
    {
        $this->notificationList = $notificationList;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotificationList()
    {
        return $this->notificationList;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $permissionType
     */
    public function setPermissionType($permissionType)
    {
        $this->permissionType = $permissionType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $reporterId
     */
    public function setReporterId($reporterId)
    {
        $this->reporterId = $reporterId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReporterId()
    {
        return $this->reporterId;
    }

    /**
     * @param mixed $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->spaceId = $spaceId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpaceId()
    {
        return $this->spaceId;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
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
     * @param mixed $storyImportance
     */
    public function setStoryImportance($storyImportance)
    {
        $this->storyImportance = $storyImportance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStoryImportance()
    {
        return $this->storyImportance;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $totalEstimate
     */
    public function setTotalEstimate($totalEstimate)
    {
        $this->totalEstimate = $totalEstimate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalEstimate()
    {
        return $this->totalEstimate;
    }

    /**
     * @param mixed $totalInvestedHours
     */
    public function setTotalInvestedHours($totalInvestedHours)
    {
        $this->totalInvestedHours = $totalInvestedHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalInvestedHours()
    {
        return $this->totalInvestedHours;
    }

    /**
     * @param mixed $totalWorkingHours
     */
    public function setTotalWorkingHours($totalWorkingHours)
    {
        $this->totalWorkingHours = $totalWorkingHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalWorkingHours()
    {
        return $this->totalWorkingHours;
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
     * @param mixed $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }
} 