<?php

namespace App\Runners;

use App\Adapters\DatabaseAdapter;
use App\Queries\BaseQueryHandler;

/**
 * Class QueryRunner
 *
 * @package App\Runners
 */
class QueryRunner
{
    /**
     * Query.
     *
     * @var BaseQueryHandler
     */
    protected $query;
    /**
     * Selected database adapter.
     *
     * @var DatabaseAdapter
     */
    protected $adapter;
    /**
     * Execution time in milliseconds.
     *
     * @var float
     */
    protected $executionTime;

    /**
     * QueryRunner constructor.
     *
     * @param BaseQueryHandler $query
     * @param DatabaseAdapter $adapter
     */
    public function __construct(BaseQueryHandler $query, DatabaseAdapter $adapter)
    {
        $this->query = $query;
        $this->adapter = $adapter;
    }

    /**
     * Runs the query and measures the execution time.
     */
    public function run()
    {
        $start = microtime(true);
        $this->query->execute($this->adapter);
        $this->executionTime = microtime(true) - $start;
    }

    /**
     * @return float
     */
    public function getExecutionTime(): float
    {
        return $this->executionTime;
    }

    /**
     * @param float $executionTime
     */
    public function setExecutionTime(float $executionTime): void
    {
        $this->executionTime = $executionTime;
    }

    /**
     * Prints out the execution type for a query in the target DBMS.
     */
    public function printExecutionTime(): void
    {
        $connectionType = $this->adapter->getConnectionType();
        $queryType = $this->query->getQueryType();

        echo ("Time for $connectionType $queryType query: " . $this->executionTime . '<br>');
    }
}
