<!doctype html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>BS數位串流媒體</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script
  src="https://code.jquery.com/jquery-1.7.2.min.js"
  integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ="
  crossorigin="anonymous"></script>
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
    <script type="text/javascript">$('#contact_us').css("background-color","rgba(0,0,0,.5)");</script>
    <script type="text/javascript">$('#contact_us').css("color","white");</script>

    <div>
      <img src="images/11.png" width="100%">
    </div>
    <div style="background-color: #e6e6e6; ">
        <div class="container" style="background-color: white; ">
      	<br><br>
            <div class="row">
	        	<div class="col-6">
	        		<h2>博思數位串流媒體有限公司</h2><br>
	        		<div style="color:grey;font-size: 1.2rem;">
	        			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;電話：0908878077</p>
	        			<p><i class="fa fa-link" aria-hidden="true"></i>&nbsp;賴客服：＠qbtvtw</p>
	        			<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;電子郵箱：ricky65lue@gmail.com</p>
	        			<p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;網址：www.qbtvtw.com</p>
	        			<p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;公司地址：台北市中山區復興北路179號8F-6</p>
	        			<p>（捷運南京復興站7號出口）</p>
	        		</div>
	        	</div>
	        	<div class="col-6">
	        		<h5>留言板</h5><br>
	        		<form action="send_line2.php" method="post" data-form-title="MESSAGE">
			          <div class="form-group">
			              <input type="text" class="form-control input-sm " name="name" required="" placeholder="您的姓名" data-form-field="Name">
			          </div>
			          <div class="form-group">
			              <input type="tel" class="form-control input-sm " name="phone" placeholder="您的電話" data-form-field="Phone">
			          </div>
			          
			          <div class="form-group">
			              <textarea class="form-control input-sm "  name="message" rows="4" placeholder="您的留言內容" data-form-field="Message"></textarea>
			          </div>
			          <div class=" "><button type="submit" class="btn-lg btn btn-secondary" style="border-radius: 0px">立即送出</button></div>
			        </form>
	        	</div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <br>
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