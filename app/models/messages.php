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

        static function getTopicId(){
            return $_GET['topic'];
        }

        public function setMessages(){
            $topicID = Messages::getTopicId();
            $this->db->query("  SELECT * FROM messages
                                JOIN users
                                ON messages.author_id = users.id
                                JOIN topics
                                ON topics.id = messages.topic_id
                                WHERE topics.id = '$topicID'");

            $result = $this->db->resultSet();
            foreach($result as  $a => $a_value){
                $arrayOfResult = (array)$result[$a];
                $avatar = "https://www.gravatar.com/avatar/".md5($arrayOfResult['email'])."?d=identicon";
                $template =
                            '<div class="row content-comments">
                                <div class="col-4 autor-comments">
                                    <img src="'.$avatar.'" alt="avatar" class="avatar">
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
