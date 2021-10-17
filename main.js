const char1 = document.getElementById("angle").getContext("2d");
const char2 = document.getElementById("rep").getContext("2d");
const char3 = document.getElementById("Vel_Acc").getContext("2d");
const char4 = document.getElementById("Avg").getContext("2d");

const labels = [
    "2012",
    "2013",
    "2014",
    "2015",
    "2016",
    "2017",
    "2018",
];

const data = {
    labels,
    datasets: [
        {
        data: [40,60,80,100,120,140,160],
        label: "Ángulo máximo",
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        },
        {
            data: [78,20,40,10,80,130,180],
            label: "Ángulo máximo",
            backgroundColor: 'rgb(25, 135, 84)',
            borderColor: 'rgb(25, 135, 84)',
            },
    ],
};

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        plugins: {
            title: {
              display: true,
              text: 'Ángulo máximo',
            },
        },   
    },
};

const Angle_chart = new Chart(char1,config);
const Rep_chart = new Chart(char2,config);
const Vel_chart = new Chart(char3,config);
const Avg_chart = new Chart(char4,config);
