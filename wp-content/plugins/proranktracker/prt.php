<?php

/*
Plugin Name: Pro Rank Tracker
Plugin URI: https://proranktracker.com/
Description: Pro Rank Tracker is a cutting edge ranking tracking tool (SERP Tracker) for keep you up to date with all the latest changes on the rankings of your websites and videos.
Author: ProRanktTacker
Author URI: https://proranktracker.com/
Version: 1.0.0
*/

if (! function_exists('add_action')) die('&Delta;');

add_action('admin_menu', 'prt_admin_menu');
function prt_admin_menu() {
    add_submenu_page( 'tools.php', 'ProRankTracker', 'ProRankTracker', 'manage_options', 'prt', 'prt_display');
}

function prt_display() {
    if ( ! is_admin() )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    $token = (string) get_option('proranktracker_token');
    if (isset($_GET['change_prt_user']) || ! strlen($token)) {
        $is_saved = prt_display_options($token);
        if (! $is_saved) return;
    }

    $site_url = urlencode(get_site_url());

    echo "<iframe src='https://proranktracker.com/ext/?t=$token&s=$site_url'/></iframe>";
    echo "<p><a class='button' href='?page=prt&change_prt_user=1'>Change User</a></p>";
}

function admin_inline_js(){
    wp_enqueue_script( 'iframeResizer', plugin_dir_url( __FILE__ ) . 'iframeResizer.min.js' );
    echo '<style>iframe{width:100%}</style>';
    echo "<script type='text/javascript'>\n";
    echo 'addLoadEvent(function() { iFrameResize(); });';
    echo "\n</script>";
}
add_action( 'admin_print_scripts', 'admin_inline_js' );

function prt_display_options($old_token) {
    $token = isset($_POST['proranktracker_token']) ? (string) $_POST['proranktracker_token'] : '';
    if (strlen($token)) {
        update_option('proranktracker_token', $token);
        echo "<div class='updated'><p><strong>Saved.</strong></p></div>\n";

        return 1;
    }

?>

    <div class="wrap">
        <h2>Settings</h2>
        <hr/>

        <form name="form1" method="post" action="">
        <input type='hidden' name='change_prt_user' value='1' />

        <p>ProRankTracker Token:
        <input type="text" name="proranktracker_token" value="<?php echo $old_token ?>" size="20" />
        </p>
        <hr />

        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>

        <p>You can get your <b>ProRankTracker Token</b> by <a href="https://proranktracker.com/tools/apps_n_plugins" target="_blank">Clicking Here</a>.</p>

        </form>
    </div>

<?php

    return 0;
}