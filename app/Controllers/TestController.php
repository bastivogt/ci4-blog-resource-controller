<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Controllers\ResourceController;
use App\Models\PostModel;

class TestController extends ResourceController
{

    protected $modelClass = \App\Models\PostModel::class;
    protected $viewPath = "Test/";
    protected $entity = \App\Entities\PostEntity::class;
    protected $indexController = "TestController::index";
    protected $showController = "TestController::show";
    protected $createMessage = "Post successfully created!";
    protected $views = [
        "index" => "Test/index",
        "show" => "Test/show",
        "new" => "Test/new",
        "edit" => "Test/edit",
        "delete_confirm" => "Test/delete_confirm"
    ];

}
