<?php
	date_default_timezone_set('Europe/Copenhagen');
	
	$override = false;
	
	if( $_GET["override"]!=null )
	{
		$override = true;
	}
	
	$now = time();

	$wod1ReleaseTime = mktime(  9, 15, 0, 6, 22, 2013);
	$wod2ReleaseTime = mktime( 11, 15, 0, 6, 22, 2013);
	$wod3ReleaseTime = mktime( 13, 30, 0, 6, 22, 2013);
	$wod4ReleaseTime = mktime( 15, 10, 0, 6, 22, 2013);
	$wod5ReleaseTime = mktime( 17, 30, 0, 6, 22, 2013);
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
                    <h3>WOD 1a - Sand</h3>
<?php
	if( $override || $now >= $wod1ReleaseTime )
	{
?>
					<h4>Længdespring</h4>
					<p>2 min. pr. team.</p>
                    <p>Længste spring pr. person tæller</p>
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
                    <h3>WOD 1b - Pind</h3>
<?php
	if( $override || $now >= $wod1ReleaseTime )
	{
?>
					<h4>Stafet</h4>
                    <p>400-800-400-400 m.</p>
                    <p>Hele teamet skal involveres.</p>
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
                    <h3>WOD 2 - CF Total</h3>
<?php
	if( $override || $now >= $wod2ReleaseTime )
	{
?>
                    <p>Find 1RM</p>
                    <p>
                        7 min Back squat<br />
                        7 min Shoulder Press<br />
                        7 min Deadlift
                    </p>
                    <p>Vægten må ikke reduceres undervejs.</p>
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
                    <h3>WOD 3 - Three well-known WOD's</h3>
<?php
	if( $override || $now >= $wod3ReleaseTime )
	{
?>
                    <p>
                        Timecap: 15 minutter
                    </p>
                    <h4>Person 1: mini – King Kong</h4>
                    <p>
                        3 runder:<br />
                        1 Deadlift<br />
                        2 Muscle Ups<br />
                        3 Squat cleans<br />
                        4 HSPU
                    </p>
                    <h4>Person 2: mini – Cindy</h4>
                    <p>
                        5 runder:<br />
                        5 Pullups<br />
                        10 Handrelease Pushups<br />
                        15 Squats
                    </p>
                    <h4>Person 3: mini-Annie</h4>
                    <p>
                        50-30-10<br />
                        Double unders<br />
                        Situps (knee)
                    </p>
                    <p>
                        En atlet pr. workout<br />
                        En atlet arbejder af gangen i angivet rækkefølge
                    </p>
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
                    <h3>WOD 4 - Barbell and bells</h3>
<?php
	if( $override || $now >= $wod4ReleaseTime )
	{
?>
                    <p>
                        Timecap: 25 minutter
                    </p>
                    <p>
                        En af gangen, udfører hver person:<br />
                        12 Power Clean
                    </p>
                    <p>
                        150 KB swing total
                    </p>
                    <p>
                        En af gangen, udfører hver person:<br />
                        9 OH Squat
                    </p>
                    <p>
                        150 goblet squats total
                    </p>
                    <p>
                        En af gangen, udfører hver person:<br />
                        6 Shoulder to overhead
                    </p>
                    <p>
                        150 KB snatch total
                    </p>
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
                    <h3>WOD 5 - A kind of filthy (Do not drop the baby)</h3>
<?php
	if( $override || $now >= $wod5ReleaseTime )
	{
?>
                    <p>
                        50 Box jump, 24 inch box<br />
                        50 Pull-ups<br />
                        50 Kettlebell swings, 1.5 pood<br />
                        50 Toes to Bar<br />
                        50 Shoulder to Overhead<br />
                        50 Backsquat<br />
                        50 Wall ball shots, 20 pound ball<br />
                        50 Burpees (over the bar)<br />
                        50 Double unders<br />
                        50 steps walking lunges
                    </p>
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
