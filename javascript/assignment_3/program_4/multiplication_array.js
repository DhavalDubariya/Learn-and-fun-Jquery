var arrayone = [4,5,6];
var arraytwo = [6,7,8];
var arraythree = [];

for(let index=0;index<arrayone.length;index++)
{
    var multiplication = arrayone[index]*arraytwo[index];
    arraythree.push(multiplication);
}
console.log(arraythree);