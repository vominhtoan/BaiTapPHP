<?php 
    $errD = $errR = $errN = $name="";
    $socu = $somoi = $tongtien = "";
    $dongia = 20000;
    if(isset($_POST['submit']))
    {
      //Kiem tra
      if(empty($_POST['name']))
        $errN = "* Chưa nhập vào tên";
      
      if(empty($_POST['socu']))
        $errD = "* Chưa nhập vào chỉ số";
      else
      {
        $socu = $_POST['socu'];
        if(!is_numeric($socu))
          $errD = "* Làm ơn nhập vào số";
        else if($socu <= 0)
          $errD = "* Chỉ số phải lớn hơn 0";
      }

      //Kiem tra 
      if(empty($_POST['somoi']))
        $errR = "* Chưa nhập vào chỉ số";
      else
      {
        $somoi = $_POST['somoi'];   
        if(!is_numeric($somoi))
          $errR = "* Làm ơn nhập vào số";
        else if($somoi <= 0)
          $errR = "* Chỉ số phải lớn hơn 0";
        else if(!empty($socu) && $somoi < $socu)
          $errR = "* Chỉ số mới phải lớn hơn chỉ số cũ";
      }

      //Tính tiền
      if(empty($errD) && empty($errR))
      {
        $tongtien = ($somoi - $socu)* $dongia;
      }
    }
?>

<!doctype html>
<html lang="en">

<style>
    .form-bt{
        width: 600px;
        height: 500px;
        margin: 20px auto;
        border: 1px solid black;
    }
    .form-bt-title{
        background: pink;
        text-align: center;
        height: 70px;
    }
    .form-bt-title h2{
        line-height: 70px;
    }
    .form-tinhtoan{
        padding-top:20px
    }

    .form-group
    {
      display: flex;
    }

    .form-group label{
        min-width: 100px;
        font-weight: bold;
    }

    .form-group small
    {
        color:red;
    }

    .submit{
        width: 120px;
        margin-left: 150px;
    }

    ::-webkit-input-placeholder{
        color: red !important;
    }
</style>

  <head>
    <title>THANH TOÁN TIỀN ĐIỆN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>


  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  

  <div class="form-bt">

    <div class="form-bt-title"> 
        <h2>THANH TOÁN TIỀN ĐIỆN</h2>
    </div>
    
    <form class="form-tinhtoan" action="Bai2.php" method="post" style="width:70%; margin-left:90px" >
        <div class="form-group">
          <label for="">Tên chủ hộ</label>
          <div style="width:76%">
            <input type="text" name="name" class="form-control" value="<?php echo $name?>">
            <small><?php echo $errN?></small>
          </div>
        </div>

        <div class="form-group">
          <label for="">Chỉ số cũ</label>
          <div style="width:76%">
            <input type="text" name="socu" class="form-control" value="<?php echo $socu?>">
            <small><?php echo $errR?></small>
          </div>
          (Kw)
        </div>

        <div class="form-group">
          <label for="">Chỉ số mới</label>
          <div style="width:76%">
            <input type="text" name="somoi" class="form-control" value="<?php echo $somoi?>">
            <small><?php echo $errR?></small>
          </div>
          (Kw)
        </div>

        <div class="form-group">
          <label for="">Đơn giá</label>
          <input type="text" name="dongia" readonly class="form-control" value="<?php echo $dongia?>">
          (vnđ)
        </div>

        <div class="form-group">
          <label for="">Số tiền thanh toán</label>
          <input type="text" name="tongtien" readonly class="form-control" value="<?php echo $tongtien?>">
          (vnđ)
        </div>

        <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>
    
  </div>
    
  </body>
</html>