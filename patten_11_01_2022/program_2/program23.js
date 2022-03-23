// var n = 5;
// var e = "";

// for (let i = 0; i < n; i++)
// {
//   for (let j = 0; j < n; j++) 
//   {
//     if(i+j<n-1)
//     {
//         e += " ";
//     }
//     else
//     {
//         e += "@";
//     }

//   }

//   e += "\n";
// }

// for (let i = 0; i < n; i++)
// {
//   for (let j = 0; j < n+n; j++) 
//   {
//     if(i+j<=n*2-1 && j>=n)
//     {
//         e += "@";
//     }
//     else
//     {
//         e += " ";
//     }

//   }

//   e += "\n";
// }

// console.log(e);
var n= 10;
var e = "";

for(let i=-n;i<=n;i++)
{
    if(i==0)
    {
        continue;
    }
    for (let j = -n; j <=n; j++) 
    {
        if (j==0)
        {
            continue
        }
        if(Math.abs(i)+Math.abs(j)<=n+1  )
        {
            e += "*";
        }
        else
        {
            e += "-";
        }
    }
    e+="\n";
}
console.log(e);