<?php
    class Messages {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        //Test (database and table needs to exist before this works)
        public function getMessages() {
            $this->db->query("SELECT * FROM messages");

            $result = $this->db->resultSet();
            print_r($result);
            return $result;
        }

        public function setMessages($topics_Id, $user_id){
            $this->db->query("");
            $result = $this->db->resultSet();
            print_r($result);

            foreach($result as  $a => $a_value){
                $arrayOfResult = (array)$result[$a];
                $template = '<p>' . $arrayOfResult['id'] . '</p> <p>' . $arrayOfResult['title'] . '</p> <p>' . $arrayOfResult['creation_date'] . '</p> <p>' . $arrayOfResult['author_id'] . '</p> <p>' . $arrayOfResult['board_id'] . '</p> <p>' . $arrayOfResult['msg_id'] . '</p>';
                echo $template;
        }
    }
}
