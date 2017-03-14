<?php 
session_start(); 
$_SESSION['pagename'] = "wellness_index";
include 'db.php'; include 'error.php'; 
include 'pushhits.php';

?> 

<html><head><title>  Wellness Wheel Quiz </title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}

.name{
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: #000000;
}


.phy{
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: #FF0000;
}

.soc {
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: #00CC33;
}

.car {
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color:#FF00CC;
}

.spi {
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: #660099
}

.env {
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: 006600;
}

.fin {
	font-family:"Arial","sans-serif";
font-size:14px;
background-color:#ffffff;
color: #FF8C00;
}

.emo {
	font-family:"Arial","sans-serif";
	font-size:14px;
background-color:#ffffff;
color: #0000FF;
}




#graphdata{
font-family: arial, san-serif;
font-size:14px;
color:#000000;
position:absolute;
top: 0px;
left: 0px;
width: 300;


}




#data{
font-family: arial, san-serif;
font-size:14px;
color:#996633;
position:absolute;
top: 40px;
left: 350px;
}

#contents {
	font-family:"Arial","sans-serif";
font-size:14px;
color:#724000;
background-color: #ffffff;
background-color: #ffffff;
position:absolute;
vertical-align: left;
border-color:#ffffff;
border-style:solid;
border-width:20px;
top: 320px;
left:10px;
z-index:0;

}


a{
font-family:"Arial","sans-serif";
font-size:14px;
font-size:1em;
color: #ffb300;
background-color: #1b3930;
text-decoration:none;
border-color: #ffffff;
border-style:solid;
border-width:2px 1px 2px 1px; 

}

a.hover {
font-family: arial, san-serif;
font-size:14px;
font-size:1em;
color: #1b3930;
background-color: #ffb300;
text-decoration:none;
border-color: #1b3930;
border-style:solid;
border-width:2px 1px 2px 1px; 
}

</style>


</head>

<body>

<div id = "data">		
	
<hr />
Each question has a key word that will result in a score with a denominator of 4.<br />
Each catagory has three questions that will result in a total score that will be an indicator of your wellness.

<hr />
 <div class = "name">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#000000" />
 </svg>

<?php  
if(empty($_POST['name'])){  $name_input = "First Name";  } 
	else {	$name_input = 	$_POST['name'];	}
	
if(empty($_POST['number'])){  $number_input = " Number ";  } 
	else {	$number_input = 	$_POST['number'];	}
	echo "$name_input : $number_input<br /> ";
?>
</div>
<hr />
<!-- physical -->
<div class = "phy">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#ff0000" />
 </svg>
<?php
//Physical sleep ,  ************************************
echo "&nbsp;Physical:Sleep = " ;
if(empty($_POST['sleep'])){  echo "0  "; $sleep_score = 0;  } 
	if(!empty($_POST['sleep'])) {
		foreach($_POST['sleep'] as $check) {
			if ($check == "All") {$sleep_score = 4;}
			if ($check == "Most") {$sleep_score = 3;}
			if ($check == "Often") {$sleep_score = 2;}
			if ($check == "Sometimes") {$sleep_score = 1;}
			if ($check == "Never") {$sleep_score = 0;}
			echo "$sleep_score   ";
		}
	}
//Physical  activity  ************************************
echo " Activity = " ;
if(empty($_POST['activity'])){  echo "0  "; $activity_score = 0;} 
	if(!empty($_POST['activity'])) {
		foreach($_POST['activity'] as $check) {
			if ($check == "All") {$activity_score = 4;}
			if ($check == "Most") {$activity_score = 3;}
			if ($check == "Often") {$activity_score = 2;}
			if ($check == "Sometimes") {$activity_score = 1;}
			if ($check == "Never") {$activity_score = 0;}
			echo "$activity_score   ";
		}
	}
