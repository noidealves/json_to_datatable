<?php 

if(isset($_POST['tipo']) && isset($_POST['id']))
{
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];
    $i = 0;

    $content = json_decode(file_get_contents('./../../files/db.json'), TRUE);

    foreach ($content[$tipo] as $data) 
    {
        if($data["id"] == $id)
        {
            unset($content[$tipo][$i]);
            $content[$tipo] = array_values($content[$tipo]);

            $file = fopen('./../../files/db.json', "w");
            fwrite($file, json_encode($content));
            fclose($file);

            echo 'Excluído com sucesso!';
            exit();
        }

        $i++;
    }

    echo 'Erro ao excluir!';
}
else
{
    echo 'Erro na solicitação!';
}

?>