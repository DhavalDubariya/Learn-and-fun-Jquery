var n= 7;
var e = "";

for(let i=-(n + 1);i<=n+1;i++)
{
   
    for (let j = -(n+1); j <=n+1; j++) 
    {
       
            if(j==-(n+1) || j==n+1 )
            {
                e+= "|";
            }
            else  if( i==n+1 || i==-(n+1) )
            {
                e+= "=";
            }
            else if(i==0 && j==0)
            {
                e+="X";
            }
            else if(i-j==0)
            {
                e+="\\"
            }
            else if(Math.abs(i)-Math.abs(j)==0)
            {
                e+="/";
            }
             else if(i==0 || j==0)
            {
               
                 e+="0";
                
            }
            else if(i>0 && j>0 && i>=j || i<0 && j<0 && i<=j)
            {
               
                 e+=Math.abs(j);
                
            }
            else if(i>0 && j<0 && i+j<=0)
            {
                e+=n+j+1
            }
           
            else if(i<0 && j>0 && i+j>=0)
            {
                e+=n-Math.abs(j)+1
            }
            else if(Math.abs(i)-Math.abs(j)<=0)
            {
                e += String.fromCharCode(n-Math.abs(j)+98);
            }
            else
            {
                e += String.fromCharCode(Math.abs(j)+97);
            }
            
    }
    e+="\n";
}
console.log(e);