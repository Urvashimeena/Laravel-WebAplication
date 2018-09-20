<div class="header-three">
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								 @foreach ($category_list as $result)
								<li class="has-children">
									<a href="{{route('productdetail', ['product' =>'Electronics'])}}">{{$result->category}}
									</a> 

								</li> 
									@endforeach 
							</ul> 
						</nav> 
					</div> 	 
				</div>
				<div class="move-text">
					<div class="marquee"><a> Latest Offers And Discount Are Available Here...... <span>Find The Best Shop Near You!!</span> <span> For The Best Choice , Make Your First Choice - ShopoviA</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					
					</script>
				</div>
			</div>
		</div>