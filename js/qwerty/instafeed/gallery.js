$('#instafeed').ready(function(){
	
    var userFeed = new Instafeed({
		get: 'user',
		userId: '288634610',
		limit: 8,
		resolution: 'standard_resolution',
		accessToken: '288634610.1677ed0.4558a6427ad447fa855ca6e2dc14cd92',
		sortBy: 'most-recent',
		template: '<div id="insta-photo" class="wow fadeIn four wide column" data-wow-delay="0.25s"> <div class="img-content">  <a href="{{image}}" title="{{caption}}" data-lightbox="insta-gallery"> <img src="{{image}}" alt="{{caption}}" /> </a> </div> </div>'
	});
	userFeed.run();
	
});

//template: '<div id="insta-photo" class="four wide column"> <div class="img-content"> <div class="ui move up reveal"> <div class="visible content"> <a href="{{image}}" title="{{caption}}" data-lightbox="insta-gallery"> <img src="{{image}}" alt="{{caption}}" /> </a> </div> <div class="hidden content"> AAA </div> </div> </div> </div>'
