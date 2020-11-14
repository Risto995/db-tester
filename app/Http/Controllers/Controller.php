<?php

namespace App\Http\Controllers;

use App\Runners\GroupQueryRunner;
use App\Utility\EntityType;
use App\Utility\QueryType;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller
 *
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    public function testConnection(): void
    {
        GroupQueryRunner::run(
            QueryType::DELETE,
            EntityType::TAG_USER,
            10000
        );
    }
}
