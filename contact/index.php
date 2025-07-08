<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Still Shine</title>
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
    <!-- Main content -->
    <main class="main-content">
      <div class="content-wrap">
        <div class="grid-item main">
          <h1>Connect With Us</h1>
          <p class="message">
            Simply leave a message and we'll get right back to you.
          </p>
          <form>
            <label for="full_name">Full name*</label>
            <input id="full_name" placeholder="Full name*" /><br />
            <label for="phone_number">Phone number</label>
            <input id="phone_number" placeholder="Phone number" /><br />
            <label for="email_address">Email address*</label>
            <input id="email_address" placeholder="Email address*" /><br />
            <label for="message">Your message*</label>
            <textarea
              id="message"
              placeholder="Your message*"
              rows="4"
              cols="20"></textarea>
            <br />
            <button class="button contact__button">Submit</button>
            <p>
              <img src="../images/icons/lock.svg" />We never share your
              private date.
            </p>
          </form>
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
</body>

</html>