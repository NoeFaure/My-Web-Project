function switch_page() 
	{	
		var current_page = parseInt(document.getElementById("current_page").innerHTML);
		var total_page = parseInt(document.getElementById("total_page").innerHTML);

		if (current_page == 1)
			{
				document.getElementById("previous_page").classList.add("no-page");
			}
		if (current_page == total_page)
			{
				document.getElementById("next_page").classList.add("no-page");
			}
		
	}

window.onload = function() {
	switch_page();
};

//jQuery
$(document).ready(function(){
	
	// Display under titles list
	var is_under_titles_show = false;
	
	$(".under_title_list_click").click(function(){
    if(is_under_titles_show == false)
			{
				$(".all-under-titles").css("display","block");
				$(".article-content").css("display","none");
				$(".step-title").css("display","none");
				is_under_titles_show = true;
			}
		else
			{
				$(".all-under-titles").css("display","none");
				$(".article-content").css("display","block");
				$(".step-title").css("display","block");
				is_under_titles_show = false;
			}
	});
	
});