$(document).ready(function () {
  var current = new Date();
  var date = current.getDate();
  var month = current.getMonth();
  var year = current.getFullYear();

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

  function calendar(date, month, year) {
    var firstday = new Date(year, month, 1);
    var firstday_date = firstday.getDay();
    var days_in_month = new Date(year, month + 1, 0).getDate();
    var current_date = new Date();
    $(".month_d").text(months[month]);
    $(".year_d").text(year);

    console.log(firstday, firstday_date);

    count = 0;

    for (i = 0; i < 6; i++) {
      $(".before").append("<tr>");
      for (j = 0; j < 7; j++) {
        if (j < firstday_date && i == 0) {
          $("table tbody tr").eq(i).append(`<td></td>`);
        } else {
          count++;
          if (count <= days_in_month) {
            if (
              count == current_date.getUTCDate() &&
              year == current_date.getUTCFullYear() &&
              month == current_date.getUTCMonth()
            ) {
              $("table tbody tr")
                .eq(i)
                .append(`<td class="today" >${count}</td>`);
            } else {
              $("table tbody tr").eq(i).append(`<td>${count}</td>`);
            }
          } else {
            $("table tbody tr")
              .eq(i)
              .append(`<td style="display:none" >test</td>`);
          }
        }
      }
      $(".before").append("</tr>");
    }
  }

  calendar(date, month, year);

  $("#previous").click(function () {
    current.setMonth(current.getMonth() - 1);
    year = current.getFullYear();
    date = current.getDate();
    month = current.getMonth();
    console.log(date, year, month);
    $(".before").empty();
    calendar(date, month, year);
  });

  $("#next").click(function () {
    current.setMonth(current.getMonth() + 1);
    year = current.getFullYear();
    date = current.getDate();
    month = current.getMonth();
    console.log(date, year, month);
    $(".before").empty();
    calendar(date, month, year);
  });

  $("#today_button").click(function () {
    today_date = new Date();
    $(".before").empty();
    calendar(
      today_date.getDate(),
      today_date.getMonth(),
      today_date.getFullYear()
    );
  });

  for (let i = 1970; i <= 2070; i++) {
    $("#select_year").append(`<option value="${i}">${i}</option>`);
  }

  for (let j = 0; j < 12; j++) {
    $("#select_month").append(
      `<option class="click_month" value="${j}">${months[j]}</option>`
    );// console.log(months[j]);
  }

  $("#find_button").click(function () {
    year = $("#select_year").val();
    month = $("#select_month").val();
    date = $("#days_month").val();

    bool = date;
    $(".before").empty();
    calendar(bool, date, month, year);
  });

});
