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

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 10px;
    font-size:8px;
    text-align: justify;
    position: center
}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 900px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 20px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 2px solid #ccc;
    width: 70%;
    border-left: none;
    height: 900px;
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
      <a href="https://s4490344.uqcloud.net/real_estate/Frasers.php">Frasers</<a href="https://s4490344.uqcloud.net/real_estate/Citta.php">Citta</a>
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
  <div class="main">
    <div class="tab">
  <button class="tablinks" onclick="Query(event, 'query1')" id="defaultOpen">Potential Customers</button>
  <button class="tablinks" onclick="Query(event, 'query2')">Delete invalid clients</button>
  <button class="tablinks" onclick="Query(event, 'query3')">Payment recording</button>
</div>

<div id="query1" class="tabcontent">
  <?php 
        // SETUP PHP CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "967b801f55745009";
        $dbname = "real estate";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>
    <h2>Finding the people who owns more than two apartments</h2>
    <table table border="1" style="font-size:10px;font-family:serif;" cellpadding="4">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">E-mail</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
            <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT Customers.name,Customers.phone_NO,Customers.email,Customers.address FROM ((Customers INNER JOIN Buyers_enter ON Customers.cID=Buyers_enter.cID) INNER JOIN C_available ON Buyers_enter.contract_ID=C_available.contract_ID) INNER JOIN Apartment_units ON (C_available.company_ID=Apartment_units.company_ID And C_available.unit_name=Apartment_units.unit_name)
                    where `price` > 600000
                    UNION ALL
                    SELECT Customers.name,Customers.phone_NO,Customers.email,Customers.address FROM Customers,Buyers_enter
                    WHERE Customers.cID = Buyers_enter.cID
                    GROUP BY Customers.cID
                    HAVING COUNT(*)>=2";
                    $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["name"]."</td>";
                        echo "<td>".$rows["phone_NO"]."</td>";
                        echo "<td>".$rows["email"]."</td>";
                        echo "<td>".$rows["address"]."</td>";
                        echo "</tr>";
                    }
                    ?>
    </table>
   <br>
   <h3>SQL code</h3>
   <p>SELECT Customers.name,Customers.phone_NO,Customers.email,Customers.address</p>
   <p>FROM ((Customers INNER JOIN Buyers_enter ON Customers.cID=Buyers_enter.cID)</p>
   <p>INNER JOIN C_available ON Buyers_enter.contract_ID=C_available.contract_ID)</p>
   <p>NNER JOIN Apartment_units ON (C_available.company_ID=Apartment_units.company_ID</p>
   <p>And C_available.unit_name=Apartment_units.unit_name) where `price` > 600000</p>
   <p>UNION ALL</p>
   <p>SELECT Customers.name,Customers.phone_NO,Customers.email,Customers.address</p>
   <p>FROM Customers,Buyers_enter WHERE Customers.cID = Buyers_enter.cID</p>
   <p>GROUP BY Customers.cID HAVING COUNT(*)>=2</p>   

</div>

<div id="query2" class="tabcontent">
  <h2>Delete</h2>
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
    <form method="post" action="">
      Customer ID:<br>
      <input type="text" name="cID">
      <br><br>
      <button type="submit" class="btn" name="submit">Delete</button>
    </form>
    <?php
     error_reporting(0);
     $cID = $_POST['cID'];
     if(isset($_POST["submit"])){$query = "DELETE FROM Customers WHERE cID = 
      '$cID'";
     $result = mysqli_query($conn,$query);
     mysqli_close($con);}
    ?>
    <table table border="1" style="font-size:13px;font-family:serif;" cellpadding="5">
        <thead>
            <tr>
                <th scope="col">CustomerID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">PhoneNO</th>
                <th scope="col">E-mail</th>
            </tr>
            </tr>
        </thead>
            <?php
                // FILL TABLE WITH DATA ON CLICK
            $sql = "SELECT * FROM Customers";
            $result = mysqli_query($conn, $sql);
            // put all our results into a html table
            while ($rows = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$rows["cID"]."</td>";
              echo "<td>".$rows["name"]."</td>";
              echo "<td>".$rows["address"]."</td>";
              echo "<td>".$rows["phone_NO"]."</td>";
              echo "<td>".$rows["email"]."</td>";
              echo "</tr>";}
             ?>
      
    </table>    
</div>

<div id="query3" class="tabcontent">
    <?php 
        // SETUP PHP CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "967b801f55745009";
        $dbname = "real estate";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>
    <h2>Pay after due date</h2>
    <table table border="1" style="font-size:16px;font-family:serif;" cellpadding="6">
        <thead>
            <tr>
                <th scope="col">CustomerID</th>
                <th scope="col">Order NO.</th>
                <th scope="col">Amount</th>
                <th scope="col">Paid Date</th>
                <th scope="col">Due Date</th>
                <th scope="col">Payment Type</th>
            </tr>
        </thead>
                  <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT * FROM Payments WHERE paid_date > due_date";
                    $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["cID"]."</td>";
                        echo "<td>".$rows["order_NO"]."</td>";
                        echo "<td>".$rows["amount"]."</td>";
                        echo "<td>".$rows["paid_date"]."</td>";
                        echo "<td>".$rows["due_date"]."</td>";
                        echo "<td>".$rows["payment_type"]."</td>";
                        echo "</tr>";
                    }
                    ?>
    </table>
   <br>
    <h3>SQL code</h3>
    <p>SELECT * FROM Payments WHERE paid_date > due_date</p>
   <h2>Pay by cash</h2>
    <table table border="1" style="font-size:16px;font-family:serif;" cellpadding="6">
        <thead>
            <tr>
                <th scope="col">CustomerID</th>
                <th scope="col">Order NO.</th>
                <th scope="col">Amount</th>
                <th scope="col">Paid Date</th>
                <th scope="col">Due Date</th>
                <th scope="col">Payment Type</th>
            </tr>
        </thead>
                  <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT * FROM Payments WHERE payment_type = 'cash'";
                  $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["cID"]."</td>";
                        echo "<td>".$rows["order_NO"]."</td>";
                        echo "<td>".$rows["amout"]."</td>";
                        echo "<td>".$rows["paid_date"]."</td>";
                        echo "<td>".$rows["due_date"]."</td>";
                        echo "<td>".$rows["payment_type"]."</td>";
                        echo "</tr>";
                    }
                    ?>
    </table>
   <h3>SQL code</h3>
   <p>SELECT * FROM Payments WHERE payment_type = 'cash'</p>
   
</div>
</div>
</div>

<script>
function Query(evt, query) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(query).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>
