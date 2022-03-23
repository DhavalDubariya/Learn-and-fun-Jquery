var n=5;
var e = "";

for(let i=0;i<1;i++)
{
    for(let j=-n;j<n;j++)
    {
        if(j==0 && i==0)
        {
            e+="O";
        }
       else
       {
           e+= " ";
       }
        
    }
    e+="\n";
}

for(let i=0;i<=n-1;i++)
{
    for(let i=1;i<=n;i++)
    {
        for(let j=-n;j<n+1;j++)
        {
            if(i+j==0)
            {
                e+="/"
            }
            else if(i-Math.abs(j)>=1)
            {
                e+="-"
            }
            else if(i-Math.abs(j) == 0)
            {
                e+="\\"
            }
            else
            {
                e+=" ";
            }
            
        }
        e+="\n";
    }
    
}

    for(let i=0;i<=n;i++)
    {
        for(let j=-n;j<=n;j++)
        {
            if(Math.abs(j)==0 || i==n)
            {
                e+="="
            }
            else if(Math.abs(j)==1)
            {
                e+="|"
            }
            else if(i==n)
            {
                e+= "="
            }

            else
            {
                e+=" ";
            }
            
        }
        e+="\n";
    }

    console.log(e);