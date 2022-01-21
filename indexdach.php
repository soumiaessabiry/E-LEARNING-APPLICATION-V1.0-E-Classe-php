<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="styledas.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">

</head>
<body>
    <!-- ******************************* col 1******************************** -->
    <div class="container-fluid">
      <div class="row flex-nowrap">
         <?php 
         include('sidebar.php');
         
         ?>
          <div class="col ">
            <div class="d-flex justify-content-between mt-3">
                <div >
                    <a href="index.php"><i class="far fa-arrow-alt-circle-left text-muted"></i></a>
                </div>
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div>
                        <a href="#"><i class="far fa-bell text-muted"></i></a>
                    </div>
                </div>
            </div>
     <!-- ******************************* main de page******************************** -->

            <div class="row  my-3">
                <div class="row  p-5 " style="position: relative;">
                    <div class="col-lg-3 col-md-12 pb-3" >
                        <div class="col p-4"  style="background:#F0F9FF; position: relative; border-radius: 20px;; ">
                            <i class="bi bi-mortarboard fs-1"  style="color: #74C1ED ;position:relative;background:#F0F9FF ;"></i>
                           <a href="indexstudent.php"><p class="fw-normal fs-4 " style="color:#6C6C6C;">Students</p></a> 
                            <p class="d-flex justify-content-lg-end fw-bolder fs-2">243</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 pb-3" >
                        <div class="col p-4"  style="background:#FEF6FB; position: relative; border-radius: 20px;">
                            <i class="bi bi-bookmark fs-1"  style="color:#EE95C5 ;position:relative;background:#FEF6FB  30px; " ></i>
                           <a href="#"> <p class="fw-normal fs-4 " style="color:#6C6C6C;">Course</p></a>
                            <p class="d-flex justify-content-lg-end fw-bolder fs-2">13</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 pb-3 "  >
                        <div class="col p-4"  style="background:#FEFBEC; position: relative; border-radius: 20px;">
                            <i class="bi bi-currency-dollar fs-1"  style="color: #00C1FE ;position:relative;background:#FEFBEC ; border:solid #00C1FE;"></i>
                          <a href="indexpay.php"><p class="fw-normal fs-4 " style="color:#6C6C6C;">Payments</p></a>
                            <p class="d-flex justify-content-lg-end fw-bolder fs-2 px-4 "> <span class="fs-4 ">556,000 DHS</span></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 pb-3" >
                        <div class="col p-4"  style="background:linear-gradient(to right,#00C1FE,#FAFFC1); position: relative; border-radius: 20px;">
                            <i class="bi bi-person fs-1"  style="color:white;background:#3dc9f3;position:relative;"></i>
                            <a href="#"><p class="fw-normal fs-4 " style="color:#6C6C6C;">User</p>
                            </a>
                            <p class="d-flex justify-content-lg-end fw-bolder fs-2">243</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
