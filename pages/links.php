<?php ?>
<h3 class="text-center">LINKS ÚTEIS</h3>
<section class="content" style="margin: 1em;">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div style="display: inline-flex;">
                    <div class="insert-divs"><p class="insert-labels"><label for="item">Nome</label></p>
                    <input id="nome" name="nome" class="form-control"/></div>
                    <div  class="insert-divs"><p class="insert-labels"><label for="item">Link</label></p>
                    <input id="link" name="link" class="form-control"/></div>
                    <div  class="insert-divs"><p class="insert-labels"><label for="item">Descrição</label></p>
                    <input id="descricao" name="descricao" class="form-control"/></div>
                    <button class="btn btn-success insert-buttons" onclick="insertLink()">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-gray-900 display nowrap" id="datatable_links" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Link</th>
                    <th>Descrição</th>
                    <th width="0%">Ações</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Link</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="js\links.js"></script>