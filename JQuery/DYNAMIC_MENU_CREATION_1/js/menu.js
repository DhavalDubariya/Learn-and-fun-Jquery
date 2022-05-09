$(document).ready(function(){
 

    $(document).on("click",".add_btn",function(){
        
        var input_menu = $(".input_menu").val();

        var select_length = $("select").length;

        // select_menu = ($("select").length == 1) ? ($("select").eq(0).val()) : (($("select").eq($("select").length - 1).val() == 'none') ? ($("select").eq($("select").length - 2).val()) : ($("select").eq($("select").length - 1).val()));

     
        if (isDropSelected == false) {

            if ($("select").length == 1) {
                select_menu = $("select").eq(0).val();
            } 
            else 
            {
                if ($("select").eq($("select").length - 1).val() == 'none') {
                    select_menu = $("select").eq($("select").length - 2).val()
                }
                else {
                    select_menu = $("select").eq($("select").length - 1).val()
                }
            }
        }

        if (select_menu != 'none') {
            $(".right").find(`[data='${select_menu}']`).append(`
            <ul class="${select_menu}">
                <li data=${input_menu}>
                    ${input_menu}
                    <input type="button" class="btn edit" value="Edit">
                    <input type="button" class="btn delete" value="Delete">
                </li>
            </ul>
            `);

            if($(`.${select_menu}`).length==1)
            {
                console.log(select_menu);
                $(".childe_select").append(`
                <br>
                <select name="select_menu_child" id="select_menu_child" data="${select_menu}_child"  class="select_menu_child">
                    <option class="parent_child" value="none">none</option>
                </select>`);
            }

            $(`.childe_select`).find(`[data='${select_menu}_child']`).append(`<option class="parent_child" value="${input_menu}">${input_menu}</option>`);


        }
        else {

            $(".right").append(`
            <ul>
                <li data=${input_menu}>
                    ${input_menu}
                    <input type="button" class="btn edit" value="Edit">
                    <input type="button" class="btn delete" value="Delete">
                </li>
            </ul>
            `);

            $(".select_menu").append(`<option value="${input_menu}">${input_menu}</option>`);
        }
    });

    $(document).on("change","select",function(){
        select_length();
    });

});

       



    // $(document).on("click",".remove_btn",function(){
    //     var remove_btn = $(".remove_btn").index(this);
    //     console.log(remove_btn);
    //     $("li.parent").eq(remove_btn).remove();
    //     $(".select_menu").find("option.parent").eq(remove_btn).remove();
    // });

    // $(document).on("click",".remove_btn_menu",function(){
    //     var remove_btn_menu_p = $(this).parents("li.parent").index();
    //     var remove_btn_menu = $(".remove_btn_menu").index(this);
    //     console.log(remove_btn_menu);
    //     $("li.parent").eq(remove_btn_menu_p).find("li.child").eq(remove_btn_menu).remove();

    //     $(".select_menu_child").eq(remove_btn_menu_p).find("option.parent_child").eq(remove_btn_menu).remove();
    //     if(remove_btn_menu==0)
    //     {
    //         $(".select_menu_child").eq(remove_btn_menu_p).find("option.parent_child").eq(remove_btn_menu).remove();
    //     }
    // }); 


