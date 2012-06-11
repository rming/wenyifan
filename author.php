<?php get_header(); ?>
    <div class="content_hold">
    	<div class="content">
        	<div class="main">
            
              <!--选择分类-->
         <div class="select clearfix">
                	<div class="pb_avatar">
                    	<a href="#">Rming</a>
                        <span class="author">Rming</span>
                    </div>
                    
                    <div class="select_hold">
                        <div class="select_hold_left"></div>
                        <div class="select_area">
                            <ul class="clearfix">
                                <li><a class="music" href="#">音乐</a></li>
                                <li><a class="photo" href="#">图片</a></li>
                                <li><a class="video" href="#">电影</a></li>
                                <li><a class="sdut" href="#">原创</a></li>
                                <li><a class="www" href="#">小站</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
          
             
				<div class="list">
                    <div class="pb_avatar pb_author">
					<?php
                    if(isset($_GET['author_name'])) :
                        $curauth = get_userdatabylogin($author_name);
                    else :
                        $curauth = get_userdata(intval($author));
                    endif;
                    ?>
                      <?php echo get_avatar($curauth->ID,'65');?>
                       
                         <span class="author"><a href="<?php echo $curauth->user_url; ?>" title="<?php echo $curauth->display_name;?>"><?php echo $curauth->display_name;?></a></span>
                    </div>
                    
                    <div class="list_hold ">
                        <div class="list_hold_left"></div>
                        <div class="link-to-post-holder" ></div>
                        <div class="pop-content clearfix">
                        	<div class="list-hd">
                                <div class="list-basic"><?php echo $curauth->nickname; ?>的作品</div>
                                <div class="list-actions"  style="margin-top:5px; color:#555;" >
                                <!-- <a class="action-item list-rt"  href="#">转载&nbsp;</a>
                                    <a title="喜欢" class="action-item i-favo " href="#">喜欢</a>-->
                                </div>
                            </div>
							<div class="list-bd">
                                <div class="list-ct ">
									  <ul>
                                    <!-- The Loop -->
                                    
                                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php 
                                    the_title(); ?>">
                                                <?php the_title(); ?></a>,
                                                <?php the_time('d M Y'); ?> in <?php the_category('&');?>
                                            </li>
                                    
                                        <?php endwhile; else: ?>
                                            <p><?php _e('No posts by this author.'); ?></p>
                                    
                                        <?php endif; ?>
                                    
                                    <!-- End Loop -->
                                    
                                        </ul>
                                </div>
                                <div class="list_tags"></div>
                                <div class="list-act">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
			</div>
            <!--main_end-->
         <?php get_sidebar(); ?>
            
		</div>
	</div>
</div>
<!--end wrapper-->
<?php get_footer(); ?>