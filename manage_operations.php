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
    <h1 align="left"><font size="6" color= "#68bae3" face="Poppins"><u>Operations Information Management</u></font> </h1>
    <br><br><br>
    
<form >
<table border = "5" cellpadding="15" cellspacing="15">
    <caption><h3>Doctors Table</h3></caption>
<tr>
<th>Doctor ID</th>
<th>First Name</th>
<th>Gender</th>
<th>Age</th>
<th>Position</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Ward No</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["dr_id"]. "</td><td>" . $row["dr_name"] . "</td><td>". $row["dr_gender"] . "</td><td>". $row["dr_age"] . "</td><td>". $row["dr_type"] . "</td><td>". $row["dr_phone"] . "</td><td>". $row["dr_email"] . "</td><td>". $row["dr_address"] . "</td><td>". $row["dr_ward"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<br><br><br><br><br><br>
<table border = "5" cellpadding="15" cellspacing="15">
    <caption><h3>Patients Table</h3></caption>
<tr>
<th>Patient ID</th>
<th>Full Name</th>
<th>Gender</th>
<th>Age</th>
<th>Disease</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Ward No</th>
<th>Admission Date</th>
<th>Doctor's ID</th>
<th>Doctor's Name</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["p_id"]. "</td><td>" . $row["p_name"] . "</td><td>". $row["p_gender"] . "</td><td>". $row["p_age"] . "</td><td>". $row["p_disease"] . "</td><td>". $row["p_phone"] . "</td><td>". $row["p_email"] . "</td><td>". $row["p_address"] . "</td><td>". $row["p_ward"]. "</td><td>". $row["p_admission"]. "</td><td>". $row["p_drid"]. "</td><td>". $row["p_drname"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table><br><br><br><br><br><br>
<table border = "5" cellpadding="15" cellspacing="15">
    <caption><h3>Operations Table</h3></caption>
<tr>
<th>Operation ID</th>
<th>Operation Theater No</th>
<th>Patient ID</th>
<th>Patient Name</th>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Operation Type</th>
<th>Operaion Date</th>
<th>start Time</th>
<th>Expected Hours</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM operation";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["o_id"]. "</td><td>" . $row["o_tid"] . "</td><td>". $row["o_pid"] . "</td><td>". $row["o_pname"] . "</td><td>". $row["o_did"] . "</td><td>". $row["o_dname"] . "</td><td>". $row["o_type"] . "</td><td>". $row["o_date"] . "</td><td>". $row["o_start"]. "</td><td>". $row["o_hours"]. "</td></tr>";
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

$oid = "";
$otid = "";
$pid = "";
$pname = "";
$did = "";
$dname = "";
$type = "";
$date = "";
$start = "";
$hours = "";


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
    $posts[0] = $_POST['oid'];
    $posts[1] = $_POST['otid'];
    $posts[2] = $_POST['pid'];
    $posts[3] = $_POST['pname'];
    $posts[4] = $_POST['did'];
    $posts[5] = $_POST['dname'];
    $posts[6] = $_POST['type'];
    $posts[7] = $_POST['date'];
    $posts[8] = $_POST['start'];
    $posts[9] = $_POST['hours'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM operation WHERE o_id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $oid = $row['o_id'];
                $otid = $row['o_tid'];
                $pid = $row['o_pid'];
                $pname = $row['o_pname'];
                $did = $row['o_did'];
                $dname = $row['o_dname'];
                $type= $row['o_type'];
                $date = $row['o_date'];
                $start = $row['o_start'];
                $hours = $row['o_hours'];



                
            }
        }else{
            echo '<div align="center"; style="font-size:2.25em;color:red"> No Data For This Operation ID</div>';
            
        }
    }else{
        echo '<div align="center"; style="font-size:2.25em;color:red"> Database Error</div>';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `operation`( `o_tid`, `o_pid`, `o_pname`, `o_did`, `o_dname`, `o_type`, `o_date`, `o_start`, `o_hours`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
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
    $delete_Query = "DELETE FROM `operation` WHERE `o_id` = $data[0]";
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
    $update_Query = "UPDATE `operation` SET `o_tid`='$data[1]',`o_pid`='$data[2]',`o_pname`='$data[3]',`o_did`='$data[4]',`o_dname`='$data[5]',`o_type`='$data[6]',`o_date`='$data[7]',`o_start`='$data[8]',`o_hours`='$data[9]' WHERE `o_id` = '$data[0]'";
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
<h1 align="left"><font size="5" color= "#68bae3" face="Poppins"><u>Operations Information Form</u></font> </h1>
<br><br><br>
<form action="manage_operations.php" method="post">
	<font size="3">
		&emsp;&emsp;&emsp;Operation ID:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input required=""  type="number" align="center" name="oid" placeholder="..............................................................." value="<?php echo $oid;?>"><br><br>
        &emsp;&emsp;&emsp;Operation Theater No:&nbsp;&nbsp;&nbsp;&nbsp;&emsp; <input  type="number" align="center" name="otid" placeholder="..............................................................." value="<?php echo $otid;?>"><br><br>
        &emsp;&emsp;&emsp;Patient ID:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  type="number" align="center" name="pid" placeholder="..............................................................." value="<?php echo $pid;?>"><br><br>
        &emsp;&emsp;&emsp;Patient Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="pname" placeholder="..........................................................." value="<?php echo $pname;?>"><br><br>
        &emsp;&emsp;&emsp;Doctor ID:&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  type="number" align="center" name="did" placeholder="..............................................................." value="<?php echo $did;?>"><br><br>
        &emsp;&emsp;&emsp;Doctor Name:&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="dname" placeholder="..........................................................." value="<?php echo $dname;?>"><br><br>
        &emsp;&emsp;&emsp;Operation Type:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="type" placeholder="..........................................................." value="<?php echo $type;?>"><br><br>
        &emsp;&emsp;&emsp;Operation Date:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="date" placeholder="..........................................................." value="<?php echo $date;?>"><br><br>
        &emsp;&emsp;&emsp;Start Time:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="start" placeholder="..........................................................." value="<?php echo $start;?>"><br><br>
        &emsp;&emsp;&emsp;Expected Hours:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="hours" placeholder="..........................................................." value="<?php echo $hours;?>"><br><br>
            
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