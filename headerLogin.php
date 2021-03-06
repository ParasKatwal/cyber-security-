<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
<title>Home</title>
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 1024px)">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<script src="/js/app.js"></script>

<body>

<header>
  <nav id="sidebar">
    <ul>
      <li><a href="welcome.php">HOME</a></li>
      <li><a href="logapproach.php">OUR APPROACH</a></li>
      <li><a href="logbooking.php">BOOKING</a></li>
      <li><a href="loglocation.php">LOCATION</a></li>
      <li><a href="contact.php">LOG OUT</a></li>
    </ul>
  </nav>
  <div class="menu-toggle" onclick="toggleSlidebar()"><i class="fas fa-bars"></i></div>
</header>
<script src="app.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.menu-toggle').click(function(){
            $('nav').toggleClass('active')
        })
        $('ul li').click(function(){
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
        })
            $('a').click(function(){
			//alert("i am clicked");
			var selected = $(this);
			$('a').removeClass('active');
			$(selected).addClass('active');
		    });
    })
</script>

</body>