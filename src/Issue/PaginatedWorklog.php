<?php

namespace JiraRestApi\Issue;
use JiraRestApi\ClassSerialize;

/**
 * Class PaginatedWorklog.
 */
class PaginatedWorklog
{
    use ClassSerialize;

    /**
     * @var int Start at position
     */
    public $startAt;

    /**
     * @var int Maximum results
     */
    public $maxResults;

    /**
     * @var int Total results
     */
    public $total;

    /**
     * @var array Worklog
     */
    public $worklogs;

    /**
     * @return int
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return array Worklogs
     */
    public function getWorklogs()
    {
        return $this->worklogs;
    }

    /**
     * @param array $worklogs Worklogs
     */
    public function setWorklogs($worklogs)
    {
        $this->worklogs = $worklogs;
    }
}
