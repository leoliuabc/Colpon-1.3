<?php
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>404 - Page not found</title>
  <link rel="stylesheet" href="/css/404.css" type="text/css" media="screen" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
  <div id="checkurl">
    <span>pshh, check here</span>
  </div>
  <div id="oops">
    <span>Oops, the pixels you're looking for do not exist o_O</span>
  </div>
  <div id="asiance">
    <a href="{{ url('/') }}"><span>...or go back to Asiance</span></a>
  </div>
</body>
</html>
