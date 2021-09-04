<?php 

if(isset($_POST['tipo']))
{
    $content = json_decode(file_get_contents('./../../files/db.json'), TRUE);
    $success = false;
    
    if ($_POST['tipo'] == "anotacoes")
    {
        if(isset($_POST['anotacao']))
        {
            $anotacao = $_POST['anotacao'];
            
            $lastID = count($content['anotacoes']) > 0 ? intval($content['anotacoes'][count($content['anotacoes'])-1]['id']):0;
            $content['anotacoes'][count($content['anotacoes'])] = array('id' => $lastID + 1, 'anotacao' => $anotacao);

            $success = true;
        }
    }
    else if ($_POST['tipo'] == "links")
    {
        if(isset($_POST['nome']) && isset($_POST['link']) && isset($_POST['descricao']))
        {
            $nome = $_POST['nome'];
            $link = $_POST['link'];
            $descricao = $_POST['descricao'];

            $lastID = count($content['links']) > 0 ? intval($content['links'][count($content['links'])-1]['id']):0;
            $content['links'][count($content['links'])] = array('id' => $lastID + 1, 'nome' => $nome, 'link' => $link, 'descricao' => $descricao);

            $success = true;
        }
    }
    else if ($_POST['tipo'] == "tarefas")
    {
        if(isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['dataHora']))
        {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $dataHora = $_POST['dataHora'];

            $lastID = count($content['tarefas']) > 0 ? intval($content['tarefas'][count($content['tarefas'])-1]['id']):0;
            $content['tarefas'][count($content['tarefas'])] = array('id' => $lastID + 1, 'nome' => $nome, 'descricao' => $descricao, 'dataHora' => $dataHora);

            $success = true;
        }
    }

    $file = fopen('./../../files/db.json', "w");
    fwrite($file, json_encode($content));
    fclose($file);

    echo $success ? 'Inserido com sucesso!':'Erro ao inserir!';
    exit();
}

echo 'Erro na solicitação!';

?>