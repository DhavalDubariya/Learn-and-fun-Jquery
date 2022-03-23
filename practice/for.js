var n=3;
var e = "";

for(let i=0;i<=n*n+1;i++)
{
    for(let j=-n;j<=n;j++)
    {
        if(j==0 && i==0)
        {
            e+="O";
        }

        else if(i+j==0 || i+j==3 && j<=-1)
        {
            e+="/"
        }
        else if(i-Math.abs(j)>=1 && i<=3 || i-Math.abs(j)>=4 && i<=6 )
        {
            e+="-"
        }
        else if(i-j == 0 || i-j==3 && j>=1)
        {
            e+="\\"
        }
        
        
        else if(i==10 || i>=7 && j==0)
        {
            e+="="
        }
        else if(i>6 && j<9 && (j == n-2 || j == -n+2))
        {
            e+="|"
        }
        
       
        else
        {
            e+=" ";
        }
    }
    e+="\n";
}
console.log(e);