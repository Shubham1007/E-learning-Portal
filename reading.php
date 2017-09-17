<!DOCTYPE html>
<html>
<head>


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
  <button class="tablinks" onclick="openCity(event, 'a0')" id="defaultOpen">C</button>
  <button class="tablinks" onclick="openCity(event, 'a1')">C++</button>
  <button class="tablinks" onclick="openCity(event, 'a2')">JAVA</button>
  <button class="tablinks" onclick="openCity(event, 'a3')">PHP</button>
  <button class="tablinks" onclick="openCity(event, 'a4')">HTML</button>
  <button class="tablinks" onclick="openCity(event, 'a5')">CSS</button>
  <button class="tablinks" onclick="openCity(event, 'a6')">PERL</button>
  <button class="tablinks" onclick="openCity(event, 'a7')">RUBY</button>
  <button class="tablinks" onclick="openCity(event, 'a8')">C#</button>
  
</div>

<div id="a0" class="tabcontent">
  <h3>C</h3>
  
<div class="s1">
<center>
<embed src="r1.pdf" width="800px" height="2100px" />
</center>
</div>
  
  
</div>

<div id="a1" class="tabcontent">
  <h3>C++</h3>
<div class="s2">
<center>
<embed src="r2.pdf" width="800px" height="2100px" />
</center>
</div>
</div>


<div id="a2" class="tabcontent">
  <h3>JAVA</h3>
<div class="s3">
<center>
<embed src="r3.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>


<div id="a3" class="tabcontent">
  <h3>PHP</h3>
<div class="s4">
<center>
<embed src="r4.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>

<div id="a4" class="tabcontent">
  <h3>HTML</h3>
<div class="s5">
<center>
<embed src="r5.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>


<div id="a5" class="tabcontent">
  <h3>CSS</h3>
<div class="s6">
<center>
<embed src="r6.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>

<div id="a6" class="tabcontent">
  <h3>PERL</h3>
<div class="s7">
<center>
<embed src="r7.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>

<div id="a7" class="tabcontent">
  <h3>RUBY</h3>
<div class="s8">
<center>
<embed src="r8.pdf" width="800px" height="2100px" />
</center>
</div>  
</div>

<div id="a8" class="tabcontent">
  <h3>C#</h3>
<div class="s9">
<center>
<embed src="r9.pdf" width="800px" height="2100px" />
</center>
</div>  
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
