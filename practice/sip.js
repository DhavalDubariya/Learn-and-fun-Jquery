var amount = 1000;
var t = 120;
var intrest = 5/100;
var sip=0;
var i=0;
while(i<=t)
{   
   
    // var sip = (amount  * intrest + amount) + sip; 

    var sip = (sip + amount)*intrest + (sip + amount);

    console.log(i,sip);
    i++;
}

console.log(sip);
