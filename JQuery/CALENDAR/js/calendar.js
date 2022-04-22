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

    for(let i=1970;i<=2070;i++)
    {
      
      $(".select_year").append(`<option value="${i}">${i}</option>`);

    }

    for(let j=0;j<12;j++)
    {
      $(".select_month").append(`<option value="${j}">${months[j]}</option>`);
      // console.log(months[j]);
    }

    for(let k=1;k<32;k++)
    {
      $(".select_date").append(`<option value="${k}">${k}</option>`);
    }
    // console.log(date,month,year);
    
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
    firstday_date = firstday.getDay();
    var lastday = new Date(year,month+1,0);
    var lastday_date = lastday.getDay();    
    // console.log(firstday_date,lastday_day);
    // console.log(firstday,lastday);
    var current_date = new Date();

    

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
            if(firstday_date<count)
            {   
                ++count_new;
                if(count_new == date && current_date.getMonth() == month  && current_date.getFullYear() == year)
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
  });


  $("#next").click(function () {
    today_date.setMonth(today_date.getMonth() + 1);
    $(".before").empty();
    calendar();
  });

  $("#today_button").click(function ()  {
    today_date = new Date();
    $(".before").empty();
    calendar();
  });

});
