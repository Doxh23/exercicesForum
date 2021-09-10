<?php
    class Topics {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        //Test (database and table needs to exist before this works)
        public function getTopics() {
            $this->db->query("SELECT * FROM topics");

            $result = $this->db->resultSet();
            print_r($result);
            return $result;
        }
        public function getBoard(){
            $boardID = $_GET['id'];
            $boardID2 = $_GET['name'];
            echo $boardID;
            echo $boardID2;
        }
        public function setTopics($boards_Id){
            $this->db->query("SELECT * FROM `topics` JOIN boards ON boards.id = topics.board_id WHERE boards.id = $boards_Id");
            $result = $this->db->resultSet();
            print_r($result);

            foreach($result as  $a => $a_value){
                $arrayOfResult = (array)$result[$a];
                $template = '<p>' . $arrayOfResult['id'] . '</p> <p>' . $arrayOfResult['title'] . '</p> <p>' . $arrayOfResult['creation_date'] . '</p> <p>' . $arrayOfResult['author_id'] . '</p> <p>' . $arrayOfResult['board_id'] . '</p> <p>' . $arrayOfResult['msg_id'] . '</p>';
                echo $template;
        }
    }
}
