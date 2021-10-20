var height_content = $(".right-pane")[0].scrollHeight;

// scroll the right pane all the way to the bottom
$(".right-pane").scrollTop( height_content);

// The problem was that the scrolling event of the left pane would also trigger
// the scrolling event of the right pane. The code for the inverted scroll was
// thereby executed twice, resulting in a lag

// I've added some code to prevent that. So now, when you scroll the left pane,
// only the invert code for the right pane is executed and vice versa

// these two variables are needed to keep track of which pane is being scrolled
var leftScrolling   = false;
var rightScrolling  = false;

var timer = null;

$(".left-pane").on("scroll",function(){
    // this code is executed when we scroll the left pane

    // only to this when the rightPane is not being scrolled
    if (!rightScrolling) {

      // signify that we are scrolling the left pane
      leftScrolling = true;

      // set the scroll position of the right pane to the reverse of the scroll-
      // position of this pane
      var h = height_content - $(".left-pane").scrollTop() - $(".left-pane").height();
      $(".right-pane").scrollTop( h );

      // this code resets the leftScrolling indicator after 150 milliseconds so
      // that scrolling the other pane becomes possible again
      if(timer !== null) {
        clearTimeout(timer);
      }
      timer = setTimeout(function() {
          leftScrolling = false;
      }, 150);
    }


});


$(".right-pane").on("scroll",function(){
    // this code is executed when we scroll the right pane

    // only to this when the leftPane is not being scrolled
    if (!leftScrolling) {

      // signify that we are scrolling the right pane
      rightScrolling = true;

      // set the scroll position of the left pane to the reverse of the scroll-
      // position of this pane
      var h = height_content - $(".right-pane").scrollTop() - $(".right-pane").height();
      $(".left-pane").scrollTop( h )

      // this code resets the rightScrolling indicator after 150 milliseconds so
      // that scrolling the other pane becomes possible again
      if(timer !== null) {
        clearTimeout(timer);
      }
      timer = setTimeout(function() {
          rightScrolling = false;
      }, 150);
    }

});

