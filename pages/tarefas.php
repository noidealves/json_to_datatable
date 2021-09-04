<?php ?>
<h3 class="text-center">TAREFAS</h3>
<section class="content" style="margin: 1em;">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div style="display: inline-flex;">
                    <div class="insert-divs"><p class="insert-labels"><label for="item">Nome</label></p>
                    <input id="nome" class="form-control"/></div>
                    <div  class="insert-divs"><p class="insert-labels"><label for="item">Descrição</label></p>
                    <input id="descricao" class="form-control"/></div>
                    <div  class="insert-divs">
                        <p class="insert-labels"><label for="item">Data</label></p>
                        <div class='input-group date' id='datetimepicker1'>
                            <input id="dataHora" class="form-control" placeholder="Clique para selecionar a Data" readonly/>
                        </div>
                    </div>
                    <button class="btn btn-success insert-buttons" onclick="insertTarefa()">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-gray-900 display nowrap" id="datatable_tarefas" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th width="0%">Ações</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="js\tarefas.js"></script>