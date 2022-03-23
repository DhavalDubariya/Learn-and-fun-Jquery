var sum = 0;
var index = 1;
function loop(index)
{   
    if(index%7==0 && index%9==0)
    {
        console.log(index)
    }
    index+=1

    if(index==1000)
    {
        return "0";
    }
    loop(index)
}
loop(index)
