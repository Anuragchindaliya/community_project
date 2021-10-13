<?php

session_start();
if(!isset($_SESSION['login'])){
    header("Location: ../client/member_login.php");
}
include "../../data/db/conn.php";
include "../includes/header.php";
include "../includes/sidebar.php";

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Welcome <?php echo ucfirst($_SESSION['username']); ?> to Varshney's Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>550</h3>

                <p>Total Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../server/member_table.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1232<sup style="font-size: 20px"></sup></h3>

                <p>Total Children</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../server/childTables.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>389</h3>

                <p>Total Marriageable Children</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../server/childTables.php?filter=marriageable" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>110</h3>

                <p>Total Life Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="../server/member_table.php?filter=lifemember" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable w-100">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <img class="life_memberImages"
              src="../assets/image/img1.jpg" alt="">
            </div>
             <div class="button_action">
              <button class="btn_prev" onclick="lifeMemberCarousel()"><</button>
              <button class="btn_next" onclick="lifeMemberCarouselNext()">></button>
            </div> 
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              

              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

         
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
  var btn_prev = document.querySelector(".btn_prev");
  var btn_prev = document.querySelector(".btn_next");

  var i = 0;
  var LMI = ["img1.jpg","img2.jpg","img3.jpg"];
  var carouseImage = document.querySelector(".life_memberImages");
  function lifeMemberCarousel () {
    carouseImage.src = `../assets/image/${LMI[i]}`
    if ( i>0){
      i--;
    } else{
      i=LMI.length-1;
    }
}
function lifeMemberCarouselNext () {
carouseImage.src = `../assets/image/${LMI[i]}`
if ( i<LMI.length-1){
      i++;
    } else{;
      i=0
    }
}
    setInterval(lifeMemberCarouselNext, 2000);
    // window.onload(lifeMemberCarouselNext);
  // btn_prev.addEventListener('click',lifeMemberCarousel);
</script>
<?php

include "../includes/footer.php";
?>