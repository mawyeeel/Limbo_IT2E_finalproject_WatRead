
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
        <h1> <font family = "Raleway, sans-serif" size = "45" color = "black"> Something's Not Working (Report a bug)</font></h1>
        <div class="all">
            <form class="form" action="bug.php" method="post">
            <h3 class="namefirst">What's Your Name?: </h3>
            <input class="writename" type="text" name="name">
            </br>
        </br>
         <h3 class="emailfirst">What's Your Email Address? : </h3>
            <input class="writeemail" type="text" name="email">
            </br>

            <h3 class="bdayuna">Choose your issue: </h3>
                    <select class="choosenissue" name="issue" id="">
                        <option value="1">Took too long to respond</option>
                        <option value="2">Something's popping out</option>
                        <option value="3">Missing Stories</option>
                        <option value="4">More</option>
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
            $YourChosenIssue=$_POST["issue"];

            if($YourChosenIssue == 1){
                echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Took too long to respond</h2></br>";
                echo "</br>";
                echo "Are you having trouble accessing Wattpad on the app? Is something not working quite right? </br>";
                echo " Bugs and temporary glitches tend to happen from time to time. </br>";
                  echo "  Before we begin investigating, we always recommend trying out these</br>";
                    echo "  troubleshooting steps as more often than not, most problems are likely due to a caching issue.</br>";
                      echo " Clearing that cache can fix the problem, and you can quickly return back to your Wattpad experience.  </br>";
                echo "</br>";
                echo "</br>";

            }

            if($YourChosenIssue == 2){
                echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                echo "</br>";
                echo "<br><h2>Something's popping out</h2></br>";
                echo "</br>";
                echo "Toggle your wi-fi/data connection off and on again, or try connecting to another wi-fi network.</br>";
                echo " Try logging out and back into your account, making sure to completely close the app.</br>";
                  echo "Try uninstalling and reinstalling the app.</br>";
                    echo " Make sure to write to us from the email that your account is linked to.</br>";
                echo "</br>";
                echo "</br>";
                }

          if($YourChosenIssue == 3){
                        echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                        echo "</br>";
                        echo "<br><h2>Missing Stories</h2></br>";
                        echo "</br>";
                        echo "maybe you're nor a premium user yet. Check our premium feautures first.</br>";
                        echo "</br>";
                        echo "</br>";
                    
                    }
          if($YourChosenIssue == 4){
                        echo "<h7> <h2>Hi $CompleteName</h2> Thank you! $EmailAddress will be use soon for an email we'll going to sent.<br></h7>" ;
                        echo "</br>";
                        echo "<br><h2>More..</h2></br>";
                        echo "</br>";
                        echo "If you're still having trouble, you can check out our Known Issues page to see if this is a bug that we're already working on </br>";
                        echo " or our Status page to see if we're currently experiencing an outage. You can also follow our Status Twitter! </br>";
                          echo "  Before we begin investigating, we always recommend trying out these</br>";
                            echo "  troubleshooting steps as more often than not, most problems are likely due to a caching issue.</br>";
                              echo " If this still doesn't help you with this issue, please submit a ticket and we will be happy to assist you. </br>";
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