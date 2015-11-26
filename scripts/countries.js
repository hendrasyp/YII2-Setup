$(document).ready(function()
{
	$('#deleteAll').click(function()
	{
    var id = $('#grid-mtcountries').yiiGridView('getSelectedRows');
    $.ajax({
		type: 'POST',
    url : baseURL+'deleteall',
    data : {row_id: id},
    success : function(e) 
			{
				
				var x = $('#grid-mtcountries').closest('tr').remove(); 
			}
    });

  });
}); // end of document