<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <nav>


    <ul class="nav nav-pills">
        {{-- brand --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('brand.index') }}" role="button" aria-expanded="false">Manage Brand</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('brand.index') }}">index</a></li>
            <li><a class="dropdown-item" href="{{ route('brand.create') }}">create</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        {{-- category link --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manage Category</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('category.index') }}">index</a></li>
                <li><a class="dropdown-item" href="{{ route('category.create') }}">create</a></li>
                <li><hr class="dropdown-divider"></li>
            </ul>
          </li>

        {{-- product link --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manage Product </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('product.index') }}">index</a></li>
                <li><a class="dropdown-item" href="{{ route('product.create') }}">create</a></li>
                <li><hr class="dropdown-divider"></li>
            </ul>
          </li>

        {{-- supplier link --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manage Supplier</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('supplier.index') }}">index</a></li>
                <li><a class="dropdown-item" href="{{ route('supplier.create') }}">create</a></li>
                <li><hr class="dropdown-divider"></li>
            </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </nav>

      <div class="container">
            @yield('content')
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>


</body>
</html>
