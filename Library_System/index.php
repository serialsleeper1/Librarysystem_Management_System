<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        
        input{
            width: 300px;
            height: 30px;
            border-radius: 20px;
        }
        .container{
            display: flex;
            justify-content: center;
            margin-top: 100px;

        }

        label{
            display: block;
            margin-top: 10px;
        }

        form{
            background-color: transparent;
            backdrop-filter: blur(5px);
            padding: 50px;
            width: 300px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            border-radius: 5px;
        }

        

        .btn{
            text-decoration: none;
            background-color: blue;
            color: black;
            padding: 10px;
            width: 100px;
            background: skyblue;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
            text-align: center;
        }

        .form-group{
            margin-top: 10px;
            position:relative;
        }

        .btn-group{
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .register-link p a:hover {
             text-decoration: underline;
        }

        .icon{
            position: absolute;
            right: 20px;
            top: 45px;
            transform: translateY(-50%);
            font-size: 20px;
        }

    </style>
</head>
<body style="background-image: url('./images/img.jpg');">

    <div class="container">
        <form action="">
            <h1>LIBRARY</h1>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="Email" placeholder="Input email" required>
                <i class='bx bxs-envelope icon'></i>
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="Password" placeholder="Input password" required>
                <i class='bx bx-lock icon'></i>
            </div>
            <div class="btn-group">
                <a class="btn" href="home.php">Login</a>
            </div>
            <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
        </form>
    </div>
    
</body>
</html>