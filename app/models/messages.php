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

        public function setMessages(){
            $this->db->query("  SELECT * FROM messages
                                JOIN users
                                ON messages.author_id = users.id
                                JOIN topics
                                ON messages.topic_id = topics.id
                                WHERE topics.id = 0");

            $result = $this->db->resultSet();
            foreach($result as  $a => $a_value){
                $arrayOfResult = (array)$result[$a];
                $template =
                            '<div class="row content-comments">
                                <div class="col-4 autor-comments">
                                    <img src="" alt="" class="avatar">
                                    <p class="pseudo">' . $arrayOfResult['nickname'] . '</p>
                                    <p class="role">name 2</p>
                                    <p class="post">post</p>
                                    <p class="location">location</p>
                                </div>
                                <div class="col-8 ">
                                    <p class="date">' . $arrayOfResult['creation_date'] . '</p>
                                    <p class="text-comment">' . $arrayOfResult['content'] . '</p>
                                    <hr>
                                    <p>' . $arrayOfResult['signature'] . '</p>
                                </div>
                            </div>';
                echo $template;
        }
    }
}
