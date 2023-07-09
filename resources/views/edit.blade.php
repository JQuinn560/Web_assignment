<x-app-layout>
<html>
<head>
  <title>Edit Info</title>
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
<form method= "POST" action = "{{ route('info.update', $info->id)}}" enctype="multipart/form-data">
  @csrf
  @method('patch')

  <div class="container">
    <h1>User Information</h1>
    
      <div class="form-row">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" value="{{$info->Name }}" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" value="{{$info->Email }}" name="email" placeholder="Enter your email address" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="start">Start Date:</label>
          <input type="date" id="start" value="{{$info->StartDate }}" name="start" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" value="{{$info->PhoneNumber }}" name="phone" placeholder="Enter your phone number" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="enddate">End Date:</label>
          <input type="date" id="enddate" value="{{$info->EndDate }}" name="enddate" required>
        </div>
        <div class="form-group">
          <label for="minnumber">Number (minimum 5 digits):</label>
          <input type="number" id="minnumber" value="{{$info->NumberMin5 }}" name="minnumber" min="10000" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="maxnumber">Number (maximum 8 digits):</label>
          <input type="number" id="maxnumber" value="{{$info->NumberMax8 }}" name="maxnumber" max="99999999" required>
        </div>
        <div class="form-group">
          <label for="wholenumber">Whole Number (greater than 0):</label>
          <input type="number" id="wholenumber" value="{{$info->WholeNumber }}" name="wholenumber" min="1" step="1" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="maxwholenumber">Max Whole Number (maximum value 100):</label>
          <input type="number" id="maxwholenumber" value="{{$info->MaxWhole }}" name="maxwholenumber" max="100" required>
        </div>
        <div class="form-group">
          <label for="instagramurl">Instagram URL:</label>
          <input type="url" id="instagramurl" value="{{$info->Insta }}" name="instagramurl" placeholder="Enter your Instagram URL" required>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group">
        <label for="number-range">Number in Range (20 to 40):</label>
        <input type="number" id="numberrange" value="{{$info->NumRange }}" name="numberrange" min="20" max="40" required>
      </div>
        <div class="form-group">
          <label for="picture">Upload Picture:</label>
          <input type="file" id="picture"  value="{{$info->picture }}"name="picture" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <input type="submit" value="Update">
        </div>
      </div>
    </form>
  </div>
</body>
</x-app-layout>