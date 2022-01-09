<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main>
    <h5 class="text-center text-primary mt-5" >Danh sách nhân viên</h5>
    
    <div>
        <a href="index.php?controller=employees&action=showAdd" class="btn btn-primary ms-5">Thêm</a>
    </div>
    <?php
   
    ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã nhân viên</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Phòng ban</th>
      <th scope="col">Lương</th>
      <th scope="col">Ngày vào làm</th>
      <th scope="col">Chi Tiết</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  
  
  <tbody>
<?php
  
  foreach($data as $key){
      
    ?>      
    

    <tr>
      <th scope="row"><?php echo $key['MaNV'] ?></th>
      <td scope="row"><?php echo $key['hovaten'] ?></td>
      <td scope="row"><?php echo $key['chucvu'] ?></td>
      <td scope="row"><?php echo $key['phongban'] ?></td>
      <td scope="row"><?php echo $key['luong'] ?></td>
      <td scope="row"><?php echo $key['ngayvaolam'] ?></td>
      <td scope="row"><a href=<?php echo "index.php?controller=employees&action=detail&id={$key['MaNV']}" ?>>Chi Tiết</a></td>
      <td scope="row"><a href=<?php echo "index.php?controller=employees&action=edit&id={$key['MaNV']}" ?>><i class="bi bi-pencil-fill"></i></a></td>
      <td scope="row"><a href=<?php echo "index.php?controller=employees&action=delete&id={$key['MaNV']}" ?>><i class="bi bi-trash"></i></a></td>
    </tr>
    <?php 
     }
    ?>
</table>


</body>
</html>