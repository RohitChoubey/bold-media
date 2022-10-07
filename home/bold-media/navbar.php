<nav>
	<ul id="menu-primary-menu" class="menu">
		<li id="menu-item-3950" class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-3950"><span class="bt_mega_menu_title">Home</span>
		</li>
		<li id="menu-item-3900" class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-3900">
		<?php
			$result = queryCat('cities');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
				<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Cities</a>
			<?php
			}
		?>
	</li>

		<li id="menu-item-3831" class="btMenuWideDropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3831">
			<?php
			$result = queryCat('sports');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Sports</a>
			<?php
}
//}
			?>
		</li>
		<li id="menu-item-3830" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3830">
			<?php
			$result = queryCat('Politics');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Politics</a>
			<?php
}
//}
			?>
		</li>
		<li id="menu-item-3859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3859">
			<?php
			$result = queryCat('World news');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">World News</a>
			<?php
}
//}
			?>
			
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">
			<?php
			$result = queryCat('Bussiness');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Bussiness</a>
			<?php
				}
			?>
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">			
		<?php
			$result = queryCat('Gadgets');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Tech & Gadgets</a>
		<?php
			}
		?>
			
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">			
		<?php
			$result = queryCat('education');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Education</a>
		<?php
			}
		?>
			
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">			
		<?php
			$result = queryCat('entertainment');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Entertainment</a>
		<?php
			}
		?>
			
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">			
		<?php
			$result = queryCat('science');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Science & Tech</a>
		<?php
			}
		?>
			
		</li>
		<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3904">			
		<?php
			$result = queryCat('bollywood');
			if($result->num_rows > 0){
				$i=0;
				$row = $result->fetch_assoc();
				//while($row = $result->fetch_assoc()){ 
					$category = $row["category"];
			?>
			<a href="<?php printf('%s?category=%s', 'category.php',  $row['category']); ?>" target="_blank">Bollywood</a>
		<?php
			}
		?>
			
		</li>
	</ul>
</nav>