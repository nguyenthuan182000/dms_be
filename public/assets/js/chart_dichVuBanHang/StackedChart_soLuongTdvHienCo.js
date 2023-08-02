Chart.register(ChartjsPluginStacked100.default);
new Chart(document.getElementById('stackedChart_soLuongTdvHienCo'), {
    type: 'bar',
    data: {
        labels: ['Vùng 1', 'Vùng 2', 'Vùng 3', 'Vùng 4', 'Vùng 5', 'Vùng 6'],
        datasets: [
            {
                label: 'TDV hiện có',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                ],
                borderWidth: 1,
            },
            {
                label: 'Tổng số TDV theo cơ cấu',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,

        plugins: {
            stacked100: { enable: true, replaceTooltipLabel: false },
            legend: {
                display: false,
            },
            datalabels: {
                formatter: function (value) {
                    return Math.round(value) + '%';
                },
            },
            title: {
                display: true,
                text: 'Đơn vị: Người',
            },
        },
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
