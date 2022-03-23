let array = ["a", "z", "B", "b", "Z","C","A"];
let temp;
let min;
let ans;

for (let i = 0; i < array.length; i++)
{
  min = i;
  for (let j = 0; j < array.length; j++)
  {
      
    let array_new = array[j].charCodeAt(0);
    let new_min = array[min].charCodeAt(0);
    if(array[j].charCodeAt(0)>91 && array[min].charCodeAt(0)>91)
    {
       if (array[j].charCodeAt(0)-97 > array[min].charCodeAt(0)- 97) 
       {
            min = j;
       }
       
    }
    else if(array[j].charCodeAt(0)<91 && array[min].charCodeAt(0)<91)
    {
        if (array[j].charCodeAt(0) - 65 > array[min].charCodeAt(0) - 65) 
        {
             min = j;
        }
    }
    else if(array[j].charCodeAt(0)>91 && array[min].charCodeAt(0)<91)
    {
        if (array[j].charCodeAt(0) - 97 > array[min].charCodeAt(0) - 65) 
        {
             min = j;
        }
    }
    else if(array[j].charCodeAt(0)<91 && array[min].charCodeAt(0)>91)
    {
        if (array[j].charCodeAt(0) - 65 > array[min].charCodeAt(0) - 97) 
        {
             min = j;
        }
    }
    

    if (min != i) 
    {
      temp = array[i];
      array[i] = array[min];
      array[min] = temp;
    }

  }
}

console.log(array);

