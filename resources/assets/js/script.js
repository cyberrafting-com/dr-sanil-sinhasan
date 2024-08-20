// For fixed Navigation
$(window).scroll(function(){
  if ($(this).scrollTop() > 40) {
    $('.navbar').addClass('fixed-top');
  }
 else {
  $('.navbar').removeClass('fixed-top');
	}
});

$('#sec-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

$('#sec-service').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:3
        }
    }
});


$(function(){
  var url = window.location;
// Will only work if string in href matches with location
$('.navbar1 .navbar-nav li a[href="'+ url +'"]').parent().removeClass('active');

// Will also work for relative and absolute hrefs
$('.navbar1 .navbar-nav li a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
 // $(this).addClass('active');

})


// The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
$('.moreless-button').click(function() {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});

// document.addEventListener("DOMContentLoaded", () => {
//  function counter(id, start, end, duration) {
//   let obj = document.getElementById(id),
//   current = start,
//   range = end - start,
//   increment = end > start ? 1 : -1,
//   step = Math.abs(Math.floor(duration / range)),
//   timer = setInterval(() => {
//     current += increment;
//     obj.textContent = current;
//     if (current == end) {
//      clearInterval(timer);
//     }
//   }, step);
//  }
//  counter("count-1", 0,  10000, 500);
//  counter("count-2", 100, 8, 1000);
//  counter("count-3", 100, 10, 500);
//  counter("count-4", 500, 200, 1000);
// });

const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});

