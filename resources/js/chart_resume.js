import Chart from "chart.js/auto";

const data = {
    labels: ["RAB", "HPS", "Proses", "Kontrak", "Dibayar"],
    datasets: [
        {
            label: "",
            data: [20.3, 18.9, 12.6, 28.3, 19.9],
            backgroundColor: [
                "#990099",
                "#109618",
                "#FF9900",
                "#DC3912",
                "#3366CC",
            ],
        },
    ],
};

const data2 = {
    labels: ["RAB", "HPS", "Proses", "Kontrak", "Dibayar"],
    datasets: [
        {
            label: "",
            data: [20.3, 18.9, 12.6, 28.3, 19.9],
            backgroundColor: [
                "#990099",
                "#109618",
                "#FF9900",
                "#DC3912",
                "#3366CC",
            ],
        },
    ],
};

const config = {
    type: "pie",
    data: data,
    options: {
        plugins: {
            legend: {
                display: false,
                position: "bottom",
            },
            labels: {
                render: "percentage", // Menampilkan persentase
                fontColor: ["white", "white", "white"], // Warna teks persentase
                precision: 2, // Jumlah desimal pada persentase
            },
        },
    },
};

const config2 = {
    type: "pie",
    data: data2,
    options: {
        plugins: {
            legend: {
                display: false,
                position: "bottom",
            },
        },
    },
};

const resume_1 = new Chart(document.getElementById("resume_1"), config);
const resume_2 = new Chart(document.getElementById("resume_2"), config2);
