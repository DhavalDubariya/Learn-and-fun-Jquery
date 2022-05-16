$(document).ready(function(){
    $('button').click(function() {
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();

        $.ajax({
          url:"../file.php",
          method:"POST",
          dataType:"JSON",
          data: {
            'first_name_d': first_name,'last_name_d':last_name
          },
          success: function(data) {
            if(data.Response=="True")
            {
              $('#f_name').text(data.first_name_dp);
              $('#l_name').text(data.last_name_dp);
              $('#async').text(data.full_name_dp);
              console.log(data);
            }
            else
            {
              alert("Input values in Fields");
              console.log(data);
            }
            console.log(data.Response);
          },
          timeout: 3000,
          
          error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            $('#error').html(msg);
        },
    
          
          
          
        });
        
      });
});