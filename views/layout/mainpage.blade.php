<html>
    <head>
        <title>App Name - @yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<style>
		*{
			margin:0;padding:0;
		}
		body{font-family:arial}
		.menubar{
			width:100%;
			height:55px;
			background:black;
			color:white;
		}
		
		.containerbody{
			width:100%;
			height:100%;
		}
		.sidebar{
			float:left;
			width:20%;
			height:100%;
			background:black;
		}
		.sidebar ul{
			margin:0px;
			padding:0px;
			overflow:hidden;
		}
		.sidebar ul li{
			list-style:none;
			border-bottom:1px solid white;
			
		}
		.sidebar ul li a{
			text-decoration:none;
			display:block;
			padding:15px 15px;
			color:white;
			
		}
		.sidebar ul li a:hover{
			background:#222121;
			
		}
		.container{
			float:left;
			width:80%;
			height:100%;
			margin-top:66px;
		}
		#search{
			width:40%;
			height:34px;
		}
		.footer{
			width:100%;
			height:55px;
			background:black;
			color:white;
		}

		</style>
    </head>
    <body>
	    <div class="menubar">
            @yield('menubar')
        </div>
		
		<div class="containerbody">
		    <div class="sidebar">
              @yield('sidebar')
            </div>

             <div class="container">
               @yield('content')
             </div>
		</div>

	    <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>