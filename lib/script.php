<?php
include('function/dashboard_query.php');
?>
<!-- <script>
/*Function to update the bar chart*/
$('select').on('change', function() {
    selected = $(this).val();
    // alert(selectval);
    $.ajax({
        type: "POST",
        url: "function/selectedgraph.php",
        data: {
            selected: selected
        },
        success: function(data) {
            alert(data);
            // var male = data;
        }
    });
});
</script> -->

<script>
const ctx = document.getElementById('myChart');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php
                if($ulevel == 'admin'){
                echo json_encode($brgy);
                }else{
                    echo json_encode($labelages);
                }?>,
        datasets: [{
                label: "Male",
                backgroundColor: "#393E46",
                data: <?php 
                if($ulevel == 'admin'){
                    echo json_encode($malearr);
                }else{
                    echo json_encode($Malearray);
                }?>
            }, {
                label: "Female",
                backgroundColor: "#6D9886",
                data: <?php
                 if($ulevel == 'admin'){
                    echo json_encode($femalearr);
                }else{
                    echo json_encode($Femalearray);
                }?>
            },
            {
                label: <?php if($ulevel == 'staff'){echo '"Alive"';}else{echo '""';}?>,
                backgroundColor: <?php if($ulevel == 'staff'){echo '"rgb(62,149,205)"';}else{echo '"#fff"';}?>,
                // stack: 'now',
                data: <?php echo json_encode($Deadarray); ?>
            },
            {
                label: <?php if($ulevel == 'staff'){echo '"Dead"';}else{echo '""';}?>,
                backgroundColor: <?php if($ulevel == 'staff'){echo '"rgb(196,88,80)"';}else{echo '"#fff"';}?>,
                // stack: 'now',
                data: <?php echo json_encode($Alivearray); ?>
            },
            {
                type: <?php if($ulevel == 'admin'){echo '"line"';}else{echo '""';}?>,
                label: <?php if($ulevel == 'admin'){echo '"Registered"';}else{echo '""';}?>,
                data: <?php if($ulevel == 'admin'){echo json_encode($mftotal);}else{echo '0';} ?>,
                fill: true,
                borderWidth:2,
                backgroundColor: <?php if($ulevel == 'staff'){echo '"#fff"';}else{echo '"#FAFAFA"';}?>,
                borderColor: <?php if($ulevel == 'admin'){echo "'rgb(54, 162, 235)'";}else{ echo '"#ffff"';} ?>
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
            x: {
                stacked: <?php if($ulevel == 'admin'){echo 'true';}else{echo 'false';} ?>,
            },
            y: {
                stacked: <?php if($ulevel == 'admin'){echo 'true';}else{echo 'false';} ?>,
                min: 0,
                max: <?php if($ulevel == 'admin'){echo max($mftotal) + 1;}
                else{ echo $mfmax; }?>
            }
        }
    }
});
</script>
