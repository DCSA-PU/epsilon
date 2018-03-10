$(document).ready(function()
{
	$("#add").click(function()
	{
		
		$(".cloning").clone().appendTo(".new");
	});



	$("#add1").click(function()
	{
		$(".cloning1").clone().insertAfter(".cloning1");
	});
});