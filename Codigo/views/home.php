

<body class="w3-light-grey">



    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="width:300px;  background: url(grid.png),  linear-gradient( #33ccff, #003399);" id="mySidebar"><br>
     
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" style="margin:5px" aria-label="Search">
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
              
                              <button name="ACAO_MENU" value="batata" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-check"></i>
                                <font color="white">batata1</font>  </a>
                              </button>
                              <button name="ACAO_MENU" value="batata" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-check"></i>
                                <font color="white">batata2</font>  </a>
                              </button>
                              <button name="ACAO_MENU" value="batata" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-check"></i>
                                <font color="white">batata3</font>  </a>
                              </button>
                              <button name="ACAO_MENU" value="batata" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-check"></i>
                                <font color="white">batata4</font>  </a>
                              </button>
                              <button name="ACAO_MENU" value="batata" class="w3-bar-item w3-button w3-padding"><i style="color:green;" class="fa fa-check"></i>
                                <font color="white">batata5</font>  </a>
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
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <div id="home">
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
</div>


<hr>
      
        <div class="w3-row-padding w3-margin-bottom">

        <div class="w3-quarter   ">
                  <button name="ACAO_MENU" value="produto" class="btn-block btn-dark ">
                    <div class="w3-container w3-pink w3-padding-16   ">
                      <div><i class="fa fa-comment w3-xxlarge"></i></div>
                      <h5>batatinha</h5>
                    </div>
                  </button>
                </div>
       




      </div>




    </div>

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
