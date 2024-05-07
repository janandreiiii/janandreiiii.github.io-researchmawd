$(document).ready(function() {
    $(window).scroll(function() {
      var windowHeight = $(window).height();
      var scrollPosition = $(window).scrollTop();
      var cardPosition = $('#animatedCard').offset().top;
  
      if (scrollPosition > cardPosition - windowHeight + 100) {
        $('#animatedCard').css('opacity', '1');
      }
    });
  });
  //
    // Function to simulate typing effect
    function typeEffect() {
      // Text to be typed
      var text = "Learn while you play. Anytime Anywhere";
      // Speed of typing in milliseconds
      var speed = 100;

      // Initialize counter
      var i = 0;

      // Interval function to simulate typing
      var typeInterval = setInterval(function() {
        // Append next character to the typing text
        document.getElementById("typing-text").innerHTML += text.charAt(i);
        // Increment counter
        i++;
        // Check if all characters are typed
        if (i === text.length) {
          // Stop the typing animation
          clearInterval(typeInterval);
        }
      }, speed);
    }

    // Call the typing effect function when the page is loaded
    window.onload = function() {
      typeEffect();
    };