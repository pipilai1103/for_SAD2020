<!-- Navigation Start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Backend</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('admin.website.edit') }}">Website</a>
                <a class="nav-item nav-link" href="{{ route('admin.home.edit') }}">Home</a>
                <a class="nav-item nav-link" href="{{ route('admin.about.edit') }}">About</a>
                <a class="nav-item nav-link" href="{{ route('admin.product.index') }}">Products</a>
                <a class="nav-item nav-link" href="{{ route('admin.store.edit') }}">Store</a>
                <a class="nav-item nav-link" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navigation End  -->