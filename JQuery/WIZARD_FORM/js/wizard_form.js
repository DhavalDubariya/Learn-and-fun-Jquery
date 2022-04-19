$(document).ready(function () {
  var index;
  var bool = false;
  $("#dob").datepicker({ maxDate: "-1d", yearRange: "2002:2012" });
  $(".teb").hide().first().show();
  $(".btn").not($(".btn").eq(4)).hide();
  $(".button").eq(0).css("color", "red");
  $("#hours").mask("00", { placeholder: "__" });
  $("#ipa").mask("099.099.099.099", { placeholder: "___.___.___.___" });
  $("#zip").mask("000-000", { placeholder: "___-___" });
  $("#money").mask("00,00,00,00,00,00,00,000", { reverse: true });
  $("#contact_no").mask("000-000-0000", { placeholder: "___-___-____" });
  // Tab Button Event
  $(".button").click(function () {
    index = $(this).index();
    $(".teb").not($(".teb").eq(index).show()).hide();
    $(".save").attr("disabled", false);
    $(".button").eq(index).css("color", "red");
    $(".button").not($(".button").eq(index)).css("color", "");
    savebutton();
    previousbutton();
    update_hide();
    return index;
  });

  // Save Button
  $(".save").click(function () {
    index = index == null ? 0 : index;
    nextIndex = index + 1;
    $(".teb").not($(".teb").eq(nextIndex).show()).hide();
    index++;
    $(".button").eq(nextIndex).css("color", "red");
    $(".button").not($(".button").eq(nextIndex)).css("color", "");
    savebutton();
    previousbutton();
    update_hide();
  });

  // Previous Button
  $(".previous").click(function () {
    prevIndex = index - 1;
    $(".teb").not($(".teb").eq(prevIndex).show()).hide();
    index--;
    $(".button").eq(prevIndex).css("color", "red");
    $(".button").not($(".button").eq(prevIndex)).css("color", "");
    savebutton();
    previousbutton();
    update_hide();
  });

  function savebutton() {
    index < $(".teb").length - 1 ? $(".save").show() : $(".save").hide();
  }

  function previousbutton() {
    index == 0 ? $(".previous").hide() : $(".previous").show();
  }

  function update_hide() {
    index == $(".teb").length - 1
      ? bool == true
        ? $(".update, .cancel").show() | $(".submit").hide()
        : $(".submit").show()
      : $(".update, .cancel, .submit").hide();
  }

  //Empty Value Of Input's
  function EmptyVal() {
    $(
      "input[type=text],input[type=number],input[type=date],input[type=email],textarea"
    ).val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );
    $(".teb").hide().first().show();
  }

  // Submit Button
  $(".submit").click(function () {
    GetValues();

    if ($("#form").valid() == true) {
      var index = $(".table_data").length + 1;

      $(".before").append(
        `<tr class="table_data" ><td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="hours">${hours}</td><td class="zip" >${zip}</td><td class="ip" >${ip}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="money" >${money}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td></tr>`
      );

      EmptyVal();
      $(".btn").hide();
      $(".save").show();
      return_index();
    }
  });

  //Update Button
  $(".update").click(function () {
    GetValues();

    if ($("#form").valid() == true) {

      index = parseInt($("#index").val());

      let html = `<td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="hours">${hours}</td><td class="zip" >${zip}</td><td class="ip" >${ip}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="money" >${money}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td>`;

      $(".table_data")
        .eq(parseInt(index - 1))
        .html(html);

      EmptyVal();
      $(".btn").not($(".btn").eq(4).show()).hide();
      bool = false;
      return_index();
      ".delete".attr("disabled", false);
    }
  });

  //Get Value Of Input's
  function GetValues() {
    f_name = $("#f_name").val();
    l_name = $("#l_name").val();
    gender = $("input[type='radio']:checked").val();
    email = $("#email").val();
    contact_no = $("#contact_no").val();
    dob = $("#dob").val();
    sport = $("#sport").val();
    about = $("textarea#message").val();
    terms = $("input[type='checkbox']:checked").val();
    hours = $("#hours").val();
    zip = $("#zip").val();
    ip = $("#ipa").val();
    money = $("#money").val();
    $("#terms").is(":checked") ? (terms = "set") : (terms = "off");

    $("#form").validate({
      ignore: [],
      rules: {
        firstname: {
          required: true,
          lettersonly: true,
        },
        lastname: {
          required:true,
          lettersonly: true,
        },
        gender: {
          required: true,
        },
        hours_vl: {
          required: true,
          rangelength: [1, 2],
          max: 24,
          min: 1,
        },
        zip_vl: {
          required: true,
          rangelength: [7, 7],
        },
        ipa_vl: {
          required: true,
          rangelength: [15, 15],
        },
        email: {
          required: true,
          email: true,
        },
        con_val: {
          required: true,
          rangelength: [12, 12],
        },
        money_vl: {
          required: true,
        },
        sport: {
          required: true,
        },
        message: "required",
        terms: {
          required: true,
        },
        date_pic: {
          required: true,
          rangelength: [10, 10],
        },
      },
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        gender: "Please select gender",
        hours_vl: "Enter Hours From 1 to 24",
        zip_vl: "Enter Zip Code",
        ipa_vl: "Enter Ip Address",
        email: "Enter Valid Email",
        con_val: "Enter 10 Digit Contact Number ",
        money_vl: "Enter Money",
        message: "required",
        terms: "Please agree with our terms and conditions",
      },
    });
  }

  //Cancle Button
  $(".cancel").click(function () {
    EmptyVal();
    $(".btn").not($(".btn").eq(4).show()).hide();
    bool = false;
    return_index();
    ".delete".attr("disabled", false);
  });

  // Edit Button
  $(document).on("click", ".edit", function () {
    var EditIndex = $(".edit").index(this);
    var new_index = $(".new_index").eq(EditIndex).text();
    var f_name = $(".f_name").eq(EditIndex).text();
    var l_name = $(".l_name").eq(EditIndex).text();
    var gender = $(".gender").eq(EditIndex).text();
    var email = $(".email").eq(EditIndex).text();
    var contact_no = $(".contact_no").eq(EditIndex).text();
    var dob = $(".dob").eq(EditIndex).text();
    var sport = $(".sport").eq(EditIndex).text();
    var about = $(".about").eq(EditIndex).text();
    var terms = $(".terms").eq(EditIndex).text();

    var zip = $(".zip").eq(EditIndex).text();
    var ip = $(".ip").eq(EditIndex).text();
    var money = $(".money").eq(EditIndex).text();

    $("#index").val(new_index);
    $("#f_name").val(f_name);
    $("#l_name").val(l_name);
    $("#email").val(email);
    $("#contact_no").val(contact_no);
    $("#dob").val(dob);
    $("#sport").val(sport);
    $("textarea#message").val(about);
    $("#hours").val($(".hours").eq(EditIndex).text());
    $("#money").val(money);
    $("#ipa").val(ip);
    $("#zip").val(zip);

    gender != "undefined"
      ? gender == "male"
        ? $("#male").prop("checked", true)
        : $("#female").prop("checked", true)
      : $("input[type=radio]").prop("checked", false);

    terms == "off"
      ? $("input[type=checkbox]").prop("checked", false)
      : $("input[type=checkbox]").prop("checked", true);
    $(".btn").not($(".btn").eq(4).show()).hide();
    bool = true;
    return_index();
    $(".delete").attr("disabled",true);
  });

  function return_index() {
    index = 0;
    return index;
  }
});

// Delete Button
$(document).on("click", ".delete", function () {
  confirm("Click ok to Delete Data") ? $(this).closest("tr").remove() : die();
  function die() {
    alert("Thank you for sticking around");
    return;
  }

  $(".before tr").each(function (i) {
    $($(this).find("td")[0]).html(i);
  });
});
