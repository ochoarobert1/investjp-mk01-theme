<form class="contact-form-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="contact-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="nombre"><?php _e('Nombre', 'investjp'); ?></label>
            <input id="contact_name" type="text" name="nombre" class="form-control" />
            <small class="custom-danger d-none error error-nombre"></small>
        </div>
        <div class="contact-form-control col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <label for="email"><?php _e('Correo Electrónico', 'investjp'); ?></label>
            <input id="contact_email" type="email" name="email" class="form-control" />
            <small class="custom-danger d-none error error-email"></small>
        </div>
        <div class="contact-form-control col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <label for="phone"><?php _e('Número Telefónico', 'investjp'); ?></label>
            <input id="contact_phone" type="text" name="phone" class="form-control" />
            <small class="custom-danger d-none error error-phone"></small>
        </div>
        <div class="contact-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="comments"><?php _e('Comentarios', 'investjp'); ?></label>
            <textarea id="contact_comments" name="comments" id="comments" cols="30" rows="3" class="form-control"></textarea>
            <small class="custom-danger d-none error error-comments"></small>
        </div>
        <div class="contact-form-recaptcha col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $google_options = get_option('ijp_google_settings'); ?>
            <div class="g-recaptcha" data-sitekey="<?php echo $google_options['sitekey']; ?>"></div>
        </div>
        <div class="contact-form-submit col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <button id="submitBtn" type="submit" class="btn btn-md btn-contact"><?php _e('Enviar', 'investjp'); ?></button>
        </div>
        <div class="contact-form-response col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="loader d-none"></div>
        </div>
    </div>
</form>
