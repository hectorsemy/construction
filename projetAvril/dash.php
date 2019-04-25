<?php
  session_start();
  require 'traitement/database.php';
  $db = Database::Connect();
  $user = $db -> prepare ("SELECT * FROM user WHERE ID=?");
  $user ->execute (array($_SESSION['ID']));
  $afficher = $user -> fetch();
?> 


<!DOCTYPE html>
<html>
<head>
	 <title>dash</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="admin/css/bootstrap.css">
     <script src="admin/css/bootstrap.js"></script> 
     <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="dash.css">
</head>

<body >
	<!--bar de navigation -->
    <!--bar de navigation -->
 <nav class="navbar navbar-fixed-top" id="navbarfixe">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-right" id="lien-inscription" style="margin-left:1300px">
      <li><a href="connexion.php" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
    </ul>
  </div>
</nav>

 
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
       
        <?php echo 'Bienvenue'.' '.'Mr'.' '. $afficher['prenom'].' '.$afficher['nom'];?>
        <h1 class="text-logo" style="margin-top: 300px;"></span>  <span class="glyphicon glyphicon-wrench"></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong> Mon profil </strong></h1>
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>transaction1</th>
                      <th>transaction2</th>
                      <th>transaction3</th>
                      <th>transaction4</th>
                      <th>transaction5</th>
                      <th>transaction6</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                     <?php  
                    

                     
                     ?>
                      <tr>
                            <td><?php echo '......'; ?></td>
                            <td><?php echo '......'; ?></td>
                            <td><?php echo '......'; ?></td>
                            <td><?php echo '.....'; ?></td>
                            <td><?php echo '......'; ?></td>
                            <td width=300>
                           <button> <a class="btn btn-default" href="" ><span class="glyphicon glyphicon-eye-open"></span> VOIR PLUS</a>
                         
                     </button>
                            </td>
                     </tr>
                      
                  </tbody>
                 
                    
                 
                </table>
            </div>
        </div>
    </body>

</html>