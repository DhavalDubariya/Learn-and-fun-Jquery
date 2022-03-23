
var alphaarray =[10,20,30,40,50,60,70,80,90];
var e=""
var index = 0;
function loop(index)
{   
    e=alphaarray[index];
    console.log(e);
    index+=1
    if(index==9)
    {
        return "0";
    }
    loop(index)
    
}
loop(index)