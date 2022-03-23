
var n= 5;
var e = "";

for(let i=0;i<n;i++)
{
    for(let j=n;j>i;j--)
    {
       e += "*";
    }
    e = e + "\n";
}
console.log(e);