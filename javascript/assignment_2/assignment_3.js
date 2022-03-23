var a=1;
var b=-3;
var c=10;

var d = b*b - 4*a*c;
if(d>0)
{

    var e = (-b + Math.sqrt(d))/2*a;
    var f = (-b - Math.sqrt(d))/2*a;
    console.log(e,f);

}
else if(d==0)
{

    var e = -b/2*a;
    var f = -b/2*a;
    console.log(e,f);

}
else
{   

    var e  = ((-b + Math.sqrt(-(d)))/2*a);
    var f  = ((-b - Math.sqrt(-(d)))/2*a);
    console.log(e);
    console.log(f);

}