//Physical   nutrition ************************************
echo "Nutrition = " ;
if(empty($_POST['nutrition'])){  echo "0  "; $nutrition_score = 0;  } 
	if(!empty($_POST['nutrition'])) {
		foreach($_POST['nutrition'] as $check) {
			if ($check == "All") {$nutrition_score = 4;}
			if ($check == "Most") {$nutrition_score = 3;}
			if ($check == "Often") {$nutrition_score = 2;}
			if ($check == "Sometimes") {$nutrition_score = 1;}
			if ($check == "Never") {$nutrition_score = 0;}
			echo "$nutrition_score   ";
		}
	}//end  nutrition physcial
	$physcial_total = $sleep_score + $activity_score + $nutrition_score;
	$x1 = 130+  (cos(2.47)*($physcial_total*10));
	$y1 = 130 - (sin(2.47)*($physcial_total*10));
	echo " Physcial Score = $physcial_total /12";


?>
</div><!-- end physical --!>

<!-- emotional -->
<div class = "emo">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#0000ff" />
 </svg>
<?php	
//Emotional: help
	echo "&nbsp;Emotional:Help = " ;
if(empty($_POST['help'])){  echo "0  "; $help_score = 0;  } 
	if(!empty($_POST['help'])) {
		foreach($_POST['help'] as $check) {
			if ($check == "All") {$help_score = 4;}
			if ($check == "Most") {$help_score = 3;}
			if ($check == "Often") {$help_score = 2;}
			if ($check == "Sometimes") {$help_score = 1;}
			if ($check == "Never") {$help_score = 0;}
			echo "$help_score   ";
		}
	}//end plan
//Emotional: exploration
echo "Exploration = ";
if(empty($_POST['exploration'])){  echo "0  "; $exploration_score = 0;  } 
	if(!empty($_POST['exploration'])) {
		foreach($_POST['exploration'] as $check) {
			if ($check == "All") {$exploration_score = 4;}
			if ($check == "Most") {$exploration_score = 3;}
			if ($check == "Often") {$exploration_score = 2;}
			if ($check == "Sometimes") {$exploration_score = 1;}
			if ($check == "Never") {$exploration_score = 0;}
			echo "$exploration_score   ";
		}
	}//end exploration

//Emotional: stressors
echo "Stressors = " ;
if(empty($_POST['stressors'])){  echo "0  "; $stressors_score = 0;  } 
	if(!empty($_POST['stressors'])) {
		foreach($_POST['stressors'] as $check) {
			if ($check == "All") {$stressors_score = 4;}
			if ($check == "Most") {$stressors_score = 3;}
			if ($check == "Often") {$stressors_score = 2;}
			if ($check == "Sometimes") {$stressors_score = 1;}
			if ($check == "Never") {$stressors_score = 0;}
			echo "$stressors_score   ";
		}
	}//end stressors
$emotional_total = $help_score + $exploration_score + $stressors_score;
$x7 = 130 +  (cos(1.57)*($emotional_total*10));
	$y7 = 130 - (sin(1.57)*($emotional_total*10));
		echo " Emotional Score = $emotional_total /12";
?>

</div> <!-- end emotional  -->
<!-- financial -->
<div class = "fin">
	<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#ff8c00" />
 </svg>
<?php	
// Financial: goals, means and budget
	echo "&nbsp;Financial:Goals = " ;
if(empty($_POST['goals'])){  echo "0  "; $goals_score = 0;  } 
	if(!empty($_POST['goals'])) {
		foreach($_POST['goals'] as $check) {
			if ($check == "All") {$goals_score = 4;}
			if ($check == "Most") {$goals_score = 3;}
			if ($check == "Often") {$goals_score = 2;}
			if ($check == "Sometimes") {$goals_score = 1;}
			if ($check == "Never") {$goals_score = 0;}
			echo "$goals_score   ";
		}
	}//end plan
// Financial: means
echo "Means = " ;
if(empty($_POST['means'])){  echo "0  "; $means_score = 0;  } 
	if(!empty($_POST['means'])) {
		foreach($_POST['means'] as $check) {
			if ($check == "All") {$means_score = 4;}
			if ($check == "Most") {$means_score = 3;}
			if ($check == "Often") {$means_score = 2;}
			if ($check == "Sometimes") {$means_score = 1;}
			if ($check == "Never") {$means_score = 0;}
			echo "$means_score   ";
		}
	}//end work

