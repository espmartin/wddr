<?php
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$skipContactModal = strpos($requestUri, '/contact') === 0
    || strpos($requestUri, '/services') === 0;
if (!$skipContactModal):
?>
<div id="myNav" class="overlay" role="dialog" aria-modal="true" aria-labelledby="contact-modal-title" inert>
  <button type="button" class="closebtn" aria-label="Close contact form">&times;</button>
  <div class="overlay-content">
    <div class="images content-image" role="presentation"></div>
    <div class="container">
      <h3 id="contact-modal-title">Please feel free to submit the form below to receive information &amp; a price quote today!</h3>
      <form id="contact-form" method="post" action="/contact/get.php" autocomplete="on">
        <label for="modal-name">Full Name</label>
        <input type="text" id="modal-name" name="name" placeholder="Your name.." required>
        <label for="modal-email">Email address</label>
        <input type="email" id="modal-email" name="email" placeholder="Your email address.." required>
        <label for="modal-phone">Phone number</label>
        <input type="tel" id="modal-phone" name="phone" placeholder="Your phone number.." required>
        <label for="modal-services">Services</label>
        <select id="modal-services" name="services" required>
          <option value="">Choose an option</option>
          <option value="creation">Website Creation</option>
          <option value="maintenance">Maintain Existing Site</option>
          <option value="seo">Search Engine Optimization</option>
        </select>
        <label for="modal-subject">Subject</label>
        <textarea id="modal-subject" name="subject" class="textarea-tall" placeholder="Write something.." required></textarea>
        <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Ld14acUAAAAAJkARsG15-a5f6_Nx9QSxp1Ejllk"></div>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
      </form>
    </div>
  </div>
</div>
<?php endif; ?>