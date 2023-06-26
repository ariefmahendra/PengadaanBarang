google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawresume1Chart);
google.charts.setOnLoadCallback(drawresume2Chart);
function drawresume1Chart() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Topping");
    data.addColumn("number", "Slices");
    data.addRows([
        ["RAB", 20.3],
        ["HPS", 18.9],
        ["Proses", 28.3],
        ["Dibayar", 19.9],
    ]);

    var options = {
        legend: "none",
        backgroundColor: "transparent",
        slices: {
            0: { color: "#990099" },
            1: { color: "#109618" },
            2: { color: "#FF9900" },
            3: { color: "#3366CC" },
        },
        chartArea: { left: 20, top: 0, width: "100%", height: "100%" },
    };

    var chart = new google.visualization.PieChart(
        document.getElementById("chart1")
    );
    chart.draw(data, options);
}

function drawresume2Chart() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Topping");
    data.addColumn("number", "Slices");
    data.addRows([
        ["RAB", 20.3],
        ["HPS", 18.9],
        ["Proses", 28.3],
        ["Dibayar", 19.9],
    ]);

    // Set options for Anthony's pie chart.
    var options = {
        legend: "none",
        backgroundColor: "transparent",
        slices: {
            0: { color: "#990099" },
            1: { color: "#109618" },
            2: { color: "#FF9900" },
            3: { color: "#3366CC" },
        },
        chartArea: { left: 20, top: 0, width: "100%", height: "100%" },
    };

    // Instantiate and draw the chart for Anthony's pizza.
    var chart = new google.visualization.PieChart(
        document.getElementById("chart2")
    );
    chart.draw(data, options);
}
