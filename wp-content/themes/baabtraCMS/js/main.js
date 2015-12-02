jQuery(document).ready(function(){

	

	jQuery('.masonry-grid').masonry({
	  // options
	  itemSelector: '.item_prgrm'
	  //columnWidth: 200
	});

	jQuery(".item_prgrm").hover(function(){

		jQuery(this).find(".courseDetailsButton").show();
	},
	function(){
		jQuery(this).find(".courseDetailsButton").hide();

	});

});