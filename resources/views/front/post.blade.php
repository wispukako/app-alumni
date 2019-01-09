<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $post->title }} | APP Alumni</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/blog-post.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">APP Alumni</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ URL::to('/') }}">Blog</span>
            </a>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/gallery') }}">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/admin/login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->title }}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{ $post->admins->username }}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $post->created_at }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{$post->image->thumbnail('large')}}" alt="">

          <hr>

          <!-- Post Content -->
          {!! $post->description !!}
          <hr>

          <!-- Comments Form -->
          <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="50"></div>

        </div>

        <!-- Sidebar Widgets Column -->


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=281117575235318&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  </body>

</html>
