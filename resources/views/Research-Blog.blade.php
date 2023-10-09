<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>Research-Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
            <a class="navbar-brand navbar-logo mx-5" href="#">
                <img src="{{asset('Images/yellowlogo.png')}}" alt="Logo" height="70">
            </a>
            <button class="navbar-toggler me-5 buttonbg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle text-white nav-text" href="./Company.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a> -->
                        <a class="text-white  nav-link dropdown-toggle  nav-text" href="{{url('/company')}}">Company</a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li class="mb-2"><a class="dropdown-item text-white nav-text" href="{{url('/company#about')}}">About Us</a></li>
                            <li class="mb-2" ><a class="dropdown-item text-white nav-text" href="{{url('/company#mission')}}">Mission Statement</a></li>
                            <li class="mb-2"><a class="dropdown-item text-white nav-text" href="{{url('/company#leadership')}}">Leadership</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle text-white nav-text" href="./Product.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a> -->
                        <a class="text-white  nav-link dropdown-toggle  nav-text" href="{{url('/product')}}">Product</a>
                        <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdown">
                            <li class="mb-2"><a class="dropdown-item text-white nav-text"  href="{{url('/product#outlawai')}}">Outlaw AI</a></li>
                            <li class="mb-2"><a class="dropdown-item text-white nav-text" href="{{url('/product#outlaw-services')}}">Outlaw Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white nav-text" href="{{url('/contact-us')}}">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white nav-text" href="./Careers.html">Careers</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white nav-text" href="{{url('/research-blog')}}">Research/Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="{{url('/contact-us')}}"><button type="button" class="btn  nav-button">Book A Demo</button></a>
                      </li>

                </ul>
            </div>
        </nav>
        </div>
    <div class="custom-bg">
        <div class="poster-overlay"></div>
        <div class="centered-text">
            Research-Blog
        </div>
    </div>
    <div class="bg-dark">
        <header class="bg-dark flex jutify-between items-center py-5 px-10 mb-3">
            <h1 class="text-danger">My Blog</h1>
            <a href="{{ route('login')}}" class="btn btn-danger float-end ">Create a New Blog Post</a>
        </header>
        <div class="bg-dark">
            <div class="container">
                @foreach ($blogPosts as $post)
                <div class="blog-post bg-dark text-white mb-3">
                    <h2 class="text-danger">{{ $post->title }}</h2>
                    <hr>
                    <p style=" overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{ $post->content }}</p>
                    <div class="tags">
                        <!-- Update the URL to point to the specific blog post page -->
                        <a href="{{ route('posts.readMore', ['id' => $post->id, 'title' => $post->title, 'content' => $post->content]) }}" class="text-danger" style="background-color: #8d99ae; text-decoration: none; font-weight: bold; padding: 9px;">Read more...</a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
        {{-- @endsection --}}

    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </html>




