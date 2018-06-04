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
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli1.jpg',
                title: 'ghibli1',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli1.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli2.jpg',
                title: 'ghibli2',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli2.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli3.jpg',
                title: 'ghibli3',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli3.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli4.jpg',
                title: 'ghibli4',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli4.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli5.jpg',
                title: 'ghibli5',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli5.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli6.jpg',
                title: 'ghibli6',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli6.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli9.jpg',
                title: 'ghibli9',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli9.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli10.jpg',
                title: 'ghibli10',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli10.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli11.jpg',
                title: 'ghibli11',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli11.jpg',
                url: ''
            },
            {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli12.jpg',
                title: 'ghibli12',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/ghibli/ghibli12.jpg',
                url: ''
            },
        ]
    });
});