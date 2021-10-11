<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$name = "";
	$email = "";
	$contact = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
	}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> eShop </title>
    <style>
body{
    margin: 0;
    padding: 0;
    width: 100%;
    height:100vh;
    overflow: hidden;
    position: relative;
    background-color: F7F6F2;
}
.box{
    width: 490px;
    height: 350px;
    box-shadow: 5px 5px 20px #000;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 20px;
}
.top{
    width: 100%;
    height: 80px;
    background: #D4ECDD;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.top h1{
    margin: 0;
    font-size: 30px;
    color: 2B2B28;
    text-align: center;
    padding-top: 10px;
    font-family: sans-serif;
}
.mid{
    width: 100%;
    height: 150px;
    background: #22577A;
}
.mid .chat{
    width: 100%;
}
.mid .chat h2{
    margin: 0;
    font-size: 30px;
    color: #D4ECDD;
    padding:30px 20px;
    text-align: center;
}
.mid .chat p{
    margin: 0;
    height: 30px;
    font-size: 28px;
    color:#D4ECDD ;
    text-align: center;
    background-color:#22577A ;
    font-weight: 600;
    letter-spacing: 0.04em;
}
.input{
    height:100%;
    width: 489px;
    overflow: hidden;
}
.input input{
    width: 100%;
    height: 120px;
    outline: none;
    border: 10px;
    border-radius: 20px;
    padding-left: 30px;
    padding-top:0;
    font-family: monospace;
    font-size: 20px;
    background: #D4ECDD;
}
    </style>
</head>
<body>

    <div class="box">
<div style="text-align: center;" class="top">
    <h1>Hello ! <?php echo $name;?></h1>
</div>
<div class="mid">
    <div class="chat">
        <h2>How can i help you?</h2>
        <p id="chatLog">Let's Chat</p>
    </div>
</div>
    <div class="input">
    <input type="text" id="userBox"onkeydown="if(event.keyCode == 13){ talk() }"placeholder="Type A Message">
    </div>
    </div>

    <script>
function talk(){
    var know ={
        "hi":"Hello, can i help you",
        "product":"all products in stock",
        "bye":"Have A Nice Day !",
        "hello":"Hi, can i help you",
        "good":"Thank You.."
    };
    var user = document.getElementById('userBox').value.toLowerCase();
    document.getElementById('chatLog').innerHTML = user + "<br>";
    if(user in know){
        document.getElementById('chatLog').innerHTML = know[user] + "<br>";
    }else{
        document.getElementById('chatLog').innerHTML = "I do not understand .";
    }
}
    </script>
</body>
</html>