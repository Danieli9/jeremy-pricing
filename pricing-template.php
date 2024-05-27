<?php
/**
 * Template Name: Pricing Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( !is_admin() && ( ! defined('DOING_AJAX') || ( defined('DOING_AJAX') && ! DOING_AJAX ) ) ) {
    ob_start( 'html5_slash_fixer' );
    add_action( 'shutdown', 'html5_slash_fixer_flush' );
}

function html5_slash_fixer( $buffer ) {
    return str_replace( ' />', '>', $buffer );
}

function html5_slash_fixer_flush() {
    ob_end_flush();
}

get_header();

    // FIELDS
    $pricing_credits_title = get_field( 'pricing_credits_title' );
    $pricing_credits_subtitle = get_field( 'pricing_credits_subtitle' );
    $pricing_credits_table_title = get_field( 'pricing_credits_table_title' );
    $pricing_credits_selected_package = get_field( 'pricing_credits_selected_package' );
    $pricing_credits_button = get_field('pricing_credits_button');
    if ($pricing_credits_button) {
        $pcblink_url = $pricing_credits_button['url'];
        $pcblink_title = $pricing_credits_button['title'];
        $pcblink_target = $pricing_credits_button['target'] ? $pricing_credits_button['target'] : '_self';
    }
    $pricing_credits_table = get_field( 'pricing_credits_table' ); // REPEATER
    $pricing_credits_enable_or_disable = get_field( 'pricing_credits_enable_or_disable' );

    $pricing_table_first_title = get_field( 'pricing_table_first_title' );
    $pricing_table_first_subtitle = get_field( 'pricing_table_first_subtitle' );
    $pricing_table_first_horizontal_head = get_field( 'pricing_table_first_horizontal_head' ); // REPEATER
    $pricing_table_first_horizontal_body = get_field( 'pricing_table_first_horizontal_body' ); // REPEATER
    $pricing_table_first_enable_or_disable = get_field( 'pricing_table_first_enable_or_disable' );

    $pricing_table_second_title = get_field( 'pricing_table_second_title' );
    $pricing_table_second_subtitle = get_field( 'pricing_table_second_subtitle' );





    $pricing_table_second_horizontal_head = get_field( 'pricing_table_second_horizontal_head' ); // REPEATER
    $pricing_table_second_horizontal_body = get_field( 'pricing_table_second_horizontal_body' ); // REPEATER








    $pricing_table_second_enable_or_disable = get_field( 'pricing_table_second_enable_or_disable' );

    $pricing_need_box_black_title = get_field( 'pricing_need_box_black_title' );
    $pricing_need_box_black_subtitle = get_field( 'pricing_need_box_black_subtitle' );
    $pricing_need_box_black_content = get_field( 'pricing_need_box_black_content' );
    $pricing_need_box_black_button = get_field( 'pricing_need_box_black_button' );
    if ($pricing_need_box_black_button) {
        $pnbbblink_url = $pricing_need_box_black_button['url'];
        $pnbbblink_title = $pricing_need_box_black_button['title'];
        $pnbbblink_target = $pricing_need_box_black_button['target'] ? $pricing_need_box_black_button['target'] : '_self';
    }
    $pricing_need_box_black_image = get_field( 'pricing_need_box_black_image' );
    $pricing_need_box_black_enable_or_disable = get_field( 'pricing_need_box_black_enable_or_disable' );

    $pricing_testimonials_title = get_field( 'pricing_testimonials_title' );
    $pricing_testimonials_list = get_field( 'pricing_testimonials_list' ); // REPEATER
    $pricing_testimonials_enable_or_disable = get_field( 'pricing_testimonials_enable_or_disable' );

    $pricing_faq_title = get_field( 'pricing_faq_title' );
    $pricing_faq_list = get_field( 'pricing_faq_list' ); // REPEATER
    $pricing_faq_enable_or_disable = get_field( 'pricing_faq_enable_or_disable' );

    $pricing_need_box_white_title = get_field( 'pricing_need_box_white_title' );
    $pricing_need_box_white_subtitle = get_field( 'pricing_need_box_white_subtitle' );
    $pricing_need_box_white_content = get_field( 'pricing_need_box_white_content' );
    $pricing_need_box_white_button = get_field( 'pricing_need_box_white_button' );
    if ($pricing_need_box_white_button) {
        $pnbwblink_url = $pricing_need_box_white_button['url'];
        $pnbwblink_title = $pricing_need_box_white_button['title'];
        $pnbwblink_target = $pricing_need_box_white_button['target'] ? $pricing_need_box_white_button['target'] : '_self';
    }
    $pricing_need_box_white_image = get_field( 'pricing_need_box_white_image' );
    $pricing_need_box_white_enable_or_disable = get_field( 'pricing_need_box_white_enable_or_disable' );

?>

<main id="primary" class="site-pricing">

<?php if ( $pricing_credits_enable_or_disable == true ) : ?>
    <section class="pricing-credits">
        <div class="pricing_wrapper">
            <div class="container">
                <div class="pricing-credits-header">
                    <?php if ( $pricing_credits_title ) : ?>
                        <h1><?php echo esc_html($pricing_credits_title); ?></h1>
                    <?php endif; ?>
                    <?php if ( $pricing_credits_subtitle ) : ?>
                        <p><?php echo esc_html($pricing_credits_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pricing-credits-table">
                <div class="container">
                    <?php if ( $pricing_credits_table_title ) : ?>
                        <p><?php echo esc_html($pricing_credits_table_title); ?></p>
                    <?php endif; ?>
                </div>
                <div class="pricing-credits-table-container">
                    <div class="pricing-credits-table-wrapper swiper-wrapper">
                        <div class="swiper swiper-prices">
                            <div class="swiper-wrapper">

                                <?php if ($pricing_credits_table) : ?>
                                    <?php foreach ($pricing_credits_table as $pricing_credits_tables) : ?>
                                        <?php
                                            // Sub Fields
                                            $pricing_credits_table_single_number = $pricing_credits_tables['pricing_credits_table_single_number'];
                                            $pricing_credits_table_single_subtitle = $pricing_credits_tables['pricing_credits_table_single_subtitle'];
                                            $pricing_credits_table_single_price = $pricing_credits_tables['pricing_credits_table_single_price'];
                                            $pricing_credits_table_single_data = $pricing_credits_tables['pricing_credits_table_single_data']; // REPEATER
                                        ?>

                                        <div class="pricing-credits-table-wrapper-single swiper-slide" data-credits="<?php echo esc_html($pricing_credits_table_single_number); ?>" 
                                        
                                        <?php if ($pricing_credits_table_single_data) : ?>
                                            <?php $itemCounter = 1; ?>
                                            <?php foreach ($pricing_credits_table_single_data as $pricing_credits_table_single_datas) : ?>
                                                <?php
                                                    // Sub Fields
                                                    $pricing_credits_table_single_data_item = $pricing_credits_table_single_datas['pricing_credits_table_single_data_item'];
                                                ?>
                                                data-item-<?php echo $itemCounter; ?>="<?php echo esc_html($pricing_credits_table_single_data_item); ?>"
                                                <?php $itemCounter++; ?>    
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        
                                        >

                                            <div class="pricing-credits-table">
                                                <div class="pricing-credits-table-header">
                                                    <?php if ( $pricing_credits_table_single_number ) : ?>
                                                        <p class="num"><?php echo esc_html($pricing_credits_table_single_number); ?></p>
                                                    <?php endif; ?>
                                                    <?php if ( $pricing_credits_table_single_subtitle ) : ?>
                                                        <p class="text"><?php echo esc_html($pricing_credits_table_single_subtitle); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="pricing-credits-table-footer">
                                                    <?php if ( $pricing_credits_table_single_price ) : ?>
                                                        <p class="price"><span><?php echo esc_html($pricing_credits_table_single_price); ?></span></p>
                                                    <?php endif; ?>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="pricing-credits-footer">
                        <div class="pricing-credits-footer-text">
                            <?php if ( $pricing_credits_selected_package ) : ?>
                                <p class="select"><?php echo esc_html($pricing_credits_selected_package); ?></p>
                            <?php endif; ?>
                            <p class="num">40</p>
                            <p class="credits">credits</p>
                        </div>
                        <?php if ( $pricing_credits_button ) : ?>
                            <a class="pricing-credits-footer-btn" href="<?php echo esc_url( $pcblink_url ); ?>" target="<?php echo esc_attr( $pcblink_target ); ?>"><?php echo esc_html( $pcblink_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>

<?php if ( $pricing_table_first_enable_or_disable == true ) : ?>
    <section class="pricing-table">
        
        <div class="container">
            <div class="pricing_wrapper">
                <div class="pricing-table-header">
                    <?php if ( $pricing_table_first_title ) : ?>
                        <h2><?php echo $pricing_table_first_title; ?></h2>
                    <?php endif; ?>
                    <?php if ( $pricing_table_first_subtitle ) : ?>
                        <p><?php echo esc_html($pricing_table_first_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="pricing_wrapper" style="overflow-x:auto;">
            <div class="pricing-table-wrapper">

                <table>
                    <tr>
                        <?php if ($pricing_table_first_horizontal_head) : ?>
                            <?php foreach ($pricing_table_first_horizontal_head as $pricing_table_first_horizontal_heads) : ?>
                                <?php
                                    // Sub Fields
                                    $pricing_table_first_column_single_head = $pricing_table_first_horizontal_heads['pricing_table_first_column_single_head'];
                                ?>
                                <?php if ( $pricing_table_first_column_single_head ) : ?>
                                    <th><?php echo esc_html($pricing_table_first_column_single_head); ?></th>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tr>
                        <?php if ($pricing_table_first_horizontal_body) : ?>
                            <?php foreach ($pricing_table_first_horizontal_body as $pricing_table_first_horizontal_bodys) : ?>
                                <?php
                                    // Sub Fields
                                    $pricing_table_first_horizontal_fields_title = $pricing_table_first_horizontal_bodys['pricing_table_first_horizontal_fields_title'];
                                    $pricing_table_first_horizontal_fields = $pricing_table_first_horizontal_bodys['pricing_table_first_horizontal_fields']; // REPEATER
                                ?>

                                <tr>
                                    <?php if ( $pricing_table_first_horizontal_fields_title ) : ?>
                                        <th><p><?php echo esc_html($pricing_table_first_horizontal_fields_title); ?></p></td>
                                    <?php endif; ?>

                                    <?php if ($pricing_table_first_horizontal_fields) : ?>
                                        <?php foreach ($pricing_table_first_horizontal_fields as $pricing_table_single) : ?>
                                            <?php
                                                // Sub Fields
                                                $pricing_table_single_field = $pricing_table_single['pricing_table_first_column_single'];
                                            ?>
                                            <?php if ( $pricing_table_single_field ) : ?>
                                                <td data-item="<?php echo $pricing_table_single_field; ?>"><?php echo $pricing_table_single_field; ?></td>
                                            <?php endif; ?>
                                            
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </table>

            </div>
        </div>

    </section>
<?php endif; ?> 

<?php if ( $pricing_table_second_enable_or_disable == true ) : ?>
    <section class="pricing-table sec">

        <div class="container">
            <div class="pricing_wrapper">
                <div class="pricing-table-header">
                    <?php if ( $pricing_table_second_title ) : ?>
                        <h2><?php echo esc_html($pricing_table_second_title); ?></h2>
                    <?php endif; ?>
                    <?php if ( $pricing_table_second_subtitle ) : ?>
                        <p><?php echo esc_html($pricing_table_second_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="pricing_wrapper" style="overflow-x:auto;">
            <div class="pricing-table-wrapper">
                <table>
                    <tr>
                    <?php if ($pricing_table_second_horizontal_head) : ?>
                        <?php foreach ($pricing_table_second_horizontal_head as $pricing_table_second_horizontal_heads) : ?>
                            <?php
                                // Sub Fields
                                $pricing_table_second_column_single_head = $pricing_table_second_horizontal_heads['pricing_table_second_column_single_head'];
                            ?>
                            <?php if ( $pricing_table_second_column_single_head ) : ?>
                                <th><?php echo esc_html($pricing_table_second_column_single_head); ?></th>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                        
                    </tr>
                    <?php if ($pricing_table_second_horizontal_body) : ?>
                        <?php foreach ($pricing_table_second_horizontal_body as $pricing_table_second_horizontal_bodys) : ?>
                            <?php
                                // Sub Fields
                                $pricing_table_second_horizontal_fields_title = $pricing_table_second_horizontal_bodys['pricing_table_second_horizontal_fields_title'];
                                $pricing_table_second_horizontal_fields = $pricing_table_second_horizontal_bodys['pricing_table_second_horizontal_fields'];
                            ?>
                            <tr>
                                <?php if ( $pricing_table_second_horizontal_fields_title ) : ?>
                                    <td><p><?php echo $pricing_table_second_horizontal_fields_title; ?></p></td>
                                <?php endif; ?>

                                <?php if ($pricing_table_second_horizontal_fields) : ?>
                                    <?php foreach ($pricing_table_second_horizontal_fields as $pricing_table_second_horizontal_fieldss) : ?>
                                        <?php
                                            // Sub Fields
                                            $pricing_table_second_column_single_sec_table = $pricing_table_second_horizontal_fieldss['pricing_table_second_column_single_sec_table'];
                                        ?>
                                        <?php if ( $pricing_table_second_column_single_sec_table ) : ?>
                                            <td><span data-item="<?php echo esc_html($pricing_table_second_column_single_sec_table); ?>" ><?php echo esc_html($pricing_table_second_column_single_sec_table); ?></span> /per floorplan</td>
                                        <?php endif; ?>
                                        
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    

                </table>
            </div>
        </div>

    </section>
<?php endif; ?>  

<?php if ( $pricing_need_box_black_enable_or_disable == true ) : ?>
    <section class="pricing-need-box-black">
        <div class="container">
            <div class="pricing-need-box-black-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pricing-need-box-black-content">
                            <?php if ( $pricing_need_box_black_title ) : ?>
                                <h2><?php echo esc_html($pricing_need_box_black_title); ?></h2>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_black_subtitle ) : ?>
                                <h3><?php echo esc_html($pricing_need_box_black_subtitle); ?></h3>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_black_content ) : ?>
                                <p><?php echo esc_html($pricing_need_box_black_content); ?></p>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_black_button ) : ?>
                                <a href="<?php echo esc_url( $pnbbblink_url ); ?>" target="<?php echo esc_attr( $pnbbblink_target ); ?>"><?php echo esc_html( $pnbbblink_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php if ( $pricing_need_box_black_image ) : ?>
                            <?php echo wp_get_attachment_image( $pricing_need_box_black_image, 'full', '', ['class' => ''] ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( $pricing_testimonials_enable_or_disable == true ) : ?>
    <section class="pricing-testimonials">
        <div class="container">
            <?php if ( $pricing_testimonials_title ) : ?>
                <h2><?php echo esc_html($pricing_testimonials_title); ?></h2>
            <?php endif; ?>
        </div>
        
        <div class="pricing-testimonials-wrapper">
            <div class="pricing-testimonials-wrapper-tabs">
                <div class="pricing-testimonials-container">
                    <div class="pricing_wrapper">
                        <div class="swiper-prices-test">
                            <div class="swiper-wrapper">
                                <?php if ($pricing_testimonials_list) : ?>
                                    <?php $counter = 1; ?>
                                    <?php foreach ($pricing_testimonials_list as $pricing_testimonials_lists) : ?>
                                        <?php
                                            // Sub Fields
                                            $pricing_testimonials_list_image = $pricing_testimonials_lists['pricing_testimonials_list_image'];
                                            $content_value = 'content' . $counter;
                                            $active_class = ($counter == 1) ? 'active' : '';
                                        ?>
                                        <div class="pricing-testimonials-wrapper-tabs-single swiper-slide <?php echo $active_class; ?>" data-content="<?php echo $content_value; ?>">
                                            <?php if ($pricing_testimonials_list_image) : ?>
                                                <?php echo wp_get_attachment_image($pricing_testimonials_list_image, 'full', '', ['class' => 'img-fluid']); ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php $counter++; // Increment counter ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="pricing_wrapper">
                    <div class="pricing-testimonials-wrapper-content">
                        <?php if ($pricing_testimonials_list) : ?>
                            <?php $counter2 = 1; ?>
                            <?php foreach ($pricing_testimonials_list as $pricing_testimonials_listss) : ?>
                                <?php
                                    // Sub Fields
                                    $pricing_testimonials_list_content = $pricing_testimonials_listss['pricing_testimonials_list_content'];
                                    $pricing_testimonials_list_name = $pricing_testimonials_listss['pricing_testimonials_list_name'];
                                    $pricing_testimonials_list_position = $pricing_testimonials_listss['pricing_testimonials_list_position'];

                                    $content_value2 = 'content' . $counter2;
                                    $active_class2 = ($counter2 == 1) ? 'active' : ''; 
                                ?>
                                <div id="<?php echo $content_value2; ?>" class="pricing-testimonials-wrapper-content-single <?php echo $active_class2; ?>">
                                    <div class="pricing-testimonials-wrapper-content-single-main">
                                        <?php if ( $pricing_testimonials_list_content ) : ?>
                                            <p><?php echo esc_html($pricing_testimonials_list_content); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pricing-testimonials-wrapper-content-single-footer">
                                        <?php if ( $pricing_testimonials_list_name ) : ?>
                                            <p class="name"><?php echo esc_html($pricing_testimonials_list_name); ?></p>
                                        <?php endif; ?>
                                        <?php if ( $pricing_testimonials_list_position ) : ?>
                                            <p class="pos"><?php echo esc_html($pricing_testimonials_list_position); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php $counter2++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
       
       
    </section>
<?php endif; ?>  

<?php if ( $pricing_faq_enable_or_disable == true ) : ?>
    <section class="pricing-faq">
        <div class="container">
            <div class="pricing_wrapper">
            <?php if ( $pricing_faq_title ) : ?>
                <h2><?php echo esc_html($pricing_faq_title); ?></h2>
            <?php endif; ?>
            <div class="accordion">

                <?php if ($pricing_faq_list) : ?>
                    <?php foreach ($pricing_faq_list as $pricing_faq_lists) : ?>
                        <?php
                            // Sub Fields
                            $pricing_faq_list_title = $pricing_faq_lists['pricing_faq_list_title'];
                            $pricing_faq_list_content = $pricing_faq_lists['pricing_faq_list_content'];
                        ?>
                        <div class="accordion-item">
                            <?php if ( $pricing_faq_list_title ) : ?>
                                <button class="accordion-header"><?php echo esc_html($pricing_faq_list_title); ?></button>
                            <?php endif; ?>
                            
                            <div class="accordion-content">
                                <?php if ( $pricing_faq_list_content ) : ?>
                                    <p><?php echo esc_html($pricing_faq_list_content); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( $pricing_need_box_white_enable_or_disable == true ) : ?>
    <section class="pricing-need-box-white">
        <div class="container">
            <div class="pricing-need-box-white-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pricing-need-box-white-content">
                            <?php if ( $pricing_need_box_white_title ) : ?>
                                <h2><?php echo esc_html($pricing_need_box_white_title); ?></h2>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_white_subtitle ) : ?>
                                <h3><?php echo esc_html($pricing_need_box_white_subtitle); ?></h3>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_white_content ) : ?>
                                <p><?php echo esc_html($pricing_need_box_white_content); ?></p>
                            <?php endif; ?>
                            <?php if ( $pricing_need_box_white_button ) : ?>
                                <a href="<?php echo esc_url( $pnbwblink_url ); ?>" target="<?php echo esc_attr( $pnbwblink_target ); ?>"><?php echo esc_html( $pnbwblink_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php if ( $pricing_need_box_white_image ) : ?>
                            <?php echo wp_get_attachment_image( $pricing_need_box_white_image, 'full', '', ['class' => ''] ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>  

</main>

<script>
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const currentlyActiveAccordionHeader = document.querySelector('.accordion-header.active');
        const nextAccordionContent = button.nextElementSibling;

        if (currentlyActiveAccordionHeader && currentlyActiveAccordionHeader !== button) {
            currentlyActiveAccordionHeader.classList.remove('active');
            currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
        }

        button.classList.toggle('active');

        if (button.classList.contains('active')) {
            nextAccordionContent.style.maxHeight = nextAccordionContent.scrollHeight + "px";
        } else {
            nextAccordionContent.style.maxHeight = 0;
        }
    });
});

document.addEventListener('click', (e) => {
    if (!e.target.classList.contains('accordion-header')) {
        document.querySelectorAll('.accordion-header').forEach(button => {
            if (button.classList.contains('active')) {
                button.classList.remove('active');
                button.nextElementSibling.style.maxHeight = 0;
            }
        });
    }
});

// Get all tabs and contents
const tabs = document.querySelectorAll('.pricing-testimonials-wrapper-tabs-single');
const contents = document.querySelectorAll('.pricing-testimonials-wrapper-content-single');

// Function to handle tab click
function handleTabClick(event) {
    // Remove 'active' class from all contents
    contents.forEach(content => {
        content.classList.remove('active');
    });

    // Remove 'active' class from all tabs
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    // Add 'active' class to clicked tab
    event.currentTarget.classList.add('active');

    // Get the content id from data attribute
    const contentId = event.currentTarget.getAttribute('data-content');

    // Add 'active' class to the corresponding content
    document.getElementById(contentId).classList.add('active');
}

// Add click event listener to each tab
tabs.forEach(tab => {
    tab.addEventListener('click', handleTabClick);
});

// SWIPER
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-prices', {
        slidesPerView: 'auto',
        spaceBetween: 7,
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-prices-test', {
        slidesPerView: 'auto',
        spaceBetween: 40,
    });
});
// END OF SWIPER

document.addEventListener('DOMContentLoaded', function () {
    const packageElements = document.querySelectorAll('.pricing-credits-table-wrapper-single');
    const numElement = document.querySelector('.pricing-credits-footer .num');
    const creditsSpanElement = document.querySelector('.pricing-table-header .credits-span');
    const tableItems = document.querySelectorAll('table td[data-item], table td span[data-item]');

    packageElements.forEach(element => {
        element.addEventListener('click', function () {
            // Removing active class from all packages
            packageElements.forEach(el => el.classList.remove('active'));

            // Adding active class to the selected package
            this.classList.add('active');

            // Updating values on the page
            const credits = this.getAttribute('data-credits');
            numElement.textContent = credits;
            creditsSpanElement.textContent = credits;

            // Updating values in the table and text colors
            tableItems.forEach(item => {
                const itemIndex = item.getAttribute('data-item');
                const newValue = this.getAttribute(`data-item-${itemIndex}`);
                if (newValue !== null) {
                    if (item.textContent != newValue) {
                        item.textContent = newValue;
                        if (credits == 20) {
                            item.classList.remove('dark-text');
                            item.classList.add('gray-text');
                        } else {
                            item.classList.remove('gray-text');
                            item.classList.add('dark-text');
                        }
                    }
                }
            });
        });
    });

    // Set the first package as default
    const defaultPackage = packageElements[0]; // Always select the first package
    if (defaultPackage) {
        defaultPackage.classList.add('active');
        const credits = defaultPackage.getAttribute('data-credits');
        numElement.textContent = credits;
        creditsSpanElement.textContent = credits;
        tableItems.forEach(item => {
            const itemIndex = item.getAttribute('data-item');
            const newValue = defaultPackage.getAttribute(`data-item-${itemIndex}`);
            if (newValue !== null) {
                item.textContent = newValue;
                item.classList.add('gray-text');
            }
        });
    }
});

</script>
<?php
get_footer('pricing');