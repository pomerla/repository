<? 
session_start();require_once('data/array.php');require_once('data/logins.php');
if (($_SESSION['login']==$login) AND ($_SESSION['password'])==$password){ header("Location: /config");} else {
if (($scheme) && ($scheme != 'off')) $scheme = 'https'; else $scheme = 'http';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
     <title>Авторизация в конфигуратор v.<?= $config['ver']?> для <?= $_SERVER['SERVER_NAME']; ?></title>
<meta name="author" content="GreyGler" />
    <meta name="copyright" content="https://greygler.github.io" />
	 <link rel="shortcut icon" href="favicon.png" type="image/png">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-L/tgI3wSsbb3f/nW9V6Yqlaw3Gj7mpE56LWrhew/c8MIhAYWZ/FNirA64AVkB5pI" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
   <link href="css/signin.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>

  <body style="margin-top: 0px;">

    <div class="container">
	<div class="page-header text-center">
  <h1>Конфигуратор v. <?= $config['ver'];?><br><small><?= $scheme.'://'.$_SERVER['SERVER_NAME'].str_ireplace('/config/signin.php','', $_SERVER['PHP_SELF']); ?></small></h1>
</div>

      <form class="form-signin" role="form" action="options/autoring.php" method="POST">
        <h3 class="form-signin-heading">Авторизация</h3>
		<div class="form-group">
        <input type="text" class="form-control" placeholder="login" name="login" required autofocus>
		</div>
		<div class="form-group">
        <input type="password" class="form-control" placeholder="password" name="password" required>
		</div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
      </form>

    </div>
	<div class="navbar navbar-default navbar-fixed-bottom footer" role="navigation">
     <div class="container">
    
     <a class="navbar-brand footer" href="<?= $config['site_conf'] ?>">&copy; 2015-<?= date("Y")?> Конфигуратор для лендингов v.<?= $config['ver']?></a>
   
		
		<ul class="nav navbar-nav navbar-right">
      <li><a href="<?= $config['site_gg'] ?>"><?= $config['powered'] ?></a></li>
      
     </ul>
    
   </div>
  </div>
  </body>
</html>
<? } ?>