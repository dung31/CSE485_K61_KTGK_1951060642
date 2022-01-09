<?php
    require_once 'config/config.php'; 
    class EmployeesModel{
        private $conn;
    
        public function __construct(){
            $connect = new Connect();
            $this->conn = $connect->connectDB();
        }

        public function getAll(){
            $sql="select * from NHANVIEN";
            $results = mysqli_query($this->conn,$sql);
            $employees=[];
        
            if (mysqli_num_rows($results) > 0) {
                $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }
            return $employees;
        }
        function detail($id){
            $sql="select * from NHANVIEN where MaNV= $id";
            $results = mysqli_query($this->conn,$sql);
            $user=[];
            if (mysqli_num_rows($results) > 0) {
                $user = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }
            return $user;
        }
        function insert($param) {

            $queryInsert = "INSERT INTO NHANVIEN(hovaten, chucvu, phongban, luong, ngayvaolam)
            VALUES('{$param['hovaten']}','{$param['chucvu']}','{$param['phongban']}','{$param['luong']}','{$param['ngayvaolam']}')";
            
           
            
            $isInsert = mysqli_query($this->conn, $queryInsert);
         
    
            return $isInsert;
        }
        function update($user ) {
            $queryUpdate = "UPDATE NHANVIEN
        SET hovaten = '{$user['hovaten']}',
            chucvu = '{$user['chucvu']}',
            phongban = '{$user['phongban']}',
            luong = {$user['luong']},
            ngayvaolam = '{$user['ngayvaolam']}'
         
            
         WHERE MaNV = {$user['id']}";
    
            $isUpdate = mysqli_query($this->conn, $queryUpdate);
           
    
            return $isUpdate;
        }
        function delete($id){
            $queryDelete="delete from NHANVIEN where MaNV= $id";
        
            $results = mysqli_query($this->conn,$queryDelete);

            return $results;
        }

    }


?>