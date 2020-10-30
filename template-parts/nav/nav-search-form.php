<form action="/" method="get" class="d-table w-1-1">
	<div class="d-table-cell align-middle pr-20">
		<label for="search">Search</label>
		<input type="text" name="s" id="search" placeholder="Hey, tell me what you are looking for :)" value="<?php the_search_query(); ?>" />
	</div>
	<div class="d-table-cell align-middle w-50 lh-50">
		<a href="" class="d-block w-50 lh-50 text-center text-black hover:text-tertiary position-relative top-10 " data-toggle="collapse" data-target="#search-form" aria-expanded="false" aria-controls="collapse">
		<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-20"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg>
		</a>	
	</div>
</form>
