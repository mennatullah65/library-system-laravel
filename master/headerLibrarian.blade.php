<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/" style="color:brown;font-size:25px;font-family:'Abel';font-weight:bolder;">Booky</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/profile">profile <span class="sr-only">(current)</span></a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="/profile">profile</a>
      </li>
      -->
      <li class="nav-item">
        <a class="nav-link" href="/contact_usLibrarian">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addbooks">Add books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/librarianbooks">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      -->
    </ul>
     <!--<form class="form-inline my-2 my-lg-0" action ="/search" method="POST" enctype="multipart/file-data">
      @csrf
      <input class="form-control mr-sm-2"name="word" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="/search">Search</a></button>
    </form>-->
    <div class="form-inline my-2 my-lg-0">
    {!!Form::open(['url'=>'/search'])!!}
    {{Form::text('word','',['class'=>'form-control mr-sm-2','placeholder'=>'search'])}}
    {{Form::submit('Search',['class'=>'btn btn-outline-success my-2 my-sm-0'])}}
    {!!Form::close()!!}
    </div>
  </div>
</nav>