<h3 class="text-center">ANOTAÇÕES</h3>
<section class="content" style="margin: 1em;">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div style="display: inline-flex;">
                    <div  class="insert-divs"><p class="insert-labels"><label for="item">Anotação</label></p>
                    <input id="anotacao" name="anotacao" class="form-control"/></div>
                    <button class="btn btn-success insert-buttons" onclick="insertAnotacao()">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-gray-900 display nowrap" id="datatable_anotacoes" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Anotação</th>
                    <th width="0%">Ações</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anotações</th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="js\anotacoes.js"></script>