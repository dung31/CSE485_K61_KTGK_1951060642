<?php
    require_once 'Model/EmployeesModel.php';
    class EmployeesController{

            function index(){
                $employeesModel = new EmployeesModel();
                $data = $employeesModel->getAll();
                require_once 'view/index.php';
                
            }
            function detail(){
                $id = $_GET['id'];
                $employeesModel = new EmployeesModel();
                $data = $employeesModel->detail($id);
                require_once 'view/detail.php';
            }

            function showAdd(){
               
                require_once 'view/add.php';
            }
            function add(){
            
            
                if (isset($_POST['submit'])) {
                   
                    $employeeArr = [
                        'hovaten' => $_POST['hovaten'],
                        'chucvu' => $_POST['chucvu'],
                        'phongban' =>$_POST['phongban'],
                        'luong' =>$_POST['luong'],
                        'ngayvaolam' =>$_POST['ngayvaolam'],
                        ];
                    
                        $employeeModel = new EmployeesModel();
                        $isInsert = $employeeModel->insert($employeeArr);
                        
                        header("Location: index.php?controller=employees&action=index");
                       
                    }
                
            }
            function edit(){
                $id = $_GET['id'];
                $employeesModel = new EmployeesModel();
                $data = $employeesModel->detail($id);
    
                require_once 'view/edit.php';
            }
            function update(){
                $employeesModel = new EmployeesModel();
               
               

                    $userArr = [
                        'id' =>  $_GET['id'],
                        'hovaten' => $_POST['hovaten'],
                        'chucvu' => $_POST['chucvu'],
                        'phongban' =>$_POST['phongban'],
                        'luong' =>$_POST['luong'],
                        'ngayvaolam' =>$_POST['ngayvaolam']

                    ];
                
                    $isUpdate = $userModel->update($userArr);
                  
                    header("Location: index.php?controller=employees&action=index");
       

   
    }

            function delete(){
                $id = $_GET['id'];
                $user = new EmployeesModel();
                $results = $user->delete($id);
                header("location: index.php?controller=employees&action=index");
            }


    }


?>