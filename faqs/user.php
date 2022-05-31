
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug</title>
</head>
<header>

    </div>
    </header>
<body style = "background:url('background.jpg');padding:5px; background-size: cover; background-repeat: no-repeat;">
<div>
    <div>
    </div>
    <div >
        <h1> <font family = "Raleway, sans-serif" size = "45" color = "black"> Report other Users</font></h1>
        <div class="all">
            <form class="form" action="user.php" method="post">
            <h3 class="namefirst">What's Your Name?: </h3>
            <input class="writename" type="text" name="name">
            </br>
        </br>
         <h3 class="emailfirst">What's Your Email Address? : </h3>
            <input class="writeemail" type="text" name="email">
            </br>

             </br>
         <h3 class="userfirst">What's the username you want to report?(author's name) : </h3>
            <input class="writeuser" type="text" name="user">
            </br>

            <h3 class="bdayuna">Choose your issue: </h3>
                    <select class="choosenissue" name="issue" id="">
                        <option value="1">Plagiarizing Someone's Work</option>
                        <option value="2">Inappropriate Stories</option>
                        <option value="3">More</option>
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
            $EmailAddress =$_POST["email"];
            $Username =$_POST["user"];
            $YourChosenIssue=$_POST["issue"];

            if($YourChosenIssue == 1){
                echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Plagiarising Someone's Work</h2></br>";
                echo "</br>";
                echo "Oh no! Our Team will be reviewing the issue regarding this plagiarism. Thank you for notifying us. </br>";

                    echo "<h2>Dont worry, $Username account will now be reviewed by our team and will apply some fines if ever the author violates the rule.<br></h2>" ;
                       echo "</br>";
                echo "</br>";

            }

            if($YourChosenIssue == 2){
                echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Inappropriate Stories</h2></br>";
                echo "</br>";
                              echo "</br>";
                echo " Our Team will be reviewing the issue regarding this Inappropriate stories of the author. We will scrutinize the works that author made. Thank you for notifying us. </br>";

                    echo "<h2>Dont worry, $Username account will now be reviewed by our team and will apply some fines if ever the author violates the rule.<br></h2>" ;
                       echo "</br>";
                echo "</br>";
                }

          if($YourChosenIssue == 3){
                        echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                        echo "</br>";
                        echo "<br><h2>More..</h2></br>";
                echo "</br>";
                echo "If you wish to continue, make sure you're registered to premium features.</br>";


                    }
        }

        ?>
    </div>
    </div>
</center></div>
</body>
</html>