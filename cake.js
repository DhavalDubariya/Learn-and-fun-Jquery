var array = [
  "Kshitij Antani",
  "Komal Papaniya",
  "Vishruti Faldu",
  "Richa Jhaveri",
  "Prachi Shah",
  "Astha Makavana",
  "Pinak Changela",
  "Dhara Vachhani",
  "Vasukumar Mathukiya",
  "Dharmendra Deval",
  "Malay Modi",
  "Raj Vyas",
  "Jeel Koradiya",
  "Riya Chauhan",
  "Chirag Kher",
  "Aakashkumar Rawal",
  "Vaibhav Mehta",
  "Pravin Chaudhary",
  "Dhruvi Trivedi",
  "Tilak Ved",
  "Hitanshi Mehta",
  "Aksh Maradiya",
  "Devang Shakya",
  "Satyam Chaudhary",
];

var new_array = [];
var random;
let i = 0;
while (i < array.length) {
  random = Math.floor(Math.random() * array.length);
  if (new_array.length == 0) {
    new_array.push(array[random]);
    i++;
  } else if (new_array.length >= 1) {
    if (new_array.includes(array[random])) {
      continue;
    } else {
      new_array.push(array[random]);
      i++;
    }
  }
}
console.log(new_array);
