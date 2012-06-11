<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="side-search-box">
                        <input type="text" name="s" id="s"   class="side-search-input" value="输入关键词搜索"   onFocus="if (value =='输入关键词搜索'){value =''}" onBlur="if (value ==''){value='输入关键词搜索'}">
                        </div>
                        <button class="side-go-search"   id="searchsubmit" type="submit">搜索</button>
                    </form>
