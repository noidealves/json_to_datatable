<?php include("includes/verificaDB.php"); ?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Json to Datatable</title>
        <meta name="description" content="Json to Datatable">

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/index.js"></script>

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"/> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="icon" href="img/json.png"/>

    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle pointer"><i class='bx bx-menu' id="header-toggle"></i></div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a onclick="loadOnContainer('sobre')" class="nav_logo pointer"> 
                        <i class='bx bx-layer nav_logo-icon'></i> 
                        <span class="nav_logo-name">Json to Datatable</span> 
                    </a>
                    <div class="nav_list"> 
                        <a onclick="loadOnContainer('tarefas')" class="nav_link pointer"> 
                            <i class='bx bx-task nav_icon'></i> 
                            <span class="nav_name">Tarefas</span> 
                        </a> 
                        <a onclick="loadOnContainer('anotacoes')" class="nav_link pointer"> 
                            <i class='bx bxs-spreadsheet nav_icon'></i> 
                            <span class="nav_name">Anotações</span> 
                        </a> 
                        <a onclick="loadOnContainer('links')" class="nav_link pointer"> 
                            <i class='bx bx-link nav_icon'></i> 
                            <span class="nav_name">Links Úteis</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="container">
        </div>
    </body>
</html>