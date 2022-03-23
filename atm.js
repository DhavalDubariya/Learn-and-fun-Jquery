var amount = 30;
var balance = 120;
var charges = 0.50;
var ans;

if(amount%5==0 && amount<(balance+charges) )
{
    ans = balance - amount - charges;
    console.log(ans)
}
else
{
    console.log(balance);
}
