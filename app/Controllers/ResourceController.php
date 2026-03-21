<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Model;


class ResourceController extends BaseController
{

    protected string $modelClass;
    protected Model $model;
    protected array $views = [
            "index" => "index",
            "show" => "show",
            "new" => "new",
            "edit" => "edit",
            "delete_confirm" => "delete_confirm"
    ];
    protected string $entity;
    protected string $indexController;
    protected string $showController;
    protected string $createMessage = "Object successfully created!";
    protected string $nothingChangedMessage = "Nothing has changed!";
    protected string $updateSuccessMessage = "Object successfully updated!";
    protected string $deleteMessage = "Object successfully deleted!";

    public function __construct() {
        $this->model = new $this->modelClass();
        
    }


    protected function getObjectOr404($id) {
        $object = $this->model->find($id);
        if(!$object) {
            PageNotFoundException::forPageNotFound("Object id: $id does not exist!");
        }
        return $object;
    }

    protected function getObjects() {
        return $this->model->orderBy("id", "desc")->findAll();
    }


    public function index()
    {
        $objects = $this->getObjects();
        return view($this->views["index"], [
            "objects" => $objects
        ]);
    }


    public function show($id)
    {
        $object = $this->getObjectOr404($id);
        return view($this->views["show"], [
            "object" => $object
        ]);
    }


    public function new()
    {
        helper("form");
        return view($this->views["new"], [
            "object" => new $this->entity()
        ]);
    }


    public function create()
    {
        $entity = new $this->entity($this->request->getPost());
        $id = $this->model->insert($entity);

        if(!$id) {
            return redirect()->back()
                ->withErrors("errors", $this->model->errors())
                ->withInput();
        }
        return redirect()->to(url_to($this->indexController))
            ->with("message", $this->createMessage);
    }


    public function edit($id) 
    {
        $object = $this->getObjectOr404($id);
        helper("form");
        return view($this->views["edit"], [
            "object" => $object
        ]);

    }


    public function update($id)
    {
        $object = $this->getObjectOr404($id);
        $object->fill($this->request->getPost());

        if(! $object->hasChanged()) {
            return redirect()->back()->with("message", $this->nothingChangedMessage);
        }

        $success = $this->model->update($id, $object);

        if($success) {
            return redirect()->to(url_to($this->showController, $id))->with("message", $this->updateSuccessMessage);
        }else {
            return redirect()->back()
                ->with("errors", $this->model->errors())
                ->withInput();
        }
        
    }



    public function deleteConfirm($id)
    {
        $object = $this->getObjectOr404($id);
        helper("form");
        return view($this->views["delete_confirm"], [
            "object"=> $object
        ]);
    }


    public function delete($id) {  
        $object = $this->getObjectOr404($id);   
        $this->model->delete($id);       
        return redirect()->to(url_to($this->indexController))->with("message", $this->deleteMessage);      
    }
}
