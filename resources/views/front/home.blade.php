<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APP Alumni</title>

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

        <!-- Blog Entries Column -->
        <div class="col-md-12">



                  <h1 class="my-4">
                    Blog Terbaru
                  </h1>

              @foreach ($posts as $post)
                  <!-- Blog Post -->
                  <div class="card mb-4">
                    <img class="card-img-top" height="200" src="{{$post->image->thumbnail('large')}}" alt="">
                    <div class="card-body">
                      <h2 class="card-title">{{ $post->title }}</h2>
                      <p class="card-text">
                      {{str_limit( strip_tags($post->description) , $limit = 500, $end = ' ...')}}
                    </p>
                      <a href="{{ URL::to('post/'.$post->id.'/'.$post->slug) }}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                      Posted on {{ $post->created_at }} by
                      <a href="#">{{ $post->admins->username }}</a>
                    </div>
                  </div>

              @endforeach

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            @if($posts->currentPage() != 1)
            <li class="page-item">
              <a class="page-link" href="{{ $posts->previousPageUrl() }}">&larr; Newer</a>
            </li>
            @endif
            @if($posts->hasMorePages())
            <li class="page-item">
              <a class="page-link" href="{{ $posts->nextPageUrl() }}">Older &rarr;</a>
            </li>
            @endif
          </ul>

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

  </body>

</html>
