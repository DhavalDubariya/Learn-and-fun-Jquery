var cetegory = ["movie","news","education","sports","politics"]

var age = ["teenager","adult"]

var new_array = []

var visitors;
var age_random; 
var cetegory_random;

var adu_mov_cou=0;
var adu_new_cou=0;
var adu_edu_cou=0;
var adu_spo_cou=0;
var adu_pol_cou=0;

var adu_mov_adu=0;
var adu_new_adu=0;
var adu_edu_adu=0;
var adu_spo_adu=0;
var adu_pol_adu=0;

let num_visitors=0;

// console.log(cetegory.length)
for(let i=0;i<100;i++)
{
      age_random = Math.floor(Math.random()*2);
      cetegory_random = Math.floor(Math.random()*5)
      visitors = Math.floor(Math.random()*100)  

      new_array.push({i,age: age[age_random] , type: cetegory[cetegory_random] ,visitors: visitors })
}
console.log(new_array);
for(let j=0;j<100;j++)
{
//Adults
   if(new_array[j].age == 'adult')
   {
       if(new_array[j].type == 'movie')
       {
            adu_mov_cou+= new_array[j].visitors;
       }
       else if(new_array[j].type == 'news')
       {
            adu_new_cou+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'education')
       {
            adu_edu_cou+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'sports')
       {
            adu_spo_cou+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'politics')
       {
            adu_pol_cou+=new_array[j].visitors;
       }

   }


///Teenagers

   else if(new_array[j].age == 'teenager')
   {
       if(new_array[j].type == 'movie')
       {
            adu_mov_adu+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'news')
       {
            adu_new_adu+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'education')
       {
            adu_edu_adu+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'sports')
       {
            adu_spo_adu+=new_array[j].visitors;
       }
       else if(new_array[j].type == 'politics')
       {
            adu_pol_adu+=new_array[j].visitors;
       }
      
   }
   num_visitors = num_visitors + new_array[j].visitors;
   
 }

var cou_mov = (adu_mov_cou/num_visitors)*100;
var cou_new = (adu_new_cou/num_visitors)*100;
var cou_edu = (adu_edu_cou/num_visitors)*100;
var cou_spo = (adu_spo_cou/num_visitors)*100;
var cou_pol = (adu_pol_cou/num_visitors)*100;


var adu_mov = (adu_mov_adu/num_visitors)*100;
var adu_new = (adu_new_adu/num_visitors)*100;
var adu_edu = (adu_edu_adu/num_visitors)*100;
var adu_spo = (adu_spo_adu/num_visitors)*100;
var adu_pol = (adu_pol_adu/num_visitors)*100;

console.log({
    movie: [Math.floor(adu_mov),Math.floor(cou_mov)] , news: [Math.floor(adu_new),Math.floor(cou_new)] , education: [Math.floor(adu_edu),Math.floor(cou_edu)] , sports: [Math.floor(adu_spo),Math.floor(cou_spo)] , politics: [Math.floor(adu_pol),Math.floor(cou_pol)]
}
)
var ans = adu_mov + adu_new + adu_edu + adu_spo + adu_pol + cou_mov + cou_new + cou_edu + cou_spo + cou_pol;
console.log(ans)
