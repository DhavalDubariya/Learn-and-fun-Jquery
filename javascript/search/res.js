var index = 1;
var y;
function even(index)
{
    var d = index*2
    console.log(d)
    index+=1
    if(index==11)
    {
        return "0";
    }
    even(index)
}
even(index)
console.log("\n")
function odd(index)
{
     var d = index*2 - 1
    console.log(d)
    index+=1
    if(index==11)
    {
        return "0";
    }
    odd(index)
}
odd(index)