<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="php/process.php" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <!-- <script src="script/script.js"></script> -->
    <script src="script/script.js"></script>
</head>
<body>
            <!---------CANVAS------------>
            <canvas id="test"></canvas>
          
            <!---------CANVAS------------>

<!----PHP CODE----->

<!----PHP CODE ENDS----->


<!-----QUESTIONS------->
<center><b class="title"><h1>welcome To The Human Body Quiz</h1></b></center><br>


<aside class="container_quiz">
   <article class="message" id="question1">
        <br>
        <div class="message-body">
            <form action='php/process.php?id=1' method='post' id='quizForm' id='1'>
                    <div class="containerOne" id="questions">
                            
                                <h3 class="message-header is-success">What is the name of the biggest part of the human brain?</h3><br>
                                <div>
                                <input type="radio" name="answerOne" id="answerOne" value="A">
                                <label for="answerOneA">A) The Cerebellum</label></a>
                                </div>
                                <div>
                                    <input type="radio" name="answerOne" id="answerOne" value="B">
                                    <label for="answerOneB">B) Ventricles</label>
                                </div>
                                <div>
                                    <input type="radio" name="answerOne" id="answerOne" value="C">
                                    <label for="answerOneC">C) The Cerebrum</label>
                                </div>
                            
                        
                    </div>
        </div>
    </article>
