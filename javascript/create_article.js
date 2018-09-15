$(document).ready(function(){
	
	// Add page
	$("#button-add-page").click(function()
	{
		var new_page = $(".create-article-create-page-container:last").clone();
		new_page.css('display','none');
		
		new_page.insertAfter($(this).closest('.create-article-create-page-container')).fadeIn();
  });
});