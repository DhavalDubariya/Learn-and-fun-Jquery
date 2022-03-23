var n =6;
var e ="";

for(let i=0;i<n;i++)
{
    for(let j=0;j<n;j++)
    {   
        if(  i == n/2 && j == n/2)
        {
            e+="o";
        }
        else if( i==j )
        {
            e+="\\"
        }
        else if( i+j==n-1 )
        {
            e+="/"
        }
        else if( i+j == i || i+j>=n && j==(n-1))
        {
            e+="|"
        }
        else if(i+j==j  || i+j>=n && i==(n-1))
        {
            e+="-"
        }
        else
        {
            e+=" ";
        }
    }
    e+="\n";
}
console.log(e);