
$(document).ready(function()
{

    var select_menu;
    
    $(".add_btn").on("click",function(){
        var input_menu = $(".input_menu").val();
        var select_menu_st = $(".select_menu").val();
        if ($("select").length == 1) {
            select_menu = $("select").eq(0).val();
        } 
        else 
        {
            for (i = 0; i < $("select").length; i++) {
                if ($("select").eq(0).val() == "none") {
                    select_menu = $("select").eq(0).val();
                    break;
                }
                else if ($("select").eq(i).val() == "none") {
                    select_menu = $("select").eq(i - 1).val();
                    break;
                }
                else {
                    select_menu = $("select").eq($("select").length - 1).val();
                }
            }
        }
            
        if(select_menu!="none")
        {   

            if ($(`[data='${select_menu}_child']`).length == 0) {

                $(".right").find(`[data='${select_menu}']`).append(`<ul data="${select_menu}_length" class="${select_menu}_length" ></ul>`)

                $(".childe_select").append(`
                    <div class="delete_rm" >    
                        <select data="${select_menu}_child" class="${select_menu}_child select_menu_child">
                            <option class="parent_child" value="none">none</option>
                        </select>
                    </div>
                `);
            }

            $(`[data='${select_menu}_child']`).append(`<option class="parent_child" value="${input_menu}">${input_menu}</option>`);

            $(".right").find(`[data='${select_menu}']`).find(`[data='${select_menu}_length']`).append(`
                <li data="${input_menu}" >
                    <p>${input_menu}</p>
                    <button >Edit</button>
                    <button >Remove</button>
                </li>
            `);

        }
        else
        {
            $("ul.none").append(`
            <li data="${input_menu}" >
                <p>${input_menu} </p>
                <button >Edit</button>
                <button >Remove</button>
            </li>`);
            $(".select_menu").append(`<option value="${input_menu}">${input_menu}</option>`);
        }
    });

});

   
$(document).on('change', 'select', function () {
        var select_index = $("select").index(this);
        var select_index_val = $("select").eq(select_index).val();

        if (select_index_val == 'none') {
             $("select").hide();
             $("select").val("none");
            for(let i = 0; i <= select_index; i++) 
            {
                $("select").eq(i).show();
            }
        } 
        else 
        {   
            $("select").hide();
            for(let i = 0; i <= select_index; i++) {
                $("select").eq(i).show();
            }
            for(let i=0;i<$("select").length;i++)
            {
                if($("select").eq(i).attr("data") == select_index_val+"_child")
                {
                    $("select").eq(i).show();
                }       
            }
        }
        console.log("index : ", select_index_val+"_child");
});
