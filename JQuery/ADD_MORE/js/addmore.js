$(document).ready(function () {
  $(".addmore_btn").click(function () {
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
          <button class="submit_btn" id="submit">Submit</button>
          <button class="delete_btn" id="delete">Delete</button>
        </div>
      </div>
      `);
  });
});

$(document).on("click", ".add_child", function () {
  var index_addmore_data = $(".add_child").index(this);
  // console.log(index_addmore_data);
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
});

//Submit

$(document).on("click", ".submit_btn", function () {

  var index_submit_btn = $(".submit_btn").index(this);
  
  $(".test").eq(index_submit_btn).remove();

  console.log(index_submit_btn);

  var length_child = $(this).parents(".addmore_data").find(".child_addmore").length;

  console.log(length_child);
  

  var title = $(".title_input").eq(index_submit_btn).val();

  $(".add_table").append(`<div class="table">
  <table class="test" >
    <tr>
      <th colspan="2">${title}</th>
    </tr>
  <tbody class="table_data" >
    
  <tbody>
  </table>
</div>`);
  for (let i = 0; i < length_child; i++) {
    var table_index = $(this).index();
    var sub_ti = $(this).parents(".addmore_data").find(".child_addmore_in_sub").eq(i).val();
    var sub_val = $(this).parents(".addmore_data").find(".child_addmore_in").eq(i).val();

    console.log(sub_ti, sub_val,i);
    console.log(index_submit_btn);
    $(".table_data").eq(index_submit_btn).append(`<tr>
           <td>${sub_ti}</td>
           <td>${sub_val}</td>
    </tr>`);
  }
});

//Child Delete
$(document).on("click", ".child_delete_btn", function () {
  var index_child_delete = $(".child_delete_btn").index(this);
  $(".child_addmore").eq(index_child_delete).remove();
});

//Prent Delete
$(document).on("click", ".delete_btn", function () {
  var index_child_delete = $(".delete_btn").index(this);
  $(".addmore_data").eq(index_child_delete).remove();
});
