<?php include 'header.php'; ?>

<!-- Service Page Content -->
<section class="service-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="centered-h2"><?php echo $service['name']; ?></h2>
        <p><?php echo $service['description']; ?></p>
        <img src="<?php echo $service['image_url']; ?>" alt="<?php echo $service['name']; ?>">
        <a href="contact-us.php">Get in Touch</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>