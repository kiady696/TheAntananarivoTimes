<!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: #e1eff8;  
    }  
    button {   
           background-color: #4CAF50;   
           width: 100%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
             }   
     form {   
            border: 3px solid #f1f1f1;   
        }   
     input[type=text]{   
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            display: inline-block;   
            border: 2px solid green;   
            box-sizing: border-box;   
        }  
     button:hover {   
            opacity: 0.7;   
        }   
      .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
         
     .container {   
            padding: 25px;   
            background-color: lightblue;  

        }   
    </style>   
    </head>    
    <body>    
        <center> <h1> Admin Login Form </h1> </center>   
          
            <div class="container">   
            <?php echo form_open('user/login'); ?>

                <label for="username">Nom d'Utilisateur</label>
                <input type="text" name="username" /><br />

                <label for="pwd">Mot de passe</label>
                <input type="text" name="pwd"/><br />

                <input type="submit" name="submit" value="Se Connecter" />

        

                <?php echo validation_errors(); ?>
                <h5> <?php if(ISSET($erreur_login)){
                                echo $erreur_login;
                            } ?> </h5>  
            </div>   
            </form>    
    </body>     
    </html>  




