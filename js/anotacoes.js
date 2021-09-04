var deleteAnotacao = function(id)
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
				'tipo': 'anotacoes'
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('anotacoes');
			}
		});
	}	
}

var insertAnotacao = function()
{
	var anotacao = $("#anotacao").val();
	
	if (anotacao != "")
	{
		$.ajax(
		{
			type: 'POST',
			url: '../api/insert/insert_contents.php',
			data: 
			{ 
				'tipo': 'anotacoes',
				'anotacao': anotacao
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('anotacoes');
			}
		});
	}
	else
	{
		alert("Por favor, digite corretamente!");
	}
}

$('#datatable_anotacoes tfoot th').each(function() {

	var title = $(this).text();
	if (title != "") $(this).html('<input type="text" class="tpesquisa" placeholder="Pesquisar ' + title + '" style="width:100%"/>');

});

var table_gerenciar = $('#datatable_anotacoes').DataTable({
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
		"url" : "./api/select/select_contents.php?tipo=anotacoes",
		"type": 'GET',
		"contentType": "application/json",
		dataSrc : ''
	},
	
	"columns" : 
	[ 
		{"mRender": function ( data, type, row ) 
			{
				return '<p style="overflow: hidden;" value="'+ row.anotacao + '">'+ row.anotacao + '</p>';
			}
		},
		
		{"mRender": function ( data, type, row ) 
			{
				return '<div style="width: fit-content; display: table;"><button type="button" class="btn btn-danger" onclick="deleteAnotacao('+ row.id +')">Excluir</button></div>';
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