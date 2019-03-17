<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Data Praktikan Sistem Informasi 5</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Laboratorium Sistem Informasi 5</h1>
	</div>
</div>

<!---data---->
<div class="container">
	<div class="holiday" background="pink">
	<h3>Data Praktikan</h3>
<?php $sql = "SELECT * from datamhs ";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
				
					<img src="admin/pics/<?php echo htmlentities($result->image);?>" class="img-responsive" height="150" width="120"alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s" background="pink">
					<h4><?php echo htmlentities($result->nama);?></h4>
					<h5>NIM			: <?php echo htmlentities($result->nim);?></h5>
					<h5>TTL			: <?php echo htmlentities($result->ttl);?></h5>
					<h5>Hobi		: <?php echo htmlentities($result->hobi);?></h5>
					<h5>Alamat		: <?php echo htmlentities($result->alamat);?></h5>
					<h5>Cita-cita	: <?php echo htmlentities($result->cita);?></h5>
					<h5>Tinggi (cm)	: <?php echo htmlentities($result->tinggi);?></h5>
				</div>
				<div class="clearfix"></div>
			</div>
<?php }} ?>
<?php include('includes/footer.php');?>
</body>
</html>