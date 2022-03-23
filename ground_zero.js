let array = [5,6,8,-7,5];
let array_p = [];
let array_n = [];
let sum;
let sum1;
for(let i=0;i<array.length;i++)
{
    for(let j=0;j<array.length;j++)
    {
        if(j!=i)
        {
            sum = Math.abs(array[i] + array[j]);
            array_p.push(sum);
        }
        
    }   
}
console.log(array_p.sort());

for(let i=0;i<array.length;i++)
{
    for(let j=0;j<array.length;j++)
    {
        if(j!=i)
        {
            sum2 = Math.abs(array[i] + array[j]);
            if(array_p[0] == sum2)
            {
                console.log(array[i],array[j]);
            }
        }
        
    }   
}