<?php

$visitas = isset($_COOKIE['contador']) ? $_COOKIE['contador'] : 0;
$visitas++;
setcookie("contador", $visitas, time() + 3600);
?>
<h1>Ha visitado esta página <?php echo $visitas; ?> veces.</h1>
<p>Refresque la página para que aumente el contador.</p>