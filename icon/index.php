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
    <tbody>
      <tr onclick="get(this)">
        <td><span class="fas fa-archway"></span></td>
        <td>fas fa-archway</td>
        <td>&amp;#xf557;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-atlas"></span></td>
        <td>fas fa-atlas</td>
        <td>&amp;#xf558;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bed"></span></td>
        <td>fas fa-bed</td>
        <td>&amp;#xf236;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bus"></span></td>
        <td>fas fa-bus</td>
        <td>&amp;#xf207;</td>
      </tr>    <tr onclick="get(this)">
        <td><span class="fas fa-bus-alt"></span></td>
        <td>fas fa-bus-alt</td>
        <td>&amp;#xf55e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cocktail"></span></td>
        <td>fas fa-cocktail</td>
        <td>&amp;#xf561;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-concierge-bell"></span></td>
        <td>fas fa-concierge-bell</td>
        <td>&amp;#xf562;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dumbbell"></span></td>
        <td>fas fa-dumbbell</td>
        <td>&amp;#xf44b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-glass-martini"></span></td>
        <td>fas fa-glass-martini</td>
        <td>&amp;#xf000;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-glass-martini-alt"></span></td>
        <td>fas fa-glass-martini-alt</td>
        <td>&amp;#xf57b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-globe-africa"></span></td>
        <td>fas fa-globe-africa</td>
        <td>&amp;#xf57c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-globe-americas"></span></td>
        <td>fas fa-globe-americas</td>
        <td>&amp;#xf57d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-globe-asia"></span></td>
        <td>fas fa-globe-asia</td>
        <td>&amp;#xf57e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-globe-europe"></span></td>
        <td>fas fa-globe-europe</td>
        <td>&amp;#xf7a2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hot-tub"></span></td>
        <td>fas fa-hot-tub</td>
        <td>&amp;#xf593;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hotel"></span></td>
        <td>fas fa-hotel</td>
        <td>&amp;#xf594;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-luggage-cart"></span></td>
        <td>fas fa-luggage-cart</td>
        <td>&amp;#xf59d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map"></span></td>
        <td>fas fa-map</td>
        <td>&amp;#xf279;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-map"></span></td>
        <td>far fa-map</td>
        <td>&amp;#xf279;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-marked"></span></td>
        <td>fas fa-map-marked</td>
        <td>&amp;#xf59f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-marked-alt"></span></td>
        <td>fas fa-map-marked-alt</td>
        <td>&amp;#xf5a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-monument"></span></td>
        <td>fas fa-monument</td>
        <td>&amp;#xf5a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-passport"></span></td>
        <td>fas fa-passport</td>
        <td>&amp;#xf5ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plane"></span></td>
        <td>fas fa-plane</td>
        <td>&amp;#xf072;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plane-arrival"></span></td>
        <td>fas fa-plane-arrival</td>
        <td>&amp;#xf5af;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plane-departure"></span></td>
        <td>fas fa-plane-departure</td>
        <td>&amp;#xf5b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shuttle-van"></span></td>
        <td>fas fa-shuttle-van</td>
        <td>&amp;#xf5b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-spa"></span></td>
        <td>fas fa-spa</td>
        <td>&amp;#xf5bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-suitcase"></span></td>
        <td>fas fa-suitcase</td>
        <td>&amp;#xf0f2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-suitcase-rolling"></span></td>
        <td>fas fa-suitcase-rolling</td>
        <td>&amp;#xf5c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-swimmer"></span></td>
        <td>fas fa-swimmer</td>
        <td>&amp;#xf5c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-swimming-pool"></span></td>
        <td>fas fa-swimming-pool</td>
        <td>&amp;#xf5c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-taxi"></span></td>
        <td>fas fa-taxi</td>
        <td>&amp;#xf1ba;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tram"></span></td>
        <td>fas fa-tram</td>
        <td>&amp;#xf7da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-umbrella-beach"></span></td>
        <td>fas fa-umbrella-beach</td>
        <td>&amp;#xf5ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wine-glass"></span></td>
        <td>fas fa-wine-glass</td>
        <td>&amp;#xf4e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wine-glass-alt"></span></td>
        <td>fas fa-wine-glass-alt</td>
        <td>&amp;#xf5ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-accessible-icon"></span></td>
        <td>fab fa-accessible-icon</td>
        <td>&amp;#xf368;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-american-sign-language-interpreting"></span></td>
        <td>fas fa-american-sign-language-interpreting</td>
        <td>&amp;#xf2a3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-assistive-listening-systems"></span></td>
        <td>fas fa-assistive-listening-systems</td>
        <td>&amp;#xf2a2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-audio-description"></span></td>
        <td>fas fa-audio-description</td>
        <td>&amp;#xf29e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-blind"></span></td>
        <td>fas fa-blind</td>
        <td>&amp;#xf29d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-braille"></span></td>
        <td>fas fa-braille</td>
        <td>&amp;#xf2a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-closed-captioning"></span></td>
        <td>fas fa-closed-captioning</td>
        <td>&amp;#xf20a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-closed-captioning"></span></td>
        <td>far fa-closed-captioning</td>
        <td>&amp;#xf20a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-deaf"></span></td>
        <td>fas fa-deaf</td>
        <td>&amp;#xf2a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-low-vision"></span></td>
        <td>fas fa-low-vision</td>
        <td>&amp;#xf2a8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-phone-volume"></span></td>
        <td>fas fa-phone-volume</td>
        <td>&amp;#xf2a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-question-circle"></span></td>
        <td>fas fa-question-circle</td>
        <td>&amp;#xf059;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-question-circle"></span></td>
        <td>far fa-question-circle</td>
        <td>&amp;#xf059;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sign-language"></span></td>
        <td>fas fa-sign-language</td>
        <td>&amp;#xf2a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tty"></span></td>
        <td>fas fa-tty</td>
        <td>&amp;#xf1e4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-universal-access"></span></td>
        <td>fas fa-universal-access</td>
        <td>&amp;#xf29a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wheelchair"></span></td>
        <td>fas fa-wheelchair</td>
        <td>&amp;#xf193;</td>
      </tr>
      
      <tr onclick="get(this)">
        <td><span class="fas fa-cat"></span></td>
        <td>fas fa-cat</td>
        <td>&amp;#xf6be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-crow"></span></td>
        <td>fas fa-crow</td>
        <td>&amp;#xf520;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dog"></span></td>
        <td>fas fa-dog</td>
        <td>&amp;#xf6d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dove"></span></td>
        <td>fas fa-dove</td>
        <td>&amp;#xf4ba;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dragon"></span></td>
        <td>fas fa-dragon</td>
        <td>&amp;#xf6d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-feather"></span></td>
        <td>fas fa-feather</td>
        <td>&amp;#xf52d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-feather-alt"></span></td>
        <td>fas fa-feather-alt</td>
        <td>&amp;#xf56b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fish"></span></td>
        <td>fas fa-fish</td>
        <td>&amp;#xf578;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-frog"></span></td>
        <td>fas fa-frog</td>
        <td>&amp;#xf52e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hippo"></span></td>
        <td>fas fa-hippo</td>
        <td>&amp;#xf6ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-horse"></span></td>
        <td>fas fa-horse</td>
        <td>&amp;#xf6f0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-horse-head"></span></td>
        <td>fas fa-horse-head</td>
        <td>&amp;#xf7ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-kiwi-bird"></span></td>
        <td>fas fa-kiwi-bird</td>
        <td>&amp;#xf535;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-otter"></span></td>
        <td>fas fa-otter</td>
        <td>&amp;#xf700;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paw"></span></td>
        <td>fas fa-paw</td>
        <td>&amp;#xf1b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-spider"></span></td>
        <td>fas fa-spider</td>
        <td>&amp;#xf717;</td>
      </tr>

      <tr onclick="get(this)">
        <td><span class="fas fa-angle-double-down"></span></td>
        <td>fas fa-angle-double-down</td>
        <td>&amp;#xf103;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-double-left"></span></td>
        <td>fas fa-angle-double-left</td>
        <td>&amp;#xf100;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-double-right"></span></td>
        <td>fas fa-angle-double-right</td>
        <td>&amp;#xf101;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-double-up"></span></td>
        <td>fas fa-angle-double-up</td>
        <td>&amp;#xf102;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-down"></span></td>
        <td>fas fa-angle-down</td>
        <td>&amp;#xf107;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-left"></span></td>
        <td>fas fa-angle-left</td>
        <td>&amp;#xf104;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-right"></span></td>
        <td>fas fa-angle-right</td>
        <td>&amp;#xf105;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-angle-up"></span></td>
        <td>fas fa-angle-up</td>
        <td>&amp;#xf106;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-alt-circle-down"></span></td>
        <td>fas fa-arrow-alt-circle-down</td>
        <td>&amp;#xf358;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-arrow-alt-circle-down"></span></td>
        <td>far fa-arrow-alt-circle-down</td>
        <td>&amp;#xf358;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-alt-circle-left"></span></td>
        <td>fas fa-arrow-alt-circle-left</td>
        <td>&amp;#xf359;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-arrow-alt-circle-left"></span></td>
        <td>far fa-arrow-alt-circle-left</td>
        <td>&amp;#xf359;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-alt-circle-right"></span></td>
        <td>fas fa-arrow-alt-circle-right</td>
        <td>&amp;#xf35a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-arrow-alt-circle-right"></span></td>
        <td>far fa-arrow-alt-circle-right</td>
        <td>&amp;#xf35a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-alt-circle-up"></span></td>
        <td>fas fa-arrow-alt-circle-up</td>
        <td>&amp;#xf35b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-arrow-alt-circle-up"></span></td>
        <td>far fa-arrow-alt-circle-up</td>
        <td>&amp;#xf35b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-circle-down"></span></td>
        <td>fas fa-arrow-circle-down</td>
        <td>&amp;#xf0ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-circle-left"></span></td>
        <td>fas fa-arrow-circle-left</td>
        <td>&amp;#xf0a8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-circle-right"></span></td>
        <td>fas fa-arrow-circle-right</td>
        <td>&amp;#xf0a9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-circle-up"></span></td>
        <td>fas fa-arrow-circle-up</td>
        <td>&amp;#xf0aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-down"></span></td>
        <td>fas fa-arrow-down</td>
        <td>&amp;#xf063;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-left"></span></td>
        <td>fas fa-arrow-left</td>
        <td>&amp;#xf060;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-right"></span></td>
        <td>fas fa-arrow-right</td>
        <td>&amp;#xf061;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrow-up"></span></td>
        <td>fas fa-arrow-up</td>
        <td>&amp;#xf062;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrows-alt"></span></td>
        <td>fas fa-arrows-alt</td>
        <td>&amp;#xf0b2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrows-alt-h"></span></td>
        <td>fas fa-arrows-alt-h</td>
        <td>&amp;#xf337;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-arrows-alt-v"></span></td>
        <td>fas fa-arrows-alt-v</td>
        <td>&amp;#xf338;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-down"></span></td>
        <td>fas fa-caret-down</td>
        <td>&amp;#xf0d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-left"></span></td>
        <td>fas fa-caret-left</td>
        <td>&amp;#xf0d9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-right"></span></td>
        <td>fas fa-caret-right</td>
        <td>&amp;#xf0da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-square-down"></span></td>
        <td>fas fa-caret-square-down</td>
        <td>&amp;#xf150;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-caret-square-down"></span></td>
        <td>far fa-caret-square-down</td>
        <td>&amp;#xf150;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-square-left"></span></td>
        <td>fas fa-caret-square-left</td>
        <td>&amp;#xf191;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-caret-square-left"></span></td>
        <td>far fa-caret-square-left</td>
        <td>&amp;#xf191;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-square-right"></span></td>
        <td>fas fa-caret-square-right</td>
        <td>&amp;#xf152;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-caret-square-right"></span></td>
        <td>far fa-caret-square-right</td>
        <td>&amp;#xf152;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-square-up"></span></td>
        <td>fas fa-caret-square-up</td>
        <td>&amp;#xf151;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-caret-square-up"></span></td>
        <td>far fa-caret-square-up</td>
        <td>&amp;#xf151;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-caret-up"></span></td>
        <td>fas fa-caret-up</td>
        <td>&amp;#xf0d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cart-arrow-down"></span></td>
        <td>fas fa-cart-arrow-down</td>
        <td>&amp;#xf218;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chart-line"></span></td>
        <td>fas fa-chart-line</td>
        <td>&amp;#xf201;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-circle-down"></span></td>
        <td>fas fa-chevron-circle-down</td>
        <td>&amp;#xf13a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-circle-left"></span></td>
        <td>fas fa-chevron-circle-left</td>
        <td>&amp;#xf137;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-circle-right"></span></td>
        <td>fas fa-chevron-circle-right</td>
        <td>&amp;#xf138;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-circle-up"></span></td>
        <td>fas fa-chevron-circle-up</td>
        <td>&amp;#xf139;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-down"></span></td>
        <td>fas fa-chevron-down</td>
        <td>&amp;#xf078;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-left"></span></td>
        <td>fas fa-chevron-left</td>
        <td>&amp;#xf053;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-right"></span></td>
        <td>fas fa-chevron-right</td>
        <td>&amp;#xf054;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chevron-up"></span></td>
        <td>fas fa-chevron-up</td>
        <td>&amp;#xf077;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-download-alt"></span></td>
        <td>fas fa-cloud-download-alt</td>
        <td>&amp;#xf381;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-upload-alt"></span></td>
        <td>fas fa-cloud-upload-alt</td>
        <td>&amp;#xf382;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-compress-arrows-alt"></span></td>
        <td>fas fa-compress-arrows-alt</td>
        <td>&amp;#xf78c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-download"></span></td>
        <td>fas fa-download</td>
        <td>&amp;#xf019;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-exchange-alt"></span></td>
        <td>fas fa-exchange-alt</td>
        <td>&amp;#xf362;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-expand-arrows-alt"></span></td>
        <td>fas fa-expand-arrows-alt</td>
        <td>&amp;#xf31e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-external-link-alt"></span></td>
        <td>fas fa-external-link-alt</td>
        <td>&amp;#xf35d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-external-link-square-alt"></span></td>
        <td>fas fa-external-link-square-alt</td>
        <td>&amp;#xf360;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-point-down"></span></td>
        <td>fas fa-hand-point-down</td>
        <td>&amp;#xf0a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-point-down"></span></td>
        <td>far fa-hand-point-down</td>
        <td>&amp;#xf0a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-point-left"></span></td>
        <td>fas fa-hand-point-left</td>
        <td>&amp;#xf0a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-point-left"></span></td>
        <td>far fa-hand-point-left</td>
        <td>&amp;#xf0a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-point-right"></span></td>
        <td>fas fa-hand-point-right</td>
        <td>&amp;#xf0a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-point-right"></span></td>
        <td>far fa-hand-point-right</td>
        <td>&amp;#xf0a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-point-up"></span></td>
        <td>fas fa-hand-point-up</td>
        <td>&amp;#xf0a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-point-up"></span></td>
        <td>far fa-hand-point-up</td>
        <td>&amp;#xf0a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-pointer"></span></td>
        <td>fas fa-hand-pointer</td>
        <td>&amp;#xf25a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-pointer"></span></td>
        <td>far fa-hand-pointer</td>
        <td>&amp;#xf25a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-history"></span></td>
        <td>fas fa-history</td>
        <td>&amp;#xf1da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-level-down-alt"></span></td>
        <td>fas fa-level-down-alt</td>
        <td>&amp;#xf3be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-level-up-alt"></span></td>
        <td>fas fa-level-up-alt</td>
        <td>&amp;#xf3bf;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-location-arrow"></span></td>
        <td>fas fa-location-arrow</td>
        <td>&amp;#xf124;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-long-arrow-alt-down"></span></td>
        <td>fas fa-long-arrow-alt-down</td>
        <td>&amp;#xf309;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-long-arrow-alt-left"></span></td>
        <td>fas fa-long-arrow-alt-left</td>
        <td>&amp;#xf30a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-long-arrow-alt-right"></span></td>
        <td>fas fa-long-arrow-alt-right</td>
        <td>&amp;#xf30b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-long-arrow-alt-up"></span></td>
        <td>fas fa-long-arrow-alt-up</td>
        <td>&amp;#xf30c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mouse-pointer"></span></td>
        <td>fas fa-mouse-pointer</td>
        <td>&amp;#xf245;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-play"></span></td>
        <td>fas fa-play</td>
        <td>&amp;#xf04b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-random"></span></td>
        <td>fas fa-random</td>
        <td>&amp;#xf074;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-recycle"></span></td>
        <td>fas fa-recycle</td>
        <td>&amp;#xf1b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-redo"></span></td>
        <td>fas fa-redo</td>
        <td>&amp;#xf01e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-redo-alt"></span></td>
        <td>fas fa-redo-alt</td>
        <td>&amp;#xf2f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-reply"></span></td>
        <td>fas fa-reply</td>
        <td>&amp;#xf3e5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-reply-all"></span></td>
        <td>fas fa-reply-all</td>
        <td>&amp;#xf122;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-retweet"></span></td>
        <td>fas fa-retweet</td>
        <td>&amp;#xf079;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-share"></span></td>
        <td>fas fa-share</td>
        <td>&amp;#xf064;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-share-square"></span></td>
        <td>fas fa-share-square</td>
        <td>&amp;#xf14d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-share-square"></span></td>
        <td>far fa-share-square</td>
        <td>&amp;#xf14d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sign-in-alt"></span></td>
        <td>fas fa-sign-in-alt</td>
        <td>&amp;#xf2f6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sign-out-alt"></span></td>
        <td>fas fa-sign-out-alt</td>
        <td>&amp;#xf2f5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort"></span></td>
        <td>fas fa-sort</td>
        <td>&amp;#xf0dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-alpha-down"></span></td>
        <td>fas fa-sort-alpha-down</td>
        <td>&amp;#xf15d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-alpha-up"></span></td>
        <td>fas fa-sort-alpha-up</td>
        <td>&amp;#xf15e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-amount-down"></span></td>
        <td>fas fa-sort-amount-down</td>
        <td>&amp;#xf160;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-amount-up"></span></td>
        <td>fas fa-sort-amount-up</td>
        <td>&amp;#xf161;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-down"></span></td>
        <td>fas fa-sort-down</td>
        <td>&amp;#xf0dd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-numeric-down"></span></td>
        <td>fas fa-sort-numeric-down</td>
        <td>&amp;#xf162;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-numeric-up"></span></td>
        <td>fas fa-sort-numeric-up</td>
        <td>&amp;#xf163;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sort-up"></span></td>
        <td>fas fa-sort-up</td>
        <td>&amp;#xf0de;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sync"></span></td>
        <td>fas fa-sync</td>
        <td>&amp;#xf021;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sync-alt"></span></td>
        <td>fas fa-sync-alt</td>
        <td>&amp;#xf2f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-text-height"></span></td>
        <td>fas fa-text-height</td>
        <td>&amp;#xf034;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-text-width"></span></td>
        <td>fas fa-text-width</td>
        <td>&amp;#xf035;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-undo"></span></td>
        <td>fas fa-undo</td>
        <td>&amp;#xf0e2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-undo-alt"></span></td>
        <td>fas fa-undo-alt</td>
        <td>&amp;#xf2ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-upload"></span></td>
        <td>fas fa-upload</td>
        <td>&amp;#xf093;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-backward"></span></td>
        <td>fas fa-backward</td>
        <td>&amp;#xf04a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-broadcast-tower"></span></td>
        <td>fas fa-broadcast-tower</td>
        <td>&amp;#xf519;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-circle"></span></td>
        <td>fas fa-circle</td>
        <td>&amp;#xf111;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-circle"></span></td>
        <td>far fa-circle</td>
        <td>&amp;#xf111;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-compress"></span></td>
        <td>fas fa-compress</td>
        <td>&amp;#xf066;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-eject"></span></td>
        <td>fas fa-eject</td>
        <td>&amp;#xf052;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-expand"></span></td>
        <td>fas fa-expand</td>
        <td>&amp;#xf065;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fast-backward"></span></td>
        <td>fas fa-fast-backward</td>
        <td>&amp;#xf049;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fast-forward"></span></td>
        <td>fas fa-fast-forward</td>
        <td>&amp;#xf050;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-audio"></span></td>
        <td>fas fa-file-audio</td>
        <td>&amp;#xf1c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-audio"></span></td>
        <td>far fa-file-audio</td>
        <td>&amp;#xf1c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-video"></span></td>
        <td>fas fa-file-video</td>
        <td>&amp;#xf1c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-video"></span></td>
        <td>far fa-file-video</td>
        <td>&amp;#xf1c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-film"></span></td>
        <td>fas fa-film</td>
        <td>&amp;#xf008;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-forward"></span></td>
        <td>fas fa-forward</td>
        <td>&amp;#xf04e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-headphones"></span></td>
        <td>fas fa-headphones</td>
        <td>&amp;#xf025;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microphone"></span></td>
        <td>fas fa-microphone</td>
        <td>&amp;#xf130;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microphone-alt"></span></td>
        <td>fas fa-microphone-alt</td>
        <td>&amp;#xf3c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microphone-alt-slash"></span></td>
        <td>fas fa-microphone-alt-slash</td>
        <td>&amp;#xf539;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microphone-slash"></span></td>
        <td>fas fa-microphone-slash</td>
        <td>&amp;#xf131;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-music"></span></td>
        <td>fas fa-music</td>
        <td>&amp;#xf001;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pause"></span></td>
        <td>fas fa-pause</td>
        <td>&amp;#xf04c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pause-circle"></span></td>
        <td>fas fa-pause-circle</td>
        <td>&amp;#xf28b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-pause-circle"></span></td>
        <td>far fa-pause-circle</td>
        <td>&amp;#xf28b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-play-circle"></span></td>
        <td>fas fa-play-circle</td>
        <td>&amp;#xf144;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-play-circle"></span></td>
        <td>far fa-play-circle</td>
        <td>&amp;#xf144;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-podcast"></span></td>
        <td>fas fa-podcast</td>
        <td>&amp;#xf2ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-rss"></span></td>
        <td>fas fa-rss</td>
        <td>&amp;#xf09e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-rss-square"></span></td>
        <td>fas fa-rss-square</td>
        <td>&amp;#xf143;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-step-backward"></span></td>
        <td>fas fa-step-backward</td>
        <td>&amp;#xf048;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-step-forward"></span></td>
        <td>fas fa-step-forward</td>
        <td>&amp;#xf051;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stop"></span></td>
        <td>fas fa-stop</td>
        <td>&amp;#xf04d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stop-circle"></span></td>
        <td>fas fa-stop-circle</td>
        <td>&amp;#xf28d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-stop-circle"></span></td>
        <td>far fa-stop-circle</td>
        <td>&amp;#xf28d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-video"></span></td>
        <td>fas fa-video</td>
        <td>&amp;#xf03d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-volume-down"></span></td>
        <td>fas fa-volume-down</td>
        <td>&amp;#xf027;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-volume-mute"></span></td>
        <td>fas fa-volume-mute</td>
        <td>&amp;#xf6a9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-volume-off"></span></td>
        <td>fas fa-volume-off</td>
        <td>&amp;#xf026;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-volume-up"></span></td>
        <td>fas fa-volume-up</td>
        <td>&amp;#xf028;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-youtube"></span></td>
        <td>fab fa-youtube</td>
        <td>&amp;#xf167;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-air-freshener"></span></td>
        <td>fas fa-air-freshener</td>
        <td>&amp;#xf5d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ambulance"></span></td>
        <td>fas fa-ambulance</td>
        <td>&amp;#xf0f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bus-alt"></span></td>
        <td>fas fa-bus-alt</td>
        <td>&amp;#xf55e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-car"></span></td>
        <td>fas fa-car</td>
        <td>&amp;#xf1b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-car-alt"></span></td>
        <td>fas fa-car-alt</td>
        <td>&amp;#xf5de;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-car-battery"></span></td>
        <td>fas fa-car-battery</td>
        <td>&amp;#xf5df;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-car-crash"></span></td>
        <td>fas fa-car-crash</td>
        <td>&amp;#xf5e1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-car-side"></span></td>
        <td>fas fa-car-side</td>
        <td>&amp;#xf5e4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-charging-station"></span></td>
        <td>fas fa-charging-station</td>
        <td>&amp;#xf5e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gas-pump"></span></td>
        <td>fas fa-gas-pump</td>
        <td>&amp;#xf52f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-motorcycle"></span></td>
        <td>fas fa-motorcycle</td>
        <td>&amp;#xf21c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-oil-can"></span></td>
        <td>fas fa-oil-can</td>
        <td>&amp;#xf613;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tachometer-alt"></span></td>
        <td>fas fa-tachometer-alt</td>
        <td>&amp;#xf3fd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-truck"></span></td>
        <td>fas fa-truck</td>
        <td>&amp;#xf0d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-truck-monster"></span></td>
        <td>fas fa-truck-monster</td>
        <td>&amp;#xf63b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-truck-pickup"></span></td>
        <td>fas fa-truck-pickup</td>
        <td>&amp;#xf63c;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-apple-alt"></span></td>
        <td>fas fa-apple-alt</td>
        <td>&amp;#xf5d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-campground"></span></td>
        <td>fas fa-campground</td>
        <td>&amp;#xf6bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-sun"></span></td>
        <td>fas fa-cloud-sun</td>
        <td>&amp;#xf6c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-drumstick-bite"></span></td>
        <td>fas fa-drumstick-bite</td>
        <td>&amp;#xf6d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-football-ball"></span></td>
        <td>fas fa-football-ball</td>
        <td>&amp;#xf44e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hiking"></span></td>
        <td>fas fa-hiking</td>
        <td>&amp;#xf6ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mountain"></span></td>
        <td>fas fa-mountain</td>
        <td>&amp;#xf6fc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tractor"></span></td>
        <td>fas fa-tractor</td>
        <td>&amp;#xf722;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tree"></span></td>
        <td>fas fa-tree</td>
        <td>&amp;#xf1bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wind"></span></td>
        <td>fas fa-wind</td>
        <td>&amp;#xf72e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wine-bottle"></span></td>
        <td>fas fa-wine-bottle</td>
        <td>&amp;#xf72f;</td>
      </tr>
    


      <tr onclick="get(this)">
        <td><span class="fab fa-500px"></span></td>
        <td>fab fa-500px</td>
        <td>&amp;#xf26e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-accusoft"></span></td>
        <td>fab fa-accusoft</td>
        <td>&amp;#xf369;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-acquisitions-incorporated"></span></td>
        <td>fab fa-acquisitions-incorporated</td>
        <td>&amp;#xf6af;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-adn"></span></td>
        <td>fab fa-adn</td>
        <td>&amp;#xf170;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-adobe"></span></td>
        <td>fab fa-adobe</td>
        <td>&amp;#xf778;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-adversal"></span></td>
        <td>fab fa-adversal</td>
        <td>&amp;#xf36a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-affiliatetheme"></span></td>
        <td>fab fa-affiliatetheme</td>
        <td>&amp;#xf36b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-algolia"></span></td>
        <td>fab fa-algolia</td>
        <td>&amp;#xf36c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-alipay"></span></td>
        <td>fab fa-alipay</td>
        <td>&amp;#xf642;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-amazon"></span></td>
        <td>fab fa-amazon</td>
        <td>&amp;#xf270;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-amazon-pay"></span></td>
        <td>fab fa-amazon-pay</td>
        <td>&amp;#xf42c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-amilia"></span></td>
        <td>fab fa-amilia</td>
        <td>&amp;#xf36d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-android"></span></td>
        <td>fab fa-android</td>
        <td>&amp;#xf17b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-angellist"></span></td>
        <td>fab fa-angellist</td>
        <td>&amp;#xf209;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-angrycreative"></span></td>
        <td>fab fa-angrycreative</td>
        <td>&amp;#xf36e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-angular"></span></td>
        <td>fab fa-angular</td>
        <td>&amp;#xf420;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-app-store"></span></td>
        <td>fab fa-app-store</td>
        <td>&amp;#xf36f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-app-store-ios"></span></td>
        <td>fab fa-app-store-ios</td>
        <td>&amp;#xf370;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-apper"></span></td>
        <td>fab fa-apper</td>
        <td>&amp;#xf371;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-apple"></span></td>
        <td>fab fa-apple</td>
        <td>&amp;#xf179;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-apple-pay"></span></td>
        <td>fab fa-apple-pay</td>
        <td>&amp;#xf415;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-artstation"></span></td>
        <td>fab fa-artstation</td>
        <td>&amp;#xf77a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-asymmetrik"></span></td>
        <td>fab fa-asymmetrik</td>
        <td>&amp;#xf372;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-atlassian"></span></td>
        <td>fab fa-atlassian</td>
        <td>&amp;#xf77b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-audible"></span></td>
        <td>fab fa-audible</td>
        <td>&amp;#xf373;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-autoprefixer"></span></td>
        <td>fab fa-autoprefixer</td>
        <td>&amp;#xf41c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-avianex"></span></td>
        <td>fab fa-avianex</td>
        <td>&amp;#xf374;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-aviato"></span></td>
        <td>fab fa-aviato</td>
        <td>&amp;#xf421;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-aws"></span></td>
        <td>fab fa-aws</td>
        <td>&amp;#xf375;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bandcamp"></span></td>
        <td>fab fa-bandcamp</td>
        <td>&amp;#xf2d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-behance"></span></td>
        <td>fab fa-behance</td>
        <td>&amp;#xf1b4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-behance-square"></span></td>
        <td>fab fa-behance-square</td>
        <td>&amp;#xf1b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bimobject"></span></td>
        <td>fab fa-bimobject</td>
        <td>&amp;#xf378;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bitbucket"></span></td>
        <td>fab fa-bitbucket</td>
        <td>&amp;#xf171;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bitcoin"></span></td>
        <td>fab fa-bitcoin</td>
        <td>&amp;#xf379;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bity"></span></td>
        <td>fab fa-bity</td>
        <td>&amp;#xf37a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-black-tie"></span></td>
        <td>fab fa-black-tie</td>
        <td>&amp;#xf27e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-blackberry"></span></td>
        <td>fab fa-blackberry</td>
        <td>&amp;#xf37b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-blogger"></span></td>
        <td>fab fa-blogger</td>
        <td>&amp;#xf37c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-blogger-b"></span></td>
        <td>fab fa-blogger-b</td>
        <td>&amp;#xf37d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bluetooth"></span></td>
        <td>fab fa-bluetooth</td>
        <td>&amp;#xf293;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-bluetooth-b"></span></td>
        <td>fab fa-bluetooth-b</td>
        <td>&amp;#xf294;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-btc"></span></td>
        <td>fab fa-btc</td>
        <td>&amp;#xf15a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-buromobelexperte"></span></td>
        <td>fab fa-buromobelexperte</td>
        <td>&amp;#xf37f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-buysellads"></span></td>
        <td>fab fa-buysellads</td>
        <td>&amp;#xf20d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-canadian-maple-leaf"></span></td>
        <td>fab fa-canadian-maple-leaf</td>
        <td>&amp;#xf785;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-amazon-pay"></span></td>
        <td>fab fa-cc-amazon-pay</td>
        <td>&amp;#xf42d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-amex"></span></td>
        <td>fab fa-cc-amex</td>
        <td>&amp;#xf1f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-apple-pay"></span></td>
        <td>fab fa-cc-apple-pay</td>
        <td>&amp;#xf416;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-diners-club"></span></td>
        <td>fab fa-cc-diners-club</td>
        <td>&amp;#xf24c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-discover"></span></td>
        <td>fab fa-cc-discover</td>
        <td>&amp;#xf1f2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-jcb"></span></td>
        <td>fab fa-cc-jcb</td>
        <td>&amp;#xf24b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-mastercard"></span></td>
        <td>fab fa-cc-mastercard</td>
        <td>&amp;#xf1f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-paypal"></span></td>
        <td>fab fa-cc-paypal</td>
        <td>&amp;#xf1f4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-stripe"></span></td>
        <td>fab fa-cc-stripe</td>
        <td>&amp;#xf1f5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cc-visa"></span></td>
        <td>fab fa-cc-visa</td>
        <td>&amp;#xf1f0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-centercode"></span></td>
        <td>fab fa-centercode</td>
        <td>&amp;#xf380;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-centos"></span></td>
        <td>fab fa-centos</td>
        <td>&amp;#xf789;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-chrome"></span></td>
        <td>fab fa-chrome</td>
        <td>&amp;#xf268;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cloudscale"></span></td>
        <td>fab fa-cloudscale</td>
        <td>&amp;#xf383;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cloudsmith"></span></td>
        <td>fab fa-cloudsmith</td>
        <td>&amp;#xf384;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cloudversify"></span></td>
        <td>fab fa-cloudversify</td>
        <td>&amp;#xf385;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-codepen"></span></td>
        <td>fab fa-codepen</td>
        <td>&amp;#xf1cb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-codiepie"></span></td>
        <td>fab fa-codiepie</td>
        <td>&amp;#xf284;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-confluence"></span></td>
        <td>fab fa-confluence</td>
        <td>&amp;#xf78d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-connectdevelop"></span></td>
        <td>fab fa-connectdevelop</td>
        <td>&amp;#xf20e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-contao"></span></td>
        <td>fab fa-contao</td>
        <td>&amp;#xf26d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cpanel"></span></td>
        <td>fab fa-cpanel</td>
        <td>&amp;#xf388;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons"></span></td>
        <td>fab fa-creative-commons</td>
        <td>&amp;#xf25e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-by"></span></td>
        <td>fab fa-creative-commons-by</td>
        <td>&amp;#xf4e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-nc"></span></td>
        <td>fab fa-creative-commons-nc</td>
        <td>&amp;#xf4e8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-nc-eu"></span></td>
        <td>fab fa-creative-commons-nc-eu</td>
        <td>&amp;#xf4e9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-nc-jp"></span></td>
        <td>fab fa-creative-commons-nc-jp</td>
        <td>&amp;#xf4ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-nd"></span></td>
        <td>fab fa-creative-commons-nd</td>
        <td>&amp;#xf4eb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-pd"></span></td>
        <td>fab fa-creative-commons-pd</td>
        <td>&amp;#xf4ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-pd-alt"></span></td>
        <td>fab fa-creative-commons-pd-alt</td>
        <td>&amp;#xf4ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-remix"></span></td>
        <td>fab fa-creative-commons-remix</td>
        <td>&amp;#xf4ee;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-sa"></span></td>
        <td>fab fa-creative-commons-sa</td>
        <td>&amp;#xf4ef;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-sampling"></span></td>
        <td>fab fa-creative-commons-sampling</td>
        <td>&amp;#xf4f0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-sampling-plus"></span></td>
        <td>fab fa-creative-commons-sampling-plus</td>
        <td>&amp;#xf4f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-share"></span></td>
        <td>fab fa-creative-commons-share</td>
        <td>&amp;#xf4f2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-creative-commons-zero"></span></td>
        <td>fab fa-creative-commons-zero</td>
        <td>&amp;#xf4f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-critical-role"></span></td>
        <td>fab fa-critical-role</td>
        <td>&amp;#xf6c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-css3"></span></td>
        <td>fab fa-css3</td>
        <td>&amp;#xf13c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-css3-alt"></span></td>
        <td>fab fa-css3-alt</td>
        <td>&amp;#xf38b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-cuttlefish"></span></td>
        <td>fab fa-cuttlefish</td>
        <td>&amp;#xf38c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-d-and-d"></span></td>
        <td>fab fa-d-and-d</td>
        <td>&amp;#xf38d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-d-and-d-beyond"></span></td>
        <td>fab fa-d-and-d-beyond</td>
        <td>&amp;#xf6ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dashcube"></span></td>
        <td>fab fa-dashcube</td>
        <td>&amp;#xf210;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-delicious"></span></td>
        <td>fab fa-delicious</td>
        <td>&amp;#xf1a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-deploydog"></span></td>
        <td>fab fa-deploydog</td>
        <td>&amp;#xf38e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-deskpro"></span></td>
        <td>fab fa-deskpro</td>
        <td>&amp;#xf38f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dev"></span></td>
        <td>fab fa-dev</td>
        <td>&amp;#xf6cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-deviantart"></span></td>
        <td>fab fa-deviantart</td>
        <td>&amp;#xf1bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dhl"></span></td>
        <td>fab fa-dhl</td>
        <td>&amp;#xf790;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-diaspora"></span></td>
        <td>fab fa-diaspora</td>
        <td>&amp;#xf791;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-digg"></span></td>
        <td>fab fa-digg</td>
        <td>&amp;#xf1a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-digital-ocean"></span></td>
        <td>fab fa-digital-ocean</td>
        <td>&amp;#xf391;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-discord"></span></td>
        <td>fab fa-discord</td>
        <td>&amp;#xf392;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-discourse"></span></td>
        <td>fab fa-discourse</td>
        <td>&amp;#xf393;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dochub"></span></td>
        <td>fab fa-dochub</td>
        <td>&amp;#xf394;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-docker"></span></td>
        <td>fab fa-docker</td>
        <td>&amp;#xf395;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-draft2digital"></span></td>
        <td>fab fa-draft2digital</td>
        <td>&amp;#xf396;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dribbble"></span></td>
        <td>fab fa-dribbble</td>
        <td>&amp;#xf17d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dribbble-square"></span></td>
        <td>fab fa-dribbble-square</td>
        <td>&amp;#xf397;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dropbox"></span></td>
        <td>fab fa-dropbox</td>
        <td>&amp;#xf16b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-drupal"></span></td>
        <td>fab fa-drupal</td>
        <td>&amp;#xf1a9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-dyalog"></span></td>
        <td>fab fa-dyalog</td>
        <td>&amp;#xf399;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-earlybirds"></span></td>
        <td>fab fa-earlybirds</td>
        <td>&amp;#xf39a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ebay"></span></td>
        <td>fab fa-ebay</td>
        <td>&amp;#xf4f4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-edge"></span></td>
        <td>fab fa-edge</td>
        <td>&amp;#xf282;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-elementor"></span></td>
        <td>fab fa-elementor</td>
        <td>&amp;#xf430;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ello"></span></td>
        <td>fab fa-ello</td>
        <td>&amp;#xf5f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ember"></span></td>
        <td>fab fa-ember</td>
        <td>&amp;#xf423;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-empire"></span></td>
        <td>fab fa-empire</td>
        <td>&amp;#xf1d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-envira"></span></td>
        <td>fab fa-envira</td>
        <td>&amp;#xf299;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-erlang"></span></td>
        <td>fab fa-erlang</td>
        <td>&amp;#xf39d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ethereum"></span></td>
        <td>fab fa-ethereum</td>
        <td>&amp;#xf42e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-etsy"></span></td>
        <td>fab fa-etsy</td>
        <td>&amp;#xf2d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-expeditedssl"></span></td>
        <td>fab fa-expeditedssl</td>
        <td>&amp;#xf23e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-facebook"></span></td>
        <td>fab fa-facebook</td>
        <td>&amp;#xf09a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-facebook-f"></span></td>
        <td>fab fa-facebook-f</td>
        <td>&amp;#xf39e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-facebook-messenger"></span></td>
        <td>fab fa-facebook-messenger</td>
        <td>&amp;#xf39f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-facebook-square"></span></td>
        <td>fab fa-facebook-square</td>
        <td>&amp;#xf082;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fantasy-flight-games"></span></td>
        <td>fab fa-fantasy-flight-games</td>
        <td>&amp;#xf6dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fedex"></span></td>
        <td>fab fa-fedex</td>
        <td>&amp;#xf797;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fedora"></span></td>
        <td>fab fa-fedora</td>
        <td>&amp;#xf798;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-figma"></span></td>
        <td>fab fa-figma</td>
        <td>&amp;#xf799;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-firefox"></span></td>
        <td>fab fa-firefox</td>
        <td>&amp;#xf269;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-first-order"></span></td>
        <td>fab fa-first-order</td>
        <td>&amp;#xf2b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-first-order-alt"></span></td>
        <td>fab fa-first-order-alt</td>
        <td>&amp;#xf50a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-firstdraft"></span></td>
        <td>fab fa-firstdraft</td>
        <td>&amp;#xf3a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-flickr"></span></td>
        <td>fab fa-flickr</td>
        <td>&amp;#xf16e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-flipboard"></span></td>
        <td>fab fa-flipboard</td>
        <td>&amp;#xf44d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fly"></span></td>
        <td>fab fa-fly</td>
        <td>&amp;#xf417;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-font-awesome"></span></td>
        <td>fab fa-font-awesome</td>
        <td>&amp;#xf2b4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-font-awesome-alt"></span></td>
        <td>fab fa-font-awesome-alt</td>
        <td>&amp;#xf35c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-font-awesome-flag"></span></td>
        <td>fab fa-font-awesome-flag</td>
        <td>&amp;#xf425;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fonticons"></span></td>
        <td>fab fa-fonticons</td>
        <td>&amp;#xf280;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fonticons-fi"></span></td>
        <td>fab fa-fonticons-fi</td>
        <td>&amp;#xf3a2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fort-awesome"></span></td>
        <td>fab fa-fort-awesome</td>
        <td>&amp;#xf286;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fort-awesome-alt"></span></td>
        <td>fab fa-fort-awesome-alt</td>
        <td>&amp;#xf3a3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-forumbee"></span></td>
        <td>fab fa-forumbee</td>
        <td>&amp;#xf211;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-foursquare"></span></td>
        <td>fab fa-foursquare</td>
        <td>&amp;#xf180;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-free-code-camp"></span></td>
        <td>fab fa-free-code-camp</td>
        <td>&amp;#xf2c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-freebsd"></span></td>
        <td>fab fa-freebsd</td>
        <td>&amp;#xf3a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-fulcrum"></span></td>
        <td>fab fa-fulcrum</td>
        <td>&amp;#xf50b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-galactic-republic"></span></td>
        <td>fab fa-galactic-republic</td>
        <td>&amp;#xf50c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-galactic-senate"></span></td>
        <td>fab fa-galactic-senate</td>
        <td>&amp;#xf50d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-get-pocket"></span></td>
        <td>fab fa-get-pocket</td>
        <td>&amp;#xf265;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gg"></span></td>
        <td>fab fa-gg</td>
        <td>&amp;#xf260;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gg-circle"></span></td>
        <td>fab fa-gg-circle</td>
        <td>&amp;#xf261;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-git"></span></td>
        <td>fab fa-git</td>
        <td>&amp;#xf1d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-git-square"></span></td>
        <td>fab fa-git-square</td>
        <td>&amp;#xf1d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-github"></span></td>
        <td>fab fa-github</td>
        <td>&amp;#xf09b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-github-alt"></span></td>
        <td>fab fa-github-alt</td>
        <td>&amp;#xf113;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-github-square"></span></td>
        <td>fab fa-github-square</td>
        <td>&amp;#xf092;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gitkraken"></span></td>
        <td>fab fa-gitkraken</td>
        <td>&amp;#xf3a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gitlab"></span></td>
        <td>fab fa-gitlab</td>
        <td>&amp;#xf296;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gitter"></span></td>
        <td>fab fa-gitter</td>
        <td>&amp;#xf426;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-glide"></span></td>
        <td>fab fa-glide</td>
        <td>&amp;#xf2a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-glide-g"></span></td>
        <td>fab fa-glide-g</td>
        <td>&amp;#xf2a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gofore"></span></td>
        <td>fab fa-gofore</td>
        <td>&amp;#xf3a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-goodreads"></span></td>
        <td>fab fa-goodreads</td>
        <td>&amp;#xf3a8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-goodreads-g"></span></td>
        <td>fab fa-goodreads-g</td>
        <td>&amp;#xf3a9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google"></span></td>
        <td>fab fa-google</td>
        <td>&amp;#xf1a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-drive"></span></td>
        <td>fab fa-google-drive</td>
        <td>&amp;#xf3aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-play"></span></td>
        <td>fab fa-google-play</td>
        <td>&amp;#xf3ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-plus"></span></td>
        <td>fab fa-google-plus</td>
        <td>&amp;#xf2b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-plus-g"></span></td>
        <td>fab fa-google-plus-g</td>
        <td>&amp;#xf0d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-plus-square"></span></td>
        <td>fab fa-google-plus-square</td>
        <td>&amp;#xf0d4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-google-wallet"></span></td>
        <td>fab fa-google-wallet</td>
        <td>&amp;#xf1ee;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gratipay"></span></td>
        <td>fab fa-gratipay</td>
        <td>&amp;#xf184;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-grav"></span></td>
        <td>fab fa-grav</td>
        <td>&amp;#xf2d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gripfire"></span></td>
        <td>fab fa-gripfire</td>
        <td>&amp;#xf3ac;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-grunt"></span></td>
        <td>fab fa-grunt</td>
        <td>&amp;#xf3ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-gulp"></span></td>
        <td>fab fa-gulp</td>
        <td>&amp;#xf3ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hacker-news"></span></td>
        <td>fab fa-hacker-news</td>
        <td>&amp;#xf1d4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hacker-news-square"></span></td>
        <td>fab fa-hacker-news-square</td>
        <td>&amp;#xf3af;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hackerrank"></span></td>
        <td>fab fa-hackerrank</td>
        <td>&amp;#xf5f7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hips"></span></td>
        <td>fab fa-hips</td>
        <td>&amp;#xf452;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hire-a-helper"></span></td>
        <td>fab fa-hire-a-helper</td>
        <td>&amp;#xf3b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hooli"></span></td>
        <td>fab fa-hooli</td>
        <td>&amp;#xf427;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hornbill"></span></td>
        <td>fab fa-hornbill</td>
        <td>&amp;#xf592;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hotjar"></span></td>
        <td>fab fa-hotjar</td>
        <td>&amp;#xf3b1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-houzz"></span></td>
        <td>fab fa-houzz</td>
        <td>&amp;#xf27c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-html5"></span></td>
        <td>fab fa-html5</td>
        <td>&amp;#xf13b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-hubspot"></span></td>
        <td>fab fa-hubspot</td>
        <td>&amp;#xf3b2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-imdb"></span></td>
        <td>fab fa-imdb</td>
        <td>&amp;#xf2d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-instagram"></span></td>
        <td>fab fa-instagram</td>
        <td>&amp;#xf16d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-intercom"></span></td>
        <td>fab fa-intercom</td>
        <td>&amp;#xf7af;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-internet-explorer"></span></td>
        <td>fab fa-internet-explorer</td>
        <td>&amp;#xf26b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-invision"></span></td>
        <td>fab fa-invision</td>
        <td>&amp;#xf7b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ioxhost"></span></td>
        <td>fab fa-ioxhost</td>
        <td>&amp;#xf208;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-itunes"></span></td>
        <td>fab fa-itunes</td>
        <td>&amp;#xf3b4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-itunes-note"></span></td>
        <td>fab fa-itunes-note</td>
        <td>&amp;#xf3b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-java"></span></td>
        <td>fab fa-java</td>
        <td>&amp;#xf4e4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-jedi-order"></span></td>
        <td>fab fa-jedi-order</td>
        <td>&amp;#xf50e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-jenkins"></span></td>
        <td>fab fa-jenkins</td>
        <td>&amp;#xf3b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-jira"></span></td>
        <td>fab fa-jira</td>
        <td>&amp;#xf7b1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-joget"></span></td>
        <td>fab fa-joget</td>
        <td>&amp;#xf3b7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-joomla"></span></td>
        <td>fab fa-joomla</td>
        <td>&amp;#xf1aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-js"></span></td>
        <td>fab fa-js</td>
        <td>&amp;#xf3b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-js-square"></span></td>
        <td>fab fa-js-square</td>
        <td>&amp;#xf3b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-jsfiddle"></span></td>
        <td>fab fa-jsfiddle</td>
        <td>&amp;#xf1cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-kaggle"></span></td>
        <td>fab fa-kaggle</td>
        <td>&amp;#xf5fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-keybase"></span></td>
        <td>fab fa-keybase</td>
        <td>&amp;#xf4f5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-keycdn"></span></td>
        <td>fab fa-keycdn</td>
        <td>&amp;#xf3ba;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-kickstarter"></span></td>
        <td>fab fa-kickstarter</td>
        <td>&amp;#xf3bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-kickstarter-k"></span></td>
        <td>fab fa-kickstarter-k</td>
        <td>&amp;#xf3bc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-korvue"></span></td>
        <td>fab fa-korvue</td>
        <td>&amp;#xf42f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-laravel"></span></td>
        <td>fab fa-laravel</td>
        <td>&amp;#xf3bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-lastfm"></span></td>
        <td>fab fa-lastfm</td>
        <td>&amp;#xf202;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-lastfm-square"></span></td>
        <td>fab fa-lastfm-square</td>
        <td>&amp;#xf203;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-leanpub"></span></td>
        <td>fab fa-leanpub</td>
        <td>&amp;#xf212;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-less"></span></td>
        <td>fab fa-less</td>
        <td>&amp;#xf41d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-line"></span></td>
        <td>fab fa-line</td>
        <td>&amp;#xf3c0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-linkedin"></span></td>
        <td>fab fa-linkedin</td>
        <td>&amp;#xf08c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-linkedin-in"></span></td>
        <td>fab fa-linkedin-in</td>
        <td>&amp;#xf0e1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-linode"></span></td>
        <td>fab fa-linode</td>
        <td>&amp;#xf2b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-linux"></span></td>
        <td>fab fa-linux</td>
        <td>&amp;#xf17c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-lyft"></span></td>
        <td>fab fa-lyft</td>
        <td>&amp;#xf3c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-magento"></span></td>
        <td>fab fa-magento</td>
        <td>&amp;#xf3c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mailchimp"></span></td>
        <td>fab fa-mailchimp</td>
        <td>&amp;#xf59e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mandalorian"></span></td>
        <td>fab fa-mandalorian</td>
        <td>&amp;#xf50f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-markdown"></span></td>
        <td>fab fa-markdown</td>
        <td>&amp;#xf60f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mastodon"></span></td>
        <td>fab fa-mastodon</td>
        <td>&amp;#xf4f6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-maxcdn"></span></td>
        <td>fab fa-maxcdn</td>
        <td>&amp;#xf136;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-medapps"></span></td>
        <td>fab fa-medapps</td>
        <td>&amp;#xf3c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-medium"></span></td>
        <td>fab fa-medium</td>
        <td>&amp;#xf23a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-medium-m"></span></td>
        <td>fab fa-medium-m</td>
        <td>&amp;#xf3c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-medrt"></span></td>
        <td>fab fa-medrt</td>
        <td>&amp;#xf3c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-meetup"></span></td>
        <td>fab fa-meetup</td>
        <td>&amp;#xf2e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-megaport"></span></td>
        <td>fab fa-megaport</td>
        <td>&amp;#xf5a3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mendeley"></span></td>
        <td>fab fa-mendeley</td>
        <td>&amp;#xf7b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-microsoft"></span></td>
        <td>fab fa-microsoft</td>
        <td>&amp;#xf3ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mix"></span></td>
        <td>fab fa-mix</td>
        <td>&amp;#xf3cb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mixcloud"></span></td>
        <td>fab fa-mixcloud</td>
        <td>&amp;#xf289;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-mizuni"></span></td>
        <td>fab fa-mizuni</td>
        <td>&amp;#xf3cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-modx"></span></td>
        <td>fab fa-modx</td>
        <td>&amp;#xf285;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-monero"></span></td>
        <td>fab fa-monero</td>
        <td>&amp;#xf3d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-napster"></span></td>
        <td>fab fa-napster</td>
        <td>&amp;#xf3d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-neos"></span></td>
        <td>fab fa-neos</td>
        <td>&amp;#xf612;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-nimblr"></span></td>
        <td>fab fa-nimblr</td>
        <td>&amp;#xf5a8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-nintendo-switch"></span></td>
        <td>fab fa-nintendo-switch</td>
        <td>&amp;#xf418;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-node"></span></td>
        <td>fab fa-node</td>
        <td>&amp;#xf419;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-node-js"></span></td>
        <td>fab fa-node-js</td>
        <td>&amp;#xf3d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-npm"></span></td>
        <td>fab fa-npm</td>
        <td>&amp;#xf3d4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ns8"></span></td>
        <td>fab fa-ns8</td>
        <td>&amp;#xf3d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-nutritionix"></span></td>
        <td>fab fa-nutritionix</td>
        <td>&amp;#xf3d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-odnoklassniki"></span></td>
        <td>fab fa-odnoklassniki</td>
        <td>&amp;#xf263;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-odnoklassniki-square"></span></td>
        <td>fab fa-odnoklassniki-square</td>
        <td>&amp;#xf264;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-old-republic"></span></td>
        <td>fab fa-old-republic</td>
        <td>&amp;#xf510;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-om"></span></td>
        <td>fas fa-om</td>
        <td>&amp;#xf679;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-opencart"></span></td>
        <td>fab fa-opencart</td>
        <td>&amp;#xf23d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-openid"></span></td>
        <td>fab fa-openid</td>
        <td>&amp;#xf19b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-opera"></span></td>
        <td>fab fa-opera</td>
        <td>&amp;#xf26a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-optin-monster"></span></td>
        <td>fab fa-optin-monster</td>
        <td>&amp;#xf23c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-osi"></span></td>
        <td>fab fa-osi</td>
        <td>&amp;#xf41a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-page4"></span></td>
        <td>fab fa-page4</td>
        <td>&amp;#xf3d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pagelines"></span></td>
        <td>fab fa-pagelines</td>
        <td>&amp;#xf18c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-palfed"></span></td>
        <td>fab fa-palfed</td>
        <td>&amp;#xf3d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-patreon"></span></td>
        <td>fab fa-patreon</td>
        <td>&amp;#xf3d9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-paypal"></span></td>
        <td>fab fa-paypal</td>
        <td>&amp;#xf1ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-penny-arcade"></span></td>
        <td>fab fa-penny-arcade</td>
        <td>&amp;#xf704;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-periscope"></span></td>
        <td>fab fa-periscope</td>
        <td>&amp;#xf3da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-phabricator"></span></td>
        <td>fab fa-phabricator</td>
        <td>&amp;#xf3db;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-phoenix-framework"></span></td>
        <td>fab fa-phoenix-framework</td>
        <td>&amp;#xf3dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-phoenix-squadron"></span></td>
        <td>fab fa-phoenix-squadron</td>
        <td>&amp;#xf511;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-php"></span></td>
        <td>fab fa-php</td>
        <td>&amp;#xf457;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pied-piper"></span></td>
        <td>fab fa-pied-piper</td>
        <td>&amp;#xf2ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pied-piper-alt"></span></td>
        <td>fab fa-pied-piper-alt</td>
        <td>&amp;#xf1a8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pied-piper-hat"></span></td>
        <td>fab fa-pied-piper-hat</td>
        <td>&amp;#xf4e5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pied-piper-pp"></span></td>
        <td>fab fa-pied-piper-pp</td>
        <td>&amp;#xf1a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pinterest"></span></td>
        <td>fab fa-pinterest</td>
        <td>&amp;#xf0d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pinterest-p"></span></td>
        <td>fab fa-pinterest-p</td>
        <td>&amp;#xf231;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pinterest-square"></span></td>
        <td>fab fa-pinterest-square</td>
        <td>&amp;#xf0d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-playstation"></span></td>
        <td>fab fa-playstation</td>
        <td>&amp;#xf3df;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-product-hunt"></span></td>
        <td>fab fa-product-hunt</td>
        <td>&amp;#xf288;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-pushed"></span></td>
        <td>fab fa-pushed</td>
        <td>&amp;#xf3e1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-python"></span></td>
        <td>fab fa-python</td>
        <td>&amp;#xf3e2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-qq"></span></td>
        <td>fab fa-qq</td>
        <td>&amp;#xf1d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-quinscape"></span></td>
        <td>fab fa-quinscape</td>
        <td>&amp;#xf459;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-quora"></span></td>
        <td>fab fa-quora</td>
        <td>&amp;#xf2c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-r-project"></span></td>
        <td>fab fa-r-project</td>
        <td>&amp;#xf4f7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-raspberry-pi"></span></td>
        <td>fab fa-raspberry-pi</td>
        <td>&amp;#xf7bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ravelry"></span></td>
        <td>fab fa-ravelry</td>
        <td>&amp;#xf2d9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-react"></span></td>
        <td>fab fa-react</td>
        <td>&amp;#xf41b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-readme"></span></td>
        <td>fab fa-readme</td>
        <td>&amp;#xf4d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-rebel"></span></td>
        <td>fab fa-rebel</td>
        <td>&amp;#xf1d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-red-river"></span></td>
        <td>fab fa-red-river</td>
        <td>&amp;#xf3e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-reddit"></span></td>
        <td>fab fa-reddit</td>
        <td>&amp;#xf1a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-reddit-alien"></span></td>
        <td>fab fa-reddit-alien</td>
        <td>&amp;#xf281;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-reddit-square"></span></td>
        <td>fab fa-reddit-square</td>
        <td>&amp;#xf1a2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-redhat"></span></td>
        <td>fab fa-redhat</td>
        <td>&amp;#xf7bc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-rendact"></span></td>
        <td>fab fa-rendact</td>
        <td>&amp;#xf3e4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-renren"></span></td>
        <td>fab fa-renren</td>
        <td>&amp;#xf18b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-replyd"></span></td>
        <td>fab fa-replyd</td>
        <td>&amp;#xf3e6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-researchgate"></span></td>
        <td>fab fa-researchgate</td>
        <td>&amp;#xf4f8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-resolving"></span></td>
        <td>fab fa-resolving</td>
        <td>&amp;#xf3e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-rev"></span></td>
        <td>fab fa-rev</td>
        <td>&amp;#xf5b2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-rocketchat"></span></td>
        <td>fab fa-rocketchat</td>
        <td>&amp;#xf3e8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-rockrms"></span></td>
        <td>fab fa-rockrms</td>
        <td>&amp;#xf3e9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-safari"></span></td>
        <td>fab fa-safari</td>
        <td>&amp;#xf267;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sass"></span></td>
        <td>fab fa-sass</td>
        <td>&amp;#xf41e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-schlix"></span></td>
        <td>fab fa-schlix</td>
        <td>&amp;#xf3ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-scribd"></span></td>
        <td>fab fa-scribd</td>
        <td>&amp;#xf28a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-searchengin"></span></td>
        <td>fab fa-searchengin</td>
        <td>&amp;#xf3eb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sellcast"></span></td>
        <td>fab fa-sellcast</td>
        <td>&amp;#xf2da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sellsy"></span></td>
        <td>fab fa-sellsy</td>
        <td>&amp;#xf213;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-servicestack"></span></td>
        <td>fab fa-servicestack</td>
        <td>&amp;#xf3ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-shirtsinbulk"></span></td>
        <td>fab fa-shirtsinbulk</td>
        <td>&amp;#xf214;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-shopware"></span></td>
        <td>fab fa-shopware</td>
        <td>&amp;#xf5b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-simplybuilt"></span></td>
        <td>fab fa-simplybuilt</td>
        <td>&amp;#xf215;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sistrix"></span></td>
        <td>fab fa-sistrix</td>
        <td>&amp;#xf3ee;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sith"></span></td>
        <td>fab fa-sith</td>
        <td>&amp;#xf512;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sketch"></span></td>
        <td>fab fa-sketch</td>
        <td>&amp;#xf7c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-skyatlas"></span></td>
        <td>fab fa-skyatlas</td>
        <td>&amp;#xf216;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-skype"></span></td>
        <td>fab fa-skype</td>
        <td>&amp;#xf17e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-slack"></span></td>
        <td>fab fa-slack</td>
        <td>&amp;#xf198;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-slack-hash"></span></td>
        <td>fab fa-slack-hash</td>
        <td>&amp;#xf3ef;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-slideshare"></span></td>
        <td>fab fa-slideshare</td>
        <td>&amp;#xf1e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-snapchat"></span></td>
        <td>fab fa-snapchat</td>
        <td>&amp;#xf2ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-snapchat-ghost"></span></td>
        <td>fab fa-snapchat-ghost</td>
        <td>&amp;#xf2ac;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-snapchat-square"></span></td>
        <td>fab fa-snapchat-square</td>
        <td>&amp;#xf2ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-soundcloud"></span></td>
        <td>fab fa-soundcloud</td>
        <td>&amp;#xf1be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sourcetree"></span></td>
        <td>fab fa-sourcetree</td>
        <td>&amp;#xf7d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-speakap"></span></td>
        <td>fab fa-speakap</td>
        <td>&amp;#xf3f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-spotify"></span></td>
        <td>fab fa-spotify</td>
        <td>&amp;#xf1bc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-squarespace"></span></td>
        <td>fab fa-squarespace</td>
        <td>&amp;#xf5be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stack-exchange"></span></td>
        <td>fab fa-stack-exchange</td>
        <td>&amp;#xf18d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stack-overflow"></span></td>
        <td>fab fa-stack-overflow</td>
        <td>&amp;#xf16c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-staylinked"></span></td>
        <td>fab fa-staylinked</td>
        <td>&amp;#xf3f5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-steam"></span></td>
        <td>fab fa-steam</td>
        <td>&amp;#xf1b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-steam-square"></span></td>
        <td>fab fa-steam-square</td>
        <td>&amp;#xf1b7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-steam-symbol"></span></td>
        <td>fab fa-steam-symbol</td>
        <td>&amp;#xf3f6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-sticker-mule"></span></td>
        <td>fab fa-sticker-mule</td>
        <td>&amp;#xf3f7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-strava"></span></td>
        <td>fab fa-strava</td>
        <td>&amp;#xf428;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stripe"></span></td>
        <td>fab fa-stripe</td>
        <td>&amp;#xf429;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stripe-s"></span></td>
        <td>fab fa-stripe-s</td>
        <td>&amp;#xf42a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-studiovinari"></span></td>
        <td>fab fa-studiovinari</td>
        <td>&amp;#xf3f8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stumbleupon"></span></td>
        <td>fab fa-stumbleupon</td>
        <td>&amp;#xf1a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-stumbleupon-circle"></span></td>
        <td>fab fa-stumbleupon-circle</td>
        <td>&amp;#xf1a3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-superpowers"></span></td>
        <td>fab fa-superpowers</td>
        <td>&amp;#xf2dd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-supple"></span></td>
        <td>fab fa-supple</td>
        <td>&amp;#xf3f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-suse"></span></td>
        <td>fab fa-suse</td>
        <td>&amp;#xf7d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-teamspeak"></span></td>
        <td>fab fa-teamspeak</td>
        <td>&amp;#xf4f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-telegram"></span></td>
        <td>fab fa-telegram</td>
        <td>&amp;#xf2c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-telegram-plane"></span></td>
        <td>fab fa-telegram-plane</td>
        <td>&amp;#xf3fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-tencent-weibo"></span></td>
        <td>fab fa-tencent-weibo</td>
        <td>&amp;#xf1d5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-the-red-yeti"></span></td>
        <td>fab fa-the-red-yeti</td>
        <td>&amp;#xf69d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-themeco"></span></td>
        <td>fab fa-themeco</td>
        <td>&amp;#xf5c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-themeisle"></span></td>
        <td>fab fa-themeisle</td>
        <td>&amp;#xf2b2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-trade-federation"></span></td>
        <td>fab fa-trade-federation</td>
        <td>&amp;#xf513;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-trello"></span></td>
        <td>fab fa-trello</td>
        <td>&amp;#xf181;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-tripadvisor"></span></td>
        <td>fab fa-tripadvisor</td>
        <td>&amp;#xf262;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-tumblr"></span></td>
        <td>fab fa-tumblr</td>
        <td>&amp;#xf173;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-tumblr-square"></span></td>
        <td>fab fa-tumblr-square</td>
        <td>&amp;#xf174;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-twitch"></span></td>
        <td>fab fa-twitch</td>
        <td>&amp;#xf1e8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-twitter"></span></td>
        <td>fab fa-twitter</td>
        <td>&amp;#xf099;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-twitter-square"></span></td>
        <td>fab fa-twitter-square</td>
        <td>&amp;#xf081;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-typo3"></span></td>
        <td>fab fa-typo3</td>
        <td>&amp;#xf42b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-uber"></span></td>
        <td>fab fa-uber</td>
        <td>&amp;#xf402;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ubuntu"></span></td>
        <td>fab fa-ubuntu</td>
        <td>&amp;#xf7df;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-uikit"></span></td>
        <td>fab fa-uikit</td>
        <td>&amp;#xf403;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-uniregistry"></span></td>
        <td>fab fa-uniregistry</td>
        <td>&amp;#xf404;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-untappd"></span></td>
        <td>fab fa-untappd</td>
        <td>&amp;#xf405;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-usb"></span></td>
        <td>fab fa-usb</td>
        <td>&amp;#xf287;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ussunnah"></span></td>
        <td>fab fa-ussunnah</td>
        <td>&amp;#xf407;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-ups"></span></td>
        <td>fab fa-ups</td>
        <td>&amp;#xf7e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-usps"></span></td>
        <td>fab fa-usps</td>
        <td>&amp;#xf7e1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vaadin"></span></td>
        <td>fab fa-vaadin</td>
        <td>&amp;#xf408;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-viacoin"></span></td>
        <td>fab fa-viacoin</td>
        <td>&amp;#xf237;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-viadeo"></span></td>
        <td>fab fa-viadeo</td>
        <td>&amp;#xf2a9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-viadeo-square"></span></td>
        <td>fab fa-viadeo-square</td>
        <td>&amp;#xf2aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-viber"></span></td>
        <td>fab fa-viber</td>
        <td>&amp;#xf409;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vimeo"></span></td>
        <td>fab fa-vimeo</td>
        <td>&amp;#xf40a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vimeo-square"></span></td>
        <td>fab fa-vimeo-square</td>
        <td>&amp;#xf194;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vimeo-v"></span></td>
        <td>fab fa-vimeo-v</td>
        <td>&amp;#xf27d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vine"></span></td>
        <td>fab fa-vine</td>
        <td>&amp;#xf1ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vk"></span></td>
        <td>fab fa-vk</td>
        <td>&amp;#xf189;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vnv"></span></td>
        <td>fab fa-vnv</td>
        <td>&amp;#xf40b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-vuejs"></span></td>
        <td>fab fa-vuejs</td>
        <td>&amp;#xf41f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-weebly"></span></td>
        <td>fab fa-weebly</td>
        <td>&amp;#xf5cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-weibo"></span></td>
        <td>fab fa-weibo</td>
        <td>&amp;#xf18a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-weixin"></span></td>
        <td>fab fa-weixin</td>
        <td>&amp;#xf1d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-whatsapp"></span></td>
        <td>fab fa-whatsapp</td>
        <td>&amp;#xf232;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-whatsapp-square"></span></td>
        <td>fab fa-whatsapp-square</td>
        <td>&amp;#xf40c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-whmcs"></span></td>
        <td>fab fa-whmcs</td>
        <td>&amp;#xf40d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wikipedia-w"></span></td>
        <td>fab fa-wikipedia-w</td>
        <td>&amp;#xf266;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-windows"></span></td>
        <td>fab fa-windows</td>
        <td>&amp;#xf17a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wix"></span></td>
        <td>fab fa-wix</td>
        <td>&amp;#xf5cf;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wizards-of-the-coast"></span></td>
        <td>fab fa-wizards-of-the-coast</td>
        <td>&amp;#xf730;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wolf-pack-battalion"></span></td>
        <td>fab fa-wolf-pack-battalion</td>
        <td>&amp;#xf514;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wordpress"></span></td>
        <td>fab fa-wordpress</td>
        <td>&amp;#xf19a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wordpress-simple"></span></td>
        <td>fab fa-wordpress-simple</td>
        <td>&amp;#xf411;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wpbeginner"></span></td>
        <td>fab fa-wpbeginner</td>
        <td>&amp;#xf297;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wpexplorer"></span></td>
        <td>fab fa-wpexplorer</td>
        <td>&amp;#xf2de;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-wpforms"></span></td>
        <td>fab fa-wpforms</td>
        <td>&amp;#xf298;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-xbox"></span></td>
        <td>fab fa-xbox</td>
        <td>&amp;#xf412;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-xing"></span></td>
        <td>fab fa-xing</td>
        <td>&amp;#xf168;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-xing-square"></span></td>
        <td>fab fa-xing-square</td>
        <td>&amp;#xf169;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-y-combinator"></span></td>
        <td>fab fa-y-combinator</td>
        <td>&amp;#xf23b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yahoo"></span></td>
        <td>fab fa-yahoo</td>
        <td>&amp;#xf19e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yandex"></span></td>
        <td>fab fa-yandex</td>
        <td>&amp;#xf413;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yandex-international"></span></td>
        <td>fab fa-yandex-international</td>
        <td>&amp;#xf414;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yarn"></span></td>
        <td>fab fa-yarn</td>
        <td>&amp;#xf7e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yelp"></span></td>
        <td>fab fa-yelp</td>
        <td>&amp;#xf1e9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-yoast"></span></td>
        <td>fab fa-yoast</td>
        <td>&amp;#xf2b1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-youtube-square"></span></td>
        <td>fab fa-youtube-square</td>
        <td>&amp;#xf431;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fab fa-zhihu"></span></td>
        <td>fab fa-zhihu</td>
        <td>&amp;#xf63f;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-building"></span></td>
        <td>fas fa-building</td>
        <td>&amp;#xf1ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-building"></span></td>
        <td>far fa-building</td>
        <td>&amp;#xf1ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-church"></span></td>
        <td>fas fa-church</td>
        <td>&amp;#xf51d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gopuram"></span></td>
        <td>fas fa-gopuram</td>
        <td>&amp;#xf664;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-home"></span></td>
        <td>fas fa-home</td>
        <td>&amp;#xf015;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hospital"></span></td>
        <td>fas fa-hospital</td>
        <td>&amp;#xf0f8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hospital"></span></td>
        <td>far fa-hospital</td>
        <td>&amp;#xf0f8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hospital-alt"></span></td>
        <td>fas fa-hospital-alt</td>
        <td>&amp;#xf47d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-house-damage"></span></td>
        <td>fas fa-house-damage</td>
        <td>&amp;#xf6f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-igloo"></span></td>
        <td>fas fa-igloo</td>
        <td>&amp;#xf7ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-industry"></span></td>
        <td>fas fa-industry</td>
        <td>&amp;#xf275;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mosque"></span></td>
        <td>fas fa-mosque</td>
        <td>&amp;#xf678;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-place-of-worship"></span></td>
        <td>fas fa-place-of-worship</td>
        <td>&amp;#xf67f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-school"></span></td>
        <td>fas fa-school</td>
        <td>&amp;#xf549;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-synagogue"></span></td>
        <td>fas fa-synagogue</td>
        <td>&amp;#xf69b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-torii-gate"></span></td>
        <td>fas fa-torii-gate</td>
        <td>&amp;#xf6a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-university"></span></td>
        <td>fas fa-university</td>
        <td>&amp;#xf19c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-vihara"></span></td>
        <td>fas fa-vihara</td>
        <td>&amp;#xf6a7;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-address-book"></span></td>
        <td>fas fa-address-book</td>
        <td>&amp;#xf2b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-address-book"></span></td>
        <td>far fa-address-book</td>
        <td>&amp;#xf2b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-address-card"></span></td>
        <td>fas fa-address-card</td>
        <td>&amp;#xf2bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-address-card"></span></td>
        <td>far fa-address-card</td>
        <td>&amp;#xf2bb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-archive"></span></td>
        <td>fas fa-archive</td>
        <td>&amp;#xf187;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-balance-scale"></span></td>
        <td>fas fa-balance-scale</td>
        <td>&amp;#xf24e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-birthday-cake"></span></td>
        <td>fas fa-birthday-cake</td>
        <td>&amp;#xf1fd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-book"></span></td>
        <td>fas fa-book</td>
        <td>&amp;#xf02d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-briefcase"></span></td>
        <td>fas fa-briefcase</td>
        <td>&amp;#xf0b1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-building"></span></td>
        <td>fas fa-building</td>
        <td>&amp;#xf1ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bullhorn"></span></td>
        <td>fas fa-bullhorn</td>
        <td>&amp;#xf0a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bullseye"></span></td>
        <td>fas fa-bullseye</td>
        <td>&amp;#xf140;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-business-time"></span></td>
        <td>fas fa-business-time</td>
        <td>&amp;#xf64a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calculator"></span></td>
        <td>fas fa-calculator</td>
        <td>&amp;#xf1ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar"></span></td>
        <td>fas fa-calendar</td>
        <td>&amp;#xf133;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar"></span></td>
        <td>far fa-calendar</td>
        <td>&amp;#xf133;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar-alt"></span></td>
        <td>fas fa-calendar-alt</td>
        <td>&amp;#xf073;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar-alt"></span></td>
        <td>far fa-calendar-alt</td>
        <td>&amp;#xf073;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-certificate"></span></td>
        <td>fas fa-certificate</td>
        <td>&amp;#xf0a3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chart-area"></span></td>
        <td>fas fa-chart-area</td>
        <td>&amp;#xf1fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chart-bar"></span></td>
        <td>fas fa-chart-bar</td>
        <td>&amp;#xf080;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-chart-bar"></span></td>
        <td>far fa-chart-bar</td>
        <td>&amp;#xf080;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chart-pie"></span></td>
        <td>fas fa-chart-pie</td>
        <td>&amp;#xf200;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-city"></span></td>
        <td>fas fa-city</td>
        <td>&amp;#xf64f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-clipboard"></span></td>
        <td>fas fa-clipboard</td>
        <td>&amp;#xf328;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-clipboard"></span></td>
        <td>far fa-clipboard</td>
        <td>&amp;#xf328;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-coffee"></span></td>
        <td>fas fa-coffee</td>
        <td>&amp;#xf0f4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-columns"></span></td>
        <td>fas fa-columns</td>
        <td>&amp;#xf0db;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-compass"></span></td>
        <td>fas fa-compass</td>
        <td>&amp;#xf14e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-compass"></span></td>
        <td>far fa-compass</td>
        <td>&amp;#xf14e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-get"></span></td>
        <td>fas fa-get</td>
        <td>&amp;#xf0c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-get"></span></td>
        <td>far fa-get</td>
        <td>&amp;#xf0c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-getright"></span></td>
        <td>fas fa-getright</td>
        <td>&amp;#xf1f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-getright"></span></td>
        <td>far fa-getright</td>
        <td>&amp;#xf1f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cut"></span></td>
        <td>fas fa-cut</td>
        <td>&amp;#xf0c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-edit"></span></td>
        <td>fas fa-edit</td>
        <td>&amp;#xf044;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-edit"></span></td>
        <td>far fa-edit</td>
        <td>&amp;#xf044;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-envelope"></span></td>
        <td>fas fa-envelope</td>
        <td>&amp;#xf0e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-envelope"></span></td>
        <td>far fa-envelope</td>
        <td>&amp;#xf0e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-envelope-open"></span></td>
        <td>fas fa-envelope-open</td>
        <td>&amp;#xf2b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-envelope-open"></span></td>
        <td>far fa-envelope-open</td>
        <td>&amp;#xf2b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-envelope-square"></span></td>
        <td>fas fa-envelope-square</td>
        <td>&amp;#xf199;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-eraser"></span></td>
        <td>fas fa-eraser</td>
        <td>&amp;#xf12d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fax"></span></td>
        <td>fas fa-fax</td>
        <td>&amp;#xf1ac;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file"></span></td>
        <td>fas fa-file</td>
        <td>&amp;#xf15b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file"></span></td>
        <td>far fa-file</td>
        <td>&amp;#xf15b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-alt"></span></td>
        <td>fas fa-file-alt</td>
        <td>&amp;#xf15c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-alt"></span></td>
        <td>far fa-file-alt</td>
        <td>&amp;#xf15c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-folder"></span></td>
        <td>fas fa-folder</td>
        <td>&amp;#xf07b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-folder"></span></td>
        <td>far fa-folder</td>
        <td>&amp;#xf07b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-folder-minus"></span></td>
        <td>fas fa-folder-minus</td>
        <td>&amp;#xf65d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-folder-open"></span></td>
        <td>fas fa-folder-open</td>
        <td>&amp;#xf07c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-folder-open"></span></td>
        <td>far fa-folder-open</td>
        <td>&amp;#xf07c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-folder-plus"></span></td>
        <td>fas fa-folder-plus</td>
        <td>&amp;#xf65e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-glasses"></span></td>
        <td>fas fa-glasses</td>
        <td>&amp;#xf530;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-globe"></span></td>
        <td>fas fa-globe</td>
        <td>&amp;#xf0ac;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-highlighter"></span></td>
        <td>fas fa-highlighter</td>
        <td>&amp;#xf591;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-landmark"></span></td>
        <td>fas fa-landmark</td>
        <td>&amp;#xf66f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-marker"></span></td>
        <td>fas fa-marker</td>
        <td>&amp;#xf5a1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paperclip"></span></td>
        <td>fas fa-paperclip</td>
        <td>&amp;#xf0c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paste"></span></td>
        <td>fas fa-paste</td>
        <td>&amp;#xf0ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pen"></span></td>
        <td>fas fa-pen</td>
        <td>&amp;#xf304;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pen-alt"></span></td>
        <td>fas fa-pen-alt</td>
        <td>&amp;#xf305;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pen-fancy"></span></td>
        <td>fas fa-pen-fancy</td>
        <td>&amp;#xf5ac;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pen-nib"></span></td>
        <td>fas fa-pen-nib</td>
        <td>&amp;#xf5ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pen-square"></span></td>
        <td>fas fa-pen-square</td>
        <td>&amp;#xf14b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pencil-alt"></span></td>
        <td>fas fa-pencil-alt</td>
        <td>&amp;#xf303;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-percent"></span></td>
        <td>fas fa-percent</td>
        <td>&amp;#xf295;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-phone"></span></td>
        <td>fas fa-phone</td>
        <td>&amp;#xf095;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-phone-slash"></span></td>
        <td>fas fa-phone-slash</td>
        <td>&amp;#xf3dd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-phone-square"></span></td>
        <td>fas fa-phone-square</td>
        <td>&amp;#xf098;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-print"></span></td>
        <td>fas fa-print</td>
        <td>&amp;#xf02f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-project-diagram"></span></td>
        <td>fas fa-project-diagram</td>
        <td>&amp;#xf542;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-registered"></span></td>
        <td>fas fa-registered</td>
        <td>&amp;#xf25d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-registered"></span></td>
        <td>far fa-registered</td>
        <td>&amp;#xf25d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-save"></span></td>
        <td>fas fa-save</td>
        <td>&amp;#xf0c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-save"></span></td>
        <td>far fa-save</td>
        <td>&amp;#xf0c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sitemap"></span></td>
        <td>fas fa-sitemap</td>
        <td>&amp;#xf0e8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-socks"></span></td>
        <td>fas fa-socks</td>
        <td>&amp;#xf696;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sticky-note"></span></td>
        <td>fas fa-sticky-note</td>
        <td>&amp;#xf249;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-sticky-note"></span></td>
        <td>far fa-sticky-note</td>
        <td>&amp;#xf249;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stream"></span></td>
        <td>fas fa-stream</td>
        <td>&amp;#xf550;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-table"></span></td>
        <td>fas fa-table</td>
        <td>&amp;#xf0ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tag"></span></td>
        <td>fas fa-tag</td>
        <td>&amp;#xf02b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tags"></span></td>
        <td>fas fa-tags</td>
        <td>&amp;#xf02c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tasks"></span></td>
        <td>fas fa-tasks</td>
        <td>&amp;#xf0ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thumbtack"></span></td>
        <td>fas fa-thumbtack</td>
        <td>&amp;#xf08d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trademark"></span></td>
        <td>fas fa-trademark</td>
        <td>&amp;#xf25c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wallet"></span></td>
        <td>fas fa-wallet</td>
        <td>&amp;#xf555;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-dollar-sign"></span></td>
        <td>fas fa-dollar-sign</td>
        <td>&amp;#xf155;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-donate"></span></td>
        <td>fas fa-donate</td>
        <td>&amp;#xf4b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gift"></span></td>
        <td>fas fa-gift</td>
        <td>&amp;#xf06b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-holding-heart"></span></td>
        <td>fas fa-hand-holding-heart</td>
        <td>&amp;#xf4be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-holding-usd"></span></td>
        <td>fas fa-hand-holding-usd</td>
        <td>&amp;#xf4c0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hands-helping"></span></td>
        <td>fas fa-hands-helping</td>
        <td>&amp;#xf4c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-handshake"></span></td>
        <td>fas fa-handshake</td>
        <td>&amp;#xf2b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-handshake"></span></td>
        <td>far fa-handshake</td>
        <td>&amp;#xf2b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-heart"></span></td>
        <td>fas fa-heart</td>
        <td>&amp;#xf004;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-heart"></span></td>
        <td>far fa-heart</td>
        <td>&amp;#xf004;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-leaf"></span></td>
        <td>fas fa-leaf</td>
        <td>&amp;#xf06c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-parachute-box"></span></td>
        <td>fas fa-parachute-box</td>
        <td>&amp;#xf4cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-piggy-bank"></span></td>
        <td>fas fa-piggy-bank</td>
        <td>&amp;#xf4d3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ribbon"></span></td>
        <td>fas fa-ribbon</td>
        <td>&amp;#xf4d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-seedling"></span></td>
        <td>fas fa-seedling</td>
        <td>&amp;#xf4d8;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-comment"></span></td>
        <td>fas fa-comment</td>
        <td>&amp;#xf075;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-comment"></span></td>
        <td>far fa-comment</td>
        <td>&amp;#xf075;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment-alt"></span></td>
        <td>fas fa-comment-alt</td>
        <td>&amp;#xf27a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-comment-alt"></span></td>
        <td>far fa-comment-alt</td>
        <td>&amp;#xf27a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment-dots"></span></td>
        <td>fas fa-comment-dots</td>
        <td>&amp;#xf4ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-comment-dots"></span></td>
        <td>far fa-comment-dots</td>
        <td>&amp;#xf4ad;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment-slash"></span></td>
        <td>fas fa-comment-slash</td>
        <td>&amp;#xf4b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comments"></span></td>
        <td>fas fa-comments</td>
        <td>&amp;#xf086;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-comments"></span></td>
        <td>far fa-comments</td>
        <td>&amp;#xf086;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-frown"></span></td>
        <td>fas fa-frown</td>
        <td>&amp;#xf119;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-frown"></span></td>
        <td>far fa-frown</td>
        <td>&amp;#xf119;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-meh"></span></td>
        <td>fas fa-meh</td>
        <td>&amp;#xf11a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-meh"></span></td>
        <td>far fa-meh</td>
        <td>&amp;#xf11a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-poo"></span></td>
        <td>fas fa-poo</td>
        <td>&amp;#xf2fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-quote-left"></span></td>
        <td>fas fa-quote-left</td>
        <td>&amp;#xf10d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-quote-right"></span></td>
        <td>fas fa-quote-right</td>
        <td>&amp;#xf10e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smile"></span></td>
        <td>fas fa-smile</td>
        <td>&amp;#xf118;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-smile"></span></td>
        <td>far fa-smile</td>
        <td>&amp;#xf118;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sms"></span></td>
        <td>fas fa-sms</td>
        <td>&amp;#xf7cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-video-slash"></span></td>
        <td>fas fa-video-slash</td>
        <td>&amp;#xf4e2;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-archive"></span></td>
        <td>fas fa-archive</td>
        <td>&amp;#xf187;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-barcode"></span></td>
        <td>fas fa-barcode</td>
        <td>&amp;#xf02a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bath"></span></td>
        <td>fas fa-bath</td>
        <td>&amp;#xf2cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bug"></span></td>
        <td>fas fa-bug</td>
        <td>&amp;#xf188;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-code"></span></td>
        <td>fas fa-code</td>
        <td>&amp;#xf121;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-code-branch"></span></td>
        <td>fas fa-code-branch</td>
        <td>&amp;#xf126;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-code"></span></td>
        <td>fas fa-file-code</td>
        <td>&amp;#xf1c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-code"></span></td>
        <td>far fa-file-code</td>
        <td>&amp;#xf1c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-filter"></span></td>
        <td>fas fa-filter</td>
        <td>&amp;#xf0b0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fire-extinguisher"></span></td>
        <td>fas fa-fire-extinguisher</td>
        <td>&amp;#xf134;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-keyboard"></span></td>
        <td>fas fa-keyboard</td>
        <td>&amp;#xf11c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-keyboard"></span></td>
        <td>far fa-keyboard</td>
        <td>&amp;#xf11c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microchip"></span></td>
        <td>fas fa-microchip</td>
        <td>&amp;#xf2db;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-qrcode"></span></td>
        <td>fas fa-qrcode</td>
        <td>&amp;#xf029;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shield-alt"></span></td>
        <td>fas fa-shield-alt</td>
        <td>&amp;#xf3ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-terminal"></span></td>
        <td>fas fa-terminal</td>
        <td>&amp;#xf120;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-secret"></span></td>
        <td>fas fa-user-secret</td>
        <td>&amp;#xf21b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-window-close"></span></td>
        <td>fas fa-window-close</td>
        <td>&amp;#xf410;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-window-close"></span></td>
        <td>far fa-window-close</td>
        <td>&amp;#xf410;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-window-maximize"></span></td>
        <td>fas fa-window-maximize</td>
        <td>&amp;#xf2d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-window-maximize"></span></td>
        <td>far fa-window-maximize</td>
        <td>&amp;#xf2d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-window-minimize"></span></td>
        <td>fas fa-window-minimize</td>
        <td>&amp;#xf2d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-window-minimize"></span></td>
        <td>far fa-window-minimize</td>
        <td>&amp;#xf2d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-window-restore"></span></td>
        <td>fas fa-window-restore</td>
        <td>&amp;#xf2d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-window-restore"></span></td>
        <td>far fa-window-restore</td>
        <td>&amp;#xf2d2;</td>
      </tr>
    


      <tr onclick="get(this)">
        <td><span class="fas fa-address-book"></span></td>
        <td>fas fa-address-book</td>
        <td>&amp;#xf2b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-at"></span></td>
        <td>fas fa-at</td>
        <td>&amp;#xf1fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bell"></span></td>
        <td>fas fa-bell</td>
        <td>&amp;#xf0f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-bell"></span></td>
        <td>far fa-bell</td>
        <td>&amp;#xf0f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bell-slash"></span></td>
        <td>fas fa-bell-slash</td>
        <td>&amp;#xf1f6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-bell-slash"></span></td>
        <td>far fa-bell-slash</td>
        <td>&amp;#xf1f6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chalkboard"></span></td>
        <td>fas fa-chalkboard</td>
        <td>&amp;#xf51b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment"></span></td>
        <td>fas fa-comment</td>
        <td>&amp;#xf075;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-inbox"></span></td>
        <td>fas fa-inbox</td>
        <td>&amp;#xf01c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-language"></span></td>
        <td>fas fa-language</td>
        <td>&amp;#xf1ab;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mobile"></span></td>
        <td>fas fa-mobile</td>
        <td>&amp;#xf10b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mobile-alt"></span></td>
        <td>fas fa-mobile-alt</td>
        <td>&amp;#xf3cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paper-plane"></span></td>
        <td>fas fa-paper-plane</td>
        <td>&amp;#xf1d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-paper-plane"></span></td>
        <td>far fa-paper-plane</td>
        <td>&amp;#xf1d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wifi"></span></td>
        <td>fas fa-wifi</td>
        <td>&amp;#xf1eb;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-database"></span></td>
        <td>fas fa-database</td>
        <td>&amp;#xf1c0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-desktop"></span></td>
        <td>fas fa-desktop</td>
        <td>&amp;#xf108;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ethernet"></span></td>
        <td>fas fa-ethernet</td>
        <td>&amp;#xf796;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hdd"></span></td>
        <td>fas fa-hdd</td>
        <td>&amp;#xf0a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hdd"></span></td>
        <td>far fa-hdd</td>
        <td>&amp;#xf0a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laptop"></span></td>
        <td>fas fa-laptop</td>
        <td>&amp;#xf109;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-memory"></span></td>
        <td>fas fa-memory</td>
        <td>&amp;#xf538;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plug"></span></td>
        <td>fas fa-plug</td>
        <td>&amp;#xf1e6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-power-off"></span></td>
        <td>fas fa-power-off</td>
        <td>&amp;#xf011;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-satellite"></span></td>
        <td>fas fa-satellite</td>
        <td>&amp;#xf7bf;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-satellite-dish"></span></td>
        <td>fas fa-satellite-dish</td>
        <td>&amp;#xf7c0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sd-card"></span></td>
        <td>fas fa-sd-card</td>
        <td>&amp;#xf7c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-server"></span></td>
        <td>fas fa-server</td>
        <td>&amp;#xf233;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sim-card"></span></td>
        <td>fas fa-sim-card</td>
        <td>&amp;#xf7c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tablet"></span></td>
        <td>fas fa-tablet</td>
        <td>&amp;#xf10a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tablet-alt"></span></td>
        <td>fas fa-tablet-alt</td>
        <td>&amp;#xf3fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tv"></span></td>
        <td>fas fa-tv</td>
        <td>&amp;#xf26c;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fab fa-bitcoin"></span></td>
        <td>fab fa-bitcoin</td>
        <td>&amp;#xf379;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dollar-sign"></span></td>
        <td>fas fa-dollar-sign</td>
        <td>&amp;#xf155;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-euro-sign"></span></td>
        <td>fas fa-euro-sign</td>
        <td>&amp;#xf153;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hryvnia"></span></td>
        <td>fas fa-hryvnia</td>
        <td>&amp;#xf6f2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-lira-sign"></span></td>
        <td>fas fa-lira-sign</td>
        <td>&amp;#xf195;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-bill"></span></td>
        <td>fas fa-money-bill</td>
        <td>&amp;#xf0d6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-bill-alt"></span></td>
        <td>fas fa-money-bill-alt</td>
        <td>&amp;#xf3d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-money-bill-alt"></span></td>
        <td>far fa-money-bill-alt</td>
        <td>&amp;#xf3d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-bill-wave"></span></td>
        <td>fas fa-money-bill-wave</td>
        <td>&amp;#xf53a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-bill-wave-alt"></span></td>
        <td>fas fa-money-bill-wave-alt</td>
        <td>&amp;#xf53b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-check"></span></td>
        <td>fas fa-money-check</td>
        <td>&amp;#xf53c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-money-check-alt"></span></td>
        <td>fas fa-money-check-alt</td>
        <td>&amp;#xf53d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pound-sign"></span></td>
        <td>fas fa-pound-sign</td>
        <td>&amp;#xf154;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ruble-sign"></span></td>
        <td>fas fa-ruble-sign</td>
        <td>&amp;#xf158;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-rupee-sign"></span></td>
        <td>fas fa-rupee-sign</td>
        <td>&amp;#xf156;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shekel-sign"></span></td>
        <td>fas fa-shekel-sign</td>
        <td>&amp;#xf20b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tenge"></span></td>
        <td>fas fa-tenge</td>
        <td>&amp;#xf7d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-won-sign"></span></td>
        <td>fas fa-won-sign</td>
        <td>&amp;#xf159;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-yen-sign"></span></td>
        <td>fas fa-yen-sign</td>
        <td>&amp;#xf157;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-bell"></span></td>
        <td>fas fa-bell</td>
        <td>&amp;#xf0f3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar-check"></span></td>
        <td>fas fa-calendar-check</td>
        <td>&amp;#xf274;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar-check"></span></td>
        <td>far fa-calendar-check</td>
        <td>&amp;#xf274;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar-minus"></span></td>
        <td>fas fa-calendar-minus</td>
        <td>&amp;#xf272;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar-minus"></span></td>
        <td>far fa-calendar-minus</td>
        <td>&amp;#xf272;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar-plus"></span></td>
        <td>fas fa-calendar-plus</td>
        <td>&amp;#xf271;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar-plus"></span></td>
        <td>far fa-calendar-plus</td>
        <td>&amp;#xf271;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-calendar-times"></span></td>
        <td>fas fa-calendar-times</td>
        <td>&amp;#xf273;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-calendar-times"></span></td>
        <td>far fa-calendar-times</td>
        <td>&amp;#xf273;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-clock"></span></td>
        <td>fas fa-clock</td>
        <td>&amp;#xf017;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-clock"></span></td>
        <td>far fa-clock</td>
        <td>&amp;#xf017;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hourglass"></span></td>
        <td>fas fa-hourglass</td>
        <td>&amp;#xf254;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hourglass"></span></td>
        <td>far fa-hourglass</td>
        <td>&amp;#xf254;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hourglass-end"></span></td>
        <td>fas fa-hourglass-end</td>
        <td>&amp;#xf253;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hourglass-half"></span></td>
        <td>fas fa-hourglass-half</td>
        <td>&amp;#xf252;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hourglass-start"></span></td>
        <td>fas fa-hourglass-start</td>
        <td>&amp;#xf251;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stopwatch"></span></td>
        <td>fas fa-stopwatch</td>
        <td>&amp;#xf2f2;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-adjust"></span></td>
        <td>fas fa-adjust</td>
        <td>&amp;#xf042;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bezier-curve"></span></td>
        <td>fas fa-bezier-curve</td>
        <td>&amp;#xf55b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-brush"></span></td>
        <td>fas fa-brush</td>
        <td>&amp;#xf55d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-clone"></span></td>
        <td>fas fa-clone</td>
        <td>&amp;#xf24d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-clone"></span></td>
        <td>far fa-clone</td>
        <td>&amp;#xf24d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-crop"></span></td>
        <td>fas fa-crop</td>
        <td>&amp;#xf125;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-crop-alt"></span></td>
        <td>fas fa-crop-alt</td>
        <td>&amp;#xf565;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-crosshairs"></span></td>
        <td>fas fa-crosshairs</td>
        <td>&amp;#xf05b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-drafting-compass"></span></td>
        <td>fas fa-drafting-compass</td>
        <td>&amp;#xf568;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-draw-polygon"></span></td>
        <td>fas fa-draw-polygon</td>
        <td>&amp;#xf5ee;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-eye"></span></td>
        <td>fas fa-eye</td>
        <td>&amp;#xf06e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-eye"></span></td>
        <td>far fa-eye</td>
        <td>&amp;#xf06e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-eye-dropper"></span></td>
        <td>fas fa-eye-dropper</td>
        <td>&amp;#xf1fb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-eye-slash"></span></td>
        <td>fas fa-eye-slash</td>
        <td>&amp;#xf070;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-eye-slash"></span></td>
        <td>far fa-eye-slash</td>
        <td>&amp;#xf070;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fill"></span></td>
        <td>fas fa-fill</td>
        <td>&amp;#xf575;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fill-drip"></span></td>
        <td>fas fa-fill-drip</td>
        <td>&amp;#xf576;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-layer-group"></span></td>
        <td>fas fa-layer-group</td>
        <td>&amp;#xf5fd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-magic"></span></td>
        <td>fas fa-magic</td>
        <td>&amp;#xf0d0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-object-group"></span></td>
        <td>fas fa-object-group</td>
        <td>&amp;#xf247;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-object-group"></span></td>
        <td>far fa-object-group</td>
        <td>&amp;#xf247;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-object-ungroup"></span></td>
        <td>fas fa-object-ungroup</td>
        <td>&amp;#xf248;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-object-ungroup"></span></td>
        <td>far fa-object-ungroup</td>
        <td>&amp;#xf248;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paint-brush"></span></td>
        <td>fas fa-paint-brush</td>
        <td>&amp;#xf1fc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paint-roller"></span></td>
        <td>fas fa-paint-roller</td>
        <td>&amp;#xf5aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-palette"></span></td>
        <td>fas fa-palette</td>
        <td>&amp;#xf53f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pencil-ruler"></span></td>
        <td>fas fa-pencil-ruler</td>
        <td>&amp;#xf5ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ruler-combined"></span></td>
        <td>fas fa-ruler-combined</td>
        <td>&amp;#xf546;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ruler-horizontal"></span></td>
        <td>fas fa-ruler-horizontal</td>
        <td>&amp;#xf547;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ruler-vertical"></span></td>
        <td>fas fa-ruler-vertical</td>
        <td>&amp;#xf548;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-splotch"></span></td>
        <td>fas fa-splotch</td>
        <td>&amp;#xf5bc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-spray-can"></span></td>
        <td>fas fa-spray-can</td>
        <td>&amp;#xf5bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stamp"></span></td>
        <td>fas fa-stamp</td>
        <td>&amp;#xf5bf;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-swatchbook"></span></td>
        <td>fas fa-swatchbook</td>
        <td>&amp;#xf5c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tint"></span></td>
        <td>fas fa-tint</td>
        <td>&amp;#xf043;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tint-slash"></span></td>
        <td>fas fa-tint-slash</td>
        <td>&amp;#xf5c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-vector-square"></span></td>
        <td>fas fa-vector-square</td>
        <td>&amp;#xf5cb;</td>
      </tr>
    


      <tr onclick="get(this)">
        <td><span class="fas fa-align-center"></span></td>
        <td>fas fa-align-center</td>
        <td>&amp;#xf037;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-align-justify"></span></td>
        <td>fas fa-align-justify</td>
        <td>&amp;#xf039;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-align-left"></span></td>
        <td>fas fa-align-left</td>
        <td>&amp;#xf036;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-align-right"></span></td>
        <td>fas fa-align-right</td>
        <td>&amp;#xf038;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bold"></span></td>
        <td>fas fa-bold</td>
        <td>&amp;#xf032;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-font"></span></td>
        <td>fas fa-font</td>
        <td>&amp;#xf031;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-heading"></span></td>
        <td>fas fa-heading</td>
        <td>&amp;#xf1dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-i-cursor"></span></td>
        <td>fas fa-i-cursor</td>
        <td>&amp;#xf246;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-indent"></span></td>
        <td>fas fa-indent</td>
        <td>&amp;#xf03c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-italic"></span></td>
        <td>fas fa-italic</td>
        <td>&amp;#xf033;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-link"></span></td>
        <td>fas fa-link</td>
        <td>&amp;#xf0c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-list"></span></td>
        <td>fas fa-list</td>
        <td>&amp;#xf03a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-list-alt"></span></td>
        <td>fas fa-list-alt</td>
        <td>&amp;#xf022;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-list-alt"></span></td>
        <td>far fa-list-alt</td>
        <td>&amp;#xf022;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-list-ol"></span></td>
        <td>fas fa-list-ol</td>
        <td>&amp;#xf0cb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-list-ul"></span></td>
        <td>fas fa-list-ul</td>
        <td>&amp;#xf0ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-outdent"></span></td>
        <td>fas fa-outdent</td>
        <td>&amp;#xf03b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-paragraph"></span></td>
        <td>fas fa-paragraph</td>
        <td>&amp;#xf1dd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-screwdriver"></span></td>
        <td>fas fa-screwdriver</td>
        <td>&amp;#xf54a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-strikethrough"></span></td>
        <td>fas fa-strikethrough</td>
        <td>&amp;#xf0cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-subscript"></span></td>
        <td>fas fa-subscript</td>
        <td>&amp;#xf12c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-superscript"></span></td>
        <td>fas fa-superscript</td>
        <td>&amp;#xf12b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-th"></span></td>
        <td>fas fa-th</td>
        <td>&amp;#xf00a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-th-large"></span></td>
        <td>fas fa-th-large</td>
        <td>&amp;#xf009;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-th-list"></span></td>
        <td>fas fa-th-list</td>
        <td>&amp;#xf00b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trash"></span></td>
        <td>fas fa-trash</td>
        <td>&amp;#xf1f8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trash-alt"></span></td>
        <td>fas fa-trash-alt</td>
        <td>&amp;#xf2ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-trash-alt"></span></td>
        <td>far fa-trash-alt</td>
        <td>&amp;#xf2ed;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-underline"></span></td>
        <td>fas fa-underline</td>
        <td>&amp;#xf0cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-unlink"></span></td>
        <td>fas fa-unlink</td>
        <td>&amp;#xf127;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-wrench"></span></td>
        <td>fas fa-wrench</td>
        <td>&amp;#xf0ad;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-apple-alt"></span></td>
        <td>fas fa-apple-alt</td>
        <td>&amp;#xf5d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-atom"></span></td>
        <td>fas fa-atom</td>
        <td>&amp;#xf5d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-award"></span></td>
        <td>fas fa-award</td>
        <td>&amp;#xf559;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-book-open"></span></td>
        <td>fas fa-book-open</td>
        <td>&amp;#xf518;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-book-reader"></span></td>
        <td>fas fa-book-reader</td>
        <td>&amp;#xf5da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-chalkboard-teacher"></span></td>
        <td>fas fa-chalkboard-teacher</td>
        <td>&amp;#xf51c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-graduation-cap"></span></td>
        <td>fas fa-graduation-cap</td>
        <td>&amp;#xf19d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laptop-code"></span></td>
        <td>fas fa-laptop-code</td>
        <td>&amp;#xf5fc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-microscope"></span></td>
        <td>fas fa-microscope</td>
        <td>&amp;#xf610;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shapes"></span></td>
        <td>fas fa-shapes</td>
        <td>&amp;#xf61f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-theater-masks"></span></td>
        <td>fas fa-theater-masks</td>
        <td>&amp;#xf630;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-graduate"></span></td>
        <td>fas fa-user-graduate</td>
        <td>&amp;#xf501;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-angry"></span></td>
        <td>fas fa-angry</td>
        <td>&amp;#xf556;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-angry"></span></td>
        <td>far fa-angry</td>
        <td>&amp;#xf556;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dizzy"></span></td>
        <td>fas fa-dizzy</td>
        <td>&amp;#xf567;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-dizzy"></span></td>
        <td>far fa-dizzy</td>
        <td>&amp;#xf567;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-flushed"></span></td>
        <td>fas fa-flushed</td>
        <td>&amp;#xf579;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-flushed"></span></td>
        <td>far fa-flushed</td>
        <td>&amp;#xf579;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-frown-open"></span></td>
        <td>fas fa-frown-open</td>
        <td>&amp;#xf57a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-frown-open"></span></td>
        <td>far fa-frown-open</td>
        <td>&amp;#xf57a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grimace"></span></td>
        <td>fas fa-grimace</td>
        <td>&amp;#xf57f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grimace"></span></td>
        <td>far fa-grimace</td>
        <td>&amp;#xf57f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin"></span></td>
        <td>fas fa-grin</td>
        <td>&amp;#xf580;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin"></span></td>
        <td>far fa-grin</td>
        <td>&amp;#xf580;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-alt"></span></td>
        <td>fas fa-grin-alt</td>
        <td>&amp;#xf581;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-alt"></span></td>
        <td>far fa-grin-alt</td>
        <td>&amp;#xf581;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-beam"></span></td>
        <td>fas fa-grin-beam</td>
        <td>&amp;#xf582;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-beam"></span></td>
        <td>far fa-grin-beam</td>
        <td>&amp;#xf582;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-beam-sweat"></span></td>
        <td>fas fa-grin-beam-sweat</td>
        <td>&amp;#xf583;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-beam-sweat"></span></td>
        <td>far fa-grin-beam-sweat</td>
        <td>&amp;#xf583;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-hearts"></span></td>
        <td>fas fa-grin-hearts</td>
        <td>&amp;#xf584;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-hearts"></span></td>
        <td>far fa-grin-hearts</td>
        <td>&amp;#xf584;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-squint"></span></td>
        <td>fas fa-grin-squint</td>
        <td>&amp;#xf585;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-squint"></span></td>
        <td>far fa-grin-squint</td>
        <td>&amp;#xf585;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-squint-tears"></span></td>
        <td>fas fa-grin-squint-tears</td>
        <td>&amp;#xf586;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-squint-tears"></span></td>
        <td>far fa-grin-squint-tears</td>
        <td>&amp;#xf586;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-stars"></span></td>
        <td>fas fa-grin-stars</td>
        <td>&amp;#xf587;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-stars"></span></td>
        <td>far fa-grin-stars</td>
        <td>&amp;#xf587;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-tears"></span></td>
        <td>fas fa-grin-tears</td>
        <td>&amp;#xf588;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-tears"></span></td>
        <td>far fa-grin-tears</td>
        <td>&amp;#xf588;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-tongue"></span></td>
        <td>fas fa-grin-tongue</td>
        <td>&amp;#xf589;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-tongue"></span></td>
        <td>far fa-grin-tongue</td>
        <td>&amp;#xf589;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-tongue-squint"></span></td>
        <td>fas fa-grin-tongue-squint</td>
        <td>&amp;#xf58a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-tongue-squint"></span></td>
        <td>far fa-grin-tongue-squint</td>
        <td>&amp;#xf58a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-tongue-wink"></span></td>
        <td>fas fa-grin-tongue-wink</td>
        <td>&amp;#xf58b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-tongue-wink"></span></td>
        <td>far fa-grin-tongue-wink</td>
        <td>&amp;#xf58b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grin-wink"></span></td>
        <td>fas fa-grin-wink</td>
        <td>&amp;#xf58c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-grin-wink"></span></td>
        <td>far fa-grin-wink</td>
        <td>&amp;#xf58c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-kiss"></span></td>
        <td>fas fa-kiss</td>
        <td>&amp;#xf596;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-kiss"></span></td>
        <td>far fa-kiss</td>
        <td>&amp;#xf596;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-kiss-beam"></span></td>
        <td>fas fa-kiss-beam</td>
        <td>&amp;#xf597;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-kiss-beam"></span></td>
        <td>far fa-kiss-beam</td>
        <td>&amp;#xf597;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-kiss-wink-heart"></span></td>
        <td>fas fa-kiss-wink-heart</td>
        <td>&amp;#xf598;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-kiss-wink-heart"></span></td>
        <td>far fa-kiss-wink-heart</td>
        <td>&amp;#xf598;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laugh"></span></td>
        <td>fas fa-laugh</td>
        <td>&amp;#xf599;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-laugh"></span></td>
        <td>far fa-laugh</td>
        <td>&amp;#xf599;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laugh-beam"></span></td>
        <td>fas fa-laugh-beam</td>
        <td>&amp;#xf59a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-laugh-beam"></span></td>
        <td>far fa-laugh-beam</td>
        <td>&amp;#xf59a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laugh-squint"></span></td>
        <td>fas fa-laugh-squint</td>
        <td>&amp;#xf59b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-laugh-squint"></span></td>
        <td>far fa-laugh-squint</td>
        <td>&amp;#xf59b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laugh-wink"></span></td>
        <td>fas fa-laugh-wink</td>
        <td>&amp;#xf59c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-laugh-wink"></span></td>
        <td>far fa-laugh-wink</td>
        <td>&amp;#xf59c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-meh-blank"></span></td>
        <td>fas fa-meh-blank</td>
        <td>&amp;#xf5a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-meh-blank"></span></td>
        <td>far fa-meh-blank</td>
        <td>&amp;#xf5a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-meh-rolling-eyes"></span></td>
        <td>fas fa-meh-rolling-eyes</td>
        <td>&amp;#xf5a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-meh-rolling-eyes"></span></td>
        <td>far fa-meh-rolling-eyes</td>
        <td>&amp;#xf5a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sad-cry"></span></td>
        <td>fas fa-sad-cry</td>
        <td>&amp;#xf5b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-sad-cry"></span></td>
        <td>far fa-sad-cry</td>
        <td>&amp;#xf5b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sad-tear"></span></td>
        <td>fas fa-sad-tear</td>
        <td>&amp;#xf5b4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-sad-tear"></span></td>
        <td>far fa-sad-tear</td>
        <td>&amp;#xf5b4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smile-beam"></span></td>
        <td>fas fa-smile-beam</td>
        <td>&amp;#xf5b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-smile-beam"></span></td>
        <td>far fa-smile-beam</td>
        <td>&amp;#xf5b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smile-wink"></span></td>
        <td>fas fa-smile-wink</td>
        <td>&amp;#xf4da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-smile-wink"></span></td>
        <td>far fa-smile-wink</td>
        <td>&amp;#xf4da;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-surprise"></span></td>
        <td>fas fa-surprise</td>
        <td>&amp;#xf5c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-surprise"></span></td>
        <td>far fa-surprise</td>
        <td>&amp;#xf5c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tired"></span></td>
        <td>fas fa-tired</td>
        <td>&amp;#xf5c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-tired"></span></td>
        <td>far fa-tired</td>
        <td>&amp;#xf5c8;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-archive"></span></td>
        <td>fas fa-archive</td>
        <td>&amp;#xf187;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-archive"></span></td>
        <td>fas fa-file-archive</td>
        <td>&amp;#xf1c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-archive"></span></td>
        <td>far fa-file-archive</td>
        <td>&amp;#xf1c6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-excel"></span></td>
        <td>fas fa-file-excel</td>
        <td>&amp;#xf1c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-excel"></span></td>
        <td>far fa-file-excel</td>
        <td>&amp;#xf1c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-export"></span></td>
        <td>fas fa-file-export</td>
        <td>&amp;#xf56e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-image"></span></td>
        <td>fas fa-file-image</td>
        <td>&amp;#xf1c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-image"></span></td>
        <td>far fa-file-image</td>
        <td>&amp;#xf1c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-pdf"></span></td>
        <td>fas fa-file-pdf</td>
        <td>&amp;#xf1c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-pdf"></span></td>
        <td>far fa-file-pdf</td>
        <td>&amp;#xf1c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-powerpoint"></span></td>
        <td>fas fa-file-powerpoint</td>
        <td>&amp;#xf1c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-powerpoint"></span></td>
        <td>far fa-file-powerpoint</td>
        <td>&amp;#xf1c4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-word"></span></td>
        <td>fas fa-file-word</td>
        <td>&amp;#xf1c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-file-word"></span></td>
        <td>far fa-file-word</td>
        <td>&amp;#xf1c2;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-bacon"></span></td>
        <td>fas fa-bacon</td>
        <td>&amp;#xf7e5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bread-slice"></span></td>
        <td>fas fa-bread-slice</td>
        <td>&amp;#xf7ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cheese"></span></td>
        <td>fas fa-cheese</td>
        <td>&amp;#xf7ef;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-egg"></span></td>
        <td>fas fa-egg</td>
        <td>&amp;#xf7fb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hamburger"></span></td>
        <td>fas fa-hamburger</td>
        <td>&amp;#xf805;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hotdog"></span></td>
        <td>fas fa-hotdog</td>
        <td>&amp;#xf80f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ice-cream"></span></td>
        <td>fas fa-ice-cream</td>
        <td>&amp;#xf810;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pepper-hot"></span></td>
        <td>fas fa-pepper-hot</td>
        <td>&amp;#xf816;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pizza-slice"></span></td>
        <td>fas fa-pizza-slice</td>
        <td>&amp;#xf818;</td>
      </tr>
   

      <tr onclick="get(this)">
        <td><span class="fas fa-genderless"></span></td>
        <td>fas fa-genderless</td>
        <td>&amp;#xf22d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mars"></span></td>
        <td>fas fa-mars</td>
        <td>&amp;#xf222;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mars-double"></span></td>
        <td>fas fa-mars-double</td>
        <td>&amp;#xf227;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mars-stroke"></span></td>
        <td>fas fa-mars-stroke</td>
        <td>&amp;#xf229;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mars-stroke-h"></span></td>
        <td>fas fa-mars-stroke-h</td>
        <td>&amp;#xf22b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mars-stroke-v"></span></td>
        <td>fas fa-mars-stroke-v</td>
        <td>&amp;#xf22a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mercury"></span></td>
        <td>fas fa-mercury</td>
        <td>&amp;#xf223;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-neuter"></span></td>
        <td>fas fa-neuter</td>
        <td>&amp;#xf22c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-transgender"></span></td>
        <td>fas fa-transgender</td>
        <td>&amp;#xf224;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-transgender-alt"></span></td>
        <td>fas fa-transgender-alt</td>
        <td>&amp;#xf225;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-venus"></span></td>
        <td>fas fa-venus</td>
        <td>&amp;#xf221;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-venus-double"></span></td>
        <td>fas fa-venus-double</td>
        <td>&amp;#xf226;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-venus-mars"></span></td>
        <td>fas fa-venus-mars</td>
        <td>&amp;#xf228;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-book-dead"></span></td>
        <td>fas fa-book-dead</td>
        <td>&amp;#xf6b7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-broom"></span></td>
        <td>fas fa-broom</td>
        <td>&amp;#xf51a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cat"></span></td>
        <td>fas fa-cat</td>
        <td>&amp;#xf6be;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-moon"></span></td>
        <td>fas fa-cloud-moon</td>
        <td>&amp;#xf6c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ghost"></span></td>
        <td>fas fa-ghost</td>
        <td>&amp;#xf6e2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hat-wizard"></span></td>
        <td>fas fa-hat-wizard</td>
        <td>&amp;#xf6e8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mask"></span></td>
        <td>fas fa-mask</td>
        <td>&amp;#xf6fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-skull-crossbones"></span></td>
        <td>fas fa-skull-crossbones</td>
        <td>&amp;#xf714;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-toilet-paper"></span></td>
        <td>fas fa-toilet-paper</td>
        <td>&amp;#xf71e;</td>
      </tr>
    

      <tr onclick="get(this)">
        <td><span class="fas fa-allergies"></span></td>
        <td>fas fa-allergies</td>
        <td>&amp;#xf461;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fist-raised"></span></td>
        <td>fas fa-fist-raised</td>
        <td>&amp;#xf6de;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-holding"></span></td>
        <td>fas fa-hand-holding</td>
        <td>&amp;#xf4bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-lizard"></span></td>
        <td>fas fa-hand-lizard</td>
        <td>&amp;#xf258;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-lizard"></span></td>
        <td>far fa-hand-lizard</td>
        <td>&amp;#xf258;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-middle-finger"></span></td>
        <td>fas fa-hand-middle-finger</td>
        <td>&amp;#xf806;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-paper"></span></td>
        <td>fas fa-hand-paper</td>
        <td>&amp;#xf256;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-paper"></span></td>
        <td>far fa-hand-paper</td>
        <td>&amp;#xf256;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-peace"></span></td>
        <td>fas fa-hand-peace</td>
        <td>&amp;#xf25b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-peace"></span></td>
        <td>far fa-hand-peace</td>
        <td>&amp;#xf25b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-rock"></span></td>
        <td>fas fa-hand-rock</td>
        <td>&amp;#xf255;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-rock"></span></td>
        <td>far fa-hand-rock</td>
        <td>&amp;#xf255;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-scissors"></span></td>
        <td>fas fa-hand-scissors</td>
        <td>&amp;#xf257;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-scissors"></span></td>
        <td>far fa-hand-scissors</td>
        <td>&amp;#xf257;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hand-spock"></span></td>
        <td>fas fa-hand-spock</td>
        <td>&amp;#xf259;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-hand-spock"></span></td>
        <td>far fa-hand-spock</td>
        <td>&amp;#xf259;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hands"></span></td>
        <td>fas fa-hands</td>
        <td>&amp;#xf4c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thumbs-down"></span></td>
        <td>fas fa-thumbs-down</td>
        <td>&amp;#xf165;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-thumbs-down"></span></td>
        <td>far fa-thumbs-down</td>
        <td>&amp;#xf165;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thumbs-up"></span></td>
        <td>fas fa-thumbs-up</td>
        <td>&amp;#xf164;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-thumbs-up"></span></td>
        <td>far fa-thumbs-up</td>
        <td>&amp;#xf164;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fab fa-accessible-icon"></span></td>
        <td>fab fa-accessible-icon</td>
        <td>&amp;#xf368;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-h-square"></span></td>
        <td>fas fa-h-square</td>
        <td>&amp;#xf0fd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-heartbeat"></span></td>
        <td>fas fa-heartbeat</td>
        <td>&amp;#xf21e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-medkit"></span></td>
        <td>fas fa-medkit</td>
        <td>&amp;#xf0fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plus-square"></span></td>
        <td>fas fa-plus-square</td>
        <td>&amp;#xf0fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-plus-square"></span></td>
        <td>far fa-plus-square</td>
        <td>&amp;#xf0fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-prescription"></span></td>
        <td>fas fa-prescription</td>
        <td>&amp;#xf5b1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stethoscope"></span></td>
        <td>fas fa-stethoscope</td>
        <td>&amp;#xf0f1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-md"></span></td>
        <td>fas fa-user-md</td>
        <td>&amp;#xf0f0;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-candy-cane"></span></td>
        <td>fas fa-candy-cane</td>
        <td>&amp;#xf786;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-carrot"></span></td>
        <td>fas fa-carrot</td>
        <td>&amp;#xf787;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gifts"></span></td>
        <td>fas fa-gifts</td>
        <td>&amp;#xf79c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-glass-cheers"></span></td>
        <td>fas fa-glass-cheers</td>
        <td>&amp;#xf79f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-holly-berry"></span></td>
        <td>fas fa-holly-berry</td>
        <td>&amp;#xf7aa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mug-hot"></span></td>
        <td>fas fa-mug-hot</td>
        <td>&amp;#xf7b6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sleigh"></span></td>
        <td>fas fa-sleigh</td>
        <td>&amp;#xf7cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-snowman"></span></td>
        <td>fas fa-snowman</td>
        <td>&amp;#xf7d0;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-adjust"></span></td>
        <td>fas fa-adjust</td>
        <td>&amp;#xf042;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bolt"></span></td>
        <td>fas fa-bolt</td>
        <td>&amp;#xf0e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-camera"></span></td>
        <td>fas fa-camera</td>
        <td>&amp;#xf030;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-camera-retro"></span></td>
        <td>fas fa-camera-retro</td>
        <td>&amp;#xf083;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-id-badge"></span></td>
        <td>fas fa-id-badge</td>
        <td>&amp;#xf2c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-id-badge"></span></td>
        <td>far fa-id-badge</td>
        <td>&amp;#xf2c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-id-card"></span></td>
        <td>fas fa-id-card</td>
        <td>&amp;#xf2c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-id-card"></span></td>
        <td>far fa-id-card</td>
        <td>&amp;#xf2c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-image"></span></td>
        <td>fas fa-image</td>
        <td>&amp;#xf03e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-image"></span></td>
        <td>far fa-image</td>
        <td>&amp;#xf03e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-images"></span></td>
        <td>fas fa-images</td>
        <td>&amp;#xf302;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-images"></span></td>
        <td>far fa-images</td>
        <td>&amp;#xf302;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-portrait"></span></td>
        <td>fas fa-portrait</td>
        <td>&amp;#xf3e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sliders-h"></span></td>
        <td>fas fa-sliders-h</td>
        <td>&amp;#xf1de;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-award"></span></td>
        <td>fas fa-award</td>
        <td>&amp;#xf559;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ban"></span></td>
        <td>fas fa-ban</td>
        <td>&amp;#xf05e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bars"></span></td>
        <td>fas fa-bars</td>
        <td>&amp;#xf0c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-beer"></span></td>
        <td>fas fa-beer</td>
        <td>&amp;#xf0fc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-blog"></span></td>
        <td>fas fa-blog</td>
        <td>&amp;#xf781;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-check"></span></td>
        <td>fas fa-check</td>
        <td>&amp;#xf00c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-check-circle"></span></td>
        <td>fas fa-check-circle</td>
        <td>&amp;#xf058;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-check-circle"></span></td>
        <td>far fa-check-circle</td>
        <td>&amp;#xf058;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-check-double"></span></td>
        <td>fas fa-check-double</td>
        <td>&amp;#xf560;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-check-square"></span></td>
        <td>fas fa-check-square</td>
        <td>&amp;#xf14a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-check-square"></span></td>
        <td>far fa-check-square</td>
        <td>&amp;#xf14a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud"></span></td>
        <td>fas fa-cloud</td>
        <td>&amp;#xf0c2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cog"></span></td>
        <td>fas fa-cog</td>
        <td>&amp;#xf013;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cogs"></span></td>
        <td>fas fa-cogs</td>
        <td>&amp;#xf085;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-database"></span></td>
        <td>fas fa-database</td>
        <td>&amp;#xf1c0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dot-circle"></span></td>
        <td>fas fa-dot-circle</td>
        <td>&amp;#xf192;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-dot-circle"></span></td>
        <td>far fa-dot-circle</td>
        <td>&amp;#xf192;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ellipsis-h"></span></td>
        <td>fas fa-ellipsis-h</td>
        <td>&amp;#xf141;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ellipsis-v"></span></td>
        <td>fas fa-ellipsis-v</td>
        <td>&amp;#xf142;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-exclamation"></span></td>
        <td>fas fa-exclamation</td>
        <td>&amp;#xf12a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-exclamation-circle"></span></td>
        <td>fas fa-exclamation-circle</td>
        <td>&amp;#xf06a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-exclamation-triangle"></span></td>
        <td>fas fa-exclamation-triangle</td>
        <td>&amp;#xf071;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-download"></span></td>
        <td>fas fa-file-download</td>
        <td>&amp;#xf56d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-import"></span></td>
        <td>fas fa-file-import</td>
        <td>&amp;#xf56f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-upload"></span></td>
        <td>fas fa-file-upload</td>
        <td>&amp;#xf574;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fingerprint"></span></td>
        <td>fas fa-fingerprint</td>
        <td>&amp;#xf577;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-flag"></span></td>
        <td>fas fa-flag</td>
        <td>&amp;#xf024;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-flag"></span></td>
        <td>far fa-flag</td>
        <td>&amp;#xf024;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-flag-checkered"></span></td>
        <td>fas fa-flag-checkered</td>
        <td>&amp;#xf11e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grip-lines"></span></td>
        <td>fas fa-grip-lines</td>
        <td>&amp;#xf7a4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grip-lines-vertical"></span></td>
        <td>fas fa-grip-lines-vertical</td>
        <td>&amp;#xf7a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grip-horizontal"></span></td>
        <td>fas fa-grip-horizontal</td>
        <td>&amp;#xf58d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-grip-vertical"></span></td>
        <td>fas fa-grip-vertical</td>
        <td>&amp;#xf58e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hashtag"></span></td>
        <td>fas fa-hashtag</td>
        <td>&amp;#xf292;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-info"></span></td>
        <td>fas fa-info</td>
        <td>&amp;#xf129;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-info-circle"></span></td>
        <td>fas fa-info-circle</td>
        <td>&amp;#xf05a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-medal"></span></td>
        <td>fas fa-medal</td>
        <td>&amp;#xf5a2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-minus"></span></td>
        <td>fas fa-minus</td>
        <td>&amp;#xf068;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-minus-circle"></span></td>
        <td>fas fa-minus-circle</td>
        <td>&amp;#xf056;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-minus-square"></span></td>
        <td>fas fa-minus-square</td>
        <td>&amp;#xf146;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-minus-square"></span></td>
        <td>far fa-minus-square</td>
        <td>&amp;#xf146;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plus"></span></td>
        <td>fas fa-plus</td>
        <td>&amp;#xf067;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-plus-circle"></span></td>
        <td>fas fa-plus-circle</td>
        <td>&amp;#xf055;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-question"></span></td>
        <td>fas fa-question</td>
        <td>&amp;#xf128;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-search"></span></td>
        <td>fas fa-search</td>
        <td>&amp;#xf002;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-search-minus"></span></td>
        <td>fas fa-search-minus</td>
        <td>&amp;#xf010;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-search-plus"></span></td>
        <td>fas fa-search-plus</td>
        <td>&amp;#xf00e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-share-alt"></span></td>
        <td>fas fa-share-alt</td>
        <td>&amp;#xf1e0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-share-alt-square"></span></td>
        <td>fas fa-share-alt-square</td>
        <td>&amp;#xf1e1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-signal"></span></td>
        <td>fas fa-signal</td>
        <td>&amp;#xf012;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-star"></span></td>
        <td>fas fa-star</td>
        <td>&amp;#xf005;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-star"></span></td>
        <td>far fa-star</td>
        <td>&amp;#xf005;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-star-and-crescent"></span></td>
        <td>fas fa-star-and-crescent</td>
        <td>&amp;#xf699;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-star-half"></span></td>
        <td>fas fa-star-half</td>
        <td>&amp;#xf089;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-star-half"></span></td>
        <td>far fa-star-half</td>
        <td>&amp;#xf089;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-times"></span></td>
        <td>fas fa-times</td>
        <td>&amp;#xf00d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-times-circle"></span></td>
        <td>fas fa-times-circle</td>
        <td>&amp;#xf057;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-times-circle"></span></td>
        <td>far fa-times-circle</td>
        <td>&amp;#xf057;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-toggle-off"></span></td>
        <td>fas fa-toggle-off</td>
        <td>&amp;#xf204;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-toggle-on"></span></td>
        <td>fas fa-toggle-on</td>
        <td>&amp;#xf205;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tools"></span></td>
        <td>fas fa-tools</td>
        <td>&amp;#xf7d9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trash-restore"></span></td>
        <td>fas fa-trash-restore</td>
        <td>&amp;#xf829;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trash-restore-alt"></span></td>
        <td>fas fa-trash-restore-alt</td>
        <td>&amp;#xf82a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-trophy"></span></td>
        <td>fas fa-trophy</td>
        <td>&amp;#xf091;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user"></span></td>
        <td>fas fa-user</td>
        <td>&amp;#xf007;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-user"></span></td>
        <td>far fa-user</td>
        <td>&amp;#xf007;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-alt"></span></td>
        <td>fas fa-user-alt</td>
        <td>&amp;#xf406;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-circle"></span></td>
        <td>fas fa-user-circle</td>
        <td>&amp;#xf2bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-user-circle"></span></td>
        <td>far fa-user-circle</td>
        <td>&amp;#xf2bd;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-ambulance"></span></td>
        <td>fas fa-ambulance</td>
        <td>&amp;#xf0f9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-anchor"></span></td>
        <td>fas fa-anchor</td>
        <td>&amp;#xf13d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bicycle"></span></td>
        <td>fas fa-bicycle</td>
        <td>&amp;#xf206;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-binoculars"></span></td>
        <td>fas fa-binoculars</td>
        <td>&amp;#xf1e5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bomb"></span></td>
        <td>fas fa-bomb</td>
        <td>&amp;#xf1e2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bookmark"></span></td>
        <td>fas fa-bookmark</td>
        <td>&amp;#xf02e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-bookmark"></span></td>
        <td>far fa-bookmark</td>
        <td>&amp;#xf02e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-directions"></span></td>
        <td>fas fa-directions</td>
        <td>&amp;#xf5eb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fighter-jet"></span></td>
        <td>fas fa-fighter-jet</td>
        <td>&amp;#xf0fb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fire"></span></td>
        <td>fas fa-fire</td>
        <td>&amp;#xf06d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-fire-alt"></span></td>
        <td>fas fa-fire-alt</td>
        <td>&amp;#xf7e4;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-flask"></span></td>
        <td>fas fa-flask</td>
        <td>&amp;#xf0c3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gamepad"></span></td>
        <td>fas fa-gamepad</td>
        <td>&amp;#xf11b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gavel"></span></td>
        <td>fas fa-gavel</td>
        <td>&amp;#xf0e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-helicopter"></span></td>
        <td>fas fa-helicopter</td>
        <td>&amp;#xf533;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-key"></span></td>
        <td>fas fa-key</td>
        <td>&amp;#xf084;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-lemon"></span></td>
        <td>fas fa-lemon</td>
        <td>&amp;#xf094;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-lemon"></span></td>
        <td>far fa-lemon</td>
        <td>&amp;#xf094;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-life-ring"></span></td>
        <td>fas fa-life-ring</td>
        <td>&amp;#xf1cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-life-ring"></span></td>
        <td>far fa-life-ring</td>
        <td>&amp;#xf1cd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-lightbulb"></span></td>
        <td>fas fa-lightbulb</td>
        <td>&amp;#xf0eb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-lightbulb"></span></td>
        <td>far fa-lightbulb</td>
        <td>&amp;#xf0eb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-magnet"></span></td>
        <td>fas fa-magnet</td>
        <td>&amp;#xf076;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-male"></span></td>
        <td>fas fa-male</td>
        <td>&amp;#xf183;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-marker"></span></td>
        <td>fas fa-map-marker</td>
        <td>&amp;#xf041;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-marker-alt"></span></td>
        <td>fas fa-map-marker-alt</td>
        <td>&amp;#xf3c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-pin"></span></td>
        <td>fas fa-map-pin</td>
        <td>&amp;#xf276;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-map-signs"></span></td>
        <td>fas fa-map-signs</td>
        <td>&amp;#xf277;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-newspaper"></span></td>
        <td>fas fa-newspaper</td>
        <td>&amp;#xf1ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-newspaper"></span></td>
        <td>far fa-newspaper</td>
        <td>&amp;#xf1ea;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-parking"></span></td>
        <td>fas fa-parking</td>
        <td>&amp;#xf540;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-restroom"></span></td>
        <td>fas fa-restroom</td>
        <td>&amp;#xf7bd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-road"></span></td>
        <td>fas fa-road</td>
        <td>&amp;#xf018;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-rocket"></span></td>
        <td>fas fa-rocket</td>
        <td>&amp;#xf135;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-route"></span></td>
        <td>fas fa-route</td>
        <td>&amp;#xf4d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ship"></span></td>
        <td>fas fa-ship</td>
        <td>&amp;#xf21a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shoe-prints"></span></td>
        <td>fas fa-shoe-prints</td>
        <td>&amp;#xf54b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shopping-bag"></span></td>
        <td>fas fa-shopping-bag</td>
        <td>&amp;#xf290;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shopping-basket"></span></td>
        <td>fas fa-shopping-basket</td>
        <td>&amp;#xf291;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shopping-cart"></span></td>
        <td>fas fa-shopping-cart</td>
        <td>&amp;#xf07a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-shower"></span></td>
        <td>fas fa-shower</td>
        <td>&amp;#xf2cc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-snowplow"></span></td>
        <td>fas fa-snowplow</td>
        <td>&amp;#xf7d2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-street-view"></span></td>
        <td>fas fa-street-view</td>
        <td>&amp;#xf21d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-subway"></span></td>
        <td>fas fa-subway</td>
        <td>&amp;#xf239;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ticket-alt"></span></td>
        <td>fas fa-ticket-alt</td>
        <td>&amp;#xf3ff;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-traffic-light"></span></td>
        <td>fas fa-traffic-light</td>
        <td>&amp;#xf637;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-train"></span></td>
        <td>fas fa-train</td>
        <td>&amp;#xf238;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-umbrella"></span></td>
        <td>fas fa-umbrella</td>
        <td>&amp;#xf0e9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-utensil-spoon"></span></td>
        <td>fas fa-utensil-spoon</td>
        <td>&amp;#xf2e5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-utensils"></span></td>
        <td>fas fa-utensils</td>
        <td>&amp;#xf2e7;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-ad"></span></td>
        <td>fas fa-ad</td>
        <td>&amp;#xf641;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment-dollar"></span></td>
        <td>fas fa-comment-dollar</td>
        <td>&amp;#xf651;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comments-dollar"></span></td>
        <td>fas fa-comments-dollar</td>
        <td>&amp;#xf653;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-envelope-open-text"></span></td>
        <td>fas fa-envelope-open-text</td>
        <td>&amp;#xf658;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-funnel-dollar"></span></td>
        <td>fas fa-funnel-dollar</td>
        <td>&amp;#xf662;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mail-bulk"></span></td>
        <td>fas fa-mail-bulk</td>
        <td>&amp;#xf674;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-poll"></span></td>
        <td>fas fa-poll</td>
        <td>&amp;#xf681;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-poll-h"></span></td>
        <td>fas fa-poll-h</td>
        <td>&amp;#xf682;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-search-dollar"></span></td>
        <td>fas fa-search-dollar</td>
        <td>&amp;#xf688;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-search-location"></span></td>
        <td>fas fa-search-location</td>
        <td>&amp;#xf689;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-calculator"></span></td>
        <td>fas fa-calculator</td>
        <td>&amp;#xf1ec;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-divide"></span></td>
        <td>fas fa-divide</td>
        <td>&amp;#xf529;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-equals"></span></td>
        <td>fas fa-equals</td>
        <td>&amp;#xf52c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-greater-than"></span></td>
        <td>fas fa-greater-than</td>
        <td>&amp;#xf531;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-greater-than-equal"></span></td>
        <td>fas fa-greater-than-equal</td>
        <td>&amp;#xf532;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-infinity"></span></td>
        <td>fas fa-infinity</td>
        <td>&amp;#xf534;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-less-than"></span></td>
        <td>fas fa-less-than</td>
        <td>&amp;#xf536;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-less-than-equal"></span></td>
        <td>fas fa-less-than-equal</td>
        <td>&amp;#xf537;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-not-equal"></span></td>
        <td>fas fa-not-equal</td>
        <td>&amp;#xf53e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-percentage"></span></td>
        <td>fas fa-percentage</td>
        <td>&amp;#xf541;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-square-root-alt"></span></td>
        <td>fas fa-square-root-alt</td>
        <td>&amp;#xf698;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-allergies"></span></td>
        <td>fas fa-allergies</td>
        <td>&amp;#xf461;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-band-aid"></span></td>
        <td>fas fa-band-aid</td>
        <td>&amp;#xf462;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-biohazard"></span></td>
        <td>fas fa-biohazard</td>
        <td>&amp;#xf780;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bone"></span></td>
        <td>fas fa-bone</td>
        <td>&amp;#xf5d7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bong"></span></td>
        <td>fas fa-bong</td>
        <td>&amp;#xf55c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-book-medical"></span></td>
        <td>fas fa-book-medical</td>
        <td>&amp;#xf7e6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-brain"></span></td>
        <td>fas fa-brain</td>
        <td>&amp;#xf5dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-briefcase-medical"></span></td>
        <td>fas fa-briefcase-medical</td>
        <td>&amp;#xf469;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-burn"></span></td>
        <td>fas fa-burn</td>
        <td>&amp;#xf46a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cannabis"></span></td>
        <td>fas fa-cannabis</td>
        <td>&amp;#xf55f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-capsules"></span></td>
        <td>fas fa-capsules</td>
        <td>&amp;#xf46b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-clinic-medical"></span></td>
        <td>fas fa-clinic-medical</td>
        <td>&amp;#xf7f2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-comment-medical"></span></td>
        <td>fas fa-comment-medical</td>
        <td>&amp;#xf7f5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-crutch"></span></td>
        <td>fas fa-crutch</td>
        <td>&amp;#xf7f7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-diagnoses"></span></td>
        <td>fas fa-diagnoses</td>
        <td>&amp;#xf470;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dna"></span></td>
        <td>fas fa-dna</td>
        <td>&amp;#xf471;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-medical"></span></td>
        <td>fas fa-file-medical</td>
        <td>&amp;#xf477;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-medical-alt"></span></td>
        <td>fas fa-file-medical-alt</td>
        <td>&amp;#xf478;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-file-prescription"></span></td>
        <td>fas fa-file-prescription</td>
        <td>&amp;#xf572;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-first-aid"></span></td>
        <td>fas fa-first-aid</td>
        <td>&amp;#xf479;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hospital-symbol"></span></td>
        <td>fas fa-hospital-symbol</td>
        <td>&amp;#xf47e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-id-card-alt"></span></td>
        <td>fas fa-id-card-alt</td>
        <td>&amp;#xf47f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-joint"></span></td>
        <td>fas fa-joint</td>
        <td>&amp;#xf595;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-laptop-medical"></span></td>
        <td>fas fa-laptop-medical</td>
        <td>&amp;#xf812;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mortar-pestle"></span></td>
        <td>fas fa-mortar-pestle</td>
        <td>&amp;#xf5a7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-notes-medical"></span></td>
        <td>fas fa-notes-medical</td>
        <td>&amp;#xf481;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pager"></span></td>
        <td>fas fa-pager</td>
        <td>&amp;#xf815;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pills"></span></td>
        <td>fas fa-pills</td>
        <td>&amp;#xf484;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-poop"></span></td>
        <td>fas fa-poop</td>
        <td>&amp;#xf619;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-prescription-bottle"></span></td>
        <td>fas fa-prescription-bottle</td>
        <td>&amp;#xf485;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-prescription-bottle-alt"></span></td>
        <td>fas fa-prescription-bottle-alt</td>
        <td>&amp;#xf486;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-procedures"></span></td>
        <td>fas fa-procedures</td>
        <td>&amp;#xf487;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-radiation"></span></td>
        <td>fas fa-radiation</td>
        <td>&amp;#xf7b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-radiation-alt"></span></td>
        <td>fas fa-radiation-alt</td>
        <td>&amp;#xf7ba;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smoking"></span></td>
        <td>fas fa-smoking</td>
        <td>&amp;#xf48d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smoking-ban"></span></td>
        <td>fas fa-smoking-ban</td>
        <td>&amp;#xf54d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-star-of-life"></span></td>
        <td>fas fa-star-of-life</td>
        <td>&amp;#xf621;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-syringe"></span></td>
        <td>fas fa-syringe</td>
        <td>&amp;#xf48e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tablets"></span></td>
        <td>fas fa-tablets</td>
        <td>&amp;#xf490;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-teeth"></span></td>
        <td>fas fa-teeth</td>
        <td>&amp;#xf62e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-teeth-open"></span></td>
        <td>fas fa-teeth-open</td>
        <td>&amp;#xf62f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer"></span></td>
        <td>fas fa-thermometer</td>
        <td>&amp;#xf491;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tooth"></span></td>
        <td>fas fa-tooth</td>
        <td>&amp;#xf5c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-nurse"></span></td>
        <td>fas fa-user-nurse</td>
        <td>&amp;#xf82f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-vial"></span></td>
        <td>fas fa-vial</td>
        <td>&amp;#xf492;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-vials"></span></td>
        <td>fas fa-vials</td>
        <td>&amp;#xf493;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-weight"></span></td>
        <td>fas fa-weight</td>
        <td>&amp;#xf496;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-x-ray"></span></td>
        <td>fas fa-x-ray</td>
        <td>&amp;#xf497;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-box-open"></span></td>
        <td>fas fa-box-open</td>
        <td>&amp;#xf49e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-couch"></span></td>
        <td>fas fa-couch</td>
        <td>&amp;#xf4b8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dolly"></span></td>
        <td>fas fa-dolly</td>
        <td>&amp;#xf472;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-people-carry"></span></td>
        <td>fas fa-people-carry</td>
        <td>&amp;#xf4ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sign"></span></td>
        <td>fas fa-sign</td>
        <td>&amp;#xf4d9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-tape"></span></td>
        <td>fas fa-tape</td>
        <td>&amp;#xf4db;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-truck-loading"></span></td>
        <td>fas fa-truck-loading</td>
        <td>&amp;#xf4de;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-truck-moving"></span></td>
        <td>fas fa-truck-moving</td>
        <td>&amp;#xf4df;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-baby-carriage"></span></td>
        <td>fas fa-baby-carriage</td>
        <td>&amp;#xf77d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-blender"></span></td>
        <td>fas fa-blender</td>
        <td>&amp;#xf517;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-book-dead"></span></td>
        <td>fas fa-book-dead</td>
        <td>&amp;#xf6b7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-candy-cane"></span></td>
        <td>fas fa-candy-cane</td>
        <td>&amp;#xf786;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cookie"></span></td>
        <td>fas fa-cookie</td>
        <td>&amp;#xf563;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cookie-bite"></span></td>
        <td>fas fa-cookie-bite</td>
        <td>&amp;#xf564;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cube"></span></td>
        <td>fas fa-cube</td>
        <td>&amp;#xf1b2;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cubes"></span></td>
        <td>fas fa-cubes</td>
        <td>&amp;#xf1b3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice"></span></td>
        <td>fas fa-dice</td>
        <td>&amp;#xf522;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-d20"></span></td>
        <td>fas fa-dice-d20</td>
        <td>&amp;#xf6cf;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-d6"></span></td>
        <td>fas fa-dice-d6</td>
        <td>&amp;#xf6d1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-five"></span></td>
        <td>fas fa-dice-five</td>
        <td>&amp;#xf523;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-four"></span></td>
        <td>fas fa-dice-four</td>
        <td>&amp;#xf524;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-one"></span></td>
        <td>fas fa-dice-one</td>
        <td>&amp;#xf525;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-six"></span></td>
        <td>fas fa-dice-six</td>
        <td>&amp;#xf526;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-three"></span></td>
        <td>fas fa-dice-three</td>
        <td>&amp;#xf527;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dice-two"></span></td>
        <td>fas fa-dice-two</td>
        <td>&amp;#xf528;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-digital-tachograph"></span></td>
        <td>fas fa-digital-tachograph</td>
        <td>&amp;#xf566;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-door-closed"></span></td>
        <td>fas fa-door-closed</td>
        <td>&amp;#xf52a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-door-open"></span></td>
        <td>fas fa-door-open</td>
        <td>&amp;#xf52b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-drum"></span></td>
        <td>fas fa-drum</td>
        <td>&amp;#xf569;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-drum-steelpan"></span></td>
        <td>fas fa-drum-steelpan</td>
        <td>&amp;#xf56a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-female"></span></td>
        <td>fas fa-female</td>
        <td>&amp;#xf182;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-futbol"></span></td>
        <td>fas fa-futbol</td>
        <td>&amp;#xf1e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-futbol"></span></td>
        <td>far fa-futbol</td>
        <td>&amp;#xf1e3;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-gem"></span></td>
        <td>fas fa-gem</td>
        <td>&amp;#xf3a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-gem"></span></td>
        <td>far fa-gem</td>
        <td>&amp;#xf3a5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-glass-whiskey"></span></td>
        <td>fas fa-glass-whiskey</td>
        <td>&amp;#xf7a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-guitar"></span></td>
        <td>fas fa-guitar</td>
        <td>&amp;#xf7a6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-headphones-alt"></span></td>
        <td>fas fa-headphones-alt</td>
        <td>&amp;#xf58f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-headset"></span></td>
        <td>fas fa-headset</td>
        <td>&amp;#xf590;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-lock"></span></td>
        <td>fas fa-lock</td>
        <td>&amp;#xf023;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-lock-open"></span></td>
        <td>fas fa-lock-open</td>
        <td>&amp;#xf3c1;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-mitten"></span></td>
        <td>fas fa-mitten</td>
        <td>&amp;#xf7b5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-moon"></span></td>
        <td>fas fa-moon</td>
        <td>&amp;#xf186;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-moon"></span></td>
        <td>far fa-moon</td>
        <td>&amp;#xf186;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-puzzle-piece"></span></td>
        <td>fas fa-puzzle-piece</td>
        <td>&amp;#xf12e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-ring"></span></td>
        <td>fas fa-ring</td>
        <td>&amp;#xf70b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-scroll"></span></td>
        <td>fas fa-scroll</td>
        <td>&amp;#xf70e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-snowflake"></span></td>
        <td>fas fa-snowflake</td>
        <td>&amp;#xf2dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-snowflake"></span></td>
        <td>far fa-snowflake</td>
        <td>&amp;#xf2dc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-space-shuttle"></span></td>
        <td>fas fa-space-shuttle</td>
        <td>&amp;#xf197;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-stroopwafel"></span></td>
        <td>fas fa-stroopwafel</td>
        <td>&amp;#xf551;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-sun"></span></td>
        <td>fas fa-sun</td>
        <td>&amp;#xf185;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-sun"></span></td>
        <td>far fa-sun</td>
        <td>&amp;#xf185;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-toilet"></span></td>
        <td>fas fa-toilet</td>
        <td>&amp;#xf7d8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-toolbox"></span></td>
        <td>fas fa-toolbox</td>
        <td>&amp;#xf552;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-unlock"></span></td>
        <td>fas fa-unlock</td>
        <td>&amp;#xf09c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-unlock-alt"></span></td>
        <td>fas fa-unlock-alt</td>
        <td>&amp;#xf13e;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fab fa-alipay"></span></td>
        <td>fab fa-alipay</td>
        <td>&amp;#xf642;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cart-plus"></span></td>
        <td>fas fa-cart-plus</td>
        <td>&amp;#xf217;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-credit-card"></span></td>
        <td>fas fa-credit-card</td>
        <td>&amp;#xf09d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-credit-card"></span></td>
        <td>far fa-credit-card</td>
        <td>&amp;#xf09d;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-democrat"></span></td>
        <td>fas fa-democrat</td>
        <td>&amp;#xf747;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-flag-usa"></span></td>
        <td>fas fa-flag-usa</td>
        <td>&amp;#xf74d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-person-booth"></span></td>
        <td>fas fa-person-booth</td>
        <td>&amp;#xf756;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-republican"></span></td>
        <td>fas fa-republican</td>
        <td>&amp;#xf75e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-vote-yea"></span></td>
        <td>fas fa-vote-yea</td>
        <td>&amp;#xf772;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-ankh"></span></td>
        <td>fas fa-ankh</td>
        <td>&amp;#xf644;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bible"></span></td>
        <td>fas fa-bible</td>
        <td>&amp;#xf647;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cross"></span></td>
        <td>fas fa-cross</td>
        <td>&amp;#xf654;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dharmachakra"></span></td>
        <td>fas fa-dharmachakra</td>
        <td>&amp;#xf655;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hamsa"></span></td>
        <td>fas fa-hamsa</td>
        <td>&amp;#xf665;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hanukiah"></span></td>
        <td>fas fa-hanukiah</td>
        <td>&amp;#xf6e6;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-haykal"></span></td>
        <td>fas fa-haykal</td>
        <td>&amp;#xf666;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-jedi"></span></td>
        <td>fas fa-jedi</td>
        <td>&amp;#xf669;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-journal-whills"></span></td>
        <td>fas fa-journal-whills</td>
        <td>&amp;#xf66a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-kaaba"></span></td>
        <td>fas fa-kaaba</td>
        <td>&amp;#xf66b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-khanda"></span></td>
        <td>fas fa-khanda</td>
        <td>&amp;#xf66d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-menorah"></span></td>
        <td>fas fa-menorah</td>
        <td>&amp;#xf676;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pastafarianism"></span></td>
        <td>fas fa-pastafarianism</td>
        <td>&amp;#xf67b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-peace"></span></td>
        <td>fas fa-peace</td>
        <td>&amp;#xf67c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-pray"></span></td>
        <td>fas fa-pray</td>
        <td>&amp;#xf683;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-praying-hands"></span></td>
        <td>fas fa-praying-hands</td>
        <td>&amp;#xf684;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-quran"></span></td>
        <td>fas fa-quran</td>
        <td>&amp;#xf687;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-star-of-david"></span></td>
        <td>fas fa-star-of-david</td>
        <td>&amp;#xf69a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-torah"></span></td>
        <td>fas fa-torah</td>
        <td>&amp;#xf6a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-yin-yang"></span></td>
        <td>fas fa-yin-yang</td>
        <td>&amp;#xf6ad;</td>
      </tr>

      <tr onclick="get(this)">
        <td><span class="fas fa-bookmark"></span></td>
        <td>fas fa-bookmark</td>
        <td>&amp;#xf02e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-square"></span></td>
        <td>fas fa-square</td>
        <td>&amp;#xf0c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="far fa-square"></span></td>
        <td>far fa-square</td>
        <td>&amp;#xf0c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-asterisk"></span></td>
        <td>fas fa-asterisk</td>
        <td>&amp;#xf069;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-circle-notch"></span></td>
        <td>fas fa-circle-notch</td>
        <td>&amp;#xf1ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-spinner"></span></td>
        <td>fas fa-spinner</td>
        <td>&amp;#xf110;</td>
      </tr>

      <tr onclick="get(this)">
        <td><span class="fas fa-baseball-ball"></span></td>
        <td>fas fa-baseball-ball</td>
        <td>&amp;#xf433;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-basketball-ball"></span></td>
        <td>fas fa-basketball-ball</td>
        <td>&amp;#xf434;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-bowling-ball"></span></td>
        <td>fas fa-bowling-ball</td>
        <td>&amp;#xf436;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-golf-ball"></span></td>
        <td>fas fa-golf-ball</td>
        <td>&amp;#xf450;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-hockey-puck"></span></td>
        <td>fas fa-hockey-puck</td>
        <td>&amp;#xf453;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-quidditch"></span></td>
        <td>fas fa-quidditch</td>
        <td>&amp;#xf458;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-skating"></span></td>
        <td>fas fa-skating</td>
        <td>&amp;#xf7c5;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-skiing"></span></td>
        <td>fas fa-skiing</td>
        <td>&amp;#xf7c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-skiing-nordic"></span></td>
        <td>fas fa-skiing-nordic</td>
        <td>&amp;#xf7ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-snowboarding"></span></td>
        <td>fas fa-snowboarding</td>
        <td>&amp;#xf7ce;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-table-tennis"></span></td>
        <td>fas fa-table-tennis</td>
        <td>&amp;#xf45d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-volleyball-ball"></span></td>
        <td>fas fa-volleyball-ball</td>
        <td>&amp;#xf45f;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-ban"></span></td>
        <td>fas fa-ban</td>
        <td>&amp;#xf05e;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-battery-empty"></span></td>
        <td>fas fa-battery-empty</td>
        <td>&amp;#xf244;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-battery-full"></span></td>
        <td>fas fa-battery-full</td>
        <td>&amp;#xf240;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-battery-half"></span></td>
        <td>fas fa-battery-half</td>
        <td>&amp;#xf242;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-battery-quarter"></span></td>
        <td>fas fa-battery-quarter</td>
        <td>&amp;#xf243;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-battery-three-quarters"></span></td>
        <td>fas fa-battery-three-quarters</td>
        <td>&amp;#xf241;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer-empty"></span></td>
        <td>fas fa-thermometer-empty</td>
        <td>&amp;#xf2cb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer-full"></span></td>
        <td>fas fa-thermometer-full</td>
        <td>&amp;#xf2c7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer-half"></span></td>
        <td>fas fa-thermometer-half</td>
        <td>&amp;#xf2c9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer-quarter"></span></td>
        <td>fas fa-thermometer-quarter</td>
        <td>&amp;#xf2ca;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-thermometer-three-quarters"></span></td>
        <td>fas fa-thermometer-three-quarters</td>
        <td>&amp;#xf2c8;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-alt-slash"></span></td>
        <td>fas fa-user-alt-slash</td>
        <td>&amp;#xf4fa;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-slash"></span></td>
        <td>fas fa-user-slash</td>
        <td>&amp;#xf506;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fab fa-acquisitions-incorporated"></span></td>
        <td>fab fa-acquisitions-incorporated</td>
        <td>&amp;#xf6af;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-dungeon"></span></td>
        <td>fas fa-dungeon</td>
        <td>&amp;#xf6d9;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-archway"></span></td>
        <td>fas fa-archway</td>
        <td>&amp;#xf557;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-address-book"></span></td>
        <td>fas fa-address-book</td>
        <td>&amp;#xf2b9;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-baby"></span></td>
        <td>fas fa-baby</td>
        <td>&amp;#xf77c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-child"></span></td>
        <td>fas fa-child</td>
        <td>&amp;#xf1ae;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-astronaut"></span></td>
        <td>fas fa-user-astronaut</td>
        <td>&amp;#xf4fb;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-check"></span></td>
        <td>fas fa-user-check</td>
        <td>&amp;#xf4fc;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-clock"></span></td>
        <td>fas fa-user-clock</td>
        <td>&amp;#xf4fd;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-cog"></span></td>
        <td>fas fa-user-cog</td>
        <td>&amp;#xf4fe;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-edit"></span></td>
        <td>fas fa-user-edit</td>
        <td>&amp;#xf4ff;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-friends"></span></td>
        <td>fas fa-user-friends</td>
        <td>&amp;#xf500;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-injured"></span></td>
        <td>fas fa-user-injured</td>
        <td>&amp;#xf728;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-lock"></span></td>
        <td>fas fa-user-lock</td>
        <td>&amp;#xf502;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-minus"></span></td>
        <td>fas fa-user-minus</td>
        <td>&amp;#xf503;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-ninja"></span></td>
        <td>fas fa-user-ninja</td>
        <td>&amp;#xf504;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-plus"></span></td>
        <td>fas fa-user-plus</td>
        <td>&amp;#xf234;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-shield"></span></td>
        <td>fas fa-user-shield</td>
        <td>&amp;#xf505;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-tag"></span></td>
        <td>fas fa-user-tag</td>
        <td>&amp;#xf507;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-tie"></span></td>
        <td>fas fa-user-tie</td>
        <td>&amp;#xf508;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-user-times"></span></td>
        <td>fas fa-user-times</td>
        <td>&amp;#xf235;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-users"></span></td>
        <td>fas fa-users</td>
        <td>&amp;#xf0c0;</td>
      </tr>

      <tr onclick="get(this)">
        <td><span class="fas fa-bolt"></span></td>
        <td>fas fa-bolt</td>
        <td>&amp;#xf0e7;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-meatball"></span></td>
        <td>fas fa-cloud-meatball</td>
        <td>&amp;#xf73b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-moon-rain"></span></td>
        <td>fas fa-cloud-moon-rain</td>
        <td>&amp;#xf73c;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-rain"></span></td>
        <td>fas fa-cloud-rain</td>
        <td>&amp;#xf73d;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-showers-heavy"></span></td>
        <td>fas fa-cloud-showers-heavy</td>
        <td>&amp;#xf740;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-cloud-sun-rain"></span></td>
        <td>fas fa-cloud-sun-rain</td>
        <td>&amp;#xf743;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-meteor"></span></td>
        <td>fas fa-meteor</td>
        <td>&amp;#xf753;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-poo-storm"></span></td>
        <td>fas fa-poo-storm</td>
        <td>&amp;#xf75a;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-rainbow"></span></td>
        <td>fas fa-rainbow</td>
        <td>&amp;#xf75b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-smog"></span></td>
        <td>fas fa-smog</td>
        <td>&amp;#xf75f;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-temperature-high"></span></td>
        <td>fas fa-temperature-high</td>
        <td>&amp;#xf769;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-temperature-low"></span></td>
        <td>fas fa-temperature-low</td>
        <td>&amp;#xf76b;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-water"></span></td>
        <td>fas fa-water</td>
        <td>&amp;#xf773;</td>
      </tr>

      <tr onclick="get(this)">
        <td><span class="fas fa-glass-whiskey"></span></td>
        <td>fas fa-glass-whiskey</td>
        <td>&amp;#xf7a0;</td>
      </tr>
      <tr onclick="get(this)">
        <td><span class="fas fa-icicles"></span></td>
        <td>fas fa-icicles</td>
        <td>&amp;#xf7ad;</td>
      </tr>


      <tr onclick="get(this)">
        <td><span class="fas fa-archive"></span></td>
        <td>fas fa-archive</td>
        <td>&amp;#x;</td>
      </tr>

    </tbody>
  </table>
</div>
<div id="footer">
  <p>Table by: JC Programs</p>
</div>
<script src="js/index.js"></script>
</body>
</html>