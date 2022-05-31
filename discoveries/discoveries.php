
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discoveries</title>
</head>
<header>

    </div>
    </header>
<body style = "background:url('bgImage.jpg');padding:5px; background-size: cover; background-repeat: no-repeat;">
<div>
    <div>
    </div>
    <div >
        <h1> <font family = "Raleway, sans-serif" size = "45" color = "black"> Discover a World Of Unlimited Stories </font></h1>
        <div class="all">
            <form class="form" action="discoveries.php" method="post">
            <h3 class="namefirst">Name: </h3>
            <input class="writename" type="text" name="name">
            </br>
            </br>
            <h3 class="bdayuna">Genre: </h3>
                    <select class="choosegenre" name="genre" id="">
                        <option value="1">Action</option>
                        <option value="2">Romance</option>
                        <option value="3">Historical Fiction</option>
                        <option value="4">Horror</option>
                        <option value="5">Mystery/Thriller</option>
                    </select>
                    </br>
                    </br>
                    <input class="enter" type="submit" value="Search" name="tbutton"> </br>
            </form>
        </div>
        </br>
        </br>
        </br>
    <div class="content">
<center>
        <?php
        if(isset($_POST["tbutton"])){
            $CompleteName =$_POST["name"];
            $YourChosenGenre=$_POST["genre"];

            if($YourChosenGenre == 1){
                echo "<h7> <h2>Hi $CompleteName</h2> Nice, Action is your chosen genre!<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Fight Me</h2></br><img class='apr' src='img/fightMe.jpg'>";
                echo "</br>";
                echo "Jessica Westlake is unknown, while Black Lightning is a famous underground street fighter. </br>";
                echo "What most don't know is that they are the same person.  </br>";
                echo "After her mother dies Jessica is forced to take care of her little brother and balance work and school.</br> ";
                echo "When she finds herself tutoring the notorious gang leader, Clayton M...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";

                echo "<br><h2>The Princess Spy</h2></br><img class='apr' src='img/princessSpy.jpg'>";
                echo "</br>";
                echo "Isabella Maria Woodworth, or Izzy, never intended to marry Prince Jackson </br>";
                echo "However, her name is drawn at the Grand Choosing Ceremony, thanks to her bratty sister, Addison. Falling </br>";
                echo "in love with Prince Jackson isn't even her biggest problem,</br> ";
                echo "problem, Izzy has a secret identity as a spy and the Dark Lord, an evil villain who esca...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";
            }
    
            elseif($YourChosenGenre == 2){
                echo "<h7> <h2>Hi $CompleteName</h2> Amazing, Romance is your chosen genre!<br></h7>" ;
                echo "</br>";
                echo "<br><h2>The Storm and Silence</h2></br><img class='apr' src='img/stormSilence.jpg'>";
                echo "</br>";
                echo "It is your choice, he said, stepping so close to me that our lips were almost touching. </br>";
                echo "Either do what I say - or get another job. </br>";
                echo "My heart stood still as I gazed up into his deep, dark, dangerous eyes...</br> ";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";

                echo "<br><h2>The Chase Begins</h2></br><img class='apr' src='img/chaseBegins.jpg'>";
                echo "</br>";
                echo "They met on a vacation in Hawaii. She was there to  </br>";
                echo " try and heal her broken heart while he was trying to escape his fame. </br>";
                echo "For four days they played the happy tourist couple. Only on her</br> ";
                echo "last night there did she succumb to his charms. Brianna Morgan was known best in her town for...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";
            }


              elseif($YourChosenGenre == 3){
                echo "<h7> <h2>Hi $CompleteName</h2> Wow, Historical Fiction is your chosen genre!<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Emily's Choice</h2></br><img class='apr' src='img/EmilyChoice.jpg'>";
                echo "</br>";
                echo "Eighteen-year-old Emily Lawrence believed that her life was simple and </br>";
                echo "Wthat the most challenging thing she would face in her life would be to convince   </br>";
                echo "her cousin and companion, Rosalind, to have more courage. Her life takes on complications</br> ";
                echo "when Mr. Adrian Williams moves into the neighboring estate. Emily's father for...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";

                echo "<br><h2>Lady in Rags</h2></br><img class='apr' src='img/ladyRag.jpg'>";
                echo "</br>";
                echo "Verity Baker has spent her life cleaning up after her father's mistakes. But one</br>";
                echo "day, he goes too far and sells her, for one night only, to a local lord to pay his debts. </br>";
                echo "What kind of man would buy a woman...</br> ";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";
            }


              elseif($YourChosenGenre == 4){
                echo "<h7> <h2>Hi $CompleteName</h2> Oh, Horror is your chosen genre!<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Patient Twelve</h2></br><img class='apr' src='img/patientTwelve.jpg'>";
                echo "</br>";
                echo "Diana wakes up in pain, tied to a bed and unable to escape.  </br>";
                echo "She's been trapped by a group of surgeons with a twisted passion and she's their next victim</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";

                echo "<br><h2>Finding Humanity</h2></br><img class='apr' src='img/findingHumanity.jpg'>";
                echo "</br>";
                echo "After escaping a stalled elevator into a zombie apocalypse, Emily must learn</br>";
                echo "how to trust people again or risk losing everything in this terrifying world...</br> ";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";
            }

             elseif($YourChosenGenre == 5){
                echo "<h7> <h2>Hi $CompleteName</h2> Love it, Mystery/Thriller is your chosen genre!<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Saving Hope</h2></br><img class='apr' src='img/savingHope.jpg'>";
                echo "</br>";
                echo "She had been the famous, sought-after teenage star of her generation. But like every star,</br>";
                echo "she was destined to fall. While doing a  </br>";
                echo "kidnapping scene for her latest movie, no one expected she would be gone for good. </br> ";
                echo "When she didn't return after the last take, everyone thought...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";

                echo "<br><h2>Confesion About Colton</h2></br><img class='apr' src='img/confession.jpg'>";
                echo "</br>";
                echo "Seven letters, seven confessions, seven clues. </br>";
                echo "Elliot Parker has what he needs to find out who killed his best friend.</br>";
                echo "But is he hunting down the killer? Or is the killer hunting him?...</br>";
            echo "Note: You cannot continue Reading this, as you're not paid.</br>";
                echo "</br>";
                echo "</br>";
            }

            


        }


        ?>
    </div>
    </div>
</center></div>
    
</body>
</html>