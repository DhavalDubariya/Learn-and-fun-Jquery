
    $(document).on("click",".add_btn",function(){
        var input_menu = $(".input_menu").val();
        var select_menu = $(".select_menu").val();
        var select_child = $("#select_menu_child").val();

        $(".menu_length").length;
       
        if(select_menu!="none")
        {   
            if($(`.${select_menu}`).length == 1)
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
    

$(document).on("click",".remove_btn",function(){
    var remove_btn = $(".remove_btn").index(this);
    console.log(remove_btn);
    $("li.parent").eq(remove_btn).remove();
    $(".select_menu").find("option.parent").eq(remove_btn).remove();
});

$(document).on("click",".remove_btn_menu",function(){
    var remove_btn_menu_p = $(this).parents("li.parent").index();
    var remove_btn_menu = $(".remove_btn_menu").index(this);
    console.log(remove_btn_menu);
    $("li.parent").eq(remove_btn_menu_p).find("li.child").eq(remove_btn_menu).remove();

    $(".select_menu_child").eq(remove_btn_menu_p).find("option.parent_child").eq(remove_btn_menu).remove();
    if(remove_btn_menu==0)
    {
        $(".select_menu_child").eq(remove_btn_menu_p).find("option.parent_child").eq(remove_btn_menu).remove();
    }
}); 


