// chart_1

let myChart = document.getElementById("myChart").getContext("2d");

let massPopchart = new Chart(myChart, {
  type: "doughnut",
  data: {
    lables: ["India", "worcester"],
    datasets: [
      {
        lable1: "populaction",
        data: [40, 60],

        backgroundColor: ["#2ECCB8", "#002554"],
        hoverOffset: 4,
        cutout: 100,
      },
    ],
  },

  option: {
    title: {
      display: true,
      text: "Items Distribution",
    },
  },
});

// Chart_2

let myChart_2 = document.getElementById("myChart_2").getContext("2d");

let massPopchart_2 = new Chart(myChart_2, {
  type: "doughnut",
  data: {
    lables: ["India", "worcester"],
    datasets: [
      {
        lable1: "populaction",
        data: [40, 60],

        backgroundColor: ["#2ECCB8", "#002554"],
        hoverOffset: 4,
        cutout: 100,
      },
    ],
  },

  option: {
    title: {
      display: true,
      text: "Items Distribution",
    },
  },
});

//chart 23

let myChart_3 = document.getElementById("myChart_3").getContext("2d");

let massPopchart_3 = new Chart(myChart_3, {
  type: "bar",
  data: {
    lables: ["India", "worcester","Tankara","morbi"],
    datasets: [
      {
        lable1: "populaction",
        data: [40, 60,70,80],

        backgroundColor: ["#2ECCB8", "#002554","#2ECCB8", "#002554"],
        hoverOffset: 4,
      },
    ],
  },

  option: {
    title: {
      display: true,
      text: "Items Distribution",
    },
  },
});