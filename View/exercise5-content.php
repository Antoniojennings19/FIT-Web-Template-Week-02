<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->

      <!-- input and p tag -->
      <label for="brainInput">Enter Text:</label>
      <input id="brainInput">
      <p id="brainwashDisplay"></p>
      <button id="brainwashButton" onClick="getKeyword(document.getElementById('brainInput').value)">Search</button>

      <script>

        function getKeyword(input)
        {
          var keyword = input.indexOf("nuggies");
          var string1 = input.substring(keyword);

          document.getElementById("brainwashDisplay").innerHTML = string1;
        }

      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
      <label for="itemInput">Inventory Item:</label>
      <input id="itemInput">
      <button id="itemButton" onClick="getInventory(document.getElementById('itemInput').value)">Seach Inventory</button>
      <p id="inventoryItem"></p>
        
      <label for="quantityInput">Inventory Quantity:</label>
      <input id="quantityInput">
      <button id="quantityButton" onClick="getQuantity(document.getElementById('quantityInput').value)">Set Quantity</button>
      <p id="itemQuantity"></p>

      <script>

        var myGames = ["FFXIV", "Overwatch", "Sword Art Online", "Nier: Automata"];
        var quantityItem = ["5", "10", "101", "2000"];
        var inputVar = 0;

        function getInventory(input)
        {
          document.getElementById("inventoryItem").innerHTML = myGames[input] + " | Quantity: " + quantityItem[input];
          inputVar = input;
        }
      
        function getQuantity(quantity)
        {
          document.getElementById("itemQuantity").innerHTML = myGames[inputVar] + " has a quantity of " + (quantityItem[inputVar] = quantity);
        }

      </script>
        
    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>
    <!-- Place Answer Here -->
      
      

    <!-- Place Answer Here -->
  </div>
<!-- Question F -->

