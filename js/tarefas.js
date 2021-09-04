var deleteTarefa = function(id)
{
	var result = confirm("Deseja realmente excluir?");

	if (result) 
	{
		$.ajax(
		{
			type: 'POST',
			url: '../api/delete/delete_contents.php',
			data: 
			{ 
				'id': id,
				'tipo': 'tarefas'
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('tarefas');
			}
		});
	}	
}

var insertTarefa = function()
{
	var nome = $("#nome").val();
	var descricao = $("#descricao").val();
	var dataHora = $("#dataHora").val();
	
	if (nome != "" &&  dataHora != "" &&  dataHora != "Clique para selecionar Data e Hora")
	{
		$.ajax(
		{
			type: 'POST',
			url: '../api/insert/insert_contents.php',
			data: 
			{ 
				'tipo': 'tarefas',
				'nome': nome,
				'descricao': descricao,
				'dataHora': dataHora
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('tarefas');
			}
		});
	}
	else
	{
		alert("Por favor, digite corretamente!");
	}
}

$(function() {
	$('#dataHora').datetimepicker({
		ignoreReadonly: true,
		format: 'DD/MM/yyyy'
	});

	$('.input-group-append').click(function(){
		$('.form-control').trigger('focus');
	});
});

$('#datatable_tarefas tfoot th').each(function() {

	var title = $(this).text();
	if (title != "") $(this).html('<input type="text" class="tpesquisa" placeholder="Pesquisar ' + title + '" style="width:100%"/>');

});

var table_gerenciar = $('#datatable_tarefas').DataTable({
	"autoWidth": true,
	"order": [[0, "asc"]],

	dom: 'Bfrtip',
	pageLength: 100,
	
	destroy: true,
	"processing" : true,
	"paging": true,
	
	"searching": true,
	"ServerSide": true,
	"ajax" : {
		"url" : "./api/select/select_contents.php?tipo=tarefas",
		"type": 'GET',
		"contentType": "application/json",
		dataSrc : ''
	},
	
	"columns" : 
	[ 
		{"mRender": function ( data, type, row ) 
			{
				return '<p style="overflow: hidden;" value="'+ row.nome + '">'+ row.nome + '</p>';
			}
		},

        {"mRender": function ( data, type, row ) 
			{
				return '<p style="overflow: hidden;" value="'+ row.descricao + '">'+ row.descricao + '</p>';
			}
		},

        {"mRender": function ( data, type, row ) 
			{
				return '<p style="overflow: hidden;" value="'+ row.dataHora + '">'+ row.dataHora + '</p>';
			}
		},
		
		{"mRender": function ( data, type, row ) 
			{
				return '<div style="width: fit-content; display: table;"><button type="button" class="btn btn-danger" onclick="deleteTarefa('+ row.id +')">Excluir</button></div>';
			}
		},
	],
});

table_gerenciar.columns().every(function() 
{
	var that = this;

	$('.tpesquisa', this.footer()).on('keyup change', function() 
	{
		if (that.search() !== this.value) 
		{
			that.search(this.value).draw();
		}
	});
});