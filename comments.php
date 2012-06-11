  <div class="list">
                        <div class="list_hold ">
                            <div class="pop-content clearfix">
                                <div class="list-hd" style="height:auto; padding:0px;">
                              	<?php if ( post_password_required() ) : ?>
<?php _e( 'Enter your password to view comments.' ); ?>
<?php return; endif; ?>
<div id="comments"><div class="comt">
	<?php if ( have_comments() ) : ?>
		<ol class="comment_list">
			<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">	
    	    	<span class="alignleft"><?php previous_comments_link( __( '&laquo; Older Comments' ) ); ?></span>
        		<span class="alignright"><?php next_comments_link( __( 'Newer Comments &raquo;' ) ); ?></span>
    		</div>
		<?php endif; ?>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p><?php _e( 'Comments are closed.' ); ?></p>
	<?php endif; ?>
		<?php comment_form(); ?>
        <script type="text/javascript">
		document.getElementById("comment").onkeydown = function (moz_ev)
		{
		var ev = null;
		if (window.event){
		ev = window.event;
		}else{
		ev = moz_ev;
		}
		if (ev != null && ev.ctrlKey && ev.keyCode == 13)
		{
		document.getElementById("submit").click();
		}
		}
		</script>
</div></div>


                                </div>
                                <div class="list-bd" style="padding:1px  0px ;background:#eee; overflow:hidden; height:12px;">
                                    <div class="list-ct ">
                                    </div>
                                    <div class="list-act">                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>