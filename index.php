<?php 
include "classes/translathor.php"; 
$t = new Translathor;
if($lang==''){
	$lang = 'es';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Translathor</title>
</head>

<body>
    <h3><?php echo $t->translate('Hola amigos','Hello friends',$lang); ?></h3>
    <p><?php echo $t->translate('Mi legumbre favorita es la papa','My favorite veggie is potato',$lang); ?></p>
</body>
</html>