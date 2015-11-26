$(document).ready(function()
{
	console.log('#'+buttonID);
	console.log('#'+gridID);
	$('#'+buttonID).click(function()
	{
    var id = $('#'+gridID).yiiGridView('getSelectedRows');
    $.ajax({
		type: 'POST',
    url : baseURL+'deleteall',
    data : {row_id: id},
    success : function(e) 
			{
				$('#'+gridID).closest('tr').remove(); 
			}
    });

  });
}); // end of document