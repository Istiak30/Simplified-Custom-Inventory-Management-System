<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Management App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .auth-buttons {
            text-align: right;
            margin-top: 20px;
            justify-content: right;
        }

        .auth-buttons a {
            display: inline-block;
            margin: 10px;
            margin-left: 10px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid #031c1f;
            border-radius: 5px;
            color: #031c1f;
        }

        .auth-buttons a.btn-primary {
            background-color: #031c1f;
            color: #fff;
        }

        .auth-buttons form {
            margin: 10px;
        }

        .auth-buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid #031c1f;
            border-radius: 5px;
            background-color: #031c1f;
            color: #fff;
        }


        .github-link {
            margin-top: 10px;
            display: inline-block;
            margin-left: 10px;
            padding: 10px 10px;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid #031c1f;
            border-radius: 5px;
            color: #031c1f;
        }
    </style>
</head>
<body>

<div class="container">

    @if (Route::has('login'))
        <div class="auth-buttons">
            @auth
                <a href="{{ url('/home') }}" class="btn btn-danger">Home</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <h1>Simplified Custom Inventory Management System</h1>
    <p>Welcome to the Custom Inventory Management System made with Laravel. This Project is made by <b>Istiak Ahmed</b> for <b><i>Trainee Software Engineer @ Singularity.</b></i> </br></p>
       
    
    <div class="github-link">
    <p style="text-align: center; margin-top: -5px;">This Code is available at GitHub</p>
    <a href="https://github.com/Istiak30/Simplified-Custom-Inventory-Management-System" target="_blank">Istiak Ahmed - GitHub</a>
    </div>
       
</div>

</body>
</html>
