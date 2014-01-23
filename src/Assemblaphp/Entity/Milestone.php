<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Entity;

/**
 * Class Milestone
 *
 * @package Assemblaphp\Entity
 */
class Milestone extends EntityAbstract
{
    private $id;
    private $dueDate;
    private $title;
    private $userId;
    private $createdAt;
    private $createdBy;
    private $spaceId;
    private $description;
    private $isCompleted;
    private $completedDate;
    private $updatedAt;
    private $updatedBy;
    private $releaseLevel;
    private $releaseNotes;
    private $plannerType;
    private $prettyReleaseLevel;

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
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
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
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
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
     * @param mixed $isCompleted
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * @param mixed $plannerType
     */
    public function setPlannerType($plannerType)
    {
        $this->plannerType = $plannerType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannerType()
    {
        return $this->plannerType;
    }

    /**
     * @param mixed $prettyReleaseLevel
     */
    public function setPrettyReleaseLevel($prettyReleaseLevel)
    {
        $this->prettyReleaseLevel = $prettyReleaseLevel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrettyReleaseLevel()
    {
        return $this->prettyReleaseLevel;
    }

    /**
     * @param mixed $releaseLevel
     */
    public function setReleaseLevel($releaseLevel)
    {
        $this->releaseLevel = $releaseLevel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseLevel()
    {
        return $this->releaseLevel;
    }

    /**
     * @param mixed $releaseNotes
     */
    public function setReleaseNotes($releaseNotes)
    {
        $this->releaseNotes = $releaseNotes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseNotes()
    {
        return $this->releaseNotes;
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
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
     * @param mixed $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }


} 