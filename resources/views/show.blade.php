<x-app-layout>
<html>
<head>
  <h1>{{$info->Name }}</h1>
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

    .center-table {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30vh; /* Adjust the height as needed */
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 1500px; /* Adjust the maximum width as needed */
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #FF0000;
}

tr:hover {
  background-color: #FF0000;
}
.edit-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .edit-button:hover {
    background-color: #45a049;
  }



  </style>
</head>
<body>

<div class="center-table">
  <table>
    <thead>
      <tr>
        <th>Email</th>
        <th>Date Created</th>
        <th>Phone Number</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Number(Min5)</th>
        <th>Number(Max8)</th>
        <th>Whole Number</th>
        <th>Max whole number(100)</th>
        <th>Number Range(20-40)</th>
        <th>Instagram</th>
        <th>Picture</th>
        <th>User Id</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$info->Email }} </td>
        <td>{{$info->created_at->diffforHumans() }}</td>
        <td>{{$info->PhoneNumber }}</td>
        <td>{{$info->StartDate }}</td>
        <td>{{$info->EndDate }} </td>
        <td>{{$info->NumberMin5 }}</td>
        <td>{{$info->NumberMax8 }}</td>
        <td>{{$info->WholeNumber }}</td>
        <td>{{$info->MaxWhole }}</td>
        <td>{{$info->NumRange }} </td>
        <td>{{$info->Insta }}</td>
        <td><a href="{{$info->picture }}" target ="_blank">Picture</td>
        <td>{{$info->user_id }}</td>
      </tr>
      <tfoot>
    <tr>
      <td colspan="4">
      <a href="{{route('info.edit',$info->id)}}"> <button class= "edit-button">Edit</a>
      </td>
    </tr>
  </tfoot>
      <!-- Add more rows up to 15 as needed -->
    </tbody>
  </table>

</div>



  
</body>
</x-app-layout>