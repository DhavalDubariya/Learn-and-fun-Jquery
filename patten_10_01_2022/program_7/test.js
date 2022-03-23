let n = "5";
let e = "";

for(let i=0;i<=n;i++)
{
    for(let j=0;j<i;j++)
    {
        e+="*";
    }
    e+="\n";
}

for(let i=0;i<=n;i++)
{
    for(let j=n-1;j>i;j--)
    {
        e+="*";
    }
    e+="\n";
}
console.log(e);