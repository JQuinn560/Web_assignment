<style>
    .alert {
      padding: 0.75rem 1.25rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: 0.25rem;
      text-align: center;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }
  </style>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
