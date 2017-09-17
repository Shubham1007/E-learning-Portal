<!DOCTYPE html>
<html>
<head>
<title>
CURRENT AFFAIRS
</title>

	<style>
ul {
    list-style-type: none;
    margin-top: -100px;
    padding: 10;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 700px;margin-top:-54px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: red;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: blue;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 80%;
    border-left: none;
    height: 700px;
}
</style>
</head>
<body>
<br> 
<br>
<br><br>
<br>
<ul>
  <li><a class="active" href="./index.php">Home</a></li>
  <li><a href="../../news.php">News</a></li>
  <li><a href="../../contacts.php">Contact</a></li>
  <li><a href="../../about.php">About</a></li>
</ul>
<br>
<br>
  


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'a1')" id="defaultOpen">Top Stories</button>
  <button class="tablinks" onclick="openCity(event, 'a2')">India</button>
  <button class="tablinks" onclick="openCity(event, 'a3')">World</button>
  <button class="tablinks" onclick="openCity(event, 'a4')">Business</button>
  <button class="tablinks" onclick="openCity(event, 'a5')">Technology</button>
  <button class="tablinks" onclick="openCity(event, 'a6')">Entertainment</button>
  <button class="tablinks" onclick="openCity(event, 'a7')">Sport</button>
  <button class="tablinks" onclick="openCity(event, 'a8')">Health</button>
</div>

<div id="a1" class="tabcontent">
  <h3>Top Stories</h3>
 <center>
 <embed height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
  </center>
  
</div>

<div id="a2" class="tabcontent">
  <h3>India</h3>
  <center>
 <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
  </center>
</div>

<div id="a3" class="tabcontent">
  <h3>World</h3>
  
  <center>
   <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">

 </center>
</div>

<div id="a4" class="tabcontent">
  <h3>Business</h3>
  <center>
   <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
   
  </center>
 
</div>

<div id="a5" class="tabcontent">
  <h3>Technology</h3>
  
  <center>
   <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">

 </center>
</div>

<div id="a6" class="tabcontent">
  <h3>Entertainment</h3>
  
  <center>
   <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
   
 </center>
</div>



<div id="a7" class="tabcontent">
  <h3>Sport</h3>
  <center>
   <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
  
 </center>
</div>

<div id="a8" class="tabcontent">
  <h3>Health</h3>
  <center>
 <embed  height="500" width="700" src="https://www.tutorialspoint.com/current_affairs_2017/index.htm">
</center>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
