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
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide1.jpg',
                title: 'Slide 1',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide1.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide2.jpg',
                title: 'Slide 2',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide2.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide3.jpg',
                title: 'Slide 3',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide3.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide4.jpg',
                title: 'Slide 4',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide4.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide5.jpg',
                title: 'Slide 5',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide5.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide6.jpg',
                title: 'Slide 6',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide6.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide7.jpg',
                title: 'Slide 7',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide7.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide8.jpg',
                title: 'Slide 8',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide8.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide9.jpg',
                title: 'Slide 9',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide9.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide10.jpg',
                title: 'Slide 10',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide10.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide11.jpg',
                title: 'Slide 11',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide11.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide12.jpg',
                title: 'Slide 12',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide12.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide13.jpg',
                title: 'Slide 13',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide13.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide14.jpg',
                title: 'Slide 14',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide14.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide15.jpg',
                title: 'Slide 15',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide15.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide16.jpg',
                title: 'Slide 16',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide16.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide17.jpg',
                title: 'Slide 17',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide17.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide18.jpg',
                title: 'Slide 18',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide18.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide19.jpg',
                title: 'Slide 19',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide19.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide20.jpg',
                title: 'Slide 20',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide20.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide21.jpg',
                title: 'Slide 21',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide21.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide22.jpg',
                title: 'Slide 22',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide22.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide23.jpg',
                title: 'Slide 23',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide23.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide24.jpg',
                title: 'Slide 24',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide24.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide25.jpg',
                title: 'Slide 25',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide25.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide26.jpg',
                title: 'Slide 26',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide26.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide27.jpg',
                title: 'Slide 27',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide27.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide28.jpg',
                title: 'Slide 28',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide28.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide29.jpg',
                title: 'Slide 29',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide29.jpg',
                url: ''
            }, {
                image: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide30.jpg',
                title: 'Slide 30',
                thumb: 'http://s3-ap-southeast-1.amazonaws.com/khuya/media/wallpapers/khong-gian-rung/slide30.jpg',
                url: ''
            },
        ]
    });
});