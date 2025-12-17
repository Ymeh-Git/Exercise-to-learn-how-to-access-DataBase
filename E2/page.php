<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn how to access a DataBase</title>
    <style>
        /* Reset your everything */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html{
            background-color: rgba(255, 46, 46, 0.4);;
        }

        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Body is force to at least be 100% height of the screen */
            overflow-x: hidden; /* Make horizontal scrolling impossible */
        }

        header, footer{
            background: rgba(255, 230, 200);
            height: 200px;
            text-align: center;
            align-content: center;
        }

        header h1{
            height:100%;
            align-content: center;
        }
        
        main{
            flex: 1; /* Pushs footer down even if the content is short */
            padding: 15px;
            background-color: rgba(255, 252, 198, 0.33);
            width: 70%; 
            margin: auto; /* This way your main content will be centered */
        }

        ul li{
            margin-left: 15px;
            padding: 15px;
        }

    </style>
</head>
<!-- It's ugly, I know, don't worry about looks :3, next lesson I will add a style.css to help with clarity -->
<body>
    <!-- Header -->
    <header>
        <h1>Hello world, i'm learning how to access a DataBase !</h1>
    </header>

    <!-- Main content -->
    <main>
        <h2>Every datas in my table users</h2>
        <!-- Here we need to add index.php -->
        <?php require_once('index.php')?> <!-- since index.php only create one list it's ok this way -->
    </main>

    <!-- Footer -->
    <footer>Every right reserved - YmehGit</footer>
</body>
</html>