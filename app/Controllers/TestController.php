<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Controllers\ResourceController;
use App\Models\PostModel;

class TestController extends ResourceController
{

    protected string $modelClass = \App\Models\PostModel::class;
    protected string $entity = \App\Entities\PostEntity::class;
    protected string $indexController = "TestController::index";
    protected string $showController = "TestController::show";
    protected string $createMessage = "Post successfully created!";
    protected array $views = [
        "index" => "Test/index",
        "show" => "Test/show",
        "new" => "Test/new",
        "edit" => "Test/edit",
        "delete_confirm" => "Test/delete_confirm"
    ];

}
