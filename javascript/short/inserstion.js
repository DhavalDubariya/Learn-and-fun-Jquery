let array = [3,'A','y', 5,'d', 4, 1];

    for (let i = 1; i < array.length; i++) 
    {
      
      let j = i - 1
      
      let temp = array[i]
    
      while (j >= 0 && array[j] > temp) 
      {
        array[j + 1] = array[j]
        j--
      }
      
      array[j+1] = temp;
      
    }
console.log(array)



let array=[5,4,3,0,8,6,5,4]
for(i=1;i<array.length;i++){
    current=array[i]
    for(j=i-1;j>=0;j--){
        if(current<array[j]){
            array[j+1] = array[j]
        }
    }
    array[j+1] = current;
}
console.log(array);