var deleteLink = function(id)
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
				'tipo': 'links'
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('links');
			}
		});
	}	
}

var insertLink = function()
{
	var nome = $("#nome").val();
	var link = $("#link").val();
	var descricao = $("#descricao").val();
	
	if (nome != "" &&  link != "")
	{
		$.ajax(
		{
			type: 'POST',
			url: '../api/insert/insert_contents.php',
			data: 
			{ 
				'tipo': 'links',
				'nome': nome,
				'link': link,
				'descricao': descricao
			},
						
			success: function(msg)
			{
				alert(msg);
				loadOnContainer('links');
			}
		});
	}
	else
	{
		alert("Por favor, digite corretamente!");
	}
}

$('#datatable_links tfoot th').each(function() {

	var title = $(this).text();
	if (title != "") $(this).html('<input type="text" class="tpesquisa" placeholder="Pesquisar ' + title + '" style="width:100%"/>');

});

var table_gerenciar = $('#datatable_links').DataTable({
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
		"url" : "./api/select/select_contents.php?tipo=links",
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
				return '<p style="overflow: hidden;" value="'+ row.link + '">'+ row.link + '</p>';
			}
		},

        {"mRender": function ( data, type, row ) 
			{
				return '<p style="overflow: hidden;" value="'+ row.descricao + '">'+ row.descricao + '</p>';
			}
		},
		
		{"mRender": function ( data, type, row ) 
			{
				return '<div style="width: fit-content; display: table;"><button type="button" class="btn btn-danger" onclick="deleteLink('+ row.id +')">Excluir</button></div>';
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