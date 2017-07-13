<?php if ($page == 'homepage') { ?>
  <header class="homepage">
    <div class="container-fluid row">
      <div class="intro-text">
        <div class="text-center">
          <img src="img/drupalicon--homepage.png">
        </div>
      </div>
    </div>
  </header>

<?php }
elseif ($page == 'partnership') { ?>
  <header class="partnership">
    <div class="container-fluid row">
      <div class="intro-text">
        <div class="text-center">
          <h1 class="section-heading">Devenir partenaire du drupalcamp</h1>
          <div class="lead text-center">
            Le drupalcamp est un évènement proposé par l'association Drupal France
            et francophonie, par des bénévoles. <br>
            Nous faisons alors appel, comme tous les ans, à des partenaires pour
            nous aider financièrement.
          </div>
        </div>
      </div>
    </div>
  </header>
<?php }
elseif ($page == 'brezhonneg') { ?>
  <header class="brezhonneg">
    <div class="container-fluid row">
      <div class="intro-text">
        <div class="text-center">
          <h1 class="section-heading">Et si vous utilisiez Drupal en breton ?</h1>
          <div class="lead text-center">
            Aujourd'hui, ce n'est pas encore possible, la langue bretonne n'a pas encore été ajoutée sur l'interface de traduction de Drupal.<br>
            <strong>Mais grâce à vous...</strong>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php }
elseif ($page == 'contact') { ?>
  <header class="contact">
    <div class="container-fluid row">
      <div class="intro-text">
        <div class="text-center">
          <h1 class="section-heading">Contactez nous</h1>
          <div class="lead text-center">
            Notre équipe sera ravie de répondre à vos questions
          </div>
        </div>
      </div>
    </div>
  </header>
<?php } ?>