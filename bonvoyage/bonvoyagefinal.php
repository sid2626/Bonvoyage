<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Add this script section inside your <head> tag -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script>
    angular.module('loginApp', [])
        .controller('LoginFormController', function ($http) {
            var vm = this;
            vm.loginFormData = {};
            vm.signupFormData = {};

            vm.submitLoginForm = function () {
                $http.post('login.php', vm.loginFormData)
                    .then(function (response) {
                        // Handle success, e.g., redirect to the dashboard
                        console.log(response.data);
                        redirectToDashboard();
                    })
                    .catch(function (error) {
                        // Handle error, e.g., display an error message
                        console.error("Error in login.php:", error);
                    });
            };

            vm.submitSignupForm = function () {
                $http.post('signup.php', vm.signupFormData)
                    .then(function (response) {
                        // Handle success, e.g., redirect to the dashboard
                        console.log(response.data);
                        redirectToDashboard();
                    })
                    .catch(function (error) {
                        // Handle error, e.g., display an error message
                        console.error("Error in signup.php:", error);
                    });
            };
        });
        
        
        function validate(){
            let name = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            if(name == '')
            {
                alert('Email cannot be blank');
            }   
            if(password.length<6)
            {
                if(password == '')
                {
                    alert('Password cannot be blank');
                }
                else
                {
                    alert('Password should be greater than 6 characters');
                }
            }
 }


</script>

  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      background-image: url('https://media.istockphoto.com/id/1345893732/photo/empty-airport-at-sunset.jpg?s=2048x2048&w=is&k=20&c=_hkNKplu_Lxx9fhlJEV-50ADEUy6MK7EptGRdwa_Ws4='); /* Replace with your background image */
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    img.logo {
      width: 150px;
      margin-bottom: 20px;
    }

    h3, p {
      margin-top: 0;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }

    .switch-form {
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
  <title>Bon Voyage - Login and Sign Up</title>
  <form action="Connection.php" method="post"> 
</head>

<body ng-app="loginApp">
   
    
  <div class="container" ng-controller="LoginFormController as ctrl">
    <h3>Your Journey Begins Here with Bon Voyage Travel Agency</h3>
    <p>Plan your own trip, explore our itinerary plans, view tourism packages, and much more!</p>

    

    <!-- Login Form -->
    <form id="loginForm" ng-submit="ctrl.submitLoginForm()" novalidate>
      <h2>Login</h2>
      <div>
      <input type="text" id="username" placeholder="Username"  ng-model="ctrl.loginFormData.username" required>
      <span ng-show="loginForm.loginUsername.$touched && loginForm.loginUsername.$invalid" class="error">Username is required.</span>
    </div>
    <div>
      <input type="password" id="Password" placeholder="Password" ng-model="ctrl.loginFormData.password" required>
      <span ng-show="loginForm.loginPassword.$touched && loginForm.loginPassword.$invalid" class="error">Password is required.</span>
    </div>
      <button type="submit">Login</button>
    </form>

    <!-- Sign Up Form -->
    <form id="signupForm" ng-submit="ctrl.submitSignupForm()" style="display: none;">
      <h2>Sign Up</h2>
      <div>
        <input type="text" id="signupUsername" name="signupUsername" placeholder="Username" ng-model="ctrl.signupFormData.username" required>
    <span ng-show="loginForm.signupUsername.$touched && loginForm.signupUsername.$invalid" class="error">Username is required.</span>
      </div>
      <div>
        <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" ng-model="ctrl.signupFormData.password" required>
        <span ng-show="loginForm.signupPassword.$touched && loginForm.signupPassword.$invalid" class="error">Password is required.</span>
      </div>
      <button type="submit">Sign Up</button>
    </form>

    <!-- <div class="switch-form">
      <p>Don't have an account? < onclick="createacc.php">Sign Up</a></p>
    </div> -->
    <button id="account" onclick="location.href='createacc.php'">Create your  account</button>
  </div>

  <script>
    function toggleForm() {
      const loginForm = document.getElementById('loginForm');
      const signupForm = document.getElementById('signupForm');

      if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
      } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
      }
    }

    function redirectToDashboard(){
      window.location.href = 'dashboard.php';
    }
  </script>
</body>
</html>
