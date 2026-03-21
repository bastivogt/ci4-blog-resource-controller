<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\PostEntity;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PostModel;

use CodeIgniter\Exceptions\PageNotFoundException;

class PostsController extends BaseController
{

    private PostModel $postModel;


    public function __construct()
    {
        $this->postModel = new PostModel();
    }


    protected function getPostOr404($id)
    {
        $post = $this->postModel->find($id);
        if ($post === null) {
            throw PageNotFoundException::forPageNotFound("Post with id $id not found!");
        }
        return $post;
    }

    public function index()
    {
        $posts = $this->postModel->orderBy("created_at", "desc")->findAll();
        return view("Posts/index", [
            "title" => "Posts",
            "posts" => $posts
        ]);
    }


    public function new()
    {
        helper("form");
        return view("Posts/new", [
            "title" => "New post",
            "post" => new PostEntity()
        ]);
    }

    public function create() {
        $post = new PostEntity($this->request->getPost());
        $id = $this->postModel->insert($post);
  
        if(!$id) {
            return redirect()
                ->back()
                ->with("errors", $this->postModel->errors())
                ->withInput();
        }
        return redirect()->to(url_to("PostsController::index"))
            ->with("message", "Post created");
    }


    public function show($id) {
        $post = $this->getPostOr404($id);
        return view("Posts/show", [
            "title" => $post->title,
            "post" => $post
        ]);
    }


    public function edit($id) {
        $post = $this->getPostOr404($id);
        helper("form");
        return view("Posts/edit", [
            "title" => $post->title,
            "post" => $post
        ]);

    }

    public function update($id) {
        $post = $this->getPostOr404($id);
        $post->fill($this->request->getPost());

        if(! $post->hasChanged()) {
            return redirect()->back()->with("message", "Nothing changed!");
        }

        $success = $this->postModel->update($id, $post);

        if($success) {
            return redirect()->to(url_to("PostsController::show", $id))->with("message", "Post with id $id updated!");
        }else {
            return redirect()->back()
                ->with("errors", $this->postModel->errors())
                ->withInput();
        }
        
    }

    public function deleteConfirm($id) {
        $post = $this->getPostOr404($id);
        helper("form");
        return view("Posts/delete_confirm", [
            "title"=> "Delete post with id $id",
            "post"=> $post
        ]);
    }


    public function delete($id) {  
        $post = $this->getPostOr404($id);   
        $this->postModel->delete($id);       
        return redirect()->to(url_to("PostsController::index"))->with("message", "Post with id $id deleted!");      
    }
}
