<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "theme_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
  //  $args['admin_bar_links'][] = array(
      //  'id'    => 'theme-option-developer',
      //  'href'  => 'http://www.smallbizwebdesignstudio.com/',
       // 'title' => __( 'Developer', 'redux-framework-demo' ),
   // );

    //$args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        //'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        //'title' => __( 'Support', 'redux-framework-demo' ),
    //);

    //$args['admin_bar_links'][] = array(
        //'id'    => 'redux-extensions',
        //'href'  => 'reduxframework.com/extensions',
        //'title' => __( 'Extensions', 'redux-framework-demo' ),
    //);

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    //$args['share_icons'][] = array(
        //'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        //'title' => 'Visit us on GitHub',
        //'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    //);
   // $args['share_icons'][] = array(
       // 'url'   => 'https://in.linkedin.com/company/small-biz-web-design-studio',
       // 'title' => 'Find us on Linkedin',
       // 'icon'  => 'el el-linkedin'
   // );
    //$args['share_icons'][] = array(
        //'url'   => 'http://twitter.com/reduxframework',
        //'title' => 'Follow us on Twitter',
        //'icon'  => 'el el-twitter'
    //);
    //$args['share_icons'][] = array(
        //'url'   => 'http://www.linkedin.com/company/redux-framework',
        //'title' => 'Find us on LinkedIn',
        //'icon'  => 'el el-linkedin'
    //);

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        //$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This Theme Option is proudly developed by <a target="_blanck" href="https://www.behance.net/laltuSome">laltu som</a></p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // HEADER
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Seating', 'redux-framework-demo' ),
        'id'     => 'header',
        'desc'   => __( 'From here you can change header part of your website.', 'redux-framework-demo' ),
        'icon'   => 'el el-laptop',
        'fields' => array(
             array(
           'id'       => 'opt-color',
    'type'     => 'color',
    'title'    => __('Theme Color', 'redux-framework-demo'), 
    'default'  => '#e01a1a',
    'validate' => 'color',
            ),
            array(
                'id'       => 'header-logo',
                'type'     => 'media',
                'title'    => __( 'Logo', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload logo for your website.', 'redux-framework-demo' ),
            ),
 array(
                'id'       => 'app-icon',
                'type'     => 'media',
                'title'    => __( 'App Icon', 'redux-framework-demo' ),
               ),
            
         array(
                'id'       => 'fav-icon',
                'type'     => 'media',
                'title'    => __( 'Favicon', 'redux-framework-demo' ),
               ),
             
       
            array(
               'id'       => 'opt-switch',
        'type'     => 'switch', 
        'title'    => __('Switch On', 'redux-framework-demo'),
        'subtitle' => __('Look, it\'s on!', 'redux-framework-demo'),
        'default'  => true,
                
            ),
              
             

             
        )
    ) );


     Redux::setSection( $opt_name, array(
        'title'      => __( 'Home Page Slider', 'redux-framework-demo' ),
        'id'         => 'bannr-slide',
   'icon'   => 'el el-laptop',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'banner-slides',
                'type'        => 'slides',
                'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited Add Review with drag and drop sortings.', 'redux-framework-demo' ),
                
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                   
                ),
            ),
        )
    ) );


     

    
    
     // FOOTER
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Home Page ', 'redux-framework-demo' ),
        'id'     => 'home-page',
          'subsection' => false,
        'desc'   => __( 'From here you can change Home part of your website.', 'redux-framework-demo' ),
        'icon'   => 'el el-laptop',
        'fields' => array(
          
             array(
                'id'       => 'banner-product',
                'type'     => 'media',
                'title'    => __( 'Banner Product', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload banner Product image for your website.', 'redux-framework-demo' ),
            ),
              array(
                'id'       => 'banner-text',
                'type'     => 'textarea',
                'title'    => __( 'Banner Text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload banner Text  for your website.', 'redux-framework-demo' ),
            ),
               
                array(
                'id'       => 'home-heading',
                'type'     => 'text',
                'title'    => __( 'Project Management', 'redux-framework-demo' ),
                
            ),
                 array(
                'id'       => 'home-text1',
                'type'     => 'textarea',
            
            ),
            
             array(
                'id'       => 'home-img1',
                'type'     => 'media',
              
            ),
            
             array(
                'id'       => 'home-text2',
                'type'     => 'textarea',
                'title'    => __( 'Who is Project Management for?', 'redux-framework-demo' ),
                
            ),
              array(
                'id'       => 'home-img2',
                'type'     => 'media',
              
            ),
               array(
                'id'       => 'home-text3',
                'type'     => 'textarea',
                'title'    => __( 'Project Management', 'redux-framework-demo' ),
                
            ),
              array(
                'id'       => 'home-img3',
                'type'     => 'media',
              
            ),

               array(
                'id'       => 'home-text4',
                'type'     => 'textarea',
                'title'    => __( 'Projects and Campaigns', 'redux-framework-demo' ),
                
            ),
              array(
                'id'       => 'home-img4',
                'type'     => 'media',
              
            ),
            
            
             
            

            
            
        )
        
        
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'About page', 'redux-framework-demo' ),
        'id'         => 'rd-about',
   
        'subsection' => false,
        'fields'     => array(
               array(
                'id'       => 'about-page-text1',
                'type'     => 'textarea',
                'title'    => __( 'About text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload about text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'about-page-text2',
                'type'     => 'textarea',
                
            ),
                array(
                'id'       => 'about-page-img1',
                'type'     => 'media',
                
            ),

                 array(
                'id'       => 'about-page-text3',
                'type'     => 'textarea',
                'title'    => __( 'About text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload investments text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'about-page-img2',
                'type'     => 'media',
             
            ),

                   array(
                'id'       => 'about-page-text4',
                'type'     => 'textarea',
                'title'    => __( 'About text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload investments text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'about-page-img3',
                'type'     => 'media',
             
            ),

                    array(
                'id'       => 'about-page-text5',
                'type'     => 'textarea',
                'title'    => __( 'About text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload investments text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'about-page-img4',
                'type'     => 'media',
             
            ),

                    array(
                'id'       => 'about-page-text6',
                'type'     => 'textarea',
                'title'    => __( 'About text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload investments text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'about-page-img5',
                'type'     => 'media',
             
            ),

                 array(
                'id'       => 'about-page-text7',
                'type'     => 'textarea',
                'title'    => __( 'Team Text', 'redux-framework-demo' ),
             
            ),
            
           

               array(
                'id'       => 'about-men1',
                'type'     => 'media',
                ),
               array(
                'id'       => 'about-men-text1',
                'type'     => 'textarea',
                ),
                array(
                'id'       => 'about-men2',
                'type'     => 'media',
                ),
               array(
                'id'       => 'about-men-text2',
                'type'     => 'textarea',
                ),
                  array(
                'id'       => 'about-page-text8',
                'type'     => 'textarea',
                'title'    => __( 'Team Text', 'redux-framework-demo' ),
             
            ),

        )
    ) );


       Redux::setSection( $opt_name, array(
        'title'      => __( 'Services page', 'redux-framework-demo' ),
        'id'         => 'rd-services',
   
        'subsection' => false,
        'fields'     => array(
               array(
                'id'       => 'services-page-text1',
                'type'     => 'textarea',
                'title'    => __( 'services text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload services text  for your website.', 'redux-framework-demo' ),
            ),
                array(
                'id'       => 'services-page-text-one2',
                'type'     => 'textarea',
              
            ),

                 array(
                'id'       => 'services-page-img1',
                'type'     => 'media',
                
            ),
                    array(
                'id'       => 'services-page-heading1',
                'type'     => 'textarea',
                'title'    => __( 'services Heading', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload services text  for your website.', 'redux-framework-demo' ),
            ),
          array(
                'id'       => 'blue-box1',
                'type'     => 'textarea',
              
            ),
            array(
                'id'       => 'blue-box2',
                'type'     => 'textarea',
              
            ),
              array(
                'id'       => 'blue-box3',
                'type'     => 'textarea',
              
            ),
                 array(
                'id'       => 'services-page-img2',
                'type'     => 'media',
                
            ),
        
         array(
                'id'       => 'services-page-text3',
                'type'     => 'textarea',
              
            ),
         array(
                'id'       => 'services-page-text4',
                'type'     => 'textarea',
              
            ),
 

        )
    ) );

      Redux::setSection( $opt_name, array(
        'title'      => __( 'Project Management', 'redux-framework-demo' ),
        'id'         => 'rd-management',
   
        'subsection' => false,
        'fields'     => array(
              array(
                'id'       => 'management-text1',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img1',
                'type'     => 'media',
               
            ),

                array(
                'id'       => 'management-text2',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img2',
                'type'     => 'media',
               
            ),
                array(
                'id'       => 'management-text3',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img3',
                'type'     => 'media',
               
            ),
                  array(
                'id'       => 'management-text4',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img4',
                'type'     => 'media',
               
            ),
                  array(
                'id'       => 'management-text5',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img5',
                'type'     => 'media',
               
            ),
                  array(
                'id'       => 'management-text6',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img6',
                'type'     => 'media',
               
            ),
                  array(
                'id'       => 'management-text7',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'management-img7',
                'type'     => 'media',
               
            ),
               array(
                'id'       => 'management-headins',
                'type'     => 'textarea',
               
            ),
              
            
        )
    ) );


        Redux::setSection( $opt_name, array(
        'title'      => __( 'Projects  Campaigns', 'redux-framework-demo' ),
        'id'         => 'rd-campaigns',
   
        'subsection' => false,
        'fields'     => array(
              array(
                'id'       => 'campaigns-text1',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'campaigns-img1',
                'type'     => 'media',
               
            ),

              
            
        )
    ) );

  Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Page', 'redux-framework-demo' ),
        'id'         => 'rd-contact',
   
        'subsection' => false,
        'fields'     => array(
              array(
                'id'       => 'contact-text1',
                'type'     => 'textarea',
               
            ),
              array(
                'id'       => 'contact-img1',
                'type'     => 'media',
               
            ),
               array(
                'id'       => 'contact-map',
                'type'     => 'textarea',
               
            ),
               
        )
    ) );
    //SLIDER
    
     Redux::setSection( $opt_name, array(
        'title'      => __( 'Accreditation & Testimonials', 'redux-framework-demo' ),
        'id'         => 'rd-slide',
   
        'subsection' => false,
        'fields'     => array(
              array(
                'id'          => 'client-slides',
                'type'        => 'slides',
                'title'       => __( 'Accreditation', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited Add Review with drag and drop sortings.', 'redux-framework-demo' ),
                
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                   
                ),
            ),

                 array(
                'id'          => 'client-slides2',
                'type'        => 'slides',
                'title'       => __( 'Testimonials', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited Add Review with drag and drop sortings.', 'redux-framework-demo' ),
                
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                   
                ),
            ),
        )
    ) );

   Redux::setSection( $opt_name, array(
        'title'      => __( 'FAQ', 'redux-framework-demo' ),
        'id'         => 'rd-faq',
   
        'subsection' => false,
        'fields'     => array(
              array(
                'id'          => 'faq-slides',
                'type'        => 'slides',
                'title'       => __( 'FAQ', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited Add Review with drag and drop sortings.', 'redux-framework-demo' ),
                
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                   
                ),
            ),

                 
        )
    ) );
     //gallery
      Redux::setSection( $opt_name, array(
        'title'      => __( 'Gallery', 'redux-framework-demo' ),
        'id'         => 'media-gallery',
      
        'subsection' => false,
        'fields'     => array(
            array(
                'id'       => 'opt-gallery',
                'type'     => 'gallery',
                'title'    => __( 'Add/Edit Gallery', 'redux-framework-demo' ),
                'subtitle' => __( 'Create a new Gallery by selecting existing or uploading new images ', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Call to Action Part', 'redux-framework-demo' ),
        'id'     => 'contact',
        'desc'   => __( 'From here you can change header part of your website.', 'redux-framework-demo' ),
        'icon'   => 'el el-laptop',
        'fields' => array(
            array(
                'id'       => 'left-img',
                'type'     => 'media',
                'title'    => __( 'Images', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload Images for your website.', 'redux-framework-demo' ),
            ),
 
              array(
                'id'       => 'contact-editor',
                'type'     => 'textarea',
                'title'    => __( 'Text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload Text', 'redux-framework-demo' ),
            ),

           
              
             

             
        )
    ) );
	
	// FOOTER
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework-demo' ),
        'id'     => 'footer',
        'desc'   => __( 'From here you can change footer part of your website.', 'redux-framework-demo' ),
        'icon'   => 'el el-laptop',
        'fields' => array(
            array(
                'id'       => 'footer-logo',
                'type'     => 'media',
                'title'    => __( 'Footer Logo', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update Logo on your website.', 'redux-framework-demo' ),
            ),
             array(
                'id'       => 'logo-text',
                'type'     => 'textarea',
                'title'    => __( 'Logo under text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload TEXT', 'redux-framework-demo' ),
            ),
               array(
                'id'       => 'pay-text',
                'type'     => 'media',
                'title'    => __( 'Payment ', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload Payment Image', 'redux-framework-demo' ),
            ),

			array(
                'id'       => 'footer-copyright',
                'type'     => 'text',
                'title'    => __( 'Copyright Text', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update Copyright Text on your website.', 'redux-framework-demo' ),
            ),

              

                array(
                'id'       => 'phone-footer1',
                'type'     => 'text',
                'title'    => __( 'Phone', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload phone', 'redux-framework-demo' ),
            ),
                   array(
                'id'       => 'phone-footer2',
                'type'     => 'text',
                'title'    => __( 'Phone', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload phone', 'redux-framework-demo' ),
            ),
                 array(
                'id'       => 'email-footer',
                'type'     => 'text',
                'title'    => __( 'Email', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload email', 'redux-framework-demo' ),
            ),
                      array(
                'id'       => 'address-footer',
                'type'     => 'textarea',
                'title'    => __( 'Address', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload address', 'redux-framework-demo' ),
            ),
   array(
                'id'       => 'map-footer',
                'type'     => 'editor',
                'title'    => __( 'Google Mpa', 'redux-framework-demo' ),
                'subtitle'     => __( 'Upload Google Mpa Link', 'redux-framework-demo' ),
            ),

            
        )
        
        
    ) );
    
        Redux::setSection( $opt_name, array(
        'title'      => __( 'Background', 'redux-framework-demo' ),
        'id'         => 'design-background',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-background',
                'type'     => 'background',
                'output'   => array( 'footer' ),
                'title'    => __( 'Body Background', 'redux-framework-demo' ),
                'subtitle' => __( 'Body background with image, color, etc.', 'redux-framework-demo' ),
                'default'   => '#000',
            ),

        ),

    ) );
    
    
     	// 404
    Redux::setSection( $opt_name, array(
        'title'  => __( '404 Page', 'redux-framework-demo' ),
        'id'     => 'error-bg',
        'desc'   => __( 'From here you can change 404 part of your website.', 'redux-framework-demo' ),
        'icon'   => 'el el-laptop',
        'fields' => array(
		array(
                'id'       => 'error-img',
                'type'     => 'media',
                
            ),
            
        )
        
        
    ) );
    
    
      	// 404
	
// SOCIAL
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Social and About', 'redux-framework-demo' ),
        'id'     => 'social',
        'desc'   => __( 'From here you can change social links of your website. and add Small About content', 'redux-framework-demo' ),
        'icon'   => 'el el-globe',
        'fields' => array(
          

             array(
                'id'       => 'social-facebook',
                'type'     => 'text',
                'title'    => __( 'Facebook', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update Facebook link on your website.', 'redux-framework-demo' ),
            ),
			array(
                'id'       => 'social-twitter',
                'type'     => 'text',
                'title'    => __( 'Twitter', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update Twitter link on your website.', 'redux-framework-demo' ),
            ),
			array(
                'id'       => 'social-google',
                'type'     => 'text',
                'title'    => __( 'Google', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update Google link on your website.', 'redux-framework-demo' ),
            ),
			array(
                'id'       => 'social-instagram',
                'type'     => 'text',
                'title'    => __( 'instagram', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update instagram link on your website.', 'redux-framework-demo' ),
            ),
			
        array(
                'id'       => 'social-pin',
                'type'     => 'text',
                'title'    => __( 'pintarest ', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update pintarest link on your website.', 'redux-framework-demo' ),
            ),
            
               array(
                'id'       => 'social-in',
                'type'     => 'text',
                'title'    => __( 'In ', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update In link on your website.', 'redux-framework-demo' ),
            ),
                 array(
                'id'       => 'vimeo',
                'type'     => 'text',
                'title'    => __( 'vimeo ', 'redux-framework-demo' ),
                'subtitle'     => __( 'Update In link on your website.', 'redux-framework-demo' ),
            ),
        )
    ) );

    
    
    
    
  

    
    
    