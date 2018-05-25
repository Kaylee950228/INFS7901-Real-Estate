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
    font-size:10px;
    text-align: justify;
    text-indent: 2em;
    position: center
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
  <div class="main">
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
    <h2>Citta</h2>
    <table table border="1" style="font-size:15px;font-family:serif;" cellpadding="8">
        <thead>
            <tr>
                <th scope="col">ComapnyID</th>
                <th scope="col">Name</th>
                <th scope="col">Unit Name</th>
                <th scope="col">Type</th>
                <th scope="col">Garage</th>
                <th scope="col">Area</th>
                <th scope="col">Suburb</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
            <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT Apartment_units.*, Real_estate_company.name FROM Apartment_units INNER JOIN Real_estate_company ON Apartment_units.company_ID = Real_estate_company.company_ID AND Apartment_units.company_ID=\"3001\"";
                    $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["company_ID"]."</td>";
                        echo "<td>".$rows["name"]."</td>";
                        echo "<td>".$rows["unit_name"]."</td>";
                        echo "<td>".$rows["type"]."</td>";
                        echo "<td>".$rows["garage"]."</td>";
                        echo "<td>".$rows["area"]."m<sup>2</sup></td>";
                        echo "<td>".$rows["suburb"]."</td>";
                        echo "<td>".$rows["price"]."</td>";
                
                        echo "</tr>";
                    }
                            ?>
        </tbody>
    </table>
   <p>SELECT Apartment_units.*, Real_estate_company.name</p>
   <p>FROM Apartment_units</p>
   <p>INNER JOIN Real_estate_company</p>
   <p>ON Apartment_units.company_ID = Real_estate_company.company_ID</p> 
   <p>AND (Apartment_units.company_ID="3001"</p>
   
  </div>
</div>


</body>
</html>

