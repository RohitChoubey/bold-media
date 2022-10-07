<?php
	include 'header.php';
	include 'query.php';
	require_once 'dbConfig.php';

?>		
<body class="page-template-default page page-id-3539 page-child parent-pageid-3667 theme-bold-news bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btAccentDarkHeader btNoSidebar" data-autoplay="0">
	<div class="btPageWrap" id="top">
	<header class="mainHeader btClear gutter ">

	<div class="port">
	
		<!-- /topBar -->
		<div class="btLogoArea menuHolder btClear"> 
			<span class="btVerticalMenuTrigger">&nbsp;
				<span class="btIco btIcoDefaultType">
					<a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a>
				</span>
			</span> 
			<span class="btHorizontalMenuTrigger">&nbsp;
				<span class="btIco btIcoDefaultType"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a></span></span>
			<div class="logo"> <span>
						<a href="#"><img class="btMainLogo" data-hw="5.24" src="../../wp-content/uploads/sites/2/2017/03/bold-media-logo.png" alt="Bold News"></a>					</span> </div>
			<!-- /logo -->
			<div class="topBarInLogoArea">
				<div class="topBarInLogoAreaCell">
					<div class="btTopBox widget_bt_banner_widget no-border">
						<div class="bt_banner no-border">
							<a href="#" target="_blank"><img src="../../wp-content/uploads/sites/2/2017/03/Industrial-970x90-banner.jpg" /></a>
						</div>
					</div>
				</div>
				<!-- /topBarInLogoAreaCell -->
			</div>
			<!-- /topBarInLogoArea -->
		</div>
		<!-- /menuHolder -->
		<div class="btBelowLogoArea btClear">
			<div class="menuPort">
				<div class="logoBelowInline"> <span>
							<a href="#"><img class="btMainLogo" data-hw="5.24" src="../../wp-content/uploads/sites/2/2017/03/bold-media-logo.png" alt="Bold News"></a>							
						</span> </div>
				<!-- /logo -->
				<div class="topBarInMenu">
					<div class="topBarInMenuCell"> <a href="https://www.facebook.com/boldthemes/" target="_self" class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor"><span  data-ico-fa="&#xf09a;" class="btIcoHolder"></span></span></span></a><a href="https://twitter.com/bold_themes" target="_self" class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor"><span  data-ico-fa="&#xf099;" class="btIcoHolder"></span></span></span></a><a href="https://plus.google.com/106260443376081681677" target="_self" class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor"><span  data-ico-fa="&#xf0d5;" class="btIcoHolder"></span></span></span></a><a href="https://www.behance.net/info1afc201a" target="_self" class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor"><span  data-ico-fa="&#xf1b4;" class="btIcoHolder"></span></span></span></a><a href="https://www.pinterest.com/boldthemes/" target="_self" class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor"><span  data-ico-fa="&#xf231;" class="btIcoHolder"></span></span></span></a>
						<div class="btTopBox widget_search">
							<div class="btSearch"><span class="btIco btIcoDefaultType btIcoDefaultColor"><a href="#" target="_self" data-ico-fa="&#xf002;" class="btIcoHolder"></a></span>
								<div class="btSearchInner gutter" role="search">
									<div class="btSearchInnerContent port">
										<form action="http://bold-news.bold-themes.com/main-demo/" method="get">
											<input type="text" name="s" placeholder="Looking for..." class="untouched">
											<button type="submit" data-icon="&#xf105;"></button>
										</form>
										<div class="btSearchInnerClose"><span class="btIco "><a href="#" target="_self" data-ico-fa="&#xf00d;" class="btIcoHolder"></a></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /topBarInMenu -->
				</div>
				<!-- /topBarInMenuCell -->
				<?php
					include 'navbar.php';
				?>
			</div>
			<!-- .menuPort -->
		</div>
		<!-- /menuHolder / btBelowLogoArea -->
	</div>
	<!-- /port -->
