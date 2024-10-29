
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Sign Up</title>
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
        <form method="post" action="empregister.php">
            <input type="text" name="company_name" placeholder="Company name" required>
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="New password" required>
            <!-- <input type="text" name="phone" placeholder="Phone number" required> -->

            <br/>Company's Address<br/>
            <textarea name="company address" rows="6" cols="50"
                placeholder="Write your company's address...">
            </textarea> <br/>

            <br/>Industry<br/>
            <select name="industry">
                <option value="None"> None </option>
                <option value="Automotive"> Automotive </option>
                <option value="Consumer Goods"> Consumer Goods </option>
                <option value="Education"> Education </option>
                <option value="Energy"> Energy </option>
                <option value="Finance"> Finance </option>
                <option value="Healthcare"> Healthcare </option>
                <option value="Information Technology (IT)"> Information Technology (IT) </option>
                <option value="Manufacturing"> Manufacturing </option>
                <option value="Retail"> Retail </option>
                <option value="Telecommunications"> Telecommunications </option>
                <option value="Other"> Other </option>
            </select> <br/>

            <input type="text" name="size" placeholder="Company's size" >

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