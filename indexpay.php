<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment </title>
    <link rel="stylesheet" href="stylepa.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="styleboot/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <?php 
         include('sidebar.php');
         
         ?>
          <div class="col ">
            <div class="d-flex justify-content-between mt-3">
                <div >
                    <a href="indexstudent.php"><i class="far fa-arrow-alt-circle-left text-muted"></i></a>
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
    <!-- *************************main de page*******************************     -->
                <div class="d-flex justify-content-between mt-3   ">
                    <div >
                        <a href="indexstudent.php " class="fs-3 fw-bold me-3">Students List</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <i class="bi bi-chevron-expand fs-4 fw-bold" style="color:#00C1FE;"></i>
                        
                    </div>
                </div>
                <div class="table-responsive-md">
                  <table class="table table-hover mt-4 ">
                    <thead>
                        <tr class="bg-light mt-3" style="color: #ACACAC;  height: 79px;">
                            <th scope="col" class="align-middle"></th>
                            <th scope="col" class="align-middle" >Name</th>
                            <th scope="col " class="align-middle">Payment Schedule</th>
                            <th scope="col" class="align-middle">Bill Number</th>
                            <th scope="col" class="align-middle">Amount Paid</th>
                            <th scope="col" class="align-middle">Balance amount</th>
                            <th scope="col" class="align-middle">Date </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="mt-4 bg-white">
                            <th scope="row">
                                <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
                            </th>
                            <td class="align-middle">Karthi</td>
                            <td class="align-middle">First</td>
                            <td class="align-middle">00012223</td>
                            <td class="align-middle">DHS 100,000</td>
                            <td class="align-middle">DHS 500,000</td>
                            <td class="align-middle">05-Jan, 2022</td>
                            <td class="text-primary align-middle">
                                <i class="far fa-eye text-info"></i>
                            </td>
                        </tr>
                        <tr class="mt-4 bg-light">
                            <th scope="row">
                            <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
                            </th>
                            <td class="align-middle">Karthi</td>
                            <td class="align-middle">First</td>
                            <td class="align-middle">00012223</td>
                            <td class="align-middle">DHS 100,000</td>
                            <td class="align-middle">DHS 500,000</td>
                            <td class="align-middle">05-Jan, 2022</td>
                            <td class="text-primary align-middle">
                            <i class="far fa-eye text-info"></i>
                            </td>
                            </tr>
                            <tr class="mt-4 bg-white">
                                <th scope="row">
                                <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
                                </th>
                                <td class="align-middle">Karthi</td>
                                <td class="align-middle">First</td>
                                <td class="align-middle">00012223</td>
                                <td class="align-middle">DHS 100,000</td>
                                <td class="align-middle">DHS 500,000</td>
                                <td class="align-middle">05-Jan, 2022</td>
                                <td class="text-primary align-middle">
                                <i class="far fa-eye text-info"></i>
                                </td>
                                </tr>
                                <tr class="mt-4 bg-light">
                                    <th scope="row">
                                        <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
                                    </th>
                                    <td class="align-middle">Karthi</td>
                                    <td class="align-middle">First</td>
                                    <td class="align-middle">00012223</td>
                                    <td class="align-middle">DHS 100,000</td>
                                    <td class="align-middle">DHS 500,000</td>
                                    <td class="align-middle">05-Jan, 2022</td>
                                    <td class="text-primary align-middle">
                                        <i class="far fa-eye text-info"></i>
                                    </td>
                                </tr>
                    </tbody>
                </div>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<!-- **
             <table class="table-responsive table-responsive-md table table-hover" style="border-top: 2px solid gray;">
                            <thead>
                                <tr class="bg-light mt-3" style="color: #ACACAC;  height: 79px;">
                                    <th scope="col" class="align-middle"></th>
                                    <th scope="col" class="align-middle" >Name</th>
                                    <th scope="col " class="align-middle">Payment Schedule</th>
                                    <th scope="col" class="align-middle">Bill Number</th>
                                    <th scope="col" class="align-middle">Amount Paid</th>
                                    <th scope="col" class="align-middle">Balance amount</th>
                                    <th scope="col" class="align-middle">Date </th>
                                </tr>
                            </thead>
                            <tbody class="flex-column gap-2 " style=" height: 594px; ">
<!-- ***********************************row1**************************************
<tr class="mt-4 bg-white">
    <th scope="row">
        <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
    </th>
    <td class="align-middle">Karthi</td>
    <td class="align-middle">First</td>
    <td class="align-middle">00012223</td>
    <td class="align-middle">DHS 100,000</td>
    <td class="align-middle">DHS 500,000</td>
    <td class="align-middle">05-Jan, 2022</td>
    <td class="text-primary align-middle">
        <i class="far fa-eye text-info"></i>
    </td>
</tr>
<!-- ***********************************row2****************************************

<tr class="mt-4 bg-white">
<th scope="row">
<img src="photo2.jpg" alt="Pro-img" width="65" height="55">
</th>
<td class="align-middle">Karthi</td>
<td class="align-middle">First</td>
<td class="align-middle">00012223</td>
<td class="align-middle">DHS 100,000</td>
<td class="align-middle">DHS 500,000</td>
<td class="align-middle">05-Jan, 2022</td>
<td class="text-primary align-middle">
<i class="far fa-eye text-info"></i>
</td>
</tr>
<!-- ***********************************row3****************************************

<tr class="mt-4 bg-white">
<th scope="row">
<img src="photo2.jpg" alt="Pro-img" width="65" height="55">
</th>
<td class="align-middle">Karthi</td>
<td class="align-middle">First</td>
<td class="align-middle">00012223</td>
<td class="align-middle">DHS 100,000</td>
<td class="align-middle">DHS 500,000</td>
<td class="align-middle">05-Jan, 2022</td>
<td class="text-primary align-middle">
<i class="far fa-eye text-info"></i>
</td>
</tr>
<!-- ***********************************row4****************************************

 <tr class="mt-4 bg-white">
    <th scope="row">
        <img src="photo2.jpg" alt="Pro-img" width="65" height="55">
    </th>
    <td class="align-middle">Karthi</td>
    <td class="align-middle">First</td>
    <td class="align-middle">00012223</td>
    <td class="align-middle">DHS 100,000</td>
    <td class="align-middle">DHS 500,000</td>
    <td class="align-middle">05-Jan, 2022</td>
    <td class="text-primary align-middle">
        <i class="far fa-eye text-info"></i>
    </td>
</tr>
<!-- ***********************************row5***************************************
</tbody>
</table>
    
    ***** -->