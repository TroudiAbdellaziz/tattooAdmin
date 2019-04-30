<?php


include 'Handlers/getdata.php';
include 'Handlers/session_handler.php';
if (!$logged)
{
    header('Location: http://localhost/admin_tatoo_shop/pages/login.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>The Tattoo Shop</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">The Tattoo Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" onkeyup="search()" type="text" placeholder="Search..">
                            </div>
                        </li>

                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                        <?php
                                        for($i = 0; $i<count($notification_data);$i++)
                                        {
                                            
                                                    
                                            echo '<a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">'.$notification_data[$i].'</span>Has made a new appointment
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>';
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/IMG_9391.JPG" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $name ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal3" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="http://localhost/admin_tatoo_shop/Handlers/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">

                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Main menu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="http://localhost/admin_tatoo_shop/Handlers/logout.php">Change account</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        <div class="dashboard-wrapper ">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Admin tools</h2>

                            </div>
                        </div>
                    </div>


                        <div class="row">

                            <div class="col-xl-12 col-lg-18 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Appointments' list</h5>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Add an appointement</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New appointement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="section-center">
            <div class="container">
              <div class="row">
                <div class="booking-form">

                  <form id="Id_form" action="http://localhost/admin_tatoo_shop/Handlers/appointment.php" method="POST">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Name</span>
                          <input name="name" class="form-control" type="text" placeholder="Enter your name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Email</span>
                          <input name="email" class="form-control" type="email" placeholder="Enter your email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="form-label">Phone</span>
                      <input name="phone" class="form-control" type="tel" placeholder="Enter your phone number">
                    </div>

                    <div class="row">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <span class="form-label">Date</span>
                          <input name="date" class="form-control" type="date" required>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">Hour</span>
                              <select name="hour" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">Min</span>
                              <select name="min" class="form-control">
                                <option value="05">05</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                                <option value="55">55</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">AM/PM</span>
                              <select name="amap" class="form-control">
                                <option  value="AM">AM</option>
                                <option  value="PM">PM</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="form_submit()" class="btn btn-primary">Add appointement</button>
      </div>
    </div>
  </div>
</div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>

                                                        <th class="border-0">Customer's full name</th>
                                                        <th class="border-0">Email</th>
                                                        <th class="border-0">Phone Number</th>


                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Oppointement Time</th>
                                                        <th class="border-0"> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table">
                                                <?php
                                                    for($i = 0; $i<count($table_data['name']);$i++)
                                                    {
                                                        echo "<tr><td>".$table_data['id'][$i].
                                                        "</td><td>".$table_data['name'][$i].
                                                        "</td><td>".$table_data['email'][$i].
                                                        "</td><td>".$table_data['phone'][$i].
                                                        "</td><td>".$table_data['date'][$i].
                                                        "</td><td>".$table_data['time'][$i].
                                                        "</td><td ><i data-toggle='modal' onclick='changeCurrentEmail()'  data-target='#exampleModal2' class='fas fa-envelope'></i><span>    </span><i onclick='remove()' class='fas fa-trash-alt'></i></td></tr>";
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send updates with Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="section-center">
            <div class="container">
              <div class="row">
                <div class="booking-form">

                  <form id="Id_form2" action="http://localhost/admin_tatoo_shop/Handlers/mailing.php" method="POST">
                     <div class="rows">  
                         <div class="col-sm-12">     
                    <div class="form-group">
                    <textarea name="message" rows="4" cols="50">Message...</textarea>
                  </div>
                  </div>
                    </div>
                   
    
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="form_submit2()" class="btn btn-primary">Send Message</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change your password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="section-center">
            <div class="container">
              <div class="row">
                <div class="booking-form">

                  <form id="Id_form3" action="http://localhost/admin_tatoo_shop/Handlers/changePass.php" method="POST">
                     <div class="rows">  
                         <div class="col-sm-12">     
                         <div class="form-group">
                          <span class="form-label">Current password</span>
                          <input name="password" class="form-control" type="text" >
                        </div>
                        <div class="form-group">
                          <span class="form-label">New password</span>
                          <input name="newPass" class="form-control" type="text" >
                        </div>
                  </div>
                    </div>
                   
    
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="form_submit3()" class="btn btn-primary">Change Password</button>
      </div>
    </div>
  </div>
</div>

        </div>
    <div class="row">

                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 Concept. All rights reserved. Dashboard by Ayat, Troudi, Kchok and Taieb.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script>
   var currentEmail=null;
   function changeCurrentEmail(){

       currentEmail=event.target.parentNode.parentNode.firstChild.nextSibling.nextSibling.innerText;
    }


    function remove(){

        var removed=event.target.parentNode.parentNode;
        var id=event.target.parentNode.parentNode.firstChild.innerText;
        $.ajax({
                url: "http://localhost/admin_tatoo_shop/Handlers/deleteAppointment.php?id="+id
                }).done(function(data) {
                    removed.remove();
                    });
    }


    function form_submit() {
        document.getElementById("Id_form").submit();
   }
   function form_submit3() {
        var z = document.createElement('input'); 
        z.type='hidden';
        z.value="<?php echo $email ?>";
        z.name="email";
        document.getElementById("Id_form3").appendChild(z);
        document.getElementById("Id_form3").submit();
   }
   function checkFlash(){
       var $flash="<?php echo $flash ?>";
       var changePassword="<?php echo $changePassword ?>";
       if ($flash && $flash!='nothing'){
        alert($flash);
       }
       if (changePassword && changePassword!='nothing'){
        alert(changePassword);
       }

   }
   checkFlash();

   function form_submit2(){
       console.log(currentEmail);
       var z = document.createElement('input'); 
       z.type='hidden';
       z.value=currentEmail;
       z.name="email";
    document.getElementById("Id_form2").appendChild(z);
    document.getElementById("Id_form2").submit();
   }

function search() {

   var input, filter, table, tr, td, i, txtValue;
   input = event.target.value;
   filter = input.toUpperCase();
   table = document.getElementById("table");
   tr = table.getElementsByTagName("tr");
   for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            } 
        }
}
   
    
    </script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
