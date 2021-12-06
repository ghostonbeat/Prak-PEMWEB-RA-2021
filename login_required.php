<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorry</title>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Code&display=swap");

        * {
            margin: 0;
            padding: 0;
            font-family: "Fira Code", monospace;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #F6F1EE;
        }

        .container {
            text-align: center;
            margin: auto;
            padding: 4em;
        }

        .container img {
            width: 256px;
            height: 225px;
        }

        .container h1 {
            margin-top: 1rem;
            font-size: 35px;
            text-align: center;
        }

        .container h1 span {
            font-size: 60px;
        }

        .container p {
            margin-top: 1rem;
        }

        .container p.info {
            margin-top: 4em;
            font-size: 12px;
        }

        .container p.info a {
            text-decoration: none;
            color: #5454ce;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://i.imgur.com/qIufhof.png" />

        <h1>
            <span>Oops...</span> <br />
            Seems that you're not logged in yet
        </h1>
        <p>Login first to use our fetures</p>
        <p class="info">
            Go back to login page
            <a href="index.php" >Login</a>
        </p>
    </div>
</body>

</html>