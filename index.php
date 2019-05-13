<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem AMW V 0.1</title>
</head>

<body>
<br><br><br>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">&copy; Rizky Mochtar 2019</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?m=home">Home</a></li>
            <li><a href="index.php?m=daftaruser">Daftar User</a></li>
            <li><a href="index.php?m=menulist">Menu List</a></li>
            <li><a href="index.php?m=about">About</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        
        <?php
        $m = $_GET['m'];

        if ($m=='menulist') {
          include 'menulist.php';
        }elseif ($m=='about') {
          include 'about.php';
        }elseif ($m=='pesan') {
          include 'pesan.php';
        }elseif ($m=='daftaruser') {
          include 'daftaruser.php';
        }else {
          include 'home.php';
        }
        ?>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>