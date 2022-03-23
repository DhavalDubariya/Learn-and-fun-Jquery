var building1 = ["school"];
var building2 = ["gym"];
var building3 = ["gym","school"];
var building4 = ["school"];
var building5 = ["school","store"];
var ans_array = [];

var build1_count = 0;
var build2_count = 0;
var build3_count = 0;
var build4_count = 0;
var build5_count = 0;


var build1_count1 = 0;
var build2_count2 = 0;
var build3_count3 = 0;
var build4_count4 = 0;
var build5_count5 = 0;

var d;
var input_array = ["store","school"];
var new_array =[building1,building2,building3,building4,building5];
var new_count = [build1_count,build2_count,build3_count,build4_count,build5_count]

for(let i=0;i<input_array.length;i++)
{
    for(let j=0;j<new_array.length;j++)
    {
        if(new_array[j].includes(input_array[i]))
        {   
            if(new_array[j] == building1 )
            {
                build1_count = 1;
                build1_count1++
            }
            if(new_array[j] == building2 )
            {
                build2_count = 2;
                build2_count2++
            }
            if(new_array[j] == building3 )
            {
                build3_count = 3;
                build3_count3++
            }
            if(new_array[j] == building4 )
            {
                build4_count = 4;
                build4_count4++
            }
            if(new_array[j] == building5 )
            {
                build5_count = 5;
                build5_count5++
            }
            
        }

    }

 d = Math.max(build1_count,build2_count,build3_count,build4_count,build5_count)
 ans_array.push(d)
 console.log(d)
 console.log(build1_count,build2_count,build3_count,build4_count,build5_count)

}
console.log(Math.min(...ans_array))