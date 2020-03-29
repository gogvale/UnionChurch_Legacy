/**
*	Site-specific configuration settings for Highslide JS
*/
hs.graphicsDir = '_images/highslide/graphics/';

hs.outlineType = 'custom';

hs.captionEval = 'this.a.title';





// Add the slideshow controller

hs.addSlideshow({

	slideshowGroup: 'group1',

	interval: 5000,

	repeat: false,

	useControls: true,

	fixedControls: 'fit',

	overlayOptions: {

		opacity: 0.75,

		position: 'bottom center',

		offsetX: 0,

		offsetY: -10,

		hideOnMouseOut: true

	},

	thumbstrip: {

		mode: 'horizontal',

		position: 'bottom center',

		relativeTo: 'viewport'

	}



});



// gallery config object

var config1 = {

	slideshowGroup: 'group1',

	transitions: ['expand', 'crossfade']

};

