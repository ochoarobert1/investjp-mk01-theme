<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'investjp_customize_register' );

function investjp_customize_register( $wp_customize ) {

    /* HEADER */
    $wp_customize->add_section('ijp_header_settings', array(
        'title'    => __('Cabecera', 'investjp'),
        'description' => __('Opciones para los elementos de la cabecera', 'investjp'),
        'priority' => 30
    ));

    $wp_customize->add_setting('ijp_header_settings[phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico [Visible]', 'investjp'),
        'description' => __( 'Agregar número telefónico en un formato visible para el público', 'investjp' ),
        'section'  => 'ijp_header_settings',
        'settings' => 'ijp_header_settings[phone_number]'
    ));

    $wp_customize->add_setting('ijp_header_settings[formatted_phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'formatted_phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico', 'investjp'),
        'description' => __( 'Agregar número telefonico con formato para el link', 'investjp' ),
        'section'  => 'ijp_header_settings',
        'settings' => 'ijp_header_settings[formatted_phone_number]'
    ));

    $wp_customize->add_setting('ijp_header_settings[email_address]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'email_address', array(
        'type' => 'text',
        'label'    => __('Correo Electrónico', 'investjp'),
        'description' => __( 'Agregar direccion de Correo Electrónico', 'investjp' ),
        'section'  => 'ijp_header_settings',
        'settings' => 'ijp_header_settings[email_address]'
    ));

    /* SOCIAL SETTINGS */
    $wp_customize->add_section('ijp_social_settings', array(
        'title'    => __('Redes Sociales', 'investjp'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'investjp'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('ijp_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'investjp_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'ijp_social_settings',
        'settings' => 'ijp_social_settings[facebook]',
        'label' => __( 'Facebook', 'investjp' ),
    ));

    $wp_customize->add_setting('ijp_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'investjp_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'ijp_social_settings',
        'settings' => 'ijp_social_settings[twitter]',
        'label' => __( 'Twitter', 'investjp' ),
    ));

    $wp_customize->add_setting('ijp_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'investjp_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'ijp_social_settings',
        'settings' => 'ijp_social_settings[instagram]',
        'label' => __( 'Instagram', 'investjp' ),
    ));

    $wp_customize->add_setting('ijp_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'investjp_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'ijp_social_settings',
        'settings' => 'ijp_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'investjp' ),
    ));

    $wp_customize->add_setting('ijp_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'investjp_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'ijp_social_settings',
        'settings' => 'ijp_social_settings[youtube]',
        'label' => __( 'YouTube', 'investjp' ),
    ) );

    /* COOKIES SETTINGS */
    $wp_customize->add_section('ijp_cookie_settings', array(
        'title'    => __('Cookies', 'investjp'),
        'description' => __('Opciones de Cookies', 'investjp'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('ijp_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'investjp'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'ijp_cookie_settings',
        'settings' => 'ijp_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('ijp_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'ijp_cookie_settings',
        'settings' => 'ijp_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'investjp' ),
    ) );

}

function investjp_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */
/*
function register_investjp_settings() {
    register_setting( 'investjp-settings-group', 'monday_start' );
    register_setting( 'investjp-settings-group', 'monday_end' );
    register_setting( 'investjp-settings-group', 'monday_all' );
}

add_action('admin_menu', 'investjp_custom_panel_control');

function investjp_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'investjp' ),
        __( 'Panel de Control','investjp' ),
        'manage_options',
        'investjp-control-panel',
        'investjp_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_investjp_settings' );
}

function investjp_control_panel_callback() {
    ob_start();
?>
<div class="investjp-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="investjp" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="investjp-admin-content-container">
    <?php settings_fields( 'investjp-settings-group' ); ?>
    <?php do_settings_sections( 'investjp-settings-group' ); ?>
    <div class="investjp-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'investjp'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="investjp-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php
    $content = ob_get_clean();
    echo $content;
}
*/
