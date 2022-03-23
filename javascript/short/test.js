let array = ["a", "z", "B", "b", "Z","C","A"];
let temp;
let min;
let ans;


function small(first, second) {
    first = first.charCodeAt();
    second = second.charCodeAt();

    if (first > 91) {
        first_new = first - 97;
    }
    else {
        first_new = first - 65;
    }
    if (second > 91) {
        second_new = second - 97;
    }
    else {
        second_new = second - 65;
    }
    if(first_new==second_new && second < first){
        return true;
    }
    else if(first_new < second_new){
        return true;
    }
    return false;
    
}


for (i = 0; i < array.length; i++)
 {
    min = i;
    for (j = i + 1; j < array.length; j++)
    {
        if (small(array[j], array[min])) 
        {
            min = j;
        }
    }
    
    temp = array[min];
    array[min] = array[i];
    array[i] = temp;
}
console.log(array);