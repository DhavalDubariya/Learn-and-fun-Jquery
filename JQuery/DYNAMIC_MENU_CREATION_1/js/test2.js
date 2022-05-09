$(document).ready(function () {
    var value, dropSelection, selectLength;
    var isDropSelected = false;


    $(".addButton").click(function () {
        value = $(".inputChildClass").val();
        console.log("value: ", value);
        selectLength = $("select").length;
        console.log(selectLength);
        // dropSelection = ($("select").length == 1) ? ($("select").eq(0).val()) : (($("select").eq($("select").length - 1).val() == 'none') ? ($("select").eq($("select").length - 2).val()) : ($("select").eq($("select").length - 1).val()));

        // for (i = 1; i < $("option").length; i++) {
        //     option = $("option").eq(i).text();
        //     console.log("options: ",option);
        // }

        if (isDropSelected == false) {
            // selectLength
            if ($("select").length == 1) {
                dropSelection = $("select").eq(0).val();
            } 
            else 
            {
                if ($("select").eq($("select").length - 1).val() == 'none') {
                    dropSelection = $("select").eq($("select").length - 2).val()
                }
                else {
                    dropSelection = $("select").eq($("select").length - 1).val()
                }
            }
        }

        if (dropSelection != 'Select-Child') {
            // console.log($(`.selectChildClass${dropSelection}`).length);
            if ($(`[data='parent_${dropSelection}']`).length == 0) {
                $(".selectSection").append(`
                    <select data="parent_${dropSelection}" name="selectChild">
                        <option value="none">None</option>
                    </select>
                `);
            }
        }

        if (dropSelection == 'Select-Child') {
            // $("select").not($("select").eq(0)).remove();

            $("select").eq(0).append(`<option value="${value}">${value}</option>`);

            $(".treeSection").append(`
                <ul>
                    <li data=${value}>
                        ${value}
                        <input type="button" class="btn edit" value="Edit">
                        <input type="button" class="btn delete" value="Delete">
                    </li>
                </ul>
            `);
        }
        else {
            $("select").eq($("select").length - 1).append(`<option value="${value}">${value}</option>`)

            $(".treeSection").find(`[data='${dropSelection}']`).append(`
                <ul>
                    <li data=${value}>
                        ${value}
                        <input type="button" class="btn edit" value="Edit">
                        <input type="button" class="btn delete" value="Delete">
                    </li>
                </ul>
            `);
        }
    });

    $(document).on('change', 'select', function () {
        var index = $(this).closest("select").index();
        if ($(this).closest("select").val() == 'none') {
            $("select").hide();
            for (i = 0; i <= index; i++) {
                $("select").eq(i).show();
            }
            dropSelection = $("select").eq(index - 1);
            isDropSelected = true;
        } else {
            for (i = 0; i <= index + 1; i++) {
                $("select").eq(i).show();
            }
        }

        console.log("index : ", index);
    });
});