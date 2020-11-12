<?php get_header();

//Template name: test pagina

?>


<main id="main-primary">
    <section>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                    <div class="collapse navbar-collapse" id="main_nav">
                        <?php echo wp_get_menu_mega(); ?>
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
    </section>
<section>
    <div class="container">
    <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
  <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
      class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-multi" data-slide-to="1"></li>
  <li data-target="#carousel-example-multi" data-slide-to="2"></li>
  <li data-target="#carousel-example-multi" data-slide-to="3"></li>
  <li data-target="#carousel-example-multi" data-slide-to="4"></li>
  <li data-target="#carousel-example-multi" data-slide-to="5"></li>
</ol>
<!--/.Indicators-->

<div class="carousel-inner v-2" role="listbox">

  <div class="carousel-item active">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
    </div>
</section>
</main>


<?php get_footer();?>