<x-app-layout>
<html>
<head>
  <title>User Information</title>
  <style>
    /* body {
      font-family: Arial, sans-serif;
      margin: 0;
      color: black;
    }

    h1 {
      text-align: center;
      color: black;
      font-size: 40px;
    }
    .container label{
      color: black;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    .center-div {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 20px;
*/
.profile-container {
      width: 300px;
      margin: 0 auto;
      text-align: center;
    }

    .profile-photo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 20px auto;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-details {
      font-size: 16px;
      display: flex;
    justify-content: center;
    }

    .profile-icon {
      width: 24px;
      height: 24px;
      margin-right: 5px;
      vertical-align: middle;
    }

    .profile-link {
      text-decoration: none;
      color: #000;
    }
    .see-more-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .see-more-link:hover {
      background-color: #0056b3;
    }

    .see-more-link span {
      margin-left: 5px;
    }
  </style>
</head>
<body>



    <div class="profile-container">


        <img class="profile-photo" src="{{asset('storage/'.$info->picture)}}" alt="Profile Photo">
        <h1 class="profile-name">{{$info->Name}}</h1>
        <p class="profile-details">Email Address: {{$info->Email}}</p>
        <p class="profile-details">Phone Number:  {{$info->PhoneNumber}}</p>
        <p class="profile-details">
          <a class="profile-link" href="{{$info->picture}}">
            <img class="profile-icon" src="{{asset('icons/instaicon.png')}}" alt="Instagram Icon">
          </a>
        </p>
        <p class="profile-date">{{$info->created_at->diffforHumans() }}</p>
        <br>
        <a class="see-more-link" type="btn" href="{{route('info.show',$info->id)}}">
            <img class="profile-icon" src="{{asset('icons/details.png')}}" alt="See Details">
            <span>See Details</span>
          </a>
      </div>





</body>
</x-app-layout>
