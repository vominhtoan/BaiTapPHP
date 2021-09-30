<!doctype html>
<html lang="en">

<style>
    .form-bt{
        width: 700px;
        height: 380px;
        margin: 20px 10px;
        border: 1px solid black;
    }
    .form-bt-title{
        text-align: center;
        height: 70px;
    }
    .form-bt-title p{
        font-weight: bold;
    }
    .form-tinhtoan{
        padding-top:5px
    }

    .form-tinhtoan legend
    {
      font-weight: bold;
    }

    .form-group
    {
      display: flex;
      margin-top: 10px;
    }

    .form-group label{
        min-width: 150px;
    }

    .form-group small
    {
        color:red;
    }

    .submit{
        width: 70px;
        margin-top: 10px;
    }

    .cancel
    {
      width: 70px;
      margin-top: 10px;
    }

    .button
    {
      margin-left: 150px;
    }

    ::-webkit-input-placeholder{
        color: red !important;
    }

    .fill select
    {
      width: 170px;
    }

    .form-control-note
    {
      width: 350px;
      height: 100px;
    }
</style>

  <head>
    <title>ENTER YOUR INFORMATION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  </head>


  <body>

  <div class="form-bt">

    
    <form class="form-tinhtoan" action="Bai4config.php" method="POST" style="width:95%; margin-left:15px" >
      <fieldset>
          <legend>Enter Your Information</legend>
          <div class="form-group">
            <label for="">Fullname</label>
            <div>
              <input type="text" name="name" class="form-control">
            </div>  
          </div>
  
          <div class="form-group">
            <label for="">Address</label>
            <div>
              <input type="text" name="addr" class="form-control">
            </div>      
          </div>
  
          <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Gender</label>
            <div>
              <input type="radio" name="gender" value="Nam" class="form-control" checked> Nam
              <input type="radio" name="gender" value="Nữ" class="form-control"> Nữ
            </div>
          </div>

          <div class="form-group">
            <label for="">Country</label>
            <div class="fill">
              <select name="country">
                <option value="Việt Nam"> Việt Nam </option>
                <option value="America"> America </option>
                <option value="Spain"> Spain </option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="">Study</label>
            <input type="checkbox" name="study" value="PHP & MySQL" class="form-control" checked> PHP & MySQL
            <input type="checkbox" name="study" value="ASP.NET" class="form-control"> ASP.NET
            <input type="checkbox" name="study" value="CCNA" class="form-control"> CCNA
            <input type="checkbox" name="study" value="Security+" class="form-control"> Security+
          </div>

          <div class="form-group">
            <label for="">Note</label>
            <input type="text" name="note" class="form-control-note">
          </div>

          <div class="button">
            <button name="submit" type="submit" class="btn btn-dark submit">Gửi</button>

            <button name="cancel" type="reset" class="btn btn-dark submit">Hủy</button>
          </div>
      </form>
      
    </div>
      

      </fieldset> 
      
      
     
  </body>
</html>