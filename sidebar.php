<div class="aside">
            	<div class="side-search-holder">
                <?php get_search_form(); ?>
                </div>
                
                
                <DIV id="idContainer2" class="container">
               <?php if(function_exists(flash)) { flash();} ?>
                </DIV>
               <!-- weibo显示-->
                <iframe width="100%" height="400" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=400&fansRow=0&ptype=1&speed=0&skin=2&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1851124605&verifier=6da11801"></iframe>
                
                <!--<div  class="guidenewusers ">
                	<h2 class="guidenewusers_title">新手任务</h2>
                    <div class="guidenewusers_star"></div>
                        <ul  class="guidenewusers_task">
                            <li > <a href="#" ><span>上传头像</span></a>  </li>
                            <li > <a href="#"  ><span>发布博文</span></a>  </li>
                            <li > <a  href="#" ><span>搜索标签</span></a> </li>
                        </ul>
                        <div  class="guidenewusers_footer guidenewusers_ad">
                        开始你的点点之旅吧！
                        </div>
                </div>-->

                        <?php // 如果没有使用 Widget 才显示以下内容, 否则会显示 Widget 定义的内容
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
                        ?>
                            <!-- widget 1 -->
                           <div class="side_block">
                               <h3 class="side_block_menu"><span class="menu_icon_1"></span>娱乐新闻</h3>
                               <ul>
                                   <li class="side_block_li"><a href="#">第1个信息</a></li>
                                   <li class="side_block_li"><a href="#">第2个信息</a></li>
                                   <li class="side_block_li"><a href="#">第3个信息</a></li>
                                   <li class="side_block_li side_block_last"><a href="#">第4个信息</a></li>
                               </ul>
                           </div>
                           
                        <?php endif; ?>
                        
                        

            
                <!--<div class="side_block"><a href="#" class="side_ad_1"></a></div> -->
            </div>