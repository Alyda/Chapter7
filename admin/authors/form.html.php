<?php include_once $_SERVER['DOCUMENT_ROOT'] .
	'/chapter7/includes/helpers.inc.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php htmlout($pagetitle); ?></title>

	<meta http-equiv="content-type"
	content="text/html; charset=utf-8"/>

</head>
<body>

<h1>
<?php htmlout($pagetitle); ?>
</h1>


<form action="?<?php htmlout($action); ?>" method="post">

<div>
	<label for="name">Name: <input type="text" 
	name="name"
 id="name" value="<?php htmlout($name); ?>"/>
	</label>

</div>

<div>
	<label for="email">Email: <input type="text" name="email"

	id="email" value="<?php htmlout($email); ?>"/>
	</label>

</div>

<div>

	<input type="hidden" name="id" value="<?php htmlout($id); ?>"/>
	
	<input type="submit" value="<?php htmlout($button); ?>"/>
</div>

</form>


</body>

</html>
