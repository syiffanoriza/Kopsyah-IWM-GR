import './bootstrap';
import 'flowbite';

const options = {
  chart: {
    height: "100%",
    maxWidth: "100%",
    type: "area",
    fontFamily: "Plus Jakarta Sans, sans-serif",
    dropShadow: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.55,
      opacityTo: 0,
      shade: "#71D400",
      gradientToColors: ["#71D400"],
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: 6,
  },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: 0
    },
  },
  series: [
    {
      name: "Perkembangan",
      data: [6500, 6418, 6456, 6526, 6356, 6456, 6418, 6456],
      color: "#00A500",
    },
  ],
  xaxis: {
    categories: ['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
    labels: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
}

if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("area-chart"), options);
  chart.render();
}

// pie chart


const getChartOptions = () => {
  return {
    series: [20, 20, 20, 20, 20],
    colors: ["#D9FFA9", "#AEEE5C", "#75AA31", "#426613", "#00A500"],
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    stroke: {
      colors: ["white"],
      lineCap: "",
    },
    plotOptions: {
      pie: {
        labels: {
          show: true,
        },
        size: "100%",
        dataLabels: {
          offset: -25
        }
      },
    },
    labels: ["Sektor Perdagangan", "Sektor Simpanan", "Sektor Jasa","Sektor Pembiyayan", "Sektor Proyek Tahunan"],
    dataLabels: {
      enabled: false,
      style: {
        fontFamily: "Plus Jakarta Sans, sans-serif",
      },
    },
    legend: {
      position: "right",
      fontFamily: "Plus Jakarta Sans, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "%"
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "%"
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
  chart.render();
}


    const textareaElement = document.getElementById('description');
    const charLimitMessage = document.getElementById('charLimitMessage');
    textareaElement.addEventListener('input', function() {
        const maxLength = 174;
        if (textareaElement.value.length > maxLength) {
            textareaElement.value = textareaElement.value.slice(0, maxLength);
            charLimitMessage.classList.remove('hidden');
        } else {
            charLimitMessage.classList.add('hidden');
        }
    });

 const categorySelect = document.getElementById('category');
    const submitButton = document.getElementById('submit-button');

    categorySelect.addEventListener('change', function() {
        if (categorySelect.value === 'pelanggan' || categorySelect.value === 'anggota' || categorySelect.value === 'wakil' || categorySelect.value === 'ketua') {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });