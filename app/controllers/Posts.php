<?php

class Posts extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    public function create(){
        if(empty($_SESSION['id'])){ // If user not logged in, redirected to topics view.
            header("Location: ". URLROOT ."/pages/topics");
        }

        $data = [
            'title' =>'',
            'body' => '',
            'vues' =>'',
            'author_id' => '',
            'board_id' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' =>trim($_POST["title"]),
                'body' =>trim($_POST["body"]),
                'vues' => 0,
                'author_id' => $_SESSION["id"],
                'board_id' => $_GET["board"], // HOW TO MANAGE TO GET BOARD_ID HERE ? ?
                'titleError' => '',
                'bodyError' => ''
            ];

            if(empty($data["title"])){
                $data['titleError'] = "The title of a post cannot be empty";
            }

            if(empty($data["body"])){
                $data['bodyError'] = "The body of a post cannot be empty";
            }

            if(empty($data['titleError']) && empty($data['bodyError'])){
                if ($this->postModel->addPost($data)) {
                    header("Location: ". URLROOT . "/pages/topics");
                } else {
                    die("Something went wrong, please try again");
                }
            } else {
                $this->view("posts/create", $data);
            }
        }

        $this->view("posts/create", $data);

    }



    public function update($id){

        $post = $this->postModel->findPostById($id);

        if(empty($_SESSION['id'])){
            echo "Your ID is ".$_SESSION['id']." (empty) and you are not connected so you don't have the right to update it.";
            // header("Location: ". URLROOT . "/pages/topics");
        } elseif ($post->author_id != $_SESSION['id']){
            echo "Your ID is ".$_SESSION['id']." and it is not your topic so you don't have the right to update it.";
            // header("Location: ". URLROOT . "/pages/topics");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'title' =>trim($_POST["title"]),
                'body' =>trim($_POST["body"]),
                'titleError' => '',
                'bodyError' => ''
            ];

            if(empty($data["title"])){
                $data['titleError'] = "The title of a post cannot be empty";
            }

            if(empty($data["body"])){
                $data['bodyError'] = "The body of a post cannot be empty";
            }

            if($data['title'] == $this->postModel->findPostById($id)->title){
                $data['titleError'] == "At least change the title !";
            }

            if($data['body'] == $this->postModel->findPostById($id)->body){
                $data['bodyError'] == "At least change the body !";
            }

            if(empty($data['titleError']) && empty($data['bodyError'])){
                if ($this->postModel->updatePost($data)) {
                    header("Location: ". URLROOT . "/pages/topics");
                } else {
                    die("Something went wrong, please try again");
                }
            } else {
                $this->view("posts/update", $data);
            }
        }

        $this->view("posts/update", $data);

    }


    public function delete($id){
        $post = $this->postModel->findPostById($id);

        if(empty($_SESSION['id'])){
            header("Location: ". URLROOT . "/pages/topics");
        } elseif ($post->author_id != $_SESSION['id']){
            header("Location: ". URLROOT . "/pages/topics");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if ($this->postModel->deletePost($id)){
                header("Location: ". URLROOT . "/pages/topics");
            } else {
                die("Something went wrong. Please try again.");
            }
        }
    }


}