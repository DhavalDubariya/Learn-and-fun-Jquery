$(document).ready(function () {
    $(".input_btn").click(function () {
      var index = $(".input_btn").index(this);
  
      var value_of_btn = $(".input_btn").eq(index).val();
  
      var value_of_input_btn = $("#input_cal").val();
  
      if (value_of_btn == "esc") {
        $("#input_cal").val("");
      } else if (value_of_btn == "back") {
          if(!(parseInt(parseFloat(value_of_input_btn)) == 0 && value_of_input_btn.length == 1))
          $("#input_cal").val(value_of_input_btn.slice(0, value_of_input_btn.length - 1));
        if (value.length == 1) $("#input_cal").val("0");
      }
      else if(value_of_btn == "root")
      {
        $("#input_cal").val(Math.sqrt(value_of_input_btn));
        
      }
      else {
        $("#input_cal").val(value_of_input_btn + value_of_btn);
      }
    });

    $(document).keydown(function (){
        $("#input_cal").focus();
    });
    
    //Esc Button
    $("#input_cal").keydown(function (event) {
      if (event.keyCode === 27) {
        $("#input_cal").val("");  
      }
      if (event.keyCode === 13) {
        var value_of_input_btn = $("#input_cal").val();
        var ans = eval(value_of_input_btn);
        $("#input_cal").val(ans);
      }
    });
  
    $(".btn_eq").click(function () {
      var value_of_input_btn = $("#input_cal").val();
      var ans = eval(value_of_input_btn);
      $("#input_cal").val(ans);
    });

  });
  