$(document).ready(function(){
    
    function ajax()
    {
        $.ajax({
            url:"../php/get_files.php",
            method:"POST",
            dataType:"JSON",
            success: function(res) {
                $.each(res.data, function(key,val) {
                    if(val.type=='file')
                    {
                        $('#file_folder').append(`
                        <div class="col-md-3 click_fun" data-path="${val.path}">
                            <div class="file" >
                                <i class="fa-solid fa-file"></i>
                                <p>${val.name}</p>
                            </div>
                        </div>
                        `);
                    }
                    else
                    {
                        $('#file_folder').append(`
                        <div class="col-md-3 click_fun db_folder" data-path="${val.path}" >
                            <div class="folder" >
                                <i class="fa-solid fa-folder"></i>
                                <p>${val.name}</p>
                            </div>
                        </div>
                        `);
                    }
                });
            },
        });
    }
    ajax();

    //Home Button
    $(document).on('click','#home',function(){
        $('#file_folder').empty();
        ajax();
    });

    //Back Button
    $(document).on('click','#back',function(){
        var path = $('#file_folder').attr('data-back');
        console.log(path,path.length);
        if(path.length>48)
        {
            $('#file_folder').empty();
            $.ajax({
                url:"../php/get_files.php",
                method:"POST",
                dataType:"JSON",
                data:{ 'path': path,'button': 'back' },
                success: function(res) {
      
                        console.log(res.path);
                        $('#file_folder').attr('data-back',res.path);
                        $.each(res.data, function(key,val) {
                            if(val.type=='file')
                            {
                                $('#file_folder').append(`
                                <div class="col-md-3 click_fun" data-path="${val.path}">
                                    <div class="file" >
                                        <i class="fa-solid fa-file"></i>
                                        <p>${val.name}</p>
                                    </div>
                                </div>
                                `);
                            }
                            else
                            {
                                $('#file_folder').append(`
                                <div class="col-md-3 click_fun db_folder" data-path="${val.path}" >
                                    <div class="folder" >
                                        <i class="fa-solid fa-folder"></i>
                                        <p>${val.name}</p>
                                    </div>
                                </div>
                                `);
                            }
                        });
                    
                },
            }); 
        }
        else
        {
            alert("This Is Main Directory");
        }
       
    });

    // Single click for select file and folder
    $(document).on('click','.click_fun',function(){
        var index = $('.click_fun').index(this);
    //  console.log($('.click_fun').eq(index).attr('data-path'));
        $(".click_fun").filter(this).css({"background-color":"#98bf21"});
        $(".click_fun").not(this).css("background-color", "");
    });

    //double click to go back and forth in file explorer
    $(document).on('dblclick','.db_folder',function(){
        var index = $('.click_fun').index(this);
        var path = $('.click_fun').eq(index).attr('data-path');
        $('#file_folder').empty();
        $.ajax({
            url:"../php/get_files.php",
            method:"POST",
            dataType:"JSON",
            data:{ 'path': path },
            success: function(res) {
                console.log(res);
                $('#file_folder').attr('data-back',res.path)
                $.each(res.data, function(key,val) {
                    if(val.type=='file')
                    {
                        $('#file_folder').append(`
                        <div class="col-md-3 click_fun" data-path="${val.path}">
                            <div class="file" >
                                <i class="fa-solid fa-file"></i>
                                <p>${val.name}</p>
                            </div>
                        </div>
                        `);
                    }
                    else
                    {
                        $('#file_folder').append(`
                        <div class="col-md-3 click_fun db_folder" data-path="${val.path}" >
                            <div class="folder" >
                                <i class="fa-solid fa-folder"></i>
                                <p>${val.name}</p>
                            </div>
                        </div>
                        `);
                    }
                });
            },
        })

    });

}); 






