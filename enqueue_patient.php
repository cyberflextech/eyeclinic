<?php 
    session_start();
    include "db_conn.php";

    if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
    { ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Queue Patient</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php   include ("includes/sidebar_admin.html") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php   include("includes/topbar.html"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Patients</h1>
                    <p>This is a table for all the patients waiting to see a Doctor. Use the search box below to search for a particular patient</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Patients' waiting list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-reposnsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>ID NO</th>
                                            <th>Phone Number</th>
                                            <th>Age</th>
                                            <th>VIEW</th>
                                            <th>EDIT</th>
                                            <th>CONSULTATION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql = "SELECT * FROM patient"; 
                                        $result = mysqli_query ($conn, $sql); 
                                        if (mysqli_num_rows($result)>0)
                                        { 
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['patient_fname'] ?></td>
                                                    <td><?php echo $row['patient_lname'] ?></td>
                                                    <td><?php echo $row['patient_nid'] ?></td>
                                                    <td><?php echo $row['patient_mobile'] ?></td>
                                                    <td><?php echo $row['patient_dob'] ?></td>
                                                    <td><button type="submit" class="btn btn-primary btn-sm">VIEW</button></td>
                                                    <th><button type="submit" class="btn btn-secondary btn-sm">EDIT</button></th>
                                                    <th><button type="submit" class="btn btn-success btn-sm">SEND</button></th>
                                                </tr>
                                                <?php
                                            }
                                         }  else {
                                            echo "No record found";
                                            } 
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php   include ("includes/footer.html"); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include ("includes/logoutmodal.html"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<?php } else {
    header("Location:index.php");
}?>