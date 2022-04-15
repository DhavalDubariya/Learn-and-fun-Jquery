$(document).ready(function () {
  //tebs

  $(".teb").hide().first().show();
  $(".button").click(function () {
    $(".teb").hide().eq($(this).index()).show();
  });
  //Next Button
  $(".next").click(function () {
    var index = $(".next").index(this);
    $(".teb")
      .hide()
      .eq(index + 1)
      .show();
  });

  $(".update").hide();

  //Previous Button
  $(".previous").click(function () {
    var index = $(".previous").index(this);
    $(".teb").hide().eq(index).show();
  });

  //cancel Button
  $(".cancel").hide();
  // Submit Button
  $(".cancel").click(function () {
    $("input[type=text],textarea").val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );
  });

  $(".submit").click(function () {
    var f_name = $("#f_name").val();
    var l_name = $("#l_name").val();
    var gender = $("input[type='radio']:checked").val();
    var email = $("#email").val();
    var contact_no = $("#contact_no").val();
    var dob = $("#dob").val();
    var sport = $("#sport").val();
    var about = $("textarea#message").val();
    var terms = $("input[type='checkbox']:checked").val();
    var index = $("tr").length;

    $(".before").append(
      `<tr class="table_data" ><td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td></tr>`
    );

    $("input[type=text],textarea").val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );

    // $(".teb").hide().first().show();
  });

  $(".update").click(function () {
    var f_name = $("#f_name").val();
    var l_name = $("#l_name").val();
    var gender = $("input[type='radio']:checked").val();
    var email = $("#email").val();
    var contact_no = $("#contact_no").val();
    var dob = $("#dob").val();
    var sport = $("#sport").val();
    var about = $("textarea#message").val();
    var terms = $("input[type='checkbox']:checked").val();
    var index = $("tr").length;

    index = parseInt($("#index").val());
    //  alert($("#index").val());
    let html = `<td class="new_index" >${index}</td><td class="f_name" > ${f_name} </td><td class="l_name" >${l_name}</td><td class="gender">${gender}</td><td class="email">${email}</td><td class="contact_no" >${contact_no}</td><td class="dob" >${dob}</td><td class="sport" >${sport}</td><td class="about" >${about}</td><td class="terms">${terms}</td><td><button class="edit">Edit</button></td><td><button class="delete">Delete</button></td>`;
    console.log(html);
    $(".table_data")
      .eq(parseInt(index - 1))
      .html(html);
    $(".submit").text("SUBMIT");

    $("input[type=text],textarea").val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );

    $(".cancel").hide();
    $(".update").hide();
    $(".submit").show();
  

    // $(".teb").hide().first().show();
  });
});

$(document).on("click", ".delete", function () {
  var DeleteIndex = $(".delete").index(this);
  $(".table_data").eq(DeleteIndex).remove();

  $(".before tr").each(function (i) {
    $($(this).find("td")[0]).html(i);
  });
});

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

  (terms  == "undefined") ?  $("input[type=checkbox]").prop("checked", false) : $("input[type=checkbox]").prop("checked", true);

  $(".submit").hide();
  $(".cancel").show();
  $(".teb").hide().first().show();
  $(".update").show();
});
