
var alphaarray =[10,20,30,40,50,60,70,80,90];
var sum = 0;
var index = 1;
function loop(index)
{   

    sum+=alphaarray[index];
    index+=1;

    if(index==9)
    {
        return "0";
    }
    loop(index)
}
loop(index)
console.log(sum)