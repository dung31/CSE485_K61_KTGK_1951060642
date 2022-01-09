<?php
    class Connect{
    private $DB_HOST = 'localhost';
    private $DB_USERNAME = 'root';
    private $DB_PASSWORD = '';
    private $DB_NAME = '1951060642_employees';


    public function connectDb() {
        $connection = mysqli_connect($this->DB_HOST, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_NAME);
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