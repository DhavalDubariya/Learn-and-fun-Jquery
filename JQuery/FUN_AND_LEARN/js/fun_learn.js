$(document).ready(function()
{   
    function create_table() {
        $("#refresh").hide();
        var c = (s = m = h = 00);
        time(h, m, s, c);
    
        var array_icon_new = ["fa-coffee","fa-car","fa-book","fa-eye","fa-area-chart","fa-address-book","fa-ban","fa-calendar","fa-check-square","fa-cloud","fa-deaf","fa-cube","fa-edit","fa-deaf","fa-audio-description","fa-credit-card","fa-database","fa-diamond","fa-envelope","fa-film","fa-flask","fa-wheelchair","fa-heartbeat","fa-inbox","fa-magnet","fa-low-vision","fa-male","fa-volume-up","fa-motorcycle","fa-phone","fa-road","fa-retweet","fa-shield","fa-sort-amount-asc","fa-sort-down","fa-tint","fa-tag","fa-tree","fa-vcard","fa-warning","fa-wrench","fa-braille","fa-tint","fa-trash","fa-upload","fa-wifi","fa-trophy","fa-suitcase","fa-spoon","fa-taxi"];
        var array_icon = [];
        var k=0;
        let i = 0;
        let j = 0;
        var random;
        var array = [0,1,2,3,4,5,6,7,8,9,10,11];
        var new_array = [];
        var new_array_2 = [];
 
        while (k < 12) 
        {
            random = Math.floor(Math.random() * array_icon_new.length);
            if (array_icon.length == 0) {
                array_icon.push(array_icon_new[random]);
                k++;
            } else if (array_icon.length >= 1) {
                if (array_icon.includes(array_icon_new[random])) {
                    continue;
                } 
                else 
                {
                    array_icon.push(array_icon_new[random]);
                    k++;
                }
            }
        }
    
        console.log(array_icon_new.length);
          
            while (i < array.length) 
            {
                random = Math.floor(Math.random() * array.length);
                if (new_array.length == 0) {
                    new_array.push(array[random]);
                    i++;
                } else if (new_array.length >= 1) {
                    if (new_array.includes(array[random])) {
                        continue;
                    } 
                    else 
                    {
                        new_array.push(array[random]);
                        i++;
                    }
                }
            }
    
            while (j < array.length) 
            {   
                random = Math.floor(Math.random() * array.length);
                if (new_array_2.length == 0) {
                    new_array_2.push(array[random]);
                    j++;
                } else if (new_array_2.length >= 1) {
                    if (new_array_2.includes(array[random])) {
                        continue;
                    } else {
                        new_array_2.push(array[random]);
                    j++;
                    }
                }
            }
    
            console.log(new_array)
            console.log(new_array_2)
                
            var count = 0;
            var count_2  = 0;
            var count_3 = 0;
    
        
        for (i = 0; i < 4; i++) {
          $(".before").append("<tr>");
          for (j = 0; j < 6; j++) 
          {   
              if(count_3%2==0)
              {     
                    $("table tbody tr").eq(i).append(`<td><button class="box_btn" data-id="${array_icon[new_array_2[count]]}" ><i class="fa ${array_icon[new_array_2[count]]} hide_i" aria-hidden="true"></i></button></td>`);
                    count++;
              }
              else
              { 
                    $("table tbody tr").eq(i).append(`<td><button class="box_btn" data-id="${array_icon[new_array[count_2]]}" ><i class="fa ${array_icon[new_array[count_2]]} hide_i" aria-hidden="true"></i></button></td>`);
                    count_2++;
              }
              count_3++;
              // console.log(count_3)
          }
          $(".before").append("</tr>");
        }
        $(".hide_i").hide();
      }
    
      create_table();

      var array_btn_dataid = [];

      $(document).on("click",".box_btn",function()
      {
        var index_button = $(".box_btn").index(this);
        var data_id;
        var data_id_2;
        var click = 0;
        
        array_btn_dataid.push(index_button);
    
        $(".box_btn").eq(index_button).find(".hide_i").toggle();
        $(".box_btn").eq(index_button).addClass("open_btn");
        
        if(array_btn_dataid.length>1)
        {   
             data_id = $(".box_btn").eq(array_btn_dataid[0]).attr("data-id");
             data_id_2  = $(".box_btn").eq(array_btn_dataid[1]).attr("data-id");
             var one =  array_btn_dataid[0];
             var two = array_btn_dataid[1];
             if(array_btn_dataid[0] == array_btn_dataid[1])
             {
                for(let n=0;n<=array_btn_dataid.length;n++)
                {
                    array_btn_dataid.pop(array_btn_dataid[n]);
                }
             }
             else
             {
                if(data_id == data_id_2)
                {   
                    $(".box_btn").eq(array_btn_dataid[0]).removeClass("open_btn")
                    $(".box_btn").eq(array_btn_dataid[1]).removeClass("open_btn")
                    $(".box_btn").eq(array_btn_dataid[1]).attr("disabled",true)
                    $(".box_btn").eq(array_btn_dataid[0]).attr("disabled",true)
                    $(".box_btn").eq(array_btn_dataid[0]).addClass("btn_bg")
                    $(".box_btn").eq(array_btn_dataid[1]).addClass("btn_bg")
                }
                else
                {   
                    $(".box_btn").attr("disabled",true)
                    setTimeout(() => 
                    {   
                        $(".box_btn").attr("disabled",false)
                        $(".btn_bg").attr("disabled",true);
                        $(".box_btn").eq(one).removeClass("open_btn")
                        $(".box_btn").eq(two).removeClass("open_btn")
                        $(".box_btn").eq(two).find("i").hide()
                        $(".box_btn").eq(one).find("i").hide()
                    },2000);
                }
                for(let n=0;n<=array_btn_dataid.length;n++)
                {
                    array_btn_dataid.pop(array_btn_dataid[n]);
                }
             }    
        }
        if($(".btn_bg").length==24)
        {   
            $("#refresh").show();
            h = parseInt($("#hours").text());
            m = parseInt($("#minute").text());
            s = parseInt($("#seconds").text());
            c = parseInt($("#c_seconds").text());
            $("#time_log").append(
                `<p class="log" style="color:red">Congratulations..! You Passed it in ${m} minutes ${s} seconds..!</p>`);
           clearInterval(timer);
        }
    });
    

    function time(h, m, s, c) {
        timer = setInterval(function () {
          if (c < 99) {
            c++;
          } else {
            c = 0;
            if (s < 59) {
              s++;
            } else {
              s = 0;
              if (m < 59) {
                m++;
              } else {
                m = 0;
                if (h < 24) {
                  h++;
                } else {
                  c = s = m = h = 0;
                  clearInterval(timer);
                }
              }
            }
          }
          $("#c_seconds").text(c < 10 ? "0" + c : c);
          $("#seconds").text(s < 10 ? "0" + s : s);
          $("#minute").text(m < 10 ? "0" + m : m);
          $("#hours").text(h < 10 ? "0" + h : h);
        }, 10);
      }
    
      $(document).on("click","#refresh",function(){
        $("#refresh").hide();
        $(".log").remove();
        $(".hide_i").hide();
        $(".before").empty();
        create_table();
        var h = m = s = c = 0;
        clearInterval(timer);
        time(h, m, s, c)
        // console.log("hello");
      });


});

