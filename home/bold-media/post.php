<?php 
session_start();
require ('functions.php');
    $id = $_GET['id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['id'] == $id) :
/*print_r($id);
exit();*/
   include 'header.php'
   ?>
<body class="post-template-default single single-post postid-2422 single-format-image theme-bold-news bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight" data-autoplay="0" >
   <div class="btPageWrap" id="top">
      <div class="btContentWrap btClear">
      
         <div class = "btBlogHeaderContent">
            <section id="bt_section60e6f6fd70ad3" class="boldSection gutter boxed inherit">
               <div class="port">
                  <div class="boldCell">
                     <div class="boldCellInner">
                        <div class="boldRow ">
                           <div class="boldRowInner"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="btContentHolder">
            <div class="btContent">
               <article class="boldSection btArticle gutter divider noPhoto btArticleWithSideInfo post-2422 post type-post status-publish format-image has-post-thumbnail hentry category-lifestyle category-modern category-news-trending tag-lifestyle tag-modern post_format-post-format-image btPostSingleItemStandard">
                  <div class="port">
                     <div class="boldCell">
                        <div class="boldRow">
                           <div class="rowItem col-sm-12 btTextLeft">
                              <div class="btArticleContentWrap">
                                 <div class="btArticleSideinfo">
                                    <div class="btArticleSideMeta">
                                       <header class="header btClear medium" >
                                          <div class="dash"></div>
                                          <div class="btSubTitle"><a href="#" class="btArticleAuthor"> <img alt='' src='http://1.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=144&#038;d=mm&#038;r=g' class='avatar avatar-144 photo' height='144' width='144' loading='lazy' />Salman Khan</a><span class="btArticleDate">

                                         <?php

                                         $timeStamp = $item['created_at'];
                                          $timeStamp = strtotime($timeStamp);
                                          echo date('m, d Y',$timeStamp );
                                            /* $timestamp =  $item['created_at'];

                                             $month= date("M D, Y",strtotime ($timestamp) );*/
                                            // echo $timeStamp; 
                                          ?>

                                       </span><span class="btArticleReadingTime">1<span>min</span></span><span class="btArticleViewsCount">
                                          <?php
                                          echo(rand(10,500));
                                          ?>
                                       </span><a href="#" class="btArticleComments"><?php
                                          echo(rand(10,300));
                                          ?></a></div>
                                       </header>
                                       <div class="btTags">
                                          <ul>
                                             <li><a href="#"><?php 
                                             echo $item['category'];
                                          ?></a></li>
                                             
                                          </ul>
                                       </div>
                                    </div>
                                    <!-- Side related -->
                                    
                                 </div>
                                 <!-- /btArticleSideinfo -->
                                 <div class="btArticleContent">

                                    <div class="btArticleExcerpt"><?php echo $item['title']; ?></div>
                                      <img src = "<?php echo $item['file'] ?>" />
                                    <div class="btArticleBody portfolioBody btTextLeft">
                                       <div class="bt_bb_wrapper">
                                          <p><?php echo $item['content'] ?></p>
                                          
                                       </div>
                                    </div>
                                    <!-- /btArticleBody -->
                                 </div>
                                 <!-- /btArticleContent -->
                              </div>
                              <!-- /btArticleContentWrap -->
                           </div>
                           <!-- /rowItem -->
                        </div>
                        <!-- /boldRow -->
                     </div>
                     <!-- /boldCell -->
                  </div>
                  <!-- /port -->
               </article>
               <section class="boldSection gutter bottomMediumSpaced btAboutAutorSection">
                  <div class="port">
                     <div class="boldRow">
                        <div class="rowItem col-sm-12 btAboutAutor">
                           <div class="btAboutAuthor">
                              <div class="aaAvatar"><img alt='' src='http://1.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=280&#038;d=mm&#038;r=g' class='avatar avatar-280 photo' height='140' width='140' loading='lazy' /></div>
                              <div class="aaTxt">
                                 <h4>Salman Khan</h4>
                                 <p>Salman Khan is an Indian news journalist, who is the managing director and editor-in-chief of Bold Media Network. He started his career from BBC News as an Internship. After this he done his trainning from Rashteey Sahara media group and Wire media group. Salman Khan has been a journalist for more than a decade. </p>
                                 <div class="btClear btSeparator bottomExtraSmallSpaced noBorder">
                                    <hr>
                                 </div>
                                 <div class="aaSocial">
                                    
                                    <span class="btIco btIcoDefaultType btIcoExtraSmallSize btIcoFacebook"><a href="http://www.facebook.com" target="_self" data-ico-fa="&#xf09a;" class="btIcoHolder"></a></span><span class="btIco btIcoDefaultType btIcoExtraSmallSize btIcoTwitter"><a href="http://www.twitter.com" target="_self" data-ico-fa="&#xf099;" class="btIcoHolder"></a></span><span class="btIco btIcoDefaultType btIcoExtraSmallSize btIcoLinkedin"><a href="http://www.linkedin.com" target="_self" data-ico-fa="&#xf0e1;" class="btIcoHolder"></a></span><span class="btIco btIcoDefaultType btIcoExtraSmallSize btIcoGooglePlus"><a href="http://plus.google.com" target="_self" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a></span><span class="btIco btIcoDefaultType btIcoExtraSmallSize btIcoVK"><a href="http://www.vkontakte.ru" target="_self" data-ico-fa="&#xf189;" class="btIcoHolder"></a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /rowItem -->
                     </div>
                     <!-- /boldRow -->
                  </div>
                  <!-- /port -->
               </section>
               
            </div>
            <!-- /boldthemes_content -->
            <aside class="btSidebar btTextLeft">
               <div class="btBox widget_categories">
                  <ul>
                     <li class="cat-item cat-item-6"><a href="http://bold-news.bold-themes.com/main-demo/category/business/">Business </a></li>
                     <li class="cat-item cat-item-7"><a href="http://bold-news.bold-themes.com/main-demo/category/entertainment/">Cities </a></li>
                     <li class="cat-item cat-item-9"><a href="http://bold-news.bold-themes.com/main-demo/category/food-cuisine/">Sports</a></li>
                     <li class="cat-item cat-item-11"><a href="http://bold-news.bold-themes.com/main-demo/category/health/">Politics </a></li>
                     <li class="cat-item cat-item-13"><a href="http://bold-news.bold-themes.com/main-demo/category/lifestyle/">World News</a></li>
                     <li class="cat-item cat-item-16"><a href="http://bold-news.bold-themes.com/main-demo/category/news-trending/">Bussiness </a></li>
                     <li class="cat-item cat-item-17"><a href="http://bold-news.bold-themes.com/main-demo/category/pets/">Tech & Gadgets</a></li>
                     <li class="cat-item cat-item-19"><a href="http://bold-news.bold-themes.com/main-demo/category/popular/">Education</a></li>
                     <li class="cat-item cat-item-22"><a href="http://bold-news.bold-themes.com/main-demo/category/sport/">Sport </a></li>
                     <li class="cat-item cat-item-24"><a href="http://bold-news.bold-themes.com/main-demo/category/tech/">Entertainment </a></li>
                     <li class="cat-item cat-item-25"><a href="http://bold-news.bold-themes.com/main-demo/category/travel/">Science & Tech </a></li>
                     <li class="cat-item cat-item-26"><a href="http://bold-news.bold-themes.com/main-demo/category/urban/">Bollywood</a></li>
                  </ul>
               </div>
             
              
            </aside>
         </div>
         <!-- /contentHolder -->
      </div>
      <!-- /contentWrap -->
   </div>
   <!-- /pageWrap -->
   <script type="text/javascript">
      (function () {
      	var c = document.body.className;
      	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      	document.body.className = c;
      })();
   </script>
   <?php
         endif;
      endforeach;
      include 'footer.php'
   ?>
</body>
</html>