<!-----QUESTIONS------->
<!-----QUESTIONS------->

    <article class="message is-link" id="question2">
        <div class="message-body">
                <div class="containerTwo" id="questions">
                    <h3 class="message-header is-success"> The colored part of the human eye that controls how much light passes through the pupil is called the?</h3>
                    <br>
                    <div>
                        <input type="radio" name="answerTwo" id="answerTwo" value="A">
                        <label for="answerTwoA">A) Lens </label>
                    </div>
                    <div>
                        <input type="radio" name="answerTwo" id="answerTwo" value="B">
                        <label for="answerTwoB">B) Iris</label>
                    </div>
                    <div>
                        <input type="radio" name="answerTwo" id="answerTwo" value="C">
                        <label for="answerTwoC">C) Ciliary body</label>
                    </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-warning" id="question3">
        <div class="message-body">
                <div class="containerThree" id="questions">
                    <h3 class="message-header">What is the name of the substance that gives skin and hair its pigment?</h3>
                    <br>
                    <div>
                        <input type="radio" name="answerThree" id="answerThree" value="A">
                        <label for="answerThreeA">A) Melanocytes </label>
                    </div>
                    <div>
                        <input type="radio" name="answerThree" id="answerThree" value="B">
                        <label for="answerThreeB">B) Melanin</label>
                    </div>
                    <div>
                        <input type="radio" name="answerThree" id="answerThree" value="C">
                        <label for="answerThreeC">C) Golgi apparatus</label>
                    </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-danger" id="question4">
        <div class="message-body">
                <div class="containerFour" id="questions">
                        <h3 class="message-header">The muscles found in the front of your thighs are known as what?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer4" id="answer4" value="A">
                            <label for="answerOneA">A) Quadriceps</label>
                        </div>
                        <div>
                            <input type="radio" name="answer4" id="answer4" value="B">
                            <label for="answerOneB">B) Vastus Medialis</label>
                        </div>
                        <div>
                            <input type="radio" name="answer4" id="answer4" value="C">
                            <label for="answerOneC">C) Rectus Femoris</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-dark">
        <div class="message-body">
                <div class="containerFive" id="questions">
                        <h3 class="message-header">True or false? The two chambers at the bottom of your heart are called ventricles.</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer5" id="answer5" value="A">
                            <label for="answerOneA">A) True</label>
                        </div>
                        <div>
                            <input type="radio" name="answer5" id="answer5" value="B">
                            <label for="answerOneB">B) False</label>
                        </div>
                        <div>
                            <input type="radio" name="answer5" id="answer5" value="C">
                            <label for="answerOneC">C) None</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-primary">
        <div class="message-body">
                <div class="containerSix" id="questions">
                        <h3 class="message-header"> What substance are nails made of?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer6" id="answer6" value="A">
                            <label for="answerOneA">A) Keratin</label>
                        </div>
                        <div>
                            <input type="radio" name="answer6" id="answer6" value="B">
                            <label for="answerOneB">B) False</label>
                        </div>
                        <div>
                            <input type="radio" name="answer6" id="answer6" value="C">
                            <label for="answerOneC">C) None</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-warning">
        <div class="message-body">
                <div class="containerSeven" id="questions">
                        <h3 class="message-header">What is the human body’s biggest organ?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer7" id="answer7" value="A">
                            <label for="answerOneA">A) The Skin</label>
                        </div>
                        <div>
                            <input type="radio" name="answer7" id="answer7" value="B">
                            <label for="answerOneB">B) The Lungs</label>
                        </div>
                        <div>
                            <input type="radio" name="answer7" id="answer7" value="C">
                            <label for="answerOneC">C) The Heart</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-success">
        <div class="message-body">
                <div class="containerEight" id="questions">
                        <h3 class="message-header">The innermost part of bones contains what?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer8" id="answer8" value="A">
                            <label for="answerOneA">A) Red MArrow</label>
                        </div>
                        <div>
                            <input type="radio" name="answer8" id="answer8" value="B">
                            <label for="answerOneB">B) Yellow Marrow</label>
                        </div>
                        <div>
                            <input type="radio" name="answer8" id="answer8" value="C">
                            <label for="answerOneC">C) Bone Marrow</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-danger">
        <div class="message-body">
                <div class="containerNine" id="questions">
                        <h3 class="message-header">True or false? An adult human body has over 500 bones.</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer9" id="answer9" value="A">
                            <label for="answerOneA">A) True</label>
                        </div>
                        <div>
                            <input type="radio" name="answer9" id="answer9" value="B">
                            <label for="answerOneB">B) False</label>
                        </div>
                        <div>
                            <input type="radio" name="answer9" id="answer9" value="C">
                            <label for="answerOneC">C) None</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-info">
        <div class="message-body">
                <div class="containerTen" id="questions">
                        <h3 class="message-header">How many lungs does the human body have?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer10" id="answer10" value="A">
                            <label for="answerOneA">A) 2</label>
                        </div>
                        <div>
                            <input type="radio" name="answer10" id="answer10" value="B">
                            <label for="answerOneB">B) 7</label>
                        </div>
                        <div>
                            <input type="radio" name="answer10" id="answer10" value="C">
                            <label for="answerOneC">C) 5</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-warning">
        <div class="message-body">
                <div class="containerEleven" id="questions">
                        <h3 class="message-header"> Another name for your voice box is the?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer11" id="answer11" value="A">
                            <label for="answerOneA">A) Larynx</label>
                        </div>
                        <div>
                            <input type="radio" name="answer11" id="answer11" value="B">
                            <label for="answerOneB">B) Vocal Cords</label>
                        </div>
                        <div>
                            <input type="radio" name="answer11" id="answer11" value="C">
                            <label for="answerOneC">C) Trachea</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-white">
        <div class="message-body">
                <div class="containerTwelve" id="questions">
                        <h3 class="message-header"> The two holes in your nose are called?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer12" id="answer12" value="A">
                            <label for="answerOneA">A) Nostrils</label>
                        </div>
                        <div>
                            <input type="radio" name="answer12" id="answer12" value="B">
                            <label for="answerOneB">B) Naval Cavity</label>
                        </div>
                        <div>
                            <input type="radio" name="answer12" id="answer12" value="C">
                            <label for="answerOneC">C) Olfactory Bulb</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-success">
        <div class="message-body">
                <div class="container13" id="questions">
                        <h3 class="message-header">Your tongue is home to special structures that allow you to experience tastes such as sour, sweet, bitter and salty, what is their name?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer13" id="answer13" value="A">
                            <label for="answerOneA">A)  Taste buds</label>
                        </div>
                        <div>
                            <input type="radio" name="answer13" id="answer13" value="B">
                            <label for="answerOneB">B) Foliate Papillae</label>
                        </div>
                        <div>
                            <input type="radio" name="answer13" id="answer13" value="C">
                            <label for="answerOneC">C) Filiform Papillae</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-info">
        <div class="message-body">
                <div class="container14" id="questions">
                        <h3 class="message-header">The bones that make up your spine are called what?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer14" id="answer14" value="A">
                            <label for="answerOneA">A) FAcet of superior articular process</label>
                        </div>
                        <div>
                            <input type="radio" name="answer14" id="answer14" value="B">
                            <label for="answerOneB">B) Vertebrae</label>
                        </div>
                        <div>
                            <input type="radio" name="answer14" id="answer14" value="C">
                            <label for="answerOneC">C) Spinal Cord</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-link">
        <div class="message-body">
                <div class="container15" id="questions">
                        <h3 class="message-header"> The shape of DNA is known as?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer15" id="answer15" value="A">
                            <label for="answerOneA">A) strings</label>
                        </div>
                        <div>
                            <input type="radio" name="answer15" id="answer15" value="B">
                            <label for="answerOneB">B) A single helix</label>
                        </div>
                        <div>
                            <input type="radio" name="answer15" id="answer15" value="C">
                            <label for="answerOneC">C) A double helix</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-loading">
        <div class="message-body">
                <div class="container16" id="questions">
                        <h3 class="message-header">The flow of blood through your heart and around your body is called?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer16" id="answer16" value="A">
                            <label for="answerOneA">A) Circulation </label>
                        </div>
                        <div>
                            <input type="radio" name="answer16" id="answer16" value="B">
                            <label for="answerOneB">B) Vain</label>
                        </div>
                        <div>
                            <input type="radio" name="answer16" id="answer16" value="C">
                            <label for="answerOneC">C) Artery</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

     <article class="message is-info">
        <div class="message-body">
                <div class="container17" id="questions">
                        <h3 class="message-header">The bones around your chest that protect organs such as the heart are called what?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer17" id="answer17" value="A">
                            <label for="answerOneA">A) Costal Cartilage </label>
                        </div>
                        <div>
                            <input type="radio" name="answer17" id="answer17" value="B">
                            <label for="answerOneB">B) Ribs</label>
                        </div>
                        <div>
                            <input type="radio" name="answer17" id="answer17" value="C">
                            <label for="answerOneC">C) Sternum</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-link">
        <div class="message-body">
                <div class="container18" id="questions">
                        <h3 class="message-header">What is the name of the long pipe that shifts food from the back of your throat down to your stomach?</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer18" id="answer18" value="A">
                            <label for="answerOneA">A) Diaphragm </label>
                        </div>
                        <div>
                            <input type="radio" name="answer18" id="answer18" value="B">
                            <label for="answerOneB">B) The esophagus </label>
                        </div>
                        <div>
                            <input type="radio" name="answer18" id="answer18" value="C">
                            <label for="answerOneC">C) Lower Esophageal Sphincter (LES)</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-success">
        <div class="message-body">
                <div class="container19" id="questions">
                        <h3 class="message-header"> True or false? Your ears are important when it comes to staying balanced.</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer19" id="answer19" value="A">
                            <label for="answerOneA">A) True </label>
                        </div>
                        <div>
                            <input type="radio" name="answer19" id="answer19" value="B">
                            <label for="answerOneB">B) False </label>
                        </div>
                        <div>
                            <input type="radio" name="answer19" id="answer19" value="C">
                            <label for="answerOneC">C) None</label>
                        </div>
                </div>
        </div>
    </article>
