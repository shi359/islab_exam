<?php
require_once('database.php');
?>
<html>
  <head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISLAB_CTF</title>
    <!-- css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="starter-template.css" rel="stylesheet" type="text/css">
    <!-- script -->
    <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form action="login.php" method="post">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="NAVbrand" class="navbar-brand" style="padding-top:6px;">
            <span class="title-span">ISLAB_CTF</span>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Problems</a></li>
            <li><a href="./rank.php">Rank</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">  
   
<?php
if(isset($_SESSION['name'])){
    echo '<li><a>'.$_SESSION['name'].'</a></li>';
    echo '<li><a href="./logout.php">登出</a></li>';
}
else{
    echo '<li><a href="./signup.php">Sign up</a></li>';
    echo '<li style="top:12px;"><input type="text" name="name" placeholder="id"></li>';
    echo '<li style="top:12px;"><input type="password" name="pass" placeholder="pass"></li>';
    echo '<li style="top:12px;"><input type="submit" class="small-submit" value="send"></li>';
}
?> 
          </ul>
        </div>
      </div>
    </nav>
</form>
    <div class="container">
      <div class="starter-template">
<form action="flag.php" method="post">
<input name="flag" placeholder="Send flag here like FLAG{***}" required style="width:90%;">
<input type="submit" style="float:right;" class="submit" value="send">
</form>
                  
<?php
$sql="SELECT * FROM flag WHERE open=1 ORDER BY qid";
$rs = $db->query($sql);
while($row = $rs->fetch()){
    if($_SESSION['q'.$row['qid']]==1)
    {
        echo '<div class="item pass">';
        echo '<div class="challenge pass">';
    }
    else
    {
        echo '<div class="item">';
        echo '<div class="challenge">';
    }
    echo '<h3>'.$row['name'].'</h3>';
    if($_SESSION['q'.$row['qid']]==1)
        echo '<div class="hint hint_pass">';
    else
        echo '<div class="hint">';
    if($_SESSION['q'.$row['qid']]==1)
        echo '<div class="hint_content hint_pass">';
    else{
        echo 'HINT<br>';
        echo $row['content'];
        echo '<div class="hint_content">';
        echo $row['hint'].'</div>';
    }    
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?> 
<div style="clear:both;"></div>
      </div>
    </div>
    <!-- Footer -->
    <footer style="background-color: black;">
      <div class="container">
        <p class="m-0 text-center" style="color:white">Copyright &copy; DUCKLL</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>
</html>
