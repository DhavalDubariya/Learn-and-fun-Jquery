// var i;
// var text = "*";
// for (i = 0; i < 5; i++) {
//   text = text + "*";
//   console.log(text);
// }



// var n= 5;
// var s= "*"
// var e = "";

// for(let i=0;i<=n;i++)
// {
//     for(let j=n;j>i;j--)
//     {
//             e = e + " ";
//     }
//     for(let k=0;k<i*2-1;k++)
//     {
//         e = e + s;
//     }
//     e = e + "\n";
// }
// console.log(e);

var n=10;
var s ="*";
var e ="";

for(let i=0;i<=n;i++)
{
    for( let j=n ;j<=i;j++)
    {
        
        e = e +  s ;
    }
    e = e + "\n";
}
console.log(e);