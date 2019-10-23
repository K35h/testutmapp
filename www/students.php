<html>

<head>
	<title>Welcome To UTM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery.mobile-1.4.5.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
	<script src="cordova.js"></script>


</head>

<body>
	<!-- PAGE 1 -->
	<div data-role="page" id="events">
    <div data-role="header" style="overflow:hidden;" id="hea" id="hea">
      <a href="#pagelogin" data-icon="user" class="ui-btn-right">Log Out</a>
      <img alt="UTM Logo" src="img\utm.png" id="utmLogo" style="margin-left:30%;margin-right:30%;width:40%;" />
      <div data-role="navbar" class="ui-body-b">
        <ul>
					<li><a href="#events">Events</a></li>
					<li><a href="#news">News</a></li>
					<li><a href="#pageschools">Schools</a></li>
					<li><a href="#pageprogrammes">Programmes</a></li>
					<li><a href="#pagestudent">Student</a></li>
					<li><a href="#pageabout">About</a></li>

        </ul>
      </div>
    </div>



    <div id="events">
      <h2 id="csevents">Events</h3>


      <p id="thisevents">


	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utm_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from tblevent";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p id='title'>".$row["evt_title"]."<p	>" . "<br>".  "<p id='date'>". "(". $row["evt_timestamp"].")"."<p	>" .
                "<h4> Description:</h4> " . $row["evt_desc"]."<br>".
                "<h4>Address</h4> " . $row["evt_address"]. "<br>"."<br>".
                $row["evt_image"]."<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>



      </p>

    </div>



	</div>


	<div data-role="page" id="news">
		<div data-role="header" style="overflow:hidden;" id="hea" id="hea">
			<a href="#pagelogin" data-icon="user" class="ui-btn-right">Log Out</a>
			<img alt="UTM Logo" src="img\utm.png" id="utmLogo" style="margin-left:30%;margin-right:30%;width:40%;" />
			<div data-role="navbar" class="ui-body-b">
				<ul>
					<li><a href="#events">Events</a></li>
					<li><a href="#news">News</a></li>
					<li><a href="#pageschools">Schools</a></li>
					<li><a href="#pageprogrammes">Programmes</a></li>
					<li><a href="#pagestudent">Student</a></li>
					<li><a href="#pageabout">About</a></li>

				</ul>
			</div>
		</div>

		<div id="news">
      <h2 id="csnews">News</h3>


      <p id="thisnews">


	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utm_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from tblnews";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p id='title'>".$row["news_title"]."<p	>" . "<br>".  "<p id='date'>". "(". $row["news_timestamp"].")"."<p	>" .
                "<h4> Description:</h4> " . $row["news_desc"]."<br>"."<br>".
                $row["news_image"]."<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>



      </p>

    </div>

	</div>





















</body>
</html>
