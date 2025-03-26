// TESTIMONIAL SLIDER

 jQuery(".testi-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 800,
    centerMode: true,
    autoplay: true,
    centerPadding: '500px',
    slidesToShow: 1,
    slidesToScroll: 1,
	pauseOnFocus: true,
    pauseOnHover: true,
    prevArrow: '<div class="slick-prev slick-arrow"><i class="fas fa-arrow-left"></i></div>',
    nextArrow: '<div class="slick-next slick-arrow"><i class="fas fa-arrow-right"></i></div>',
    responsive: [
    {
      breakpoint: 1700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '300px',
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		centerPadding: '200px',
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		centerPadding: '100px',
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		centerPadding: '70px',
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		centerPadding: '30px',
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// PROJECT SLIDER

jQuery(".project-slider").slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 800,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-prev slick-arrow"><i class="fas fa-arrow-left"></i></div>',
  nextArrow: '<div class="slick-next slick-arrow"><i class="fas fa-arrow-right"></i></div>',
  responsive: [
  {
    breakpoint: 1400,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 576,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
	  arrows: false,
	  dots: true,
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});

// TESTIMONIAL SLIDER
// 
jQuery(".testimonial-slider").slick({
  dots: true,
  infinite: true,
  arrows: true,
  speed: 800,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-prev slick-arrow"><i class="far fa-long-arrow-left"></i></div>',
  nextArrow: '<div class="slick-next slick-arrow"><i class="far fa-long-arrow-right"></i></div>',
  responsive: [
  {
    breakpoint: 1400,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 576,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
	  arrows: false,
	  dots: true,
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});

jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});

setTimeout(AOS.init, 100);
AOS.init({
  mobile:false,
  once: true,
});
window.addEventListener('load', AOS.refresh);


jQuery('.open-menu').click(function(){
	jQuery('.responsive-menu').addClass('active');
});


jQuery('.menu-close').click(function(){
	jQuery('.responsive-menu').removeClass('active');
});

jQuery('.responsive-links ul li').click(function(){
	jQuery(this).children('ul').slideToggle();
});

// document.querySelectorAll('.testi-icon').forEach(function(icon) {
//     icon.addEventListener('click', function() {
//         // Get the parent .testi-item
//         const testiItem = this.closest('.testi-item');
        
//         // Find the video inside the parent
//         const video = testiItem.querySelector('video');
        
//         if (video) {
//             // Play the video
//             video.play();
            
//             // Add controls after video starts playing
//             video.setAttribute('controls', 'controls');
//         }
        
//         // Hide the .testi-icon
//         this.style.display = 'none';
//     });
// });

// document.querySelectorAll('.testi-icon').forEach(function(icon) {
//     icon.addEventListener('click', function() {
//         // Get the parent .testi-item
//         const testiItem = this.closest('.comitted-vid-main');
        
//         // Find the video inside the parent
//         const video = testiItem.querySelector('video');
        
//         if (video) {
//             // Play the video
//             video.play();
            
//             // Add controls after video starts playing
//             video.setAttribute('controls', 'controls');
//         }
        
//         // Hide the .testi-icon
//         this.style.display = 'none';
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     // Keep track of the currently playing video
//     let currentlyPlayingVideo = null;

//     document.querySelectorAll('.testi-icon').forEach(function (icon) {
//         icon.addEventListener('click', function () {
//             console.log('Icon clicked:', icon); // Debugging log

//             // Get the parent .home-safe-vid
//             const testiItem = this.closest('.home-safe-vid');
//             if (!testiItem) {
//                 console.error("Parent element '.home-safe-vid' not found!");
//                 return;
//             }
//             console.log('Parent found:', testiItem); // Debugging log

//             // Find the video inside the parent
//             const video = testiItem.querySelector('video');
//             if (!video) {
//                 console.error("Video element not found inside '.home-safe-vid'!");
//                 return;
//             }
//             console.log('Video found:', video); // Debugging log

//             // Pause the currently playing video if it exists and is not the same video
//             if (currentlyPlayingVideo && currentlyPlayingVideo !== video) {
//                 console.log('Pausing currently playing video:', currentlyPlayingVideo); // Debugging log
//                 currentlyPlayingVideo.pause();
//                 currentlyPlayingVideo.removeAttribute('controls'); // Remove controls from the paused video
//                 const prevIcon = currentlyPlayingVideo.closest('.home-safe-vid').querySelector('.testi-icon');
//                 if (prevIcon) {
//                     prevIcon.style.display = 'block'; // Show the play icon again
//                 }
//             }

//             // Play the new video
//             video.play();
//             video.setAttribute('controls', 'controls'); // Add controls to the playing video
//             currentlyPlayingVideo = video; // Update the currently playing video
//             console.log('Now playing video:', video); // Debugging log

//             // Hide the .testi-icon for the current video
//             this.style.display = 'none';
//         });
//     });
// });

// Function to pause all videos
function pauseAllVideos() {
    // Select all videos on the page
    document.querySelectorAll('video').forEach(function(video) {
        // Pause the video and remove controls
        video.pause();
        video.removeAttribute('controls');
    });

    // Show all .testi-icons
    document.querySelectorAll('.testi-icon').forEach(function(icon) {
        icon.style.display = 'flex';
    });
}

// Add event listeners to all icons
document.querySelectorAll('.testi-icon').forEach(function(icon) {
    icon.addEventListener('click', function() {
        // Pause all other videos first
        pauseAllVideos();

        // Get the parent .testi-item or .comitted-vid-main
        const parentItem = this.closest('.testi-item, .comitted-vid-main, .home-safe-vid, .about-img');

        // Find the video inside the parent
        const video = parentItem.querySelector('video');

        if (video) {
            // Play the video
            video.play();

            // Add controls after video starts playing
            video.setAttribute('controls', 'controls');
        }

        // Hide the .testi-icon
        this.style.display = 'none';
    });
});


// horizontal-accordian

jQuery('.h-service-item').click(function(){
    jQuery('.h-service-item-box').removeClass('active');
    jQuery(this).closest('.h-service-item-box').addClass('active');
});

// loader-jquery

jQuery(document).ready(function () {
  setTimeout(function(){
      jQuery("#preloader").addClass('remove');
  }, 1000);
});

