// new GSAP 3 code 
// https://codepen.io/GreenSock/pen/WNNNBpo

gsap.set(".ball", {xPercent: -50, yPercent: -50});

var ballactive = $(".ball");
var ball = document.querySelector(".ball");
var pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
var mouse = { x: pos.x, y: pos.y };
// var speed = 2;

var xSet = gsap.quickSetter(ball, "x", "px");
var ySet = gsap.quickSetter(ball, "y", "px");

window.addEventListener("mousemove", e => {    
  mouse.x = e.x;
  mouse.y = e.y;  
});

gsap.ticker.add(() => {
  // adjust speed for higher refresh monitors
//   var dt = Math.pow(10.0 - speed, gsap.ticker.deltaRatio());

  pos.x += (mouse.x - pos.x) / 9;
  pos.y += (mouse.y - pos.y) / 9;
  xSet(pos.x);
  ySet(pos.y);
	// active mousenter from another code
	$("a").on("mouseenter", function() {
		ballactive.addClass("active");
	});

	$("a").on("mouseleave", function() {
		ballactive.removeClass("active");
	});
});

// special thanks to Blake Bowen for most of the code.



// console.clear();

// var follower = $(".follow2");

// var posX = 0,
// 	posY = 0;

// var mouseX = 0,
// 	mouseY = 0;

// var h = document.innerHeight;

// // the speed of the cursor 0,12
// TweenMax.to({}, 0.012, {
// 	repeat: -1,
// 	onRepeat: function() {
// 		h = document.innerHeight;
// 		posX += (mouseX - posX) / 8;
// 		posY += (mouseY - posY) / 8;
// 		// / number means how restlessly its moving

// 		TweenMax.set(follower, {
// 			duration: 0.3,
// 			delay:0.2,
// 			ease: "back.out(2)",
// 			css: {    
// 				left: posX + 12,
// 				top: posY + 12
// 			}
// 		});

// 		// if(e.clientY > h / 2){
// 		// 	TweenMax.set(follower, {
// 		// 		duration: 0.3,
// 		// 		delay:0.2,
// 		// 		ease: "back.out(2)",
// 		// 		css: {    
// 		// 			left: posX + 12,
// 		// 			top: posY + 12
// 		// 		}
// 		// 	});
// 		// } else {
// 		// 	TweenMax.set(follower, {
// 		// 		duration: 0.3,
// 		// 		delay:0.2,
// 		// 		ease: "back.out(2)",
// 		// 		css: {    
// 		// 			left: posX + 150,
// 		// 			top: posY + 150
// 		// 		}
// 		// 	});
// 		// }
// 	}
// });

// $(window).on("mousemove", function(e) {
// 	mouseX = e.pageX;
// 	mouseY = e.pageY;
// });

// $(window).resize(function(e) {
// 	mouseX = e.pageX;
// 	mouseY = e.pageY;
// });

// $("a").on("mouseenter", function() {
// 	follower.addClass("active");
// });

// $("a").on("mouseleave", function() {
// 	follower.removeClass("active");
// });





// // $(function() {
// // 	$('#blocker').hover(function() {
// // 	  $('#cursor').css('display', 'none');
// // 	}, function() {
// // 	  $('#cursor').css('display', 'block');
// // 	});
// //   });
  

// //   $(function() {
// // 	$('#footer').hover(function() {
// // 	  $('#cursor').css('display', 'none');
// // 	}, function() {
// // 	  $('#cursor').css('display', 'block');
// // 	});
// //   });
  





