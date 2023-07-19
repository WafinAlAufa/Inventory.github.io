const ctx = document.getElementById("myThree");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Poopins"],
    datasets: [
      {
        label: "# of Votes",
        data: [600, 490, 503, 590, 200, 300, 500],
        borderWidth: 1,
        backgroundColor: "#fff",
        borderRadius: 100,
        innerWidth: 10,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        display: false,
        labels: {
          color: "#fff",
          font: {
            size: 16,
          },
        },
      },
    },
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          color: "white",
          font: 15,
        },
      },
      x: {
        ticks: {
          display: false,
          color: "white",
          font: {
            size: 10,
          },
          stepSize: 1,
          beginAtZero: true,
        },
      },
    },
  },
});
