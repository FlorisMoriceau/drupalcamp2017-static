<?php
  $page = 'contact';
?>

<?php include 'elements/html/html_head.php'; ?>
<?php include 'elements/modules/main-menu.php' ?>
<?php include 'elements/modules/header.php' ?>

<!-- Services Section -->
<section id="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 text-center">
        <h2>array('question' => 'response");</h2>
        <p class="lead">
          Les questions, elles demandent toujours des réponses...
        </p>
      </div>
    </div>
    <div class="row">
      <form
        class="contact-message-contact-form contact-message-form contact-form col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 "
        data-user-info-from-browser=""
        data-drupal-selector="contact-message-contact-form"
        action="/contact"
        method="post"
        id="contact-message-contact-form"
        accept-charset="UTF-8"
        data-drupal-form-fields="edit-name,edit-mail,edit-subject-0-value,edit-message-0-value,edit-submit,edit-url">
        <div
          class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-name js-form-item-name form-group">
          <label for="edit-name"
                 class="control-label js-form-required form-required">
            Nom
          </label>
          <input class="form-text required form-control input-lg"
                 id="edit-name"
                 name="name"
                 value=""
                 size="60"
                 maxlength="255"
                 required="required"
                 aria-required="true"
                 type="text">
        </div>
        <div
          class="form-item js-form-item form-type-email js-form-type-email form-item-mail js-form-item-mail form-group">
          <label for="edit-mail"
                 class="control-label js-form-required form-required">
            Adresse email
          </label>
          <input class="form-email required form-control input-lg"
                 id="edit-mail"
                 name="mail"
                 value=""
                 size="60"
                 maxlength="254"
                 required="required"
                 aria-required="true"
                 type="email">
        </div>
        <div
          class="field--type-string field--name-subject field--widget-string-textfield form-group js-form-wrapper form-wrapper"
          id="edit-subject-wrapper">
          <div
            class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-subject-0-value js-form-item-subject-0-value form-group">
            <label for="edit-subject-0-value"
                   class="control-label js-form-required form-required">Objet</label>
            <input
              class="js-text-full text-full form-text required form-control input-lg"
              id="edit-subject-0-value"
              name="subject[0][value]"
              value=""
              size="60"
              maxlength="100"
              placeholder=""
              required="required"
              aria-required="true"
              type="text">
          </div>
        </div>
        <div
          class="field--type-string-long field--name-message field--widget-string-textarea form-group js-form-wrapper form-wrapper"
          id="edit-message-wrapper">
          <div
            class="form-item js-form-item form-type-textarea js-form-type-textarea form-item-message-0-value js-form-item-message-0-value">
            <label for="edit-message-0-value"
                   class="control-label js-form-required form-required">
              Message
            </label>
            <div class="form-textarea-wrapper">
              <textarea
                class="js-text-full text-full form-textarea required form-control resize-vertical"
                data-drupal-selector="edit-message-0-value"
                id="edit-message-0-value" name="message[0][value]" rows="5"
                cols="60" placeholder="" required="required"
                aria-required="true"></textarea>
            </div>
          </div>
        </div>
        <div data-drupal-selector="edit-actions"
             class="form-actions form-group js-form-wrapper form-wrapper"
             id="edit-actions">
          <button data-drupal-selector="edit-submit"
                  class="button button--primary js-form-submit form-submit btn-primary btn btn-block btn-lg"
                  type="submit" id="edit-submit" name="op"
                  value="Envoyer le message">Envoyer le message
          </button>
        </div>
      </form>
    </div>
  </div>

</section>
<?php include 'elements/modules/newsletter.php' ?>
<?php include 'elements/modules/partners.php' ?>
<?php include 'elements/modules/footer.php' ?>

<?php include 'elements/html/html_bottom.php'; ?>
