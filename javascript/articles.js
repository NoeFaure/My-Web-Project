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