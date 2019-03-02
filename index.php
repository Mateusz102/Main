<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyNote</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="styles.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>

    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">    <!-- navbar default na navbar cusotm - po dodaniu css styles -->
        <div class = container-fluid>
            <div class="navbar-header">
            <a class="navbar-brand"> MyWorld</a>
            
            <button type="button" class="navbar-toggle" data-target="#navbatCollapsexxx" data-toggle="collapse"> 
                <!-- chowające się menu ( przycisk). data target  i data toogle dają rozwijane listy <tutaj z # w id bez #> -->
                <span class="sr-only">Toggle Navigation</span>   
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div class="navbar-collapse collapse" id="navbatCollapsexxx">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Follow ME!</a></li> <!-- pierwsza pozycja podświetlona-->
                    <li><a href="#">Notatki</a></li>
                    <li> <a href="&">Inne</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right"> <!-- pull-right <-przesuwa w prawo// navbar nie przesuwa w liscie przewijanej - poprawione -->
                    <li><a href="#">Zaloguj</a></li> <!-- pierwsza pozycja podświetlona-->
                </ul>
            </div>
        </div>
    </nav>
      <!-- Jumbotron z przciskiem Zarejestrowania-->
      <div class="jumbotron" id="mainContainer">
      <h1>Follow my way ! </h1>
               
      <button type="button" class="btn btn-lg btn-primary btn-center moja1" data-target="">        Dołącz do nas !        <br>   </button>
      </div>
      
      
      
      <!-- Register Form - modal in Boostramp--> 
          <form method="post" id="">
                  
                <div class="modal" id="RegisterModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal">
                            &times;
                          </button>
                          <h4 id="myModalLabel">
                            Thank you for contacting us: 
                          </h4>
                      </div>
                      <div class="modal-body">
                        <label for="inquiry">
                          Your inquiry:
                        </label>
                        <textarea class="form-control" rows="5" id="inquiry">
                        </textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Send
                        </button>
                      </div>
                  </div>
              </div>
              </div>
          
          </form>-->
      
      <!-- Footer -->
     <?php 
        include "footer.php";
      ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     
  </body>
</html>