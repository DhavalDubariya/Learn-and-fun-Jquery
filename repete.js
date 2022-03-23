let array = [1, 2,2,4,5]
let count=0;
let repet;
let mis;
let mising;
for(let i=0;i<array.length;i++)
{
    for(let j=0;j<array.length;j++)
    {
        if(j!=i)
        {   
            if(array[i]==array[j])
            {
                count++;
                repet = array[i];
            }
        }
        if(array.includes(i+1) == false)
        {
            mising=i+1;
        }

    }
}

// console.log(count);
console.log("Missing=",mising,"Repeating=",repet);