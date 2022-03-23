var n= 5;
var e = "";
var alpha = ["a","b","c","d","e","f"];

for(let i=-n-1;i<=n+1;i++)
{
   
    for (let j = -n-1; j <=n+1; j++) 
    {
       
            if(i==-n-1 || i==n+1 || j==n+1 || j==-n-1 )
            {
                e+= "0";
            }
            else if(Math.abs(i)-Math.abs(j)>=0)
            {
                if(i<0 && j>0 || i>0 && j<0)
                {   
                    var d = Math.abs(i)-Math.abs(j);
                    e+=d+1;
                }
                else
                {
                    e += alpha[Math.abs(i)-Math.abs(j)];
                }
                
            }
            else
            {
                e += " ";
            }
            
    
    }
    e+="\n";
}
console.log(e);