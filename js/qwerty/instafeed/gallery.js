$('#instafeed').ready( async function(){
	
    var userFeed = await new Instafeed({
		get: 'user',
		userId: '288634610',
		limit: 8,
		resolution: 'standard_resolution',
		accessToken: '288634610.1677ed0.4558a6427ad447fa855ca6e2dc14cd92',
		sortBy: 'most-recent',
		template: '<a href={{image}} data-lightbox="insta-image" class="ui centered card"> <div class="cent-align"> <div class="image"> <img src="{{image}}" alt="{{caption}}" class="ui medium centered image" style="max-height: 275px;"/> </div> </div> </a>'
	});
	userFeed.run();
	
});
