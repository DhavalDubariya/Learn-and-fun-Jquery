var array = [
  "Raj",
  "Jeel",
  "Chirag",
  "Manav",
  "Aakash",
  "Dhruvi",
  "Aksh",
  "Tilak",
  " Kshitij",
  " Vasu",
  " Vishal",
  " Pinac",
  " Satyam",
  "Zeel",
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
