let array = [12, 34, 10, 6, 40];
let array1 = [];
for(let i=0;i<array.length;i++)
{
    for(let j=0;j<array.length;j++)
    {
       if(j != i)
       {
        
        sum =  array[j]+array[i];
        array1.push(sum);
        // console.log(sum,array[i],array[j])
       }
    }
   
}
let d = Math.max(...array1)
console.log(d)
