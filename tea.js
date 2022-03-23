var array = [
    "Kshitij Antani",
    "Pinak Changela",
    "Raj Vyas",
    "Riya Chauhan",
    "Pravin Chaudhary",
    "Dhruvi Trivedi",
    "Tilak Ved",
    "Aksh Maradiya",
    "Satyam Chaudhary",
    "Manav Joshi",
    "Mihir Sangani",
    "Vishal Mehta"
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
  