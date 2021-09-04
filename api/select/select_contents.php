<?php 

if(isset($_GET['tipo']))
{
    echo json_encode(json_decode(file_get_contents('./../../files/db.json'), TRUE)[$_GET['tipo']]);
}

?>