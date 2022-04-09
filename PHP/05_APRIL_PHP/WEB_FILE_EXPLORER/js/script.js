// function file_double_click(path_value_file) {
//     document.getElementById("demo").innerHTML = path_value_file;
// }
var operators;

function file_click(click_operators) {
  // window.location.href = "index.php?index="+click_operators;
  operators = "index.php?index=" + click_operators;
  // document.getElementById("p2").style.color = "blue";

  // document.getElementById("demo").innerHTML = operators;
  return operators;
}

function file_coppy(dhaval) {
  window.location.href = operators + "&coppy_file=" + dhaval;
}

function delete_file(delete_file_folder) {
  var answer = confirm("Are you sure you want to delete");
  if (answer) {
    window.location.href = operators + "&delete_file=" + delete_file_folder;
  } else {
    alert("Thanks for sticking around!");
  }
}

function file_cut(cut_file) {
  window.location.href = operators + "&cut_file=" + cut_file;
}

function tree_list(hello) {
    window.location.href = operators + "&test=" + hello;
}
