const Strategy = document.getElementById('Strategy');

new Chart(Strategy, {
  type: 'line',
  data: {
    labels: [
      "T1",
      "T2",
      "T3",
      "T4"
    ],
    datasets: [
      {
        label: "Tháng",
        data: [5, 15, 17, 2],
        backgroundColor: "rgb(64, 51, 33)",
        borderColor: "rgb(230, 181, 102)",
        tension: 0,
        pointStyle: 'rectRot',
        pointRadius: 4,
        // pointHoverRadius: 10,
        fill: false
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        display: false
      },
      y: {
        display: false
      }
    },
    plugins: {
      legend: {
        display: false
      },
      title: {
        // display: true,
        // text: 'Chart.js Line Chart'
      }
    }
  }
});
