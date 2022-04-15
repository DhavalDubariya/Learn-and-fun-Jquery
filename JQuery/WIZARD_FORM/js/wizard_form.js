$(document).ready(function () {
  var count = 1;

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

  //Previous Button
  $(".previous").click(function () {
    var index = $(".previous").index(this);
    $(".teb").hide().eq(index).show();
  });

  //cancel Button
  $(".cancel").hide();
  // Submit Button
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
    var index = count++;

    if ($(".submit").text() == "UPDATE") {
      index = parseInt($("#index").val());
      //  alert($("#index").val());
      $(".table_data")
        .eq(parseInt(index - 1))
        .remove();
      $(".submit").text("SUBMIT");
    }

    $(".before").append(
      `<tr class="table_data" ><th class="new_index" >${index}</th><th class="f_name" > ${f_name} </th><th class="l_name" >${l_name}</th><th class="gender">${gender}</th><th class="email">${email}</th><th class="contact_no" >${contact_no}</th><th class="dob" >${dob}</th><th class="sport" >${sport}</th><th class="about" >${about}</th><th class="terms">${terms}</th><th><button class="edit">Edit</button></th><th><button class="delete">Delete</button></th></tr>`
    );

    $("input[type=text],textarea").val("");
    $("input[type='radio']:checked,input[type=checkbox]").prop(
      "checked",
      false
    );
    $(".teb").hide().first().show();
  });
});

$(document).on("click", ".delete", function () {
  var DeleteIndex = $(".delete").index(this);
  $(".table_data").eq(DeleteIndex).remove();
  $('tr').each(function(i){
    $($(this).find('th')[0]).html(i+1);
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
  // $("#terms").val(terms);
  $(".submit").text("UPDATE");
  $(".cancel").show();
  $(".teb").hide().first().show();
});
