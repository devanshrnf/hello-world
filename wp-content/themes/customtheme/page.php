


<?php get_header(); 

?>

<div class="content_area default-page mb-0  pt-0">
    <div class=" section_with_bg mb-0 content_sec">
        <div class="wrapper">
            <div class="row  mb-0 justify-content-between">
                <div class="col-xl-7 col-lg-8    col-12 content_col">
                    
            <div class="li_box px-md-4" >
<?php
                  the_content();?>

            </div>


                </div>
            <div class="col-lg-4  col-12 sidebar">
<?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>