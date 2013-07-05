<?php
	date_default_timezone_set('Europe/Copenhagen');
	
	$override = false;
	
	if( $_GET["override"]!=null )
	{
		$override = true;
	}
	
	$now = time();

	$wod1ReleaseTime = mktime(  9, 15, 0, 7, 6, 2013);
	$wod2ReleaseTime = mktime( 11, 15, 0, 7, 6, 2013);
	$wod3ReleaseTime = mktime( 13, 30, 0, 7, 6, 2013);
	$wod4ReleaseTime = mktime( 15, 10, 0, 7, 6, 2013);
	$wod5ReleaseTime = mktime( 17, 30, 0, 7, 6, 2013);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>BOXCUP INVITATIONAL - Vest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Content/jquery.mobile-1.3.1.min.css" />
    <script src="Scripts/jquery-1.6.4.min.js"></script>
    <script src="Scripts/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>
    <div data-role="page" data-theme="a">
        <div data-role="header">
            <h2>BOXCUP</h2>
            <h2>Vest</h2>
        </div>
        <div data-role="content" data-theme="a">
            <div data-role="collapsible-set" data-inset="false">
                <div data-role="collapsible">
                    <h3>WOD 1</h3>
<?php
	if( $override || $now >= $wod1ReleaseTime )
	{
?>
<?php
	}
	else
	{
?>
					<p>Workout ikke annonceret endnu!</p>
<?php
	}
?>
                </div>
                <div data-role="collapsible">
                    <h3>WOD 2</h3>
<?php
	if( $override || $now >= $wod2ReleaseTime )
	{
?>
<?php
	}
	else
	{
?>
					<p>Workout ikke annonceret endnu!</p>
<?php
	}
?>
                </div>
                <div data-role="collapsible">
                    <h3>WOD 3</h3>
<?php
	if( $override || $now >= $wod3ReleaseTime )
	{
?>
<?php
	}
	else
	{
?>
					<p>Workout ikke annonceret endnu!</p>
<?php
	}
?>
                </div>
                <div data-role="collapsible">
                    <h3>WOD 4</h3>
<?php
	if( $override || $now >= $wod4ReleaseTime )
	{
?>
<?php
	}
	else
	{
?>
					<p>Workout ikke annonceret endnu!</p>
<?php
	}
?>
                </div>
                <div data-role="collapsible">
                    <h3>WOD 5</h3>
<?php
	if( $override || $now >= $wod5ReleaseTime )
	{
?>
<?php
	}
	else
	{
?>
					<p>Workout ikke annonceret endnu!</p>
<?php
	}
?>
                </div>
            </div>
        </div>
        <div data-role="footer">
            <h2>Hovedsponsorer:</h2>
            <h2>MedicSport og Pendlay</h2>
        </div>
    </div>
</body>
</html>
