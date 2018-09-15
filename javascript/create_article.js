$(document).ready(function(){
	
	// Add page
	$("#button-add-page").click(function()
	{
		var new_page = $(".create-article-create-page-container:last").clone();
		new_page.css('display','none');
		
		new_page.insertAfter($(this).closest('.create-article-create-page-container')).fadeIn();
		
		var i = 0;
		$(".page-number").each(function() 
		{
			$(".page-number:eq(" + i + ")").html(i+1);
			$(".page-number-length").html($(".page-number-length").length);
			i = i + 1;
		});
  });
});