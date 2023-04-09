<?php
/**
 * Template Name: Resources
 *
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<style>
    body{
        font-family: 'Cabin' !important;
    }
    body h1, body h2, body h3, body h4{
        font-family: 'Cabin' !important;

    }
	#wrapper-navbar{left:0px;}
    .statusCon{
    display: flex;
    padding-left: 20px;
}

.leadContainer header{
    background: #EFEFEF;
    text-align: center;
    padding: 6px;
    text-transform: capitalize;
}
    /* Tabs */
    .tabs {
        width: 100%;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        border: none;
    }
    ul#tabs-nav {
        list-style: none;
        margin: 0;
        padding: 5px;
        overflow: auto;
    }
    ul#tabs-nav li {
        float: left;
        font-weight: bold;
        margin-right: 2px;
        padding: 8px 10px;
        border-radius: 5px 5px 5px 5px;
        /*border: 1px solid #d5d5de;
        border-bottom: none;*/
        cursor: pointer;
    }
    ul#tabs-nav li:hover,
    ul#tabs-nav li.active {
        /*background-color: #08A5F6;*/
        border-bottom: 2px solid #08A5F6;
        text-decoration: none;
        border-radius:0;
    }
    #tabs-nav li a {
        text-transform: uppercase;
        color: #000;
        font-weight: 500;
        text-decoration: none;

    }
    .tab-content {
        padding: 5px;
        border: 2px solid #EFEFEF;
        background-color: #FFF;
    }

    /* Just for CodePen styling - don't include if you copy paste */
    html {
        margin: 0;
        padding: 0;
    }
    body {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 300;
        margin: 2em;
    }

    .resource-container{
        margin-top:200px;
    }

.resource-wrap {
    margin: 30px auto 100px;
    display: flex;
    flex-wrap: wrap;
    min-height: 300px;
}

    .resource-item{
        width:22.7%;
        margin:1%;
        border:solid #ccc 1px;
        border-radius:5px;
        background:#08A5F6;
        display: inline-block;

    }

    .resource-item,
    .resource-item a{
        color:#fff;
    }
    .resource-item a:hover{
        text-decoration:none;
    }


.resource-item2{
    width:31%;
    margin:1%;
    border-radius:5px;
    background:#FFF;
    display: inline-grid;
    border: solid 1px #EFEFEF;

}
.resource-item2 .resource-download{
    min-height: 170px;
}

