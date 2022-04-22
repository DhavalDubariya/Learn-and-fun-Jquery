$(document).ready(function () {
  var today_date = new Date();
  var bool = false;
  var months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  var days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];


  function calendar(flag) {
    var month = today_date.getMonth();
    var day = today_date.getDay();
    var year = today_date.getFullYear();
    var date = today_date.getDate();

    var firstday = new Date(year, month, 1);
    var firstday_date = firstday.getDay();
    var days_in_month = new Date(year, month + 1, 0).getDate();
    var current_date = new Date();
    var display = `${months[month]} - ${year} `;
    $(".date_month").text(display);

    count = 0;
    count_new = 0;

    for (let i = 0; i < 7; i++) {
      $(".before").append(`<tr>`);
      for (let j = 0; j < 7; j++) {
        count++;
        if (firstday_date < count) {
          ++count_new;
          if (
            count_new == current_date.getDate() &&
            current_date.getMonth() == month &&
            current_date.getFullYear() == year
          ) 
          {
            $("table tbody tr").eq(i).append(`<td class="today" >${count_new}</td>`);
          }
          else if(flag == true && count_new == date )
          {
            $("table tbody tr").eq(i).append(`<td class="find_clr" >${count_new}</td>`);
          }
          else if (count_new - 1 == days_in_month)
          {
            return false;
          } 
          else 
          {
            $("table tbody tr").eq(i).append(`<td>${count_new}</td>`);
          }
        } 
        else {
          $("table tbody tr").eq(i).append(`<td></td>`);
        }
      }
      $(".before").append(`</tr>`);
    }

  }

  calendar(bool);

  $("#previous").click(function () {
    today_date.setMonth(today_date.getMonth() - 1);
    $(".before").empty();
    calendar();
  });

  $("#next").click(function () {
    today_date.setMonth(today_date.getMonth() + 1);
    $(".before").empty();
    calendar();

  });

  $("#today_button").click(function () {
    today_date = new Date();
    $(".before").empty();
    calendar();
  });

  for (let i = 1970; i <= 2070; i++) {
    $("#select_year").append(`<option value="${i}">${i}</option>`);
  }

  for (let j = 0; j < 12; j++) {
    $("#select_month").append(
      `<option class="click_month" value="${j + 1}">${months[j]}</option>`
    );
    // console.log(months[j]);
  }

  for (var i = 1; i <= 31; i++) {
    $("#days_month").append(`<option value="${i}" >${i}</option>`);
  }
  $("#days_month").attr("disabled",true)
  $("#select_year, #select_month").change(function () {

    if($("#select_year").val() != "null" && $("#select_month").val() != "null" )
    { 
      $("#days_month").attr("disabled",false)
      $("#days_month").find("option").remove();
      var days_in_month = new Date(
        $("#select_year").val(),
        $("#select_month").val(),
        0
      ).getDate();
      for (var i = 1; i <= days_in_month; i++) {
        $("#days_month").append(`<option value="${i}" >${i}</option>`);
      }
    }

  });

  $("#find_button").click(function () {
    if($("#select_year").val() != "null" && $("#select_month").val() != "null" )
    {  
      year = $("#select_year").val();
      month = $("#select_month").val();
      date = $("#days_month").val();

      today_date.setMonth(month - 1);
      today_date.setFullYear(year);
      today_date.setDate(date);
      bool = true;

      $(".before").empty();
      calendar(bool);
    }
  });
});
