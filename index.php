<html>
<head>
  <title>Tugas Akhir Pweb</title>
  <link rel="stylesheet" type="text/css" href="warna.css">
  <script type="text/javascript" src="google.js"></script>
</head>
<body>
  <div class="wrap">
    <div class="header">    
      <h1>Tugas Akhir Pemrograman Web</h1>
      <p>:)</p>
    </div>
    <div class="menu">
      <ul>
        <!-- menu untuk google, hari dan jam -->
        <li><form name="google" onsubmit="cari()" >Google :
          <input type="text" name="keyword">
          <input type="submit" name="submit" value="cari">
        </form></li>
        <li><script type="text/javascript" src="hari.js"></script></li>
        <li id="output"><script type="text/javascript" src="jam.js"></script></li>      
      </ul>
    </div>
    <div class="badan">     
      <div class="sidebar">
        Menu :
        <!-- codingan menu home data diri dan bingung? -->
        <ul>
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=dadir">Data Diri</a></li>
          <li><a href="index.php?page=confuse">Bingung?</a></li>
                  
        </ul>
      </div>
      <div class="content">
        <?php

        if(isset($_GET['page'])){

          $page = $_GET['page'];

          switch ($page) {
            //codingan di bawah ini untuk pemanggilan

              case 'home':
              include'home.html';
              break;

              case 'dadir':
              include'datadiri.html';
              break;
            
             case 'confuse':
             include'bingung.html';
             break;
            //codingan default itu untuk menu awal yang di buka adalah home
            default:
              include 'home.html';
              break;
          }
      }
      else{
          include'home.html';
      }
      ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer">
      Univ Ahmad Dahlan
    </div>
  </div>
</body>
</html>