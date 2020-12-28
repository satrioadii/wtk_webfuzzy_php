<?php 
include("koneksi.php");
$data_points = array();
    
$result = mysqli_query($sambung, "SELECT * FROM fuzzy");

while($row = mysqli_fetch_array($result))
{        
    $point = array("label" => $row['time_at'] , "y" => $row['kecepatan']);
    
    array_push($data_points, $point);        
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<script type="text/javascript">
        $(document).ready(function () {

            

                var chart = new CanvasJS.Chart("chartContainer2", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1", // "light1", "light2", "dark1", "dark2"
                    title:{
                    text: "Kecepatan"
                    },
                    data: [
                        {
                            type: "splineArea",
                            dataPoints: <?php echo json_encode($data_points, JSON_NUMERIC_CHECK);  ?>
                        }
                    ]
                });

                chart.render();
            
        });
</script>

  
</body>
</html>