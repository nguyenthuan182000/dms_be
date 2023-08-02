const KeyOtherChart_Doughnut = document.getElementById("KeyOtherChart_Doughnut");

new Chart(KeyOtherChart_Doughnut, {
    type: "doughnut",
    data: {
        // labels: ["Yêu cầu mua sắm", "Đề nghị thanh toán", "Đề nghị tạm ứng", "Đề nghị quyết toán tạm ứng"],
        datasets: [
            {
                label: "Chỉ số",
                data: [12, 19, 3, 5],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                display: false,
                scaleLabel: {
                    display: true,
                    labelString: "probability",
                },
                ticks: {
                    beginAtZero: true,
                },
            },
            x: {
                display: false,
            },
        },
        plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
            //   text: 'Chart.js Doughnut Chart'
            }
          }
    },
});

