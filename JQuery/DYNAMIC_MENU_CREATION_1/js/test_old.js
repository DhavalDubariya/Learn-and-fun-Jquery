
        $(document).on("click",".add_btn",function(){
            var input_menu = $(".input_menu").val();
            var select_menu = $("select").last().val();
            // var select_length = $("select").length();
            console.log(select_menu);
            
        
            if(select_menu!="none")
            {   
                if($(`.${select_menu}`).length==1)
                {
                    $(`li.${select_menu}`).append(`<ul  class="${select_menu}" ></ul>`);
                    $(".childe_select").append(`
                    <br><br>
                    <select name="select_menu_child" id="select_menu_child" class="${select_menu}_child menu_length select_menu_child" >
                        <option class="parent_child" value="none">none</option>
                    </select>`);
                }
                $(`ul.${select_menu}`).append(`<li  class="${input_menu} child" >
                ${input_menu}
                <button class="edit_btn" id="edit_btn">Edit</button>
                <button class="remove_btn_menu" id="remove_btn_menu">Remove</button>
                </li>`);

                $(`.${select_menu}_child`).append(`<option class="parent_child" value="${input_menu}">${input_menu}</option>`);

            }
            else
            {
                $("ul.none").append(`<li class="${input_menu} parent" >
                ${input_menu} 
                <button class="edit_btn" id="edit_btn">Edit</button>
                <button class="remove_btn" id="remove_btn">Remove</button>
                </li>`);
                $(".select_menu").append(`<option class="parent" value="${input_menu}">${input_menu}</option>`);
            }
        });
        



