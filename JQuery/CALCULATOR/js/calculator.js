$(document).ready(function () {
 
  $("body").click(function () {
      $(".input_cal").focus();
  });

  $(".input_btn").click(function () {
    var index = $(".input_btn").index(this);

    var value_of_btn = $(".input_btn").eq(index).val();

    var value_of_input_btn = $("#input_cal").val();
    if (value_of_btn == "esc") {
      $("#input_cal").val("");
    } 
    else if (value_of_btn == "back") {
      if (
        !(
          parseInt(parseFloat(value_of_input_btn)) == 0 &&
          value_of_input_btn.length == 1
        )
      )
        $("#input_cal").val(
          value_of_input_btn.slice(0, value_of_input_btn.length - 1)
        );
      if (value.length == 1) $("#input_cal").val("0");
    }else {
      $("#input_cal").val(value_of_input_btn + value_of_btn);
    }
  });

  //Esc Button
  $("#input_cal").keydown(function (event) {
    if (event.keyCode === 27) {
      $("#input_cal").val("");
    }
    if (event.keyCode === 13) {
      try
      {
      var text = $("#input_cal").val();
      var multiply = text.replace(/x/gi, "*");
      var division = multiply.replace(/÷/gi, "/");
      var squre = division.replace(/²/gi, "**2 ");
  
      value_of_input_btn = squre.replace(/√/gi,"**0.5 ");
        
      console.log(value_of_input_btn);
      if(ans == "Infinity") {throw "Division by zero is undefined";}
      var ans = eval(value_of_input_btn);
      $("#input_cal").val(ans);
      }
      catch (e) 
      {
        if(e instanceof SyntaxError)
        {
          $("#input_cal").val("Malformed Expression");
        }
        else
        {
          $("#input_cal").val(e);
        }
      }
      
    }
  });

  $(".btn_eq").click(function () {
    try
    {
    var text = $("#input_cal").val();
    var multiply = text.replace(/x/gi, "*");
    var division = multiply.replace(/÷/gi, "/");
    var squre = division.replace(/²/gi, "**2 ");

    value_of_input_btn = squre.replace(/√/gi,"**0.5 ");

    // console.log(value_of_input_btn);
    if(ans == "Infinity") {throw "Division by zero is undefined";}
    var ans = eval(value_of_input_btn);
    $("#input_cal").val(ans);
    }
    catch (e) 
    {
      if(e instanceof SyntaxError)
      {
        $("#input_cal").val("Malformed Expression");
      }
      else
      {
        $("#input_cal").val(e);
      }
    }
    
    
  });
});
