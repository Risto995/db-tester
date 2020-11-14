<?php

namespace App\Runners;

use App\Factories\RunnerFactory;
use App\Utility\DatabaseAdapterType;

/**
 * Class GroupQueryRunner
 *
 * @package App\Runners
 */
class GroupQueryRunner
{
    /**
     * Runs the query of a given type on entities of a given type in all supported DBMSs.
     *
     * @param string $queryType
     * @param string $entityType
     * @param int $numberOfRows
     */
    public static function run(string $queryType, string $entityType, int $numberOfRows = 0): void
    {
        $runner = RunnerFactory::getRunner(
            DatabaseAdapterType::MYSQL,
            $queryType,
            $entityType,
            $numberOfRows
        );

        $runner->run();
        $runner->printExecutionTime();

        $runner = RunnerFactory::getRunner(
            DatabaseAdapterType::POSTGRES,
            $queryType,
            $entityType,
            $numberOfRows
        );

        $runner->run();
        $runner->printExecutionTime();

        $runner = RunnerFactory::getRunner(
            DatabaseAdapterType::SQLITE,
            $queryType,
            $entityType,
            $numberOfRows
        );

        $runner->run();
        $runner->printExecutionTime();
    }
}