// Financial:Budget
echo "Budget = " ;
if(empty($_POST['budget'])){  echo "0  "; $budget_score = 0;  } 
	if(!empty($_POST['budget'])) {
		foreach($_POST['budget'] as $check) {
			if ($check == "All") {$budget_score = 4;}
			if ($check == "Most") {$budget_score = 3;}
			if ($check == "Often") {$budget_score = 2;}
			if ($check == "Sometimes") {$budget_score = 1;}
			if ($check == "Never") {$budget_score = 0;}
			echo "$budget_score   ";
		}
	}//end budget
// Financial: goals, means and budget
$financial_total = $goals_score + $means_score + $budget_score;
$x6 = 130+  (cos(0.671)*($financial_total*10));
	$y6 = 130 - (sin(0.671)*($financial_total*10));
		echo " Financial Score = $financial_total /12";
?>

</div><!-- end financial -->
<!-- environmental -->
<div class = "env">
	<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#006600" />
 </svg>
<?php	
// Environment: community, risks, and ecology
	echo "&nbsp;Environment:Community = " ;
if(empty($_POST['community'])){  echo "0  "; $community_score = 0;  } 
	if(!empty($_POST['community'])) {
		foreach($_POST['community'] as $check) {
			if ($check == "All") {$community_score = 4;}
			if ($check == "Most") {$community_score = 3;}
			if ($check == "Often") {$community_score = 2;}
			if ($check == "Sometimes") {$community_score = 1;}
			if ($check == "Never") {$community_score = 0;}
			echo "$community_score   ";
		}
	}//end plan
// Environment:risks
echo "Risks = " ;
if(empty($_POST['risks'])){  echo "0  "; $risks_score = 0;  } 
	if(!empty($_POST['risks'])) {
		foreach($_POST['risks'] as $check) {
			if ($check == "All") {$risks_score = 4;}
			if ($check == "Most") {$risks_score = 3;}
			if ($check == "Often") {$risks_score = 2;}
			if ($check == "Sometimes"){$risks_score = 1;}
			if ($check == "Never") {$risks_score = 0;}
			echo "$risks_score   ";
		}
	}//end work

// Environment: ecology
echo "Ecology = " ;
if(empty($_POST['ecology'])){  echo "0  "; $ecology_score = 0;  } 
	if(!empty($_POST['ecology'])) {
		foreach($_POST['ecology'] as $check) {
			if ($check == "All") {$ecology_score = 4;}
			if ($check == "Most") {$ecology_score = 3;}
			if ($check == "Often") {$ecology_score = 2;}
			if ($check == "Sometimes") {$ecology_score = 1;}
			if ($check == "Never") {$ecology_score = 0;}
			echo "$ecology_score   ";
		}
	}//end culture
	// Environment: community, risks, and ecology
$environment_total = $community_score + $risks_score + $ecology_score;
$x5 = 130+  (cos(6.06)*($environment_total*10));
	$y5 = 130 - (sin(6.06)*($environment_total*10));
		echo " Environmental Score = $environment_total /12";

?>
</div>	<! - end evironmental -- >
<!-- spiritual -->
<div class = "spi">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#660099" />
 </svg>
<?php	
// Spiritual: wellbeing, values, and direction
	echo "&nbsp;Spiritual:Wellbeing = " ;
if(empty($_POST['wellbeing'])){  echo "0  "; $wellbeing_score = 0;  } 
	if(!empty($_POST['wellbeing'])) {
		foreach($_POST['wellbeing'] as $check) {
			if ($check == "All") {$wellbeing_score = 4;}
			if ($check == "Most") {$wellbeing_score = 3;}
			if ($check == "Often") {$wellbeing_score = 2;}
			if ($check == "Sometimes") {$wellbeing_score = 1;}
			if ($check == "Never") {$wellbeing_score = 0;}
			echo "$wellbeing_score   ";
		}
	}//end wellbeing
