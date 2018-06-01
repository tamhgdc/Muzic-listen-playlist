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
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party1.jpg',
        				title: 'party1',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party1.jpg',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party2.jpg',
        				title: 'party2',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party2.jpg',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party3.jpg',
        				title: 'party3',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party3.jpg',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party4.gif',
        				title: 'party4',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party4.gif',
        				url: ''
        			},
        			{
        				image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party5.jpg',
        				title: 'party5',
        				thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/party/party5.jpg',
        				url: ''
        			},
        		]
        	});
        });