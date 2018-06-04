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
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui1.gif',
                title: 'nui1',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui1.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui2.gif',
                title: 'nui2',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui2.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui3.gif',
                title: 'nui3',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui3.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui4.gif',
                title: 'nui4',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui4.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui5.gif',
                title: 'nui5',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui5.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui6.gif',
                title: 'nui6',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui6.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui7.gif',
                title: 'nui7',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui7.gif',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui8.gif',
                title: 'nui8',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/doi-nui/nui8.gif',
                url: ''
            },
        ]
    });
});