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
    <h1 align="left"><font size="6" color= "#68bae3" face="Poppins"><u>Patients Discharge Information Management</u></font> </h1>
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

<br><br><br><br>
<table border = "5" cellpadding="15" cellspacing="15">
    <caption align="Left"><h3>Wards Table</h3>
<tr>
<th>Ward ID</th>
<th>Ward Name</th>
<th>Head Doctor ID</th>
<th>Head Doctor Name</th>
<th>No of Beds</th>
<th>No of Current Parients</th>
<th>Last Updated Date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM wards";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["w_id"]. "</td><td>" . $row["w_name"] . "</td><td>". $row["w_drid"] . "</td><td>". $row["w_drname"] . "</td><td>". $row["w_beds"] . "</td><td>". $row["w_patients"] . "</td><td>". $row["w_update"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br><br><br><br>
<table border = "5" cellpadding="15" cellspacing="15">
    <caption align="Left"><h3>Discharge Table</h3>
<tr>
<th>Discharge ID</th>
<th>Patient ID</th>
<th>Patient Name</th>
<th>Ward ID</th>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Admission Date</th>
<th>Discharge Date</th>
<th>Room ID</th>
<th>Room Fee</th>
<th>Appointment Fee</th>
<th>Hospital Fee</th>
<th>Total Fee</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "arogyahospital");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM discharge";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["d_id"]. "</td><td>" . $row["d_pid"] . "</td><td>". $row["d_pname"] . "</td><td>". $row["d_wid"] . "</td><td>". $row["d_did"] . "</td><td>". $row["d_dname"] . "</td><td>". $row["d_ad"] . "</td><td>". $row["d_dd"] . "</td><td>". $row["d_rid"] . "</td><td>". $row["d_rfee"] . "</td><td>". $row["d_afee"] . "</td><td>". $row["d_hfee"] . "</td><td>". $row["d_tot"] . "</td></tr>";
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

$id = "";
$pid = "";
$pname = "";
$wid = "";
$did = "";
$dname = "";
$adate = "";
$ddate = "";
$rid = "";
$rfee = "";
$afee = "";
$hfee = "";
$tfee = "";


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
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['pid'];
    $posts[2] = $_POST['pname'];
    $posts[3] = $_POST['wid'];
    $posts[4] = $_POST['did'];
    $posts[5] = $_POST['dname'];
    $posts[6] = $_POST['adate'];
    $posts[7] = $_POST['ddate'];
    $posts[8] = $_POST['rid'];
    $posts[9] = $_POST['rfee'];
    $posts[10] = $_POST['afee'];
    $posts[11] = $_POST['hfee'];
    $posts[12] = $_POST['tfee'];

    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM discharge WHERE d_id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['d_id'];
                $pid = $row['d_did'];
                $pname = $row['d_pname'];
                $wid = $row['d_wid']; 
                $did = $row['d_did'];
                $dname = $row['d_dname'];
                $adate= $row['d_ad'];
                $ddate = $row['d_dd'];
                $rid = $row['d_rid'];
                $rfee = $row['d_rfee'];
                $afee = $row['d_afee'];
                $hfee= $row['d_hfee'];
                $tfee = $row['d_tot'];




                
            }
        }else{
            echo '<div align="center"; style="font-size:2.25em;color:red"> No Data For This Discharge ID</div>';
            
        }
    }else{
        echo '<div align="center"; style="font-size:2.25em;color:red"> Database Error</div>';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `discharge`( `d_pid`, `d_pname`, `d_wid`, `d_did`, `d_dname`, `d_ad`, `d_dd`, `d_rid`, `d_rfee`, `d_afee`, `d_hfee`, `d_tot`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]')";
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
    $delete_Query = "DELETE FROM `discharge` WHERE `d_id` = $data[0]";
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
    $update_Query = "UPDATE `discharge` SET `d_pid`='$data[1]',`d_pname`='$data[2]',`d_wid`='$data[3]',`d_did`='$data[4]',`d_dname`='$data[5]',`d_ad`='$data[6]',`d_dd`='$data[7]',`d_rid`='$data[8]',`d_rfee`='$data[9]',`d_afee`='$data[10]',`d_hfee`='$data[11]',`d_tot`='$data[12]' WHERE `d_id` = '$data[0]'";
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
<form action="manage_discharge.php" method="post">
	<font size="3">
		&emsp;&emsp;&emsp;Discharge ID:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input required=""  type="number" align="center" name="id" placeholder="..............................................................." value="<?php echo $id;?>"><br><br>
        &emsp;&emsp;&emsp;Patient ID:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  type="number" align="center" name="pid" placeholder="..............................................................." value="<?php echo $pid;?>"><br><br>
        &emsp;&emsp;&emsp;Patient Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="pname" placeholder="..........................................................." value="<?php echo $pname;?>"><br><br>
        &emsp;&emsp;&emsp;Ward ID:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  type="number" align="center" name="wid" placeholder="..............................................................." value="<?php echo $wid;?>"><br><br>
        &emsp;&emsp;&emsp;Doctor ID:&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  type="number" align="center" name="did" placeholder="..............................................................." value="<?php echo $did;?>"><br><br>
        &emsp;&emsp;&emsp;Doctor Name:&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="dname" placeholder="..........................................................." value="<?php echo $dname;?>"><br><br>
        &emsp;&emsp;&emsp;Admission Or Appointment Date:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="adate" placeholder="..........................................................." value="<?php echo $adate;?>"><br><br>
        &emsp;&emsp;&emsp;Discharge Date:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="ddate" placeholder="..........................................................." value="<?php echo $ddate;?>"><br><br>
        &emsp;&emsp;&emsp;Room ID:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="rid" placeholder="..........................................................." value="<?php echo $rid;?>"><br><br>
        &emsp;&emsp;&emsp;Room Fee:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="rfee" placeholder="..........................................................." value="<?php echo $rfee;?>"><br><br>
        &emsp;&emsp;&emsp;Addmission Fee:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="afee" placeholder="..........................................................." value="<?php echo $afee;?>"><br><br>
        &emsp;&emsp;&emsp;Hospital Fee:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="hfee" placeholder="..........................................................." value="<?php echo $hfee;?>"><br><br>
        &emsp;&emsp;&emsp;Full Amount:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="tfee" placeholder="..........................................................." value="<?php echo $tfee;?>"><br><br>
            
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