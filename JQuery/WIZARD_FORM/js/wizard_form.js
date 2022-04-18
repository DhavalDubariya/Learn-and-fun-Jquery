$(document).ready(function () {
  $(".update,.cancel").hide();

  //tebs
  $(".teb").hide().first().show();
  $(".button").click(function () {
    $(".teb").hide().eq($(this).index()).show();
  });

  //Next Button
  $(".next").click(function () {
    var index = $(".next").index(this);
    $(".teb").hide().eq(index + 1).show();
  });

  //Previous Button
  $(".previous").click(function () {
    var index = $(".previous").index(this);
    $(".teb").hide().eq(index).show();
  });

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

    $(".cancel,.update").hide();
    $(".submit").show();
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

    ($("#terms").is(":checked")) ? terms = "set" : terms = "off";
  }

  //Cancle Button
  $(".cancel").click(function () {
    EmptyVal();
  });

});


// Delete Button
$(document).on("click", ".delete", function () {
  var DeleteIndex = $(".delete").index(this);
  $(".table_data").eq(DeleteIndex).remove();

  $(".before tr").each(function (i) {
    $($(this).find("td")[0]).html(i);
  });
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

  gender != "undefined" ? gender == "male" ? $("#male").prop("checked", true) : $("#female").prop("checked", true) : $("input[type=radio]").prop("checked", false);

  terms == "off" ? $("input[type=checkbox]").prop("checked", false) : $("input[type=checkbox]").prop("checked", true);

  $(".submit").hide();
  $(".cancel,.update").show();
  $(".teb").hide().first().show();

});
