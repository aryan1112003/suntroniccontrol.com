$(document).ready(function() {
    // Contact form submission
    $('#contact-form').submit(function(e) {
      e.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var message = $('#message').val();
      $.ajax({
        type: 'POST',
        url: 'contact.php',
        data: {
          name: name,
          email: email,
          message: message
        },
        success: function(data) {
          console.log(data);
          $('#contact-form').trigger('reset');
        }
      });
    });
  
    // Owl Carousel initialization
    $(".logo-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  
    $(".testimonial-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });

// Add event listeners to the buttons
$(".btn").on("click", function() {
    // Add animation to the button
    $(this).addClass("animated bounce");
    // Remove animation after 1 second
    setTimeout(function() {
      $(this).removeClass("animated bounce");
    }, 1000);
  });
  
  // Add animation to the hero section
  $(".hero").addClass("animated fadeIn");
  
  // Add animation to the about us section
  $(".about-us").addClass("animated fadeInUp");
  
  // Add animation to the services section
  $(".services").addClass("animated fadeInUp");
  
  // Add animation to the trusted by section
  $(".trusted-by").addClass("animated fadeInUp");
  
  // Add animation to the testimonials section
  $(".testimonials").addClass("animated fadeInUp");
  
  // Add animation to the products section
  $(".products").addClass("animated fadeInUp");
  
  // Add animation to the contact section
  $(".contact").addClass("animated fadeInUp");