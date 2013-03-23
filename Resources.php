<?php

if (!defined('BASEPATH')) 
    die('No direct script access allowed');


/**
 * Class I wrote to handle my resources folder at the root of my CI installation
 * Because mod_rewrite doesn't work right on my XAMPP installation (Don't care enough to fix)
 *
 * @author Zeke Sonxx (@zekesonxx)
 * @copyright Zeke Sonxx 2013. All rights reserved.
 */
class Resources {

    /**
     *  CI object. You usually reference it with $this->*
     * @var object
     */
    protected $_CI;

    /**
     * Gets the CodeIgniter instance and puts it in _CI
     */
    public function __construct() {
        $this->_CI = & get_instance();
    }

    /**
     * Used to link a piece of CSS. Returns valid HTML5. 
     * 
     * @param type $filename Filename to link CSS with
     * @param type $echo If it should echo or return. Default is true.
     * @return string|void Depends on $echo
     * @author Zeke Sonxx (@zekesonxx)
     */
    public function link_css($filename, $echo = true) {
        $base = $this->_CI->config->item('base_url');
        $return = '<link href="' . $base . 'resources/css/' . rtrim($filename, ".css") . '.css" rel="stylesheet">';
        if ($echo) {
            echo $return;
        } else {
            return $return;
        }
    }

    /**
     * Used to link a piece of Javascript. Returns valid HTML5. 
     * 
     * @param type $filename Filename to link CSS with
     * @param type $echo If it should echo or return. Default is true.
     * @return string|void Depends on $echo
     * @author Zeke Sonxx (@zekesonxx)
     */
    public function link_javascript($filename, $echo = true) {
        $base = $this->_CI->config->item('base_url');
        $return = '<script src="' . $base . 'resources/js/' . rtrim($filename, ".js") . '.js" type="text/javascript"></script>';
        if ($echo) {
            echo $return;
        } else {
            return $return;
        }
    }

    /**
     *  Used to link a image. Returns valid HTML5.
     * 
     * @param type $filename Filename to link the image with
     * @param type $format Format of the image. Default is PNG
     * @param type $echo If it should echo or return. Default is true
     * @return string|void Depends on $echo
     * @author Zeke Sonxx (@zekesonxx)
     */
    public function link_image($filename, $format = "png", $echo = true) {
        $base = $this->_CI->config->item('base_url');
        $return = '<img src="' . $base . 'resources/img/' . rtrim($filename, ".".$format) . '.' . $format . '" />';
        if ($echo) {
            echo $return;
        } else {
            return $return;
        }
    }

}

?>