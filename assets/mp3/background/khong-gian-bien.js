        $(document).ready(function() {
        	$.supersized({
        		// Functionality
        		slide_interval: 12000, // Length between transitions
        		transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        		transition_speed: 1000, // Speed of transition
        		// Components
        		slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        		slides: [ // Slideshow Images
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien1.gif',
        				title: 'bien1',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien1.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien2.gif',
        				title: 'bien2',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien2.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien3.gif',
        				title: 'bien3',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien3.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien4.gif',
        				title: 'bien4',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien4.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien5.gif',
        				title: 'bien5',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien5.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien6.gif',
        				title: 'bien6',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/bien/bien6.gif',
        				url: ''
        			},
        		]
        	});
        });