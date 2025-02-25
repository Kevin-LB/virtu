<?php
    $server_ip = $_SERVER['SERVER_ADDR'];
    $server_host = gethostname();

    echo "<html><head></head><body>";
    echo "Adresse IP du serveur Docker : $server_ip<br>";
    echo "Nom d'hôte du serveur Docker : $server_host<br>";
    echo "</body></html>";
?>
