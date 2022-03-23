let array = ["a", "z", "B", "b", "Z","C","A"];
let temp;
let min;
let array_new;
let new_min;

for (let i = 0; i < array.length; i++)
{
  min = i;
  for (let j = 0; j < array.length; j++)
  {
      
    if(array[j].charCodeAt(0)>91 && array[min].charCodeAt(0)>91)
    {
     
        array_new = array[j].charCodeAt(0)-97;
        new_min = array[min].charCodeAt(0)-97;
      
        array_as =  array[j].charCodeAt(0);
        min_as = array[min].charCodeAt(0);
       
    }
    else if(array[j].charCodeAt(0)<91 && array[min].charCodeAt(0)<91)
    {
      
        array_new = array[j].charCodeAt(0)-65;
        new_min = array[min].charCodeAt(0)-65;

        array_as =  array[j].charCodeAt(0);
        min_as = array[min].charCodeAt(0);
    }
    else if(array[j].charCodeAt(0)>91 && array[min].charCodeAt(0)<91)
    {
     

        array_new = array[j].charCodeAt(0)-97;
        new_min = array[min].charCodeAt(0)-65;


        array_as =  array[j].charCodeAt(0);
        min_as = array[min].charCodeAt(0);
    }
    else if(array[j].charCodeAt(0)<91 && array[min].charCodeAt(0)>91)
    {
     

        array_new = array[j].charCodeAt(0)-65;
        new_min = array[min].charCodeAt(0)-97;


        array_as =  array[j].charCodeAt(0);
        min_as = array[min].charCodeAt(0);
    }
    
    if (array_new > new_min) 
    {
         min = j;
    }
    
    if (array_new == new_min && array_as < min_as)
    {
        min = j;
    }

   
      temp = array[i];
      array[i] = array[min];
      array[min] = temp;
    
  }
}

console.log(array);

