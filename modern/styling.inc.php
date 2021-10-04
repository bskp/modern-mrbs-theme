<?php
namespace MRBS;

// DEFAULT THEME

// ***** COLOURS ************************
// Colours used in MRBS.    All the colours are defined here as PHP variables

$body_background_color          = "#f9fbfc";    // background colour for the main body
$standard_font_color            = "#0B263B";    // default font color
$header_font_color              = "#ffffff";    // font color for text in headers
$highlight_font_color           = "#ff0066";    // used for highlighting text (eg links, errors)
$color_key_font_color           = $standard_font_color;    // used in the colour key table

$banner_back_color              = "#1976D2";    // background colour for banner
$banner_border_color            = $body_background_color;    // border colour for banner
$banner_font_color              = $header_font_color;       // font colour for banner
$banner_nav_hover_color         = 'darkblue';   // background colour when header links are hovered over

$minical_view_color             = "#2b3a42";    // used for highlighting the dates in the current view
$minical_today_color            = "#bdd4de";    // used for highlighting today

$header_back_color              = $banner_back_color;  // background colour for headers
$flatpickr_highlight_color      = $banner_back_color;  // used for highlighting the date

$admin_table_header_back_color  = $header_back_color;     // background colour for header and also border colour for table cells
$admin_table_header_sep_color   = $body_background_color; // vertical separator colour in header
$admin_table_header_font_color  = $header_font_color;     // font colour for header
$admin_table_border_color       = "#C3CCD3";

$main_table_border_color        = "#dddddd";    // border colour for day/week/month tables - outside
$main_table_header_border_color = "#dddddd";    // border colour for day/week/month tables - header
$main_table_body_h_border_color = "#ffffff";    // border colour for day/week/month tables - body, horizontal
$main_table_body_v_border_color = "#e4e4e4";    // border colour for day/week/month tables - body, vertical
$main_table_month_color         = "#ffffff";    // background colour for days in the month view
$main_table_month_invalid_color = "#d1d9de";    // background colour for invalid days in the month view
$main_table_slot_invalid_color  = "#d1d9de";    // background colour for invalid slots in the day and week views
$main_table_slot_private_type_color = "#d1d9de";          // background colour when the type has to kept private
$main_table_labels_back_color   = $header_back_color;     // background colour for the row labels column
$timeline_color                 = $header_back_color;

$zebra_even_color = 'white';    // Colour for even rows in the main table
$zebra_odd_color  = '#E2E4FF';  // Colour for even rows in the main table

// border colours for the main table when it is printed.     These are used by mrbs-print.css.php
$main_table_border_color_print        = "#879AA8";    // border colour for the main table (print view)
$main_table_header_border_color_print = "#879AA8";    // border colour for day/week/month tables - header (print view)
$main_table_body_h_border_color_print = "#879AA8";    // border colour for day/week/month tables - body, horizontal (print view)
$main_table_body_v_border_color_print = "#879AA8";    // border colour for day/week/month tables - body, vertical (print view)

// font colours for the main table when it is printed
$header_font_color_print        = "#0B263B";
$anchor_link_color_header_print = "#0B263B";

$report_table_border_color      = $standard_font_color;
$report_h2_border_color         = $banner_back_color;     // border colour for <h2> in report.php
$report_h3_border_color         = "#879AA8";              // border colour for <h2> in report.php

$search_table_border_color      = $standard_font_color;

$site_faq_entry_border_color    = "#C3CCD3";              // used to separate individual FAQ's in help.php

$anchor_link_color              = $standard_font_color;        // link color
$anchor_visited_color           = $anchor_link_color;          // link color (visited)
$anchor_hover_color             = $anchor_link_color;          // link color (hover)

$anchor_link_color_banner       = $header_font_color;          // link color
$anchor_visited_color_banner    = $anchor_link_color_banner;   // link color (visited)
$anchor_hover_color_banner      = $anchor_link_color_banner;   // link color (hover)

$anchor_link_color_header       = $standard_font_color;          // link color
$anchor_visited_color_header    = $anchor_link_color_header;   // link color (visited)
$anchor_hover_color_header      = $anchor_link_color_header;   // link color (hover)

$column_hidden_color            = $main_table_month_invalid_color;    // hidden days in the week and month views
$calendar_hidden_color          = "#dae0e4";                          // hidden days in the mini-cals
$row_even_color                 = "#ffffff";        // even rows in the day and week views
$row_odd_color                  = "#efefef";        // even rows in the day and week views
$row_highlight_color            = $banner_back_color;  // used for highlighting a row

$help_highlight_color           = "#ffe6f0";        // highlighting text on the help page

// Button colours
$button_color_stops = array('#eeeeee', '#cccccc');  // linear gradient colour stops
$button_inset_color = 'darkblue';

// These are the colours used for distinguishing between the dfferent types of bookings in the main
// displays in the day, week and month views
if(!isset($booking_type_colors)) {
    $color_types = array(
        'A' => "#ffff99",
        'B' => "#99cccc",
        'C' => "#ffffcd",
        'D' => "#cde6e6",
        'E' => "#6dd9c4",
        'F' => "#82adad",
        'G' => "#ccffcc",
        'H' => "#d9d982",
        'I' => "#99cc66",
        'J' => "#e6ffe6");
}
else {
    $color_types = $booking_type_colors;
}

// colours used for pending.php and bookings awaiting approval
$outstanding_color         = "#FFF36C";     // font colour for the outstanding reservations message in the header
$pending_header_back_color = $header_back_color; // background colour for series headers
$series_entry_back_color   = "#FFFCDA";     // background colour for entries in a series
$pending_control_color     = "#FFF36C";     // background colour for the series +/- controls in pending.php
$attention_color           = 'darkorange';  // background colour for the number of bookings awaiting approval

// ***** DIMENSIONS *******************
$banner_border_width          = '0';  // (px)  border width for the outside of the banner
$banner_border_cell_width     = '1';  // (px)  border width for the cells of the banner
$main_table_border_width      = '0';  // (px)  border width for the outside of the main day/week/month tables
$main_table_cell_border_width = '1';  // (px)  vertical border width for the cells of the main day/week/month tables
$main_cell_height             = '1.5em';  // height of the cells in the main day/week tables


// ***** FONTS ************************
$standard_font_family  = "Arial, 'Arial Unicode MS', Verdana, sans-serif";

