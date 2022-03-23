var array = [25,5,5,20,12,15,10];

for(let i=0;i<array.length;i++)
{   
    mid = 20
    for(let j=0;j<array.length;j++)
    {
        if(i!=j)
        {   
            if(array[i]<array[j])
            {
                temp = array[i];
                array[i] = array[j]
                array[j] = temp;
            }
        }
    }
}
console.log(array)