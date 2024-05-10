
document.getElementById("userLookupForm").addEventListener("submit", function(event) {
  event.preventDefault();

  var xhr = new XMLHttpRequest();

  // Retrieving the user ID and name from the form
  var userId = document.getElementById("userId").value;
  //var userName = document.getElementById("userName").value;

  // Setting up the AJAX request
  xhr.open("GET", "../model/Ajaxdb.php?name=" +userId, true);

  // Sending the AJAX request
  xhr.send();

  // Handling the AJAX response
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          // Parsing the JSON response
          var userData = JSON.parse(xhr.responseText);

          // Displaying the user information
          var userInfoDiv = document.getElementById("userInfo");
          userInfoDiv.innerHTML = "<p>User ID: " + userData.id + "</p> <p>User Name: " + userData.name + "</p><p>Location: " + userData.location + 
                                  "</p><p>Position: " + userData.position +"</p>";
      }
  };
});