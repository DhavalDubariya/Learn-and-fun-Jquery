let array = [5,"A", "M", "c",1.5,3,8];
let dha;
let new_temp;
let temp;

    for (let i = 1; i < array.length; i++) 
    {
      
      if(typeof array[i] == 'number')
      {
        temp = array[i]
      }
      else
      { 
          if(array[i].charCodeAt()>96)
          {
            temp = array[i].charCodeAt() - 97;
          }
          else if(array[i].charCodeAt()<96)
          {
              temp =array[i].charCodeAt() - 65;
          }
      }
      
      
      for(j=i-1;j>=0 && temp<array[j];j--){
        array[j+1] = array[j]
      }
      
        array[j+1] = temp;
    }
    
console.log(array)


