$(document).ready(function(){
	$('.right.menu.open').on("click",function(e){
        e.preventDefault();
		$('.ui.vertical.menu').transition('fade left');
	});
    
	$('.ui.dropdown').dropdown();
});