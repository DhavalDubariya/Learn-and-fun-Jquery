
var short =[50,60,70,80,55,2];
var temp;


    for(let i=0;i<short.length;i++)
    {
        for(let j=0;j<short.length;j++)
        {
            if(short[j]>short[j+1])
            {
                temp = short[j+1];
                short[j+1] = short[j]
                short[j] = temp
                console.log(short);
            }
        }
        // console.log(short)
    }

