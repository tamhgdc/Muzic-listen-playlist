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
        				image: 'http://3.bp.blogspot.com/-7vrJwCPklkg/T0MmfG0pASI/AAAAAAAAAH0/uBbmbbvI5Uo/s1600/city-hunter-artist-wallpaper-1.jpg',
        				title: 'City.Hunter',
        				thumb: 'http://3.bp.blogspot.com/-7vrJwCPklkg/T0MmfG0pASI/AAAAAAAAAH0/uBbmbbvI5Uo/s1600/city-hunter-artist-wallpaper-1.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh6.googleusercontent.com/-M-tf3NcQDn4/UV3_YvU8itI/AAAAAAAAAqA/I9NVwAVRS8k/s1600/City.Hunter.E01.HD.mkv.jpg',
        				title: 'City.Hunter.E01',
        				thumb: 'http://lh6.googleusercontent.com/-M-tf3NcQDn4/UV3_YvU8itI/AAAAAAAAAqA/I9NVwAVRS8k/s1600/City.Hunter.E01.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-FjVDkNdn6U8/UV3_bOt_CVI/AAAAAAAAAqI/Ou3w1hDjGQk/s1600/City.Hunter.E02.HD.mkv.jpg',
        				title: 'City.Hunter.E02',
        				thumb: 'http://lh3.googleusercontent.com/-FjVDkNdn6U8/UV3_bOt_CVI/AAAAAAAAAqI/Ou3w1hDjGQk/s1600/City.Hunter.E02.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-54DeUFty6E4/UV3_YZt648I/AAAAAAAAAp8/L5KBFdU5T44/s1600/City.Hunter.E03.HD.mkv.jpg',
        				title: 'City.Hunter.E03',
        				thumb: 'http://lh3.googleusercontent.com/-54DeUFty6E4/UV3_YZt648I/AAAAAAAAAp8/L5KBFdU5T44/s1600/City.Hunter.E03.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-9tzWzOMsRl4/UV3_dd3wZGI/AAAAAAAAAqU/tb3dNxVRrg0/s1600/City.Hunter.E04.HD.mkv.jpg',
        				title: 'City.Hunter.E04',
        				thumb: 'http://lh5.googleusercontent.com/-9tzWzOMsRl4/UV3_dd3wZGI/AAAAAAAAAqU/tb3dNxVRrg0/s1600/City.Hunter.E04.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-fzDAGRjoOKk/UV3_dybmZRI/AAAAAAAAAqc/9RGQCDBh2GU/s1600/City.Hunter.E05.HD.mkv.jpg',
        				title: 'City.Hunter.E05',
        				thumb: 'http://lh5.googleusercontent.com/-fzDAGRjoOKk/UV3_dybmZRI/AAAAAAAAAqc/9RGQCDBh2GU/s1600/City.Hunter.E05.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh6.googleusercontent.com/-zhWW3cG-qPI/UV3_eIVKhuI/AAAAAAAAAqg/AKS3BWDl8R4/s1600/City.Hunter.E06.HD.mkv.jpg',
        				title: 'City.Hunter.E06',
        				thumb: 'http://lh6.googleusercontent.com/-zhWW3cG-qPI/UV3_eIVKhuI/AAAAAAAAAqg/AKS3BWDl8R4/s1600/City.Hunter.E06.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-cfLhIgh6j2g/UV3_fJu3DcI/AAAAAAAAAqo/u4rs-k6t6CQ/s1600/City.Hunter.E07.HD.mkv.jpg',
        				title: 'City.Hunter.E07',
        				thumb: 'http://lh3.googleusercontent.com/-cfLhIgh6j2g/UV3_fJu3DcI/AAAAAAAAAqo/u4rs-k6t6CQ/s1600/City.Hunter.E07.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-LSC6nHeQ2kM/UV3_jdeetCI/AAAAAAAAAqw/oPkJyUYtwbk/s1600/City.Hunter.E08.HD.mkv.jpg',
        				title: 'City.Hunter.E08',
        				thumb: 'http://lh3.googleusercontent.com/-LSC6nHeQ2kM/UV3_jdeetCI/AAAAAAAAAqw/oPkJyUYtwbk/s1600/City.Hunter.E08.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh4.googleusercontent.com/-ugtDh_MgZ1Q/UV3_l3hF0WI/AAAAAAAAAq4/eqjD2Rm7U54/s1600/City.Hunter.E09.HD.mkv.jpg',
        				title: 'City.Hunter.E09',
        				thumb: 'http://lh4.googleusercontent.com/-ugtDh_MgZ1Q/UV3_l3hF0WI/AAAAAAAAAq4/eqjD2Rm7U54/s1600/City.Hunter.E09.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh6.googleusercontent.com/-k_wkBGxNO5w/UV3_qbfVjJI/AAAAAAAAArA/hsrDuqIc9ZE/s1600/City.Hunter.E10.HD.mkv.jpg',
        				title: 'City.Hunter.E10',
        				thumb: 'http://lh6.googleusercontent.com/-k_wkBGxNO5w/UV3_qbfVjJI/AAAAAAAAArA/hsrDuqIc9ZE/s1600/City.Hunter.E10.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh6.googleusercontent.com/-S8iROEVlTBE/UV3_sz87MNI/AAAAAAAAArI/7UkFBwkhqU8/s1600/City.Hunter.E11.HD.mkv.jpg',
        				title: 'City.Hunter.E11',
        				thumb: 'http://lh6.googleusercontent.com/-S8iROEVlTBE/UV3_sz87MNI/AAAAAAAAArI/7UkFBwkhqU8/s1600/City.Hunter.E11.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-NSXXaRBHDBs/UV3_wDbtkrI/AAAAAAAAArQ/ChSFYmn-Yik/s1600/City.Hunter.E12.HD.mkv.jpg',
        				title: 'City.Hunter.E12',
        				thumb: 'http://lh5.googleusercontent.com/-NSXXaRBHDBs/UV3_wDbtkrI/AAAAAAAAArQ/ChSFYmn-Yik/s1600/City.Hunter.E12.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh4.googleusercontent.com/-ImexYzzdQiE/UV3_xI3wa-I/AAAAAAAAArY/PjtvJeIgj9I/s1600/City.Hunter.E13.HD.mkv.jpg',
        				title: 'City.Hunter.E13',
        				thumb: 'http://lh4.googleusercontent.com/-ImexYzzdQiE/UV3_xI3wa-I/AAAAAAAAArY/PjtvJeIgj9I/s1600/City.Hunter.E13.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh6.googleusercontent.com/-brKr9Gr3T1c/UV3_x0ML8KI/AAAAAAAAAro/x97HIh7fKM4/s1600/City.Hunter.E14.HD.mkv.jpg',
        				title: 'City.Hunter.E14',
        				thumb: 'http://lh6.googleusercontent.com/-brKr9Gr3T1c/UV3_x0ML8KI/AAAAAAAAAro/x97HIh7fKM4/s1600/City.Hunter.E14.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-7qyNsRedZA0/UV3_x1j65jI/AAAAAAAAArk/K3dNehgcmp8/s1600/City.Hunter.E15.HD.mkv.jpg',
        				title: 'City.Hunter.E15',
        				thumb: 'http://lh5.googleusercontent.com/-7qyNsRedZA0/UV3_x1j65jI/AAAAAAAAArk/K3dNehgcmp8/s1600/City.Hunter.E15.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh4.googleusercontent.com/-j4t-Ii5jtyQ/UV3_ynKaF3I/AAAAAAAAAr4/nPMUq8Ik1mI/s1600/City.Hunter.E16.HD.mkv.jpg',
        				title: 'City.Hunter.E16',
        				thumb: 'http://lh4.googleusercontent.com/-j4t-Ii5jtyQ/UV3_ynKaF3I/AAAAAAAAAr4/nPMUq8Ik1mI/s1600/City.Hunter.E16.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-QYkb8Xoskek/UV3_zEwFjKI/AAAAAAAAAsE/wJAk_zL_f7o/s1600/City.Hunter.E17.HD.mkv.jpg',
        				title: 'City.Hunter.E17',
        				thumb: 'http://lh5.googleusercontent.com/-QYkb8Xoskek/UV3_zEwFjKI/AAAAAAAAAsE/wJAk_zL_f7o/s1600/City.Hunter.E17.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-_h0dzUO7jXY/UV3_zZQu9fI/AAAAAAAAAsA/-qny64_gRNo/s1600/City.Hunter.E18.HD.mkv.jpg',
        				title: 'City.Hunter.E18',
        				thumb: 'http://lh3.googleusercontent.com/-_h0dzUO7jXY/UV3_zZQu9fI/AAAAAAAAAsA/-qny64_gRNo/s1600/City.Hunter.E18.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh5.googleusercontent.com/-qGaj1RashTc/UV3_zm6f09I/AAAAAAAAAsM/Q_p86WF0Ykw/s1600/City.Hunter.E19.HD.mkv.jpg',
        				title: 'City.Hunter.E19',
        				thumb: 'http://lh5.googleusercontent.com/-qGaj1RashTc/UV3_zm6f09I/AAAAAAAAAsM/Q_p86WF0Ykw/s1600/City.Hunter.E19.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			}, {
        				image: 'http://lh3.googleusercontent.com/-rOWGslADfy8/UV3_z5PQ6sI/AAAAAAAAAsQ/VfK_OocmHzE/s1600/City.Hunter.E20End.HD.mkv.jpg',
        				title: 'City.Hunter.E20',
        				thumb: 'http://lh3.googleusercontent.com/-rOWGslADfy8/UV3_z5PQ6sI/AAAAAAAAAsQ/VfK_OocmHzE/s1600/City.Hunter.E20End.HD.mkv.jpg',
        				url: 'http://phimhp.com/phim-city-hunter.f3237.html'
        			},
        		]
        	});
        });