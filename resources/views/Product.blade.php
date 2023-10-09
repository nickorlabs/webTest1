<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>Product</title>
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
            Product
        </div>
    </div>
    <!-- -----------------------------------OutlawAi-Section Start-------------------------------------- -->
    <div class="outlawai-outersection" id="outlawai">
        <div class="row bg-dark ">
            <div class="text-center text-danger mt-4 mb-3 outlawai-heading">Outlaw AI</div>
            <div class="col-md-4  text-danger text-center mt-md-5 outawai-section">
                <h1 class="pb-4">Redacted</h1>
                <p class="pb-4">Coming Soon</p>
            </div>
            <div class="col-md-4 text-danger text-center mt-md-5 outawai-section">
                <h1 class="pb-4">Redacted</h1>
                <p class="pb-4">Coming Soon</p>
            </div>
            <div class="col-md-4 text-danger text-center mt-md-5 outawai-section">
                <h1 class="pb-4">Redacted</h1>
                <p class="pb-4">Coming Soon</p>
            </div>
        </div>
    </div>
    <!-- -----------------------------------OutlawAi-Section End-------------------------------------- -->
    <!-- -----------------------------------OutlawServices-Section Start-------------------------------------- -->
    <div id="outlaw-services" class="bg-dark">
        <div class="container">
        <div class="row  ">
                <div class="services-heading text-center text-danger">Outlaw Services</div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">Threat Modeling </div>
                    <div class="outlaw-services-para text-white">An all-encompassing interview and interactive whiteboard session aimed at comprehending your business requirements and the AI/ML risk scenario. By conducting exploratory interviews and engaging in scenario-driven conversations, we will evaluate the comprehensive risks posed by the AI/ML landscape and your assets. The final output will provide an elaborate breakdown of potential threat avenues, their probabilities, consequences, affected assets, necessary measures for correction and restoration, as well as the countermeasures essential for optimizing resources and minimizing risks.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/Threat-Modeling-Graphic.png" class="ms-0 ms-sm-4 outlaw-services-image" height="400px" width="400px" alt="Threat Modeling"></div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">Risk Assessments </div>
                    <div class="outlaw-services-para text-white">A thorough examination of your ML Operations lifecycle and an extensive analysis of your most crucial ML models, aimed at assessing the existing risk posed by your AI/ML investments to the organization. This evaluation will also identify the necessary efforts and/or controls needed to enhance the situation.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/ML-Risk-Assessment-Graphic.png" class="ms-sm-4 ms-0 outlaw-services-image" height="400px" width="400px" alt="Risk Assessments"></div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">Red Team Assessments</div>
                    <div class="outlaw-services-para text-white">Our skilled Adversarial Machine Learning Research (AMLR) Team will will effectively simulate tactics, techniques, and procedures (TTPs) utilized by attackers (refer to the image below and the MITRE ATLAS framework) to evaluate the efficacy of your current personnel, workflows, and safeguards in detecting and thwarting these attacks.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/Red-Team-Assessment-Graphic.png" class="ms-sm-4 ms-0 outlaw-services-image" height="400px" width="400px" alt="Red Team Assessments"></div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">AI/ML Model Analysis </div>
                    <div class="outlaw-services-para text-white">Our security experts at ORLabs use a proprietary tool to analyze the model’s integrity through careful examination and verify the absence of threats (such as malware) and unauthorized alterations including bias within the existing AI/ML models.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/AIML-Model-Scanning-Graphic.png" class="ms-sm-4 ms-0 outlaw-services-image" height="400px" width="400px" alt="AI/ML Model Analysis"></div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">AI/ ML Incident Response </div>
                    <div class="outlaw-services-para text-white">Our engineers will seamlessly deploy and integrate ORLab’s MLDR product into the AI/ML ecosystem. This empowers the data science and security teams with the essential capabilities and insights needed to proactively mitigate attacks, enhance responsiveness, and optimize the efficiency of models.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/Expert-Training-Graphic.png" class="ms-sm-4  ms-0 outlaw-services-image" height="400px" width="400px" alt="AI/ ML Incident Response"></div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="outlaw-sevices-subheading text-danger">Expert Training </div>
                    <div class="outlaw-services-para text-white">Customized Training tailored to meet your enterprises personalized needs; from common Adversarial Machine Learning attack, effect countermeasures, or end-user security best practices; we will help fill out your team knowledge in this new era!</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 "><img src="Images/Expert-Training-Graphic.png" class="ms-sm-4 ms-0 outlaw-services-image" height="400px" width="400px" alt="Expert Training"></div>
        </div>
    </div>
    </div>
    <!-- -----------------------------------OutlawServices-Section End-------------------------------------- -->
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
