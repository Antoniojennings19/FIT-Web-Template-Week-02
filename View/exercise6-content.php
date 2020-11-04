<!-- Exercise JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
   
    <!-- Place Answer Here -->

      <p>How many sides on the dice?</p>
      <input id="diceSides">
      <p>How many times do you want to roll?</p>
      <input id="diceRollInput">
      <button id="button" onClick="diceRoll(document.getElementById('diceSides').value, document.getElementById('diceRollInput').value) ">Roll!</button>
      <p id="outcomeOne"></p>
      

      <script>
        
        //dice class (sides)
        class Dice{

          constructor(diceSideVal){

            this.side = diceSideVal;
            
          }

          roll(){

            var loopIt = (Math.floor(Math.random() * this.side) + 1);
            return loopIt;
          }
        }

        //diceRoll function
        function diceRoll(sideDice, rollDice){

          var userDie = new Dice(sideDice);
          
          var userRoll = 0;
          var intResult = 0;
          var strResult = "";

          for(index = 0; index < rollDice; index++){          
            userRoll = userDie.roll();
            intResult += userRoll;
            strResult += " " + userRoll;
          }

          document.getElementById("outcomeOne").innerHTML = "Rolls: " + strResult + " Total: " + intResult;
          
        }
      
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
     <!-- Place Answer Here -->

<!-- Not Done (F1)

     <p>How many sides on the dice?</p>
      <input id="diceSidesCheat">
      <p>How many times do you want to roll?</p>
      <input id="rollDiceCheat">
      <button id="button" onClick="diceRollCheat(document.getElementById('diceSidesCheat').value, document.getElementById('rollDiceCheat').value) ">Roll!</button>
      <p id="outcomeTwo"></p>
      

      <script>
        
        //dice class (sides)
        class CheatDice{

          constructor(diceCheatSideVal){

            this.side = diceCheatSideVal;
            //this.weight = weightVal;
          }

          rollCheat(){

            var loopIt = (Math.floor(Math.random() * this.side) + 1);
            return loopIt;

            //if(this.weight == 20)
          }
        }

        //diceRollCheat function
        function diceRollCheat(sideCheatDice, rollCheatDice){

          var userCheatDie = new CheatDice(sideCheatDice);
          
          var userCheatRoll = 0;
          var intCheatResult = 0;
          var strCheatResult = "";

          for(index = 0; index < rollCheatDice; index++){          
            userCheatRoll = userCheatDie.rollCheat();
            intCheatResult += userCheatDie;
            strCheatResult += " " + userCheatDie;

          }

          document.getElementById("outcomeTwo").innerHTML = "Rolls: " + strCheatResult + " Total: " + intCheatResult;
          
        }
      
      </script>
                         -->
    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->
