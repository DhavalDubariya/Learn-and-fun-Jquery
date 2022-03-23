var intArray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
var alphaArray = ["a", "b", "c", "d", "e"];

var newArray = [];
var alphaIntArray = [intArray, alphaArray];

for (let k = 0; k < 10; k++) {
  ////////////// Shuffle two array
  for (let i = 0; i < 10; i++) {
    var random = Math.floor(Math.random() * 10);
    var sum = intArray[random];
  }
  for (let j = 0; j < 5; j++) {
    var random2 = Math.floor(Math.random() * 5);
    var sum2 = alphaArray[random2];
  }
  for (let i = 0; i <= 10; i++) {
    var random = Math.floor(Math.random() * 2);
    var alphint = alphaIntArray[random];
    var constantc;
    if (alphint == intArray) {
      var random2 = Math.floor(Math.random() * 10);
      constantc = intArray[random2];
      sum3 = sum + sum2;
    } else if (alphint == alphaArray) {
      var random3 = Math.floor(Math.random() * 5);
      constantc = alphaArray[random3];
      sum3 = sum2 + sum;
    }
  }

  ////////////// Random value from two arrays

  var random = Math.floor(Math.random() * 2);
  var alphint = alphaIntArray[random];
  var constantc;
  if (alphint == intArray) {
    var random2 = Math.floor(Math.random() * 10);
    constantc = intArray[random2];
  } else if (alphint == alphaArray) {
    var random3 = Math.floor(Math.random() * 5);
    constantc = alphaArray[random3];
  }

  var ans = sum3 + constantc;
  newArray.push(ans);
}
console.log(newArray);
