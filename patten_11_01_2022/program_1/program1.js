var n = 5;
var e ="";

for(let i=0;i<n;i++)
{
    for(let j=0;j<n;j++)
    {
        if(i == j || i+j==n-1 )
        {
            e+= " #"
        }
        else
        {
            e+= " *"
        }
    }
    e+= "\n";
}
console.log(e);