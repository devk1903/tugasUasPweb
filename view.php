
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Bubble Tea Heaven </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="login.php">Sign In</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Bubble Tea Heaven</h1>
        <p class="lead blog-description">The official Blog for UAS Pweb2</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
              <?php

              if(isset($_COOKIE["id"])){
                header('location:home2.php');
              }else{
                include("koneksi.php");
                
                $id_post = $_GET["id_post"];
                $sql = "SELECT * FROM post WHERE id_post =$id_post";
                $result = $conn->query($sql);

                if ($result) {
                    // output data of each row
                    $row = $result->fetch_assoc();
                      
                      echo "<div class='blog-post'>
                          <h2 class='blog-post-title'>$row[title]</h2>
                          <p class='blog-post-meta'>$row[waktu]</p>
                          <p>$row[isi]</p>
                          <a href='index.php'>Back</a>
                          </div>";
                } else {
                     "0 results";
                }
              }

                $conn->close();
                ?>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Devi Karlina <em>Bubble Tea Heaven</em> Bubble Tea Heaven Created by Devi karlina</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="view.php?id_post=4">Cakwe</a></li>
              <li><a href="view.php?id_post=5">Roti Jhon</a></li>
              <li><a href="view.php?id_post=6">EXO</a></li>
              <li><a href="view.php?id_post=7">Quotes</a></li>
              <li><a href="view.php?id_post=11">Senja</a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Other</h4>
            <ol class="list-unstyled">
              <li><a href="http://www.instagram.com/devk1903">Instagram</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Bubble Tea Heaven Blog by<a href="http://www.instagram.com/devk1903">@devk1903</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>