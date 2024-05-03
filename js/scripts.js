$(document).ready(function () {
  var counter = 0;
  let step = 54;
  var currentDiv = 1;

  var indice = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': 'https://1001ghules.gwannon.com/indice.json',
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
  })();

  $("body>section h1, body>section h2, body>section h3")
  .not(".noindex")
  .each(function () {
    counter++;    
    if($(this).attr('id')) {

      var pageNumber = 0;
      var currentTitle = this.innerHTML.replace(/(<([^>]+)>)/gi, "");
      $.each(indice, function(i, item) {
        if (currentTitle == item.title) {
          pageNumber = item.page;
          indice[i].title = "";
        }
      });

      $("body>section:nth-of-type(3) div:nth-of-type("+currentDiv+")").append('<a href="#' + $(this).attr('id') + '" class="like' + $(this).prop("tagName") +
      '"><span>'+pageNumber+'</span>' + this.innerHTML.replace(/(<([^>]+)>)/gi, "") + '</a>');
    } else {

      $(this).attr('id', 'anchor' + counter);
      var pageNumber = 0;
      var currentTitle = this.innerHTML.replace(/(<([^>]+)>)/gi, "");
      $.each(indice, function(i, item) {
        if (currentTitle == item.title) {
          pageNumber = item.page;
          indice[i].title = "";
        }
      });

      
      $("body>section:nth-of-type(3) div:nth-of-type("+currentDiv+")").append('<a href="#anchor' + counter + '" class="like' + $(this).prop("tagName") +
        '"><span>'+pageNumber+'</span>' + this.innerHTML.replace(/(<([^>]+)>)/gi, "") + '</a>');
    }
    currentDiv = Math.floor(counter / step) + 1;
  });

  $('body').on('click', 'a[href^="#anchor"]', function () {
    console.log("--"+$(this).attr("href"));
    $('html,body').animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 'fast');
  });

  /* gototop */
  $("body>a:last-of-type").click(function () {
    $('html,body').animate({
      scrollTop: $("body>section:nth-of-type(3)").offset().top
    }, 'fast');
  });

  $(document).scroll(function () {
    if ($(document).scrollTop() > $(window).height()) {
      $("body>a:last-of-type").addClass("show");
    } else {
      $("body>a:last-of-type").removeClass("show");
    }
  });

  /* Aleatorio de tablas */
  $("table[data-dice]").click(function (e) {
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
  });

  //WordCount
  var cont = jQuery("body").html();
  cont = cont.replace(/<[^>]*>/g," ");
  cont = cont.replace(/\s+/g, ' ');
  cont = cont.trim();
  var n = cont.split(" ").length
  console.log(n+" words");

  //PageCount
  console.log($('.saltopagina').length+" pages");

});
