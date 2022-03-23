var hun_array = [
  { age: "teenager", category: "politics", visitors: 88 },
  { age: "teenager", category: "sports ", visitors: 42 },
  { age: "teenager", category: "movie", visitors: 64 },
  { age: "teenager", category: "sports ", visitors: 61 },
  { age: "adult", category: "sports ", visitors: 35 },
  { age: "adult", category: "sports ", visitors: 25 },
  { age: "adult", category: "sports ", visitors: 12 },
  { age: "adult", category: "education", visitors: 44 },
  { age: "adult", category: "sports ", visitors: 62 },
  { age: "teenager", category: "politics", visitors: 67 },
  { age: "adult", category: "politics", visitors: 28 },
  { age: "teenager", category: "politics", visitors: 93 },
  { age: "adult", category: "movie", visitors: 65 },
  { age: "teenager", category: "sports ", visitors: 2 },
  { age: "adult", category: "news", visitors: 33 },
  { age: "adult", category: "politics", visitors: 23 },
  { age: "adult", category: "sports ", visitors: 8 },
  { age: "teenager", category: "news", visitors: 61 },
  { age: "teenager", category: "education", visitors: 44 },
  { age: "adult", category: "news", visitors: 15 },
  { age: "adult", category: "education", visitors: 74 },
  { age: "adult", category: "news", visitors: 61 },
  { age: "adult", category: "movie", visitors: 0 },
  { age: "adult", category: "movie", visitors: 39 },
  { age: "adult", category: "movie", visitors: 68 },
  { age: "adult", category: "movie", visitors: 51 },
  { age: "teenager", category: "politics", visitors: 78 },
  { age: "teenager", category: "sports ", visitors: 55 },
  { age: "adult", category: "education", visitors: 24 },
  { age: "teenager", category: "sports ", visitors: 40 },
  { age: "adult", category: "news", visitors: 56 },
  { age: "adult", category: "movie", visitors: 58 },
  { age: "adult", category: "news", visitors: 35 },
  { age: "teenager", category: "news", visitors: 17 },
  { age: "adult", category: "news", visitors: 12 },
  { age: "adult", category: "movie", visitors: 73 },
  { age: "teenager", category: "movie", visitors: 92 },
  { age: "teenager", category: "education", visitors: 92 },
  { age: "teenager", category: "politics", visitors: 22 },
  { age: "teenager", category: "news", visitors: 53 },
  { age: "teenager", category: "movie", visitors: 35 },
  { age: "teenager", category: "education", visitors: 25 },
  { age: "teenager", category: "politics", visitors: 28 },
  { age: "teenager", category: "movie", visitors: 74 },
  { age: "adult", category: "movie", visitors: 66 },
  { age: "teenager", category: "education", visitors: 4 },
  { age: "adult", category: "news", visitors: 65 },
  { age: "teenager", category: "sports ", visitors: 13 },
  { age: "teenager", category: "education", visitors: 98 },
  { age: "adult", category: "sports ", visitors: 11 },
  { age: "adult", category: "sports ", visitors: 27 },
  { age: "teenager", category: "politics", visitors: 70 },
  { age: "teenager", category: "news", visitors: 46 },
  { age: "teenager", category: "sports ", visitors: 87 },
  { age: "teenager", category: "news", visitors: 24 },
  { age: "adult", category: "movie", visitors: 9 },
  { age: "adult", category: "movie", visitors: 43 },
  { age: "adult", category: "news", visitors: 24 },
  { age: "teenager", category: "education", visitors: 69 },
  { age: "teenager", category: "education", visitors: 14 },
  { age: "teenager", category: "news", visitors: 89 },
  { age: "adult", category: "sports ", visitors: 20 },
  { age: "adult", category: "sports ", visitors: 33 },
  { age: "teenager", category: "news", visitors: 3 },
  { age: "teenager", category: "education", visitors: 59 },
  { age: "teenager", category: "news", visitors: 70 },
  { age: "teenager", category: "news", visitors: 72 },
  { age: "teenager", category: "politics", visitors: 71 },
  { age: "teenager", category: "sports ", visitors: 23 },
  { age: "adult", category: "news", visitors: 0 },
  { age: "adult", category: "news", visitors: 99 },
  { age: "teenager", category: "sports ", visitors: 2 },
  { age: "adult", category: "education", visitors: 8 },
  { age: "teenager", category: "education", visitors: 2 },
  { age: "adult", category: "news", visitors: 72 },
  { age: "teenager", category: "sports ", visitors: 3 },
  { age: "adult", category: "politics", visitors: 54 },
  { age: "adult", category: "politics", visitors: 43 },
  { age: "adult", category: "politics", visitors: 91 },
  { age: "teenager", category: "movie", visitors: 35 },
  { age: "teenager", category: "politics", visitors: 79 },
  { age: "adult", category: "sports ", visitors: 90 },
  { age: "teenager", category: "education", visitors: 29 },
  { age: "teenager", category: "news", visitors: 67 },
  { age: "adult", category: "sports ", visitors: 57 },
  { age: "teenager", category: "news", visitors: 97 },
  { age: "adult", category: "movie", visitors: 39 },
  { age: "adult", category: "news", visitors: 81 },
  { age: "teenager", category: "news", visitors: 52 },
  { age: "adult", category: "movie", visitors: 47 },
  { age: "adult", category: "education", visitors: 86 },
  { age: "teenager", category: "education", visitors: 87 },
  { age: "teenager", category: "news", visitors: 14 },
  { age: "adult", category: "news", visitors: 39 },
  { age: "teenager", category: "sports ", visitors: 34 },
  { age: "teenager", category: "sports ", visitors: 59 },
  { age: "adult", category: "politics", visitors: 52 },
  { age: "teenager", category: "movie", visitors: 70 },
  { age: "adult", category: "education", visitors: 42 },
  { age: "adult", category: "education", visitors: 10 },
];

