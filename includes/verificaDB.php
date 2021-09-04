<?php 

if (!file_exists('files'))
{
    mkdir('files', 0777);
}

if (!file_exists('files/db.json'))
{
    $db = array(
        "anotacoes" => [[
            "id" => 1,
            "anotacao" => "Essa e a primeira anotacao!"
        ],[
            "id" => 2,
            "anotacao" => "Essa e a segunda anotacao!"
        ]],

        "links" => [[
            "id" => 1,
            "nome" => "Google",
            "link" => "https://google.com",
            "descricao" => "O Professor"
        ],[
            "id" => 2,
            "nome" => "Youtube",
            "link" => "https://youtube.com",
            "descricao" => "O Cara das Propagandas"
        ]],
        
        "tarefas" => [[
            "id" => 1,
            "nome" => "Cliente X",
            "descricao" => "Revisar codigo do produto X",
            "dataHora" => date('d/m/Y', strtotime('+5 days'))
        ],[
            "id" => 2,
            "nome" => "Cliente X2",
            "descricao" => "Subir o App em Produção",
            "dataHora" => date('d/m/Y', strtotime('+10 days'))
        ]
    ]);

    $file = fopen('files/db.json', "w");
    fwrite($file, json_encode($db));
    fclose($file);
}

?>