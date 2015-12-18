<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>



<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
  <div class="header-left-panel">
    <div class="logo-wrap">
      <div class="logo">
        <h1>Sign-In Wiz</h1>
      </div>
    </div>
  </div>
  <div class="header-right-panel">
    <div class="menu">
      <ul>
        <li class="marRight20"><a  href="/">home</a></li>
        <li class="marRight20"><a class="active" href="/register">register</a></li>
        <li class="marRight20"><a href="/login">login</a></li>
        <li class="marRight20"><a href="/contact">contact</a></li>
      </ul>
    </div>
  </div>
</div>
<!--- header div end -->

<div class="page-wrap">
  <div class="page-wrapper">
    <div class="primary-content marRight30">
      <div class="mid-panel">
        <div class="mid-panel-content">
          <div class="title">
            <h1>Please Register an Account</h1>
          </div>
          <div class="border"></div>
         
            <form method='POST' action='auth/register'>
            {!! csrf_field() !!}
            <div class="contact-form margin-top">
              <label> <span>Name</span>
              <input type="text" class="input_text" name="name" id="name"/>
              </label>
              <label> <span>Email</span>
              <input type="text" class="input_text" name="email" id="email"/>
              </label>
              <label> <span>Password</span>
              <input type="password" class="input_text" name="password" id="password"/>
              </label>
              <label> <span>Confirm Password</span>
              <input type="password" class="input_text" name="password_confirmation" id="password_confirmation"/>
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--- panel wrap div end -->
<div class="clearing"></div>




<!--- page wrap div end -->
<div class="footer">
  <p>Copyright (c) websitename. All rights reserved. <a href="http://www.alltemplates.com">< www.alltemplateneeds.com ></a></p>
</div>
</body>
</html>
