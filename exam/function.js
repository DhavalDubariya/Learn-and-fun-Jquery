var n=2;
var z=25;
var i=2;
var k=2;
var theta=8;


var ans = Math.abs(z);
var sec = Math.pow(ans,(1/n));
var theta_new  = (Math.E)*i*(theta+2*k*3.14);
var div = theta_new / n;
var last = ans*div;

console.log(last);