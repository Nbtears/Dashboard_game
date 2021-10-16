const ctx = document.getElementById("myChart").getContext("2d");

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
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
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

const myChart = new Chart(ctx,config);