<?php

add_action('wp_ajax_login', 'ajax_login');
add_action('wp_ajax_nopriv_login', 'ajax_login');

function ajax_login()
{
    check_ajax_referer('ajax-login-nonce', 'security');

    $info = array();
    $info['user_login'] = $_POST['log'];
    $info['user_password'] = $_POST['pwd'];
    $info['remember'] = true;

    $user_signon = wp_signon($info, false);

    if (is_wp_error($user_signon)) {
        wp_safe_redirect(wp_get_referer());
    } else {

        wp_set_current_user($user_signon->ID, $user_signon->user_login);
        wp_set_auth_cookie($user_signon->ID);

        if ($user_signon->caps['administrator']) {
            wp_safe_redirect(admin_url());
        } else {
            echo json_encode(array('loggedin' => true, 'message' => __('Login successful, redirecting...')));
            wp_safe_redirect(wp_get_referer());
        }
    }

    die();
}
