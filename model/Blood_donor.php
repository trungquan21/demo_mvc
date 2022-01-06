<?php
    require_once 'config/connect.php';
    class Book {
        public $id;
        public $name;
        public $sex;
        public $age;

        public function insert($param = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO blood_donor(`bd_name`,`bd_sex`,`bd_age`) 
            VALUES ('{$param['name']}','{$param['sex']}','{$param['age']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);
    
            return $isInsert;
        }
    
        public function getBookById($id = null) {
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM blood_donor WHERE bd_id=$id";
            $results = mysqli_query($connection, $querySelect);
            $book = [];
            if (mysqli_num_rows($results) > 0) {
                $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $book = $books[0];
            }
            $this->closeDb($connection);
    
            return $book;
        }
    
        /**
         * Truy vấn lấy ra tất cả sách trong CSDL
         */
        public function index() {
            $connection = $this->connectDb();
            //truy vấn
            $querySelect = "SELECT * FROM blood_donor";
            $results = mysqli_query($connection, $querySelect);
            $books = [];
            if (mysqli_num_rows($results) > 0) {
                $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }
            $this->closeDb($connection);
    
            return $books;
        }
    
        public function update($book = []) {
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE blood_donor 
        SET `bd_name` = '{$book['name']}',`bd_sex` = '{$book['sex']}',`bd_age` = '{$book['age']}' WHERE `bd_id` = {$book['id']}";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->closeDb($connection);
    
            return $isUpdate;
        }
    
        public function delete($id = null) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM blood_donor WHERE bd_id = $id";
            $isDelete = mysqli_query($connection, $queryDelete);
    
            $this->closeDb($connection);
    
            return $isDelete;
        }
    
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST,
                DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }

    

   
?>