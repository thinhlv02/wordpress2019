<?php
function lotus_plugin_activation()
{

    $plugins = array(
        array(
            'name' => 'Redux Framework',
            'slug' => 'redux-framework',
            'required' => true
        )
    );

    $config = array(
        'menu' => 'tp_plugin_install',//http://wordpress2019.dev.com/wp-admin/themes.php?page=tp_plugin_install&plugin_status=install
        'has_notice' => true,
        'dismissable' => false,
        'is_automatic' => true
    );
    tgmpa($plugins, $config);

}

add_action('tgmpa_register', 'lotus_plugin_activation');



