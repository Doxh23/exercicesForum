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
        static function getCategoryId(){
            return $_GET['category'];
        }

        static function getTopicId(){
            return  $_GET['topic'];
        }

        static function getBoardId(){
            return  $_GET['board'];
        }

        public function getNumberOfMessages($topicID){
            $this->db->query("SELECT COUNT(*) FROM messages WHERE messages.topic_id = $topicID");

            $result = $this->db->resultSet();
            print_r($result);
        }

        public function setTopics(){
            $categoryID = Topics::getCategoryId();
            $boardID = Topics::getBoardId();
            $this->db->query(  "SELECT * FROM `topics`
                                JOIN boards 
                                ON boards.id = topics.board_id
                                JOIN users 
                                ON users.id = topics.author_id
                                JOIN messages
                                ON messages.id = topics.msg_id
                                WHERE boards.category = $categoryID
                                AND topics.board_id = $boardID");
            $result = $this->db->resultSet();
            foreach($result as  $a => $a_value){
                $arrayOfResult = (array)$result[$a];
                print_r($arrayOfResult);
                $template = 
                '<article class="section__article row row-cols-5">
                    <div class="col-1 col-sm-1">
                        <img class="article__status" src="" alt="STATUS">
                    </div>
                    <div class="article__description col-6 col-sm-6 ">
                        <h3 class="description__title">
                           ' . $arrayOfResult['title'] . '
                        </h3>
                        <div class="description__authorAndGroup row">
                            <p class="description__author col-sm">
                                by ' . $arrayOfResult['nickname'] . '
                            </p>
                            <p class="description__group col-sm">
                                in ' . $arrayOfResult['name'] . '
                            </p>
                        </div>
                    </div>
                    <div class="col-1 col-sm-1">
                        <p class="article__commentsCount">
                            <!-- $articleCommentsCount -->
                            ' . $this->getNumberOfMessages($arrayOfResult['id']) . '
                        </p>
                    </div>
                    <div class="col-1 col-sm-1">
                        <p class="article__viewsCount">
                            <!-- $articleViewsCount -->
                            $
                        </p>
                    </div>
                    <div class="col-3 col-sm">
                        <div class="article__authorAndDate">
                            <p class="article__author">
                                by $articleAuthor
                            </p>
                            <p class="article__date">
                            ' . $arrayOfResult['creation_date'] . '
                            </p>
                        </div>
                    </div>
                </article>';
                echo $template;
        }
    }
}