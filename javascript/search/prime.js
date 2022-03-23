var number;
var index = 0;
function prime(number,index)
{   
    if(index>Math.sqrt(number))
    {
       return console.log("prime")
    }
    if(number%index==0)
    {
       return console.log("note prime")
    }
    index+=1;
    prime(number,index)
}
prime(9,2)