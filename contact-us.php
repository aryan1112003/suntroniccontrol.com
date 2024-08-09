<?php include 'header.php'; ?>

<!-- Contact Us Page Content -->
<section class="contact-us-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="centered-h2">Get in Touch</h2>
        <form action="mailer.php" method="post">
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="email" placeholder="Email">
          <textarea name="message" placeholder="Message"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>