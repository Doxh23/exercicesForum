<?php 
class Post {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function findAllPosts(){
        $this->db ->query("SELECT * FROM topics ORDER BY creation_date ASC");
        $results = $this->db->resultSet();
        return $results;
    }

    public function addPost($data){
        $this->db->query("
            INSERT INTO `topics`
            (
                `title`,
                `body`,
                `vues`,
                `author_id`,
                `board_id`
            )
            VALUES
            (
                :title,
                :body,
                :vues,
                :author_id,
                :board_id
            )
        ");
        $this->db->bind(":title",$data["title"]);
        $this->db->bind(":body",$data["body"]);
        $this->db->bind(":vues",$data["vues"]);
        $this->db->bind(":author_id",$data["author_id"]);
        $this->db->bind(":board_id",$data["board_id"]);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findPostById($id){
        $this->db->query("SELECT * FROM topics WHERE id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updatePost($data){
        $this->db->query("UPDATE topics SET title = :title, body = :body WHERE id = :id");
        $this->db->bind(":id", $data["id"]);
        $this->db->bind(":title", $data["title"]);
        $this->db->bind(":body", $data["body"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id){
        $this->db->query("DELETE FROM topics WHERE id = :id");
        $this->db->bind(":id", $id);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
}