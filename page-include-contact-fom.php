<?php /* Template Name: Custom with contact form */ ?>
<?php include("header.php"); ?>
<main class="col-12 grid bg-white">
  <section class="col-12">
 
    <?php the_content(); ?>
  
  </section>
  <section class="col-12 row bg-dark-blue p-20 pb-0">
    <div class="col-12 row mw-1200 m-auto w-1-1 p-20 mt-md-20">
      <div class="col-12 row w-1-1 bg-white rounded p-40">
        <div class="col-12">
          <h2 class="mb-20">Let&rsquo;s work together</h2>
          <?php include("form_contact.php"); ?>
        </div>
	  </div>
    </div>
  </section>
</main>
<?php include("footer.php"); ?>