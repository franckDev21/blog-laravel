<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevBlog - Franck Tio's Personal Blog</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

   <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body class="light-theme">

  <!--
    - #HEADER
  -->

  <header>

    <div class="container">

      <nav class="navbar">

        <a href="#">
          <img src="{{ asset('images/logo-light.svg') }}" alt="Devblog's logo" width="150" height="40" class="logo-light">
          <img src="{{ asset('images/logo-dark.svg') }}" alt="Devblog's logo" width="150" height="40" class="logo-dark">
        </a>

        <div class="btn-group">

          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

        <div class="flex-wrapper">

          <ul class="desktop-nav">

            <li>
              <a href="#" class="nav-link">Home</a>
            </li>

            <li>
              <a href="#" class="nav-link">About Me</a>
            </li>

            <li>
              <a href="#" class="nav-link">Contact</a>
            </li>

          </ul>

          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          @auth
            <span x-data="{ open: false }"  @click.outside="open = false" @close.stop="open = false" class="profil-link relative" >
              <i @click="open = !open" class="las la-user-circle cursor-pointer"></i>
              <span 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                x-show="open" 
                class="menu-login absolute rounded-md shadow-lg top-full -left-14 bg-white overflow-hidden">
                <a href="{{ route('profil.index') }}" class="inline-block px-10 py-2 w-full hover:bg-indigo-100 hover:text-indigo-500 text-gray-500 font-semibold">profil</a>
               <!-- Authentication -->
               <form method="POST" class="inline" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" class="font-semibold text-center w-full"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
                </form>
              </span>
            </span>
          @else
            <a class="login-link" href="{{ route('login') }}">login</a>
          @endauth

        </div>

        <div class="mobile-nav">

          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="wrapper">

            <p class="h3 nav-title">Main Menu</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">About Me</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>

              @auth
                <a class="profil-link" href="{{ route('login') }}">
                  <i class="las la-user-circle" style="font-size: 2.4rem; color:hsl(229, 76%, 66%);"></i>
                </a>
              @else
                <a class="login-link" href="{{ route('login') }}">login</a>
              @endauth
            </ul>

          </div>

          <div>

            <p class="h3 nav-title">Topics</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Database</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Accessibility</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Web Performance</a>
              </li>
            </ul>

          </div>

        </div>

      </nav>

    </div>

  </header>





  <main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            Hi, I'm <b>Franck &nbsp;Tio</b>.
            <br>Web Developer
          </h1>

          <p class="h3">
            Specialized in <abbr title="Accessibility">a11y</abbr>
            and Core Web Vitals
          </p>

          <div class="btn-group">
            <a href="#" class="btn btn-primary">Contact Me</a>
            <a href="#" class="btn btn-secondary">About Me</a>
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="https://avatars.githubusercontent.com/u/82069062?s=400&u=18d3058fff7a59a206d29525726521e1f42ca7c6&v=4" alt="Julia walker" class="hero-img">
            {{-- <img src="{{ asset('images/hero.png') }}" class="hero-img" alt=""> --}}
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>





    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-1.png') }}" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3>
                  <a href="#" class="h3">
                    Building microservices with Dropwizard, MongoDB & Docker
                  </a>
                </h3>

                <p class="blog-text">
                  This NoSQL database oriented to documents (by documents like JSON) combines some of the features from
                  relational
                  databases, easy to use and the multi-platform is the best option for scale up and have fault
                  tolerance, load balancing,
                  map reduce, etc.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-2.png') }}" alt="Fast web page loading on a $20 feature phone" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Fast web page loading on a $20 feature phone</a></h3>

                <p class="blog-text">
                  Feature phones are affordable (under $20-25), low-end devices enabling 100s of millions of users in
                  developing countries
                  to leverage the web. Think of them as a light version of a smart phone.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('/images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-12-10">Dec 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-3.png') }}" alt="Accessibility Tips for Web Developers" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Accessibility Tips for Web Developers</a></h3>

                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-4.png') }}" alt="Dynamically Securing Databases using Hashicorp Vault"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Dynamically Securing Databases using Hashicorp Vault</a></h3>

                <p class="blog-text">
                  Nowadays, it's hard to profoundly talk about security in the IT industry, since it has to be
                  considered on so many
                  different levels: from securing code chunks, securing containers, up to securing complex
                  infrastructures and defining
                  strong authorization and authentication policies across the enterprise.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-5.png') }}"
                  alt="Adaptive Loading - Improving Web Performance on low-end devices" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Adaptive Loading - Improving Web Performance on low-end devices</a></h3>

                <p class="blog-text">
                  Adaptive Loading: Do not just respond based on screen size, adapt based on actual device hardware.
                  Any user can have a slow experience. In a world with widely varying device capabilities, a "one-size"
                  fits all
                  experience may not always work. Sites that delight users on high-end devices can be unusable on
                  low-end ones,
                  particularly on median mobile and desktop hardware and in emerging markets.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-10">Nov 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-6.png') }}"
                  alt="Don't Develop Just for Yourself - A Developer's Checklist to Accessibility" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Don't Develop Just for Yourself - A Developer's Checklist to Accessibility</a>
                </h3>

                <p class="blog-text">
                  We, as developers, tend to develop sites unconsciously for people like ourselves. If we don't actively
                  pay attention,
                  the sites are often accessible only for certain types of people: Sighted mouse-users, who have good
                  fine motor skills
                  and are good at using computers.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-25">Oct 25, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-7.png') }}"
                  alt="Building a Restful CRUD API with Node JS, Express, and MongoDB" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Building a Restful CRUD API with Node JS, Express, and MongoDB</a></h3>

                <p class="blog-text">
                  Application Programming Interface is the abbreviation for API. An API is a software interface that
                  enables two apps to
                  communicate with one another. In other words, an API is a messenger that sends your request to the
                  provider and then
                  returns the response to you.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker kk" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-15">Oct 15, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-8.png') }}" alt="Monitoring Performance with the PageSpeed Insights API"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Monitoring Performance with the PageSpeed Insights API</a></h3>

                <p class="blog-text">
                  The PageSpeed Insights API provides free access to performance monitoring for web pages and returns
                  data with
                  suggestions for how to improve. The V5 API includes lab data from Lighthouse and real-world data from
                  the Chrome User
                  Experience Report (CrUX).
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('/images/author.png') }}"  alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-10-03">Oct 3, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset("images/blog-9.png") }}" alt="The best web accessibility tools for developers in 2021"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">The best web accessibility tools for developers in 2021</a>
                </h3>

                <p class="blog-text">
                  The quality of the tools you use defines the speed with which you can diagnose and resolve problems.
                  Each year the landscape changes dramatically in web technologies, and of late the tooling for
                  accessibility is no
                  exception.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-09-13">Sep 13, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="{{ asset('images/blog-10.png') }}"
                  alt="How to connect a React frontend with a NodeJS/Express backend" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">How to connect a React frontend with a NodeJS/Express backend</a></h3>

                <p class="blog-text">
                  The MERN (MongoDB, Express, React, NodeJS) stack is very popular for making full stack applications,
                  utilizing
                  Javascript for both the backend and frontend as well as a document-oriented or non relational database
                  (MongoDB),
                  meaning that it's structured like JSON rather than a large excel sheet like SQL databases are.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="{{ asset('images/author.png') }}" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia walker</a>

                    <p class="text-sm">
                      <time datetime="2021-09-21">Sep 21, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <button class="btn load-more">Load More</button>

        </div>





        <!--
          - ASIDE
        -->

        <div class="aside">

          <div class="topics">

            <h2 class="h2">Topics</h2>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="server-outline"></ion-icon>
              </div>

              <p>Database</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>

              <p>Accessibility</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <p>Web Performance</p>
            </a>

          </div>

          <div class="tags">

            <h2 class="h2">Tags</h2>

            <div class="wrapper">

              <button class="hashtag">#mongodb</button>
              <button class="hashtag">#nodejs</button>
              <button class="hashtag">#a11y</button>
              <button class="hashtag">#mobility</button>
              <button class="hashtag">#inclusion</button>
              <button class="hashtag">#webperf</button>
              <button class="hashtag">#optimize</button>
              <button class="hashtag">#performance</button>

            </div>

          </div>

          <div class="contact">

            <h2 class="h2">Let's Talk</h2>

            <div class="wrapper">

              <p>
                Do you want to learn more about how I can help your company overcome problems? Let us have a
                conversation.
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>

          <div class="newsletter">

            <h2 class="h2">Newsletter</h2>

            <div class="wrapper">

              <p>
                Subscribe to our newsletter to be among the first to keep up with the latest updates.
              </p>

              <form action="#">
                <input type="email" name="email" placeholder="Email Address" required>

                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - #FOOTER
  -->

  <footer>

    <div class="container">

      <div class="wrapper">

        <a href="#" class="footer-logo">
          <img src="{{ asset('images/logo-light.svg') }}" alt="DevBlog's Logo" width="150" height="40" class="logo-light">
          <img src="{{ asset('images/logo-dark.svg') }}" alt="DevBlog's Logo" width="150" height="40" class="logo-dark">
        </a>

        <p class="footer-text">
          Learn about Web accessibility, Web performance, and Database management.
        </p>

      </div>

      <div class="wrapper">

        <p class="footer-title">Quick Links</p>

        <ul>

          <li>
            <a href="#" class="footer-link">Advertise with us</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

      </div>

      <div class="wrapper">

        <p class="footer-title">Legal Stuff</p>

        <ul>

          <li>
            <a href="#" class="footer-link">Privacy Notice</a>
          </li>

          <li>
            <a href="#" class="footer-link">Cookie Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms Of Use</a>
          </li>

        </ul>

      </div>

    </div>

    <p class="copyright">
      &copy; Copyright 2022 <a href="#">franckDev21</a>
    </p>

  </footer>





  <!--
    - custom js link
  -->
  <script src="{{ asset('js/home.js') }}"></script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
