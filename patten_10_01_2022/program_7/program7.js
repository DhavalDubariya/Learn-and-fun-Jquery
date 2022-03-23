var n = 10;
var e = "";

for(let i=0 ;i<n;i++)
{
    for(let j=n;j>i;j--)
    {
        e =e + " ";
    }
    for(let k=0;k<i*2-1;k++)
    {
        e =e + "*";
    }
    e = e + "\n";
}

for(let i=n ;i>0;i--)
{
    for(let j=n;j>i;j--)
    {
        e =e + " ";
    }
    for(let k=0;k<i*2-1;k++)
    {
        e =e + "*";
    }
    e = e + "\n";
}
console.log(e);