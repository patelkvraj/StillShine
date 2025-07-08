<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About | Still Shine</title>
  <link rel="icon" href="../images/Logo-StillShine.svg" type="image/svg" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="../index.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="../resp.css" />
</head>

<body class="body">
  <div class="page">
    <?php include '../component/header.php'; ?>
    <!-- Content -->
    <main class="main-content">
      <div class="content-wrap">
        <!-- Hero -->
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"></li>
            <li
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="d-block w-100"
                src="./images/recycle-trash-can.jpg"
                alt="First slide" />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="./images/recycle-sea.jpg"
                alt="Second slide" />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-bs-slide="prev">
            <span
              class="carousel-control-prev-icon"
              aria-hidden="true"></span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-bs-slide="next">
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"></span>
          </a>
        </div>
        <!-- Main content -->
        <div class="grid-item main">
          <p class="information">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum
          </p>
          <div class="information__border"></div>
          <button class="button about__button">All Categories</button>
        </div>
      </div>
    </main>
    <footer>
      <div class="content-wrap">
        <div class="footer__top">
          <div class="newsletter-and-navigation">
            <!--Newsletter-->
            <div class="newsletter">
              <p>
                Sign up to check out the latest products that go for sale and
                many more...
              </p>
              <label for="email__newsletter">Email address</label>
              <input
                id="email__newsletter"
                placeholder="  Email address"
                type="email" />
              <button class="button">SIGN UP</button>
            </div>
            <!--Navbar-->
            <div class="navbar__footer">
              <h4>Sitemap</h4>
              <p>All our pages</p>
              <nav class="navbar__footer__links">
                <ul class="flex_container_navbar_footer">
                  <li>
                    <a id="home_footer" class="link-nav_bar" href="../">
                      Home
                    </a>
                  </li>
                  <li>
                    <a
                      id="about_footer"
                      class="link-nav_bar"
                      href="../about/">
                      About
                    </a>
                  </li>
                  <li>
                    <a
                      id="contact_footer"
                      class="link-nav_bar"
                      href="../contact/">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!--Branding-->
          <div class="branding">
            <a class="logo" href="../">
              <img
                src="../images/Logo-StillShine.svg"
                alt="Still Shine logo" />
            </a>
            <p>Earn money and save the world at the same time.</p>
          </div>
        </div>
        <div class="legal__socialLinks">
          <!--Legal-->
          <div class="footer-legal horizontal-list">
            <!--Copyright-->
            <p>&copy; StillShine 2024</p>
            <!--Policies-->
            <p>Privacy policy</p>
            <p>Terms of use</p>
          </div>
          <!--Social Links-->
          <div class="social-links horizontal-list">
            <a href="https://www.facebook.com/" target="_blank">
              <img src="../images/icons/facebook.svg" />
            </a>
            <a href="https://www.instagram.com/" target="_blank">
              <img src="../images/icons/instagram.svg" />
            </a>
            <a href="https://www.youtube.com/" target="_blank">
              <img src="../images/icons/youtube.svg" />
            </a>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="../script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>