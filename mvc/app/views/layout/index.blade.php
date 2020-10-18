<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

html,body{
  height: 100%;
}

body{
  display: grid;
  place-items: center;
  text-align: center;
  background: #313131;
  background-position: center;
  background-size: cover;
}

.content{
  width: 340px;
  background: #242424;
  border-radius: 10px;
  padding: 40px 30px;
	box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.144), 5px 5px 15px rgba(0, 0, 0, 0.7);
}

.content .text{
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 70px;
  color: #f5d888;
  text-shadow: 2px 2px 2px #000000, -2px -2px 2px #313131;
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color:#f5d888;
  background: #212121;
  border-radius: 25px;
  box-shadow: inset 1px 1px 6px #000000,
  inset -1px -2px 4px #313131;
}

.field input:focus ~ label{
  box-shadow: inset 2px 2px 5px #babecc,
              inset -1px -1px 2px #ffffff73;
}

.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #f5d888;
  text-shadow: 2px 2px 2px #000000, -2px -2px 2px #313131;
}

.field label{
  position: absolute;
  top: 50%;
  left: 45px;
  pointer-events: none;
  color: #f5d888;
  transform: translateY(-50%);
}


.field input:focus ~ label{
  opacity: 0;
}

.forgot-pass{
  text-align: left;
  margin: 10px 0 10px 5px;
}

.forgot-pass a{
  font-size: 16px;
  color:#f5d888;
  text-decoration: none;
}

.forgot-pass:hover a{
  text-decoration: underline;
}

button{
 margin: 15px 0;
  width: 70%;
  height: 50px;
  color: #f5d888;
  font-size: 18px;
  font-weight: 600;
  background: #212121;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 25px;
  box-shadow: 2px 2px 5px #000000, -5px -5px 5px #7171712c;
  text-shadow: 2px 2px 2px #000000, -2px -2px 2px #313131
}

button:focus{
  color: #34dba3;
  box-shadow:inset 2px 2px 5px #000000,inset -5px -5px 5px #7171712c;
}

.signup{
  font-size: 16px;
  color: #595959;
  margin: 10px 0;
}

.signup a{
  color:#f5d888;
  text-decoration: none;
}

.signup a:hover{
  text-decoration: underline;
}
::placeholder
{
  color: #f5d888;
  font-weight: 300;
}
</style>  
</head>
<body>
    <div class="content">
 
      <div class="text">Login Form</div>
      <?php if(isset($_SESSION['address'])) echo $address  ?>
      <form action="" method="POST">
        <div class="field">
          <span class="fas fa-user"></span>
          <input type="text" name="email" required placeholder="Email">
         <!----- <label>Email or Phone</label>---->
        </div>
        <div class="field">
          <span class="fas fa-lock"></span>
          <input type="password" name="password" placeholder="Password">
         <!----- <label>Password</label>---->
        </div>
        <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
        <button name="btn-submit">Sign in</button>
        <div class="signup">Not a member?
          <a href="./dang-ky">Registration</a>
        </div>
      </form>
  </div>
</body>
</html>