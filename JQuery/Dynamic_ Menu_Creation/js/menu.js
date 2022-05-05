$(document).ready(function(){
   
    $(".add_btn").click(function(e){
        var input_menu = $(".input_menu").val();
        var select_menu = $(".select_menu").val();
        

        if(select_menu=="")
        {
            $("ul").append(`<li class="perent" id="${input_menu}" >
            ${input_menu} 
            <button class="edit_btn" id="edit_btn">Edit</button>
            <button class="remove_btn" id="remove_btn">Remove</button>
            </li>`);
        }
        else
        {   

            $("ul").find(`li#${select_menu}`).append(`<ul><li class="perent" id="${input_menu}" >
            ${input_menu} 
            <button class="edit_btn" id="edit_btn">Edit</button>
            <button class="remove_btn" id="remove_btn">Remove</button>
            </li></ul>`);
        }

      
        var perent = $(".perent").length;
        
        for(let i=0;i<perent;i++)
        {
            $(".select_menu").append(`<option value="${input_menu}">${input_menu}</option>`)
        }

    });

});