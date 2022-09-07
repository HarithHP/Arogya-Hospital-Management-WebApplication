<!DOCTYPE html>
<html>
<head>
<title>AROGYA HEALTH CARE </title>
<meta http-equiv="refresh" content="100">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
 <link rel="stylesheet" href="hospital website\css\style.css">
<style>
table {
border = :0.2s; cellpadding="15" cellspacing="15" 
border-collapse: collapse;
color: #68bae3;
font-family: Poppins;
font-size: 15px;
text-align: justify;
height :100;
}
th {
background-color: #0779b3;
color: white;
}
tr{  color: black;
    background-color: #f2f2f2
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>

<body>
 	<header class="header">
 
    <a href="#" class="logo"> <img src="./hospital website/image/New Arogya Icon Without BC.png" alt=""> AROGYA HEALTH CARE</a>

    <nav class="navbar">
        <a href="./hospital website/index.html"><b>Home</b></a>
        <a href="./hospital website/Services.html">services</a>
        <a href="./hospital website/Doctors.html">doctors</a>
        <a href="./hospital website/About.html">about</a>
        <a href="./hospital website/review.html">review</a>
        <a href="./hospital website/Admin.html" class="btn"> Admin </a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>








<section class="table">

    <h1 align="Center"><font color="White" face="Arial"><u>Tables of Website</u></font> </h1>
    <h1 align="Center"><font color="White" face="Arial"><u>Tables of Website</u></font> </h1>
    <h1 align="Center"><font color="White" face="Arial"><u>Tables of Website</u></font> </h1>
    <h1 align="Center"><font color="White" face="Arial"><u>................</u></font> </h1>
    <h1 align="left"><font size="6" color= "#68bae3" face="Poppins"><u>Rooms Information Management</u></font> </h1>
    <br><br><br>
    
<form >
<table border = "5" cellpadding="15" cellspacing="15">
    <caption><h3>Rooms Table</h3></caption>
<tr>
<th>Room ID</th>
<th>Patient ID</th>
<th>Patient Name</th>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Ordered Date</th>
<th>End Date</th>
<th>No of Days</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM room";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["r_id"]. "</td><td>" . $row["r_pid"] . "</td><td>". $row["r_pname"] . "</td><td>". $row["r_did"] . "</td><td>". $row["r_drname"] . "</td><td>". $row["r_start"] . "</td><td>". $row["r_end"] . "</td><td>". $row["r_days"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
</section> 


















<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "arogyahospital";

$rid = "";
$pid = "";
$pname = "";
$did = "";
$dname = "";
$odate = "";
$edate = "";
$days = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['rid'];
    $posts[1] = $_POST['pid'];
    $posts[2] = $_POST['pname'];
    $posts[3] = $_POST['did'];
    $posts[4] = $_POST['dname'];
    $posts[5] = $_POST['odate'];
    $posts[6] = $_POST['edate'];
    $posts[7] = $_POST['days'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM room WHERE r_id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $rid = $row['r_id'];
                $pid = $row['r_pid'];
                $pname = $row['r_pname'];
                $did = $row['r_did'];
                $dname = $row['r_drname'];
                $odate = $row['r_start'];
                $edate = $row['r_end'];
                $days = $row['r_days'];
               
            }
        }else{
            echo '<div align="center"; style="font-size:2.25em;color:red"> No Data For This Room ID</div>';
            
        }
    }else{
        echo '<div align="center"; style="font-size:2.25em;color:red"> Database Error</div>';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `room`( `r_pid`, `r_pname`, `r_did`, `r_drname`, `r_start`, `r_end`, `r_days`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            
             if(mysqli_affected_rows($connect) > 0)
            {
                echo '<div align="center"; style="font-size:2.25em;color:#68bae3"> Data Inserted Successfully</div>';
            }else{
                echo '<div align="center"; style="font-size:2.25em;color:red"> Cannot Insert Data(Error)</div>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `room` WHERE `r_id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<div align="center"; style="font-size:2.25em;color:#68bae3"> Data Deleted Successfully</div>';
            }else{
                echo  '<div align="center"; style="font-size:2.25em;color:red"> Cannot Delete Data(Error)</div>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `room` SET `r_pid`='$data[1]',`r_pname`='$data[2]',`r_did`='$data[3]',`r_drname`='$data[4]',`r_start`='$data[5]',`r_end`='$data[6]',`r_days`='$data[7]' WHERE `r_id` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<div align="center"; style="font-size:2.25em;color:#68bae3"> Data Updated Successfully</div>';
            }else{
                 echo '<div align="center"; style="font-size:2.25em;color:red"> Cannot Update Data(Error)</div>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}
?>





<section >
	<br><br>
<h1 align="left"><font size="5" color= "#68bae3" face="Poppins"><u>Room Information Form</u></font> </h1>
<br><br><br>
<form action="manage_rooms.php" method="post">
	<font size="3">
		&emsp;&emsp;&emsp;Room ID:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input required=""  type="number" align="center" name="rid" placeholder="..............................................................." value="<?php echo $rid;?>"><br><br>
        &emsp;&emsp;&emsp;Patient ID:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input   type="number" align="center" name="pid" placeholder="..............................................................." value="<?php echo $pid;?>"><br><br>
            &emsp;&emsp;&emsp;Patient Name:&nbsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="pname" placeholder="..........................................................." value="<?php echo $pname;?>"><br><br>
            &emsp;&emsp;&emsp;Doctor ID:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input   type="number" align="center" name="did" placeholder="..............................................................." value="<?php echo $did;?>"><br><br>
            &emsp;&emsp;&emsp;Doctor Name:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="dname" placeholder="..........................................................." value="<?php echo $dname;?>"><br><br>
            
            &emsp;&emsp;&emsp;Ordered Date:&nbsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="odate" placeholder="..........................................................." value="<?php echo $odate;?>"><br><br>
            &emsp;&emsp;&emsp;End Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="edate" placeholder="..........................................................." value="<?php echo $edate;?>"><br><br>
           
           &emsp;&emsp;&emsp;No of Days:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type="number" align="center" name="days" placeholder="..............................................................." value="<?php echo $days;?>">
            </font>
            <div>
                <!-- Input For Add Values To Database-->
                <br><br>
                &emsp;&emsp;&emsp;<input  type="submit" name="insert" value="&emsp;&emsp;&emsp;&emsp;&emsp;Add&emsp;&emsp;&emsp;&emsp;&emsp;">
                
                <!-- Input For Edit Values -->
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="update" value="&emsp;&emsp;&emsp;&emsp;&emsp;Update&emsp;&emsp;&emsp;&emsp;&emsp;">
                
                <!-- Input For Clear Values -->
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="delete" value="&emsp;&emsp;&emsp;&emsp;&emsp;Delete&emsp;&emsp;&emsp;&emsp;&emsp;">
                
                <!-- Input For Find Values With The given ID -->
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="search" value="&emsp;&emsp;&emsp;&emsp;&emsp;Find&emsp;&emsp;&emsp;&emsp;&emsp;">
                <br><br><br><br>
            </div>
        </form>
</section>














<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="./hospital website/index.html"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="./hospital website/Doctors.html"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="./hospital website/About.html"> <i class="fas fa-chevron-right"></i> about </a>
             <a href="./hospital website/review"> <i class="fas fa-chevron-right"></i> review </a>
         
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="./hospital website/Services.html"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +110xxxxxxx </a>
            <a href="#"> <i class="fas fa-phone"></i> +110xxxxxxx </a>
            <a href="#"> <i class="fas fa-envelope"></i> Arogya@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> healthcare@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Colombo, Sri lanka - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Arogya web team</span> | all rights reserved @2022 </div>

</section>
</body>
</html>