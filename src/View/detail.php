<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main>
    <h5 class="text-center text-primary mt-5" >Chi tiết nhân viên</h5>
        
    <table class="table">
      <thead>
        <tr>
          <td scope="col">Mã nhân viên</th>
          <th scope="col">Họ và tên</th>
          <th scope="col">Chức vụ</th>
          <th scope="col">Phòng ban</th>
          <th scope="col">Lương</th>
          <th scope="col">Ngày vào làm</th>

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
        </tr>
        <?php 
        }
        ?>
    </table>
      </main>

</body>
</html>