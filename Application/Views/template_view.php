<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<title>Главная</title> 
<link rel="stylesheet" href="./CSS/style.css" />
</head> 
<body><?php $content_view; ?>
<div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
</div> 
<div>
    <?php include 'application/views/'.$content_view; ?>
</div> 
<div>
  <?php include 'footer.inc.php' ?>
</div>
</body> 
</html>