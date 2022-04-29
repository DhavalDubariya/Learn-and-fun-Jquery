var n = 8;
var e="";

for(let i=-n+1;i<n;i++)
{
    for(let j=-n+1;j<n;j++)
    {
        if(j==0)
        {
            e+=Math.abs(i)+1+" ";;
        }
        else if(i==0)
        {
            e+=Math.abs(j)+1+" ";;
        }
        else if(j==-n+1 && j==n && i==n && i==-n+1 )
        {
            e+=n;
        }
        else
        {
            e+=Math.abs(j)+ 1 +" ";
        }
    }
    e+="\n";
}
console.log(e);