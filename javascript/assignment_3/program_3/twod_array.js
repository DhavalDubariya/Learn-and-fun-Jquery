var fam = [["brother","sister"], ["mother","father"], ["son","dauter"]];

for(let index = 0;index<fam.length;index++)
{
    for(var z = 0; z < fam[index].length; z++) {
        console.log([index , z] + " " + fam[index][z])
    }
}