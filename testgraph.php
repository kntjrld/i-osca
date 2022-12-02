<?php
include('function/testquery.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // const ctx = document.getElementById('myChart');
    new Chart(document.getElementById("myChart"), {
        type: 'bar',
        data: {
            labels: ["<?php echo $chartest; ?>"],
            datasets: [{
                label: "Male",
                backgroundColor: "#6D9886",
                data: ["<?php echo $maletest; ?>"]
            }, {
                label: "Female",
                backgroundColor: "#393E46",
                data: ["<?php echo $femaletest; ?>"]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Population growth (millions)'
            },
            responsive: true,
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            }
        }
    });
    </script>
</body>

</html>