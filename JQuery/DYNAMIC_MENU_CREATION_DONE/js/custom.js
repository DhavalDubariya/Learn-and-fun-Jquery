$(document).ready(function(){
    var idIncre = 1;

    $("#update").hide();

    
    $("#add").click(function(){
        var inputVal = $('#inputValue').val();
        if($("#all-dropdown").find('select').length > 1) {
            var targetSel = $("#all-dropdown").find('select').last();
            if(targetSel.val()=='none')
            {
                var targetEle = $(`#menu-list`).find(`li[data-id=${targetSel.prev().val()}]`);
                targetEle.find('>ul').append(`
                    <li data-id='${idIncre}' data-text='${inputVal}'>
                        <p>${inputVal}</p>
                        <button class="edit_btn" >Edit</button>
                        <button class="remove_btn" >Remove</button>
                    </li>`);
                $("#all-dropdown").find('select').last().append(`<option data-id='${idIncre}' value='${idIncre}'>${inputVal}</option>`);               
            } 
            else 
            {
                var targetEle = $(`#menu-list`).find(`li[data-id=${targetSel.val()}]`);
                $("#all-dropdown").append(`<select class="select_menu"><option value='none'>Select Child</option><option data-id='${idIncre}' value='${idIncre}'>${inputVal}</option></select>`);
                targetEle.append(`
                <ul>
                    <li data-id='${idIncre}' data-text='${inputVal}'>
                        <p>${inputVal}</p>                        
                        <button class="edit_btn" >Edit</button>
                        <button class="remove_btn" >Remove</button>
                    </li>
                </ul>`);
            }
            
        }
        else 
        {
            if($('.parent-dropdown').val() == 'none')
            {
                $('#menu-list>ul').append(`
                    <li data-id='${idIncre}' data-text='${inputVal}'>
                        <p>${inputVal}</p>                        
                        <button class="edit_btn" >Edit</button>
                        <button class="remove_btn" >Remove</button>
                    </li>`);
                $('.parent-dropdown').append(`<option data-id='${idIncre}' value='${idIncre}'>${inputVal}</option>`);
            } 
            else 
            {
                var targetEle = $(`#menu-list`).find(`li[data-id=${$('.parent-dropdown').val()}]`);
                if(targetEle.find('ul').length>0)
                {
                    targetEle.find('>ul').append(`
                        <li data-id='${idIncre}' data-text='${inputVal}'>
                            <p>${inputVal}</p>                            
                            <button class="edit_btn" >Edit</button>
                            <button class="remove_btn" >Remove</button>
                        </li>`);
                    $("#all-dropdown").find('select').last().append(`<option data-id='${idIncre}' value='${idIncre}'>${inputVal}</option>`);
                } 
                else
                {
                    $("#all-dropdown").append(`<select class="select_menu"><option value='none'>Select Child</option><option data-id='${idIncre}' value='${idIncre}'>${inputVal}</option></select>`);
                    targetEle.append(`
                    <ul>
                        <li data-id='${idIncre}' data-text='${inputVal}'>   
                            <p>${inputVal}</p>
                            <button class="edit_btn" >Edit</button>
                            <button class="remove_btn" >Remove</button>
                        </li>
                    </ul>`);
                }
            }
        }
        // console.log($('.parent-dropdown').val())
        
        
        $('#inputValue').val("");
        idIncre++;
    });
   
    $(document).on('change','select',function(){
        $(this).nextAll().remove();
        if($(this).val() != 'none')
        {
            var targetEle = $(`#menu-list`).find(`li[data-id=${$(this).val()}]`);
            if(targetEle.find('ul').length>0)
            {
                $("#all-dropdown").append(`<select class="select_menu"><option value='none'>Select Child</option></select>`);

                for(i=0;i<targetEle.find('ul:first').children().length;i++)
                {
                    var dataId = targetEle.find('ul:first').children().eq(i).attr('data-id')
                    var dataText = targetEle.find('ul:first').children().eq(i).attr('data-text')
                    $("#all-dropdown").find('select').last().append(`<option data-id='${idIncre}' value='${dataId}'>${dataText}</option>`);
                }
            }
        }
    });


    var edit_index;
    var edit_data;
    var edit_text;
    
    $(document).on('click','.edit_btn',function(){
         edit_index = $('.edit_btn').index(this);
         edit_data = $('.edit_btn').eq(edit_index).parent("li").attr('data-id');
         edit_text = $('.edit_btn').eq(edit_index).parent("li").attr('data-text');        
        $("#inputValue").val(edit_text);
        

        $("#add").hide();
        $("#update").show();
        $(".edit_btn,.remove_btn").attr("disabled",true);
        console.log(edit_data,edit_text)
    });

    
        
    $("#update").click(function(){
        var inputVal = $('#inputValue').val();
        $(`#menu-list`).find(`li[data-id=${edit_data}]`).find(">p").text(inputVal);
        $(`#menu-list`).find(`li[data-id=${edit_data}]`).attr("data-text",inputVal);
        $("#all-dropdown").find('select').find(`option[data-id=${edit_data}]`).text(inputVal);            
        $(".edit_btn,.remove_btn").attr("disabled",false);
    });

    $(document).on('click','.remove_btn',function(){
        var remove_index = $('.remove_btn').index(this);
        var remove_data = $('.remove_btn').eq(remove_index).parent("li").attr('data-id');
        var length_li = $(this).parents("ul:first").find("li").length;
        var select_index = $("#all-dropdown").find('select').find(`option[data-id=${remove_data}]`).parent("select").index();

        if(length_li==1)
        {
            if(select_index!=0)
            {
                $(this).closest("li").parent("ul").remove()
                $("#all-dropdown").find('select').find(`option[data-id=${remove_data}]`).parent("select").remove();
            }
            else
            {
                $(this).closest("li").remove()
                $("#all-dropdown").find('select').find(`option[data-id=${remove_data}]`).remove();    
            }
        }
        else
        {
            $(this).closest("li").remove()
            $("#all-dropdown").find('select').find(`option[data-id=${remove_data}]`).remove();
        }
        $("select").trigger('change');
    });

});