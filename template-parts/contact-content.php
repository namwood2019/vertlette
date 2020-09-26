 <?php
 /*
  Template Name: Contact Page
 */
 ?>
 
 <?php get_header(); ?>

 <!-- Section A: Contact Form -->
 <section id="contact-a" class="text-center py-3">
    <div class="container">
      <h2 class="section-title">Contact</h2>
      <div class="bottom-line"></div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <br/>
      <div style="width: 100%"><iframe width="600" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                       src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=1660%20Boulevard%20de%20l'Entente,%20Qu%C3%A9bec,%20QC%20G1S%204S3+(Vertlette)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
      <br/>
      <h2>Nous contactez</h2>
      <br/>
      <form>
        <div class="text-fields">
          <input type="text" class="text-input name-input" placeholder="Nom">
          <input type="text" class="text-input subject-input" placeholder="Sujet">
          <input type="text" class="text-input email-input" placeholder="Courriel">
          <input type="text" class="text-input phone-input" placeholder="Phone">
          <textarea class="text-input message-input" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn-dark">Submit</button>
      </form>
    </div>
  </section>

  <!-- Section B: Contact Info -->
  <section id="contact-b" class="py-3">
    <div class="container">
      <div class="contact-info">
        <div>
          <i class="fa fa-phone fa-2x"></i>
          <h3>Phone</h3>
          <p>+1 (418) 555-5555</p>
        </div>

        <div>
          <i class="fa fa-envelope fa-2x"></i>
          <h3>Email</h3>
          <p>info@vertlette.com</p>
        </div>

        <div>
          <i class="fa fa-address-card fa-2x"></i>
          <h3>Address</h3>
          <p>Québec (QC), Canada</p>
        </div>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
