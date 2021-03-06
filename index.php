<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyWorld</title>

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
                    <li><a href="#LoginModal" data-toggle="modal">Zaloguj się</a></li> <!-- pierwsza pozycja podświetlona-->
                </ul>
            </div>
        </div>
    </nav>
      
      <!-- Jumbotron z przciskiem Zarejestrowania-->
      <div class="jumbotron" id="mainContainer">
      <h1>Follow my way ! </h1>
               
      <button type="button" class="btn btn-lg btn-primary btn-center moja1" data-target="#RegisterModal" data-toggle="modal">        Dołącz do nas !        <br>   </button>
      </div>     
      
      <!-- Login Form -->
      <form method="post" id="Loginform">
        
                <div class="modal" id="LoginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal">
                            &times;
                          </button>
                          <h4 id="myModalLabel">
                            Logowanie do konta 
                          </h4>
                      </div>
                          
                      <div class="modal-body">
                          <div id="loginmessage"></div> <!-- Login message for php file*/-->
                
                          <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                          </div>
                           <div class="form-group">
                            <label for="password" class="sr-only">Wybierz hasło:</label>
                            <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Hasło" maxlength="30">
                          </div>
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="rememberme" id="rememberme"> Zapamiętaj mnie </label>
                                    <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal"> Zapomniałem hasła </a>
                                </div>
                                
                          
                        <!--<label for="inquiry">
                          Your inquiry:</label><textarea class="form-control" rows="5" id="inquiry"> 
                        </textarea>--> 
                      </div>
                      <div class="modal-footer">
                        <input class="btn btn-success" name="Login" type="submit" value="Zaloguj się"> 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Anuluj
                        </button>
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#RegisterModal" data-toggle="modal">
                          Zarejestruj się
                        </button>
                      </div>
                  </div>
              </div>
              </div>
          </form>
      
      <!-- Register Form - modal in Boostramp--> 
          <form method="post" id="Registerform">
        
                <div class="modal" id="RegisterModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal">
                            &times;
                          </button>
                          <h4 id="myModalLabel">
                            Zarejestruj się za darmo! 
                          </h4>
                      </div>
                          
                      <div class="modal-body">
                          <div id="registermessage"></div> <!-- Sign up message for php file*/-->
                          <div class="form-group">
                            <label for="username" class="sr-only">Imię:</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Imię" maxlength="30">
                          </div>
                          <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" maxlength="50">
                          </div>
                           <div class="form-group">
                            <label for="password" class="sr-only">Wybierz hasło:</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Hasło" maxlength="30">
                          </div>
                           <div class="form-group">
                            <label for="password2" class="sr-only">Powtórz hasło:</label>
                            <input class="form-control" type="password" name="password2" id="password2" placeholder="Powtórz Hasło " maxlength="30">
                          </div>
                          
                        <!--<label for="inquiry">
                          Your inquiry:</label><textarea class="form-control" rows="5" id="inquiry"> 
                        </textarea>-->
                      </div>
                      <div class="modal-footer">
                        <input class="btn btn-success" name="Register" type="submit" value="Zarejestruj się"> 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Anuluj
                        </button>
                      </div>
                  </div>
              </div>
              </div>
          
          </form>
      
      
      <!-- Forgot password -->
      
      <form method="post" id="forgotpasswordform">
        
                <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal">
                            &times;
                          </button>
                          <h4 id="myModalLabel">
                            Zapomniałeś hasła? Wprowadź swój adres email
                          </h4>
                      </div>
                          
                      <div class="modal-body">
                          <div id="forgotpasswordmessage"></div> <!-- forgot password message for php file*/-->
                
                          <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                          </div>
                          
                      </div>
                      <div class="modal-footer">
                        <input class="btn btn-success" name="Login" type="submit" value="Wyślij"> 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Anuluj
                        </button>
                          <button type="button" class="btn btn-default pull-left" >
                          Zarejestruj się
                        </button>
                      </div>
                  </div>
              </div>
              </div>
          </form>
      
      
      
      
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