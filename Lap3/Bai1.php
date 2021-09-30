<?php 
    $errD = $errR = $dai = $rong = $dientich ="";
    if(isset($_POST['submit']))
    {
      //Kiem tra chieu dai
      if(empty($_POST['dai']))
        $errD = "* Chưa nhập vào chiều dài";
      else
      {
        $dai = $_POST['dai'];
        if(!is_numeric($dai))
          $errD = "* Chỉ cho phép nhập số";
        else if($dai <= 0)
          $errD = "* Chiều dài phải lớn hơn 0";
      }

      //Kiem tra chieu rong
      if(empty($_POST['rong']))
        $errR = "* Chưa nhập vào chiều rộng";
      else
      {
        $rong = $_POST['rong'];
        if(!is_numeric($rong))
          $errR = "* Chỉ cho phép nhập số";
        else if($rong <= 0)
          $errR = "* Chiều rộng phải lớn hơn 0";
        else if(!empty($dai) && $rong > $dai)
          $errR = "* Chiều rộng phải nhỏ hơn chiều dài";
      }

      //Tính diện tích và chu vi
      if(empty($errD) && empty($errR))
      {
        $dientich = $dai * $rong;
      }
    }
?>

<!doctype html>
<html lang="en">

<style>
    .form-bt{
        width: 600px;
        height: 400px;
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
    <title>DIỆN TÍCH HÌNH CHỮ NHẬT</title>
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
        <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
    </div>
    
    <form class="form-tinhtoan" action="bai1.php" method="post" style="width:70%; margin-left:90px" >
        <div class="form-group">
          <label for="">Chiều dài</label>
          <div style="width:76%">
            <input type="text" name="dai" class="form-control" value="<?php echo $dai?>">
            <small><?php echo $errD?></small>
          </div>
          
        </div>

        <div class="form-group">
          <label for="">Chiều rộng</label>
          <div style="width:76%">
            <input type="text" name="rong" class="form-control" value="<?php echo $rong?>">
            <small><?php echo $errR?></small>
          </div>
          
        </div>

        <div class="form-group">
          <label for="">Diện tích</label>
          <input type="text" name="dientich" readonly class="form-control" value="<?php echo $dientich?>">
        </div>

        <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>
    
  </div>
    
  </body>
</html>