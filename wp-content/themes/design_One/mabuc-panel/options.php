<?php
	$version = "1.3.2";
	$author = "codeex";
	$themename = "Homeland";
	$shortname = "homeland";
	$help = "http://themeforest.net/user/codeex";

	$options = array (

	array( "name" => "Theme Settings", "type" => "top_section"),
	array( "type" => "close"),

	array( "name" => "General",
		   "type" => "section",
           "icon" => "fa fa-cog"),

	array( "type" => "open"),

	array( "name" => "Main", "type" => "headers"),

	array( "name" => "Responsive Layout",
			"desc" => "Disable responsive effect",
			"id" => $shortname."_site_layout",
			"type" => "checkbox",
			"std" => ""),

	array( "name" => "Sticky Header",
			"desc" => "Enable Sticky header effect",
			"id" => $shortname."_sticky_header",
			"type" => "checkbox",
			"std" => ""),

	array( "name" => "Advance Search",
			"desc" => "Disable advance search in all pages, except homepage",
			"id" => $shortname."_disable_advance_search",
			"type" => "checkbox",
			"std" => ""),

	array( "name" => "Layout Style",
			"desc" => "Select your theme layout style",
			"id" => $shortname."_theme_layout",
			"type" => "select",
			"options" => array("Fullwidth", "Boxed"),
			"std" => ""),

	array( "name" => "Header Style",
			"desc" => "Select your theme header style",
			"id" => $shortname."_theme_header",
			"type" => "select",
			"options" => array("Default", "Header 2", "Header 3"),
			"std" => ""),

	array( "name" => "Pattern Type",
			"desc" => "Select your 50 background patterns",
			"id" => $shortname."_pattern",
			"type" => "select",
			"options" => array("Select Pattern", "Gray Lines", "Noise Lines", "Tiny Grid", "Bullseye", "Gray Paper", "Norwegian Rose", "Subtle Net", "Polyester Lite", "Absurdity", "White Bed Sheet", "Subtle Stripes", "Light Mesh", "Rough Diagonal", "Arabesque", "Stack Circles", "Hexellence", "White Texture", "Concrete Wall", "Brush Aluminum", "Groovepaper", "Diagonal Noise", "Rocky Wall", "Whitey", "Bright Squares", "Freckles", "Wallpaper", "Project Paper", "Cubes", "Washi", "Dot Noise", "xv", "Little Plaid", "Old Wall", "Connect", "Ravenna", "Smooth Wall", "Tapestry", "Psychedelic", "Scribble Light", "GPlay", "Lil Fiber", "First Aid", "Frenchstucco", "Light Wool", "Gradient Squares", "Escheresque", "Climpek", "Lyonnette", "Gray Floral", "Reticular Tissue"),
			"std" => ""),

	array( "name" => "Favicon",
			"desc" => "Enter your website favicon",
			"id" => $shortname."_favicon",
			"type" => "img_preview",
			"std" => ""),

	array( "name" => "Logo",
			"desc" => "Enter your website logo",
			"id" => $shortname."_logo",
			"type" => "img_preview",
			"std" => ""),

	array( "name" => "Logo Retina",
			"desc" => "Upload your website logo for retina feature (NOTE: you need to upload image with @2x in your filename like this image@2x.jpg)",
			"id" => $shortname."_logo_retina",
			"type" => "img_preview",
			"std" => ""),

	array( "name" => "Keywords",
			"desc" => "Enter your meta keywords",
			"id" => $shortname."_meta_keywords",
			"type" => "text",
			"std" => ""),

	array( "name" => "Paging Style",
			"desc" => "Select your theme paging navigation style",
			"id" => $shortname."_pnav",
			"type" => "select",
			"options" => array("Pagination", "Next Previous Link"),
			"std" => ""),

	array( "name" => "Font Family",
			"desc" => "Select your theme font family",
			"id" => $shortname."_theme_font",
			"type" => "select",
			"options" => array("Default", "Open Sans", "Droid Sans", "Lato", "Raleway", "PT Sans", "Noto Sans", "Oxygen", "Source Sans Pro", "Muli", "Istok Web", "Puritan"),
			"std" => ""),

	array( "name" => "Custom CSS",
			"desc" => "Enter your custom CSS tags here",
			"id" => $shortname."_custom_css",
			"type" => "textarea",
			"std" => ""),

	array( "name" => "Header Images", "type" => "headers"),

	array( "name" => "Default",
			"desc" => "Upload your default header image",
			"id" => $shortname."_default_hdimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Archive",
			"desc" => "Upload your archive header image",
			"id" => $shortname."_archive_hdimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Agent",
			"desc" => "Upload your header image for agent single page",
			"id" => $shortname."_agent_hdimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Search",
			"desc" => "Upload your search header image",
			"id" => $shortname."_search_hdimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "404 Not Found",
			"desc" => "Upload your 404 not found header image",
			"id" => $shortname."_notfound_hdimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Background Images", "type" => "headers"),

	array( "name" => "Background Type",
			"desc" => "Select the background type you want, either full image or pattern",
			"id" => $shortname."_bg_type",
			"type" => "select",
			"options" => array("Image", "Pattern"),
			"std" => ""),

	array( "name" => "Default",
			"desc" => "Upload your default background image",
			"id" => $shortname."_default_bgimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Archive",
			"desc" => "Upload your archive background image",
			"id" => $shortname."_archive_bgimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Agent",
			"desc" => "Upload your agent background image for agent single page",
			"id" => $shortname."_agent_bgimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "Search",
			"desc" => "Upload your search background image",
			"id" => $shortname."_search_bgimage",
			"type" => "upload",
			"std" => ""),

	array( "name" => "404 Not Found",
			"desc" => "Upload your 404 not found background image",
			"id" => $shortname."_notfound_bgimage",
			"type" => "upload",
			"std" => ""),

	array( "type" => "close"),

	array( "name" => "Color Scheme",
			"type" => "section",
			"icon" => "fa fa-pencil-square"),

	array( "type" => "open"),

	array( "name" => "Global Color",
			"desc" => "Enter your global color for your theme (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_global_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Menu Text",
			"desc" => "Enter menu text color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_menu_text_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Headers",
			"desc" => "Enter your header text color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_header_text_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Sidebar Header",
			"desc" => "Enter your sidebar header text color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_sidebar_text_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Button",
			"desc" => "Enter your button background color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_button_bg_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Button Hover",
			"desc" => "Enter your button hover background color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_button_bg_hover_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Button Text",
			"desc" => "Enter your button text color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_button_text_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Footer",
			"desc" => "Enter your footer background color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_footer_bg_color",
			"type" => "color",
			"std" => ""),

	array( "name" => "Footer Text",
			"desc" => "Enter your footer text color (<strong>NOTE:</strong> leave empty to use default theme colors)",
			"id" => $shortname."_footer_text_color",
			"type" => "color",
			"std" => ""),

	array( "type" => "close"),

	array( "name" => "Social",
			"type" => "section",
			"icon" => "fa fa-plus-square"),

	array( "type" => "open"),

	array( "name" => "RSS Feed",
			"desc" => "Enter rss feed link",
			"id" => $shortname."_rss",
			"type" => "text",
			"std" => ""),

	array( "name" => "Twitter ID",
			"desc" => "Enter twitter id",
			"id" => $shortname."_twitter",
			"type" => "text",
			"std" => ""),

	array( "name" => "Facebook ID",
			"desc" => "Enter facebook id",
			"id" => $shortname."_facebook",
			"type" => "text",
			"std" => ""),

	array( "name" => "Youtube Link",
			"desc" => "Enter your youtube link",
			"id" => $shortname."_youtube",
			"type" => "text",
			"std" => ""),

	array( "name" => "Pinterest",
			"desc" => "Enter your pinterest id",
			"id" => $shortname."_pinterest",
			"type" => "text",
			"std" => ""),

	array( "name" => "LinkedIn",
			"desc" => "Enter your linkedin link",
			"id" => $shortname."_linkedin",
			"type" => "text",
			"std" => ""),

	array( "name" => "Dribbble",
			"desc" => "Enter your dribbble id",
			"id" => $shortname."_dribbble",
			"type" => "text",
			"std" => ""),

	array( "type" => "close"),

	array( "name" => "Footer",
			"type" => "section",
			"icon" => "fa fa-align-justify"),

	array( "type" => "open"),

	array( "name" => "Hide Widgets?",
			"desc" => "Check the box to hide footer widgets",
			"id" => $shortname."_hide_widgets",
			"type" => "checkbox",
			"std" => ""),

	array( "name" => "Copyright Text",
			"desc" => "Enter your copyright text here",
			"id" => $shortname."_copyright_text",
			"type" => "text",
			"std" => "All Rights Reserved"),

	array( "name" => "Google Analytics Code",
			"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to your site's code before the closing &lt;body&gt; tag.",
			"id" => $shortname."_ga_code",
			"type" => "textarea",
			"std" => ""),

	array( "type" => "close"),

	array( "name" => "Theme Pages", "type" => "top_section"),
	array( "type" => "close"),

	array( "name" => "Homepage",
			"type" => "section",
			"icon" => "fa fa-home"),

	array( "name" => "Welcome", "type" => "headers"),

	array( "name" => "Header",
			"desc" => "Enter your welcome header",
			"id" => $shortname."_welcome_header",
			"type" => "text",
			"std" => "Start a good life"),

	array( "name" => "Welcome Text",
			"desc" => "Enter your welcome text/paragraph here",
			"id" => $shortname."_welcome_text",
			"type" => "textarea",
			"std" => "Our Services go beyond just providing safe, serene and beautiful exclusive house. As an extended service, we also provide house packages that give you access to an array of house designs, suited to a variety of lot sizes and unique family needs"),

	array( "name" => "Properties", "type" => "headers"),

	array( "name" => "Limit",
			"desc" => "Enter your properties number of posts limit",
			"id" => $shortname."_property_limit",
			"type" => "text",
			"std" => "6"),

	array( "name" => "Limit (Featured)",
			"desc" => "Enter your properties number of posts limit for Featured Properties",
			"id" => $shortname."_featured_property_limit",
			"type" => "text",
			"std" => "2"),

	array( "name" => "Blog", "type" => "headers"),

	array( "name" => "Limit",
			"desc" => "Enter your blog number of posts limit",
			"id" => $shortname."_blog_limit",
			"type" => "text",
			"std" => "3"),

	array( "name" => "Agent", "type" => "headers"),

	array( "name" => "Limit",
			"desc" => "Enter your agents number of posts limit",
			"id" => $shortname."_agent_limit",
			"type" => "text",
			"std" => "3"),

	array( "name" => "Slider", "type" => "headers"),

	array( "name" => "Limit",
			"desc" => "Enter your slider number of posts limit",
			"id" => $shortname."_slider_limit",
			"type" => "text",
			"std" => "5"),

	array( "name" => "Order Type",
			"desc" => "Select your slider order type (ASC or DESC)",
			"id" => $shortname."_slider_order",
			"type" => "select",
			"options" => array("DESC", "ASC"),
			"std" => ""),

	array( "name" => "OrderBy Type",
			"desc" => "Select your orderby parameter for slider",
			"id" => $shortname."_slider_orderby",
			"type" => "select",
			"options" => array("ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order"),
			"std" => ""),

	array( "name" => "Services", "type" => "headers"),

	array( "name" => "Limit",
			"desc" => "Enter your services number of posts limit",
			"id" => $shortname."_services_limit",
			"type" => "text",
			"std" => "3"),

	array( "name" => "Order Type",
			"desc" => "Select your services order type (ASC or DESC)",
			"id" => $shortname."_services_order",
			"type" => "select",
			"options" => array("DESC", "ASC"),
			"std" => ""),

	array( "name" => "OrderBy Type",
			"desc" => "Select your orderby parameter for services",
			"id" => $shortname."_services_orderby",
			"type" => "select",
			"options" => array("ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order"),
			"std" => ""),

	array( "name" => "Google Map", "type" => "headers"),

	array( "name" => "Latitude",
			"desc" => "Enter your google map latitude",
			"id" => $shortname."_home_map_lat",
			"type" => "text",
			"std" => "37.0625"),

	array( "name" => "Longitude",
			"desc" => "Enter your google map longitude",
			"id" => $shortname."_home_map_lng",
			"type" => "text",
			"std" => "-95.677068"),

	array( "name" => "Map Zoom",
			"desc" => "Enter your value for map zoom from 1-20",
			"id" => $shortname."_home_map_zoom",
			"type" => "text",
			"std" => "8"),

	array( "type" => "close"),

	array( "name" => "Properties",
			"type" => "section",
			"icon" => "fa fa-briefcase"),

	array( "name" => "Main", "type" => "headers"),

	array( "name" => "Currency",
			"desc" => "Global - Currency for properties",
			"id" => $shortname."_property_currency",
			"type" => "text",
			"std" => "$"),

	array( "name" => "Limit",
			"desc" => "Global - Posts per page for properties",
			"id" => $shortname."_num_properties",
			"type" => "text",
			"std" => "10"),

	array( "name" => "Order Type",
			"desc" => "Select your properties album order type (ASC or DESC)",
			"id" => $shortname."_album_order",
			"type" => "select",
			"options" => array("DESC", "ASC"),
			"std" => ""),

	array( "name" => "OrderBy Type",
			"desc" => "Select your orderby parameter for properties album",
			"id" => $shortname."_album_orderby",
			"type" => "select",
			"options" => array("ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order"),
			"std" => ""),

	array( "name" => "Taxonomy Layout",
			"desc" => "Select your taxonomy layout style",
			"id" => $shortname."_tax_layout",
			"type" => "select",
			"options" => array("Default", "2 Columns", "3 Columns", "4 Columns"),
			"std" => ""),

	array( "name" => "Single Post", "type" => "headers"),

	array( "name" => "Thumbnail Slider",
			"desc" => "Check the box to exclude post thumbnail in properties slider",
			"id" => $shortname."_properties_thumb_slider",
			"type" => "checkbox",
			"std" => ""),

	array( "name" => "Attachment Order",
			"desc" => "Select your ordering style in properties page for album images",
			"id" => $shortname."_attachment_order",
			"type" => "select",
			"options" => array("DESC", "ASC"),
			"std" => ""),

	array( "name" => "Attachment OrderBy",
			"desc" => "Select your orderby parameter in properties page for album images",
			"id" => $shortname."_attachment_orderby",
			"type" => "select",
			"options" => array("ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order"),
			"std" => "menu_order"),

	array( "type" => "close"),

	array( "name" => "Contact",
			"type" => "section",
			"icon" => "fa fa-phone-square"),

	array( "type" => "open"),

	array( "name" => "Main", "type" => "headers"),

	array( "name" => "Fax",
			"desc" => "Enter your fax number here",
			"id" => $shortname."_fax",
			"type" => "text",
			"std" => "123-456-7890"),

	array( "name" => "Phone Number",
			"desc" => "Enter your company phone number",
			"id" => $shortname."_phone_number",
			"type" => "text",
			"std" => "1-800-234-6789"),

	array( "name" => "Address",
			"desc" => "Enter your company complete address",
			"id" => $shortname."_contact_address",
			"type" => "text",
			"std" => "Kumintang Ilaya, Batangas Philippines"),

	array( "name" => "Google Map", "type" => "headers"),

	array( "name" => "Latitude",
			"desc" => "Enter your google map latitude",
			"id" => $shortname."_map_lat",
			"type" => "text",
			"std" => "37.0625"),

	array( "name" => "Longitude",
			"desc" => "Enter your google map longitude",
			"id" => $shortname."_map_lng",
			"type" => "text",
			"std" => "-95.677068"),

	array( "name" => "Map Zoom",
			"desc" => "Enter your value for map zoom from 1-20",
			"id" => $shortname."_map_zoom",
			"type" => "text",
			"std" => "8"),

	array( "name" => "Marker Title",
			"desc" => "Enter your google map marker title",
			"id" => $shortname."_map_marker",
			"type" => "text",
			"std" => "Add your marker title window"),

	array( "name" => "Marker Window",
			"desc" => "Enter your google map marker info window",
			"id" => $shortname."_map_window",
			"type" => "textarea",
			"std" => "Please add your text marker here"),

	array( "type" => "close"),

);
?>