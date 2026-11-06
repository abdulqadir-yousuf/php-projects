<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
    }

    #container {
        width: 120px;
        margin: 30px auto;
        padding: 25px;
        background-color: white;
        border: 1px solid black;
        border-radius: 8px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        margin-left:70px;
    }

    input[type="text"],
    input[type="password"],
    textarea {
        width: 50%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 4px;
        box-sizing: border-box;
        justify_content: center;
        margin-left:70px;
    }

    textarea {
        resize: vertical;
        margin-top: 10px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 15px 5px 15px 70;
    }

    .button-container {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    button {
        flex: 1;
        padding: 10px;
        border: 1px solid black;
        border-radius: 4px;
        cursor: pointer;
        margin-left:70px;
    }

    button[type="reset"] {
        background-color: #ddd;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
    }

    button:hover {
        opacity: 0.8;
    }
</style>
</head>
<body>
    <h2>Example (textbox and passowrd)</h2>
   <div id"container">
    <form method="POST" action="">
    <label id="nameLabel" for="name">full Name:</label> <br>
    <input type="text" id="Name" name="name" value="Ali Mohamed">
    <br>
    <br>
    <label for="Password">Enter Password</label> <br>
    <input type="password" id="password" name="password" required>
    <br>
    <br>
    <TEXtarea Name="COMMENT" cols="30" rows="6"></TEXtarea>
    <br>

    <input type="radio" name="sex" value="male" id="male">Male
    <input type="checkbox" name="sex" value="female" id="female">female
    <button type="reset">reset form</button>
    <button type="submit">Register form</button>
    </form>
   </div>
   
</body>
</html>