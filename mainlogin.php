<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Login</title>
    <link rel="stylesheet" href="mainlogin.css">
</head>
<body>
  <div class="realm">
    <a href="index.html" style="text-decoration:none;"><h1 style="color: white;">R.E.A.L.M.</h1></a>
</div>
    <div class="container">
       
         
        <div class="col-1">
            <div class="form-container">
                <p class="title">Welcome back Recruiters</p>
                <form method="post" action="login_submit.php" style="display: flex; flex-direction: column;align-items:center ;">
                    <input type="text" name="email" placeholder="Company Email" style="border-radius: 5px;margin-top: 10px; height: 30px;width: 250px;">
                    <input type="password" name="password" placeholder="Password"style="border-radius: 5px;margin-top: 10px;height: 30px;width: 250px;>
                    <p class="page-link">
                        <span class="page-link-label">Forgot Password?</span>
                    </p>
                    <button class="form-btn">Log in</button>
                </form>
                <p class="sign-up-label">
                    
                  Don't have an account?<span class="sign-up-link"><a href="jobseekerdetails.php"><button style="margin-top:10px;margin-top: 10px;
                    border-radius: 4px;
                    text-decoration: underline;
                    border: none;margin-bottom: 10px;
                ">Sign Up</span>
                </button></a></p>
                <div class="buttons-container">
                  <div class="apple-login-button">
                    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
                        <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                  </svg>
                  </a>
                    <span>Log in with Github</span>
                  </div>
                  <div class="google-login-button">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px" class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
              c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
              c0,11.045,8.955,20 ,20,20c11.045,0,20-8.955,20-20C44,12.955,35.045,4,24,4z"></path>
                    </svg>
                    <span>Log in with Google</span>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="form-container">
                <p class="title">Welcome back Job Seekers</p>
                <form method="post" action="login_submit.php">
                    <input type="text" name="email" placeholder="Job Seeker Email"style="border-radius: 5px;margin-top: 10px;height: 30px;width: 250px;margin-left: 18px">
                    <input type="password" name="password" placeholder="Password"style="border-radius: 5px;margin-top: 10px;height: 30px;width: 250px;margin-left: 18px;>
                    <p class="page-link">
                        <span class="page-link-label" style="margin-left:190px">Forgot Password?</span>
                    </p>
                    <button class="form-btn" style=" padding: 10px 16px; margin-left: 110px; margin-top:20px; font-family: Lucida Sans, Lucida Sans Regular, Lucida Grande, Lucida Sans Unicode, Geneva, Verdana, sans-serif;
  border-radius: 20px;
  border: 0 !important;
  outline: 0 !important;
  margin-bottom: 10px;
  background: teal;
  color: white;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">Log in</button>
                </form>
                <p class="sign-up-label">
                    
                  Don't have an account?<span class="sign-up-link"><a href="jobseekerdetails.php"><button style="margin-top:10px;margin-top: 10px;
                    border-radius: 4px;
                    text-decoration: underline;
                    border: none;">Sign up</span>
                </button></a></p>
                <div class="buttons-container">
                  <div class="apple-login-button">
                    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
                        <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                  </svg>
                  </a>
                    <span>Log in with Github</span>
                  </div>
                  <div class="google-login-button">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px" class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
              c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
              c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,12.955,35.045,4,24,4z"></path>
                    </svg>
                    <span>Log in with Google</span>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>