$(document).ready(function () {
  var today_date = new Date();

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

  function calendar() {
    var month = today_date.getMonth();
    var day = today_date.getDay();
    var year = today_date.getFullYear();
    var date = today_date.getDate();
    
    var feb;
    if (month === 1) {
      if ((year % 100 !== 0 && year % 4 === 0) || year % 400 === 0) {
        feb = 29;
      }
      else
      {
        feb = 28;
      }
    }

    var firstday = new Date(year,month,1);
    // console.log(firstday,lastday);

    firstday_day = firstday.getDay();
    lastday_day = month;
    // console.log(firstday_day,lastday_day);

    var days_in_month = [31, feb, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    var display = `${months[month]} - ${year} `;

    $(".date_month").text(display);
    count = 0;  
    count_new = 0;
    for (let i = 0; i < 7; i++) {
        $(".before").append(`<tr>`);
        for(let j = 0; j < 7; j++)
        {   
            count++;
            if(firstday_day<count)
            {   
                ++count_new;
                if(count_new == date)
                {
                    $(".before").append(`<td class="today" >${count_new}</td>`);
                }
                else if(count_new-1==days_in_month[month])
                {
                    return false;
                }
                else
                {
                    $(".before").append(`<td>${count_new}</td>`);
                }
            }
            else
            {
                $(".before").append(`<td></td>`);
            }
            
        }
        $(".before").append(`</tr>`);
    }
  }

  calendar();

  $("#previous").click(function () {
    today_date.setMonth(today_date.getMonth() - 1);
    $(".before").empty();
    
    calendar();
    $(".today").removeClass();

  });


  $("#next").click(function () {
    today_date.setMonth(today_date.getMonth() + 1);
    $(".before").empty();
    calendar();
  });

});