// Spiritual: wellbeing, values, and direction
echo "Values = " ;
if(empty($_POST['values'])){  echo "0  "; $values_score = 0;  } 
	if(!empty($_POST['values'])) {
		foreach($_POST['values'] as $check) {
			if ($check == "All") {$values_score = 4;}
			if ($check == "Most") {$values_score = 3;}
			if ($check == "Often") {$values_score = 2;}
			if ($check == "Sometimes") {$values_score = 1;}
			if ($check == "Never") {$values_score = 0;}
			echo "$values_score   ";
		}
	}//end values

// Spiritual: direction
echo "Direction = " ;
if(empty($_POST['direction'])){  echo "0  "; $direction_score = 0;  } 
	if(!empty($_POST['direction'])) {
		foreach($_POST['direction'] as $check) {
			if ($check == "All") {$direction_score = 4;}
			if ($check == "Most") {$direction_score = 3;}
			if ($check == "Often") {$direction_score = 2;}
			if ($check == "Sometimes") {$direction_score = 1;}
			if ($check == "Never") {$direction_score = 0;}
			echo "$direction_score   ";
		}
	}//end direction
	//Spiritual: wellbeing, values, and direction
$spiritual_total = $wellbeing_score + $values_score + $direction_score;
$x4 = 130+  (cos(5.16)*($spiritual_total*10));
	$y4 = 130 - (sin(5.16)*($spiritual_total*10));
		echo " Career and Academic Score = $spiritual_total /12";
?>

</div><! -- end spiritual -->


<!-- career -->
<div class = "car">
	<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#FF00CC" />
 </svg>
<?php	
// Career and Academic: plan ******************************
	echo "&nbsp;Career and Academic: Planning = " ;
if(empty($_POST['plan'])){  echo "0  "; $plan_score = 0;  } 
	if(!empty($_POST['plan'])) {
		foreach($_POST['plan'] as $check) {
			if ($check == "All") {$plan_score = 4;}
			if ($check == "Most") {$plan_score = 3;}
			if ($check == "Often") {$plan_score = 2;}
			if ($check == "Sometimes") {$plan_score = 1;}
			if ($check == "Never") {$plan_score = 0;}
			echo "$plan_score   ";
		}
	}//end plan
// Career and Academic: work  ******************************
echo "Work = " ;
if(empty($_POST['work'])){  echo "0  "; $work_score = 0;  } 
	if(!empty($_POST['work'])) {
		foreach($_POST['work'] as $check) {
			if ($check == "All") {$work_score = 4;}
			if ($check == "Most") {$work_score = 3;}
			if ($check == "Often") {$work_score = 2;}
			if ($check == "Sometimes") {$work_score = 1;}
			if ($check == "Never") {$work_score = 0;}
			echo "$work_score   ";
		}
	}//end work

// Career and Academic: challenges ******************************
echo "Challenges = " ;
if(empty($_POST['challenges'])){  echo "0  "; $challenges_score = 0;  } 
	if(!empty($_POST['challenges'])) {
		foreach($_POST['challenges'] as $check) {
			if ($check == "All") {$challenges_score = 4;}
			if ($check == "Most") {$challenges_score = 3;}
			if ($check == "Often") {$challenges_score = 2;}
			if ($check == "Sometimes") {$challenges_score = 1;}
			if ($check == "Never") {$challenges_score = 0;}
			echo "$challenges_score   ";
		}
	}//end culture
$career_total = $plan_score + $work_score + $challenges_score;
$x3 = 130+  (cos(4.26)*($career_total*10));
	$y3 = 130 - (sin(4.26)*($career_total*10));
		echo " Career and Academic Score = $career_total /12";
?>
</div> <! -- end career -->


<!--  social -->
<div class = "soc">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#00CC33" />
 </svg>
<?php	
// Social & Cultural: relationships ****************************
	echo "&nbsp;Social & Cultural:Relationships = " ;
