<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../Design/Ajax.css">
  <title>User Lookup</title>
</head>
<body>
  <div class="container">
    <h2>User Lookup</h2>
    <form id="userLookupForm">
      <div class="form-group">
        <label for="userId">User ID/NAME:</label>
        <input type="text" id="userId" name="userId" placeholder="Search by Id/Name" required>
      </div>
      <div class="form-group">
        <button id="getUserButton" type="submit">Search</button>
      </div>
    </form>
    <div id="userInfo"></div>
  </div>
  <script src="../controller/Ajax.js"></script>
</body>
</html>
