<x-app-layout>
<html>
<head>
  <title>User Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      color: white;
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

    .center-div {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Adjust the height as needed */
  padding: 20px; /* Adjust the padding as needed */
}



  </style>
</head>
<body>

@foreach($infos as $info )
<div class="center-div flex justify-between">
  <a href="{{route('info.show',$info->id)}}">{{$info->Name }}</a>
  <p>{{$info->created_at->diffforHumans() }}</p>

  </div>
@endforeach

  
</body>
</x-app-layout>