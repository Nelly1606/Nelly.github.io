<?php
header("Content-Type: text/css; charset: UTF-8");
?>
body {
    font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
    height: 650px;
    background: #daeef8;
    display: flex;
    justify-contect: center;
    align-items: center;
  
}
.php{
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    background: white;
    border-radius: 10px;
    padding: 20px 70px;
    box-sizing: border-box; 
  
}
button {
    width: 60%;
    height: 40px;
    border: 3px solid;
    background: #346ce6;
    border-radius: 25px;
    font-size: 15px;
    color: white;
    cursor: pointer;
    outline: none;
    margin-left: 40px;
}
.h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    color: #265276;
}
.com{
    color: #265276;
    text-align: center;
}
.co{
    text-align: center;
    color: #265276;
}
.or{
    text-align: center;
    font-size: 18px;
}
button:hover{
    border-color: rgb(8, 5, 174);
    transition: .5s;
}