</header>
		<!-- /.mainHeader -->
		<div class="btContentWrap btClear">
			<div class="btContentHolder">
				<div class="btContent">
					<div class="bt_bb_wrapper">
						
							<section id="bt_section60e542990e1b0" class="boldSection topMediumSpaced gutter boxed inherit" style="background-color:#f9f9f9  !important;">
							<div class="port">
								<div class="boldCell">
									<div class="boldCellInner">
										<div class="boldRow ">
											<div class="boldRowInner">
												<div class="rowItem col-md-6 col-sm-12 btTextLeft btTopVertical" data-width="6">
													<div class="rowItemContent">
														<header class="header btClear large  regular">
															<div class="dash">
																<h2><span class="headline">Top Stories</span></h2></div>
														</header>
														<?php
															$result = query('top story',4);
															if($result->num_rows > 0){
																$i=0;
																while($row = $result->fetch_assoc()){ 
																	$id = $row["id"];
																/*}}*/
														?>
														<div class="btSinglePostTemplate  largeTemplate image backgroundImagePosition image_size__medium_large__" style="min-height: 338px;">
															<div class="btPostImageHolder">
																<div class="btSinglePostBackgroundImage">
																	<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		<img src="<?php echo $row['file'] ?>" alt="" title="<?php echo $row['title']; ?>" style="height:350px; width: 650px;">
																	</a>
																</div>
															</div>
															<div class="btSinglePostContent">
																<div class="btSinglePostTopData"> </div>
																<h4>
																	<a href="http://bold-news.bold-themes.com/main-demo/2017/03/09/6-ways-to-market-your-small-business-cheap/">
																		<?php echo $ROW['title']; ?>
																	</a>
																</h4>
																<div class="btSinglePostExcerpt"> </div>
															</div>
														</div>
														<div class="btClear btSeparator topMediumSpaced noBorder">
															<hr>
														</div>
														<?php
															}
														}
														else{
															echo "No News Found";
														}
														?>
													<section id="bt_section60e542991cef6" class="boldSection topMediumSpaced gutter boxed inherit">
														<div class="port">
															<div class="boldCell">
																<div class="boldCellInner">
																	<div class="boldRow ">
																		<div class="boldRowInner">
																			<header class="header btClear medium  regular">
																						<div class="dash">
																							<h3><span class="headline">Science & Technology</span></h3></div>
																					</header>
																			<div class="rowItem btTextLeft" data-width="3">
																				<div class="rowItemContent">
																					
																			<?php
																				$result = query('Bussiness',4);
																				if($result->num_rows > 0){
																					$i=0;
																					while($row = $result->fetch_assoc()){ 
																						$id = $row["id"];
																					/*}}*/
																			?>
																			<div  class='col-sm-4 col-xs-6 col-md-3 col-lg-6'>
																					<div class="bpgPhoto btDefaultHoverType btHasTitles">
																						<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>" target="_self" title="<?php echo $row['title']; ?>"></a>
																						<div class="boldPhotoBox">
																							<div class="bpbItem">
																								<div class="btImage">
																									<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																									<img src="<?php echo $row['file'] ?>" alt="" title="<?php echo $row['title']; ?>" style="height:350px; width: 550px;">
																								</a>

																								</div>
																							</div>
																						</div>
																						<div class="captionPane btDarkSkin btTextCenter">
																							<div class="captionTable">
																								<div class="captionCell">
																									<div class="captionTxt">
																										<header class="header btClear extrasmall">
																											<div class="dash">
																												<h4><span class="headline">
																													<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																													<?php echo $row['title']; ?>
																												</a></span></h4></div>
																										</header>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="btShowTitle">
																							<div class="btShowTitleCaptionTxt">
																								<header class="header btClear small">
																									<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																									<div class="dash">
																										<h4>
																											<span class="headline">
																											
																											<?php echo $row['title']; ?>
																										</span></h4></div>
																									</a>
																								</header>
																							</div>
																						</div>
																					</div>
																				</div>
																					<?php
																				}}
																					?>
																					<div class="btClear btSeparator topExtraSmallSpaced bottomExtraSmallSpaced noBorder">
																						<hr>
																					</div>
																				</div>
																			</div>
																			
																			
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
														
													</div>
												</div>
												<div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft btTopVertical" data-width="3">
													<div class="rowItemContent">
														<header class="header btClear large  regular">
															<div class="dash">
																<h2><span class="headline">World</span></h2></div>
														</header>
														<div class="btSinglePostTemplate  defaultTemplate gallery backgroundImagePosition image_size__medium_large__">
															<?php
																$result = query('world news',1);
																if($result->num_rows > 0){
																	$i=0;
																	while($row = $result->fetch_assoc()){ 
																		$id = $row["id"];
															?>
															<div class="btPostImageHolder">
																<div class="btSinglePostBackgroundImage ">
																	<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		
																		<img src="<?php echo $row['file'] ?>" style="height:350px;">
																					
																	</a>
																</div>
															<!-- 	<div class="btSinglePostTopMetaData">
																	<div class="btSinglePostFormat"></div> <span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/category/popular/" class="btArticleCategory cat-item-19">Popular</a><a href="http://bold-news.bold-themes.com/main-demo/category/tech/" class="btArticleCategory cat-item-24">Tech</a><a href="http://bold-news.bold-themes.com/main-demo/category/urban/vlogging/" class="btArticleCategory cat-item-30">Vlogging</a></span> </div> -->
															</div>
															<div class="btSinglePostContent">
																<div class="btSinglePostTopData"> </div>
																<h4>
																	<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		<?php echo $row['title']; }}?>
																	</a>
																</h4> </div>
														</div>
														<div class="btClear btSeparator topMediumSpaced noBorder">
															<hr>
														</div>
														
													</div>
												</div>
												<div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft btTopVertical" data-width="3">
													<div class="rowItemContent">
														<header class="header btClear large  regular">
															<div class="dash">
																<h2><span class="headline">Sports</span></h2></div>
														</header>
														
														<div class="btClear btSeparator topSmallSpaced bottomExtraSmallSpaced noBorder">
															<hr>
														</div>
														<?php
															$result = query('sports',4);
															if($result->num_rows > 0){
																$i=0;
																while($row = $result->fetch_assoc()){ 
																	$id = $row["id"];
														?>
														<div class="btSinglePostTemplate  smallTemplate leftImagePosition image_size__medium_large__">
															<div class="btMediaBoxPopup">
																<div class="btMediaBoxPopupClose"></div>
																<div class="btMediaBox video" data-hw="0.5625">
																	<img class="aspectVideo" src="<?php echo $row['file']; ?>" aria-hidden="true">
																</div>
															</div>
															<div class="btPostImageHolder">
																<div class="btSinglePostLeftImage">
																	<div class="btSinglePostLeftContainer">
																		<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																			<img src="<?php echo $row['file']; ?>" style="height:150px;">
																		</a>
																	</div>
																</div>
																<div class="btSinglePostTopMetaData">
																	<div class="btSinglePostFormat"><span class="btVideoPopupText">Play video</span></div>
																</div>
															</div>
															<div class="btSinglePostContent">
																<div class="btSinglePostTopMetaData"> </div>
																<div class="btSinglePostTopData"> </div>
																<h4>
																	<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		<?php echo $row['title']; ?>
																	</a>
																</h4> 
															</div>
														</div>
														<?php
															}
														}
														else{
															echo "No news Found";
														}
														 ?>
														
														<div class="btClear btSeparator topMediumSpaced noBorder">
															<hr>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						


						<section id="bt_section60e5429914816" class="boldSection btDivider topMediumSpaced gutter boxed inherit" style="box-shadow: 0 0 100px 0 rgba(0,0,0,.2);">
							<div class="port">
								<div class="boldCell">
									<div class="boldCellInner">
										<div class="boldRow ">
											<div class="boldRowInner">
												<div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
													<div class="rowItemContent">
														<header class="header btClear medium  regular">
															<div class="dash">
																<h3><span class="headline">Tech &amp; Gadgets</span></h3></div>
														</header>
														<div class="btSinglePostTemplate  defaultTemplate image backgroundImagePosition image_size__medium_large__">
															<div class="btPostImageHolder">
																<div class="btSinglePostBackgroundImage">
																<?php
																	$result = query('Gadgets',1);
																	if($result->num_rows > 0){
																		$i=0;
																		while($row = $result->fetch_assoc()){ 
																			$id = $row["id"];
																?>
																	<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																	<img src="<?php echo $row['file']; ?>" style="height:350px;">
																</a>
																</div>
																<div class="btSinglePostTopMetaData">
																	<div class="btSinglePostFormat"></div> <span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/category/tech/" class="btArticleCategory cat-item-24">Tech</a><a href="#">Web</a></span> </div>
															</div>
															<div class="btSinglePostContent">
																<div class="btSinglePostTopData"> </div>
																<h4>
			<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
				<?php echo $row['title']; ?>
			</a>
		</h4> </div>

														</div>
														<div class="btClear btSeparator topSmallSpaced noBorder">
															<hr>
														</div>
														<?php
															}
														}
														else{
															echo "No News Found";
														}
																	$result = query('world news',5);
																	if($result->num_rows > 0){
																		$i=0;
																		while($row = $result->fetch_assoc()){ 
																			$id = $row["id"];
																?>
														<div class="btSinglePostTemplate  smallTemplate no-imageImagePosition image_size__medium_large__">
															<div class="btPostImageHolder">
																<div class="btSinglePostTopMetaData">
																	<div class="btSinglePostFormat"></div>
																</div>
															</div>
															<div class="btSinglePostContent">
																<div class="btSinglePostTopData"> </div>
																<h4>
			<a href="#">
				<?php echo $row['title']; ?>
			</a>
		</h4> </div>
														</div>
														<div class="btClear btSeparator topExtraSmallSpaced bottomExtraSmallSpaced border">
															<hr>
														</div>

														<?php
													}}
													else{
														echo "No News Found";
													}
														?>
													</div>
												</div>
												<div class="rowItem col-md-9 col-ms-12  btTextLeft" data-width="9">
													<div class="rowItemContent">
														<div class="boldRow ">
															<div class="boldRowInner">
																<div class="rowItem rowInnerItem col-sm-6  btTextLeft">
																	<div class="rowItemContent">
																		<header class="header btClear medium  regular">
																			<div class="dash">
																				<h3><span class="headline">Politics</span></h3></div>
																		</header>
																		<div class="btSinglePostTemplate  defaultTemplate image backgroundImagePosition image_size__medium_large__">
																			<div class="btPostImageHolder">
																				<div class="btSinglePostBackgroundImage" >
																<?php
																	$result = query('politics',1);
																	if($result->num_rows > 0){
																		$i=0;
																		while($row = $result->fetch_assoc()){ 
																			$id = $row["id"];
																?>
																					<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																						<img src="<?php echo $row['file'] ?>" style="height:350px;">
																					</a>


																				</div>
												<div class="btSinglePostTopMetaData">
													<div class="btSinglePostFormat"></div> <span class="btArticleCategories"><a href="#" class="btArticleCategory cat-item-44">Politics	</a><</span> </div>
											</div>
																			<div class="btSinglePostContent">
																				<div class="btSinglePostTopData"> </div>
																				<h4>
			<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
				<?php echo $row['title']; ?>
			</a>
		</h4> </div>
																		</div>
																		<div class="btClear btSeparator topMediumSpaced noBorder">
																			<hr>
																		</div>

																	</div>
																</div>
<?php
																}}
																else{
																	echo "No News found";
																}
																$result = query('cities',1);
																	if($result->num_rows > 0){
																		$i=0;
																		while($row = $result->fetch_assoc()){ 
																			$id = $row["id"];

																?>
																<div class="rowItem rowInnerItem col-sm-6  btTextLeft">
																	<div class="rowItemContent">
																		<header class="header btClear medium  regular">
																			<div class="dash">
																				<h3><span class="headline">India News</span></h3></div>
																		</header>
																		<div class="btSinglePostTemplate  defaultTemplate audio backgroundImagePosition image_size__medium_large__">
																			<div class="btPostImageHolder">
																				<div class="btSinglePostBackgroundImage ">
																					<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																						<img src="<?php echo $row['file'] ?>" style="height:350px;">

																					</a>
																				</div>
																				<div class="btSinglePostTopMetaData">
																					<div class="btSinglePostFormat"></div> <span class="btArticleCategories"><a href="#" class="btArticleCategory cat-item-50">Photography</a><a href="#" class="btArticleCategory cat-item-26">Urban</a></span> </div>
																			</div>
																			<div class="btSinglePostContent">
																				<div class="btSinglePostTopData"> </div>
																				<h4>
																		<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																			<?php echo $row['title']; ?>
																		</a>
																	</h4> </div>	
																	<?php
																	}
																}
																	else{
																		echo 'No News Found';
																	}
																		?>	
														</div>
																				</div>
																		<div class="btClear btSeparator topMediumSpaced noBorder">
																			<hr>
																		
																	
																	</div>
																</div>
															</div>
														</div>
														<div class="boldRow ">
															<div class="boldRowInner">
																<div class="rowItem rowInnerItem col-sm-4  btTextLeft">
																	<?php
																	$result = multipleQuery('education','politics','Bussiness',2);
																	if($result->num_rows > 0){
																		$i=0;
																		while($row = $result->fetch_assoc()){ 
																			$id = $row["id"];
																?>
										<div class="rowItemContent">
											<div class="btSinglePostTemplate  smallTemplate leftImagePosition image_size__medium_large__">
												<div class="btPostImageHolder">
													<div class="btSinglePostLeftImage">
														<div class="btSinglePostLeftContainer ">
															<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																<img src="<?php echo $row['file'] ?>" />
															</a>
															</div>
														</div>
													<div class="btSinglePostTopMetaData">
														<div class="btSinglePostFormat"></div>
													</div>
												</div>
											<div class="btSinglePostContent">
												<div class="btSinglePostTopMetaData"> </div>
												<div class="btSinglePostTopData"> </div>
												<h4>
												<a href="#">
													<?php
													echo $row['title'];
													?>
												</a>
											</h4> </div>
									</div>
									
									
									<div class="btClear btSeparator topExtraSmallSpaced bottomExtraSmallSpaced border">
										<hr>
									</div><?php
								}
							}
							else{
								echo "string";
							}
							?>
																</div>
																			
																		</div>
																		<div class="btClear btSeparator topMediumSpaced noBorder">
																			<hr>
																		</div>
																	</div>
																</div>
		<div class="rowItem rowInnerItem col-sm-2  btTextRight btTopVertical">
			<div class="rowItemContent"><a href="#" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon"><span class="btnInnerText">MORE NEWS</span></a>
				<div class="btClear btSeparator topMediumSpaced noBorder">
					<hr>
				</div>
			</div>
		</div>
					<div class="rowItem rowInnerItem col-sm-4  btTextLeft">
						<div class="rowItemContent">

							<?php
								$result = multipleQuery('entertainment','politics','Bussiness',2);
								if($result->num_rows > 0){
									$i=0;
									while($row = $result->fetch_assoc()){ 
										$id = $row["id"];
									}}
							?>
			
							
							<div class="btClear btSeparator topMediumSpaced noBorder">
								<hr>
							</div>
						</div>
					</div>
	<div class="rowItem rowInnerItem col-sm-2  btTextRight btTopVertical">
		<div class="rowItemContent">
				<a href="#" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon"><span class="btnInnerText">MORE NEWS</span>

				</a>
		<div class="btClear btSeparator topMediumSpaced noBorder">
		<hr>
		</div>
	</div>
	</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
									</div>
								</div>
							</div>
						</section>
						<section id="bt_section60e542991cef6" class="boldSection topMediumSpaced gutter boxed inherit">
							<div class="port">
								<div class="boldCell">
									<div class="boldCellInner">
										<div class="boldRow ">
											<div class="boldRowInner">
												<header class="header btClear medium  regular">
															<div class="dash">
																<h3><span class="headline">Science & Technology</span></h3></div>
														</header>
												<div class="rowItem btTextLeft" data-width="3">
													<div class="rowItemContent">
														
												<?php
													$result = query('science',4);
													if($result->num_rows > 0){
														$i=0;
														while($row = $result->fetch_assoc()){ 
															$id = $row["id"];
														/*}}*/
												?>
												<div  class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
														<div class="bpgPhoto btDefaultHoverType btHasTitles">
															<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>" target="_self" title="What&#039;s the best time to start your business"></a>
															<div class="boldPhotoBox">
																<div class="bpbItem">
																	<div class="btImage">
																		<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		<img src="<?php echo $row['file'] ?>" alt="" title="<?php echo $row['title']; ?>" style="height:300px; width: 500px;">
																	</a>

																	</div>
																</div>
															</div>
															<div class="captionPane btDarkSkin btTextCenter">
																<div class="captionTable">
																	<div class="captionCell">
																		<div class="captionTxt">
																			<header class="header btClear extrasmall">
																				<div class="dash">
																					<h4><span class="headline">
																						<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																						<?php echo $row['title']; ?>
																					</a></span></h4></div>
																			</header>
																		</div>
																	</div>
																</div>
															</div>
															<div class="btShowTitle">
																<div class="btShowTitleCaptionTxt">
																	<header class="header btClear small">
																		<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																		<div class="dash">
																			<h4>
																				<span class="headline">
																				
																				<?php echo $row['title']; ?>
																			</span></h4></div>
																		</a>
																	</header>
																</div>
															</div>
														</div>
													</div>
														<?php
													}}
														?>
														<div class="btClear btSeparator topExtraSmallSpaced bottomExtraSmallSpaced noBorder">
															<hr>
														</div>
													</div>
												</div>
												
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="bt_section60e54299268bc" class="boldSection topMediumSpaced bottomMediumSpaced btDarkSkin gutter boxed inherit">
							<div class="port">
								<div class="boldCell">
									<div class="boldCellInner">
										<div class="boldRow ">
											<div class="boldRowInner">
												<div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
													<div class="rowItemContent">
														<div class="bt_banner no-border" style="background: transparent;">
															<a href="#" target="_blank"><img src="../../wp-content/uploads/sites/2/2017/03/Food-haus-970x90-banner.jpg" /></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="bt_section60e5429926a67" class="boldSection topMediumSpaced bottomMediumSpaced gutter boxed inherit">
							<div class="port">
								<div class="boldCell">
									<div class="boldCellInner">
										<div class="boldRow ">
											<div class="boldRowInner">
												<div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
													<div class="rowItemContent">
														<header class="header btClear medium  regular">
															<div class="dash">
																<h3><span class="headline">Entertainment</span></h3></div>
														</header>
														<div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
															<hr>
														</div>
													</div>
												</div>
											</div>
										</div>
	<div class="boldRow ">
		<div class="boldRowInner">
			<div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
				<div class="rowItemContent">
					<div class=" btCarouselSmallNav boldClientList btNoPadding btOnTopArrow">
						<div class="bclPort" data-slides="5" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true,"autoplay":true,"autoplaySpeed":3000}' data-rtl="no">
							<?php
								$result = query('entertainment',4);
								if($result->num_rows > 0){
									$i=0;
									while($row = $result->fetch_assoc()){ 
										$id = $row["id"];
									
							?>

							<div class="bclItem ">
								<div class="bclItemChild">
									<div class="bclItemChildContent">
										<div class="btSinglePostTemplate  smallTemplate video backgroundImagePosition image_size__medium_large__">
											<div class="btMediaBoxPopup">
												<div class="btMediaBoxPopupClose"></div>
												<div class="btMediaBox video" data-hw="0.5625"><img class="aspectVideo" src="#" alt="#" role="presentation" aria-hidden="true">
					
												</div>
											</div>
											<div class="btPostImageHolder">
												<div class="btSinglePostBackgroundImage ">
													<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
														<img src="<?php echo $row['file'] ?>" style ="height: 360px;">
													</a>
												</div>
											</div>
											<div class="btSinglePostContent">
												<div class="btSinglePostTopData"> </div>
												<h4>
													<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
														<?php echo $row['title']; ?>
													</a>
												</h4> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
							}
							else{
								echo "No Records Found";
							} 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
										<div class="boldRow ">
											<div class="boldRowInner">
												<div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
													<div class="rowItemContent">
														<div class="btClear btSeparator topMediumSpaced bottomSmallSpaced border">
															<hr>
														</div>
														<header class="header btClear medium  regular">
															<div class="dash">
																<h3><span class="headline">Bollywood</span></h3></div>
														</header>
													</div>
												</div>
											</div>
										</div>
										<div class="boldRow ">
											<div class="boldRowInner">	
												<section id="bt_section60e542991cef6" class="boldSection topMediumSpaced gutter boxed inherit">
	<div class="port">
		<div class="boldCell">
			<div class="boldCellInner">
				<div class="boldRow ">
					<div class="boldRowInner">
						
						<div class="rowItem btTextLeft" data-width="3">
							<div class="rowItemContent">
								
						<?php
							$result = query('bollywood',4);
							if($result->num_rows > 0){
								$i=0;
								while($row = $result->fetch_assoc()){ 
									$id = $row["id"];
								/*}}*/
						?>
						<div  class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
								<div class="bpgPhoto btDefaultHoverType btHasTitles">
									<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>" target="_self" title="<?php echo $row['title'] ?>"></a>
									<div class="boldPhotoBox">
										<div class="bpbItem">
											<div class="btImage">
												<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
												<img src="<?php echo $row['file'] ?>" alt="" title="<?php echo $row['title']; ?>" style="height:300px; width: 500px;">
											</a>
											</div>
										</div>
									</div>
									<div class="captionPane btDarkSkin btTextCenter">
										<div class="captionTable">
											<div class="captionCell">
												<div class="captionTxt">
													<header class="header btClear extrasmall">
														<div class="dash">
															<h4><span class="headline">
																<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>">
																<?php echo $row['title']; ?>
															</a></span></h4></div>
													</header>
												</div>
											</div>
										</div>
									</div>
									<div class="btShowTitle">
										<div class="btShowTitleCaptionTxt">
											<header class="header btClear small">
												
												<div class="dash">
													<h4><span class="headline"  style="color: white;">
														<a href="<?php printf('%s?id=%s', 'post.php',  $row['id']); ?>"  style="color: white;"	><?php echo $row['title']; ?>
													</a></span></h4></div>
											</header>
										</div>
									</div>
								</div>
							</div>
								<?php
							}}
								?>
								<div class="btClear btSeparator topExtraSmallSpaced bottomExtraSmallSpaced noBorder">
									<hr>
								</div>
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
						</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						
					</div>
				</div>
				<!-- /boldthemes_content -->
			</div>
			<!-- /contentHolder -->
		</div>
		<!-- /contentWrap -->
		<?php
		include 'footer.php'
		?>
</body>
</html>