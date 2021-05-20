$(".dugme").on("click", function(){
  $(".klizac").toggleClass("aktivan")
  if ($(".klizac").hasClass("aktivan"))
    {
      $("body").addClass("non-margin")
    } else {
      $("body").removeClass("non-margin")
    }
})

$(".dugme1").on("click", function(){
  $(".desno").toggleClass("aktivan")
  if ($(".desno").hasClass("aktivan"))
    {
      $("body").addClass("non")
    } else {
      $("body").removeClass("non")
    }
})
$(".toggle").on("click", function() {
  $(".toggle").parent().toggleClass('active');
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("Btn").style.display = "block";
    } else {
        document.getElementById("Btn").style.display = "none";
    }
}
function topFunction() {
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
}