if(empty($_POST['relationships'])){  echo "   "; $relationships_score = 0;  } 
	if(!empty($_POST['relationships'])) {
		foreach($_POST['relationships'] as $check) {
			if ($check == "All") {$relationships_score = 4;}
			if ($check == "Most") {$relationships_score = 3;}
			if ($check == "Often") {$relationships_score = 2;}
			if ($check == "Sometimes") {$relationships_score = 1;}
			if ($check == "Never") {$relationships_score = 0;}
			echo "$relationships_score   ";
		}
	}
// Social & Cultural:  group  ****************************
echo "Groups = " ;
if(empty($_POST['groups'])){  echo "0  "; $groups_score = 0;  } 
	if(!empty($_POST['groups'])) {
		foreach($_POST['groups'] as $check) {
			if ($check == "All") {$groups_score = 4;}
			if ($check == "Most") {$groups_score = 3;}
			if ($check == "Often") {$groups_score = 2;}
			if ($check == "Sometimes") {$groups_score = 1;}
			if ($check == "Never") {$groups_score = 0;}
			echo "$groups_score   ";
		}
	}//end groups

// Social & Cultural: culture ****************************
echo "Culture = " ;
if(empty($_POST['culture'])){  echo "0  "; $culture_score = 0;  } 
	if(!empty($_POST['culture'])) {
		foreach($_POST['culture'] as $check) {
			if ($check == "All") {$culture_score = 4;}
			if ($check == "Most") {$culture_score = 3;}
			if ($check == "Often") {$culture_score = 2;}
			if ($check == "Sometimes") {$culture_score = 1;}
			if ($check == "Never") {$culture_score = 0;}
			echo "$culture_score   ";
		}
	}//end culture
$social_total = $relationships_score + $groups_score + $culture_score;
$x2 = 130+  (cos(3.36)*($social_total*10));
	$y2 = 130 - (sin(3.36)*($social_total*10));
		echo " Social & Culture Score = $social_total /12";
?>
</div> <! --  end social -->

