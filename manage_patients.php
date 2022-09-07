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
<br><br>
    <h1 align="left"><font size="6" color= "#68bae3" face="Poppins"><u></u></font> </h1>
    <h1 align="left"><font size="6" color= "#68bae3" face="Poppins"><u>Patients Information Management</u></font> </h1>
    <br><br><br>
    
<form >
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
</table>
</form>
<br><br><br><br><br>
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
</form>
<br><br><br><br><br>
<form>
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

</form>

</section> 


















<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "arogyahospital";

$id = "";
$fname = "";
$gender = "";
$age = "";
$type = "";
$phone = "";
$email = "";
$address = "";
$ward = "";
$admission = "";
$drid = "";
$drname = "";
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
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['gender'];
    $posts[3] = $_POST['age'];
    $posts[4] = $_POST['type'];
    $posts[5] = $_POST['phone'];
    $posts[6] = $_POST['email'];
    $posts[7] = $_POST['address'];
    $posts[8] = $_POST['ward'];
    $posts[9] = $_POST['admission'];
    $posts[10] = $_POST['drid'];
    $posts[11] = $_POST['drname'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM patient WHERE p_id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['p_id'];
                $fname = $row['p_name'];
                $gender = $row['p_gender'];
                $age = $row['p_age'];
                $type = $row['p_disease'];
                $phone = $row['p_phone'];
                $email = $row['p_email'];
                $address = $row['p_address'];
                $ward = $row['p_ward'];
                $admission = $row['p_admission'];
                $drid = $row['p_drid'];
                $drname = $row['p_drname'];
            }
        }else{
            echo '<div align="center"; style="font-size:2.25em;color:red"> No Data For This Patient ID</div>';
            
        }
    }else{
        echo '<div align="center"; style="font-size:2.25em;color:red"> Database Error</div>';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `patient`( `p_name`, `p_gender`, `p_age`, `p_disease`, `p_phone`, `p_email`, `p_address`, `p_ward`, `p_admission`, `p_drid`, `p_drname`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]')";
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
    $delete_Query = "DELETE FROM `patient` WHERE `p_id` = $data[0]";
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
    $update_Query = "UPDATE `patient` SET `p_name`='$data[1]',`p_gender`='$data[2]',`p_age`='$data[3]',`p_disease`='$data[4]',`p_phone`='$data[5]',`p_email`='$data[6]',`p_address`='$data[7]',`p_ward`='$data[8]',`p_admission`='$data[9]',`p_drid`='$data[10]',`p_drname`='$data[11]' WHERE `p_id` = '$data[0]'";
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
<h1 align="left"><font size="5" color= "#68bae3" face="Poppins"><u>Patients Information Form</u></font> </h1>
<br><br><br>
<form action="manage_patients.php" method="post">
	<font size="3">
		&emsp;&emsp;&emsp;Staff ID:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input required=""  type="number" align="center" name="id" placeholder="..............................................................." value="<?php echo $id;?>"><br><br>
            &emsp;&emsp;&emsp;Full Name:&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="fname" placeholder="..........................................................." value="<?php echo $fname;?>"><br><br>
            &emsp;&emsp;&emsp;Gender:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="gender" placeholder="..........................................................." value="<?php echo $gender;?>"><br><br>
            &emsp;&emsp;&emsp;Age:&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type="number" align="center" name="age" placeholder="..............................................................." value="<?php echo $age;?>"><br><br>
            &emsp;&emsp;&emsp;Disease Type:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;<input    type="text" name="type" placeholder="..........................................................." value="<?php echo $type;?>"><br><br>
            &emsp;&emsp;&emsp;Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input    type="text" name="phone" placeholder="..........................................................." value="<?php echo $phone;?>"><br><br>
            &emsp;&emsp;&emsp;Email:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input  type="text" name="email" placeholder="..........................................................." value="<?php echo $email;?>"><br><br>
            &emsp;&emsp;&emsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input  type="text" name="address" placeholder="..........................................................." value="<?php echo $address;?>"><br><br>
           &emsp;&emsp;&emsp;Ward No:&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type="number" align="center" name="ward" placeholder="..............................................................." value="<?php echo $ward;?>"><br><br>

           &emsp;&emsp;&emsp;Addmission Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="admission" placeholder="..........................................................." value="<?php echo $admission;?>"><br><br>
           &emsp;&emsp;&emsp;Doctor No:&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp; <input type="number" align="center" name="drid" placeholder="..............................................................." value="<?php echo $drid;?>"><br><br>
           &emsp;&emsp;&emsp;Doctor's Name:&emsp;&emsp;&emsp;<input    type="text" name="drname" placeholder="..........................................................." value="<?php echo $drname;?>"><br><br>
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