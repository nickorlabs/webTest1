<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>Company</title>
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
            Company
        </div>
    </div>
    <div class="container-fluid bg-dark pt-5">
        <div class="container">
        <div>
            <div class="text-danger company-heading mb-3 mt-3" id="about">About-Us</div>
            <div class="text-white company-para">Outlaw Research Labs is a team of passionate individuals sharing a single focus of dedication towards evolving the boundaries in the AI/ML space. Our team has extensive cybersecurity and engineering experience, collectively over 120 years, which has led us to focus on security around AI and its current landscape/threat-scape. As the world races to adopt new and emerging technologies driven by artificial intelligence, we bring our expertise to the forefront to protect against potential risks and threats.</div>
        </div>
        <div>
            <div class="text-danger company-heading mb-3 mt-3" id="mission">Mission Statement</div>
            <div class="text-white company-para">Our mission at Outlaw Research Labs is to protect the clients' data and emerging AI technology from any potential misuse or exploitation. As a trusted partner in the rapidly-evolving AI landscape, we are dedicated to providing the most resilient security solutions that are customized to exactly meet the unique needs of each client we serve. We put the "Eye" in AI, serving as the vigilant protector of valuable assets for each client that works with us.</div>
        </div>
        <div class="container">
            <div class="text-danger company-heading mb-3 mt-3" id="leadership">Leadership</div>
                <div >
                    <div class="text-danger mt-5 mb-5 text-center leadership-subheading">Founders</div>
                    <div class="row">
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Nicholas Grant</h5>
                                  <p class="card-text text-center">Chief Executive Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Nicholas Grant</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Executive Officer</h6>
                                    brings over 20 years of Information Security expertise and has secured the electronic footprint of economic cornerstones such as Lockheed Martin, Bank of America, and the Federal Reserve.. Nickolas authored the book Unified Communication Forensics: Anatomy of Common UC Attacks while he served as a Subject Matter Expert of  security at Lockheed Martin. At Outlaw Research Labs, he guides the company's mission to protect client data and AI technologies, cultivates a high-performing team, and aligns security initiatives with business objectives. Nicholas's vision is to pioneer the next frontier of cybersecurity, driving societal change through the decentralization of power as we propel ourselves to a more equitable future
                                  </div>

                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">James Allee</h5>
                                  <p class="card-text text-center">Chief Research & Development Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">James Allee</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Research & Development Officer</h6>
                                  has 30+ years of experience in Information Technologies & Cybersecurity including Offensive, Defensive, and Investigative roles at companies such as Fortinet, RiskIQ, DarkOwl, Coalfire, and Institutional Cash Distributors. As a former member of the 'US National Video Game Team' James's passionate curiosity brings a gamer’s mentality to the world of Threat Hunting, Detection, and Elimination, and he strongly advocates for the gamification of cybersecurity, including the concept of 'Defending the Base' for the Blue Team (Defenders). At Outlaw Research Labs, Mr. Allee is responsible for guiding R&D efforts and product roadmaps around AI/ML security solutions and the Outlaw AIaaS platform. He is dedicated to securing the AI/ML sector in order to safely enable the advancement of the next digital frontier.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">
                                  <h5 class="card-title text-center">John F. Horsfield</h5>
                                  <p class="card-text text-center">Chief Experience Officer </p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">John F. Horsfield</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Experience Officer </h6>
                                  is committed to excellence in customer service and innovation in every way. He seamlessly aligns customers' goals with their needs, mapping journeys and fostering a culture of empathy alongside research-based experimentation. Thanks to his expertise in data analysis, he optimizes the customer experience and drives AI innovation. As a Startup Star, John’s leadership contributed to major revenue growth for several healthcare SaaS companies. John's commitment to customer-centric innovation drives meaningful, evidenced-based change that works while incorporating transformative technologies for a better future for all. John earned a Bachelor of Science in Psychology from City College of New York in 2012.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Darwin Lopez</h5>
                                  <p class="card-text text-center">Chief Artificial Intelligence Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Darwin Lopez</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Artificial Intelligence Officer</h6>
                                  specializes in artificial intelligence and cybersecurity. His many years of expertise have helped him develop the AI roadmap and business model and Darwin is at the forefront of cutting-edge research and algorithmic advancements. His 18-year tenure in cybersecurity includes pioneering adversarial simulation operations. Beyond work, Darwin enjoys skateboarding and the outdoors. His passion turned to his profession as he merges his hobbies with his dedication to AI and cybersecurity. With unwavering commitment, Darwin shapes the future of AI, safeguards against cyber threats, and finds fulfillment in personal pursuits.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Devin Maness</h5>
                                  <p class="card-text text-center">Chief Information Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Devin Maness</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Information Officer</h6>
                                  brings 25 years of cyber security  experience exceling in risk assessment, strategy, and security program establishment. From his Navy service and time at the Federal Reserve to his leadership roles at McAfee, Bank of America, and Hewlitt Packard, Devin has demonstrated expertise in safeguarding organizations and the security of our nation. Devin lives by two philosophies: the first, “Iron sharpens iron,” and the second, “Those with the power to protect should protect those who cannot protect themselves.” He adheres to these philosophies in his personal life through his volunteer work on the security team at his church and in his professional life by advising his clients on strengthening their security posture.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Kaden Payne</h5>
                                  <p class="card-text text-center">Chief Technology Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Kaden Payne</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Technology Officer</h6>
                                  is a dedicated IT professional and AI security entrepreneur with a robust background in cybersecurity and IT operations. Holding a degree from BYU-Idaho and having obtained several top-tier industry certifications, Kaden has spent the last decade developing IT and security programs. Known for his work in threat hunting and his leadership in constructing security operations centers, Kaden has consistently made his mark in the tech industry. As the CTO of Outlaw Research Labs, his second startup, Kaden is leveraging his expertise to realize his vision of fostering a safer digital world through the implementation of robust AI security solutions.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Dominick Garey</h5>
                                  <p class="card-text text-center">Chief Transformation Officer </p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Dominick Garey</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Transformation Officer </h6>
                                  is a visionary specializing in AI and Web 3.0. With expertise in product selection and business process optimization, he drives innovation in the industry. Notably, as CTO of Unbounded Earth and Co-Founder of AdaGotchi, Dominick plays a pivotal role in mainstreaming web 3.0. His skills in blockchain development and web development make him a sought-after expert. Outside work, Dominick enjoys family time and works towards creating positive change. Scuba diving, rock climbing, and chess fuel his passions. Guided by the principle of treating others kindly, Dominick brings integrity to his work and strives to make a lasting impact.
                                  </div>
                                </div>
                              </div>
                         </div>
                         <div class="col-md-4 mt-3 mb-3 ">
                            <div class="card box" style="width: 18rem;">
                                <div class="card-body ">
                                    <div>
                            <img src="Images/image1.jpg"  class="mt-5 mb-5"  alt="image1" height="100px" width="100px">

                                  <h5 class="card-title text-center">Kareem Mitchell</h5>
                                  <p class="card-text text-center">Chief Evangelist Officer</p></div>
                                  <div class="description">
                                    <h5 class="card-title text-center mt-3 mb-3">Kareem Mitchell</h5>
                                  <h6 class="card-text text-center mt-3 mb-3">Chief Evangelist Officer</h6>
                                  advocates for Outlaw Research Lab’s offerings. While at industry leading Palo Alto Networks and Varonis, he led presales engineering efforts by aggressively driving new business and revenue growth. As a self-taught information security analyst with Comptia Security + certification,Kareem brings expertise to the field. Outside work, he enjoys working out, grilling, and spending quality time with family. Committed to an equitable future and a healthier planet, Kareem strives to leave a positive legacy for the next generation through his dedication and passion for Outlaw Research Lab's mission.
                                  </div>
                                </div>
                              </div>
                         </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
