$(document).ready(function () {
  var counter = 0;
  let step = 64;
  var currentDiv = 1;

  $("body>section h1, body>section h2, body>section h3")
    .not(".noindex")
    .each(function () {
      counter++;    
      $(this).attr('id', 'anchor' + counter);
      $("body>section:nth-of-type(3) div:nth-of-type("+currentDiv+")").append('<a href="#anchor' + counter + '" class="like' + $(this).prop("tagName") +
        '">' +
        this.innerHTML.replace(/(<([^>]+)>)/gi, "") + '</a>');
      currentDiv = Math.floor(counter / step) + 1;
    });
   
    $('a[href^="#"]').not('.likeH1, .likeH2, .likeH3').click(function (e) {
      e.preventDefault();
      console.log("*[data-scroll='"+$(this).attr("href")+"']");
      $('html,body').animate({
        scrollTop: $('*[data-scroll="'+$(this).attr("href")+'"]').offset().top
      }, 'fast');
    });

  /*$("body>a:last-of-type").click(function () {
    $('html,body').animate({
      scrollTop: $("body>section:nth-of-type(2)").offset().top
    }, 'fast');
  });*/

  /*$(document).scroll(function () {
    if ($(document).scrollTop() > $(window).height()) {
      $("body>a:last-of-type").addClass("show");
    } else {
      $("body>a:last-of-type").removeClass("show");
    }
  });*/

  /* Aleatorio de tablas */
  /*$("table[data-dice]").click(function (e) {
    $("tbody tr").removeClass("random");
    let rand = Math.floor(Math.random() * parseInt($(this).data("dice")));
    var count = 0;
    console.log(rand + 1);
    $("tbody tr", this).each(function () {
      if ($(this).data("dice")) {
        if (rand >= count && rand < (count + parseInt($(this).data("dice")))) {
          $(this).addClass("random");
          $('html,body').animate({
            scrollTop: $(this).offset().top
          }, 'fast');
        }
        count = count + parseInt($(this).data("dice"));
      } else {
        if (rand == count) {
          $(this).addClass("random");
          $('html,body').animate({
            scrollTop: $(this).offset().top
          }, 'fast');
        }
        count++;
      }
    });
  });*/
});

function ucfirst(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}