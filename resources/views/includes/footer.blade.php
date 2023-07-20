{{-- <footer class="py-3 border-top text-center">
    <p>
        © {{ config('app.name') }} {{ $date }}
    </p>
</footer> --}}

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© {{ config('app.name') }} {{ $date }}</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Главная</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Блог</a></li>
    </ul>
  </footer>
</div>