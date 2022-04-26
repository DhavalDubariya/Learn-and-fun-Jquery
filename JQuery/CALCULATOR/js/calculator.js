$(document).ready(function () {

  var string_index;

  $(".input_cal").keydown(function (event) {
    string_index = event.target.selectionStart;
    console.log(string_index)
  });

  $(".input_cal").click(function (event) {
    console.log(event.target.selectionStart)
  });

  $(".input_cal").keypress(function (event) {
    event.preventDefault();
  });
  

  $("body").keydown(function (event) {
    
    var new_string = $(".input_cal").val();
    // console.log(event.keyCode)
    if (event.keyCode == 13) 
    {
      calculator();
      return;
    }
    // console.log(event.keyCode);
    if (event.keyCode === 110) {
      new_string += ".";
    }
    else if(event.keyCode === 116)
    {
      this.location.reload();
    } 
    else if (event.keyCode === 107 || event.keyCode === 187) {
      new_string += "+";
    } else if (event.keyCode === 109 || event.keyCode === 189) {
      new_string += "-";
    } else if (event.keyCode === 106  || event.keyCode === 56 && event.shiftKey) {
      new_string += "x";
    } else if (event.keyCode === 111 || event.keyCode === 191) {
      new_string += "÷";
    } else if (event.keyCode === 53 && event.shiftKey == true) {
      new_string += "%";
    } else if (event.keyCode === 57 && event.shiftKey == true) {
      new_string += "(";
    } else if (event.keyCode === 48 && event.shiftKey == true) {
      new_string += ")";
    }
    else if (event.keyCode === 48 && event.shiftKey == true) {
      new_string += ")";
    }  
    else if (event.keyCode == 8)
    {
      event.preventDefault();
      var backspace = $(".input_cal").val();
      new_string = backspace.substr(0, backspace.length - 1);
      $(".input_cal").val(new_string);
    } 
    else if (event.keyCode == 27)
    {
      new_string = $("#input_cal").val("");
      return;
    } 
    else if (event.keyCode >= 96 && event.keyCode <= 105) {
      new_string += String.fromCharCode(event.keyCode - 48);
    }
    else if(event.keyCode >= 48 && event.keyCode <= 57)
    {
      new_string += String.fromCharCode(event.keyCode);
    }
    $("#input_cal").val(new_string);
  });

  function backspace() {
    var backspace = $(".input_cal").val();
    var back = backspace[string_index];
    console.log(back)
    index = backspace.substr(0, backspace.length - 1);
    $(".input_cal").val(index);
  }

  $(".input_btn").click(function () {
    var index = $(".input_btn").index(this);
    var value_of_btn = $(".input_btn").eq(index).val();

    var value_of_input_btn = $("#input_cal").val();
    if (value_of_btn == "esc") {
      $("#input_cal").val("");
    } else if (value_of_btn == "back") {
      backspace();
    }else if(value_of_btn == "ans"){
      calculator();
      return;
    }
    else {
      $("#input_cal").val(value_of_input_btn + value_of_btn);
    }
  });

  //Esc Button
  $("#input_cal").keydown(function (event) {
    if (event.keyCode == 27) {
      $("#input_cal").val("");
    }
    if (event.keyCode === 13) {
      calculator();
    }
  });
  
  $(".btn_eq").click(function (){
    calculator();
  });


  function calculator() {
    try {
      var text = $("#input_cal").val();
      // text =  text.replace(/^0+/,'')
      var multiply = text.replace(/x/g, "*");
     
      for(let i=0;i<multiply.length;i++)
      {
        if(multiply[i]=="÷" && multiply[i+1]=="÷")
        {
          throw "Malformed expression";
        }
      }

      var division = multiply.replace(/÷/g, "/");
      var squre = division.replace(/²/g, "**2 ");
      value_of_input_btn = squre.replace(/√/g, "**0.5 ");

      
      // console.log(value_of_input_btn);
      var ans = eval(value_of_input_btn);
      if (text == "NaN") {
        throw "Malformed expression";
      }
      if (text == "Infinity") {
        throw "Division by zero is undefined";
      }
      $("#input_cal").val(ans);
    } catch (e) {
      if (e instanceof SyntaxError) {
        $("#input_cal").val("Malformed Expression");
      } else {
        $("#input_cal").val(e);
      }
    }
  }
});
