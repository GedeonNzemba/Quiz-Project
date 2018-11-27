<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.php" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="script/script.js"></script>
</head>
<body>
<!----CANVAS code------->
    <canvas id=c></canvas>
    <canvas id=bg></canvas>

<!----CANVAS code ENDS here--->

<!-----PHP CODE ------->
<?php

$fid = $_GET['id'];

?>

<?php

$answer1= $_POST['answerOne'];
$answer2= $_POST['answerTwo'];
$answer3= $_POST['answerThree'];
$answer4= $_POST['answer4'];
$answer5= $_POST['answer5'];
$answer6= $_POST['answer6'];
$answer7= $_POST['answer7'];
$answer8= $_POST['answer8'];
$answer9= $_POST['answer9'];
$answer10= $_POST['answer10'];
$answer11= $_POST['answer11'];
$answer12= $_POST['answer12'];
$answer13= $_POST['answer13'];
$answer14= $_POST['answer14'];
$answer15= $_POST['answer15'];
$answer16= $_POST['answer16'];
$answer17= $_POST['answer17'];
$answer18= $_POST['answer18'];
$answer19= $_POST['answer19'];
$answer20= $_POST['answer20'];

$score = 0;
if ($answer1 == "A"){$score++;}
if ($answer2 == "B"){$score++;}
if ($answer3 == "B"){$score++;}
if ($answer4 == "A"){$score++;}
if ($answer5 == "A"){$score++;}
if ($answer6 == "A"){$score++;}
if ($answer7 == "A"){$score++;}
if ($answer8 == "C"){$score++;}
if ($answer9 == "B"){$score++;}
if ($answer10 == "A"){$score++;}
if ($answer11 == "A"){$score++;}
if ($answer12 == "A"){$score++;}
if ($answer13 == "A"){$score++;}
if ($answer14 == "B"){$score++;}
if ($answer15 == "C"){$score++;}
if ($answer16 == "A"){$score++;}
if ($answer17 == "B"){$score++;}
if ($answer18 == "B"){$score++;}
if ($answer19 == "A"){$score++;}
if ($answer20 == "C"){$score++;}

echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/20</font></center>";
?>
<!----PHP CODE ENDS----->

<!---PROGRESS BAR--->
<progress class="progress is-small is-primary" max="100">15%</progress>

<!----BACK BUTTON--->
<button id="button" class="button is-primary" type="button"><a type="button" href="index.html"><i class="fas fa-undo"></i></a></button>
<script>
    var w = c.width = window.innerWidth,
    h = c.height = window.innerHeight,
    ctx = c.getContext('2d'),
    
    //parameters
    total = w,
    accelleration = .05,
    
    //afterinitial calculations
    size = w/total,
    occupation = w/total,
    repaintColor = 'rgba(0, 0, 0, .04)'
    colors = [],
    dots = [],
    dotsVel = [];

    //setting the colors' hue
    //and y level for all dots
    var portion = 360/total;
    for(var i = 0; i < total; ++i){
    colors[i] = portion * i;
    
    dots[i] = h;
    dotsVel[i] = 10;
    }

    function anim(){
    window.requestAnimationFrame(anim);
    
    ctx.fillStyle = repaintColor;
    ctx.fillRect(0, 0, w, h);
    
    for(var i = 0; i < total; ++i){
        var currentY = dots[i] - 1;
        dots[i] += dotsVel[i] += accelleration;
        
        ctx.fillStyle = 'hsl('+ colors[i] + ', 80%, 50%)';
        ctx.fillRect(occupation * i, currentY, size, dotsVel[i] + 1);
        
        if(dots[i] > h && Math.random() < .01){
        dots[i] = dotsVel[i] = 0;
        }
    }
    }

    anim();
    </script>
</body>
</html>




