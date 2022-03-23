let n = 5;
let e = "";

for(let i=(-n-1);i<=(n+1);i++)
{
    for(let j=(-n-1);j<=(n+1);j++)
    {
        if(j==(-n-1) || j==(n+1))
        {
            e+="|";
        }
        else if(i==(-n-1) || i==(n+1) )
        {
            e+="=";
        }
        else if(i==0 && j==0)
        {
            e+="X"
        }
        else if(i==0 || j==0)
        {
            e+="0"
        }
        else if(i<0 && j<0 && i==j || i>0 && j>0 && i==j)
        {
            e+="\\"
        }
        else if(i<0 && j>0 && Math.abs(i)==j || i>0 && j<0 && Math.abs(j) == i)
        {
            e+="/"
        }
        else if(i<0 && j<0 && i - j<=0)
        {
            e+=Math.abs(j)
        }
        else if(i<0 && j<0 && Math.abs(i) + j <=0)
        {
            e+= String.fromCharCode(98+n-Math.abs(j))
        }
        else if(j>0 && i<0 && i+j<1)
        {
            e+=String.fromCharCode(97+Math.abs(j))
        }
        else if(j>0 && i<0 && j + i>=1)
        {
            e+=i + j;
        }
        else if(i>0 && j<0 && i + j<=-1)
        {
            e+=n - Math.abs(j) +1  ;
        }
        else if(i>0 && j<0 && i + j>=1)
        {
            e+=String.fromCharCode(97+Math.abs(j));
        }
        else if(i>0 && j>0 && j - i<1)
        {
            e+=j
        }
        else if(i>0 && j>0 && j - i>=1)
        {
            e+=String.fromCharCode(98+n-Math.abs(j));
        }
        else
        {
            e+=" ";
        }
       
    }
    e+="\n";
}
console.log(e)