<!-----QUESTIONS------->

    <article class="message is-danger">
        <div class="message-body">
                <div class="container20" id="questions">
                        <h3 class="message-header"> What was the first thing that happened after the universe was created</h3>
                        <br>
                        <div>
                            <input type="radio" name="answer20" id="answer20" value="A">
                            <label for="answerOneA">A) You're kidding, right?</label>
                        </div>
                        <div>
                            <input type="radio" name="answer20" id="answer20" value="B">
                            <label for="answerOneB">B) Uuuuuuhh... </label>
                        </div>
                        <div>
                            <input type="radio" name="answer20" id="answer20" value="C">
                            <label for="answerOneC">C) How should i know?</label>
                        </div>
                </div>
        </div>
    </article>
</aside>
    <!-----QUESTIONS FOR QUIZ ENDS HERE------>

                <center><input class="button is-large is-primary is-outlined" type="submit" value="SUBMIT"></center>
            </form>    
        </div>

        <script>
                    var w = window.innerWidth,
            h = window.innerHeight,
            canvas = document.getElementById('test'),
            ctx = canvas.getContext('2d'),
            rate = 60,
            arc = 100,
            time,
            count,
            size = 7,
            speed = 20,
            parts = new Array,
            colors = ['red','#f57900','yellow','#ce5c00','#5c3566'];
        var mouse = { x: 0, y: 0 };

        canvas.setAttribute('width',w);
        canvas.setAttribute('height',h);

        function create() {
        time = 0;
        count = 0;

        for(var i = 0; i < arc; i++) {
            parts[i] = {
            x: Math.ceil(Math.random() * w),
            y: Math.ceil(Math.random() * h),
            toX: Math.random() * 5 - 1,
            toY: Math.random() * 2 - 1,
            c: colors[Math.floor(Math.random()*colors.length)],
            size: Math.random() * size
            }
        }
        }

        function particles() {
        ctx.clearRect(0,0,w,h);
        canvas.addEventListener('mousemove', MouseMove, false);
        for(var i = 0; i < arc; i++) {
            var li = parts[i];
            var distanceFactor = DistanceBetween( mouse, parts[i] );
            var distanceFactor = Math.max( Math.min( 15 - ( distanceFactor / 10 ), 10 ), 1 );
            ctx.beginPath();
            ctx.arc(li.x,li.y,li.size*distanceFactor,0,Math.PI*2,false);
            ctx.fillStyle = li.c;
            ctx.strokeStyle=li.c;
            if(i%2==0)
            ctx.stroke();
            else
            ctx.fill();
            
            li.x = li.x + li.toX * (time * 0.05);
            li.y = li.y + li.toY * (time * 0.05);
            
            if(li.x > w){
            li.x = 0; 
            }
            if(li.y > h) {
            li.y = 0; 
            }
            if(li.x < 0) {
            li.x = w; 
            }
            if(li.y < 0) {
            li.y = h; 
            }
        
            
        }
        if(time < speed) {
            time++;
        }
        setTimeout(particles,1000/rate);
        }
        function MouseMove(e) {
        mouse.x = e.layerX;
        mouse.y = e.layerY;

        //context.fillRect(e.layerX, e.layerY, 5, 5);
        //Draw( e.layerX, e.layerY );
        }
        function DistanceBetween(p1,p2) {
        var dx = p2.x-p1.x;
        var dy = p2.y-p1.y;
        return Math.sqrt(dx*dx + dy*dy);
        }
        create();
        particles();
        </script>
        
        















































</body>
</html>