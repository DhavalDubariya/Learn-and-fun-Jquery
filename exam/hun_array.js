var category = ["movie", "news", "education", "sports ", "politics"];
var age = ["teenager", "adult"];

var newArray = [];

for(let i=0;i<100;i++)
{   
    var age_new = Math.round(Math.random())
    var ans2 = age[age_new];
    
    var cat_new = Math.round(Math.random() * 4);
    var ans3 = category[cat_new];
    
    var ans4 = Math.floor(Math.random() * 101);
    newArray.push({age:ans2 , category:ans3 ,visitors:ans4});
}


console.log(newArray);
