<?php
    class Categories {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        //Test (database and table needs to exist before this works)
        public function getCategories() {
            $this->db->query("SELECT * FROM boards");

            $result = $this->db->resultSet();
            return $result;
        }

        public function setCategories($category){
            $this->category = $category;
            $this->db->query("SELECT * FROM boards WHERE category=$category");
            $result = $this->db->resultSet();
            foreach($result as  $a => $index){
                $arrayOfResult = (array)$result[$a];
                $template =
                '<a class="redirect" href="'.URLROOT.'/pages/topics?category='.$category.'&board='.$arrayOfResult['id'].'"
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                        <div class="cat-card mb-3">
                            <div class="cat-card-header">
                                <div class="cat-card-img">
                                    <img src="https://robohash.org/random" alt="">
                                </div>
                                <div class="cat-card-text">
                                    <h1>' . $arrayOfResult['name'] . '</h1>
                                    <p>' . $arrayOfResult['description'] . '</p>
                                </div>
                            </div>
                            <div class="cat-card-main d-flex">
                                <div class="nTopics">
                                    <span class="number">459</span>
                                    <span class="type">Topics</span>
                                </div>
                                <div class="nPosts">
                                    <span class="number">900</span>
                                    <span class="type">Posts</span>
                                </div>
                                <div class="lastPost">
                                    <span class="date">date</span>
                                    <span class="type">last Post</span>
                                </div>
                            </div>
                        </div>
                </a>';

                echo $template;
            }
        }
    }
