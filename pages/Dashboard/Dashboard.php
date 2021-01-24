<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
include '../../data.php';
?>
    <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../AcademyGallery/AcademyGallery.php">AcademyGallery</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ============== -->
    <?php
    $numStudents=count($data); 
    $Projects=0;
    $completedProjects=0;
    $table="";
    function test_completed($project)
    {
        return ($project["is_completed"]);

    }
foreach ($data as $trainee) {
    $name = $trainee["name"];
    $birthday = $trainee["birthday"];
    $id = $trainee["id"];
    
    $Projects +=count($trainee["projects"]);
    $completedProjects+= count(array_filter($trainee["projects"], "test_completed"));
    
    $table.= "<tr><td>$id</td><td>$name</td><td>$birthday</td></tr>";
    
}
?>
    <div class="Dashboard">
        <div class="container">
            <div class="grid">
                <div>
                    <div class="circle">
                        <h2>

                            <?php 
                        echo "$completedProjects / $Projects";
                    ?>
                        </h2>
                    </div>
                    <h2>projects</h2>
                </div>
                <div>
                    <div class="circle">
                        <h2>
                            <?php 
                        echo "$numStudents"; 
                    ?>
                        </h2>
                    </div>
                    <h2>Number of Students</h2>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Birthday</th>
                    </tr>

                </thead>
                <tbody>

                    <?php 
        echo $table;
        ?>
                </tbody>
            </table>
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