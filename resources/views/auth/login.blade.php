<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>workwithTAG - Connexion</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
 

                <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                	<a href="/">
                	<img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png" height="150px;">
                	</a>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" >
                <span style="color:black;font-weight:600"><h1><b style="font-weight:800;font-family: sans-serif;">Welcome to</b></h1></span>
                <span style="color:#0C00A5;font-weight:600;    font-family: sans-serif;"><h1><b>Work With </b><b style="font-weight:800">TAG</b></h1></span>
 
                </div>
                </div>
                    
                    <div class="row">
                        <div class="col-sm-7">
                        	
	
                       	<div class="form-box">

	                            <div class="form-bottom">
	                            <p class="titleregister">
	                            	Login to your account
	                            </p>

				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}	
                                @if(session()->has('error'))
                    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                @endif
					{!! Form::control('text', 12, 'log', $errors, trans('front/login.log')) !!}
					{!! Form::control('password', 12, 'password', $errors, trans('front/login.password')) !!}


							<div class="clearfix pull-left" style="padding-left:20px;">
									<div class="checkbox checkbox-primary">
				                        <input id="checkbox2" type="checkbox" checked=""><i>Remember me on this computer</i>

				                    </div>
				                    <p>
				                    	<a style="text-decoration: underline;" href="/password/email"><i>Forgotten password ?</i></a>
				                    </p>
							</div>

									<div class="clearfix">
									    <button type="submit" class="btn btn-lg pull-right">Login</button>
									</div>	


				{!! Form::close() !!}
			                    </div>
		                    </div>
		                

	                        
                        </div>
                        

                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">

	                            <div class="form-bottom">
	                            <p class="titleregister">
	                            	Register new account
	                            </p>
	                            <p>
	                            	If you are a new user of the Mobile Application and do not already have an account with The Accident Guys then please register below.

	                            </p>
	                            <p>
	                            	One registration is complete you will be able to acces your Mobile Application.
									<br>
								
	                            
	                            </p>
							<div class="clearfix">
							<a href="/auth/register">
							    <button type="button" class="btn  btn-lg pull-right">Register</button>
							</a>
							</div>

			                    </div>

                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
<br>
        <!-- Footer -->
        <footer style="text-align:center">
        <div class="container">
        <p>
The Accident Guys and Holiday Sickness Claims are trading styles of Claims Legal Ltd. UK Company 07377456 Registered Office: Raven House, 113 Fairfield Street, Manchester Central, M12 6EL.        	
        </p>
        <p>
        Telephone : 0800-8-654321	
        </p>
        <p>
        The Accident Guys is regulated by the Claims Management Regulator in respect of regulated claims management activitites.	
        </p>
        	
        </div>

        </footer>

        <!-- Javascript -->
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>