<?php
 if(isset($_POST['submit'])){

      $message = "The User's Name is: " . $_POST['name'] . " 🚀";
 }else{
    echo "Please enter your name";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Display PHP Project</title>
</head>
<style>
    *{
            font-family: sans-serif;
    }


    .container{
        height: 24rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .holder{
        display: flex;
        flex-direction: column;
    }

    .title{
        position: relative;
        left: 30%;
        top: 30px;
    }

    .holder input[type="text"]{
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid green
    }

    .holder input[type="submit"]{
        display: block;
        height: 32px;
        font-size: 20px;
        color: #ffff;
        border: 1pz solid black;
        width: 250px;
        background: crimson;
       
    }
</style>
<body>
    
    <div class="main">
        <h1 class="title">
        <?php echo $message; ?>
        </h1>
        
        <div class="container">
            <div class="holder">
                <form action="index.php" method="post">
                    <div class="wrapper">
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <br>
                    <br>
                    <div class="wrapper">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>