<!DOCTYPE html>
<html>
<head>
  <title>ICON GALERY</title>
  <link rel="shortcut icon" type="image/png" href="icon.png">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/jc_boster.awesome.css">
  <script src="js/jc_bost.js"></script>
</head>
<body>

<div id="head">
  <div class="head" style="float: left;">
    <a href="../documentation.php" style="color: #fff; text-decoration: none;">
      <button><i class="fas fa-long-arrow-alt-left"></i> Doc Boster</button>
    </a>
    <a href="doc/document.html" style="color: #fff; text-decoration: none;">
      <button><i class="fas fa-play"></i> Penggunaan</button>
    </a>
    <a href="index.php" style="color: #fff; text-decoration: none;">
      <button>Font Icon</button>
    </a>
    <a href="png_icon.php" style="color: #fff; text-decoration: none;">
      <button>PNG Icon</button>
    </a>
    <a href="esp_icon.php" style="color: #fff; text-decoration: none;">
      <button>EPS Icon</button>
    </a>
  </div>

  <div class="head">
    <h4>ICON GALERY</h4>
  </div>
  <div class="head">
    <input type="text" id="pass" placeholder="layout copy">
  </div>

  <div class="head" style="float: right;">
    <a style="color: #fff; text-decoration: none;">
      <button onclick="setting()"><i class="fas fa-cogs"></i> Setting</button>
    </a>
    <div id="collapse_jc" class="collapse_jc">
      <p class="label">Mode Copy</p>
      <select id="mode" style="width: 100px; margin-bottom: 5px;">
        <option value=""></option>
        <option setCok="clas" value="clas">Class</option>
        <option setCok="hexa" value="hexa">Hexa</option>
      </select> 
      <br>
      <p class="label">Attribute Set </p>
      <select id="attrib" style="width: 100px; margin-bottom: 5px;">
        <option value=""></option>
        <option setCok="tag" value="tag">Tag</option>
        <option setCok="text" value="text">Text</option>
      </select>
      <br>
      <button onclick="simpan()"><i class="fas fa-save"></i> Simpan</button>
      <button onclick="restore()"><i class="fas fa-sync-alt"></i>Reset Default</button>
    </div>
  </div>
</div>

<div id="container">
  <table id="table">
    <?php  
      $path     = "data/EPS/";
      $allFiles  = glob($path . "*.eps");
    ?>
    <?php foreach($allFiles as $urlF) : ?>
      <?php  
        $name = explode('/', $urlF);
      ?>
      <tr>
        <td>
          <img src="<?=$urlF;?>" style="width: 30px; height: 30px; margin: 0; padding: 0;">
        </td>
        <td>
          <?= end($name); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
<div id="footer">
  <p>Table by: JC Programs</p>
</div>
<script src="js/index.js"></script>
</body>
</html>