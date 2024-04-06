<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Store Registration</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/breeze-css/css/breeze.min.css">
<style>
  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    font-weight: bold;
  }
  .form-group input[type="text"], 
  .form-group input[type="email"],
  .form-group input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Book Store Registration</h2>
  <form id="registrationForm">
    <div class="form-group">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="btn">Register</button>
  </form>
</div>

<script>
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form data
    const formData = new FormData(this);
    const formDataObject = {};
    formData.forEach(function(value, key) {
      formDataObject[key] = value;
    });

    // You can perform further actions like sending the form data to the server here
    console.log(formDataObject);

    // For demonstration, here we just clear the form
    this.reset();
  });
</script>

</body>
</html>
