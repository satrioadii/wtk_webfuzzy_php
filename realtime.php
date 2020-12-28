<?php 
include("koneksi.php");
$row = mysqli_query($sambung,"SELECT * FROM fuzzy ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($row);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">anchor</i>
                  </div>
                  <p class="card-category">JARAK</p>
                  <h3 class="card-title"><?php echo $data['jarak']; ?>
                    <small>Meter</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> 
                    <?php 
                          echo $data['time_at'];
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">edit</i>
                  </div>
                  <p class="card-category">KECEPATAN</p>
                  <h3 class="card-title"><?php echo $data['kecepatan']; ?>Km/Jam</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> 
                    <?php 
                          echo $data['time_at'];
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">AKSI FUZZY</p>
                  <h3 class="card-title"><?php echo $data['hasil']; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> 
                    <?php 
                          echo $data['time_at'];
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

  
</body>
</html>
