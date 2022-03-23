
var n= 5;
var e = "";



for(let i=0;i<=n;i++)
{   

    
    for(let j=-n;j<=n;j++)
    
    {
        if(i-Math.abs(j)>=0)
        {
            e+=(i-Math.abs(j)+1); 
        }  
        else
            {
                e+= " ";
            }

        
    }

    
    e +="\n";
}

console.log(e);