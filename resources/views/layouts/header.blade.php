<nav class="navbar navbar-default bootsnav navbar-fixed">
        <div class="navbar-top bg-grey fix">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="navbar-callus text-left sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href=""
                        ><i class="fa fa-phone"></i> Call us: 1234 5678 90</a
                      >
                    </li>
                    <li>
                      <a href=""
                        ><i class="fa fa-envelope-o"></i> Contact us:
                        kursus@kita.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="navbar-socail text-right sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href="https://www.facebook.com" target="_blank"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://twitter.com" target="_blank"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com" target="_blank"
                        ><i class="fa fa-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com" target="_blank"
                        ><i class="fa fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://youtube.com/@codeworshipper"
                        target="_blank"
                        ><i class="fa fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="top-search">
          <div class="container">
            <div class="input-group">
              <span class="input-group-addon"
                ><i class="fa fa-search"></i
              ></span>
              <input type="text" class="form-control" placeholder="Search" />
              <span class="input-group-addon close-search"
                ><i class="fa fa-times"></i
              ></span>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="attr-nav">
            <ul>
              <li class="search">
                <a href="#"><i class="fa fa-search"></i></a>
              </li>
            </ul>
          </div>
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
              <img src="assets/images/logo.png" class="logo" alt="" />
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/service">Service</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="/portfolio">Portfolio</a></li>
              <li><a href="{{route('auth')}}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>