$(document).ready(function () {


  $(".add_table").append(`
  <table id="0" class="test" >
    <thead>
      <tr>
        
      </tr>
    </thead>
    <tbody></tbody>
  </table>`);


  $(".addmore_btn").click(function () {

    var index = $(".addmore_data").length;

    $(".append").append(` 
        <div class="addmore_data" >
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
    
    $(".add_table").append(`
  <table class="test" >
    <thead>
      <tr>
        
      </tr>
    </thead>
    <tbody></tbody>
  </table>
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

  console.log(index_submit_btn);

  var length_child = $(this)
    .parents(".addmore_data")
    .find(".child_addmore").length;

  console.log(length_child);

  var title = $(".title_input").eq(index_submit_btn).val();

  $(this)
    .parents()
    .find(`table#${index_submit_btn}`)
    .find("th")
    .remove();
  $(this)
    .parents()
    .find(`table#${index_submit_btn}`)
    .find("tbody")
    .empty();
  $(this)
    .parents()
    .find(`table#${index_submit_btn} thead tr`)
    .append(`<th colspan="2">${title}</th>`);

  // $(`table table#${index_submit_btn}`).find("tbody").empty();

  for (let i = 0; i < length_child; i++) {
    var sub_ti = $(this)
      .parents(".addmore_data")
      .find(".child_addmore_in_sub")
      .eq(i)
      .val();
    var sub_val = $(this)
      .parents(".addmore_data")
      .find(".child_addmore_in")
      .eq(i)
      .val();

    console.log(sub_ti, sub_val, i);
    console.log(index_submit_btn);

    $(this).parents().find(`table#${index_submit_btn}`).find("tbody")
      .append(`<tr>
           <td>${sub_ti} ${i}</td>
           <td>${sub_val} ${i}</td>
    </tr>`);
  }

  //For Index maintenance
  // $("thead").each(function (i) {
  //   $($(this).find("tr")[0]).html(i);
  // });
});

//Child Delete
$(document).on("click", ".child_delete_btn", function () {
  var index_child_delete = $(".child_delete_btn").index(this);
  $(".child_addmore").eq(index_child_delete).remove();
});

//Prent Delete
$(document).on("click", ".delete_btn", function () {
  var index_child_delete = $(".delete_btn").index(this);
  $(`.addmore_data`).eq(index_child_delete).remove();
  $(`table`).eq(index_child_delete).remove();
});
