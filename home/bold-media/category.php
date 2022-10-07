<!DOCTYPE html>
<html lang="en-US" data-bt-theme="Bold News 1.4.0">
<?php
   session_start();
   require ('functions.php');
   include 'header.php';

 $category = $_GET['category'] ?? 1;
     
?>
   <body class="archive category category-business category-6 theme-bold-news bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight" data-autoplay="0" >
      <div class="btPageWrap" id="top">
         <div class="btContentWrap btClear">
            <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced "data-parallax="0.8" data-parallax-offset="-250">
               <div class="port">
                  <header class="header btClear extralarge">
                     <div class="btSuperTitle">
                        <span>
                           <div class="btBreadCrumbs">
                              <nav>
                                 <ul>
                                    <li><a href="http://bold-news.bold-themes.com/main-demo/">Home</a></li>
                                    <li>Category</li>
                                 </ul>
                              </nav>
                           </div>
                        </span>
                     </div>
                    
                  </header>
               </div>
            </section>
            <div class = "btBlogHeaderContent"></div>
            <div class="btContentHolder">
               <div class="btContent">
                  <?php 
                    
                     foreach ($product->getData() as $item) :
                        if ($item['category'] == $category) :

                  ?>

                  <article class="btArticleListItem animate  animate-moveup gutter btHasAuthorInfo wPhoto post-3126 post type-post status-publish format-image has-post-thumbnail hentry category-business category-markets tag-advices tag-business tag-markets post_format-post-format-image">
                     <div class="port">
                        <div class="boldCell">
                           <div class = "boldRow bottomMediumSpaced">
                              <div class="rowItem col-sm-12">
                                 <div class="rowItemContent btTextLeft">
                                    <div class="articleSideGutter btTextCenter"><a href="" class="btArticleAuthor"> 
                                       <img alt='' src='http://1.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=144&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=288&#038;d=mm&#038;r=g 2x' class='avatar avatar-144 photo' height='144' width='144' loading='lazy'/>Salman Khan</a><span class="btArticleDate">March 9, 2017</span></div>
                                    <div class="btArticleListBody">
                                       <div class="btMediaBox" >
                                          <div class="bpbItem"><a href="<?php printf('%s?id=%s', 'post.php',  $item['id']); ?>"><img src="<?php echo $item['file'] ?>" alt="business_01-1280x813.jpg" style="height: 500px; width: 913px;"></a></div>
                                       </div>
                                       <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                          <hr>
                                       </div>
                                       <header class="header btClear large" >
                                          <div class="btSuperTitle"><span><span class="btArticleCategories"><a href="#" class="btArticleCategory cat-item-6">
                                             <?php echo $item['category']; ?></a></span></span></div>
                                          <div class="dash">
                                             <h2><span class="headline"><a href="<?php printf('%s?id=%s', 'post.php',  $item['id']); ?>"><?php echo $item['title']; ?></a></span></h2>
                                          </div>
                                          <div class="btSubTitle"><span class="btArticleReadingTime">2<span>min</span></span><span class="btArticleViewsCount">
                                             <?php
                                                echo(rand(10,500));
                                                ?>
                                             
                                          </span><a href="" class="btArticleComments">
                                             <?php
                                                echo(rand(10,300));
                                             ?>
                                          </a></div>
                                       </header>
                                       <div class="btArticleListBodyContent">
                                          <p>
                                             <?php
                                             $position=220; // Define how many character you want to display. 
                                             $content = $item['content'];
                                             $post = substr($content, 0, $position); 
                                             echo $post;
                                             echo "..."; 
                                           ?></p>
                                       </div>
                                       <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                          <hr>
                                       </div>
                                      <!--    -->
                                       <!-- /boldRow -->
                                    </div>
                                    <!-- /btArticleListBody -->
                                 </div>
                                 <!-- /rowItemContent -->
                              </div>
                              <!-- /rowItem -->
                           </div>
                           <!-- /boldRow -->
                        </div>
                        <!-- boldCell -->
                     </div>
                     <!-- port -->
                  </article>
                  <?php
                  endif;
                  endforeach;
                 
                  ?>
                  <!-- /articles -->
                  <div class="btPagination boldSection gutter">
                     <div class="port">
                        <div class="paging onRight">
                           <p class="pageNext"><a href="http://bold-news.bold-themes.com/main-demo/category/business/page/2/" >Older Posts</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /boldthemes_content -->
               <aside class="btSidebar btTextLeft">
                  <div class="btBox widget_categories">
                     <ul>
                        <li class="cat-item cat-item-6 current-cat"><a aria-current="page" href="http://bold-news.bold-themes.com/main-demo/category/business/">Business <span>23</span></a></li>
                        <li class="cat-item cat-item-7"><a href="http://bold-news.bold-themes.com/main-demo/category/entertainment/">Entertainment <span>24</span></a></li>
                        <li class="cat-item cat-item-9"><a href="http://bold-news.bold-themes.com/main-demo/category/food-cuisine/">Food &amp; Cuisine <span>19</span></a></li>
                        <li class="cat-item cat-item-11"><a href="http://bold-news.bold-themes.com/main-demo/category/health/">Health <span>5</span></a></li>
                        <li class="cat-item cat-item-13"><a href="http://bold-news.bold-themes.com/main-demo/category/lifestyle/">Lifestyle <span>16</span></a></li>
                        <li class="cat-item cat-item-16"><a href="http://bold-news.bold-themes.com/main-demo/category/news-trending/">News &amp; Trending <span>8</span></a></li>
                        <li class="cat-item cat-item-17"><a href="http://bold-news.bold-themes.com/main-demo/category/pets/">Pets <span>14</span></a></li>
                        <li class="cat-item cat-item-19"><a href="http://bold-news.bold-themes.com/main-demo/category/popular/">Popular <span>7</span></a></li>
                        <li class="cat-item cat-item-22"><a href="http://bold-news.bold-themes.com/main-demo/category/sport/">Sport <span>10</span></a></li>
                        <li class="cat-item cat-item-24"><a href="http://bold-news.bold-themes.com/main-demo/category/tech/">Tech <span>13</span></a></li>
                        <li class="cat-item cat-item-25"><a href="http://bold-news.bold-themes.com/main-demo/category/travel/">Travel <span>16</span></a></li>
                        <li class="cat-item cat-item-26"><a href="http://bold-news.bold-themes.com/main-demo/category/urban/">Urban <span>12</span></a></li>
                     </ul>
                  </div>
          
                  
                  
               </aside>
            </div>
            <!-- /contentHolder -->
         </div>
         <!-- /contentWrap -->
     
     <?php

      include 'footer.php'
     ?>
   </body>
</html>