var movie_teen = 0;
var news_teen = 0;
var education_teen = 0;
var sports_teen = 0;
var politics_teen = 0;

var movie_adult = 0;
var news_adult = 0;
var education_adult = 0;
var sports_adult = 0;
var politics_adult = 0;

for(let i=0;i<100;i++)
{
////////////////////////// Teenager
    if(hun_array[i].age == "teenager")
    {
        if(hun_array[i].category == "movie")
        {
            movie_teen = movie_teen + hun_array[i].visitors;
           
        }

        if(hun_array[i].category == "news")
        {
            news_teen = news_teen + hun_array[i].visitors;
           
        }
        
        if(hun_array[i].category == "education")
        {
            education_teen = education_teen + hun_array[i].visitors;
            
        }

        if(hun_array[i].category == "sports ")
        {
            sports_teen = sports_teen + hun_array[i].visitors;
            
        }

        if(hun_array[i].category == "politics")
        {
            politics_teen = politics_teen + hun_array[i].visitors;
           
        }
    }
///////////////////////////////////Adult
    if(hun_array[i].age == "adult")
    {
        if(hun_array[i].category == "movie")
        {
            movie_adult = movie_adult + hun_array[i].visitors;
            
        }

        if(hun_array[i].category == "news")
        {
            news_adult = news_adult + hun_array[i].visitors;
           
        }
        
        if(hun_array[i].category == "education")
        {
            education_adult = education_adult + hun_array[i].visitors;
            
        }

        if(hun_array[i].category == "sports ")
        {
            sports_adult = sports_adult + hun_array[i].visitors;
            
        }

        if(hun_array[i].category == "politics")
        {
            politics_adult = politics_adult + hun_array[i].visitors;
            
        }
    }
}

var len = 0;

for(let j=0;j<hun_array.length;j++)
{
     len = hun_array[j].visitors + len;
}




var movie_a = (movie_teen/len)*100;
var news_a = (news_teen/len)*100;
var education_a = (education_teen/len)*100;
var sports_a = (sports_teen/len)*100;
var politics_a = (politics_teen/len)*100;

var politics_t = (politics_adult/len)*100;
var sports_t = (sports_adult/len)*100;
var education_t = (education_adult/len)*100;
var news_t = (news_adult/len)*100;
var movie_t = (movie_adult/len)*100;

console.log({movie: [movie_a, movie_t],
news: [news_a, news_t],
education: [education_a, education_t],
sports: [sports_a, sports_t],
politics: [politics_a, politics_t],});

var sum = movie_a + movie_t + news_a + news_t +
    education_a + education_t+
    +sports_a + sports_t +
    politics_a+politics_t;

console.log(sum);