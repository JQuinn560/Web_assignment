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
      color: white;
      font-size: 40px;
    }
    .container label{
      color: white;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
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

    .form-row {
      display: flex;
      justify-content: space-between;
    }

    .form-row .form-group {
      flex-basis: calc(50% - 10px);
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
  <div class="container">
    <h1>User Information</h1>
    <form>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="start-date">Start Date:</label>
          <input type="date" id="start-date" name="start-date" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="end-date">End Date:</label>
          <input type="date" id="end-date" name="end-date" required>
        </div>
        <div class="form-group">
          <label for="min-number">Number (minimum 5 digits):</label>
          <input type="number" id="min-number" name="min-number" min="10000" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="max-number">Number (maximum 8 digits):</label>
          <input type="number" id="max-number" name="max-number" max="99999999" required>
        </div>
        <div class="form-group">
          <label for="whole-number">Whole Number (greater than 0):</label>
          <input type="number" id="whole-number" name="whole-number" min="1" step="1" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="max-whole-number">Max Whole Number (maximum value 100):</label>
          <input type="number" id="max-whole-number" name="max-whole-number" max="100" required>
        </div>
        <div class="form-group">
          <label for="instagram-url">Instagram URL:</label>
          <input type="url" id="instagram-url" name="instagram-url" placeholder="Enter your Instagram URL" required>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group">
        <label for="number-range">Number in Range (20 to 40):</label>
        <input type="number" id="number-range" name="number-range" min="20" max="40" required>
      </div>
        <div class="form-group">
          <label for="picture">Upload Picture:</label>
          <input type="file" id="picture" name="picture" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <input type="submit" value="Submit">
        </div>
      </div>
    </form>
  </div>
</body>
</x-app-layout>