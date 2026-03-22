<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Controllers\CRUDController;
use App\Models\PostModel;

class TestController extends CRUDController
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

    protected function getObjects() {
        return $this->model->orderBy("created_at", "desc")->findAll();
    }

    protected function getObject($id) {
        return $this->model->find($id);
    }

}
