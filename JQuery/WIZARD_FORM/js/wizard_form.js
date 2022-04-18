$(document).ready(function () {
  var index;
  var bool = false;

  $(".teb").hide().first().show();
  $(".btn").not($(".btn").eq(4)).hide();

  // Tab Button Event
  $(".button").click(function () {
    index = $(this).index();
    $(".teb").not($(".teb").eq(index).show()).hide();
    $(".save").attr("disabled", false);
    savebutton();
    previousbutton();
    update_hide();
    return index;
  });

  // Save and Next Button Event
  $(".save").click(function () {
    index = index == null ? 0 : index;
    nextIndex = index + 1;
    $(".teb").not($(".teb").eq(nextIndex).show()).hide();
    index++;
    savebutton();
    previousbutton();
    update_hide();
  });

  // Previous Button Event
  $(".previous").click(function () {
    prevIndex = index - 1;
    $(".teb").not($(".teb").eq(prevIndex).show()).hide();
    index--;
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
    $("input[type=text],textarea").val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );
    $(".teb").hide().first().show();
  }

  // Submit Button
  $(".submit").click(function () {
    var index = $("tr").length;
    GetValues();

    $(".before").append(
      `<tr class="table_data" ><td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td></tr>`
    );

    EmptyVal();
    $(".btn").hide();
    $(".save").show();
    return_index();
  });

  //Update Button
  $(".update").click(function () {
    GetValues();

    var index = $("tr").length;

    index = parseInt($("#index").val());

    let html = `<td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td>`;
    console.log(html);
    $(".table_data").eq(parseInt(index - 1)).html(html);

    EmptyVal();
    $(".btn").not($(".btn").eq(4).show()).hide();
    bool = false;
    return_index();
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

    $("#terms").is(":checked") ? (terms = "set") : (terms = "off");
  }

  //Cancle Button
  $(".cancel").click(function () {
    EmptyVal();
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

    $("#index").val(new_index);
    $("#f_name").val(f_name);
    $("#l_name").val(l_name);
    $("#email").val(email);
    $("#contact_no").val(contact_no);
    $("#dob").val(dob);
    $("#sport").val(sport);
    $("textarea#message").val(about);

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
  });

  function return_index() {
    index = 0;
    return index;
  }
});

// Delete Button
$(document).on("click", ".delete", function () {
  confirm("Click ok to Delete Data") ? ($(this).closest("tr").remove()) : die();
  $(".before tr").each(function (i) {
    $($(this).find("td")[0]).html(i);
  });
});

function die()
{
  alert("Thank you for sticking around");
  return; 
}