<x-app-layout>

    <style>
        .modified-container {
  max-width: 1140px;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 576px) {
  .modified-container {
    width: 540px;
  }
}

@media (min-width: 768px) {
  .modified-container {
    width: 720px;
  }
}

@media (min-width: 992px) {
  .modified-container {
    width: 960px;
  }
}

@media (min-width: 1200px) {
  .modified-container {
    width: 1140px;
  }
}
        .table {
          width: 100%;
          margin-bottom: 1rem;
          color: #212529;
          border-collapse: collapse;
        }

        .table th,
        .table td {
          padding: 0.75rem;
          vertical-align: top;
          border-top: 1px solid #dee2e6;
        }

        .table thead th {
          vertical-align: bottom;
          border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
          border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
          padding: 0.3rem;
        }

        .table-bordered {
          border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
          border: 1px solid #dee2e6;
          text-align: center
        }

        .table-striped tbody tr:nth-of-type(odd) {
          background-color: rgba(0, 0, 0, 0.05);
        }
      </style>
<div class="modified-container" style="margin-top: 40px">


      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>UserType</th>
             <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)

          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->userType}}</td>

            <td>
                <form action="{{ route('user.delete', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-danger-button type="submit" >Delete</x-danger-button>
                  </form>



                {{-- <x-danger-button-type-link :href="route('user.delete', $user->id)" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">{{ __('Delete') }}</x-danger-button-type-link> --}}
             </td>
          </tr>
         @endforeach
          <!-- Additional table rows -->
        </tbody>
      </table>
</div>


</x-app-layout>
