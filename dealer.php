<!doctype html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>BS數位串流媒體</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <style type="text/css">
      .container{
        width: 1170px;
      }
    </style>
  </head>
  <body>
    <?php
    include 'navbar.php';
    ?>
    <script type="text/javascript">$('#dealer').css("background-color","rgba(0,0,0,.5)");</script>
    <script type="text/javascript">$('#dealer').css("color","white");</script>

    <div>
      <img src="images/12.png" width="100%">
    </div>
    <div style="background-color: #e6e6e6; ">
      <div class="container" style="background-color: white; ">
        <h4 style="padding: 30px 0 0px 0;"> 選擇博思優勢</h4>
        <hr align=left width="40px" SIZE='50' color=grey style="border-top:3px solid grey">
        <br>
        <div class="row">
          <div class="col-3">
            <img src="images/13.png" width="100%">
          </div>
          <div class="col-3">
            <img src="images/14.png" width="100%">
          </div>
          <div class="col-3">
            <img src="images/15.png" width="100%">
          </div>
          <div class="col-3">
            <img src="images/16.png" width="100%">
          </div>
        </div>
        <br>
        <br>
        <br>
        <h4 style="padding: 30px 0 0px 0;">線上申請</h4>
        <hr align=left width="40px" SIZE='50' color=grey style="border-top:3px solid grey">
        <br>
        <form action="" method="post" data-form-title="MESSAGE">
          <div class="form-group">
              <input type="text" style="width: 30%;background-color: #e9ecef" class="form-control input-sm " name="name" required="" placeholder="輸入姓名" data-form-field="Name">
          </div>
          <div class="form-group">
              <input type="tel" style="width: 30%;background-color: #e9ecef" class="form-control input-sm " name="phone" placeholder="輸入電話號碼" data-form-field="Phone">
          </div>
          <div class="form-group">
              <input type="email" style="width: 30%;background-color: #e9ecef" class="form-control input-sm " name="email"  placeholder="輸入電子郵件" data-form-field="Email">
          </div>
          
          <div class="form-group">
              <textarea class="form-control input-sm " style="background-color: #e9ecef" name="message" rows="4" placeholder="申請說明（如申請銷售方式：零售、網路、申請銷售地區等）" data-form-field="Message"></textarea>
          </div>
          <div class=" "><button type="submit" class="btn-lg btn btn-secondary" style="border-radius: 0px">立即申請</button></div>
        </form>
        <br>
      </div>
    </div>
  
    <?php
    include 'footer.php';
    ?>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>