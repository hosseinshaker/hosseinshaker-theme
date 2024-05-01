<?php
// اضافه کردن بخش تنظیمات به پنل مدیریتی
function custom_theme_settings_page() {
    add_menu_page(
        'تنظیمات قالب',
        'تنظیمات قالب',
        'manage_options',
        'custom-theme-settings',
        'theme_settings_page_markup',
        '',
        99
    );
}
add_action('admin_menu', 'custom_theme_settings_page');

// ایجاد محتوای بخش تنظیمات
function theme_settings_page_markup() {
    ?>
    <div class="wrap">
        <h1>تنظیمات قالب</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// اضافه کردن فیلدهای تنظیمات
function add_theme_settings_fields() {
    add_settings_section(
        'section',
        'بخش تنظیمات',
        '',
        'theme-options'
    );

    add_settings_field(
        'phone_number',
        'شماره تلفن',
        'phone_number_field_markup',
        'theme-options',
        'section'
    );
  add_settings_field(
        'last_name',
        'نام و نام خانوادگی',
        'last_name_field_markup',
        'theme-options',
        'section'
    );
    register_setting('section', 'last_name');
    register_setting('section', 'phone_number');
}
add_action('admin_init', 'add_theme_settings_fields');

// تابع برای نمایش فیلد شماره تلفن
function phone_number_field_markup() {
    $phone_number = get_option('phone_number');
    ?>
    <input type="text" name="phone_number" value="<?php echo esc_attr($phone_number); ?>" />
    <?php
}
function last_name_field_markup() {
    $last_name = get_option('last_name');
    ?>
    <input type="text" name="last_name" value="<?php echo esc_attr($last_name); ?>" />
    <?php
}
