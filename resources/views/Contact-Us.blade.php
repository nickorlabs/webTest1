<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="shortcut icon" href="./assets/Images/yellologo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/add4377ce3.js" crossorigin="anonymous"></script>
    {!!htmlScriptTagJsApi()!!}
    <title>Contact-Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<!-- header -->
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
                <a class="nav-link text-white nav-text" href="{{url('/careers')}}">Careers</a>
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
            Contact-Us
        </div>
    </div>
    <div class="container-fluid  form bg-dark">
        <div class="row pt-3 ">
            <div class="col-md-3 "></div>
            <div class="col-md-6">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label text-danger">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label text-danger">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="company" class="form-label text-danger">Company</label>
                        <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="phone" class="form-label text-danger">Phone No</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-danger">What problem are you trying to solve/Reason you are contacting us?</label>
                       <textarea class="form-control" id="message" maxlength="250" rows="3" name="message"></textarea>
                    </div>
                    <div>{!!htmlFormSnippet()!!}</div>
                    <div class="mb-3">
                        <button type="submit" class="button text-danger fw-bold">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!-- ... (your footer and scripts) ... -->

                  <div class="row">
                    <p class="text-danger text-center col-8 fw-bold mt-3">Also get in touch with us on :</p>
                    <div class="col-4">
                    <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGUhAbQG-oxBQAAAYrmaDpoegUe79uvR3tU6NGZT4pq1nLC4_BhLsu4ay2WGpiWQaLbc7E1-J7mOShKe2u4fwtpzSs7-MqrUaehwhrfDwpSMpus0bYX38uAUloIeNOETgDUJEg=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmarketing-team-orlabs-8b2273273%2F"><i class="fa-brands fa-linkedin-in" style="color:rgb(255, 255, 255); font-size: 30px; border-radius: 50%; background-color: rgb(12, 12, 87); padding: 10px;"></i></a>
                    <a href="https://twitter.com/orlabstech"><i class="fa-brands fa-x-twitter" style="color:rgb(255, 255, 255); font-size: 30px; border-radius: 50%; background-color: rgb(12, 12, 87); padding: 10px;"></i></a>
                   </div>
            </div></div>
            <div class="col-md-3"></div>
        </div>
    </div>
    </body>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
