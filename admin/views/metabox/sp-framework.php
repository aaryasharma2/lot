<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * ------------------------------------------------------------------------------------------------
 * Text Domains: sp-framework
 * ------------------------------------------------------------------------------------------------
 *
 */

// ------------------------------------------------------------------------------------------------
require_once plugin_dir_path( __FILE__ ) .'/sp-framework-path.php';
// ------------------------------------------------------------------------------------------------

if( ! function_exists( 'sp_tpro_framework_init' ) && ! class_exists( 'SP_TPRO_Framework' ) ) {
  function sp_tpro_framework_init() {

    // active modules
    defined( 'SP_TPRO_F_ACTIVE_METABOX'   )  or  define( 'SP_TPRO_F_ACTIVE_METABOX',    true );

    // helpers
    sp_tpro_locate_template( 'functions/fallback.php'       );
    sp_tpro_locate_template( 'functions/helpers.php'        );
    sp_tpro_locate_template( 'functions/actions.php'        );
    sp_tpro_locate_template( 'functions/enqueue.php'        );
    sp_tpro_locate_template( 'functions/sanitize.php'       );
    sp_tpro_locate_template( 'functions/validate.php'       );

    // classes
    sp_tpro_locate_template( 'classes/abstract.class.php'   );
    sp_tpro_locate_template( 'classes/options.class.php'    );
    sp_tpro_locate_template( 'classes/metabox.class.php'    );

    // configs
    sp_tpro_locate_template( 'config/metabox.config.php'    );


  }
  add_action( 'init', 'sp_tpro_framework_init', 10 );
}