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
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    background-color: #f1f1f1;
    padding: 20px;
}


/* Main column */
.main {   
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
    background-color: white;
    padding: 20px;
    font-size: 10px;
    text-align: left;
}

input[type=text]{
    width: 80%;
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

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
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

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 90%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 13px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
        $servername = "localhost";
        $username = "root";
        $password = "967b801f55745009";
        $dbname = "real estate";
        $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>
  <input type="text" id="myInput1" onkeyup="myFunction()" placeholder="Search for apartments by city.." title="Type in a name">
  <input type="text" id="myInput2" onkeyup="myFunction()" placeholder="Search for apartments by type.." title="Type in a name">

   <table id = "myTable">
        <thead class="header">

            <tr>
                <th scope="col">Unit Name</th>
                <th scope="col">Cities</th>
                <th scope="col">Suburb</th>
                <th scope="col">Type</th>
                <th scope="col">Area</th>
                <th scope="col">Garage</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
            <?php
                // FILL TABLE WITH DATA ON CLICK
                  $sql = "SELECT suburb,price,type,unit_name,area,garage,cities FROM Apartment_units JOIN Real_estate_company ON Apartment_units.company_ID=Real_estate_company.company_ID WHERE garage!= \"none\" ORDER by cities";
                    $result = mysqli_query($conn, $sql);
                    
                    // put all our results into a html table
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["unit_name"]."</td>";
                        echo "<td>".$rows["cities"]."</td>";
                        echo "<td>".$rows["suburb"]."</td>";
                        echo "<td>".$rows["type"]."</td>";
                        echo "<td>".$rows["area"]."</td>";
                        echo "<td>".$rows["garage"]."</td>";
                        echo "<td>".$rows["price"]."</td>";
                        echo "</tr>";
                    }
                            ?>
        </tbody>
    </table>
    <script>
    function myFunction() {var input, filter, table, tr, td, i;
    input = document.getElementById("myInput1");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
    function myFunction() {var input, filter, table, tr, td, i;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
   <p>SELECT suburb,price,type,unit_name,area,garage,cities</p> 
   <P>FROM Apartment_units JOIN Real_estate_company</P> 
   <P>ON Apartment_units.company_ID=Real_estate_company.company_ID</P>
   <P>WHERE garage!= "none"</P> 
   <P>ORDER by cities</P>
  </div>
</div>

</body>
</html>