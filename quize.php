<html>

<head>

<link rel="stylesheet" href="animate.css">
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
body {
  
  color: white;
  font-family: arial;
  font-size: 14px;
}

#container {
  width: 60%;
  background: #199fdb;
  margin: 20px auto;
  overflow: auto;
  padding: 25px;
}

header {
  text-align: center;
  border-bottom: #fff dashed 1px;
}

header h1,
header p {
  margin 0;
  padding 0;
}

header p {
  margin-top: 5px;
  color: #000;
}

section {
  min-height: 400px;
}

footer {
  text-align: center;
}

input[type="submit"] {
  background: #f06226;
  border: 0;
  color: white;
  padding: 10px 15px;
  cursor: pointer;
}

#results h3 {
  background: #f06226;
  padding: 10px;
  margin: 10px 0;
}
#results span {
  color: #000;
  font-weight: bold; 
}
</style><style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 200px;
	margin-top:-49px;
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
    height: 300px;
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
  <li><a href="./news.php">News</a></li>
  <li><a href="./contacts.php">Contact</a></li>
  <li><a href="./about.php">About</a></li>
</ul>
<br>
<br>
  
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'a0')" id="defaultOpen">C</button>
  <button class="tablinks" onclick="openCity(event, 'a1')">C++</button>
  <button class="tablinks" onclick="openCity(event, 'a2')">JAVA</button>
 
</div>


<div class="sty" style="margin-top:240px; margin-right:1000px;" >
<div class="bounceInUp  animated">
<img height="300" src="eeer.png" >
</div>
</div>


<div id="container" STYLE="margin-top:-500px;">
  <header>
    <h1>Simple JavaScript Quiz</h1>
    <p>Test your knowledge in <strong>JavaScript Fundamentals</strong></p>
  </header>
  <section>
    <div id="results"></div>
    <form name="quizForm" onsubmit="return submitAnswers()">
      <h3>1. In which HTML element do we put in JavaScript code?</h3>
      <input type="radio" name="q1" value="a" id="q1a">a. &lt;js&gt;<br>
      <input type="radio" name="q1" value="b" id="q1b">b. &lt;script&gt;<br>
      <input type="radio" name="q1" value="c" id="q1c">c. &lt;body&gt;<br>
      <input type="radio" name="q1" value="d" id="q1d">d. &lt;link&gt;<br>

      <br><br>
      <h3>2. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q2" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q2" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q2" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q2" value="d" id="q2d">d. scope<br>      
      
      <br><br>
      <h3>3. JavaScript is a version of Java.</h3>
      <input type="radio" name="q3" value="a" id="q3a">a. true<br>
      <input type="radio" name="q3" value="b" id="q3b">b. false<br>  
	  
	  <br><br>
      <h3>4. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q4" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q4" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q4" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q4" value="d" id="q2d">d. scope<br>      
      
	  
	  <br><br>
      <h3>5. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q5" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q5" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q5" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q5" value="d" id="q2d">d. scope<br>      
      
	  
	  <br><br>
      <h3>6. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q6" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q6" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q6" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q6" value="d" id="q2d">d. scope<br>      
      
	  <br><br>
      <h3>7. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q7" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q7" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q7" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q7" value="d" id="q2d">d. scope<br>      
      
	  <br><br>
      <h3>8. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q8" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q8" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q8" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q8" value="d" id="q2d">d. scope<br>      
      
		
	  <br><br>
      <h3>9. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q9" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q9" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q9" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q9" value="d" id="q2d">d. scope<br>      
      
	  <br><br>
      <h3>10. What is the vision of JavaScript varibles called?</h3>
      <input type="radio" name="q10" value="a" id="q2a">a. inline<br>
      <input type="radio" name="q10" value="b" id="q2b">b. line of sight<br>
      <input type="radio" name="q10" value="c" id="q2c">c. directional<br>
      <input type="radio" name="q10" value="d" id="q2d">d. scope<br>      
      	
	
	 
      <br><br>
      <input type="submit" value="Submit Answers">
    </form>
  </section>
  <footer>
    <p>Copyright &copy; 2017</p>
  </footer> 
</div>
<script>function submitAnswers() {
  var total = 10;
  var score = 0;
  
  //Get user input
  var q1 = document.forms['quizForm']['q1'].value;
  var q2 = document.forms['quizForm']['q2'].value;
  var q3 = document.forms['quizForm']['q3'].value;
  var q4 = document.forms['quizForm']['q4'].value;
  var q5 = document.forms['quizForm']['q5'].value;
  var q6 = document.forms['quizForm']['q6'].value;
  var q7 = document.forms['quizForm']['q7'].value;
  var q8 = document.forms['quizForm']['q8'].value;
  var q9 = document.forms['quizForm']['q9'].value;
  var q10 = document.forms['quizForm']['q10'].value;
  
  // Validation  
  for(var i = 1; i <= total; i++) {
    if(eval('q' + i) === null || eval('q' + i) == '' ) {
      alert('You missed question ' + i);
      return false;
    }
  }
  
  // Set correct answers
  var answers = ["b","d","b","b","d","b","b","d","b","d"];
  
  for(var i = 1; i <= total; i++) {
    // Check answers
    if (eval('q' + i) == answers[i - 1]) {
      score++;
    }
  }

  // Display results
  var results = document.getElementById('results');
  results.innerHTML = '<h3>You scored <span>' + score + '</span> out of <span>' + total + '</span></h3>';
  //alert('You scored ' + score + ' out of ' + total);
  
  return false;
}
</script>
  

</body>

</html>