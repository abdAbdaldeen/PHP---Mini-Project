<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
include '../../data.php';
$sInfo = $data[$_GET["id"]];
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../">A.A Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../Attendance Report/attendance.php">Attendance Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Dashboard/Dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../AcademyGallery/AcademyGallery.php">AcademyGallery</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ============== -->
    <div class="studentPage">
        <div class="backgroundImg"></div>
        <div class="student">
            <?php
$img = $sInfo["image"];
echo "<div class='img-con' style='background-image: url($img);'></div>";
echo '<p class="name">' . $sInfo["name"] . '</p>';
echo '<div class="details">';
echo '<p>Birthday: ' . $sInfo["birthday"] . '</p>';
echo '<div class="socialLinks">';
echo '<a href=' . $sInfo["github account"] . '><i class="fab fa-github"></i></a>';
echo '<a href=' . $sInfo["linkedin"] . '><i class="fab fa-linkedin"></i></a>';
echo '</div>';
echo '</div>';
?>
        </div>
    </div>

    <!-- ============== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- ------------------------------------------ -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>