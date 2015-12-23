<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="header">
  <div class="header-left-panel">
    <div class="logo-wrap">
      <div class="logo">
      <div class="img" id="wiz"><img src="images/wizard20.jpg" alt="wizard logo" /></div>
        <h1>Sign-In Wiz</h1>
      </div>
    </div>
  </div>
  <div class="header-right-panel">
    <div class="menu">
      <ul>
        <li class="marRight20"><a href="/">home</a></li>
        <li class="marRight20"><a class="active" href="/register">register</a></li>
        <li class="marRight20"><a href="/login">login</a></li>
        <li class="marRight20"><a href="/logout">logout</a></li>
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
            <h1>Please Register An Account/Child/</h1>
          </div>
          <div class="border"></div>
            <form method='post' action='/register'>
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
              <button type="submit" class="button">Register</button>
            </div>
          </form>
          <div class="clearing"></div>

          <div class="title">
            <h1>Please Register A Child </h1>
          </div>
          <div class="border"></div>
          
            <form method='post' action='/childregister'>
            {!! csrf_field() !!}
            <div class="contact-form margin-top">
              <label> <span>Child First Name</span>
              <input type="text" class="input_text" name="firstname" id="firstname"/>
              </label>
              <label> <span>Child Last Name</span>
              <input type="text" class="input_text" name="lastname" id="lastname"/>
              </label>
              <label><span>Birthday(Year-Month-Day):</span></label>
              <input class="input_text" type="date" name="birthday" />
              <ul>
               @foreach($errors->all() as $error)
                  <li id="errorchildreg">{{ $error }}</li>
                @endforeach
              </ul>
              <button type="submit" class="button">Register Child</button>
            </div>

          </form>
        </div>
      
      <div class="clearing"> </div>
      <div class="title">
            <h1>Cancel Registration For A Child </h1>
          </div>
          <div class="border"></div>
          
            <form method='post' action='/registerchild'>
            {!! csrf_field() !!}
            <div class="contact-form margin-top">
              <label> <span>Child First Name</span>
              <input type="text" class="input_text" name="firstname" id="firstname"/>
              </label>
              <label> <span>Child Last Name</span>
              <input type="text" class="input_text" name="lastname" id="lastname"/>
              </label>
              <button type="submit" class="button">Cancel Registration</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
    
    


<!--- page wrap div end -->
<div class="footer">
  <p>Copyright (c) websitename. All rights reserved. <a href="http://www.alltemplates.com">www.alltemplateneeds.com </a></p>
</div>
</body>
</html>