<?php session_start(); 
$title = "THE CARS";
$headersrc = "./img/headers/header_cars.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>The Cars</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/cars.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src='js/cars.js'></script>	
</head>

<body>
<?php include("template/nav.php");  ?>
<div class="wrapper">
<?php
include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div class="side_nav">
			<ul>
				<li class="car_nav"><a id="2015" href="#main_content" class="car_nav_link current_car_link">The Current Car</a></li>
				<li class="car_nav"><span class="toggle_btn">2010s</span>
					<ul>
						<li><a id="2014" href="#main_content" class="car_nav_link">2014</a></li>
						<li><a id="2013" href="#main_content" class="car_nav_link">2013</a></li>
						<li><a id="2012" href="#main_content" class="car_nav_link">2012</a></li>
						<li><a id="2011" href="#main_content" class="car_nav_link">2011</a></li>
						<li><a id="2010" href="#main_content" class="car_nav_link">2010</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">2000s</span>
					<ul>
						<li><a id="2009" href="#main_content" class="car_nav_link">2009</a></li>
						<li><a id="2008" href="#main_content" class="car_nav_link">2008</a></li>
						<li><a id="2007" href="#main_content" class="car_nav_link">2007</a></li>
						<li><a id="2006" href="#main_content" class="car_nav_link">2006</a></li>
						<li><a id="2005" href="#main_content" class="car_nav_link">2005</a></li>
						<li><a id="2004" href="#main_content" class="car_nav_link">2004</a></li>
						<li><a id="2003" href="#main_content" class="car_nav_link">2003</a></li>
						<li><a id="2002" href="#main_content" class="car_nav_link">2002</a></li>
						<li><a id="2001" href="#main_content" class="car_nav_link">2001</a></li>
						<li><a id="2000" href="#main_content" class="car_nav_link">2000</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">1990s</span>
					<ul>
						<li><a id="1999" href="#main_content" class="car_nav_link">1999</a></li>
						<li><a id="1998" href="#main_content" class="car_nav_link">1998</a></li>
						<li><a id="1997" href="#main_content" class="car_nav_link">1997</a></li>
						<li><a id="1996" href="#main_content" class="car_nav_link">1996</a></li>
						<li><a id="1995" href="#main_content" class="car_nav_link">1995</a></li>
						<li><a id="1994" href="#main_content" class="car_nav_link">1994</a></li>
						<li><a id="1993" href="#main_content" class="car_nav_link">1993</a></li>
						<li><a id="1992" href="#main_content" class="car_nav_link">1992</a></li>
						<li><a id="1991" href="#main_content" class="car_nav_link">1991</a></li>
						<li><a id="1990" href="#main_content" class="car_nav_link">1990</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">1980s</span>
					<ul>
						<li><a id="1989" href="#main_content" class="car_nav_link">1989</a></li>
						<li><a id="1988" href="#main_content" class="car_nav_link">1988</a></li>
						<li><a id="1987" href="#main_content" class="car_nav_link">1987</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="main_content">
			<div class="car_item" id="2015_item">
				<h1>The Current Car: &nbsp;ARG15</h1>
				<p>This year, ARG15 will feature an improved aerodynamic package which will, by increasing downforce, create a large boost in performance. For better serviceability, ARG15 will return to a 3/4 carbon fiber monocoque last seen in ARG12. The steel subframe will allow for a much more easily accessible engine package, drastically decreasing the amount of time required for engine repairs, rebuilds, and swaps. A major rule change has prompted design changes in the engine flow system. This year, the turbo charger will be placed before the throttle, which will in turn produce large changes in the dynamics of ARG15's engine package. On a systems level, we are pushing our deadlines up in order to have more time available for testing and developing. This will ensure that we not only have the best designed car, but also the most optimized and reliable car. With a design philosophy focused on data driven decisions and reliability, we look forward to coming home from MIS this year with an unprecedented 10th world championship.</p>
				<img src="img/gallery/the_car/img1.jpg" alt="car img" class="car_item_img">
				<img src="img/gallery/the_car/img2.jpg" alt="car img" class="car_item_img">
				<h2>ARG15 SPECS</h2>
				<div class="car_item_left"> 
					<h3>GENERAL</h3>
					<ul>
						<li>Power: 95 hp</li>
						<li>Torque: 60ft·lbf</li>
						<li>Weight: 425 lbs</li>
						<li>Acceleration (0-60mph): 2.7 s</li>
						<li>Lateral acceleration: 1.8 g</li>
						<li>Top-speed: 100 mph</li>
					</ul>
					<h3>ENGINE</h3>
					<ul>
						<li>Turbocharged Honda CBR 600 RR, 2007-2008 model</li>
						<li>Capacity: 599 cc</li>
						<li>Borg Warner KP-35 Turbocharger with student-desgined turbine housing</li>
						<li>Engine control: MoTeC M400</li>
						<li>Launch and traction control</li>
					</ul>
				</div>
				<div class="car_item_right"> 
					<h3>CHASSIS</h3>
					<ul>
						<li>3/4 carbon fiber monocoque, steel subframe</li>
					</ul>
					<h3>SUSPENSION &amp; UNSPRUNG</h3>
					<ul>
						<li>Double A-arm suspension
						<li>Penkse 7800 double adjustable shocks with pushrods</li>
						<li>Tires: 6.0x10&quot; Hoosier racing slicks</li>
						<li>Brakes: custom brake disks, Willwood &amp; AP racing calipers</li>
						<li>Adjustable anti-roll bars</li>
					</ul>
					<h3>DRIVETRAIN</h3>
					<ul>
						<li>Chain drive</li>
						<li>Six-gear sequential pneumatic transmission</li>
						<li>Drexler limited-slip differential</li>
					</ul>
				</div>
			</div>
			<div class="car_item" id="2013_item">
				<h1>ARG13</h1>
				<p>ARG13 placed 6th overall at the annual FSAE Michigan competition this May! This is Cornell Racing's best competition placement since winning its ninth FSAE Michigan championship in 2005. Dominating the Acceleration track, ARG13 and driver Aleksi Lee easily claimed 1st place in the event with a time of 3.83 seconds - more than 0.2 seconds faster than the second place finisher. ARG13 placed 6th in the infamous Endurance Event, which only 40 of the 126 registered teams successfully finished. In the Design Event, Cornell Racing tied for 10th place and narrowly missed an invitation to the final design round. Our business strategy and marketing plan won 12th place, receiving praise for its advanced concept development and professional design. Boasting a final score of 756.5 points (out of a possible 1000 points), the Cornell Racing program proved that it is on track to bring home an unprecedented tenth FSAE Michigan title in 2014. </p>
				<p>ARG13 is the first full-carbon fiber monocoque car Cornell Racing has built. In an effort to achieve a target weight of 400 lb, most parts were redesigned and optimized – only the supplied engine, the differential, and the ECU remain the same. Our custom Cornell-designed turbine housing improved our flow system versatility and is lighter than the stock cast-iron one. Fitting the turbocharged CRB600RR engine inside the carbon fiber body resulted in very efficient packaging, and an overall smaller and lighter car.</p>
				<img src="img/gallery/history/arg13_1.jpg" alt="car img" class="car_item_img">
				<h2>ARG13 SPECS</h2>
				<div class="car_item_left"> 
					<h3>GENERAL</h3>
					<ul>
						<li>Power: 99 hp</li>
						<li>Torque: 60ft·lbf</li>
						<li>Weight: 411 lbs</li>
						<li>Acceleration (0-60mph): 2.7 s</li>
						<li>Lateral acceleration: 1.8 g</li>
						<li>Top-speed: 100 mph</li>
					</ul>
					<h3>ENGINE</h3>
					<ul>
						<li>Turbocharged Honda CBR 600 RR, 2007-2008 model</li>
						<li>Capacity: 599 cc</li>
						<li>Borg Warner KP-35 Turbocharger with student-desgined turbine housing</li>
						<li>Engine control: MoTeC M400</li>
						<li>Custom Dry sump lubrication</li>
						<li>Launch and traction control</li>
					</ul>
				</div>
				<div class="car_item_right"> 
					<h3>CHASSIS</h3>
					<ul>
						<li>Carbon fiber monocoque with steel rear frame</li>
					</ul>
					<h3>SUSPENSION &amp; UNSPRUNG</h3>
					<ul>
						<li>Double A-arm suspension
						<li>Penkse 7800 double adjustable shocks with pushrods</li>
						<li>Tires: 6.0x10'' Hoosier racing slicks</li>
						<li>Brakes: custom brake disks, ISR calipers</li>
						<li>Adjustable anti-roll bars</li>
					</ul>
					<h3>DRIVETRAIN</h3>
					<ul>
						<li>Chain drive</li>
						<li>Six-gear sequential pneumatic transmission</li>
						<li>Drexler limited-slip differential</li>
					</ul>
				</div>

			</div>
			<div class="car_item" id="2014_item">
				<h1>ARG14</h1>
				<p>ARG14 took the design successes from ARG13 and built upon them with a philosophy geared towards decreasing weight and maximizing performance. A strong, team-wide dedication to innovation and development led ARG14 to place 8th in the design portion of the MIS competition. ARG14 experienced a devastating catastrophic engine failure the day before the team left for the 2014 competition requiring the team to go through a herculean effort of a sub-24 hour engine swap. Unfortunately, without enough time to test and tune the new engine, ARG14 could not finish the endurance and autocross events due to an intake failure and an oil leak, respectively. However, even with engine issues, ARG14 was still able to achieve a commendable 16th place in the acceleration event, with a time of 4.459 seconds, and an impressive 11th place in the skidpad event with a best time of 5.098 seconds.</p>
				<p>ARG14 continued with a full carbon fiber monocoque design from ARG13, but by using similar chassis geometry we were able to optimize the carbon fiber lay-up schedule creating a lighter and stiffer chassis. An aerodynamics package was specially developed for the chassis for increased downforce and cornering capability. Our elite engine package was improved with more efficient cooling packages as well as a quick disconnect fuel system for better serviceability and compact packaging within the monocoque.</p>
				<img src="img/gallery/history/arg14_1.jpg" alt="car img" class="car_item_img">
				<h2>ARG14 SPECS</h2>
				<div class="car_item_left"> 
					<h3>GENERAL</h3>
					<ul>
						<li>Power: 100 hp</li>
						<li>Torque: 67ft·lbf</li>
						<li>Weight: 434 lbs</li>
						<li>Acceleration (0-60mph): 2.7 s</li>
						<li>Lateral acceleration: 1.8 g</li>
						<li>Top-speed: 100 mph</li>
					</ul>
					<h3>ENGINE</h3>
					<ul>
						<li>Turbocharged Honda CBR 600 RR, 2007-2008 model</li>
						<li>Capacity: 599 cc</li>
						<li>Borg Warner KP-35 Turbocharger with student-desgined turbine housing</li>
						<li>Engine control: MoTeC M400</li>
						<li>Custom Dry sump lubrication</li>
						<li>Launch and traction control</li>
						<li>Pneumatic shift system</li>
						<li>MoTeC ADL3 dash logger</li>
					</ul>
				</div>
				<div class="car_item_right"> 
					<h3>CHASSIS</h3>
					<ul>
						<li>Carbon fiber monocoque with steel rear frame</li>
					</ul>
					<h3>SUSPENSION &amp; UNSPRUNG</h3>
					<ul>
						<li>Double A-arm suspension
						<li>Penkse 7800 double adjustable shocks with pushrods</li>
						<li>Tires: 18x6-10 Hoosier R25B racing tires</li>
						<li>Brakes: custom brake disks, Willwood &amp; AP racing calipers</li>
						<li>Blade adjustable anti-roll bars</li>
						<li>65" wheelbase</li>
						<li>41/59 weight distribution </li>
					</ul>
					<h3>DRIVETRAIN</h3>
					<ul>
						<li>Chain drive</li>
						<li>Six-gear sequential pneumatic transmission</li>
						<li>Drexler limited-slip differential</li>
					</ul>
					<h3>AERODYNAMICS</h3>
					<ul>
						<li>3 element front and rear wings</li>
						<li>total downforce at 60mph = 330lb</li>
						<li>Adjustable angle of attack and flap angles</li>
					</ul>
				</div>
			</div>
			<div class="car_item" id="2013_item">
				<h1>ARG13</h1>
				<p>ARG13 placed 6th overall at the annual FSAE Michigan competition this May! This is Cornell Racing's best competition placement since winning its ninth FSAE Michigan championship in 2005. Dominating the Acceleration track, ARG13 and driver Aleksi Lee easily claimed 1st place in the event with a time of 3.83 seconds - more than 0.2 seconds faster than the second place finisher. ARG13 placed 6th in the infamous Endurance Event, which only 40 of the 126 registered teams successfully finished. In the Design Event, Cornell Racing tied for 10th place and narrowly missed an invitation to the final design round. Our business strategy and marketing plan won 12th place, receiving praise for its advanced concept development and professional design. Boasting a final score of 756.5 points (out of a possible 1000 points), the Cornell Racing program proved that it is on track to bring home an unprecedented tenth FSAE Michigan title in 2014. </p>
				<p>ARG13 is the first full-carbon fiber monocoque car Cornell Racing has built. In an effort to achieve a target weight of 400 lb, most parts were redesigned and optimized – only the supplied engine, the differential, and the ECU remain the same. Our custom Cornell-designed turbine housing improved our flow system versatility and is lighter than the stock cast-iron one. Fitting the turbocharged CRB600RR engine inside the carbon fiber body resulted in very efficient packaging, and an overall smaller and lighter car.</p>
				<img src="img/gallery/history/arg13_1.jpg" alt="car img" class="car_item_img">
				<h2>ARG13 SPECS</h2>
				<div class="car_item_left"> 
					<h3>GENERAL</h3>
					<ul>
						<li>Power: 99 hp</li>
						<li>Torque: 60ft·lbf</li>
						<li>Weight: 411 lbs</li>
						<li>Acceleration (0-60mph): 2.7 s</li>
						<li>Lateral acceleration: 1.8 g</li>
						<li>Top-speed: 100 mph</li>
					</ul>
					<h3>ENGINE</h3>
					<ul>
						<li>Turbocharged Honda CBR 600 RR, 2007-2008 model</li>
						<li>Capacity: 599 cc</li>
						<li>Borg Warner KP-35 Turbocharger with student-desgined turbine housing</li>
						<li>Engine control: MoTeC M400</li>
						<li>Custom Dry sump lubrication</li>
						<li>Launch and traction control</li>
					</ul>
				</div>
				<div class="car_item_right"> 
					<h3>CHASSIS</h3>
					<ul>
						<li>Carbon fiber monocoque with steel rear frame</li>
					</ul>
					<h3>SUSPENSION &amp; UNSPRUNG</h3>
					<ul>
						<li>Double A-arm suspension
						<li>Penkse 7800 double adjustable shocks with pushrods</li>
						<li>Tires: 6.0x10'' Hoosier racing slicks</li>
						<li>Brakes: custom brake disks, ISR calipers</li>
						<li>Adjustable anti-roll bars</li>
					</ul>
					<h3>DRIVETRAIN</h3>
					<ul>
						<li>Chain drive</li>
						<li>Six-gear sequential pneumatic transmission</li>
						<li>Drexler limited-slip differential</li>
					</ul>
				</div>
			</div>
			<div class="car_item" id="2012_item">
				<h1>ARG12</h1>
				<p>ARG12 was the result of several major redesigns, realized in a carbon fiber monocoque and steel subframe which housed the new, MoTeC controlled, turbocharged CBR600RR. In an effort to reduce weight, the entire unsprung assembly was miniaturized around 10" wheels; this, in addition to various other optimizations, brought the car down to 455 lb at weigh-in in Michigan - 50 lb less than its predecessor.</p>
				<img src="img/gallery/history/arg12_1.jpg" alt="car img" class="car_item_img"><br>
				<img src="img/gallery/history/arg12_2.jpg" alt="car img" class="car_item_img">
				<h2>ARG12 SPECS</h2>
				<div class="car_item_left"> 
					<h3>GENERAL</h3>
					<ul>
						<li>Power: 90 hp</li>
						<li>Torque: 55ft·lbf</li>
						<li>Weight: 455 lbs</li>
						<li>Acceleration (0-60mph): 3.5 s</li>
						<li>Lateral acceleration: 1.7 g</li>
						<li>Top-speed: 90 mph</li>
					</ul>
					<h3>ENGINE</h3>
					<ul>
						<li>Turbocharged Honda CBR 600 RR, 2007-2008 model</li>
						<li>Capacity: 599 cc</li>
						<li>Borg Warner KP-35 Turbocharger with student-desgined turbine housing</li>
						<li>Engine control: MoTeC M400</li>
						<li>Dry sump lubrication</li>
					</ul>
				</div>
				<div class="car_item_right"> 
					<h3>CHASSIS</h3>
					<ul>
						<li>Single-piece carbon fiber monocoque</li>
					</ul>
					<h3>SUSPENSION &amp; UNSPRUNG</h3>
					<ul>
						<li>Double A-arm suspension
						<li>Penkse 7800 double adjustable shocks with pushrods</li>
						<li>Tires: 6.0x10&quot; Hoosier racing slicks</li>
						<li>Brakes: custom brake disks, Willwood &amp; AP racing calipers</li>
						<li>Adjustable anti-roll bars</li>
					</ul>
					<h3>DRIVETRAIN</h3>
					<ul>
						<li>Chain drive</li>
						<li>Six-gear sequential pneumatic transmission</li>
						<li>Drexler limited-slip differential</li>
					</ul>
				</div>
			</div>
			<div class="car_item" id="2011_item">
				<h1>ARG11</h1>
				<p>ARG11 was a huge advancement on the previous generations due to refinements made to the suspension geometry and team-manufactured carbon fiber monocoque. In addition, modifications were made to the carbon fiber wheels and dry sump lubrication system. New additions were made to the car including a dynamically controlled electronic waste gate and a student-developed digital engine readout. In an ever competitive field, ARG11 was able to take first place in acceleration at FSAE Michigan. At Hockenheim Raceway this past summer, Cornell Racing and ARG11 had a great first experience in Germany. ARG11 was able to take 4th in acceleration and 7th in autocross in an extremely competitive field of European teams. The Toronto Shootout was also another challenging event due to the cold weather and overall lack of grip on the track; however, as the weather warmed up, ARG11 was able to recover and put in consistently improving times for the rest of the day.</p>
				<img src="img/gallery/history/arg11_1.jpg" alt="car img" class="car_item_img"><br>
			</div>
			<div class="car_item" id="2010_item">
				<h1>ARG10</h1>
				<p>ARG10 marked a significant departure from previous years with the introduction of our first ever carbon fiber monocoque. Producing this part was no mean feat, and over 3000 hours were invested into the monocoque alone. Changing from a steel space frame to a monocoque, as well as implementing carbon fiber wheels, led to a significant drop in weight for the car. Additionally, advancements with the semi-active differentials and a custom dry sump pump increased reliability of the design. Due to these advancements, Cornell Racing placed fourth in the design event, fifth in acceleration, and ninth overall.</p>
				<img src="img/gallery/history/arg10_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2009_item">
				<h1>ARG09</h1>
				<p>Coming off a 7th place finish in 2008, the team decided to apply some serious design changes to the 2009 car, ARG09, to improve performance and driveability. The most noticeable change was the first iteration of the semi-active differential, powered by the Cornell-designed and manufactured dry sump oil pump. A billet aluminum pedal bay with custom master cylinders reduced weight significantly. The engine package gained further boost control and a finely tuned package with the implementation of an external wastegate and hundreds of hours of testing. The team ran into trouble at Michigan with a seal failure in the braking system that prevented us from competing in the first few events, ultimately taking us out of contention. A large portion of the team stayed at Cornell over the summer to begin designing ARG10 and repair ARG09 after the brake failure at Michigan. Their efforts paid off with a 4th place finish in an extremely competitive field of teams at the 2009 Toronto Shootout.</p>
				<img src="img/gallery/history/arg09_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2008_item">
				<h1>ARG08</h1>
				<p>The team engineered the 2008 car, ARG08, with an emphasis on reducing weight and lowering the center of gravity as well as keeping in mind its previous goals of achieving refined operation and reliable functionality. With weight reduction as a driving force, the team’s composites manufacturing program was expanded to include a carbon fiber intake manifold, seat, muffler, suspension links, and steering wheel. Additionally, optimized design allowed for weight reduction in components such as the hubs, uprights, and CVs. Our already stressed engine was further integrated into the chassis by utilizing its upper mounts as suspension points. In order to achieve a lower center of gravity, the driver was reclined while still maintaining drivability for all team members, the fuel tank was placed under the seat, and the radiator was mounted horizontally. These important design considerations forced team members to be especially creative while pushing their engineering knowledge beyond conventional classroom learning. These efforts resulted in a seventh place overall finish out of 130 schools from around the world at the FSAE International Championship hosted at the Michigan International Speedway.</p>
				<img src="img/gallery/history/arg08_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2007_item">
				<h1>ARG07</h1>
				<p>With enhanced suspension geometry and a better integrated engine design, ARG07 carried the team to victory at the University of Toronto Shootout. Michigan brought its share of challenges for the team, but this allowed for easy observation of the critical areas that must be improved for a winning car. Cornell Racing is looking forward to applying its new design knowledge to the car for 2008, and taking it all the way to a win at Michigan International Speedway.</p>
				<img src="img/gallery/history/arg07_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2006_item">
				<h1>ARG06</h1>
				<p>For the 4th time in FSAE history the “three-peat” has eluded the team once again. The team completed a massive redesign of the entire car which included the elimination of the rear engine bay and the shortening of the rear track to create ARG06. Cornell unfortunately was unable to finish the endurance event of the competition due to possible air bubbles in the cooling lines, which resulted in a massive cooling failure during the event. While this was very disappointing, the team was given two hours to rebuild the engine and participate in the Road and Track Magazine invitation only event. Miraculously the engine was rebuilt just in time, and ARG06 started on the first try. Cornell Racing left the competition in its tracks, and gave other teams something to think about for the 2007 competition.</p>
				<img src="img/gallery/history/arg06_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2005_item">
				<h1>ARG05</h1>
				<p>For the second straight year Cornell Racing won the FSAE Foundation Cup marking the team’s 9th victory. With an astounding score of 906 points out of a possible 1000, and a perfect 350 point endurance run, Cornell was able to edge off its opponents by 38 points. This year, the team has its 4th opportunity in its 19 year history to win its first ever “three-peat”. With the amount of time and energy the team has put into research and testing of ARG05 the Cornell Racing team is more confident than ever that they will be solidly in the running to win the 2006 competition.</p>
				<img src="img/gallery/history/arg05_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2004_item">
				<h1>ARG04</h1>
				<p>World Champions Again! The 2004 team started with a hunger and thirst to win, having narrowly missed the seemingly unachievable "three-peat" in 2003. Part of the cars success was extensive road testing. For the first time ever, the Pyramid Mall graciously sponsored the team with driving access in their parking lots, greatly enhancing the team’s testing capabilities. By spring break ARG04 had logged over 130 hours of testing. Another achievement worth mentioning was the culmination of a 3 year project finally put into affect. After years of brainstorming and experimentation, Cornell Racing ran the first-ever electronically controlled turbocharger wastegate. Despite chaotic weather conditions in Pontiac, Michigan the team was confident, relaxed, and walked away with another World Championship.</p>
				<img src="img/gallery/history/arg04_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2003_item">
				<h1>ARG03</h1>
				<p>An extraordinary amount of time and effort was placed into this car. The team’s dedication and commitment was demonstrated when the 2003 car crashed during road testing days before competition. Working tirelessly around the clock, repairs were made in time for competition. Yet despite enormous setbacks, Cornell Racing managed to come away from competition with a noteworthy 9th place overall finish.</p>
				<img src="img/gallery/history/arg03_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2002_item">
				<h1>ARG02</h1>
				<p>In 2002, the Cornell Racing team returned to competition with a strong design, well-tested car, and walked away from the competition as seven time World Champions. New additions to the ARG02 car included a redesigned frame, adjustable pedal bay, new custom modified Tanner Shocks, a hydraulic clutch, and a newly built electronic control module.</p>
				<img src="img/gallery/history/arg02_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2001_item">
				<h1>ARG01</h1>
				<p>In 2002, the Cornell Racing team returned to competition with a strong design, well-tested car, and walked away from the competition as seven time World Champions. New additions to the ARG02 car included a redesigned frame, adjustable pedal bay, new custom modified Tanner Shocks, a hydraulic clutch, and a newly built electronic control module.</p>
				<img src="img/gallery/history/arg01_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="2000_item">
				<h1>ARG00</h1>
				<p>The 2000 car began with the consolidation of the best aspects of the previous 3 cars. The 2000 car, ARG00, was a very well packaged design that was undoubtedly the most attractive car at the competition. Cornell successfully defended their acceleration title with an even more dominant power plant. Cornell Racing was also awarded with the best engine management system at the competition. The Cornell team overcame an early crash in warm-up to win a 4th place finish in Autocross, only to have championship hopes dashed by a rear brake failure during the endurance race. Cornell finished 13th out of over 100 teams at the competition.</p>
				<img src="img/gallery/history/arg00_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1999_item">
				<h1>ARG99</h1>
				<p>Sticking with Cornell FSAE tradition, the 1999 car boasted many innovations. Traction control, an automated shifting mechanism, extensive shock development, a very stiff and light chassis, and in-house designed brake calipers all contributed to the success of ARG99. The engine package included a fiberglass intake manifold that contributed to Cornell winning the Powertrain award, in addition to helping Cornell soar to victory in the acceleration event. Lack of development	time after the final construction of the car made the competition very hectic for the Cornell engineers, but the team worked together and finished third overall out of over 100 teams, placing extremely well in almost every event.</p>
				<img src="img/gallery/history/arg99_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1998_item">
				<h1>ARG98</h1>
				<p>The 1998 car was a design evolution of the successful 1997 car. Weight savings and a lower center of gravity were the primary goals for the car. To achieve this, the team moved to smaller shocks normally used on mountain bikes, lightweight aluminum differential housing, a lowered one-piece frame with stressed aluminum skins, an aluminum steering rack, hollow driveshafts, hollow steel box uprights, and crushable side and front sections of ARG98. These efforts netted a car that was 25 pounds lighter than the previous car. Cornell repeated as champions, winning every event except acceleration and cost, and scoring 924.62 points out of 1000, the most ever scored in the history of FSAE.</p>
				<img src="img/gallery/history/arg98_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1997_item">
				<h1>ARG97</h1>
				<p>The 1997 season saw many changes to the tried and true Cornell design. The team integrated a new, button-actuated shifter, M-85 was used instead of gasoline, and the team developed new engine electronics to ease this transition. In addition, the team drastically stiffened the frame. This in combination with a new inboard suspension made an excellent handling car, ARG97. Broader use of composites in the body gave the car more safety, with crushable impact zones integrated into the side pods as well as in the nose of the car. This allowed the team to concentrate on tuning the new suspension to achieve the best possible handling characteristics. These changes paid off, as Cornell edged out its competitors to take the 1997 FSAE Championship.</p>
				<img src="img/gallery/history/arg97_1.jpg" alt="car img" class="car_item_img"><br>
				<img src="img/gallery/history/arg97_2.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1996_item">
				<h1>ARG96</h1>
				<p>1996 marked the introduction of an integrated clutch/shifter pedal shifting system. Competition in 1996 was unlike anything ever seen. It was described by many as fierce, and famous. Racing engineer Carroll Smith was quoted as saying, "some of the cars were fabricated as well as any new racing cars that I've seen at any level of competition." Lower end torque was added to the engine package, resulting in a car that was easier to drive. The aerodynamics package was refined to create 100lbs of down force at a mere 60mph. Among rapidly progressing competitors, Cornell finished 4th overall with a 1st place in safety and crashworthiness with ARG96.</p>
				<img src="img/gallery/history/arg96_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1995_item">
				<h1>ARG95</h1>
				<p>The 1995 team continued the innovative spirit of 1994 with several enhancements, including a carbon fiber stressed skin frame, a pneumatic paddle shifter, front and rear wings and a 10% gain in horsepower. In one of the closest competitions in FSAE history, Cornell finished third with ARG95, a mere 15 points out of first place.</p>
				<img src="img/gallery/history/arg95_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1994_item">
				<h1>ARG94</h1>
				<p>1994 was a year of transition as the team experimented with a broader use of composites. The proven tube frame was restructured to incorporate two composite side pods. Made out of foam, Kevlar, and carbon fiber, these D-tubes provided structural support and stiffness, while offering the driver added side impact protection for ARG94. Composites were also used in the design and manufacture of an intake manifold that increased the engine's performance by 4 bhp. Due to a restricted budget, many parts had to be scavenged from the 1993 car. Cornell maintained its excellence as one of the best cars in the FSAE competition, taking third place overall.</p>
				<img src="img/gallery/history/arg94_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1993_item">
				<h1>ARG93</h1>
				<p>In 1993, fuel injection was added to the car. This system consisted of electronic spark control and central port injection designed and built by the team. The power output of the car was increased by roughly 20%. Other changes included an original mono-shock design, a larger turbocharger, and a composite front crushable zone. Once again, Cornell fully dominated the competition taking first overall with ARG93. Top honors were won in categories like: Spirit of Excellence, Best Engineering Design, Best Performance Award, and Best Prototype Fabrication.</p>
				<img src="img/gallery/history/arg93_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1992_item">
				<h1>ARG92</h1>
				<p>The past two years taught the 1992 team that if it wanted to win, it had to finish the car well before the competition and develop the car in the spring months. When February 1 rolled around, the new car, ARG92, was driven for the first time. New innovations included turbocharging, a simpler suspension, a fully modular frame, and increased weight savings. The car was tested extensively throughout the spring and by April the car's performance was impressive and consistently reliable. Cornell dominated the 1992 competition winning the endurance race, the autocross, the skid pad event, and the overall static events to place first overall.</p>
				<img src="img/gallery/history/arg92_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1991_item">
				<h1>ARG91</h1>
				<p>The team started the 1991 season hoping to expand and develop new ideas. It was planned to turbocharge the "sucker" car for added horsepower. However, just as the research began, FSAE stated that cars with active ground effects would not be permitted at the competition due to safety concerns. The car had to be completely redesigned. Since the modifications were so extensive, it was called the 1991A car. A second car was also built with innovations such as a bigger supercharger and a stressed engine. The stressed engine was a first for any FSAE racecar. It allowed many frame tubes to be omitted without sacrificing strength. Lack of testing caused reliability problems and the 1991B car placed twenty-fifth overall while the 1991A car placed thirteenth.</p>
				<img src="img/gallery/history/arg91_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1990_item">
				<h1>ARG90</h1>
				<p>1990 was a notable year of innovation for Cornell. The car, ARG90, was designed with active ground effects, meaning that a fan evacuated air from underneath the car to create downforce for better handling. Unfortunately, the car had not been finished in time to be fully developed. Despite this shortcoming, the car finished fifth overall from a growing field of about 45 cars.</p>
				<img src="img/gallery/history/arg90_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1989_item">
				<h1>ARG89</h1>
				<p>With substantially more funding, on-campus recognition, and student participation, the 1989 team took up the challenge of entering two cars in the next competition. A new and improved car was designed and built while the winning car from the previous year was slightly modified and further developed. However, Cornell's competition was also progressing rapidly and new innovations such as monocoque frames, fuel injection, turbocharging, and composite materials were seen at the 1989 competition. Cornell's best effort was awarded with a respectable third place overall finish.</p>
				<img src="img/gallery/history/arg89_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1988_item">
				<h1>ARG88</h1>
				<p>An all-new car was designed and built by the 1988 team to be lighter, more powerful, and more agile than the 1987 machine. With only one year of racing experience, the Cornell team surpassed every other team to win the 1988 competition - its first World Championship at the FSAE Design Competition in Michigan.</p>
				<img src="img/gallery/history/arg88_1.jpg" alt="car img" class="car_item_img">
			</div>
			<div class="car_item" id="1987_item">
				<h1>ARG97</h1>
				<p>The FSAE Racing Team at Cornell was born in 1986. Professor Albert R. George became the faculty advisor and about a dozen mechanical engineering students hit the books and designed a racing car from scratch. In 1987, the first race car, ARG87, was completed, developed, and raced. The team took an impressive third place finish out of approximately thirty cars that had entered the competition that year. Cornell was awarded Rookie of the Year honors and gained the confidence and respect needed to charge into the next season.</p>
				<img src="img/gallery/history/arg87_1.jpg" alt="car img" class="car_item_img">
			</div>

		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
