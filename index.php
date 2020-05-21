<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chatbox with AJAX</title>
    <link href="style.css">

    <style>
    *{
      padding: 0; margin: 0;
    }
    body{
      background: silver;
    }
    #container{
      background: white;
      padding: 20px;
      box-sizing: border-box;
      width: 50%;
      height: 600px;
      margin: 20px auto;
      position: relative;
      border-radius: 10px;
      font-family: arial;
      font-weight: bolder;
    }
    #chat_box{
      overflow: hidden;
      overflow-y: scroll;
      height: 350px;
    }
    #container span:nth-child(1){
      color: green;
    }
    #container span:nth-child(2){
      color: magenta;
    }
    #container span:nth-child(3){
      float: right;
    }
    form{
      position: absolute;
      bottom: 20px;
      clear: both;
      width: 90%;
    }
    form input[type="text"], form textarea{
      padding-bottom: 10px;
      border: none;
      outline-width: 0;
      font-size: 20px;
      width: 100%;
      height: 50px;
    }
    form input[type="text"]:focus, form textarea:focus{
      border-bottom: 1px solid aqua;
    }
    form textarea{
      height: 50px;
      resize: none;
    }
    
    </style>
  </head>
  <body>
    <div id="container">

      <div id="chat_box">
        <div id="chat"></div>
      </div>

      <form action="" method="post" name="form1">
        <input type="text" name="chatname" placeholder="Enter name"><br>
        <textarea name="message" placeholder="Enter message"></textarea><br>
        <a href="#" onclick="insert()">Send It</a>
      </form>
    </div>
    <script src="ajax.js"></script>
  </body>
</html>