<?php

add_action('wp_ajax_login', 'ajax_login');
add_action('wp_ajax_nopriv_login', 'ajax_login');

function ajax_login()
{
    check_ajax_referer('ajax-login-nonce', 'security');

    error_log("12 : " . print_r($_POST, true));

    $info = array();
    $info['user_login'] = $_POST['log'];
    $info['user_password'] = $_POST['pwd'];
    $info['remember'] = true;

    $user_signon = wp_signon($info, false);

    if (is_wp_error($user_signon)) {
        add_action('login_errors', function () {
            echo json_encode(array('loggedin' => false, 'message' => __('Wrong username or password.')));
        });
    } else {
        add_action('login_errors', function () {
            echo json_encode(array('loggedin' => true, 'message' => __('Login successful, redirecting...')));
        });
    }

    wp_safe_redirect(wp_get_referer());

    die();
}
