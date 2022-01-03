<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Olex7iMatix Studio</title>
        <link rel="stylesheet" href="index.css">
        <link rel="icon" href="./Logo.png" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@600&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    </head>
    <body onload="update()">
        <div id="header">
            <nav id="nav" class="navbar navbar-expand-lg navbar-light sticky-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                        
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    
                
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Main Page</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>
                    
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                        id ="navbardrop" data-toggle="dropdown">
                    Restauracje
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="sides/Pizza_u_Mruczusia.html">Pizza u Mruczusia</a>
                    </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Programowanie</a></li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" 
                            id ="navbardrop" data-toggle="dropdown">
                        Inne
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="sides/Minecraft.html">Minecraft</a>
                        </div>
                        </li>
                </ul>
                
                </div>
            
                
            </nav>
        </div>
        <div id="Container">

            <div id="clock">

            </div>
            Have a nise<span style="color: white; font-size: 20px;"> Day</span>
            <div class="space-150px">
              O nas:
            </div>
        </div>
        <div id="Footer">
          <br/>
          Olex7iMatix Studio&copy; <img src="./Logo.png" style="border-radius: 50%; width: 50px; height: 50px;">
        </div>

        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
        ></script>
        <script 
          src="index.js"
        ></script>
        
    </body>
</html>