</div> <!-- end data -->
<div id = "graphdata">
<svg height="300" width="300">
 <line x1="130" y1="130" x2="246" y2="103" style="stroke:#f9f9f9;stroke-width:1" />
 <line x1="130" y1="130" x2="182" y2="22" style="stroke:#f9f9f9;stroke-width:1" />
  <line x1="130" y1="130" x2="78" y2="22" style="stroke:#f9f9f9;stroke-width:1" />
   <line x1="130" y1="130" x2="13" y2="104" style="stroke:#f9f9f9;stroke-width:1" />
    <line x1="130" y1="130" x2="37" y2="205" style="stroke:#f9f9f9;stroke-width:1" /> 
     <line x1="130" y1="130" x2="130" y2="250" style="stroke:#f9f9f9;stroke-width:1" /> 
      <line x1="130" y1="130" x2="224" y2="205" style="stroke:#f9f9f9;stroke-width:1" />
       
 <circle cx="130" cy="130" r="7"  fill="#b1b1b1" />
 
 <circle cx="130" cy="130" r="120" stroke="#dddddd" stroke-width="5" fill="none" />


 <line x1="130" y1="130" x2="<?php echo "$x1"?>" y2="<?php echo "$y1"?>" style="stroke:#ff0000;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x2"?>" y2="<?php echo "$y2"?>"  style="stroke:#00cc33;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x3"?>" y2="<?php echo "$y3"?>"  style="stroke:#ff00cc;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x4"?>" y2="<?php echo "$y4"?>"  style="stroke:#660099;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x5"?>" y2="<?php echo "$y5"?>"  style="stroke:#006600;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x6"?>" y2="<?php echo "$y6"?>"  style="stroke:#ff8c00;stroke-width:5" />
 <line x1="130" y1="130" x2="<?php echo "$x7"?>" y2="<?php echo "$y7"?>"  style="stroke:#0000ff;stroke-width:5" />
 
 <circle cx="130" cy="130" r="7"  fill="#b1b1b1" />
 
 <circle cx="130" cy="130" r="120" stroke="#dddddd" stroke-width="5" fill="none" />
 <polygon points=" 
 <?php echo "$x1"?>,<?php echo "$y1"?> 
 <?php echo "$x2"?>,<?php echo "$y2"?> 
 <?php echo "$x3"?>,<?php echo "$y3"?>
  <?php echo "$x4"?>,<?php echo "$y4"?>
   <?php echo "$x5"?>,<?php echo "$y5"?>
    <?php echo "$x6"?>,<?php echo "$y6"?>
	 <?php echo "$x7"?>,<?php echo "$y7"?>"  
	 style="fill:none;stroke:#cccccc;stroke-width:5" />
	 
			<circle cx="224" cy="55" r="7"  fill="#FF8C00" />
			<circle cx="130" cy="10" r="7"  fill="#0000FF" />
			<circle cx="36" cy="55" r="7"  fill="#FF0000" />
	        <circle cx="12" cy="157" r="7"  fill="#00CC33" />
	        <circle cx="78" cy="238" r="7"  fill="#FF00CC" />
	        <circle cx="182" cy="238" r="7"  fill="#660099" />
	        <circle cx="247" cy="157" r="7"  fill="#006600" />
	        
	        
	        .phy{color: #FF0000;} 
.soc {color: #00CC33;} 
.car {color:#FF00CC;} 
.spi {color: #660099;}
.env {color: 006600;}
.fin {color: #FF8C00;}
.emo {color: #0000FF;}

	   <text x="20"  y="280"
          style="font-family: Arial;
                 font-size  : 18;
                 stroke     : #88008e;
                 fill       : #99009f;
                "
          > <?php echo "$name_input" ?>'s Wellness</text>
          
          
          </svg>

</div>
<div id = "contents">	
<form  method="post">
	<button type="submit">Submit</button>
	First Name<input type="text" name="name" maxlength="20"> 
	Unique Number<input type="text" name="number" maxlength="10"> 
<div class = "phy">
<hr />Physical 
<hr />
1.1 I get adequate sleep and awake feeling refreshed.<br />
<input type="radio" name="sleep[]" value="Never">Never
<input type="radio" name="sleep[]" value="Sometimes">Sometimes
<input type="radio" name="sleep[]" value="Often">Often
<input type="radio" name="sleep[]" value="Most">Most of the time
<input type="radio" name="sleep[]" value="All">All the time
<hr />
1.2 I get at least 30 minutes of moderate physical activity each day (Examples: Brisk walking, cycling, running or aerobics.) <br />
<input type="radio" name="activity[]" value="Never">Never
<input type="radio" name="activity[]" value="Sometimes">Sometimes
<input type="radio" name="activity[]" value="Often">Often
<input type="radio" name="activity[]" value="Most">Most of the time
<input type="radio" name="activity[]" value="All">All the time
<hr />
1.3 I eat regular, nutritious meals that give me the energy I need to stay active and get through the day.<br />
<input type="radio" name="nutrition[]" value="Never">Never
<input type="radio" name="nutrition[]" value="Sometimes">Sometimes
<input type="radio" name="nutrition[]" value="Often">Often
<input type="radio" name="nutrition[]" value="Most">Most of the time
<input type="radio" name="nutrition[]" value="All">All the time
</div> <!-- end phy -->

<div class = "emo">
	<hr />
Emotional<hr />
2.1 I am able to ask for/seek out help when I need it from friends, family or professionals.<br />
<input type="radio" name="help[]" value="Never">Never
<input type="radio" name="help[]" value="Sometimes">Sometimes
<input type="radio" name="help[]" value="Often">Often
<input type="radio" name="help[]" value="Most">Most of the time
<input type="radio" name="help[]" value="All">All the time

<hr />

2.2 I value self-exploration and self-improvement.<br />
<input type="radio" name="exploration[]" value="Never">Never
<input type="radio" name="exploration[]"  value="Sometimes">Sometimes
<input type="radio" name="exploration[]"  value="Often">Often
<input type="radio" name="exploration[]"  value="Most">Most of the time
<input type="radio" name="exploration[]"  value="All">All the time

<hr />

2.3 I am able to recognize and manage the different stressors in my life.<br />
<input type="radio" name="stressors[]" value="Never">Never
<input type="radio"  name="stressors[]" value="Sometimes">Sometimes
<input type="radio"  name="stressors[]" value="Often">Often
<input type="radio"  name="stressors[]" value="Most">Most of the time
<input type="radio"  name="stressors[]" value="All">All the time


</div><! -- end emo -->

<div class = "fin">
	<hr />
Financial
<hr />
3.1 I have both short term and long term financial goals.<br />
<input type="radio" name="goals[]" value="Never">Never
<input type="radio" name="goals[]" value="Sometimes">Sometimes
<input type="radio" name="goals[]" value="Often">Often
<input type="radio" name="goals[]" value="Most">Most of the time
<input type="radio" name="goals[]" value="All">All the time

<hr />

3.2 I live within my means (Examnple: I have the money I need and don’t borrow from my friends or family).<br />
<input type="radio" name="means[]" value="Never">Never
<input type="radio" name="means[]" value="Sometimes">Sometimes
<input type="radio" name="means[]" value="Often">Often
<input type="radio" name="means[]" value="Most">Most of the time
<input type="radio" name="means[]" value="All">All the time

<hr />

3.3 I budget my spending each month and plan for upcoming big expenses.<br />
<input type="radio" name="budget[]" value="Never">Never
<input type="radio" name="budget[]" value="Sometimes">Sometimes
<input type="radio" name="budget[]" value="Often">Often
<input type="radio" name="budget[]" value="Most">Most of the time
<input type="radio" name="budget[]" value="All">All the time

</div> <! -- end fin -->

<div class = "env">
	<hr />

Environment<hr />
4.1 I care for and respect the environment and my community.<br />
<input type="radio" name="community[]" value="Never">Never
<input type="radio" name="community[]" value="Sometimes">Sometimes
<input type="radio" name="community[]" value="Often">Often
<input type="radio" name="community[]" value="Most">Most of the time
<input type="radio" name="community[]" value="All">All the time

<hr />

4.2 I am aware of risks within my environment an make adjustments to my lifestyle accordingly (Example: Personal safety at home and at school).<br />
<input type="radio" name="risks[]" value="Never">Never
<input type="radio" name="risks[]" value="Sometimes">Sometimes
<input type="radio" name="risks[]" value="Often">Often
<input type="radio" name="risks[]" value="Most">Most of the time
<input type="radio" name="risks[]" value="All">All the time

<hr />

4.3 I try to live an eco-friendly lifestyle (Example: Drive less, turn off lights, and recycle).<br />
<input type="radio" name="ecology[]" value="Never">Never
<input type="radio" name="ecology[]" value="Sometimes">Sometimes
<input type="radio" name="ecology[]" value="Often">Often
<input type="radio" name="ecology[]" value="Most">Most of the time
<input type="radio" name="ecology[]" value="All">All the time
</div> 

<div class = "spi">
	<hr />
Spiritual<hr />
5.1 I feel an overall sense of peace and wellbeing in my life.<br />
<input type="radio" name="wellbeing[]" value="Never">Never
<input type="radio" name="wellbeing[]" value="Sometimes">Sometimes
<input type="radio" name="wellbeing[]" value="Often">Often
<input type="radio" name="wellbeing[]" value="Most">Most of the time
<input type="radio" name="wellbeing[]" value="All">All the time

<hr />

5.2 I understand my own values and beliefs, and respect the values, ethics and beliefs of others.<br />
<input type="radio" name="values[]" value="Never">Never
<input type="radio" name="values[]" value="Sometimes">Sometimes
<input type="radio" name="values[]" value="Often">Often
<input type="radio" name="values[]" value="Most">Most of the time
<input type="radio" name="values[]" value="All">All the time

<hr />

5.3 I believe my life to have direction and meaning.<br />
<input type="radio" name="direction[]" value="Never">Never
<input type="radio" name="direction[]" value="Sometimes">Sometimes
<input type="radio" name="direction[]" value="Often">Often
<input type="radio" name="direction[]" value="Most">Most of the time
<input type="radio" name="direction[]" value="All">All the time
</div> 

<div class = "car">
<hr />Career and Academic

<hr />

6.1 I have a plan for a career/work after high school.<br />
<input type="radio" name="plan[]" value="Never">Never
<input type="radio" name="plan[]" value="Sometimes">Sometimes
<input type="radio" name="plan[]" value="Often">Often
<input type="radio" name="plan[]" value="Most">Most of the time
<input type="radio" name="plan[]" value="All">All the time

<hr />
6.2 I am satisfied with my work/school performance.<br />
<input type="radio" name="work[]" value="Never">Never
<input type="radio" name="work[]" value="Sometimes">Sometimes
<input type="radio" name="work[]" value="Often">Often
<input type="radio" name="work[]" value="Most">Most of the time
<input type="radio" name="work[]" value="All">All the time

<hr />
6.3 I seek out new challenges and academic/career goals.<br />
<input type="radio" name="challenges[]" value="Never">Never
<input type="radio" name="challenges[]" value="Sometimes">Sometimes
<input type="radio" name="challenges[]" value="Often">Often
<input type="radio" name="challenges[]" value="Most">Most of the time
<input type="radio" name="challenges[]" value="All">All the time
</div>


<div class = "soc">
	<hr />
Social & Cultural 
<hr />
7.1 I'm able to find the time to maintain healthy relationships with my loved ones.<br />
<input type="radio" name="relationships[]" value="Never">Never
<input type="radio" name="relationships[]" value="Sometimes">Sometimes
<input type="radio" name="relationships[]" value="Often">Often
<input type="radio" name="relationships[]" value="Most">Most of the time
<input type="radio" name="relationships[]" value="All">All the time
<hr />
7.2 I feel a sense of belonging to a group or a community.<br />
<input type="radio" name="groups[]" value="Never">Never
<input type="radio" name="groups[]" value="Sometimes">Sometimes
<input type="radio" name="groups[]" value="Often">Often
<input type="radio" name="groups[]" value="Most">Most of the time
<input type="radio" name="groups[]" value="All">All the time
<hr />
7.3 I respect others and their cultural identities.<br />
<input type="radio" name="culture[]" value="Never">Never
<input type="radio" name="culture[]" value="Sometimes">Sometimes
<input type="radio" name="culture[]" value="Often">Often
<input type="radio" name="culture[]" value="Most">Most of the time
<input type="radio" name="culture[]" value="All">All the time
</div>

<hr />

<button type="submit">Submit</button>
</form>
 
<hr />
Developed by Craig Coleman(Tri-Tech)-Programmer -  Rebecca Schlegel(Pasco High School)-Content - 1/22/14  
</div>  <!-- conents -->

<?php
if ( $name_input != "First Name" ){
//sql input	*******************************	
			
//echo " $hostName     $databaseName  $username <br />"; 

 if (!($connection = @ mysql_pconnect($host,$user, $pass))) die("Could not connect to database");
	mysql_select_db("bulldogs", $connection);

//echo $hostname;
	
	$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $name_input . $number_input;
	$str5 =  "PHY=" . $physcial_total 
			." EMO=" . $emotional_total 
			." FIN=" .$financial_total 
			." ENV=" .$environment_total 
			." SPI=" .$spiritual_total 
			." CAR=" .$career_total 
			." SOC=" .$social_total;
	$str6 = $physcial_total+$emotional_total+$financial_total+$environment_total+$spiritual_total+$career_total+$social_total;
//echo " $str1 : $date : $time <br>"; 
$query = "INSERT INTO ttcompsci.wellness (`id`, `ip`, `timein`, `datein`, `namenumber`, `scores`,`total`) VALUES ('' ,'$str1','$str2','$str3','$str4','$str5', '$str6');";
//echo "$query";
 $result = @ mysql_query ($query, $connection)  or showerror();			
	mysql_close();
} // end if		
		
// *******************************************		

?>

</body>
</html>
