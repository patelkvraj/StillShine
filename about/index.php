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
    <?php include '../component/footer.php'; ?>
  </div>
  <script src="../script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>