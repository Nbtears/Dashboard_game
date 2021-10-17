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
const data1 = {
    labels,
    datasets: [
        {
            data: [40,60,80,100,120,140,160],
            label: "Flexión-Extensión",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
        }
    ],
};

const config1 = {
    type: 'line',
    data: data1,
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

const data2 = {
    labels,
    datasets: [
        {
            data: [4,2,8,10,5,7,8],
            label: "Flexión-Extensión",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
        },
        {
            data: [7,0,4,2,2,4,1],
            label: "Pronación-Supinación",
            backgroundColor: 'rgb(25, 135, 84)',
            borderColor: 'rgb(25, 135, 84)',
            },

        {
            data: [5,4,7,7,3,2,3],
            label: "Mov lateral",
            backgroundColor: 'rgb(180, 148, 47)',
            borderColor: 'rgb(180, 148, 47)',
            },
    ],
};

const config2 = {
    type: 'line',
    data: data2,
    options: {
        responsive: true,
        plugins: {
            title: {
              display: true,
              text: 'Repeticiones',
            },
        },   
    },
};

const data3 = {
    labels,
    datasets: [
        {
            data: [40,60,80,100,120,140,160],
            label: "Velocidad máxima",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
        },
        {
            data: [78,20,40,10,80,130,180],
            label: "Aceleración máxima",
            backgroundColor: 'rgb(25, 135, 84)',
            borderColor: 'rgb(25, 135, 84)',
            },
    ],
};

const config3 = {
    type: 'line',
    data: data3,
    options: {
        responsive: true,
        plugins: {
            title: {
              display: true,
              text: 'Velocidad y aceleración máximas',
            },
        },   
    },
};

const data4 = {
    labels,
    datasets: [
        {
            data: [40,60,80,100,120,140,160],
            label: "Velocidad promedio",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
        },
        {
            data: [78,20,40,10,80,130,180],
            label: "Aceleración promedio",
            backgroundColor: 'rgb(25, 135, 84)',
            borderColor: 'rgb(25, 135, 84)',
            },
    ],
};

const config4 = {
    type: 'line',
    data: data4,
    options: {
        responsive: true,
        plugins: {
            title: {
              display: true,
              text: 'Velocidad y aceleración promedio',
            },
        },   
    },
};

const Angle_chart = new Chart(char1,config1);
const Rep_chart = new Chart(char2,config2);
const Vel_chart = new Chart(char3,config3);
const Avg_chart = new Chart(char4,config4);
