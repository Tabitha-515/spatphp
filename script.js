function openNav() {
    document.getElementById("myNav").style.width = "25%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }




  (function($) {
    'use strict';

    $('.service-caro').owlCarousel({
        loop:false,
        margin:5,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    $('.test-caro').owlCarousel({
        autoplay:true,
        dots: true,
        loop:true,
        nav:false,
        items: 1
    })

    $('.mobile-menu').on('click', function() {
        $('.primary-menu ul').slideToggle();
    })

}) (jQuery)


function ajaxpost () {
    // (A) GET FORM DATA
    var form = document.getElementById("myForm");
    var data = new FormData(form);
   
    // (B) AJAX REQUEST
    // (B1) POST DATA TO SERVER, RETURN RESPONSE AS TEXT
    fetch("1c-server.html", { method:"POST", body:data })
    .then(res=>res.text())
   
    // (B2) SHOW MESSAGE ON SERVER RESPONSE
    .then((response) => {
      console.log(response);
      if (response == "OK") { alert("SUCCESSFUL!"); }
      else { alert("FAILURE!"); }
    })
   
    // (B3) OPTIONAL - HANDLE FETCH ERROR
    .catch((err) => { console.error(err); });
   
    // (C) PREVENT FORM SUBMIT
    return false;
  }