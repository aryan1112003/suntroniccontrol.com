<?php include 'header.php'; ?>

<!-- Product Page Content -->
<section class="product-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="centered-h2"><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
        <a href="contact-us.php">Get in Touch</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>