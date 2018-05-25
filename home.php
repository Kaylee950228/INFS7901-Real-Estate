<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;
      margin: 0;}
* {box-sizing: border-box;}

/* Header/logo Title */
.header {
    padding: 60px;
    text-align: center;
    background-image: url("4.jpg");
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
    color: black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: center;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 15px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
    font-size:  25px;
    text-align: justify;
    text-indent: 2em;
}

/* Footer */
.footer {
    padding: 8px;
    text-align: center;
    background: #ddd;
}

input[type=text]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 15px 0;
    border: none;
    background: white;
}

input[type=text]:focus {
    background-color: #ddd;
    outline: none;
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}

</style>
</head>
<body>

<div class="header">
  <h1>The Real Estate Database</h1>
  <h2>INFS 7901 project</h2>
</div>

<div class="navbar">
  <a href="https://s4490344.uqcloud.net/real_estate/home.php">Home</a>
  <a href="https://s4490344.uqcloud.net/real_estate/about.php">About</a>
  <a href="https://s4490344.uqcloud.net/real_estate/ER.php">ER Diagram</a>
  <div class="dropdown">
    <button class="dropbtn">Queries 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://s4490344.uqcloud.net/real_estate/customer.php">Customer Enter</a>
      <a href="https://s4490344.uqcloud.net/real_estate/company.php">Company Manager Enter</a>
    </div>
  </div>
    <div class="dropdown">
      <button class="dropbtn">Companies 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      <a href="https://s4490344.uqcloud.net/real_estate/MIRVAC.php">MIRVAC</a>
      <a href="https://s4490344.uqcloud.net/real_estate/Frasers.php">Frasers</a>
      <a href="https://s4490344.uqcloud.net/real_estate/Citta.php">Citta</a>
      <a href="https://s4490344.uqcloud.net/real_estate/MAB.php">MAB</a>
      <a href="https://s4490344.uqcloud.net/real_estate/FKP.php">FKP</a>
      </div>
    </div> 
  <a href="https://s4490344.uqcloud.net/real_estate/buy.php">Buy</a>
  <div class="dropdown">
    <button class="dropbtn">Rent
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://s4490344.uqcloud.net/real_estate/renew.php">Renew</a>
      <a href="https://s4490344.uqcloud.net/real_estate/sublease.php">Sublease</a>
    </div>
  </div>
  <a href="https://s4490344.uqcloud.net/real_estate/contact.php" class="left">Contact us</a>  
</div>

<div class="row">
  <div class="side">
    <h2>Join in</h2>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "967b801f55745009";
        $dbname = "real estate";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>
    <form method="post" action="" >
      Customer ID:<br>
      <input type="text" name="cID" value="">
      <br>
      Full name:<br>
      <input type="text" name="name" value="">
      <br>
      Address:<br>
      <input type="text" name="address" value="">
      <br>
      Phone Number:<br>
      <input type="text" name="phone_NO" value="">
      <br>
      E-mail:<br>
      <input type="text" name="email" value="">
      <br><br>
      <button type="submit" class="btn" name="submit">Join in</button>
      
    </form>
     <?php
     error_reporting(0);
     $cID = $_POST['cID'];
     error_reporting(0);
     $name = $_POST['name'];
     error_reporting(0);
     $address = $_POST['address'];
     error_reporting(0);
     $phone_NO = $_POST['phone_NO'];
     error_reporting(0);
     $email = $_POST['email']; 
     echo $cID."<br/>".$name."<br/>".$address."<br/>".$phone_NO."<br/>".$email."<br/>";      
     if(isset($_POST["submit"])){$query = "INSERT INTO Customers(cID, name, address, phone_NO, email) VALUES ('$cID', '$name','$address',
      '$phone_NO','$email')";
      $result = mysqli_query($conn,$query);
      }
      ?>
    </div>
  <div class="main">
      <h2>Introduction</h2>
      <p>This is a real estate platform which includes house property information about five real estate companies, MIRVAC, Frasers, Citta, MAB and FKP. You can easily find buying or renting information about apartments owned by these five real estate companies. 
      </p>
      <table table border="1" style="font-size:10px;font-family:serif;" cellpadding="3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">City</th>
            </tr>
        </thead>
            <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT * FROM Real_estate_company";
                    $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["name"]."</td>";
                        echo "<td>".$rows["cities"]."</td>";
                        echo "</tr>";
                    }
                    ?>
        </tbody>
    </table>
  </div>
</div>

<div class="footer">
  <h3>Presented by Kaili Zhang and Jiayong Kuang</h3>
  <h6>image resource: http://www.corigin.com/real-estate/</h6>
</div>

</body>
</html>
