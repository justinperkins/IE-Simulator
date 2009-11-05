<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>IE simulator</title>
	<style type="text/css">
	  body{
	    background:#fff;
	    font-family:Helvetica, Arial, sans-serif;
	    color:#666;
	  }
	</style>
</head>

<body>
  <h1>Need to test something in IE but don't have Windows available?</h1>
  <h2>Use the IE Simulator!</h2>
  <form action="simulator.php" method="get">
    <h3>Enter a URL to view in the IE simulator: 
      <input type="text" value="<?php echo $_GET['url']; ?>" name="url" />
      <input type="submit" value="View" />
    </h3>
  </form>

</body>
</html>
