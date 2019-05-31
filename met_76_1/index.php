<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss" m-id='{$ui.mid}'>
	<div class="container">
		<div class="top-wrap">
			<span class="title-sub-1">{$ui.block_title_sub1}</span>
			<span class="title-sub-2">{$ui.block_title_sub2}</span>
			<h2 class="block-title">{$ui.block_title}</h2>
			<div class="top-right">500个高端设计案例</div>
		</div>
		<div class="content-wrap clearfix">
			<div class="left-wrap">
				<div class="swiper-container J-content-sw">
				    <div class="swiper-wrapper">
				    	<tag action="list" cid="$ui['left_id']" num="$ui['left_num']">
					        <div class="swiper-slide">
					        	<a href="{$v.url}" title="{$v.title}" {$g.urlnew} class="full-img">
					        		<img src="{$v.imgurl|thumb:580,430}" title="{$v.title}" />
					        		<div class="black-box">
					        			<div class="black-wrap left-black">
					        				<p class="case-title">{$v.title}</p>
					        				<p class="case-content">{$v.description}</p>
					        			</div>
					        		</div>
					        	</a>
					        </div>
					    </tag>
				    </div>
				    <!-- 如果需要分页器 -->
				    <div class="swiper-pagination">
				    	
				    </div>
				</div>
			</div>
			<div class="right-wrap">
				
			</div>
		</div>
		<a href="" class="look-btn">{$ui.btn_text}</a>
	</div>
</div>