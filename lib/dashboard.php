<?php
include('function/dashboard_query.php');

?>
<script>
// dashboard_select
$(document).ready(function() {
    const ctx = document.getElementById('monthlychart').getContext('2d');
    let myChart;
    $("#dashboard_select").change(function() {
        var id = $(this).find(":selected").val();
        var selectedYear = id;
        if(selectedYear == 'all_year'){
            // canvas
            $("#yearlychart").show();
            $("#monthlychart").hide();
            // title
            $("#yeartitle").show();
            $("#monthtitle").hide();
        }else{
            // canvas
            $("#yearlychart").hide();
            $("#monthlychart").show();
            // title
            $("#monthtitle").show();
            $("#yeartitle").hide();

            $.ajax({
                url: 'function/get-data.php',
                type: 'GET',
                data: {
                  year: selectedYear
                },
                success: function(data) {
              
                const processedRegistered = processData(data.registered);
                const processedDeceased = processData(data.deceased);
                const processedActive = processData(data.active);
                const processedInactive = processData(data.inactive);
                const processedPWD = processData(data.pwd);
                myChart.data.datasets[0].data = processedRegistered;
                myChart.data.datasets[1].data = processedDeceased;
                myChart.data.datasets[2].data = processedActive;
                myChart.data.datasets[3].data = processedInactive;
                myChart.data.datasets[4].data = processedPWD;
                  myChart.update();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  alert("An error occurred: " + textStatus + " " + errorThrown);
                }
              });
              
              // chart
       myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
          datasets: [
            {
                label: 'Registered',
                fill: true,
                data: [],
                borderColor: "rgb(60,186,159)",
                backgroundColor: "rgb(62,149,205,0.1)",
                tension: 0.1,
                borderWidth: 2
            },
            {
                label: 'Deceased',
                data: [],
                fill: true,
                borderColor: "rgb(196,88,80)",
                backgroundColor: "rgb(196,88,80,0.1)",
                tension: 0.1,
                borderWidth: 2
            },
            {
              label: 'Active',
              data: [],
              borderColor: "rgb(62,149,205)",
              backgroundColor: "rgb(62,149,205,0.1)",
              tension: 0.1,
              borderWidth: 2
            },
            {
              label: 'Inactive',
              data: [],
              fill: true,
              borderColor: "rgb(255,165,0)",
              backgroundColor: "rgb(255,165,0,0.1)",
              tension: 0.1,
              borderWidth: 2
            },
            {
                label: 'PWD',
                data: [],
                fill: true,
                borderColor: "rgb(251, 192, 147)",
                backgroundColor: "rgb(255,165,0,0.4)",
                tension: 0.1,
                borderWidth: 2
              }
          ]
        },
        options: {
            animations: {
              tension: {
                  duration: 2000,
                  easing: 'linear',
                  from: 1,
                  to: 0,
                  loop: false
              }
          },
          responsive: true,
        maintainAspectRatio: false,
        scales: {
            // x: {
            //     stacked: <?php if($ulevel == 'admin'){echo 'false';}else{echo 'false';} ?>,
            // },
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }],
            y: {
                stacked: false,
                // min: 0,
                max: <?php if($ulevel == 'admin'){echo $countadmin['total'];}else{echo $countcluster['total'];}?>
            }
        }
      }
        });

      function processData(data) {
        return data;
      }
        }
    });
});
</script>