.resource-item2 img{
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.resource-item2,
.resource-item2 a{
    color:#000;
}
.resource-item2 a:hover{
    text-decoration:none;
}



    .resource-item .btn{
        color: #000 !important;
        background: #fff;
        font-size: 18px;
        display: block;
        margin:20px !important;
    }

    .resource-title{
        color: #fff;
        font-size: 22px;
        line-height: 34px;
        text-align:center;
        font-family: 'Raleway', Helvetica, sans-serif;
        margin: 20px 20px 10px;
        min-height: 68px;
    }
.resource-title2 {
    color: #000;
    line-height: 34px;
    text-align:left;
    font-family: 'Raleway', Helvetica, sans-serif;
    margin: 20px 10px 10px;
}
    .resource-title2 h2{
        font-size: 22px;
    color:#08A5F6;
        padding-left: 10px;
    }
    .resource-description{
        margin: 10px 20px 20px;
    }
    
    .resource-download img {
        height: 300px;
        width: 100%;
        object-fit: cover;
        object-position: top;
        border-bottom:solid #ccc 1px;
    }

    .no-resources{
        font-size:18px;
        text-align:center;
    }

    @media (max-width:991px){
        .resource-item{
            width:48%;
        }
        .resource-container {
            margin-top: 150px;
        }
    }
    @media (max-width:600px){
        .resource-item,.resource-item2{
            width:100%;
            margin: 0 auto 35px;
        }
        .resource-container {
            margin-top: 100px;
        }
		.tab-content{
			border:none;
		}
    }
</style>


<div class="container resource-container">
    <h1>Agent Resources</h1>

    <div class="resource-wrap">


        <div class="tabs">
            <ul id="tabs-nav">
                <li><a href="#tab1">Resources</a></li>
                <li><a href="#tab2">Agent Dashboard</a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="tab1" class="tab-content">

                    <?php
                    // Check if rows exist
                    if( have_rows('resource') ): ?>

                    <?php
                    // Loop through rows
                    while( have_rows('resource') ) : the_row(); ?>

                        <?php
                        // Load sub field values
                        $title = get_sub_field('title');

                        $description = get_sub_field('description');

                        $file = get_sub_field('resource_item');

                        $url = $file['url'];

                        $filename = $file['title'];

                        //$thumbnail = get_sub_field('thumbnail', $file['ID']);
                        $ext = pathinfo($file, PATHINFO_EXTENSION);


                        ?>
                        <div class="resource-item">
                            <a href="<?php echo esc_attr($file); ?>" title="<?php echo esc_attr($filename); ?>" download>
                                <div class="resource-download">

                                    <?php
                                    if($ext=='pdf'){
                                        ?>
                                        <embed src="<?php echo esc_attr($file); ?>#toolbar=0&navpanes=0&scrollbar=0&statusbar=0&messages=0&scrollbar=0"  type="application/pdf" height="300" width="100%" />
                                    <?php }
                                    elseif($ext=='docx') {
                                        ?>
                                        <iframe src="https://docs.google.com/gview?url=<?php echo esc_attr($file); ?>&embedded=true&toolbar=0"  height="300" width="100%"></iframe>
                                    <?php }
                                    else{
                                        ?>
                                        <img src="<?php echo esc_attr($file); ?>" />
                                    <?php } ?>

                                </div>
                                <div class="resource-title"><?php echo $title; ?></div>

                                <?php if($description): ?>
                                    <div class="resource-description"><?php echo $description; ?></div>
                                <?php endif; ?>

                                <div class="bg-blue btn btn-default btn-animate btn-animate-black text-white text-uppercase wp-dark-mode-ignore"><span>Download</span></div>
                            </a>
                        </div>
                    <?php endwhile;

                    ?>
                </div>

                <?php else : ?>
                    <div class="no-resources">No resource to show</div>
                <?php endif; ?>
                </div>
                <div id="tab2" class="tab-content">

                    <?php
                    wp_reset_postdata();

//                    $args = array(
//                        'post_type' => 'agent',
//                        'posts_per_page' => 5,
//                    );
//
//                    // Query the posts:
//                    $obituary_query = new WP_Query($args);

                    $posts = get_posts([
                        'post_type' => 'agent',
                        'post_status' => 'publish',
                        'numberposts' => -1
                        // 'order'    => 'ASC'
                    ]);
//                    echo '<pre>';
//                    print_r($posts);
//                    echo '</pre>';
//                    exit;

                    $userId = get_current_user_id();
                    // Loop through the obituaries:
                    foreach ( $posts as $post ) {


                        //print_r($post);


                        // Echo some markup
                         $leadTitle = get_the_title();
                        $leadContent = $post->post_content;

                        $postID = get_the_ID();
                        $user = get_field('select_agent', $postID);

                        $status = get_field('sales_status', $postID);
                        $media = get_field('select_media', $postID);
                        $file = get_field('select_file', $postID);
                        $company_name = get_field('company_name', $postID);
                         if(!empty($user) && $userId==$user->ID) {
                        ?>
                        <div class="resource-item2">
                            <?php if (!empty($media)) { ?>
                                <img height="120" src="<?php echo $media ?>">
                            <?php } ?>
                            <div class="resource-download">

                                <div class="resource-title2"><h2><?php echo $leadTitle; ?></h2></div>
                                <div class="statusCon">
                                    <strong>Status :&nbsp</strong>
                                    <p><?php echo $status ?></p>
                                </div>
                                <?php if (!empty($company_name)) { ?>
                                    <div class="statusCon">
                                        <strong>Company name :&nbsp</strong>
                                        <p><?php echo $company_name ?></p>
                                    </div>
                                    <?php
                                }
                                if (!empty($file)) {
                                    ?>
                                    <div class="statusCon">
                                        <strong>File :&nbsp</strong>
                                        <p><a href="<?php echo $file ?>">Download
                                                Attachment</a></p>
                                    </div>
                                <?php } ?>
                                <?php if ($leadContent): ?>
                                    <div class="resource-description"><?php echo $leadContent; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                         }
                    }
                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
                </div>

            </div> <!-- END tabs-content -->
        </div> <!-- END tabs -->




        
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="application/javascript"></script>

<script>

    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#tabs-nav li').click(function(){
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });


</script>

<?php get_footer(); ?>