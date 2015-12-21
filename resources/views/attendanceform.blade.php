<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance</title>
<link href="/css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<style>
	.sign-in{
		background-color: green;
		
	}

	.sign-out{
		background-color: red;
		
	}

	img{
		border-radius: 50%;
	}

	div.picture{
		margin-right: 20px;
		"float:left;
		width:210px;
		height:250px;
	}

	#inner{ 
	 overflow:hidden;width: 2000px;
	}
 #greeting{
 	background-color: #cf9359;
 	    line-height: 1;
 	    font-size: 26px;
 	    text-align: center;
 	    margin-bottom: 20px;
 }

	</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<div class="header">
  <div class="header-left-panel">
    <div class="logo-wrap">
      <div class="logo">
      <div class="img" id="wiz"><img src="images/wizard20.jpg"/></div>
        <h1>Sign-In Wiz</h1>
      </div>
    </div>
  </div>
  <div class="header-right-panel">
    <div class="menu">
      <ul>
        <li class="marRight20"><a class="active" href="/">home</a></li>
        <li class="marRight20"><a href="/register">register</a></li>
        <li class="marRight20"><a href="/login">login</a></li>
        <li class="marRight20"><a href="/logout">logout</a></li>
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

		<form method="POST" action="/submitattendance">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		@foreach($kidcurrentstatus1 as $kid)	
	

	    <div class="panel picture" >
			
			<img src={{$kid['picture']}}>
			{{$kid['kid_id']}}
			<h4> {!!$kid['fullname']!!} current attendance status is {!!$kid['attendstat']!!} </h4>
					
			<input type="checkbox" name={!!$kid['kid_id']!!} id={!!$kid['kid_id']!!} value={!!$kid['newattendstat']!!}>
			<label for={!!$kid['kid_id']!!}>{!!$kid['newattendstat']!!} {!!$kid['fullname']!!}</label>
			

			

		
		</div>
		
		@endforeach

	</div>
	
	</div>
	<div> <button type="submit" class="button">SUBMIT</button></div>
		</form>
</div>
<!--- panel wrap div end -->
<div class="clearing"></div>
</div>
</div>



<!--- page wrap div end -->
<div class="footer">
  <p>Copyright (c) websitename. All rights reserved. <a href="http://www.alltemplates.com"> www.alltemplateneeds.com </a></p>
</div>

</html>


</body>
</html>