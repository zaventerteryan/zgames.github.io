<article class="story fullstory lefticons shadow">
	<div class="wrp">
		<div class="head grid_3_4">
			<h1 class="title h2 ultrabold">{title}</h1>
		</div>
		<div class="story_info grid_1_4 ignore-select">
			<div class="storyinfo_link collapsed" aria-expanded="false" data-target="#storyinfo_{news-id}" data-toggle="collapse">
				<i class="arrow"></i>
				<svg class="icon icon-meta_date"><use xlink:href="#icon-meta_date"></use></svg>
				<b>{date}</b>
			</div>
			<div id="storyinfo_{news-id}" class="storyinfo collapse">
				<div class="storyinfo_box">
					[rating][rating-type-1]<div class="rate_stars">{rating}</div>[/rating-type-1][/rating]
					<ul class="meta">
						<li class="meta_date">
							<svg class="icon icon-meta_date"><use xlink:href="#icon-meta_date"></use></svg><time class="date" datetime="{date=Y-m-d}">[day-news]<b>{date}</b>[/day-news]</time>
						</li>
						<li class="meta_cat grey">
							<svg class="icon icon-meta_cat"><use xlink:href="#icon-meta_cat"></use></svg>{link-category}
						</li>
						<li class="meta_user grey" title="Author: {login}">
							<svg class="icon icon-meta_user"><use xlink:href="#icon-meta_user"></use></svg>{author}
						</li>
						<li class="meta_views grey" title="Views: {views}">
							<svg class="icon icon-meta_views"><use xlink:href="#icon-meta_views"></use></svg>{views}
						</li>
						<li class="meta_coms grey" title="Comments: {comments-num}">
							<svg class="icon icon-meta_coms"><use xlink:href="#icon-meta_coms"></use></svg>[com-link]{comments-num}[/com-link]
						</li>
					</ul>
					[tags]
					<div class="story_tags">
						<svg class="icon icon-tags"><use xlink:href="#icon-tags"></use></svg>
						<div class="tag_list grey">{tags}</div>
					</div>
					[/tags]
				</div>
			</div>
			{poll}
		</div>
		<div class="story_cont grid_3_4">
			<div class="story_left_icons">
				<div class="story_icons">
					[not-group=5]
					<div class="fav_btn">
						[add-favorites]<span title="Add to favorites"><svg class="icon icon-fav"><use xlink:href="#icon-fav"></use></svg></span>[/add-favorites]
						[del-favorites]<span title="Remove from favorites"><svg class="icon icon-fav"><use xlink:href="#icon-fav"></use></svg></span>[/del-favorites]
					</div>
					<div class="edit_btn" title="Edit">
						[edit]<i title="Edit"></i>[/edit]
					</div>
					[/not-group]
					[rating]
					<div class="rate">
						[rating-type-2]
							<div class="rate_like" title="Like">
							[rating-plus]
								<span class="rate_like_icon"><svg class="icon icon-like"><use xlink:href="#icon-like"></use></svg></span>
								<span class="grey">{rating}</span>
							[/rating-plus]
							</div>
						[/rating-type-2]
						[rating-type-3]
							<div class="rate_like-dislike">
								<div class="rate_like-dislike_in">
									[rating-plus]<span class="plus_icon" title="Like"><span>+</span></span>[/rating-plus]
									[rating-minus]<span class="plus_icon minus" title="Dislike"><span>-</span></span>[/rating-minus]
								</div>
								<span class="grey">{rating}</span>
							</div>
						[/rating-type-3]
						[rating-type-4]
							<div class="rate_like-dislike">
								<span class="grey"><span class="ratingtypeplusminus ignore-select ratingplus">{likes}</span></span>
								<div class="rate_like-dislike_in">
									[rating-plus]<span class="plus_icon" title="Like"><span>+</span></span>[/rating-plus]
									[rating-minus]<span class="plus_icon minus" title="Like"><span>-</span></span>[/rating-minus]
								</div>
								<span class="grey"><span class="ratingtypeplusminus ratingminus ignore-select">{dislikes}</span></span>
							</div>
						[/rating-type-4]
					</div>
					[/rating]
				</div>
			</div>
			<div class="text">
				{full-story}
				{pages}
				[edit-date]<p class="editdate grey">News article is edited by: <b>{editor}</b> - {edit-date}<br>
				[edit-reason]Reason: {edit-reason}[/edit-reason]</p>[/edit-date]
			</div>
		</div>
	</div>
	[fixed]<span class="fixed_label ignore-select" title="Fixed!">Fixed!</span>[/fixed]
</article>
<div class="wrp block">
	[prev-url]<a href="{prev-url}" class="btn">Prev</a>[/prev-url]
	[next-url]<a href="{next-url}" class="btn right">Next</a>[/next-url]
</div>
<div class="fullstory_foot shadow ignore-select">
	<div class="wrp">
		[related-news]
		<div class="block col_news">
			<div class="block_title"><h4 class="ultrabold">Related News</h4></div>
			<div class="grid_list">
				{related-news}
			</div>
		</div>
		[/related-news]
		<div class="banner">
			{banner_header}
		</div>
	</div>
</div>
{addcomments}
<div class="block comments shadow ignore-select">
	<div class="wrp">
		<h4 class="block_title ultrabold">Comments {comments-num}</h4>
		<div class="com_list">
			{comments}
		</div>
	</div>
</div>
{navigation}