<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
    header("Location: login-teacher.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-BYRYS-KKDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body style="background-color:white">
    <div class="container-fluid pt-4 px-4">
        <?php
        require_once('config-students.php');
        $userid = $_SESSION['userlogin']['id'];
        //echo $userid;
        $sql = "SELECT * FROM  students";
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        if ($result) {
            $values = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        }
        $sql = "SELECT * FROM  patients";
        $smtmselects = $db->prepare($sql);
        $results = $smtmselects->execute();
        if ($result) {
            $patients = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        }

        ?>
        <div class="send-patient">


            <div class="patients-table dark-blue text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 darkcyan table-title">Öğrenciler</h6>

                </div>

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class=" darkcyan table-head">

                                <th scope="col">İsim</th>
                                <th scope="col">Soyisim</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Hastalar</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($values as &$value)
                                echo "
                                <tr>
                                   
                                    <td style='
                                    color: black; font-size: 18px;'>" . $value["name"] . "</td>
                                    <td style='
                                    color: black; font-size: 18px;'>" . $value["surname"] . "</td>
                                    <td style='
                                    color: black; font-size: 18px;'>" . $value["email"] . "</td>
                                   
                                    
                                </tr>"

                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $('#submit').click(function(e) {


                    var valid = this.form.checkValidity();

                    if (valid) {
                        var id = <?php

                                    $userid = $_SESSION['userlogin']['id'];
                                    echo $userid
                                    ?>;
                        var name = $('#name').val();
                        var surname = $('#surname').val();
                        var age = $('#age').val();
                        var not = $('#not').val();


                        e.preventDefault()

                        $.ajax({
                            type: 'POST',
                            url: 'student-patient.php',
                            data: {
                                id: id,
                                name: name,
                                surname: surname,
                                age: age,
                                not: not

                            },
                            success: function(data) {
                                alert("Success");
                                location.reload(true)
                            },
                            error: function(data) {
                                Swal.fire({
                                    'title': 'Errors',
                                    'text': 'There were errors',
                                    'type': 'error'
                                })
                            }
                        })



                    }
                })

            });
        </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="main.js"></script>
</body>

</html>