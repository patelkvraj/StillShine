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
    <?php include '../component/footer.php'; ?>
  </div>
  <script src="../script.js"></script>
</body>

</html>