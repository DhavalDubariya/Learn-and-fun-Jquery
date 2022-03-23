var n= 7;
var e = "";


for(let i=-(n + 1);i<=n+1;i++)
{
   
    for (let j = -(n+1); j <=n+1; j++) 
    {
       
            if(j==-(n+1) || j==n+1 || i == 0 && j == 0)
            {
                e+= "O";
            }
            else  if( i==n+1 || i==-(n+1) )
            {
                e+= 0;
            }
            
            else if(i<0 && j<0 && i+Math.abs(j)<=0 || i>0 && j>0 && i-j>=0)
            { 
                e+= Math.abs(j);
            }
            else if(i>0 && j<0 && i+j<=0 || i<0 && j>0 && i+j>=0 )
            {
                e+=n-Math.abs(j)+1;
            }
            else
            {
                e += " ";
            }
    }
    e+="\n";
}
console.log(e);