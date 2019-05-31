/*!
 * M['weburl']      网站网址
 * M['lang']        网站语言
 * M['tem']         模板目录路径
 * M['classnow']    当前栏目ID
 * M['id']          当前页面ID
 * M['module']      当前页面所属模块
 * default_placeholder 开发者自定义默认图片延迟加载方式，'base64'：灰色背景；自定义背景图片路径；'blur'：图片高斯模糊；默认为'blur'
 * met_prevarrow,met_nextarrow slick插件翻页按钮自定义html
 * device_type       客户端判断（d：PC端，t：平板端，m：手机端）
 */
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
        var m=METUI['$uicss'];//此处对应的最外层的那个css类名
        
    },
    menuHover: function(){
        var m=METUI['$uicss'];//此处对应的最外层的那个css类名
        var index = 0;
        var $detailItem = m.find(".head-nav-wrapper .nav-detail-item");//导航列表
        var $headWrapper = m.find('.head-nav-wrapper');//导航下拉列表
        m.find('.head-nav .nav-menu li,.head-nav-wrapper .nav-detail-item').hover(function(){
            index = $(this).index();
            var listNum = $headWrapper.find('.nav-detail-item:eq('+ index +') .detail-item').length;//当前一级栏目下二级栏目内容显示数量
            if( listNum < 1 || index == 0 )return false;//拒绝显示没有内容的下拉列表
            $detailItem.eq(index).show();
            $headWrapper.addClass('active');
        },function(){
            $detailItem.eq(index).hide();
            $headWrapper.removeClass('active');
        });
    },
    cutFont: function(){
        //切换简繁体以及英文
        METUI['$uicss'].find('.J-cut-font').on("click", function(){
            var $this = $(this);
            var text = $this.find('a').text();
            if( text == '简体' ){
                $("body").s2t();
                $this.find('a').text('繁体');
            }else if( text == '繁体' ) {
                $("body").t2s();
                $this.find('a').text('简体');
            }
        });
    },
    mbMenuOpen: function(){
        // 点击展开手机导航栏
        var $menuBtn = METUI['$uicss'].find('.J-toggler-btn,.J-close-btn');
        $menuBtn.on("click", function(){
            var $menuCon = METUI['$uicss'].find(".mb-nav-wrapper");
            $menuCon.toggleClass('active');
        });
        // 手机端导航栏
        var $menuWrap = METUI['$uicss'].find('.J-mb-menu');
        $menuWrap.on("click", "li", function(event){
            event.stopPropagation();
            var isChildren = $(this).children('ul');
            if( isChildren && isChildren.is(":hidden") ){
                isChildren.slideDown(300).prev().find('.arrow-icon').addClass('active');
            }else if( isChildren ) {
                isChildren.slideUp(300).prev().find('.arrow-icon').removeClass('active');
            }
        });
    },
    navScroll: function(){
        var $metnav_fixed = METUI['$uicss'];
        $(window).scroll(function(){
            metnavShadow();
        });
        function metnavShadow(){
            if($(window).width()>767){
                if($metnav_fixed.offset().top > 40){
                    $metnav_fixed.addClass("active").find('.head-top-bar').slideUp(300);
                }else{
                    $metnav_fixed.removeClass("active").find('.head-top-bar').slideDown(0);
                }
            }
        }
    }
};
var x = new metui(METUI_FUN['$uicss']);