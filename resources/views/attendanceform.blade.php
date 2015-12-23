<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance</title>
<link href="/css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'/>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<div class="header">
  <div class="header-left-panel">
    <div class="logo-wrap">
      <div class="logo">
      <div class="img" id="wiz"><img src="images/wizard20.jpg" alt="logo"/></div>
        <h1>Sign-In Wiz</h1>
      </div>
    </div>
  </div>
  <div class="header-right-panel">
    <div class="menu">
      <ul>
        <li class="marRight20"><a href="/">home</a></li>
        <li class="marRight20"><a href="/register">register</a></li>
        <li class="marRight20"><a href="/login">login</a></li>
        <li class="marRight20"><a href="/logout">logout</a></li>
        <li class="marRight20"><a class="active" href="/#">Attendance</a></li>
      </ul>
    </div>
  </div>
</div>


<!--- header div end -->
<div class="panel-wrap">
  <div class="panel-wrapper">
	


	<div>
		<div id="greeting"> <h3> Hi! {{$user->name}} hope you are having a wonderful day. </h3> </div>		 

        @foreach ($kidcurrentstatus1 as $kid)
        
        @endforeach

		
		@foreach($kidcurrentstatus1 as $kid)	
		<form method="post" action="/submitattendance">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	    <div class="panel picture" >
			
			<img src={{$kid['picture']}} alt="picture of your child" />
			
			<h4> {!!$kid['fullname']!!} is currently {!!$kid['stringattendance']!!}</h4>
					
			<!--<input type="checkbox" name={!!$kid['kid_id']!!} id={!!$kid['kid_id']!!} value=>
			<label for={!!$kid['kid_id']!!}>{!!$kid['stringattendance']!!} {!!$kid['fullname']!!}</label>-->
			

			<div id="button"> <button name= {!!$kid['kid_id']!!}  type="submit" value={!!$kid['newattendstatus']!!} 
			class="myButton">{{$kid['newstringattendance']}} {{$kid['firstname']}}</button></div>


		
		</div>
			
		</form>
		@endforeach

	</div>
	
	</div>
	
</div>
<!--- panel wrap div end -->
<div class="clearing"></div>
</div>




<!--- page wrap div end -->
<div class="footer">
  <p>Copyright (c) websitename. All rights reserved. <a href="http://www.alltemplates.com"> www.alltemplateneeds.com </a></p>
</div>

</html>


</body>
</html>