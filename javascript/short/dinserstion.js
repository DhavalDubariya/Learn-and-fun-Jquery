let array = [5,"A", "M", "c",1.5,3,8];
let current;
let temp;
let temp1;

for(i=1;i<array.length;i++)
{
     if(typeof array[i] == 'number')
      {
        current = array[i]
      }
      else if(typeof array[i] == 'string' )
      { 
          if(array[i].charCodeAt(0)>91)
          {
            temp = array[i].charCodeAt(0) - 97;
            temp1 = array[i];
          }
          else if(array[i].charCodeAt(0)<91)
          {
              temp =array[i].charCodeAt(0) - 65;
              temp1 = array[i];
          } 
      }

     
    for(j=i-1;(j>=0 && current<array[j]) || (j>=0 && temp<array[j]);j--){
            array[j+1] = array[j]
    }
    //console.log(j)
   
    array[j+1] = current;

    
    
    
    //console.log(array[j+1])
}
console.log(array);