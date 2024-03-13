<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    unset(Redux_Core::$server['REMOTE_ADDR']);

    $opt_name = 'redux_demo';


    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'your-textdomain-here' ),
        'customizer'           => true,
        'dev_mode'             => false,
    );

    Redux::set_args( $opt_name, $args );

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Basic Field', 'your-textdomain-here' ),
            'id'     => 'basic',
            'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'       => 'opt-text',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Example Text', 'your-textdomain-here' ),
                    'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
                    'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                    'hint'     => array(
                        'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                    )
                )
            )
        ) 
    );

	