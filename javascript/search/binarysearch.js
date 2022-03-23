
var alphaarray =[10,20,30,40,50,60,70,80,90];
var start = 0;
var end = alphaarray.length - 1;
var find = 70;
var mid;

function search(alphaarray,start,end)
{   
    mid  = Math.floor(((start + end )/2));

    if(alphaarray[start] == find)
    {
        return start;
    }
    else if(alphaarray[end] == find)
    {
        return end;
    }
    else if(alphaarray[start] < find && find <= alphaarray[mid])
    {
        return search(alphaarray,start,mid);
    }
    else if(alphaarray[mid] <= find && find < alphaarray[end])
    {
        return search(alphaarray,mid,end);
    }
    else
    {
        return "0";
    }

}
console.log(search(alphaarray,start,end))