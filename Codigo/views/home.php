<?PHP

if (!isset($_POST["BUSCA"])) {
  $_POST["BUSCA"] = "";
}
$BUSCA = $_POST["BUSCA"];

?>

<body class="w3-light-grey">



  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="width:300px;  background: url(grid.png),  linear-gradient( #33ccff, #003399);" id="mySidebar"><br>

    <form class="d-flex" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="BUSCA" style="margin:5px" aria-label="Search">
      <button class="btn btn-success" style="margin:5px" type="submit">Buscar</button>
    </form>

    <hr>
    <form action="" method="post">
      <div class="w3-container" style="background: url(grid.png),  linear-gradient( #343a40, black);text-align:center;">
        <h5>
          <font color="white">FILTROS</font>
        </h5>
      </div>
      <div class="w3-bar-block">




        <div id="menu">



          <div class="row">

            <div class="col">
            <input type="hidden" name="BUSCA" value="<?php echo $BUSCA; ?>">
              <button name="FILTRO" value="MENOR" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-money"></i>
                <font color="white">Menor Preço</font>  </a>
              </button>
              <button name="FILTRO" value="MAIOR" class="w3-bar-item w3-button w3-padding"><i style="color:red;" class="fa fa-money"></i>
                <font color="white">Maior Preço</font>  </a>
              </button>
              <button name="FILTRO" value="PROMOCAO" class="w3-bar-item w3-button w3-padding"><i style="color:orange;" class="fa fa-percent"></i>
                <font color="white">Em Promoção</font>  </a>
              </button>
              <button name="FILTRO" value="LOJA" class="w3-bar-item w3-button w3-padding"><i style="color:PINK;" class="fa fa-shopping-bag"></i>
                <font color="white">Loja</font>  </a>
              </button>
              <button name="BUSCA" value="" class="w3-bar-item w3-button w3-padding"><i style="color:blue;" class="fa fa-search"></i>
                <font color="white">Limpar Busca</font>  </a>
              </button>

             

              <p>

            </div>
          </div>
        </div>
      </div>



      </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:13px;">
    <!-- <div id="home">
<center>
      <div id="carouselExampleInterval" class="carousel slide" style="top:0"data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/baner1.jpg" class="d-block " style="max-width: 800px;" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/baner2.jpg" class="d-block " style="max-width: 800px;"alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/baner1.jpg" class="d-block " style="max-width: 800px;" alt="...">
    </div>
  </div>
  </center>
</div> -->

    <!-- 
<hr> -->
    <div class="w3-row-padding w3-margin-bottom">

      <?php





      if (!isset($_POST["FILTRO"])) {
        $_POST["FILTRO"] = "";
      }
      $FILTRO = $_POST["FILTRO"];


      $CONTX = 0;

      if ($FILTRO == "MAIOR") {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos WHERE BUSCA = '$BUSCA' ORDER BY EXTRACTED_PRICE DESC  ");
      } else if ($FILTRO == "MENOR") {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos WHERE BUSCA = '$BUSCA' ORDER BY EXTRACTED_PRICE  ");
      } else if ($FILTRO == "PROMOCAO") {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos WHERE BUSCA = '$BUSCA' AND EXTENSION = 'SALE'  ");
      } else if ($FILTRO == "LOJA") {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos WHERE BUSCA = '$BUSCA' ORDER BY SOURCE  ");
      } else if ($BUSCA != "") {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos WHERE BUSCA = '$BUSCA'  ");
      } else {
        $result10  =  mysqli_query($con, "SELECT * FROM produtos ORDER BY SOURCE  ");
      }

      while ($linha = mysqli_fetch_array($result10)) {
        $TITLE  = $linha["TITLE"];
        $PRICE  = $linha["PRICE"];
        $EXTRACTED_PRICE  = $linha["EXTRACTED_PRICE"];
        $LINK  = $linha["LINK"];
        $SOURCE  = $linha["SOURCE"];
        $THUMBNAIL  = $linha["THUMBNAIL"];
        $BUSCA  = $linha["BUSCA"];
        $EXTENSION  = $linha["EXTENSION"];
        $CONTX++;
        $COR = "white";
        if ($EXTENSION != "") {
          $COR = "ORANGE";
        }


      ?>
        <div class="w3-quarter ">
          <div class="card" style="width: 18rem;background-color: <?PHP echo $COR; ?>;border-radius:20px">
            <img src="<?PHP echo $THUMBNAIL; ?>" class="card-img-top" style="border-radius:20px" alt="...">
            <div class="card-body" style="text-align:center">
              <?php if ($EXTENSION != "") { ?>
                <h6 class="card-title"><i class="fa fa-percent"> </i> Em Promoção</h6>
              <?php } ?>


              <h6 class="card-title"><?PHP echo $PRICE; ?></h6>
              <p class="card-text"><?PHP echo $TITLE; ?></p>
              <a href="<?PHP echo $LINK; ?>" class="btn btn-primary"><?PHP echo $SOURCE; ?></a>
            </div>
          </div>
        </div>
        <?PHP
        if ($CONTX == 4) {
          $CONTX = 0;
        ?>
    </div>
    <div class="w3-row-padding w3-margin-bottom">
    <?PHP } ?>

  <?PHP } ?>




    </div>
  </div>

  <?php
  // $response = file_get_contents('https://serpapi.com/search.json?q=core+i9&tbm=shop&location=Sao+Paulo%2C+Brazil&hl=en&gl=us&api_key=d1852b66269b0a00ffd60714a9217728f465384767d135bbd32082795dab2721');

  //  $obj = json_decode($response);
  //  $obj = $obj->{'inline_shopping_results'};
  // //  var_dump($obj[0]->{'price'},true); // 12345

  // //$teste = var_export($obj->{'inline_shopping_results'},true);

  // var_dump($obj);

  ?>
  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }
  </script>

</body>

</html>