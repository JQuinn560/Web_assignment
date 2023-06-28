<x-app-layout>
<html>
<head>
  <title>User Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;

    }

    h1 {
      text-align: center;
      color: white
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      
    }

    .container label {
      color: white; /* Set the label color to white */
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container ">
    <h1>User Information</h1>
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date" name="start-date" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end-date" required>
      </div>
      <div class="form-group">
        <label for="min-number">Number (minimum 5 digits):</label>
        <input type="number" id="min-number" name="min-number" min="10000" required>
      </div>
      <div class="form-group">
        <label for="max-number">Number (maximum 8 digits):</label>
        <input type="number" id="max-number" name="max-number" max="99999999" required>
      </div>
      <div class="form-group">
        <label for="whole-number">Whole Number (greater than 0):</label>
        <input type="number" id="whole-number" name="whole-number" min="1" step="1" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</x-app-layout>