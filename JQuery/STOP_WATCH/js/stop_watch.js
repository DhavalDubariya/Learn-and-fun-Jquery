$(document).ready(function () {
  var timer;
  $("#resume,#restart").hide();

  // timer function
  function time(h, m, s, c) {
    timer = setInterval(function () {
      if (c < 99) {
        c++;
      } else {
        c = 0;
        if (s < 59) {
          s++;
        } else {
          s = 0;
          if (m < 59) {
            m++;
          } else {
            m = 0;
            if (h < 24) {
              h++;
            } else {
              c = s = m = h = 0;
              clearInterval(timer);
            }
          }
        }
      }
      $("#seconds").text(s);
      $("#c_seconds").text(c);
      $("#minute").text(m);
      $("#hours").text(h);
    }, 10);
  }

  //Start Button

  $("#start").click(function () {
    $("#start").attr("disabled", true);
    $("#pause,#stop").attr("disabled", false);
    $("#status").html("<p style='color:green' >RUNNING<p>");
    if ($("#start").text() == "RESTART") {
      $("#start").text("START");
    }
    var c = (s = m = h = 0);
    time(h, m, s, c);
  });

  //Pause Button

  $("#pause").click(function () {
    display();
    $("#status").html('<p style="color:blue">PAUSE<p>');
    $("#log").before(
      '<p class="log" style="color:blue">PAUSE AT   ' +
        h +
        "   :HH , " +
        m +
        "  :MM ," +
        s +
        "  :SS<p>"
    );
    $("#start").hide();
    $("#resume").show();
    $("#pause").attr("disabled", true);
    clearInterval(timer);
  });

  //Resume Button

  $("#resume").click(function () {
    $("#resume").hide();
    $("#stop,#start").show();
    $("#pause").attr("disabled", false);
    $("#start").attr("disabled", true);
    $("#status").html("<p style='color:green' > RESUME <p>");
    display();
    time(h, m, s, c);
  });

  function display() {
    h = $("#hours").text();
    m = $("#minute").text();
    s = $("#seconds").text();
    c = $("#c_seconds").text();
  }

  //Stop Button

  $("#stop").click(function () {
    $("#start").attr("disabled", false);
    $("#resume").hide();
    $("#start").show();
    $("#stop,#pause").attr("disabled", true);
    display();
    $("#log").before(
      '<p class="log" style="color:red">STOP AT   ' +
        h +
        "  :HH, " +
        m +
        "  :MM, " +
        s +
        "  :SS<p>"
    );
    clearInterval(timer);
    $("#status").html("<p style='color:red' >STOP<p>");
    $("#start").text("RESTART");
  });

  //Reset Button

  $("#reset").click(function () {
    $("#resume").hide();
    $("#start").text("START");
    $("#start").show();
    $("#pause,#stop,#start").attr("disabled", false);
    $(".log").empty();
    var h = (m = s = c = 0);
    clearInterval(timer);
    $("#hours,#minute,#seconds,c_seconds").text(0);
    $("#input").val("");
    $("#status").html("<p style='color:red' >Enter Time And Hit Start<p>");
  });
});
