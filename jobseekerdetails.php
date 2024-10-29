
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Sign Up</title>
    <style>
        /* Add your styles here */
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
            background-color: rgb(43, 45, 66);
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .radio-group {
            display: flex;
            margin-bottom: 10px;
        }

        .radio-group label {
            margin-right: 20px;
        }

        button {
            background-color: rgb(43, 45, 66);
            color: #fff; 
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #8d99ae;
        }

        .small-text {
            margin-bottom: 10px;
            font-size: 12px;
            color: #555;
        }

        .learn-more {
            text-decoration: none;
            color: #007bff;
        }

        .learn-more:hover {
            text-decoration: underline;
        }
        #up {
            font-weight: bold;
            margin: 4px;
        }
        #date-of-birth {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <p id="up">It's quick and easy.</p>
        <form method="post" action="jskrregister.php">
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <input type="text" name="mobile" placeholder="Mobile number">
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="New password" required>

            <div>
                <label for="date-of-birth">Date of birth:</label>
            </div>
            <div>
                <input type="date" name="dob" required style="margin-top: 15px; margin-bottom: 15px; padding: 3px;">
            </div>

            <div class="radio-group">
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required>
                    Male
                </label>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="female" required>
                    Female
                </label>
                <label for="other">
                    <input type="radio" id="other" name="gender" value="other" required>
                    Other
                </label>
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <div class="small-text"><br>
            People who use our service may have uploaded your contact information to Facebook. <a href="#" class="learn-more">Learn more.</a>
        </div>

        <div class="small-text">
            By clicking Sign Up, you agree to our <a href="#" class="learn-more">Terms</a>, <a href="#" class="learn-more">Privacy Policy</a> and <a href="#" class="learn-more">Cookies Policy</a>.
            You may receive SMS notifications from us and can opt out at any time.
        </div>
    </div>
</body>
</html>