<?exit?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="mobile-agent" content="format=xhtml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=html5; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<meta name="mobile-agent" content="format=wml; url=http://m.{ROOT_DOMAIN}{$_SERVER['REQUEST_URI']}">
	<title>{$com['cname']}最新招聘信息_电话_地址 - {$domainInfo['region_name_short']}597人才网</title>
	<meta name="keywords" content="{$com[cname]},人才招聘,人才网">
	<meta name="description" content="{$description}">
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/base.css?v=20141009" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/www/css/v2/v2-reset.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-header.css?v=20140821" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/www/css/v2/default/v2-widge.css?v=20141122" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/front.css?v=20150428" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/job.css?v=20150226" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/jobnew.css?v=201504286" />
	<!-- <link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/mainPhoto.css?v=20150226" /> -->
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/mainPhoto.css?v=20150829" />
	<link rel="stylesheet" type="text/css" href="http://cdn.{ROOT_DOMAIN}/css/map.css?v=100713305" />
	<style>
		.comPhotos {
			width: 100%;
			height: 290px;
			float: left;
			overflow: hidden;
			position: relative;
		}
		.comPhotos  ul li{
			height:290px;
		}
		.comPhotos  ul li a {
			text-align: center;background:none!important;
		}
		.comPhotos  ul li a img {
			width: 100%;
		}
		.slidePrev {
			left: 10px;
		}
		.slideNext {
			right: 10px;
			background-position: -30px 0;
		}
		.slideNext, .slidePrev {
			width: 30px;
			height: 64px;
			background: url(http://cdn.597.com/img/common/newprev.png);
			position: absolute;
			top: 102px;
			cursor: pointer;
			display: none;
		}
	</style>
	<style>
		.main {
			zoom:1;
			background: #f2f2f2;
		}
		.main:after,.nJobmcLf:after {
			content: '';
			display: block;
			clear: both;

		}
		.main_left {
			width: 660px;
			float: left;
		}
		.shadow {
			background: #fff;
			box-shadow:0 0 6px #dbdbdb;
			height:auto;
			text-align:left;
			margin:12px auto!important;
		}
		.nJobMainCont {
			padding:0;
		}
		.newTytit {
			width: 100%;
			padding:30px;
		}
		.njmName {
			margin-bottom:0!important;
		}
		#dtjt_title,#baidu_map,#dtjt_info,#dtjt_wrap{width: 100%!important;}
		.nrtLitMain{width: 220px!important;}
		.alljob{display: none;}
		.map_tab dl dt img{margin-left:2px;}
		.title_more{width: 100%;height:40px;border:1px solid #E0E0E0;background: #F5F5F5;text-align: center;line-height: 40px!important;color: #555;}
		.title_more:hover {background: #E0E0E0;cursor: pointer;}
		.title_more span{color: #bbb;}
		.title_more:hover span{color: #555;}
		.njmTit{overflow: hidden;}
		.right_adv{display:block;width: 260px;height: 170px;margin-bottom:10px;/*border:10px solid white;*/box-shadow: 0 0 6px #dbdbdb;}
		.right_adv img{width: 100%;height:100%;}
		.ji{color:#fff;background: #ff3030;display: inline-block;padding:0 2px;margin-right: 2px;}
		/*.ji{color:#ff3030;}*/
		.ji img{vertical-align: text-top;}
		.job_time{vertical-align:text-bottom;}
		.job_box{display: inline-block;max-width: 110px;vertical-align:text-bottom;}
		.job_li{height: 76px;}
	</style>
	<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/version.js?v=20141117"></script>
	<!–[if lt IE9]>
	<script src="http://cdn.{ROOT_DOMAIN}/js/html5.js?v=2017" charset="utf-8"></script>
	<![endif]–>

	<!--
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/jquery-1.8.3.min.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/common.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/dialog.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/ui_validate.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/jquery.form.js?v=20140319"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/ui_flexslider.js?v=20140312"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/prettyPhoto.js?v=20141103"></script>
<script type="text/javascript" language="javascript" src="http://style.abc.com/js/lrtkmain.js?v=20141103"></script>
-->
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/common.js?v=20150227"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/dialog.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/jquery.form.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_validate.js?v=20150226"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/ui_inputFocus.js?v=20150226"></script>

<script type="text/javascript">
window.CONFIG = {
	HOST: 'http://cdn1.597.com/min/??',
	COMBOPATH: '/js/v2/'
}
</script>
<script type="text/javascript" src="http://cdn1.597.com/min/??/js/v2/jpjs.js,/js/v2/jquery.min.js,/js/v2/base/util.js,/js/v2/base/class.js,/js/v2/base/shape.js,/js/v2/base/event.js,/js/v2/base/aspect.js,/js/v2/base/attribute.js,/js/v2/tools/cookie.js"></script>
<script type="text/javascript" src="http://cdn1.597.com/min/js/v2/global.js?v=20150116"></script>
<script type="text/javascript">
	jpjs.loadJS('http://cdn1.597.com/min/js/v2/common.js');
</script>
<script type="text/javascript">
try{
var ____jsonfe = {locallist:[{name:''}],addressList:{name:'{$com[comAddress]}',lat:'',lon:'',baidulat:'{$com[comLatitude]}',baidulon:'{$com[comLongitude]}',address:'{$com[comAddress]}'},fullScreen:1};
}
catch(e){}
</script>
<!--{if $jobCount}-->
<style id="depNav">
		li {
			list-style: none;
		}
		#company-job-tab{padding-top:10px;width:100%; height: 100%;}
		.tabpanel {
			width: 100% !important;
			height: 100% !important;
			font-family: "Helvetica Neue", Helvetica, Arial, "Microsoft Yahei", "Hiragino Sans GB", "Heiti SC", "WenQuanYi Micro Hei", sans-serif;
		}

		.tabpanel_tab_content {
			position: relative;
			width: 100%;
			height: 37px;
			line-height: 37px;
			white-space: nowrap;
			overflow: hidden;
		}

		.tabpanel_tab_content .tabpanel_left_scroll_disabled {
			opacity: 0;
			-moz-opacity: 0;
			filter: alpha(opacity=0);
		}

		.tabpanel_tab_content .tabpanel_left_scroll {
			position: absolute;
			left: 0;
			top: 0;
			z-index: 10;
			width: 15px;
			height: 36px;
			cursor: pointer;
			background: transparent url(http://public.tzrl.com/images/new/scroll.gif) no-repeat -15px 0;
		}

		.tabpanel_tab_content .tabpanel_right_scroll {
			position: absolute;
			right: 0;
			top: 0;
			z-index: 10;
			width: 15px;
			height: 36px;
			cursor: pointer;
			background: transparent url(http://public.tzrl.com/images/new/scroll.gif) no-repeat -30px 0;
		}

		.tabpanel_tab_content .tabpanel_move_content {
			width: 0;
			overflow: hidden;
		}

		.tabpanel_move_content_scroll {
			margin-left: 18px;
			margin-right: 18px;
		}

		.company-job ul {
			position: relative;
			margin-right: -16px;
			overflow: hidden;
			*zoom: 1;
		}

		.tabpanel_mover {
			position: relative;
			margin: 0;
			padding: 0;
			width: 5000px;
		}

		.tabpanel_mover li.active {
			color: #333;
			border: solid 1px #eee;
			border-bottom-color: #fff;
		}

		.tabpanel_mover li {
			position: relative;
			float: left;
			width: 130px !important;
			height: 35px;
			line-height: 35px;
			color: #999;
			text-align: center;
			cursor: pointer;
			list-style-type: none;
		}

		.tabpanel_mover li.active .title {
			margin-top: -1px;
			color: #333;
		}

		.tabpanel_mover li .title {
			display: inline-block;
			font-size: 14px;
			color: #999;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
		}

		.display_none {
			display: none;
		}

		.tabpanel_tab_content .tabpanel_tab_spacer {
			margin-top: -1px;
			height: 1px;
			line-height: 1px;
			font-size: 0;
			background: #eee;
			zoom: 1;
		}

		/*-----------*/
		.tabpanel_content {
			margin-top: 10px;
			width: 100% !important;
			height: 100% !important;
			background-color: #FFF;
			border: none;
			overflow: hidden;
			zoom: 1;
		}

		.tabpanel_content .html_content {
			width: 100% !important;
			height: 100% !important;
			background-color: #FFF;
			zoom: 1;
		}
		.html_content ul li h6{margin-bottom: 10px;color: #333;}
		.html_content ul li a{
			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}
		.html_content ul li a:hover{background: #f8f8f8;}
		/*.html_content ul li h6 a{color: #333;}*/
		.company-job ul {
			position: relative;
			margin-right: -16px;
			overflow: hidden;
			*zoom: 1;
		}

		.company-job li {
			float: left;
			width: 33.33333%;
			zoom: 1;
		}

		.company-job li a {
			display: block;
			margin-bottom: 10px;
			margin-right: 16px;
			padding: 20px;
			_padding: 15px;
			text-decoration: none;
			border-bottom: 1px solid #eee;
		}

		.company-job li a h6 {
			margin-top: 0;
			font-size: 14px;
		}
		.grey {
			color: #999 !important;
		}

		.ml10 {
			margin-left: 10px !important;
		}

		.company-job li a p {
			line-height: 1;
			letter-spacing: 1px;
		}

		.ellipsis {
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}

		.red {
			color: #ff3030 !important;
		}

	</style>
<script src="http://cdn.{ROOT_DOMAIN}/js/fader.js" language="javascript"></script>
<script src="http://cdn.{ROOT_DOMAIN}/js/tab.js" language="javascript"></script>
<script type="text/javascript" language="javascript" src="http://cdn.{ROOT_DOMAIN}/js/qrcode.min.js?v=20150226"></script>
<script>
    /**
	 * 职位列表效果(按部门)
     */
	(function($){
		$(function () {
			var tabpanel = new TabPanel({
				renderTo: 'company-job-tab',
				width: '100%',
				height: '100%',
				active: 0,
				items: [
					{
						id: 'toolbarPlugin1',
						name: 1,
						title: '全部',
						html: JobView(-1),
						closable: false
					}
					<!--{loop $unitListArr $k $l}-->
					,{
						id: 'toolbarPlugin{$k}',
						name: {$k},
						title: "{$l['cuName']}",
						html: JobView({$l['cuid']}),
						closable: false
					}
					<!--{/loop}-->

				]
			});

			$('.jobcount').text($('.alljob ul li').size());
			if ($('#tongji').val() == 1) {
				$('.tongji').show();
			}
		});
		function JobView(type,sign) {
			jobhtml = "";
			if (type ==-1) {
				jobhtml = $('.alljob').html();
			}
			else {
				$('.alljob ul li[rel=' + type + ']').each(function () {
					jobhtml += '<li>' + $(this).html() + '</li>';
				})
				jobhtml = '<ul>' + jobhtml + '</ul>';
			}
			return jobhtml;
		}
	})(jQuery);

</script>
<!--{/if}-->
</head>
<body>

<!--{template header}-->
<style type="text/css">
	.ui_company_dialog .iduatopBtnbg{margin:0 0 40px 0;}
	.dropImage{
		width: 660px;height: 330px;background: #f1f1f1;overflow:hidden;margin-bottom:20px;
	}
	.iduaTionImgList:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
	.iduaTionImgList{zoom:1;margin:0 -10px;}
	.iduaTionImgList li{
		float:left;width:320px;padding:0 10px 20px;
	}
	.iduaTionImgList li p{
		display:block;height:96px;overflow:hidden;
	}
	.iduaTionImgList .iduaTionLit{
		height:30px;line-height:30px;border-top:1px #fff solid;
		background:#f5f5f5;overflow:hidden;text-align:right;
	}
	.iduaTionImgList .iduaTionLit em{
		float:left;height:16px;line-height:16px;color:#fff;
		padding:0 8px;border-radius:8px;background:#ccc;font-size: 12px;
		margin:7px 0 0 7px;font-family: Arial, Helvetica, sans-serif;
	}
	.iduaTionImgList .iduaTionLit a{
		width: 50px;height: 30px;line-height: 30px;text-align: center;display:inline-block;
		color: #3d84ba;font-size: 12px;font-family: "宋体";border-left: 1px solid #fefefe;
	}
	.iduaTionImgList .iduaTionLit .red{
		color:#f36865
	}
	.iduaTionImgList .iduaTionLit a:hover{
		background:#3e84ba;color:#fff;
	}
	.iduaTionImgList .iduaTionLit a.red:hover{
		background:#f36865;color:#fff;
	}

	.notPopMaster{top:108px}
	.njmNameImg .njmNameXbox{width:160px;height:160px;overflow:hidden;position:relative;display:table-cell;text-align:center;vertical-align:middle;}
	.njmNameImg .njmNameXbox p {position:static;+position:absolute;top:50%}
	.njmNameMge{width: 160px;height: 160px;overflow: hidden;}
	.njmNameImg .njmNameXbox p img{position:static;+position:relative;top:-50%;left:-50%;max-width:160px;max-height:160px;}
	.topHeader .header_fix {width: 1000px;}
	.njmNameBtn { *text-indent: 50px;}
	#announcement {background: #fff; padding:5px 30px;width: 100%;margin:0 auto; margin-bottom: 10px;}
	#announcement div {overflow-y: hidden;line-height: 20px;height: 20px;border:none;}
	.grayline {border-right-width: 1px;border-left-width: 1px;border-right-style: solid;border-left-style: solid;border-right-color: #c8c8c8;border-left-color: #c8c8c8;}
	#announcement li {font-size: 12px;float: left;list-style-type: none;margin-right: 11px;margin-left: 5px;white-space: nowrap;}
	#announcementbody ul {margin: 0px;padding: 0px;clear: both;}
	.imgEwm {position: absolute; width: 80px; right:7px; top:70px; text-align: center; color:#999;margin: 10px 20px 0px 0px;}
	.imgEwm tr td{width: 2px!important;height: 2px!important;}
	.shareTitle{text-align:right;padding-right:16px;color: #999;font-size: 12px;margin-top: -23px;}
	#dtjt_wrap {width: 940px; margin-top: 10px;}
	#dtjt_info,#baidu_map,#map_search_result {width: 938px;}
	#mapbar,.map{ width:935px;}
	#baidu_fullscreen {left:640px;}
	#map_route {width: 918px;}
	.subPhonex em {font-size: 14px; padding:0 15px 0 0; color:#666; font-weight: normal;}
	.newTytit .linkType{font-size: 16px;line-height: 18px;color: #295266;font-weight: bold;border-left: 4px solid #38b7ea;text-indent: 9px;margin-bottom: 15px; padding-left: 10px; }
	.newTytit em{color:#b2b2b2;}
</style>



<script type="text/javascript">var bannerImgs = [];</script>
<!--{if $imageCachesArr}-->
<div class="topMainBanner">
	<div class="banner" id="banner">
		<div class="lst flexslider2">
			<ul class="slides">
			<!--{loop $imageCachesArr $l}-->
				<li style="background:url(http://cdn.{ROOT_DOMAIN}/img/common/loadBox.gif) no-repeat center center">
					<!--{if $l['isUpload']==1}-->
						<img rel="http://pic.{ROOT_DOMAIN}/companyTemplate/{$l['name']}" />
					<!--{else}-->
						<img rel="http://cdn.{ROOT_DOMAIN}/img/templates/{$l['name']}" />
					<!--{/if}-->
				</li>
				<script type="text/javascript">
					<!--{if $l['isUpload']==1}-->
						bannerImgs.push("http://pic.{ROOT_DOMAIN}/companyTemplate/{$l['name']}");
					<!--{else}-->
						bannerImgs.push("http://cdn.{ROOT_DOMAIN}/img/templates/{$l['name']}");
					<!--{/if}-->
				</script>
			<!--{/loop}-->
			</ul>
		</div>
	</div>
</div>
<!--{/if}-->

<div>
	<div class="njmName shadow">
		<div class="njmName01">
			<div class="njmNameImg">
				<div class="njmNameMge">
					<div class="njmNameXbox">
						<p>
							<!--{if $com['logoUrl']}-->
								<img src="http://pic.{ROOT_DOMAIN}/logo/{$com[logoUrl]}">
							<!--{else}-->
								<img src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/default_logo.png" />
							<!--{/if}-->
						</p>
					</div>
				</div>
			</div>
			<div class="njmNameRt">
				<p class="njmNametit1">
					<a>{$com['csName']}</a>
				</p>
				<span>
					{$com['cname']}
					&nbsp;<!--{if $com['licenceCheck']>0}-->
					<img title="企业认证" src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_10.png" width="15" height="18" />
					<!--{else}-->
					<img src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_100.png" width="15" height="18" />
					<!--{/if}-->
				</span>
				<!--{if $com['comStr']}-->
				<p class="njmNametit2">
					<img style="margin-right:8px;" src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_58.png" width="11" height="10" />
					{$com['comStr']}
					<img style="margin-left:8px;" src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_59.png" width="11" height="10" />
				</p>
				<!--{/if}-->
				<!--
				<ul class="newtopLit" style="width:570px;">
					<li>五险</li>
					<li>带薪年假</li>
					<li>年底双薪</li>
					<li>年度旅游</li>
				</ul>
				-->
				<!--{if $isOwn}-->
				<div class="dressUp" id="dressUp">
					<img src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newJob_78.png" width="171" height="40" />
					<a id="designBtn" href="javascript:"></a>
				</div>
				<div class="clear"></div>
				<!--{/if}-->
			</div>

		</div>
		<!--{if !$isOwn}-->
		<div class="njmNameFcs">
			<div class="nFcswin" style='display:none'>
				<span>关注成功</span>
				<img src="http://cdn.{ROOT_DOMAIN}/img/job/newjob/newjob_65.png" width="8" height="26" />
			</div>
			<!------关注成功用awareBtn------>
			<!--{if $isFan}-->
				<a  id='liCance' href="javascript:;" class="awareBtn att" v='cancel'>已关注</a>
			<!--{else}-->
				<a  id='liCance' href="javascript:;" class="awareBtn att" v='cancel' style="display:none">已关注</a>
				<a id='liAdd' href="javascript:;" class="njmNameBtn att" v='add'>加关注</a>
			<!--{/if}-->
		</div>
		<!--{/if}-->


		<div class="imgEwm" id="imgEwm"></div>
		<p class="shareTitle">请用微信扫描分享</p>
		<div class="clear"></div>
	</div>

	<script type="text/javascript">
		jpjs.use('@confirmBox, @imageEditor, @jobFlexSlider', function(m){
		var $ = m['jpjob.jobFlexSlider'],
			Dialog = m['widge.overlay.jpDialog'],
			ConfirmBox = m['widge.overlay.confirmBox'],
			imageEditor = m['widge.imageEditor'],
			imgLoader = new m['tools.imgLoader'](),
			util = m['base.util'],
			curIndex = 0,
			loadImgs = {};

		/*
		*/
		var flexslider = $('.flexslider2'),
			sliderList = flexslider.find('li');

		flexslider.flexslider({
			animation: "slide",
			directionNav:false,
			pauseOnAction: false,
			pauseOnHover: true,
			move: 1,
			after: function(slider){
				curIndex = slider.currentSlide;
				loadBanner(curIndex);
			}
		});
		loadBanner();
		function loadBanner(index){
			index || (index = curIndex);
			if(loadImgs[index]) return;
			bannerImgs && bannerImgs[index] && imgLoader.load(bannerImgs[index], {imgIndex: index});
		}
		imgLoader.on('load', function(e){
			loadImgs[e.imgIndex || 0] = true;
			sliderList.eq(e.imgIndex || 0).css('background', 'none').find('img').attr('src', e.src);
		});

		var imageCaches = {$imageCaches},
			imageCachesClone = imageCaches.concat(),
			delImageCaches = [],
			fontSize = 18,
			pWidth = 70,
			isRepeated = false,
			imageCacheSize = 4,
			uploadHTML = [
				'<div id="newJobCustum" class="newJobCustum">',
				'<label id="fileBtn" for="Filedata">选择图片</label>',
				'<p>支持jpg、png图片文件，且文件小于2MB</p>',
				'<p>请选择尺寸大于1000*300px的图片</p>',
				'</div>',
				'<div id="dropImageContainer" style="display:none">',
				'<div id="dropImage" class="dropImage">',
				'<div id="dragDiv">',
				'<div id="rRightDown"></div>',
				'<div id="rLeftDown"></div>',
				'<div id="rRightUp"></div>',
				'<div id="rLeftUp"></div>',
				'<div id="rRight"></div>',
				'<div id="rLeft"></div>',
				'<div id="rUp"></div>',
				'<div id="rDown"></div></div></div>',
				'<div class="popJobbd"><a href="javascript:" class="newPopQuit">取 消</a><a id="newPopSave" href="javascript:" class="newPopSave">保 存</a></div>',
				'</div>'
			].join(''),
			designBtnNames = [
				'.iduatopBtnF',
				'.iduatopBtnB',
				'.swap',
				'.del',
				'.newPopQuit',
				'.newPopSave'
			];

		var designDialog = new Dialog({
				close: 'x',
				idName: 'ui_company_dialog',
				title: '个性化装扮',
				width:700,
				content: '/company/companyTemplate.html',
				isAjax: true
			}),
			uploadDialog = new Dialog({
				close: 'x',
				idName: 'ui_company_dialog',
				title: '添加自定义图片',
				width: 700,
				content: uploadHTML
			}),
			selectDesginDialog = new Dialog({
				close: 'x',
				idName: 'ui_company_dialog',
				title: '选择模板图片',
				width: 707,
				content: '/company/companyTemplate.html?act=list',
				isAjax: true
			}),
			imgEditor, dropImageContainer, uploadPanel;

			$('#designBtn').on('click', function(){
				designDialog.show();
			});
			designDialog.on('loadComplete noRequest', util.bind(designDialogEvent, designDialog)).after('hide', function(){
			this.get('element').off('click');
			});

		function designDialogEvent(){
			this.get('element').on('click', designBtnNames.join(','), function(e){
				var target = $(e.currentTarget);
				if(target.hasClass(normailzeClass(designBtnNames[0]))){
					if(isImageSize(imageCaches)){
						return;
					}
					designDialog.hide(false);
					uploadDialog.show();
				} else if(target.hasClass(normailzeClass(designBtnNames[1]))){
					if(isImageSize(imageCaches)){
						return;
					}
					designDialog.hide(false);
					selectDesginDialog.show(false);
				} else if(target.hasClass(normailzeClass(designBtnNames[2]))){
					var li = target.closest('li'),
						index = li.index(),
						minIndex, prevLi;

					if(index) {
						if(repeated()){
							return;
						}
						isRepeated = true;
						minIndex = index - 1;
						prevLi = li.prev();

						var tempCache = imageCaches[minIndex];

						$.ajax({
							url: '/api/web/company.api',
							data: {
								act:'templateOrder',
								this_image_id: li.attr('img_id'),
								this_order_no: index + 1,
								prev_image_id: prevLi.attr('img_id'),
								prev_order_no: minIndex + 1
							},
							success: function(e){
								e = util.json(e);
								isRepeated = false;
								if(e.status){
									designDialog.query('.iduaTionImgList').html(e.msg);
									imageCaches[minIndex] = imageCaches[index];
									imageCaches[index] = tempCache;
								} else {
									ConfirmBox.timeBomb(e.msg, {
										name : "fail",
										timeout : 1000,
										width: fontSize * e.msg.length + pWidth
									});
								}
							}
						});
					}

				} else if(target.hasClass(normailzeClass(designBtnNames[3]))){
					var li = target.closest('li'),
						index = li.index();

					if(repeated()){
						return;
					}
					isRepeated = true;
					$.ajax({
						url: '/api/web/company.api',
						type:'post',
						data: {
							act:'delTemplate',
							imageid: li.attr('img_id'),
							image_type: li.attr('data_type')
						},
						success: function(e){
							e = util.json(e);
							isRepeated = false;
							if(e.status){
								designDialog.query('.iduaTionImgList').html(e.msg);
								imageCaches.splice(index, 1);
								for(var i=index, len=imageCaches.length; i< len; i++){
									imageCaches[i].order -= 1;
								}
							} else {
								ConfirmBox.timeBomb(e.msg, {
									name : "fail",
									timeout : 1000,
									width: fontSize * e.msg.length + pWidth
								});
							}
						}
					});
				} else if(target.hasClass(normailzeClass(designBtnNames[4]))){
					designDialog.hide();
				} else {
					var msg = '正在保存中'
					ConfirmBox.timeBomb('正在保存中', {
						name : "success",
						timeout : 1000,
						width: fontSize * msg.length + pWidth
					}).after('hide', function(){
						designDialog.hide();
					});
					window.location.reload();
				}
			});
		}
		function isImageSize(arr){
			if(arr && (arr.length >= imageCacheSize)){
				var msg = '最多可设置4张封面图'
				ConfirmBox.timeBomb(msg, {
					name : 'fail',
					timeout : 1000,
					width: fontSize * msg.length + pWidth
				})
				return true;
			}
			return false;
		}
		function repeated(){
			if(isRepeated){
				var msg = "正在操作中";
				ConfirmBox.timeBomb(msg, {
					name : "fail",
					timeout : 1000,
					width: fontSize * msg.length + pWidth
				});
				return true;
			}
			return false;
		}
		function normailzeClass(name){
			return name.replace('.', '');
		}
		uploadDialog.after('show',function(){

			if(!imgEditor){
				dropImageContainer = this.query('#dropImageContainer');
				uploadPanel = this.query('#newJobCustum');

				var dropImage = this.query('#dropImage'),
					uploadingDialog;

				imgEditor = new imageEditor({
					imageCroperConfig: {
						element: dropImage,//目标
						handle: '#dragDiv',
						color: '#f1f1f1',
						width: dropImage.width(),
						height: dropImage.height()
					},
					fileUploaderConfig: {
						imageURL: 'http://pic.{ROOT_DOMAIN}/companyTemplate/'
					},
					trigger: this.query('#newPopSave')
				});

				imgEditor.on('startUpload', function(e){
					var msg = "正在上传...";
					uploadingDialog = ConfirmBox.timeBomb(msg, {
						name : "warning",
						timeout : 100000,
						width: fontSize * msg.length + pWidth
					});
				}).on('progresed', function(e){
					this._imgFileName = e.data.name;
					this._imgType = e.data.thumb_type;
					this._imgRatio = e.data.thumb_ratio;
					this.loadImage(e.url);
					uploadingDialog && uploadingDialog.hide();
				}).on('progressError', function(e){
					ConfirmBox.timeBomb(e.data.errorMsg, {
						name : "fail",
						timeout : 1000,
						width: fontSize * e.data.errorMsg.length + pWidth
					});
				}).on('save', function(e){
					var self = this;
					if(repeated()){
						return;
					}
					isRepeated = true;
					$.ajax({
						url: '/api/web/company.api?act=saveComImage',
						data: {
							cropX: e.cropX,
							cropY: e.cropY,
							cropH: e.cropH,
							cropW: e.cropW,
							cropPH: e.cropPH,
							cropPW: e.cropPW,
							url: e.url,
							name: this._imgFileName,
							thumb_type: this._imgType,
							thumb_ratio: this._imgRatio
						},
						success: function(e){
							e = util.json(e);
							isRepeated = false;
							if(e.status){
								designDialog.query('#iduaTionImgList').html(e.data);
								imageCaches.push({
									name: e.name,
									isUpload: 1,
									index: imageCaches.length,
									order: imageCaches.length + 1
								});
								uploadDialog.hide();
								delete self._imgFileName;
								delete self._imgType;
								delete self._imgRatio;
							}
						}
					});
				});
				dropImageContainer.find('.newPopQuit').on('click', function(e){
					uploadDialog.hide();
				});

				imgEditor.imageCroper.on('loadSuccess', function(){
					uploadPanel.hide();
					dropImageContainer.show();
				}).on('loadError', function(){
					delete this._imgFileName;
					delete this._imgType;
					delete this._imgRatio;
					uploadPanel.show();
					dropImageContainer.hide();
					var msg = '加载图片失败';
					ConfirmBox.timeBomb(msg, {
						name : "fail",
						timeout : 1000,
						width: fontSize * msg.length + pWidth
					});
				});
			}
		});
		uploadDialog.after('hide', function(){
			uploadPanel.show();
			dropImageContainer.hide();
			imgEditor && imgEditor.destory();
			imgEditor = null;
			designDialog.show(false);
		});

		selectDesginDialog.on('loadComplete noRequest', util.bind(selectDialogEvent, selectDesginDialog)).
		after('hide', function(){
			this.get('element').off('click');
			this.query('.newPopSave').off('click');
			this.query('.newPopQuit').off('click');
		});

		var selectTemplateNames = [
			'.iduaTemplate a',
			'.newpopPage a'
		];
		function selectDialogEvent(){
			var imageList = this.query(selectTemplateNames[0]),
				pageList = this.query(selectTemplateNames[1]),
				container = this.query('#iduaPageContainer'),
				self = this;

			imageCachesClone = imageCaches.concat();
			renderPage.call(this);
			this.get('element').on('click', selectTemplateNames.join(','), function(e){
				var target = $(e.currentTarget),
					type = target.attr('data-type');

				switch(type){
					case 'image':
						if(!target.hasClass('current')){
							if(isImageSize(imageCachesClone)){
								return;
							}
							target.addClass('current');
							imageCachesClone.push({
								name: target.attr('data-name'),
								isUpload: 0,
								id: target.attr('data-id'),
								index: imageList.index(target),
								order: imageCaches.length + 1
							});
						} else {
							target.removeClass('current');
							imageCachesClone = util.array.filter(imageCachesClone, function(val){
								if(val.name !== target.attr('data-name')){
									return true;
								} else {
									delImageCaches.push(val);
									return false;
								}
								return val.name !== target.attr('data-name');
							});
						}
						break;
					case 'page':
						$.ajax({
							url: target.attr('data-url'),
							success: function(html){
								container.html(html);
								imageList = self.query(selectTemplateNames[0]);
								renderPage.call(self);
							}
						});
						break;
				}
			});
			this.query('.newPopSave').off('click').on('click', function(){
				if(repeated()){
					return;
				}
				isRepeated = true;
				$.ajax({
					url:'/api/web/company.api',
					data: {
						act:'companyTemplate',
						data: imageCachesClone,
						delData: delImageCaches
					},
					type: 'post',
					success: function(e){
						e = util.json(e);
						if(e.status){
							$.ajax({
								url: '/company/companyTemplate.html?is_show=1',
								success: function(html){
									isRepeated = false;
									imageCaches = imageCachesClone.concat();
									self.hide();
									designDialog.show().query('#iduaTionImgList').html(html);
								}
							});
						}
					}
				});
			});
			this.query('.newPopQuit').on('click', function(){
				self.hide(false);
				designDialog.show(false);
			});
			this.on('closeX', function(){
				this.setReload(false);
				designDialog.show(false);
			});
		}

		function renderPage(){
			var list = this.query(selectTemplateNames[0]),
				target;

			list.removeClass('current');

			$.each(imageCachesClone, function(index, val){
				if(val.isUpload || !val.id){
					return;
				}
				var orderIndex = val.index;
				target = orderIndex != undefined ? list.eq(orderIndex) : list;
				target.each(function(){
					if($(this).attr('data-id') == val.id){
						orderIndex != undefined && (imageCachesClone[index].index = list.index($(this)));
						$(this).addClass('current');
						return false;
					}
				});
			});
		}

		});
	</script>

	<div class="nJobMainBg ">
		<div class="nJobMainCont">
			<div class="main" style="width: 100%;">
				<div class="main_left">
					<div class="newTytit shadow">
						<h2 style="margin-bottom:5px;">公司简介</h2>
						<div class="njmTit" id="info">{$com['comInfo']}</div>


					</div>

					<!--详细地址 去掉-->
					<!--<div class="newTytit shadow"  id="comAddress">
						<h2 style="margin-bottom:5px;">详细地址</h2>
						<p class="njmTit2">
							<span>{$com['comAddress']}</span>
							&lt;!&ndash; <a target='_blank' href="http://api.map.baidu.com/geocoder?address={$com['comAddress']}&output=html">查看地图</a> &ndash;&gt;
							<a href="#comMap">查看地图</a>
						</p>
					</div>-->


					<!--{if $resPic}-->
					<div class="newTytit shadow">
						<h2 style="margin-bottom:5px;" class="newTyClock">
							公司相册
						</h2>
						<!--cny_add 建议尺寸626*260-->
						<script type="text/javascript">var phoneImgs = [];</script>
						<style type="text/css">
							.njmBanner,.infopicBg,.infopic{
								width: 640px!important;
								height: 290px!important;
								background: none!important;
							}
							.piclist li img
							{
								max-width: 640px!important;
								height: auto!important;
								vertical-align: middle;
							}
							.pic_prev,.pic_next {
								top:113px;
								left:10px;
								width: 30px;
								height: 64px;
								position:absolute;
								background:url(http://cdn.597.com/img/common/newprev.png);
							}
							.pic_next {
								left:600px;
								background: url(http://cdn.597.com/img/common/newprev.png) no-repeat -30px 0;
							}
							.pic_prev:hover {
								background: url(http://cdn.597.com/img/common/newprev.png) no-repeat  -60px 0;
							}

							.pic_next:hover {
								background: url(http://cdn.597.com/img/common/newprev.png) no-repeat  -90px 0;
							}
							.picList{width:1080px;height: 290px!important;}
							.piclist li{width:640px!important;height: 290px!important;text-align: center;line-height: 290px;}
							.piclist li a{width:640px!important;height: 290px!important;text-align: center;line-height: 290px;display: block;}
							#pp_full_res img{ display:block; margin:0 auto;}
							.pp_hoverContainer{ top:30px;}
							div.pp_default .pp_content_container .pp_details{ margin:0;}
							div.pp_default .pp_close{ margin:0px 0px 0 0;}
							div.pp_default .pp_nav .currentTextHolder{ left:0px;}
							.pp_gallery{ margin-top:40px;}
							div.pp_default .pp_gallery ul li a{ border:1px solid #fff;}
							div.pp_default .pp_gallery ul li a:hover,div.pp_default .pp_gallery ul li.selected a{ border:1px solid #0f0;}
							#pp_full_res{ clear:both;}

							.pp_pic_holder.pp_default{ cursor:pointer;}
							div.ppt,div.pp_default .pp_top,div.pp_default .pp_bottom,div.pp_default .pp_expand{ display:none;}
							div.pp_default .pp_content_container .pp_left,div.pp_default .pp_content_container .pp_right{ background:none;}
							.pp_pic_holder.pp_default,div.pp_default .pp_content, div.light_rounded .pp_content{ background:none;}
							div.pp_default .pp_nav .currentTextHolder{ color:#fff; padding-left:0px; left:inherit; right:0px;}
							.pp_nav{ margin-top:0px; margin-right:30px;}
							div.pp_default .pp_close{ position:fixed; top:150px; right:50%; margin-right:-500px;}

						</style>
						<div class="njmBanner">
							<!------图片滚动开始-------->
							<div class="infopicBg">
								<div class="infopic">
									<div class="picbox">
										<ul class="gallery piclist">
											<!--{loop $resPic $l}-->
											<li style="background:url(http://cdn.{ROOT_DOMAIN}/img/common/loadBox.gif) no-repeat center center">
												<a href="http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}" rel="prettyPhoto[]">
													<img />
												</a>
												<script type="text/javascript">
													phoneImgs.push("http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}");
												</script>
											</li>
											<!--{/loop}-->
										</ul>
									</div>
								</div>
								<!--<div class="newMainpicBg">

                                </div>-->
								<div class="pic_prev"></div>
								<div class="pic_next"></div>
							</div>
							<style type="text/css">
								.picList{width:1080px}
								.piclist li{width:270px;}
							</style>
							<script type="text/javascript">
								jpjs.use('@jobPrettyPhoto, @imgLoader', function(m){
									var $ = m['jpjob.jobPrettyPhoto'],
											imgLoader = new m['tools.imgLoader'](),
											m1, r, s,
											picList = $('.piclist'),
											picListItem = picList.children('li'),
											lw = picListItem.width(),
											liw = lw * picListItem.length,
											curIndex = 0,
											imgs = [],
											loadImgs = {},
											isAnimated = false;

									picList.width( liw + 'px' );

									loadPhone();
									function loadPhone(index){
										index || (index = curIndex);
										if(loadImgs[index]) return;
										phoneImgs && phoneImgs[index] && imgLoader.load(phoneImgs[index], {imgIndex: index});
									}
									imgLoader.on('load', function(e){
										loadImgs[e.imgIndex || 0] = true;
										picListItem.eq(e.imgIndex || 0).css('background', 'none').find('img').attr('src', e.src);
									});

									$('.pic_next').click(function(){
										if(isAnimated || curIndex >= picListItem.length - 1) return;
										isAnimated = true;
										/*
										 if(picList.is(':animated')){
										 picList.stop(true,true);
										 }*/ /* 避免点击事件重复 */

										ml = parseInt(picList.css('left'));
										r = liw - (lw - ml);  /* 700为外部区块.infopic的宽度，15为li之间的距离，即.piclist li的margin-right的值 */
										if(r < lw){
											s = r - 0;
										} else {
											s = lw;
										}
										if(curIndex < picListItem.length - 1){
											curIndex++;
										}
										picList.stop(true, false).animate({left: ml - s + 'px'}, 'slow', function(){
											isAnimated = false;
											loadPhone(curIndex);
										});
									});

									$('.pic_prev').click(function(){
										if(isAnimated || curIndex < 0) return;
										isAnimated = true;
										/*
										 if(picList.is(':animated')){
										 picList.stop(true,true);
										 }*/ /* 避免点击事件重复 */

										ml = parseInt(picList.css('left'));
										if(ml > -lw){
											s = ml;
										} else {
											curIndex--;
											s = -lw;
										}
										picList.stop(true, false).animate({left: ml - s + 'px'}, 'slow', function(){
											isAnimated = false;
											loadPhone(curIndex);
										});
									});

									$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
										animation_speed:'fast',
										slideshow: 10000,
										hideflash: true,
										initcallback: function(){
											$.each(phoneImgs, function(index){
												loadPhone(index);
											});
										}
									});
								});
							</script>
						</div>
						<!--<div class="njmJoinUs">
                            <div class="comPhotos">
                                <ul id="focus" style="height: 290px;">
                                    &lt;!&ndash;{loop $resPic $k $l}&ndash;&gt;
                                    <li   style="&lt;!&ndash;{if $k>0}&ndash;&gt;display:none;&lt;!&ndash;{/if}&ndash;&gt;">
                                        <a href="http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}" rel="prettyPhoto[]">
                                            <img src="http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}" alt="" />
                                        </a>
                                    </li>
                                    &lt;!&ndash;{/loop}&ndash;&gt;
                                </ul>
                                <p class="slidePrev"></p>
                                <p class="slideNext"></p>
                            </div>
                        </div>-->
					</div>
					<!--{/if}-->



					<!--{if $jobCount}-->
					<div class="newTytit shadow">
						<h2 style="margin-bottom:5px;" class="newTyClock">
							招聘职位
							<span>（共有{$jobCount}个职位正在招聘中）</span>
						</h2>
						<div class="company-job box mt20">

							<div id="company-job-tab">
								<!--自动填充分类列表-->
							</div>
							<!--alljob用于存放所有的列表数据-->
							<div class="alljob">
								<ul>
								<!--全部职位-->
									<!--{loop $jobList $l}-->
									<li rel="{$l['cuid']}" class="job_li"><a style="padding:10px;" href="/job-{$l['_jid']}.html" target="_blank" title="{$l['jname']}">
										<h6 >

											<span class="job_box ellipsis">
											<!--{if $l['urgency']==1}-->
												<span class="ji" >
													<!--<img src="http://cdn.{ROOT_DOMAIN}/www/images/rocket.png" alt=""/>-->
													急
												</span>
												<!--{/if}-->
												{$l['jname']}
											</span>

											<small class="ml10 grey" class="job_time">{$l['freshTime']}</small>
										</h6>
										<p class="ellipsis"><span class="red">{$l['jobSalary']}</span>&nbsp;/&nbsp;{$l['jobDegree']}&nbsp;/&nbsp;{$l['jobWorkYear']}</p></a></li>
									<!--{/loop}-->
								</ul>
							</div>
						</div>
					</div>
					<!--{/if}-->

					<div class="newTytit shadow" id="comMap">
						<h2 style="margin-bottom:5px;">公司地图</h2>
						<p class="njmTit2">
							<span>{$com['comAddress']}</span>
							<!--{if $com['comLatitude']&&$com['comLongitude']}-->
							<!-- <a href="javascript:;" style="color:red;" id="changeBusLine" onclick="changeBusLine(1)">（公交路线）</a> -->
							<!--{/if}-->
							<!--<a target='_blank' href="http://api.map.baidu.com/geocoder?address={$com['comAddress']}&output=html">查看地图</a>-->
						<div class="bd" id="mapinfo">
							<div id="dtjt_wrap" class="mb15" >
								<div id="dtjt_title">
									<ul>
										<li id="baidu_tab" class="active">地图</li>
										<li id="soso_tab">街景</li>
									</ul>
								</div>
								<div id="baidu_map" class="map active"  >
									<div id="dtjt_info"><!--0326s-->
										<div id='baidu_fullscreen'></div>
										<!--03263-->
										<div id="map" style="width:400px;"></div>
										<div id="dtjt_tab1" class="tabright" style="width: 259px;">交通路线&生活信息</div>
										<div id="map_tab_jtlx" class="map_tab map_tab_sel" style="width: 263px;border-top: 1px solid #E6E6E6"></div>
									</div>

									<div id="map_route">
										起点 <input id="map_route_from" type="text" style="width:116px;" />
										终点 <input id="map_route_to" type="text" style="width:116px;" readonly />
						  			<span class="route_type">
						   				<input id="map_route_bus" name="map_route_type" type="radio" value="bus" checked />
						   					<label class="label" for="map_route_bus">公共交通</label>
						   			</span>
						  			<span class="route_type">
						   				<input id="map_route_car" name="map_route_type" type="radio" value="car" />
						   				<label class="label" for="map_route_car">自驾车</label>
						   			</span>
										<input id="map_route_search" type="button" value="" />
									</div>
								</div>
								<div id="soso_map" class="map">
									<div id="static_map_background">
										<div id="static_map"></div>
										<div id="map_drag"></div>
									</div>
								</div>
							</div>
							<div id="map_search_result" ></div>
						</div>
						</p>
					</div>
					<div id="announcement" class="shadow">
						<div class="grayline" id="announcementbody">
							<ul>
								<li style="font-weight: bold; font-size: 14px; color: rgb(102, 102, 102);">地区人才网招聘</li>
								<li class="st_one"><a target="_blank" href="http://bj.{ROOT_DOMAIN}">北京招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://xm.{ROOT_DOMAIN}">厦门招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://qz.{ROOT_DOMAIN}">泉州招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://np.{ROOT_DOMAIN}">南平招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://fz.{ROOT_DOMAIN}">福州招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://zz.{ROOT_DOMAIN}">漳州招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://pt.{ROOT_DOMAIN}">莆田招聘</a></li>
							</ul>
							<ul>
								<li style="font-weight: bold; font-size: 14px; color: rgb(102, 102, 102);">地区人才网招聘</li>
								<li class="st_one"><a target="_blank" href="http://longyan.{ROOT_DOMAIN}">龙岩招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://xiangyang.{ROOT_DOMAIN}">襄阳招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://sm.{ROOT_DOMAIN}">三明招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://nd.{ROOT_DOMAIN}">宁德招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://www.jh597.com">金华招聘</a></li>
								<li class="st_one"><a target="_blank" href="http://www.yw597.com">义乌招聘</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="main_right" style="width: 260px;float: right;">
					<ul class="nrtLit nrtLitMain shadow">
						<li>
							<span>行业</span><em title="{$industryList}">{$industryList}</em>
						</li>
						<li>
							<span>性质</span><em>{$com['comType']}</em>
						</li>
						<li>
							<span>规模</span><em>{$com['comWorkers']}</em>
						</li>
						<!--{if $com[comUrl]}-->
						<li>
							<span>网址</span><a rel="nofollow" href="http://{$com[comUrl]}" target="_blank">{$com[comSite]}</a>
						</li>
						<!--{/if}-->
					</ul>
					<!--{if $com['showPhone']==1}-->
					<div class="nrtLit nrtLitMain shadow newTytit" style="padding-top:20px;padding-bottom:10px;">
						<h2 style="margin-bottom:16px;" class="newTyClock">
							联系我们
						</h2>
						<ul >
							<li>
								<span style="width: 60px;text-align: left;">联系电话</span><em class="ellipsis red" style="width: 150px;" title="{$com[comPhone]}">{$com[comPhone]}</em>
							</li>
							<li>
								<span style="text-align: left;">联系人</span><em class="ellipsis"  title="{$com[comUser]}">{$com[comUser]}</em>
							</li>
						</ul>
					</div>
					<!--{/if}-->
					<a class="right_adv" target="_blank" href="/ke/category.html"><img  style="" src="http://cdn.{ROOT_DOMAIN}/www/images/yun_class.png" alt=""/></a>
					<a class="right_adv" target="_blank" href="/download/app/"><img  style="" src="http://cdn.{ROOT_DOMAIN}/www/images/app_load_a.png" alt=""/></a>
					<!--
                    <div class="newMessage newMessagex">
                        <h2>给我留言</h2>
                        <textarea rows="" cols="" name="msgContent" id="msg" data-tip="请输入您对该职位的疑问。比如所在地、年薪、福利等等，我会及时给您回复！期待与您合作。">请输入您对该职位的疑问。比如所在地、年薪、福利等等，我会及时给您回复！期待与您合作。</textarea>
                        <div class="newLeaveB">
                            <span>0</span>
                            <em>/200</em>

                            <a href="javascript:void(0)" id="submitMessage" data-cid="290799">发 送</a>
                        </div>
                    </div>
                    -->

					<!--<script type="text/javascript">var phoneImgs = [];</script>
                    &lt;!&ndash;{if $resPic}&ndash;&gt;
                    <style type="text/css">
                        .picList{width:1080px;}
                        .piclist li{width:270px;}
                        #pp_full_res img{ display:block; margin:0 auto;}
                        .pp_hoverContainer{ top:30px;}
                        div.pp_default .pp_content_container .pp_details{ margin:0;}
                        div.pp_default .pp_close{ margin:0px 0px 0 0;}
                        div.pp_default .pp_nav .currentTextHolder{ left:0px;}
                        .pp_gallery{ margin-top:40px;}
                        div.pp_default .pp_gallery ul li a{ border:1px solid #fff;}
                        div.pp_default .pp_gallery ul li a:hover,div.pp_default .pp_gallery ul li.selected a{ border:1px solid #0f0;}
                        #pp_full_res{ clear:both;}

                        .pp_pic_holder.pp_default{ cursor:pointer;}
                        div.ppt,div.pp_default .pp_top,div.pp_default .pp_bottom,div.pp_default .pp_expand{ display:none;}
                        div.pp_default .pp_content_container .pp_left,div.pp_default .pp_content_container .pp_right{ background:none;}
                        .pp_pic_holder.pp_default,div.pp_default .pp_content, div.light_rounded .pp_content{ background:none;}
                        div.pp_default .pp_nav .currentTextHolder{ color:#fff; padding-left:0px; left:inherit; right:0px;}
                        .pp_nav{ margin-top:0px; margin-right:30px;}
                        div.pp_default .pp_close{ position:fixed; top:150px; right:50%; margin-right:-500px;}

                    </style>
                    <div class="njmBanner">
                        &lt;!&ndash;&#45;&#45;&#45;&#45;图片滚动开始&#45;&#45;&#45;&#45;&#45;&#45;&ndash;&gt;
                        <div class="infopicBg">
                            <div class="infopic">
                                <div class="picbox">
                                    <ul class="gallery piclist">
                                        &lt;!&ndash;{loop $resPic $l}&ndash;&gt;
                                        <li style="background:url(http://cdn.{ROOT_DOMAIN}/img/common/loadBox.gif) no-repeat center center">
                                            <a href="http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}" rel="prettyPhoto[]">
                                                <img />
                                            </a>
                                            <script type="text/javascript">
                                                phoneImgs.push("http://pic.{ROOT_DOMAIN}/com/{$l[picPath]}");
                                            </script>
                                        </li>
                                        &lt;!&ndash;{/loop}&ndash;&gt;
                                    </ul>
                                </div>
                            </div>
                            <div class="newMainpicBg">
                                <div class="pic_prev"></div>
                                <div class="pic_next"></div>
                            </div>
                        </div>
                        &lt;!&ndash;{/if}&ndash;&gt;
                        <style type="text/css">
                            .picList{width:1080px}
                            .piclist li{width:270px;}
                        </style>
                        <script type="text/javascript">
                            jpjs.use('@jobPrettyPhoto, @imgLoader', function(m){
                                var $ = m['jpjob.jobPrettyPhoto'],
                                        imgLoader = new m['tools.imgLoader'](),
                                        m1, r, s,
                                        picList = $('.piclist'),
                                        picListItem = picList.children('li'),
                                        lw = picListItem.width(),
                                        liw = lw * picListItem.length,
                                        curIndex = 0,
                                        imgs = [],
                                        loadImgs = {},
                                        isAnimated = false;

                                picList.width( liw + 'px' );

                                loadPhone();
                                function loadPhone(index){
                                    index || (index = curIndex);
                                    if(loadImgs[index]) return;
                                    phoneImgs && phoneImgs[index] && imgLoader.load(phoneImgs[index], {imgIndex: index});
                                }
                                imgLoader.on('load', function(e){
                                    loadImgs[e.imgIndex || 0] = true;
                                    picListItem.eq(e.imgIndex || 0).css('background', 'none').find('img').attr('src', e.src);
                                });

                                $('.pic_next').click(function(){
                                    if(isAnimated || curIndex >= picListItem.length - 1) return;
                                    isAnimated = true;
                                    /*
                                     if(picList.is(':animated')){
                                     picList.stop(true,true);
                                     }*/ /* 避免点击事件重复 */

                                    ml = parseInt(picList.css('left'));
                                    r = liw - (lw - ml);  /* 700为外部区块.infopic的宽度，15为li之间的距离，即.piclist li的margin-right的值 */
                                    if(r < lw){
                                        s = r - 0;
                                    } else {
                                        s = lw;
                                    }
                                    if(curIndex < picListItem.length - 1){
                                        curIndex++;
                                    }
                                    picList.stop(true, false).animate({left: ml - s + 'px'}, 'slow', function(){
                                        isAnimated = false;
                                        loadPhone(curIndex);
                                    });
                                });

                                $('.pic_prev').click(function(){
                                    if(isAnimated || curIndex < 0) return;
                                    isAnimated = true;
                                    /*
                                     if(picList.is(':animated')){
                                     picList.stop(true,true);
                                     }*/ /* 避免点击事件重复 */

                                    ml = parseInt(picList.css('left'));
                                    if(ml > -lw){
                                        s = ml;
                                    } else {
                                        curIndex&#45;&#45;;
                                        s = -lw;
                                    }
                                    picList.stop(true, false).animate({left: ml - s + 'px'}, 'slow', function(){
                                        isAnimated = false;
                                        loadPhone(curIndex);
                                    });
                                });

                                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                                    animation_speed:'fast',
                                    slideshow: 10000,
                                    hideflash: true,
                                    initcallback: function(){
                                        $.each(phoneImgs, function(index){
                                            loadPhone(index);
                                        });
                                    }
                                });
                            });
                        </script>
                    </div>-->
				</div>
			</div>



	</div>
    </div>
</div>

<div style="clear:both"></div>
<div id='baidu_exitfullscreen' style="display:none;"></div>
<div id="infoStatus">
	<!-- <a href="javascript:void(0);">公司信息</a> -->
	<a href="javascript:void(0);" class="cu">公司简介</a>
	<!--{if $resPic}-->
	<a href="javascript:void(0);">公司相册</a>
	<!--{/if}-->
	<a href="javascript:void(0);">招聘职位</a>
	<a href="javascript:void(0);" style="border:none;">地图位置</a>
</div>
<script type="text/javascript" src="http://cdn.{ROOT_DOMAIN}/js/baiduMap.js?v=1"></script>
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b&libraries=convertor"></script>
<!--<script src="http://api.map.soso.com/plugin/v2/PanoramaOverview/PanoramaOverview-min.js"></script>-->

<script src="http://cdn.{ROOT_DOMAIN}/js/ScrollText.js" language="javascript"></script>
<script>
  if(document.getElementById("announcementbody")){
    var scrollup = new ScrollText("announcementbody");
    scrollup.Amount = 1;
    scrollup.Delay = 20;
    scrollup.Start();
  }

  // 侧栏


function posInfoStatus(){
	$('#infoStatus').css({
		top : $('.njmName').offset().top,
		right : ($(window).width() - 1000) / 2 - $('#infoStatus').outerWidth() -1
	});
}
posInfoStatus();
$(window).resize(function(){
	posInfoStatus();
});
var newTytits = $('.newTytit').not('#comAddress,#linkList');
$('#infoStatus a').click(function(){
	var animTop = newTytits.eq($(this).index()).offset().top - 10;
	$('html,body').animate({scrollTop : animTop}, 400);
});

$(window).scroll(function(){
	newTytits.each(function(index, el) {
		if($(window).scrollTop() > $(this).offset().top - 140){
			$('#infoStatus a').eq(index).addClass('cu').siblings().removeClass('cu');
		}
	});
});
</script>
<!--{template footer}-->
<script>
jpjs.use('@checkLogin, @confirmBox', function(m){


	var $ = m['jquery'],
		checkLogin = m['product.checkLogin'],
		ConfrimBox = m['widge.overlay.confirmBox'],
		fontSize = 18,
		pWidth = 70;



	$("textarea").keyup(function(){
		var max = 200;
		var len = $(this).val().length;
		if(0 ==len){
			$(this).removeClass('textAreaChanged');
		}else{
			$(this).addClass('textAreaChanged');
		}
		if(max>=len){
			$(this).parents(".newMessage").find("span").text(len);
		}else{
			ConfrimBox.timeBomb("留言长度不能超过200字", {
				width : 250,
				name : 'warning'
			});
			$(this).parents(".newMessage").find("span").text(200);
			$(this).val($(this).val().substr(0,max));
		}
	});

	$("textarea").focus(function(){
		/* var islogin = checkLogin.isLogin('ajaxLoginCallback');
		checkLogin.dialog.resetSize(498);
		if(islogin){
			if(!$(this).hasClass('textAreaChanged')){
				$(this).val("");
				$(this).addClass('textAreaChanged');
			}
		} */

		if(!$(this).hasClass('textAreaChanged')){
			$(this).val("");
			$(this).addClass('textAreaChanged');
		}
	});

	$("textarea").blur(function(){
		if($(this).val().replace(/^\s*$/g,'')  == ''){
			$(this).val($(this).attr('data-tip'));
			$(this).removeClass('textAreaChanged');
		}
	});

	$(window).scroll(function(){
		if ($(document).scrollTop() > 120){
			$('#sus').find('a.backTop').css({'display':'inline-block'});
		}else{
			$('#sus').find('a.backTop').css({'display':'none'});
		}
	});
	$('#sus').find('a.backTop').click(function(){
		$('html,body').animate({ scrollTop: 0 });
	});

	$('#show_short_info').click(function(){
		$('#short_info').hide();
		$('#info').show();
	})

	$(document).ready(function(){
		var oldMsg = getCookie(window.location.href+"_msg");// alert(oldMsg);
		if(oldMsg != null){
			$("textarea").val(oldMsg).addClass("textAreaChanged");
			$(".newLeaveB span").html(oldMsg.length);
		}
	});

	//提交留言
	$('#submitMessage').click(function(){
		if($('textarea').val().replace(/^\s*$/g,'')  != '' && ($('textarea').hasClass('textAreaChanged'))){
			setCookie(window.location.href+"_msg",$('textarea').val());
		}
		var islogin = checkLogin.isLogin('ajaxLoginCallback');
		checkLogin.dialog.resetSize(498);
		if(islogin){
			var message = $('textarea').val();
			var url = "/company/ajaxSubmitMessage/";
			if(message.replace(/^\s*$/g,'')  == '' || !($('textarea').hasClass('textAreaChanged'))){
				ConfrimBox.timeBomb("留言内容不能为空！", {
					width : 240,
					name : 'warning'
				});
				return false;
			}else{
				$.post(url,{'company_id':$(this).attr('data-cid'),'content':message,'from':'12'},function(result){
					delCookie(window.location.href+"_msg");
					if((typeof result.status !='undefined') && parseInt(result.status)>0) {
						ConfrimBox.timeBomb(result.message, {
							width : (result.message.length)*32,
							name : 'success'
						});
						$("textarea").val($("textarea").attr('data-tip')).removeClass('textAreaChanged');
						$(".newLeaveB span").html("0");
					}else if(parseInt(result.status) == 0){
						ConfrimBox.timeBomb(result.message, {
							width : (result.message.length)*21,
							name : 'warning'
						});
						setTimeout(function(){window.location.href = result.url;},1000);
					}else if(parseInt(result.status) == -7){
						checkLogin.dialog.resetSize(498);
					}else {
						 ConfrimBox.timeBomb(result.message, {
							width : (result.message.length)*21,
							name : 'warning'
						});
					}
				},'json');
			}
		}
	});

	   function setCookie(name,value)
		{
			var exp = new Date();
			exp.setTime(exp.getTime() + 60*1000);
			document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
		}

		//读取cookies
		function getCookie(name)
		{
			var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");

			if(arr=document.cookie.match(reg))

				return unescape(arr[2]);
			else
				return null;
		}

		//删除cookies
		function delCookie(name)
		{
			var exp = new Date();
			exp.setTime(exp.getTime() - 1);
			var cval=getCookie(name);
			if(cval!=null)
				document.cookie= name + "="+cval+";expires="+exp.toGMTString();
		}
	//添加关注
	$('.att').click(function(){
		var cid="{$com['_cid']}";
		$.post('/api/web/person.api',{act:'fans_save',cid:cid},function(json){
			if(json.status==0){
				var islogin = checkLogin.isLogin('ajaxLoginCallback');
				checkLogin.dialog.resetSize(498);
			}
			if(json.status>0){
				$('#liAdd').hide();
				$('#liCance').show();
				$('.nFcswin span').html(json.msg);
				$('.nFcswin').show();
				return;
			}else{
				if(json && json.error){
					ConfirmBox.timeBomb(json.error, {
						name : "warning",
						width: fontSize * json.error.length + pWidth
					});
					return;
				}
			}
		},'json');
		return;
		var islogin = checkLogin.isLogin('ajaxLoginCallback');
				 checkLogin.dialog.resetSize(498);
		if(islogin){
			var company_flag ="enttw6lb1";
			var operate = $(this).attr('v');
			var data = {operate:operate,company_flag:company_flag};
			$.post('/company/attention/',data,function(json){
				if(json && json.error){
					ConfirmBox.timeBomb(json.error, {
						name : "warning",
						timeout : 1000,
						width: fontSize * json.error.length + pWidth
					});
					return;
				}
				if(operate == 'add'){
					$('#liAdd').hide();
					$('#liCance').show();
						$('.nFcswin span').html("关注成功");
						$('.nFcswin').show();
				} else {
					$('#liAdd').show();
					$('#liCance').hide();
					$('.nFcswin span').html("取消关注成功");
					$('.nFcswin').show();
				}
				ConfirmBox.timeBomb(json.info, {
					name : "success",
					timeout : 1000,
					width: fontSize * json.info.length + pWidth
				});
				return;
			},'json');
		}

	});
	//$.getJSON('/company/CompanyVisit/company_flag-enttw6lb1');

	//公交路线
	// $('#changeBusLine').click(function(){
	// 	checkLogin.dialog.setContent({
	// 			content: '/busLine.html?act=zb&lat='+{$com['comLatitude']}+'&long='+{$com['comLongitude']},
	// 			isOverflow: true
	// 		}).resetSize(800, 'auto').show().off('loadComplete').on('loadComplete', function(){
	// 			this.oneCloseEvent('#btnComplaint');
	// 		});
	// });
});

function ajaxLoginCallback() {
	window.location.href = window.location.href;
}
/*
	 $.setIndex("zindex");

	$('#ajaxlogin').click(function() {
			$.showModal('/www/ui/ajaxlogin.html?v=qaaa',{title:'您尚未登录'});
	});

var attention={
	init:function(){
		$('.att').click(function(){
			var islogin = ajaxCheckPersonLogin();
			if(islogin){
				var company_flag ="ent5y2wf5c";
				var operate = $(this).attr('v');
				var data = {operate:operate,company_flag:company_flag};
				$.post('/company/attention/',data,function(json){
					if(json&&json.error){
						$.message(json.error,{icon:'warning'});
						return;
					}
					console.log(operate);
					if(operate=='add'){
						$('#liAdd').hide();
						$('#liCance').show();
						$.anchorMsg(json.info);
					}else{
						$('#liAdd').show();
						$('#liCance').hide();
						$.anchorMsg(json.info);
					}
					//$('#attCount').text(json.attentioncount);
					return;
				},'json');
			}
		});
//		$('#map_address').click(function(){
//			var map_x = "107";
//			var map_y = "30";
//			var address ="北京东城区";
//			if(map_x=="" || map_y==""){
//				$('#map_address').attr('href','http://api.map.baidu.com/geocoder?address='+address+'&output=html');
//				}
//			else{
//				$('#map_address').attr('href','http://api.map.baidu.com/marker?location='+map_y+','+map_x+'&title=无敌、&content='+address+'&output=html&');
//				}
//		});

		$.getJSON('/company/CompanyVisit/company_flag-ent5y2wf5c');
	}
}
	attention.init();
*/
</script>
<!--{template skip/default/busLine}-->
<script type="text/javascript">
	//二维码
	var qrcode = new QRCode('imgEwm', {
			text: '{$mUrl}',
			width: 80,
			height: 80,
			colorDark : '#000000',
			colorLight : '#ffffff',
			correctLevel : QRCode.CorrectLevel.H
		}
	);
	/*公司介绍-更多按钮*/
	(function () {
		var nimTit=$('.njmTit');
		nimTit.originH=nimTit.height();
		if(nimTit.originH>288) {
			nimTit.css('height', 288);
			var more = $('<p class="title_more">查看更多&nbsp;<span>&gt;</span></p>');
			more.click(function () {
				var that=this;
				nimTit.animate({height:nimTit.originH},600, function () {
					$(that).animate({height:0,opacity:0},100);
				});
			}).appendTo(nimTit.parent());
		}

	})();
</script>

</body>

</html>