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
    <nav class="navbar navbar-reverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="NAVbrand" class="navbar-brand" style="padding-top:6px;">
            <span class="title-span"> ISLAB_CTF</span>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="./">Problems</a></li>
            <li><a href="./rank.php">Rank</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <form method="post" action="register.php">
            <label >帳號</label>
            <input class="form-control" name="name" required>
            <label>密碼</label>
            <input class="form-control" type="password" name="pass" required>
            <label>認證碼</label>
            <input class="form-control" name="code" required>
            <input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">
        </form>
      </div>
    </div>
     <!-- Footer -->
    <footer style="background-color: black">
      <div class="container">
        <p class="m-0 text-center" style="color:white">Copyright &copy; DUCKLL</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>
</html>
