

function setData(data){
    console.log(data);

    const char1 = document.getElementById("angle").getContext("2d");
    const char2 = document.getElementById("rep").getContext("2d");
    const char3 = document.getElementById("Vel_Acc").getContext("2d");
    const char4 = document.getElementById("Avg").getContext("2d");

    var labels = 
        data.map(d => d.fecha);
    var data1 = {
        labels,
        datasets: [
            {
                data:data.map(d => d.angle_max),
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
                data: data.map(d => d.rep_flex),
                label: "Flexión-Extensión",
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
            },
            {
                data: data.map(d => d.rep_sup),
                label: "Pronación-Supinación",
                backgroundColor: 'rgb(25, 135, 84)',
                borderColor: 'rgb(25, 135, 84)',
                },
    
            {
                data: data.map(d => d.rep_extra),
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
                data: data.map(d => d.vel_max),
                label: "Velocidad máxima",
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
            },
            {
                data:data.map(d => d.acc_max),
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
                data: data.map(d => d.vel_avg),
                label: "Velocidad promedio",
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
            },
            {
                data: data.map(d => d.acc_avg),
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
    
}

