$(document).ready(function(){	
	
	function ReIndex()
	{
		// new indexation
		var i = 0;
		$(".page-number").each(function() 
		{
			$(".page-number:eq(" + i + ")").html(i+1);
			$(".page-number-length").html($(".page-number-length").length);
			i = i + 1;
		});
	}
	
	function DeletePage()
	{
		var page = $(this).closest('.create-article-create-page-container');
		var numberOfPage = $(".page-number-length").length;

		if(numberOfPage != 1)
			{
				page.remove();
				ReIndex();
			}
	}
	
	// Add page
	$("#button-add-page").click(function()
	{
		var new_page = $(".create-article-create-page-container:last").clone();
		new_page.css('display','none');
		
		new_page.insertAfter($(this).closest('.create-article-create-page-container')).fadeIn();
		ReIndex();
		
  });
	
	$('body').on('click','.create-article-page-delete',DeletePage);
});