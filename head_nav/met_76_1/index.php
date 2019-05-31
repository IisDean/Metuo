<?php defined('IN_MET') or exit('No permission'); ?>
<if value="$ui['navfixed_ok']">
	<header class="$uicss navbar nav-fixed" m-id='{$ui.mid}' m-type="head_nav">
<else/>
	<header class="$uicss navbar" m-id='{$ui.mid}' m-type="head_nav">
</if>	
	<if value="$data['name']">
		<h1 hidden>{$data.name}</h1>
	<else/>
		<h1 hidden>{$c.met_webname}</h1>
	</if>	
	<!--  顶部信息  -->
	<div class="head-top-bar">
		<div class="container clearfix">
			<if value="$ui['top_left_text']">
				<div class="float-left top-text">
					<span>{$ui.top_left_text}</span>
				</div>
			</if>
			<ul class="float-right head-top-right clearfix">
				<!-- 会员注册登录 -->
                <if value="$c[met_member_register]&&$ui[member]">
                	<li class="float-right">
	                <button type="button" class="login-btn-wrap navbar-toggler collapsed m-0 p-x-5 met-head-user-toggler" data-target="#met-head-user-collapse" data-toggle="collapse"> <i class="icon wb-user" aria-hidden="true"></i>
	                </button>
	                <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id='met-head-user-collapse' m-id='member' m-type='member'>
	                <if value="$user">
	                    <if value="$c['shopv2_open']">
	                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user met-head-shop" m-id="member" m-type="member">
	                            <li class="dropdown inline-block text-xs-center vertical-align-middle animation-slide-top">
	                                <a
	                                    href="javascript:;"
	                                    class="navbar-avatar dropdown-toggle"
	                                    data-toggle="dropdown"
	                                    aria-expanded="false"
	                                >
	                                <span class="avatar m-r-5"><img src="{$user.head}" alt="{$user.username}"/></span>
	                                    {$user.username}
	                                    <span class="caret"></span>
	                                </a>
	                                <ul class="dropdown-menu dropdown-menu-right animate" role="menu">
	                                    <li role="presentation">
	                                        <a href="{$url.shop_profile}" class="dropdown-item" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {$word.app_shop_personal}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_order}" class="dropdown-item" role="menuitem"><i class="icon wb-order" aria-hidden="true"></i> {$word.app_shop_myorder}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_favorite}" class="dropdown-item" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> {$word.app_shop_myfavorite}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_discount}" class="dropdown-item" role="menuitem"><i class="icon wb-bookmark" aria-hidden="true"></i> {$word.app_shop_mydiscount}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_member_base}&nojump=1" class="dropdown-item" target="_blank" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> {$word.app_shop_settings}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_member_login_out}" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {$word.app_shop_out}</a>
	                                    </li>
	                                </ul>
	                            </li>
	                            <li class="dropdown inline-block shop_cart text-xs-center vertical-align-middle animation-slide-top">
	                                <a
	                                    href="javascript:void(0)"
	                                    title="{$word.app_shop_cart}"
	                                    data-toggle="dropdown"
	                                    aria-expanded="false"
	                                    data-animation="slide-bottom10"
	                                    role="button"
	                                >
	                                    <i class="icon wb-shopping-cart" aria-hidden="true"></i>
	                                    {$word.app_shop_cart}
	                                    <span class="badge badge-danger up hide topcart-goodnum"></span>
	                                </a>
	                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media topcartremove animation-slide-bottom10" role="menu">
	                                    <li class="dropdown-menu-header">
	                                        <h5>{$word.app_shop_cart}</h5>
	                                        <span class="label label-round label-danger">{$word.app_shop_intotal} <span class="topcart-goodnum"></span> {$word.app_shop_piece}{$word.app_shop_commodity}</span>
	                                    </li>
	                                    <li class="list-group dropdown-scrollable" role="presentation">
	                                        <div data-role="container">
	                                            <div data-role="content" id="topcart-body"></div>
	                                        </div>
	                                    </li>
	                                    <li class="dropdown-menu-footer" role="presentation">
	                                        <div class="dropdown-menu-footer-btn">
	                                            <a href="{$url.shop_cart}" class="btn btn-squared btn-danger margin-bottom-5 margin-right-10">{$word.app_shop_gosettlement}</a>
	                                        </div>
	                                        <span class="red-600 font-size-18 topcarttotal"></span>
	                                    </li>
	                                </ul>
	                            </li>
	                        </ul>
	                        <else/>
	                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
	                            <li class="dropdown text-xs-center vertical-align-middle animation-slide-top">
	                                <a
	                                    href="javascript:;"
	                                    class="navbar-avatar dropdown-toggle"
	                                    data-toggle="dropdown"
	                                    aria-expanded="false"
	                                >
	                                <span class="avatar m-r-5"><img src="{$user.head}" alt="{$user.username}"/></span>
	                                    {$user.username}
	                                    <span class="caret"></span>
	                                </a>
	                                <ul class="dropdown-menu dropdown-menu-right animate">
	                                    <li role="presentation">
	                                        <a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}" class="dropdown-item" title='{$word.memberIndex9}' role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {$word.memberIndex9}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}&a=dosafety" class="dropdown-item" title='{$word.accsafe}' role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i> {$word.accsafe}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}&a=dologout" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {$word.memberIndex10}</a>
	                                    </li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </if>
	                    <else/>
	                    <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
	                        <li class=" text-xs-center vertical-align-middle animation-slide-top">
	                            <a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}" class="btn btn-squared btn-primary btn-outline m-r-10">{$word.login}</a>
	                            <a href="{$c.met_weburl}member/register_include.php?lang={$_M[lang]}" class="btn btn-squared btn-success">{$word.register}</a>
	                        </li>
	                    </ul>
	                </if>
	                </div>
	            	</li>
                </if>
                <!-- 切换中英文 -->
				<lang></lang>
                <if value="$sub gt 1">
                    <if value="$c['met_lang_mark'] && $ui[lang_ok]">
						<li class="cut-font-wrap float-right" m-id='lang' m-type='lang'>
							<lang>
								<if value="$data['lang'] eq $v['mark']">
									<a href="javascript:;">
										<if value="$ui['langlist_icon_ok']">
			                                <img src="{$v.flag}" alt="{$v.name}" style="max-width:100%;">
			                            </if>
			                            <span>{$v.name}</span>
										<i class="fa fa-caret-down"></i>
									</a>
								</if>
							</lang>
							<!--  下拉列表  -->
							<ul class="cut-font-sub cut-language">
								<lang>
									<li class="cut-item">
										<a href="{$v.met_weburl}" <if value="$v['newwindows']">target="_blank"<else/>target="_self"</if>>
											<if value="$ui['langlist_icon_ok']">
	                                            <img src="{$v.flag}" alt="{$v.name}" style="max-width:100%;">
	                                        </if>
											<span>{$v.name}</span>
										</a>
									</li>
								</lang>
							</ul>
						</li>
					</if>
				</if>
                <if value="$ui['simplified'] eq 1">
					<li class="cut-font-wrap float-right J-cut-font" m-id='lang' m-type='lang'>
						<a href="javascript:;" class="J-cut-text">简体</a>
						<i class="fa fa-caret-down"></i>
					</li>
				</if>
				<!--  搜索  -->
				<if value="$ui['search'] eq 1">
					<li class="float-right search-container clearfix">
						<form method="get" action="{$c.met_weburl}search/search.php?lang={$_M[lang]}" class="clearfix">
	                        <!-- add start -->	
	                        <input type="hidden" name='lang' value="{$data.lang}">
	                        <input type="hidden" name='search' value="search">
							<input type="text" name="searchword" value="" placeholder="{$ui.placeholder}" data-fv-notempty="true" data-fv-message="不能为空" class="float-left search-wrap"/>
							<button type="submit" class="float-left search-btn"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</if>
			</ul>
		</div>
	</div>
	<!--  导航区域  -->
	<nav class="head-nav">
		<div class="container clearfix">
			<a href="{$c.index_url}" title="{$c.met_webname}" class="logo-wrap float-left">
                <img src="{$c.met_logo}" alt="{$c.met_webname}" met-id="83" met-table="config" met-field="value" class="">
			</a>
			<!-- pc端导航栏 -->
			<ul class="float-right nav-menu clearfix">
				<li class="float-left nav-item"><a href="{$c.index_url}" title="{$c.met_webname}" class="nav-btn"><span class="nav-item-content">网站首页</span></a></li>
	            <tag action="category" type="head" class="active">
					<li class="float-left nav-item"><a href="{$m.url}" title="{$m.name}" class="nav-btn"><span class="nav-item-content">{$m.name}</span></a></li>
				</tag>
			</ul>
			<!--  移动端导航栏展开按钮  -->
			<button type="button" class="navbar-toggler hamburger p-x-5 J-toggler-btn">
                <span class="sr-only"></span>
                <span class="hamburger-bar"></span>
            </button>
		</div>
	</nav>
	<!--  下拉菜单  -->
	<div class="head-nav-wrapper">
		<div class="container">
			<ul class="clearfix">
				<li class="nav-detail-item float-right clearfix"></li>
	            <tag action="category" type="head" class="active" hide="$ui['hide']">
					<li class="nav-detail-item float-right clearfix">
						<div class="float-left clearfix">
							<!--  2级栏目列表  -->
							<tag action="category" cid="$m['id']" type="son">
								<div class="float-left detail-item">
									<a href="{$m.url}" title="{$m.name}" {$m.urlnew} class="content-title">{$m.name}</a>
									<div class="content-wrap">
										<!-- 3级栏目列表 -->
										<tag action="category" cid="$m['id']" type="son">
											<a class="content-item" href="{$m.url}" {$m.urlnew} title="{$m.name}">{$m.name}</a>
										</tag>
									</div>
								</div>
							</tag>
						</div>
						<div class="float-right">
							
						</div>
					</li>
				</tag>
			</ul>
		</div>
	</div>
	<!--  移动端下拉菜单  -->
	<div class="mb-nav-wrapper">
		<div class="nav-mask J-close-btn"></div>
		<div class="nav-ul nav-animation">
			<ul class="J-mb-menu">
				<!--  一级栏目  -->
				<li>
					<a href="{$c.index_url}" title="{$c.met_webname}" class="mb-detail-item">网站首页</a>
					<span class="arrow-icon close-btn J-close-btn"><i class="fa fa-close"></i></span>
				</li>
		        <tag action="category" type="head" class="active" hide="$ui['hide']">
					<li>
						<if value="$m['sub'] eq 1">
							<!-- 有多个子栏目时 -->
							<div class="mb-detail-item J-item-wrap">
								<a href="{$m.url}" title="{$m.name}">{$m.name}</a>
								<span class="arrow-icon"><i class="fa fa-angle-down"></i></span>
							</div>
						<else/>
							<!-- 无子栏目时 -->
							<a href="{$m.url}" title="{$m.name}" class="mb-detail-item">{$m.name}</a>
						</if>
						<if value="$m['sub'] eq 1">
							<ul class="item-two-wrap">
								<!-- 此栏目是否有内容 -->
								<if value="$m['isshow']">
									<li>
										<a href="{$m.url}" title="{$m.name}" class="item-two-content">全部</a>
									</li>
								</if>
								<tag action="category" cid="$m['id']" type="son">
									<li>
										<if value="$m['sub'] eq 1">
											<div class="item-two-content J-item-wrap">
												<a class="item-two-sub">{$m.name}</a>
												<span class="arrow-icon"><i class="fa fa-angle-down"></i></span>
											</div>
										<else/>
											<a href="{$m.url}" title="{$m.name}" class="item-two-content">{$m.name}</a>
										</if>
										<ul class="item-three-wrap">
											<!-- 此栏目是否有内容 -->
											<if value="$m['isshow']">
												<li>
													<div class="item-three-content">
														<a href="{$m.url}" title="{$m.name}" class="item-two-sub">全部</a>
													</div>
												</li>
											</if>
											<tag action="category" cid="$m['id']" type="son">
												<li>
													<div class="item-three-content">
														<a href="{$m.url}" title="{$m.name}" class="item-two-sub">{$m.name}</a>
													</div>
												</li>
											</tag>
										</ul>
									</li>
								</tag>
							</ul>
						</if>
					</li>
				</tag>
                <!-- 切换中英文 -->
				<lang></lang>
				<if value="$sub gt 1">
                    <if value="$c['met_lang_mark'] && $ui[lang_ok]">
						<li>
							<lang>
								<if value="$data['lang'] eq $v['mark']">
									<div class="mb-detail-item J-item-wrap">
										<a>{$v.name}</a>
										<span class="arrow-icon"><i class="fa fa-angle-down"></i></span>
									</div>
								</if>
							</lang>
							<ul class="item-two-wrap">
								<lang>
									<li>
										<a href="{$v.met_weburl}" title="{$v.name}" class="item-two-content">
											<if value="$ui['langlist_icon_ok']">
	                                            <img src="{$v.flag}" alt="{$v.name}" style="max-width:100%;">
	                                        </if>
	                                    	<span>{$v.name}</span>
	                                    </a>
									</li>
								</lang>
							</ul>
						</li>
					</if>
				</if>
				<!--  简体繁体  -->
                <if value="$ui['simplified'] eq 1">
					<li>
						<div class="mb-detail-item J-cut-font">
							<a class="J-cut-text">简体</a>
							<span class="arrow-icon"><i class="fa fa-angle-down"></i></span>
						</div>
					</li>
				</if>
			</ul>	
			<!-- 会员注册登录 -->
			<ul>
                <if value="$c[met_member_register]&&$ui[member]">
                	<li class="">
	                <div class="" m-id='member' m-type='member'>
	                <if value="$user">
	                    <if value="$c['shopv2_open']">
	                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user met-head-shop" m-id="member" m-type="member">
	                            <li class="dropdown inline-block text-xs-center vertical-align-middle animation-slide-top">
	                                <a
	                                    href="javascript:;"
	                                    class="navbar-avatar dropdown-toggle"
	                                    data-toggle="dropdown"
	                                    aria-expanded="false"
	                                >
	                                <span class="avatar m-r-5"><img src="{$user.head}" alt="{$user.username}"/></span>
	                                    {$user.username}
	                                    <span class="caret"></span>
	                                </a>
	                                <ul class="dropdown-menu dropdown-menu-right animate" role="menu">
	                                    <li role="presentation">
	                                        <a href="{$url.shop_profile}" class="dropdown-item" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {$word.app_shop_personal}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_order}" class="dropdown-item" role="menuitem"><i class="icon wb-order" aria-hidden="true"></i> {$word.app_shop_myorder}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_favorite}" class="dropdown-item" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> {$word.app_shop_myfavorite}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_discount}" class="dropdown-item" role="menuitem"><i class="icon wb-bookmark" aria-hidden="true"></i> {$word.app_shop_mydiscount}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_member_base}&nojump=1" class="dropdown-item" target="_blank" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> {$word.app_shop_settings}</a>
	                                    </li>
	                                    <li role="presentation">
	                                        <a href="{$url.shop_member_login_out}" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {$word.app_shop_out}</a>
	                                    </li>
	                                </ul>
	                            </li>
	                            <li class="dropdown inline-block shop_cart text-xs-center vertical-align-middle animation-slide-top">
	                                <a
	                                    href="javascript:void(0)"
	                                    title="{$word.app_shop_cart}"
	                                    data-toggle="dropdown"
	                                    aria-expanded="false"
	                                    data-animation="slide-bottom10"
	                                    role="button"
	                                >
	                                    <i class="icon wb-shopping-cart" aria-hidden="true"></i>
	                                    {$word.app_shop_cart}
	                                    <span class="badge badge-danger up hide topcart-goodnum"></span>
	                                </a>
	                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media topcartremove animation-slide-bottom10" role="menu">
	                                    <li class="dropdown-menu-header">
	                                        <h5>{$word.app_shop_cart}</h5>
	                                        <span class="label label-round label-danger">{$word.app_shop_intotal} <span class="topcart-goodnum"></span> {$word.app_shop_piece}{$word.app_shop_commodity}</span>
	                                    </li>
	                                    <li class="list-group dropdown-scrollable" role="presentation">
	                                        <div data-role="container">
	                                            <div data-role="content" id="topcart-body"></div>
	                                        </div>
	                                    </li>
	                                    <li class="dropdown-menu-footer" role="presentation">
	                                        <div class="dropdown-menu-footer-btn">
	                                            <a href="{$url.shop_cart}" class="btn btn-squared btn-danger margin-bottom-5 margin-right-10">{$word.app_shop_gosettlement}</a>
	                                        </div>
	                                        <span class="red-600 font-size-18 topcarttotal"></span>
	                                    </li>
	                                </ul>
	                            </li>
	                        </ul>
	                        <else/>
	                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user J-mb-menu" m-id="member" m-type="member">
	                            <li class="dropdown vertical-align-middle">
	                                <a href="javascript:;" class="navbar-avatar dropdown-toggle mb-detail-item">
		                                <span class="avatar m-r-5">
		                                	<img src="{$user.head}" alt="{$user.username}"/>
		                                </span>
		                                <span>{$user.username}</span>
										<span class="arrow-icon"><i class="fa fa-angle-down"></i></span>
	                                </a>
	                                <ul class="item-two-wrap">
										<li>
											<a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}" title='{$word.memberIndex9}' class="item-two-content">
												<i class="icon wb-user" aria-hidden="true"></i>
												<span>{$word.memberIndex9}</span>
											</a>
										</li>
										<li>
											<a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}&a=dosafety" title='{$word.memberIndex9}' class="item-two-content">
												<i class="icon wb-lock" aria-hidden="true"></i>
												<span>{$word.accsafe}</span>
											</a>
										</li>
										<li>
											<a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}&a=dologout" title='{$word.memberIndex10}' class="item-two-content">
												<i class="icon wb-lock" aria-hidden="true"></i>
												<span>{$word.memberIndex10}</span>
											</a>
										</li>
									</ul>
	                            </li>
	                        </ul>
	                    </if>
	                    <else/>
	                    <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
	                        <li class="text-xs-center vertical-align-middle mb-login-btn">
	                            <a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}" class="btn btn-squared btn-primary btn-outline m-r-10">{$word.login}</a>
	                            <a href="{$c.met_weburl}member/register_include.php?lang={$_M[lang]}" class="btn btn-squared btn-success">{$word.register}</a>
	                        </li>
	                    </ul>
	                </if>
	                </div>
	            	</li>
                </if>
			</ul>
			<!--  搜索  -->
			<if value="$ui['search'] eq 1">
				<form method="get" action="{$c.met_weburl}search/search.php?lang={$_M[lang]}" class="clearfix">
					<div class="float-right search-container clearfix">
	                    <input type="hidden" name='lang' value="{$data.lang}">
	                    <input type="hidden" name='search' value="search">
						<input type="text" name="searchword" class="float-left search-wrap" placeholder="{$ui.placeholder}" />
						<button type="submit" class="float-left search-btn"><i class="fa fa-search"></i></button>
					</div>
				</form>	
			</if>
		</div>
	</div>
</header>