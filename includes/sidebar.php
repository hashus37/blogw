<aside id="aside" class="col-md-4">
                    <div class="widget">
						<div class="widget-search">
							<input class="search-input form-control" type="text" placeholder="Search">
							<button class="search-btn" type="button"><i class="fas fa-search"></i></button>
						</div>
					</div>
					<!-- /Search -->
                    
                    
					<!-- Category -->
					<div class="widget">
						<h3 class="mb-3">Category</h3>
						<div class="widget-category">
                            <?php 
                            $sql_query = "SELECT * FROM categories";
                            $select_all_categories = mysqli_query($conn, $sql_query);
                            
                            while($row = mysqli_fetch_assoc($select_all_categories)){
                                $category_name = $row["category_name"];
								
								$query2 = "SELECT * FROM posts WHERE post_category = '$category_name'";
								$send_category_query = mysqli_query($conn,$query2);
								$count_category_posts = mysqli_num_rows($send_category_query);

                                echo "<a href='category.php?category=$category_name'>{$category_name}<span>({$count_category_posts})</span></a>";
                            }
                            
                            ?>

						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
					<div class="widget">
						<h3 class="mb-3">Latest Posts</h3>

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img class="img-fluid" src="./img/post1.jpg" alt=""> Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img class="img-fluid" src="./img/post2.jpg" alt=""> Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->


						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img class="img-fluid" src="./img/post3.jpg" alt=""> Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

				</aside>