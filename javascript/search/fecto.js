
var fact=1;
function factorial(number) {

    if(number==1)
    {
        return 1;
    }
    else
    {
        fact=fact*number;
    
        number = number - 1;
        return factorial(number)
    }
  
}
factorial(5)
console.log(fact);

