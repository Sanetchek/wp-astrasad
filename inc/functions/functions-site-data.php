<?php
/**
* Добавляет страницу настройки темы в админку Вордпресса
*/
function astrasad_customize_register( $wp_customize ) {
$wp_customize->add_section('data_site_section',
array(
'title' => 'Данные сайта',
'capability' => 'edit_theme_options',
'description' => "Тут можно указать данные сайта"
)
);
/*
Добавляем поле site_email
*/
$wp_customize->add_setting('site_email',
array(
'default' => 'info@astrasad.com.ua',
'type' => 'option'
)
);
$wp_customize->add_control('site_email_control',
array(
'type' => 'text',
'label' => "Электронный адрес (email)",
'section' => 'data_site_section',
'settings' => 'site_email'
)
);
/*
Добавляем полей телефона site_telephone
*/
$wp_customize->add_setting('site_telephone1',
array(
'default' => '+380 68 707 41 41',
'type' => 'option'
)
);
$wp_customize->add_control('site_telephone1_control',
array(
'type' => 'text',
'label' => "Телефон 1",
'section' => 'data_site_section',
'settings' => 'site_telephone1'
)
);

$wp_customize->add_setting('site_telephone2',
array(
'default' => '+380 44 360 16 85',
'type' => 'option'
)
);
$wp_customize->add_control('site_telephone2_control',
array(
'type' => 'text',
'label' => "Телефон 2",
'section' => 'data_site_section',
'settings' => 'site_telephone2'
)
);

/*
Добавляем поле телефона site_telephone
*/
$wp_customize->add_setting('footer_company_name',
array(
'default' => 'Астрасад 2017 &copy;',
'type' => 'option'
)
);
$wp_customize->add_control('footer_company_name_control',
array(
'type' => 'text',
'label' => "Название компании в футере",
'section' => 'data_site_section',
'settings' => 'footer_company_name'
)
);

$wp_customize->add_setting('footer_all_rights',
array(
'default' => 'Все права защищены',
'type' => 'option'
)
);
$wp_customize->add_control('footer_all_rights_control',
array(
'type' => 'text',
'label' => "Все права защищены в футере",
'section' => 'data_site_section',
'settings' => 'footer_all_rights'
)
);
}
add_action( 'customize_register', 'astrasad_customize_register' );