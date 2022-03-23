
var n= 5;
var e = "";

for(let i=0;i<n;i++)
{
    for(let j=n;j>i;j--)
    {
       e += " ";
    }
    for(let k=0;k<=i;k++)
    {
         e = e + "*";
    }

    e = e + "\n";
}
console.log(e);

// for(let i=0;i<n;i++)
// {
//     for(let j=0;j<n;j++)
//     {
//         if(i+j<=n-1)
//         {
//             e += " ";
//         }
//         else
//         {
//             e+= "*";
//         }
       
//     }

 
// }
// console.log(e);