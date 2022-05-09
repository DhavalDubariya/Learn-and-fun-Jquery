$(document).ready(function () { 
  

  $(".add_table").append(`
  <table id="0">
    <thead>
      <tr class="test">
        
      </tr>
    </thead>
    <tbody></tbody>
  </table>`);

  // Add Fields with Table
  $(".addmore_btn").click(function () {
    bootbox.confirm("Click On Ok Button To Add More Fields", (result) => {
      if (result == true) {
        $(".append").append(` 
        <div class="addmore_data">
        <div class="parent_addmore">
          <input
            type="text"
            id="title"
            class="title_input"
            placeholder="Title"
          />
          <button class="add_child" id="addchild">Add Child</button>
          <button style="display: none;" class="submit_btn" id="submit">Submit</button>
          <button class="delete_btn" id="delete">Delete</button>
        </div>
      </div>
      `);
$(".add_table").append(`
  <table>
    <thead>
      <tr class="test" >
        
      </tr>
    </thead>
    <tbody></tbody>
  </table>
`);
      }
    });
  });
});


//Add Child to Field
$(document).on("click", ".add_child", function () {
  bootbox.confirm("Click On Ok Button To Add Child Fields", (result) => {
    if (result == true) {
      var index_addmore_data = $(this).closest(".addmore_data").index();
      $(".addmore_data").eq(index_addmore_data).append(`
  <div class="child_addmore">
  <input
    type="text"
    id="child_subtitle"
    class="child_addmore_in_sub"
    placeholder="Subtitle"
  />
  <input
    type="text"
    id="child_value"
    class="child_addmore_in"
    placeholder="Value"
  />
  <button class="child_delete_btn" id="delete_child">Delete</button>
</div>
  `);
    }
  });
});


//key press
$(document).on("keyup",".child_addmore_in_sub,.title_input,.child_addmore_in", function () {
  $(".submit_btn").click();
});

//Submit Button
$(document).on("click",".submit_btn", function () {
  var index_submit_btn = $(".submit_btn").index(this);
  
  $("table").eq(index_submit_btn).find("thead tr").removeClass("test");

  var length_child = $(this)
    .parents(".addmore_data")
    .find(".child_addmore").length;

  console.log(length_child);

  var title = $(".title_input").eq(index_submit_btn).val();
  
  if(title.length==0)
  {
    $("table").eq(index_submit_btn).find("thead tr").addClass("test");
  }

  $("table").eq(index_submit_btn).find("tr th").remove();
  $("table").eq(index_submit_btn).find("tbody tr").remove();
  $(this)
    .parents()
    .find("table")
    .eq(index_submit_btn)
    .find("thead tr")
    .append(`<th colspan="2">${title}</th>`);

  for (let i = 0; i < length_child; i++) {
    var sub_ti = $(this).parents(".addmore_data").find(".child_addmore_in_sub").eq(i).val();
    var sub_val = $(this).parents(".addmore_data").find(".child_addmore_in").eq(i).val();

    if(sub_ti == 0 && sub_val == 0)
    {
      continue;
    }
    else
    {
    $(this).parents().find(`table`).eq(index_submit_btn).find("tbody")
      .append(`<tr>
           <td>${sub_ti}</td>
           <td>${sub_val}</td>
    </tr>`);
    }
  }


});

//Child Fields Delete
$(document).on("click", ".child_delete_btn", function () {
  var index_child_delete = $(".child_delete_btn").index(this);
  bootbox.confirm({
    message: "Are You Sure You Want to Delete This Child ?",
    buttons: {
      confirm: {
        label: "Yes",
        className: "btn-success",
      },
      cancel: {
        label: "No",
        className: "btn-danger",
      },
    },
    callback: (result) => {
      if (result == true) {
        $(".child_addmore").eq(index_child_delete).remove();
        $(".submit_btn").click();
      }
    },
  });
});

//Prent Delete On Click
$(document).on("click", ".delete_btn", function () {
  bootbox.confirm({
    message: "Are You Sure You Want to Delete This Field ?",
    buttons: {
      confirm: {
        label: "Yes",
        className: "btn-success",
      },
      cancel: {
        label: "No",
        className: "btn-danger",
      },
    },
    callback: (result) => {
      if (result == true) {
        var addmore_date = $(".addmore_data").length;
        
        var length_child = $(this).parents(".addmore_data").find(".child_addmore").length;

        if(length_child>0)
        {
          bootbox.alert("There are child fields in this field");
        }
        else if(addmore_date == 1)
        {
          bootbox.alert("You are not allowed to Delete last Field");
        }
        else
        {
          var index_child_delete = $(".delete_btn").index(this);
          $(`.addmore_data`).eq(index_child_delete).remove();
          $(`table`).eq(index_child_delete).remove();
        }        
      }
    },
  });
});
