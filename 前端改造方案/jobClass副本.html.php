<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        a:focus{outline:none;}
        .clearfix {
            zoom: 1;
        }

        .clearfix:after {
            word-break: break-all;
            overflow: auto;
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        table {
            border-collapse: 0;
            border-spacing: 0;
            border-collapse: collapse;
        }

        .hbJobSortDialog .jobTopActionsPanel {
            margin-bottom: 10px;
        }

        .hbJobSortDialog .jobTopActionsLeft {
            float: left;
            width: 370px;
            line-height: 28px;
            font-size:14px;
        }

        .hbJobSortDialog .jobTopActionsPanel .jobTopSearchInput {
            float: left;
            width: 290px;
            height: 28px;
            border: 1px solid #ccc;
            margin-right: 10px;
            overflow: hidden;
            position: relative;
            font-size:14px;
        }

        .hbJobSortDialog .jobTopActionsPanel .jobTopSearchInput em {
            display: inline-block;
            float: right;
            font-size: 0;
            line-height: 0;
            width: 18px;
            height: 18px;
            background: url(http://cdn.{ROOT_DOMAIN}/img/v2/icons/pitch01.png) no-repeat -13px 0;
            margin: 5px 5px 0 0;
        }

        .hbJobSortDialog .jobTopActionsPanel input {
            height: 26px;
            line-height: 27px;
            *line-height: 23px;
            font-family: "微软雅黑";
            width: 260px;
            font-size: 14px;
            border: 0;
            backgroun: none;
            text-indent: 8px;
            *text-indent: 4px;
        }

        .hbJobSortDialog .jobTopActionsLeft em {
            color: #da261e;
        }

        .hbJobSortDialog .jobTopResult {
            float: right;
            width: 443px;
        }

        .hbJobSortDialog .jobTopResult span {
            display: inline-block;
            background: #ecf3ff;
            padding: 0 5px 0 10px;
            margin: 0 4px 4px;
            line-height: 28px;
            height: 28px;
            cursor: pointer;
            font-size:14px;
        }

        .hbJobSortDialog .jobTopResult span a {
            display: inline-block;
            margin-left: 5px;
            /*background: url(/img/v2/icons/pitch01.png) no-repeat left -35px;*/
            width: 12px;
            height: 12px;
            font-size: 12px;
            line-height: 12px;
            vertical-align: middle;
            *vertical-align: 1px;
            color: grey;
            text-decoration: none;
            font-family: "Microsoft YaHei" !important;
        }

        .hbJobSortDialog .jobContentBox_one {
            height: 482px;
        }

        .hbJobSortDialog .jobContentBox {
            border: 1px #ccc solid;
            height: 452px;
            overflow: hidden;
        }

        .hbJobSortDialog .jobContentBox .jobSortMenu {
            float: left;
            /*width: 190px;*/
            width: 22%;
            border-right: 1px #ccc solid;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .hbJobSortDialog .jobContentBox .jobSortMenu ul {
            padding: 1px;
        }

        .hbJobSortDialog .jobContentBox .jobSortMenu li {
            height: 30px;
            line-height: 30px;
            overflow: hidden;
            list-style: none;
        }

        .hbJobSortDialog .jobContentBox .jobSortMenu li.hover a {
            background: #dbe8ff;
        }

        .hbJobSortDialog .jobContentBox .jobSortMenu a {
            display: block;
            text-indent: 10px;
            color: #666;
            font-size:14px;
            text-decoration: none;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems {
            float: right;
            /*width: 620px;*/
            width: 77%;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems table {
            width: 100%;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems th, .hbJobSortDialog .jobContentBox .jobSortItems td {
            line-height: 25px;
            vertical-align: top;
            text-align: left;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems th {
            width: 113px;
            padding-left: 15px;
            padding-top: 7px;
            padding-bottom: 8px;
        }

        address, cite, dfn, em, var, caption, code, dfn, th {
            font-style: normal;
            font-weight: 400;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems th, .hbJobSortDialog .jobContentBox .jobSortItems td {
            line-height: 25px;
            text-align: left;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems td div {
            border-bottom: 1px dashed #ddd;
            word-wrap: break-word;
            padding-top: 7px;
            padding-bottom: 8px;
        }

        .hbJobSortDialog .jobContentBox .jobSortItems td a {
            display: inline-block;
            white-space: nowrap;
            word-wrap: break-word;
            margin: 0 7px;
            /*color: #333;*/
        }

        .hbJobSortDialog .jobSortItems a {
            text-decoration: none;
            color: #666;
            cursor: pointer;
            font-size:14px;
        }

        .hbJobSortDialog .jobSortItems a:hover {
            color: #da261e;
        }

        .jobSortItems .selectItem {
            color: red !important;
        }

        .jobSortItems tr.selectItemParent td a {
            color: #acacac !important;
            cursor: default;
        }

        .jobSortItems tr.selectItem th span {
            color: red !important;
        }

        .jobSearch {
            font-size: 14px;
            text-align: left;
            border: 1px #dadada solid;
        }

        .hb_ui_search {
            border: 1px #dadada solid;
            width: 258px;
            display: none;
            position: absolute;
            left: -1px;
            top: 35px;
            background: #fff;
        }

        .jobSearch li, .jobSearch .empty {
            height: 30px;
            line-height: 30px;
        }

        .hb_ui_search li {
            height: 27px;
            line-height: 27px;
            overflow: hidden;
            text-algin: left;
        }

        .jobSearch li, .jobSearch .empty {
            height: 30px;
            line-height: 30px;
        }

        .hb_ui_search li {
            height: 27px;
            line-height: 27px;
            overflow: hidden;
            text-algin: left;
        }

        .jobSearch .options {
            padding: 0;
            margin: 0;
        }

        .jobSearch .options li .selected .status {
            background-position: left top;
        }

        .jobSearch .options li .status {
            float: right;
            display: inline-block;
            width: 12px;
            height: 12px;
            font-size: 0;
            line-height: 0;
            background: url(http://cdn.{ROOT_DOMAIN}/img/v2/icons/pitch01.png) no-repeat left -15px;
            margin-top: 7px;
        }

        .jobSearch .options li a {
            padding-right: 7px;
            font-family: "微软雅黑";
        }

        .hb_ui_search .options li a {
            display: block;
            height: 100%;
            padding: 0 11px;
        }

        .hb_ui_search li a:hover, .hb_ui_search .search_item_hover, .hb_ui_select_options li a:hover, .hb_ui_search_select_options li a:hover {
            background: #F2F5F9;
        }

        .hb_ui_search li a {
            color: #444;
        }

        .jobSearch .options li a b {
            color: #da261e;
        }

        .jobSearch .footer {
            height: 30px;
            background: #f8f8f8;
            line-height: 30px;
            text-align: left;
            border-top: 1px solid #ccc;
            padding: 0 7px 0 11px;
            color: #2161cd;
            font-family: "宋体";
            font-size: 12px;
        }

        .jobSearch .footer a {
            float: right;
            color: #999;
            font-family: "宋体";
            font-size: 12px;
        }

        .hbJobSortDialog .tips {
            color: #da261e;
            padding-left: 292px;
            text-align: center;
            display: none;
        }

        .hbJobSortDialog_btns {
            margin-top: 10px;
            text-align: center;
        }

        a.btn1:link, a.btn1:visited {
            color: #fff;
            background: #3d86bc;
            border: 1px solid #397eb2;
            box-shadow: 0 1px 0 #59a0d5 inset;
            background-image: -moz-linear-gradient(top, #5496c7, #3d86bc);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #5496c7), color-stop(1, #3d86bc));
        }
        a.btnsF12 {
            height: 25px;
            line-height: 24px;
            display: inline-block;
            font-size: 12px;
            font-family: 宋体;
            margin: 0px 5px;
            padding: 0px 10px;
            border-radius: 3px;
            text-decoration: none;
        }
        a.btn3:link, a.btn3:visited {
            color: #666;
            border: 1px solid #dadada;
            background-color: #f7f7f7;
            box-shadow: 0 1px 0 #fff inset;
            background-image: -moz-linear-gradient(top, #fff, #ececec);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(1, #ececec));
        }
    </style>
    <script type="text/javascript" language="javascript" src="//cdn.{ROOT_DOMAIN}/js/jquery-1.8.3.min.js?v=2017"
            charset="utf-8"></script>
    <!--<script src="//cdn.{ROOT_DOMAIN}/data/jobClass/position.js"></script>
    <script src="//cdn.{ROOT_DOMAIN}/data/jobClass/area.js"></script>-->
    <script>

        $(function () {
            /*------------ 数据格式规约 begin ------------*/
            // 其中 v为key值，c为中文名，p为父节点key值，s为子节点key值
            // var positionData = {
            //     "0": {
            //         "v": 0,  //key值
            //         "c": ""一级职位类型"",//中文名
            //         "p": 0, //父节点key值
            //         "s": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"] //子节点key值
            //     },
            //     "1": {
            //         "v": "1",
            //         "c": "IT/互联网/通信/电子",
            //         "p": "0",
            //         "s": ["12", "13", "14", "15", "16", "17", "18"]
            //     },
            //     "2": {
            //         "v": "2",
            //         "c": "销售/客服/技术支持",
            //         "p": "0",
            //         "s": ["19", "20", "21", "22"]
            //     }
            // }
            /*------------ 数据格式规约 begin ------------*/


            /**
             * 数据初始化
             */
            var initParams=getRequest();
            var rootNode = 0, maxLimit = initParams.maxLimit||10000, pageSize = initParams.pageSize||10;
            var arr1 = [], arr2 = [], searchArr = top.searchArr||[],searchArrObj={};//searchArrObj用于去重
            /*测试数据 begin*/
            //自定义数据匹配
            // searchArr.unshift({"v": "1437","e": "tmwddz","c":"天猫 > 网店店长"});
            // searchArr.unshift({"v": "1437","e": "tgwddz","c":"天狗 > 网店店长"});
            // initDataProcess(positionData, '0');//数据及Dom处理
            /* areaData['1']['s'][areaData['1']['s'].indexOf('1100')]='+1100';
             areaData['+1100']= {"v": "+1100","e": "bj","c": "北京","p": "1","s": ["1100"]};
             areaData['1']['s'][areaData['1']['s'].indexOf('1200')]='+1200';
             areaData['+1200']= {"v": "+1200","e": "tj","c": "天津","p": "1","s": ["1200"]};
             areaData['1']['s'][areaData['1']['s'].indexOf('5000')]='+5000';
             areaData['+5000']= {"v": "+5000","e": "cq","c": "重庆","p": "1","s": ["5000"]};
             areaData['1']['s'][areaData['1']['s'].indexOf('3100')]='+3100';
             areaData['+3100']= {"v": "+3100","e": "sh","c": "上海","p": "1","s": ["3100"]};
             initDataProcess(areaData, '1');//数据及Dom处理*/
            /*测试数据 end*/

            initDataProcess(top[initParams.dataName],initParams.rootNodeId);//数据及Dom处理

            //初始化选中项
            if(initParams&&initParams.initVal){
                var initVal=initParams.initVal.split(',');
                initSelectItems(initVal);
            }

            initSerachCtrl();
            intiEffect();//初始化动效

            /**
             * 数据及Dom处理
             * @param data {JSON} 数据对象
             * @param rootNodeId {String} 数据对象根节点key
             */

            function initDataProcess(data, rootNodeId) {
                var nodeIds1 = data[rootNodeId]['s'];
                var node1Callback = function (obj, index) {
                    //dom拼接
                    // console.log('一级数据：'+JSON.stringify(obj));
                    var display = index == 0 ? 'table' : 'none';
                    var hover = index == 0 ? 'hover' : '';
                    arr1.push('<li class="' + hover + '"><a class="sub_item" href="javascript:" data-id="' + obj.v + '">' + obj.c + '</a></li>');
                    arr2.push('</div></td></tbody></table><table style="display:' + display + ';" class="child_item" cellpadding="0"><tbody>');
                }
                var node2Callback = function (obj, index) {
                    //dom拼接
                    // console.log('二级数据：'+JSON.stringify(obj));
                    arr2.push('</tr><tr><th><a href="javascript:" data-id="' + obj.v + '">' + obj.c + '</a></th><td><div>');

                    //自动搜索数据搜集
                    // 模仿此格式
                    /*{
                        'label': '销售管理 >  <b>销</b>售总监',
                        'value+': '销售总监',
                        'dataId': obj.v,
                        'alias': '销',
                        'order': '2000'
                    }*/
                    // obj.pre='';//直接去掉
                    if(!searchArrObj[obj.v]){
                        searchArr.push(obj);
                        searchArrObj[obj.v]=true;
                    }

                }
                var node3Callback = function (obj, index) {
                    //dom拼接
                    // console.log('三级数据：'+JSON.stringify(obj));
                    arr2.push('<a href="javascript:" data-id="' + obj.v + '">' + obj.c + '</a>');

                    //自动搜索数据搜集
                    // 模仿此格式
                    /*{
                        'label': '销售管理 >  <b>销</b>售总监',
                        'value+': '销售总监',
                        'dataId': obj.v,
                        'alias': '销',
                        'order': '2000'
                    }*/
                    obj.pre = data[obj.p].c + ' >  ';
                    if(!searchArrObj[obj.v]){
                        searchArr.push(obj);
                        searchArrObj[obj.v]=true;
                    }

                }
                for (var i = 0; i < nodeIds1.length; i++) {
                    var node1 = data[nodeIds1[i]];//一级数据
                    node1Callback(node1, i);
                    for (var j = 0; node1['s'] && j < node1['s'].length; j++) {
                        var node2 = data[node1['s'][j]];//二级数据
                        node2Callback(node2, j);
                        for (var q = 0; node2['s'] && q < node2['s'].length; q++) {
                            var node3 = data[node2['s'][q]];//二级数据
                            node3Callback(node3, q);
                        }
                    }
                }
                $('.jobSortMenu ul').html(arr1.join(''));
                arr2.push('</div></td></tbody></table>');
                arr2[0] = arr2[0].replace('</div></td></tbody></table>', '');
                $('.jobSortItems').html(arr2.join('')).find('table:first').css('diplay', 'table');


            }

            /**
             * 初始化自动搜索功能
             */
            function initSerachCtrl() {
                // $('.hb_ui_search ul.options').on('click', 'li:not(.selected)', function () {
                $('.hb_ui_search ul.options').on('mouseup', 'li a', function (e) {
                    if ($(this).attr('data-id')) {
                        addSelectItem($(this).attr('data-id'));
                        $('.hb_ui_search').slideUp();
                    }
                });
                $('.hbJobSortDialog').on('mouseup', function (e) {
                        if ($(e.target).parents('.jobTopActionsLeft').size()<=0) {
                        $('.hb_ui_search').slideUp();
                    }
                });

                $('#jobTopSearchInput').on('propertychange change input focus', function () {
                    var val = $("#jobTopSearchInput").val()||'';

                    // url(http://cdn.{ROOT_DOMAIN}/img/v2/icons/pitch01.png) no-repeat -13px 0
                    if(val.trim()){
                        $('.jobTopSearchInput em').css('background','url(//cdn.{ROOT_DOMAIN}/img/common/dialogclose.jpg) no-repeat 0 0')
                            .click(function () {
                                $("#jobTopSearchInput").val('');
                                $('.jobTopSearchInput em').css('background','url(//cdn.{ROOT_DOMAIN}/img/v2/icons/pitch01.png) no-repeat -13px 0');
                            });
                    }else{
                        $('.jobTopSearchInput em').css('background','url(//cdn.{ROOT_DOMAIN}/img/v2/icons/pitch01.png) no-repeat -13px 0');
                        $('.jobTopSearchInput em').off('click');
                    }

                    if (!val.trim()) {
                        $('.hb_ui_search').slideUp();
                        return false;
                    }
                    var matchWords = [];
                    for (var i = 0; i < searchArr.length; i++) {
                        if (searchArr[i]['c'].indexOf(val.trim()) >= 0) {
                            searchArr[i].nxt = searchArr[i]['c'].replace(val.trim(), '<b>' + val.trim()+ '</b>');

                            if (searchArr[i]['c'].indexOf('>')) {//支持自定义添加词汇库，刑如{"v": "1437","e": "tm","c":"天猫 > 网店店长"}
                                matchWords.unshift(searchArr[i]); //自定义优先
                            } else {
                                matchWords.push(searchArr[i]);
                            }

                        }
                    }
                    var optionsHtml = '', footerHtml = '';
                    matchWords.currPageIndex = 1;
                    loadPage();

                    function loadPage() {
                        optionsHtml = '';
                        if (matchWords.length > 0) {
                            var limitNum = pageSize > matchWords.length ? matchWords.length : pageSize;
                            for (var j = (matchWords.currPageIndex - 1) * pageSize; j < (matchWords.currPageIndex - 1) * pageSize + limitNum; j++) {
                                if(!matchWords[j]){//当尾页不足10条时
                                    break;
                                }
                                var selected = $('.jobTopResult span[data-id="' + matchWords[j].v + '"]').size() > 0 ? 'selected' : '';
                                // <li><a class="selected" href="javascript:" data-id="2001"><span class="status"></span>销售管理&gt; <b>销</b>售总监</a></li>
                                optionsHtml += '<li><a class="' + selected + '" href="javascript:" data-id="' + matchWords[j].v + '"><span class="status"></span>' + (matchWords[j].pre || '') + matchWords[j].nxt + '</a></li>'
                            }
                            footerHtml = matchWords.length > pageSize ? '<a href="javascript:">换一批</a><span>共' + matchWords.length + '个</span>' : '<span>共' + matchWords.length + '个</span>';

                            matchWords.pageCount = Math.ceil(matchWords.length / pageSize);//计算页数
                        } else {
                            optionsHtml = '没找到职位，换个关键词试试！';
                        }
                        $('.hb_ui_search ul.options').html(optionsHtml);

                        // currIndex=-1;//重置方向键事件当前行记录重置为-1
                    }

                    $('.hb_ui_search div.footer').off('mouseup').on('mouseup', 'a', function () {
                        matchWords.currPageIndex++;
                        matchWords.currPageIndex = matchWords.currPageIndex > matchWords.pageCount ? 1 : matchWords.currPageIndex;
                        // console.log(matchWords.currPageIndex);
                        loadPage();


                    });
                    $('.hb_ui_search div.footer').html(footerHtml);
                    $('.hb_ui_search').slideDown();


                });
                //键盘上下移动事件
                $(document).off('keyup', '.hbJobSortDialog').on('keyup', '.hbJobSortDialog', searchKeyUp);
                var currIndex = -1;

                function searchKeyUp(ev) {
                    if ($('.hb_ui_search:visible').size() == 0) {
                        return false;
                    }
                    // if (ev.key == 'ArrowUp' || ev.key == 'ArrowDown') {
                    if (ev.keyCode == '38' || ev.keyCode == '40') {
                        var totals = $('.hb_ui_search ul.options li').size();
                        // if (ev.key == 'ArrowUp') {//方向盘上键
                        if (ev.keyCode == '38') {//方向盘上键
                            if (currIndex <= 0) {
                                $('.hb_ui_search ul.options li a').removeClass('search_item_hover');
                                $('.hb_ui_search ul.options li:last a').addClass('search_item_hover');
                                currIndex = $('.hb_ui_search ul.options li:last').index();
                            } else {
                                currIndex--;
                                $('.hb_ui_search ul.options li a').removeClass('search_item_hover');
                                $('.hb_ui_search ul.options li').eq(currIndex).find('a').addClass('search_item_hover');
                            }
                        // } else if (ev.key == 'ArrowDown') {//方向盘下键
                        } else if (ev.keyCode == '40') {//方向盘下键
                            // console.log('currIndex:' + currIndex);
                            if (currIndex < 0 || currIndex >= totals - 1) {
                                $('.hb_ui_search ul.options li a').removeClass('search_item_hover');
                                $('.hb_ui_search ul.options li:first a').addClass('search_item_hover');
                                currIndex = $('.hb_ui_search ul.options li:first').index();
                            } else {
                                currIndex++;
                                $('.hb_ui_search ul.options li a').removeClass('search_item_hover');
                                $('.hb_ui_search ul.options li').eq(currIndex).find('a').addClass('search_item_hover');
                            }
                        }


                        // document.title=currIndex;
                    // } else if (ev.keyCode == 'Enter') {
                    } else if (ev.keyCode == '13') {
                        var shoverDataId = $('.hb_ui_search ul.options li a.search_item_hover').attr('data-id');
                         if(shoverDataId){
                             addSelectItem(shoverDataId);
                         }
                        // var shoverDataId = $('.hb_ui_search ul.options li.search_item_hover').eq(currIndex).find('a').attr('data-id');
                    }
                }


            }

            /**
             * 初始化选中项
             * @param dataIds  数据数组
             */
            function initSelectItems(dataIds) {
                for (var i = 0; i < dataIds.length; i++) {
                    addSelectItem(dataIds[i]);
                }
            }

            /**
             * 初始化动效
             **/
            function intiEffect() {
                // hover效果
                var hoverTableFalg=-1,lastLiIndex=-2;

                $('.jobSortMenu').on('mouseover', 'ul li', function () {
                    var that=this,index=$(this).index();
                   setTimeout(function () {
                       // console.log('li'+index);
                       // console.log('hoverTableFalg'+hoverTableFalg);
                       if(lastLiIndex!=hoverTableFalg){
                           lastLiIndex=index;
                           $('.jobSortMenu ul li').removeClass('hover');
                           $('.jobSortMenu ul li').eq(index).addClass('hover');
                           $('.jobSortItems table.child_item').css('display', 'none');
                           $('.jobSortItems table.child_item').eq(index).css('display', 'table');
                       }
                   },300)
                });
                $('.jobSortItems').on('mouseover', 'table.child_item', function () {
                    var that=this,index=$(this).index();
                    hoverTableFalg=index;
                    // console.log('------hoverTableFalg'+hoverTableFalg);
                    $('.jobSortMenu ul li').removeClass('hover');
                    $('.jobSortMenu ul li').eq(index).addClass('hover');
                    $('.jobSortItems table.child_item').css('display', 'none');
                    $('.jobSortItems table.child_item').eq(index).css('display', 'table');
                });
                $('.jobSortItems').on('mouseout' ,function () {
                    hoverTableFalg=-1;
                });


                $('.jobSortItems table').on('click', 'td div a,th a', function (e) {
                    if ($(e.target).hasClass('selectItem')) {
                        removeSelectItem($(e.target).attr('data-id'));
                    } else {
                        addSelectItem($(e.target).attr('data-id'));
                    }
                });
                $('.jobTopResult').on('click', 'span', function (e) {
                    removeSelectItem($(this).attr('data-id'));
                });
            }

            /**
             * 移除项
             * @param dataId 处理的区域id
             */
            function removeSelectItem(dataId) {
                var that = $('.jobSortItems a[data-id="' + dataId + '"]');
                if (that.length != 0 && that.parent().parent()[0].tagName == 'TD' && that.closest('tr').hasClass('selectItemParent')) {
                    if ($('.hbJobSortDialog .tips').size() == 0) {
                        $('.jobTopActionsPanel').html('已选择父标签【' + that.closest('tr').find('th a').html() + '】项').slideDown();
                        setTimeout(function () {
                            $('.hbJobSortDialog .tips').slideUp();
                        }, 3000);
                    }
                    return false;
                }//三级菜单并且其父级菜单已被选中 则返回

                try {
                    if (that.parent().get(0).tagName == 'TH') {//二级菜单
                        var tr = that.closest('tr');
                        tr.removeClass('selectItemParent');
                    }
                } catch (e) {
                    window.that = that;

                }
                //else if(that.parent().parent()[0].tagName=='TD'){}//三级菜单
                that.removeClass('selectItem');
                $('.jobTopResult span[data-id="' + dataId + '"]').remove();

                /*数量控制*/
                /*var count=$('.hbJobSortDialog .count').html()*1-1;
                $('.hbJobSortDialog .count').html(count<0?0:count);*/
                countCtrl(-1, dataId);
            }

            /**
             * 增加项
             * @param dataId 处理的区域id
             */
            function addSelectItem(dataId) {
                if (!dataId || $('.jobTopResult span[data-id="' + dataId + '"]').size() > 0) {
                    return false;
                    // console.log('选项已存在！');
                }
                var that = $('.jobSortItems a[data-id="' + dataId + '"]');
                if(that.length ==0){
                    console.log('发生异常：请联系开发人员cny');
                    return false;
                }
                if (that.length != 0 && that.parent().parent().get(0).tagName == 'TD' && that.closest('tr').hasClass('selectItemParent')) {
                    tips('已选择父标签【' + that.closest('tr').find('th a').html() + '】项');
                    return false;
                }//三级菜单并且其父级菜单已被选中 则返回
                if (that.parent().get(0).tagName == 'TH') {//二级菜单
                    that.addClass('selectItem');
                    var tr = that.closest('tr');
                    tr.find('td div a.selectItem').each(function () {
                        removeSelectItem($(this).attr('data-id'));
                    });
                    tr.addClass('selectItemParent');
                }
                //else if(that.parent().parent()[0].tagName=='TD'){}//三级菜单
                that.addClass('selectItem');
                $('.jobTopResult').append('<span data-name="' + that.html()+ '" data-id="' + that.attr('data-id') + '">' + that.html() + '<a href="javascript:">X</a></span>');
                
                /*数量控制*/
                /*var count=$('.hbJobSortDialog .count').html()*1+1;
                $('.hbJobSortDialog .count').html(count);
                if(count>maxLimit){//放在最后能保证二级菜单点击后正确计数，但超出限制要回滚
                    removeSelectItem(dataId);
                    alert('最多只能选择'+maxLimit+'项');
                }*/
                countCtrl(1, dataId);
            }

            /**
             * 数量计算与控制
             * @param num -1|1 1代表加1，-1代表减1
             * @param dataId 处理的区域id
             */
            function countCtrl(num, dataId) {
                var count = $('.hbJobSortDialog .count').html() * 1 + num;
                $('.hbJobSortDialog .count').html(count < 0 ? 0 : count);

                if (maxLimit && num > 0 && count > maxLimit) {//放在最后能保证二级菜单点击后正确计数，但超出限制要回滚,在num>0即加法时才执行
                    removeSelectItem(dataId);
                    tips('最多只能选择' + maxLimit + '项');
                }
            }

            function tips(msg) {
                    // $(top.document).find('.dialogHead span._title').after('<i class="tips" style="position:absolute;color:#da261e;right: 46px;font-size:14px;">'+msg+'</i>');
                    $(top.document).find('.layui-layer-title').append('<i class="tips" style="position:absolute;color:#da261e;right: 46px;font-size:14px;">'+msg+'</i>');
                    setTimeout(function () {
                        // $(top.document).find('.dialogHead .tips').remove();
                        $(top.document).find('.layui-layer-title .tips').remove();
                    },2000);
              /*  $('.hbJobSortDialog .tips').html(msg).slideDown();
                setTimeout(function () {
                    $('.hbJobSortDialog .tips').slideUp();
                }, 2000);*/
            }

            /**
             * 获取url参数
             * @returns {Object}
             * @constructor
             */
            function getRequest() {
                var url = location.search; //获取url中"?"符后的字串
                var theRequest = new Object();
                if (url.indexOf("?") != -1) {
                    var str = url.substr(1);
                    strs = str.split("&");
                    for(var i = 0; i < strs.length; i ++) {
                        theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
                    }
                }
                return theRequest;
            }
        });



        String.prototype.trim=String.prototype.trim?String.prototype.trim:function () {
           return this.replace(/^\s+|\s+$/gm,'');
        };
        Array.prototype.indexOf= Array.prototype.indexOf ? Array.prototype.indexOf: function(el){
            for(var i = 0, len = this.length; i < len; i++){
                if(this[i] === el)
                    return i;
            }
            return -1;
        };
    </script>
</head>
<body>
<!--<div class="hbJobSortDialog" style="width: 900px;margin:10px auto; border:1px solid red;">-->
<div class="hbJobSortDialog">
    <div class="jobPanel" style="">
        <div class="jobTopActionsPanel clearfix">
            <div class="jobTopActionsLeft" style="position:relative;">
                <div class="jobTopSearchInput">
                    <em></em><input autocomplete="off" placeholder="关键词快速匹配，点击选中" id="jobTopSearchInput">
                </div>
                选择<em class="count">0</em> 项
                <div style="width: 290px; height: auto; z-index: 10000; position: absolute; left: 0; top: 30px; display: none;"
                     class="hb_ui_search jobSearch">
                    <ul class="options">
                        <li class="selected" data-id="2001"><a href="javascript:"><span class="status"></span>销售管理
                            &gt; <b>销</b>售总监</a></li>
                        <li><a class="search_item_hover" href="javascript:" data-id="2010"><span
                                class="status"></span>销售管理 &gt; <b>销</b>售经理</a></li>
                        <li><a class="" href="javascript:" data-id="2008"><span class="status"></span>销售管理 &gt;
                            区域<b>销</b>售管理</a></li>
                        <li><a class="" href="javascript:" data-id="2011"><span class="status"></span>销售管理 &gt;
                            渠道/分<b>销</b></a>
                        </li>
                        <li><a class="" href="javascript:" data-id="2103"><span class="status"></span>销售人员 &gt;
                            渠道/分<b>销</b>专员</a>
                        </li>
                    </ul>
                    <div class="footer"><a href="javascript:">换一批</a><span>共42个</span></div>
                </div>
            </div>
            <div id="jobTopResult" class="jobTopResult">
                <!--<span data-id="1404">招聘专员<a href="javascript:">X</a></span>-->
            </div>
        </div>
        <p class="tips"></p>
        <div style="clear: both;"></div>
        <div class="jobContentBox jobContentBox_one">
            <div class="jobSortMenu">
                <ul>
                    <li class="hover"><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        销售、客服、市场、公关</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        人资、行政、财务、管理</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        生产、工人、质控</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        互联网、游戏、软件</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        通信、硬件、电子电器</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->汽摩、机械</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        房地产、建筑、物业、装饰</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        金融、银行、保险</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        广告、设计、传媒</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        餐饮、百货、生活服务</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->医疗、医药</a>
                    </li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        教育、培训、专业服务</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        能源、化工、服装、环保</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        进出口、采购、物流、司机</a></li>
                    <li class=""><a class="sub_item" href="javascript:"><!--<i class="hbFntWes">&#xf105;</i>-->
                        农林牧渔、其他</a>
                    </li>
                </ul>
            </div>
            <div class="jobSortItems">
                <table style="display: table;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="2100">销售人员</a></th>
                        <td>
                            <div><a href="javascript:" data-id="2101">销售代表</a><a href="javascript:"
                                                                                 data-id="2105">电话销售</a><a
                                    href="javascript:" data-id="2102">客户经理</a><a href="javascript:"
                                                                                 data-id="2113">营业员</a><a
                                    href="javascript:" data-id="2109">置业顾问/房产经纪人</a><a href="javascript:"
                                                                                       data-id="2110">汽车销售顾问</a><a
                                    href="javascript:" data-id="2114">医药代表</a><a href="javascript:"
                                                                                 data-id="2103">渠道/分销专员</a><a
                                    href="javascript:" data-id="2106">团购业务员</a><a href="javascript:"
                                                                                  data-id="2111">招商专员</a><a
                                    href="javascript:" data-id="2112">销售内勤/助理</a><a href="javascript:" data-id="2115">网络/在线销售</a><a
                                    href="javascript:" data-id="2116">驻店销售</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="2000">销售管理</a></th>
                        <td>
                            <div><a href="javascript:" data-id="2001">销售总监</a><a href="javascript:"
                                                                                 data-id="2010">销售经理</a><a
                                    href="javascript:" data-id="2011">渠道/分销</a><a href="javascript:"
                                                                                  data-id="2009">团购经理</a><a
                                    href="javascript:" data-id="2007">大客户经理</a><a href="javascript:"
                                                                                  data-id="2008">区域销售管理</a><a
                                    href="javascript:" data-id="2012">招商经理</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="2300">客服/售后</a></th>
                        <td>
                            <div><a href="javascript:" data-id="2301">客服总监</a><a href="javascript:"
                                                                                 data-id="2311">客服经理</a><a
                                    href="javascript:" data-id="2309">客服专员</a><a href="javascript:"
                                                                                 data-id="2310">网店客服</a><a
                                    href="javascript:" data-id="2306">客户关系管理</a><a href="javascript:" data-id="2307">售前/售后技术支持</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="3000">市场/营销</a></th>
                        <td>
                            <div><a href="javascript:" data-id="3025">市场营销总监</a><a href="javascript:"
                                                                                   data-id="3017">市场营销经理</a><a
                                    href="javascript:" data-id="3018">市场营销专员</a><a href="javascript:"
                                                                                   data-id="3019">商务专员/经理</a><a
                                    href="javascript:" data-id="3005">选址拓展/新店开发</a><a href="javascript:" data-id="3024">活动策划/执行</a><a
                                    href="javascript:" data-id="3020">企划</a><a href="javascript:"
                                                                               data-id="3021">促销员/督导</a><a
                                    href="javascript:" data-id="3022">网络营销/推广</a><a href="javascript:"
                                                                                    data-id="3023">海外市场</a><a
                                    href="javascript:" data-id="3026">品牌经理/主管</a><a href="javascript:"
                                                                                    data-id="3027">品牌专员</a><a
                                    href="javascript:" data-id="3028">市场分析/调研</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="2900">公关/媒介</a></th>
                        <td>
                            <div><a href="javascript:" data-id="2910">公关/媒介经理</a><a href="javascript:" data-id="2904">公关/媒介专员</a><a
                                    href="javascript:" data-id="2911">品牌经营</a><a href="javascript:"
                                                                                 data-id="2912">广告协调</a><a
                                    href="javascript:" data-id="2913">会务安排</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="1400">人力资源</a></th>
                        <td>
                            <div><a href="javascript:" data-id="1413">人力资源专员</a><a href="javascript:"
                                                                                   data-id="1404">招聘专员</a><a
                                    href="javascript:" data-id="1407">培训专员</a><a href="javascript:"
                                                                                 data-id="1405">薪酬福利专员</a><a
                                    href="javascript:" data-id="1406">绩效专员</a><a href="javascript:"
                                                                                 data-id="1412">员工关系专员</a><a
                                    href="javascript:" data-id="1402">人力资源经理/主管</a><a href="javascript:" data-id="1401">人力资源总监</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="1500">行政后勤</a></th>
                        <td>
                            <div><a href="javascript:" data-id="1503">行政专员</a><a href="javascript:"
                                                                                 data-id="1511">文员</a><a
                                    href="javascript:" data-id="1506">前台接待</a><a href="javascript:"
                                                                                 data-id="1512">高管助理/秘书</a><a
                                    href="javascript:" data-id="1510">系统管理员/网管</a><a href="javascript:"
                                                                                     data-id="1513">保安</a><a
                                    href="javascript:" data-id="1514">保洁员</a><a href="javascript:"
                                                                                data-id="1516">商务司机</a><a
                                    href="javascript:" data-id="1517">客运司机</a><a href="javascript:"
                                                                                 data-id="1518">货运司机</a><a
                                    href="javascript:" data-id="1515">后勤</a><a href="javascript:"
                                                                               data-id="1502">行政经理/主管</a><a
                                    href="javascript:" data-id="1501">行政总监</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="2400">财务/审计/税务</a></th>
                        <td>
                            <div><a href="javascript:" data-id="2424">财务专员</a><a href="javascript:"
                                                                                 data-id="2412">会计</a><a
                                    href="javascript:" data-id="2414">出纳</a><a href="javascript:" data-id="2421">投融资</a><a
                                    href="javascript:" data-id="2422">审计专员</a><a href="javascript:"
                                                                                 data-id="2423">税务会计</a><a
                                    href="javascript:" data-id="2428">财务统计员</a><a href="javascript:"
                                                                                  data-id="2427">成本会计</a><a
                                    href="javascript:" data-id="2425">结算专员</a><a href="javascript:"
                                                                                 data-id="2426">风控专员</a><a
                                    href="javascript:" data-id="2429">资金/资产会计</a><a href="javascript:" data-id="2404">财务经理/主管</a><a
                                    href="javascript:" data-id="2403">财务总监</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="4500">律师/法务</a></th>
                        <td>
                            <div><a href="javascript:" data-id="4501">律师/法律顾问</a><a href="javascript:" data-id="4502">法务经理/主管</a><a
                                    href="javascript:" data-id="4509">法务专员</a><a href="javascript:"
                                                                                 data-id="4505">知识产权/专利顾问</a><a
                                    href="javascript:" data-id="4510">合规管理</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="1300">高级管理</a></th>
                        <td>
                            <div><a href="javascript:" data-id="1315">CEO</a><a href="javascript:" data-id="1318">副总</a><a
                                    href="javascript:" data-id="1322">CTO</a><a href="javascript:"
                                                                                data-id="1316">COO</a><a
                                    href="javascript:" data-id="1317">CFO</a><a href="javascript:"
                                                                                data-id="1320">办事处/分公司负责人</a><a
                                    href="javascript:" data-id="1312">总工程师</a><a href="javascript:"
                                                                                 data-id="1313">厂长/副厂长</a><a
                                    href="javascript:" data-id="1306">合伙人</a><a href="javascript:"
                                                                                data-id="1321">总经理助理</a><a
                                    href="javascript:" data-id="1399">其他(高级管理)</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="7500">生产/营运</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7501">厂长/副厂长</a><a href="javascript:" data-id="7502">总工程师/副总工程师</a><a
                                    href="javascript:" data-id="7503">车间主任</a><a href="javascript:"
                                                                                 data-id="7504">项目经理</a><a
                                    href="javascript:" data-id="7505">技术工程师</a><a href="javascript:"
                                                                                  data-id="7506">营运经理/主管</a><a
                                    href="javascript:" data-id="7507">生产计划/调度</a><a href="javascript:" data-id="7508">物料管理/库管</a><a
                                    href="javascript:" data-id="7509">生产主管/领班/组长</a><a href="javascript:"
                                                                                       data-id="7510">工艺设计</a><a
                                    href="javascript:" data-id="7511">化验/检验</a><a href="javascript:"
                                                                                  data-id="7512">生产文员</a><a
                                    href="javascript:" data-id="7513">设备管理</a><a href="javascript:"
                                                                                 data-id="7599">其他（生产/营运）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7600">普工/技工</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7601">普工</a><a href="javascript:" data-id="7602">钣金工</a><a
                                    href="javascript:" data-id="7603">机修工</a><a href="javascript:"
                                                                                data-id="7604">冲压工</a><a
                                    href="javascript:" data-id="7605">装配工</a><a href="javascript:" data-id="7606">焊工</a><a
                                    href="javascript:" data-id="7607">钳工</a><a href="javascript:"
                                                                               data-id="7608">车工</a><a
                                    href="javascript:" data-id="7609">磨工</a><a href="javascript:"
                                                                               data-id="7610">铣工</a><a
                                    href="javascript:" data-id="7611">切割技工</a><a href="javascript:"
                                                                                 data-id="7612">模具工</a><a
                                    href="javascript:" data-id="7613">叉车工/铲车</a><a href="javascript:"
                                                                                   data-id="7614">空调工</a><a
                                    href="javascript:" data-id="7615">电梯工</a><a href="javascript:"
                                                                                data-id="7616">锅炉工</a><a
                                    href="javascript:" data-id="7617">水电工</a><a href="javascript:" data-id="7618">木工</a><a
                                    href="javascript:" data-id="7619">油漆工</a><a href="javascript:"
                                                                                data-id="7620">注塑工</a><a
                                    href="javascript:" data-id="7621">铸造/锻造</a><a href="javascript:"
                                                                                  data-id="7622">万能工</a><a
                                    href="javascript:" data-id="7624">组装工</a><a href="javascript:"
                                                                                data-id="7625">包装工</a><a
                                    href="javascript:" data-id="7626">旋压工</a><a href="javascript:"
                                                                                data-id="7627">仪表工</a><a
                                    href="javascript:" data-id="7628">电镀工</a><a href="javascript:"
                                                                                data-id="7629">喷塑工</a><a
                                    href="javascript:" data-id="7630">折弯工</a><a href="javascript:" data-id="7631">刨工</a><a
                                    href="javascript:" data-id="7632">钻工</a><a href="javascript:"
                                                                               data-id="7633">镗工</a><a
                                    href="javascript:" data-id="7634">铆工</a><a href="javascript:" data-id="7635">抛光工</a><a
                                    href="javascript:" data-id="7636">炼胶工</a><a href="javascript:"
                                                                                data-id="7637">硫化工</a><a
                                    href="javascript:" data-id="7638">吹膜工</a><a href="javascript:"
                                                                                data-id="7699">其他（普工/技工）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7700">质控/安防</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7701">质量管理/测试经理</a><a href="javascript:" data-id="7702">质量检验员/测试员</a><a
                                    href="javascript:" data-id="7703">可靠度工程师</a><a href="javascript:" data-id="7704">认证体系工程师/审核员</a><a
                                    href="javascript:" data-id="7705">供应商管理（SQE）</a><a href="javascript:"
                                                                                       data-id="7706">安全消防</a><a
                                    href="javascript:" data-id="7707">环保</a><a href="javascript:"
                                                                               data-id="7799">其他（质控/安防）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="6000">后端开发</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6001">PHP</a><a href="javascript:"
                                                                                data-id="6002">Java</a><a
                                    href="javascript:" data-id="6003">.net</a><a href="javascript:"
                                                                                 data-id="6004">C/C++</a><a
                                    href="javascript:" data-id="6005">C#</a><a href="javascript:"
                                                                               data-id="6006">python</a><a
                                    href="javascript:" data-id="6007">架构师</a><a href="javascript:"
                                                                                data-id="6008">其他（后端开发）</a><a
                                    href="javascript:" data-id="6009">数据挖掘</a><a href="javascript:"
                                                                                 data-id="6010">搜索算法</a><a
                                    href="javascript:" data-id="6011">精准推荐</a><a href="javascript:"
                                                                                 data-id="6012">全栈工程师</a><a
                                    href="javascript:" data-id="6013">Delphi</a><a href="javascript:"
                                                                                   data-id="6014">VB</a><a
                                    href="javascript:" data-id="6015">Perl</a><a href="javascript:"
                                                                                 data-id="6016">Ruby</a><a
                                    href="javascript:" data-id="6017">Node.js</a><a href="javascript:"
                                                                                    data-id="6018">Go</a><a
                                    href="javascript:" data-id="6019">ASP</a><a href="javascript:"
                                                                                data-id="6020">Shell</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6100">移动开发</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6101">IOS</a><a href="javascript:"
                                                                                data-id="6102">android</a><a
                                    href="javascript:" data-id="6103">html5(移动)</a><a href="javascript:" data-id="6104">其他（移动开发）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6200">前端开发</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6201">网页前端</a><a href="javascript:"
                                                                                 data-id="6202">html5(前端)</a><a
                                    href="javascript:" data-id="6203">JavaScript</a><a href="javascript:"
                                                                                       data-id="6204">Flash</a><a
                                    href="javascript:" data-id="6205">COCOS2D-X/U3D</a><a href="javascript:"
                                                                                          data-id="6206">其他（前端开发）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9900">人工智能</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9901">深度学习</a><a href="javascript:"
                                                                                 data-id="9902">机器学习</a><a
                                    href="javascript:" data-id="9903">图像处理</a><a href="javascript:"
                                                                                 data-id="9904">图像识别</a><a
                                    href="javascript:" data-id="9905">语音识别</a><a href="javascript:"
                                                                                 data-id="9906">机器视觉</a><a
                                    href="javascript:" data-id="9907">算法工程师</a><a href="javascript:"
                                                                                  data-id="9908">自然语言处理</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6300">运维</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6301">运维工程师</a><a href="javascript:"
                                                                                  data-id="6302">网络安全</a><a
                                    href="javascript:" data-id="6303">运维经理</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6400">数据库</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6401">mysql</a><a href="javascript:" data-id="6402">SQL
                                Server</a><a href="javascript:" data-id="6403">Oracle</a><a href="javascript:"
                                                                                            data-id="6404">hadoop</a><a
                                    href="javascript:" data-id="6405">DBA</a><a href="javascript:"
                                                                                data-id="6406">DB2</a><a
                                    href="javascript:" data-id="6407">MongoDB</a><a href="javascript:"
                                                                                    data-id="6408">ETL</a><a
                                    href="javascript:" data-id="6409">Hive</a><a href="javascript:"
                                                                                 data-id="6410">数据仓库</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6500">技术管理</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6501">项目经理/助理</a><a href="javascript:"
                                                                                    data-id="6502">技术经理</a><a
                                    href="javascript:" data-id="6503">CTO</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6600">其他技术</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6601">软件实施</a><a href="javascript:"
                                                                                 data-id="6602">系统集成</a><a
                                    href="javascript:" data-id="6603">系统分析员</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6700">测试</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6701">软件测试</a><a href="javascript:"
                                                                                 data-id="6702">移动端测试</a><a
                                    href="javascript:" data-id="6703">游戏测试</a><a href="javascript:"
                                                                                 data-id="6704">测试工程师</a><a
                                    href="javascript:" data-id="6705">测试主管/经理</a><a href="javascript:"
                                                                                    data-id="6706">测试总监</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6800">产品</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6801">网页产品经理</a><a href="javascript:"
                                                                                   data-id="6802">移动产品经理</a><a
                                    href="javascript:" data-id="6803">电商产品经理</a><a href="javascript:"
                                                                                   data-id="6804">软件产品经理</a><a
                                    href="javascript:" data-id="6805">游戏策划</a><a href="javascript:"
                                                                                 data-id="6806">产品经理</a><a
                                    href="javascript:" data-id="6807">产品专员/助理</a><a href="javascript:"
                                                                                    data-id="6808">数据产品经理</a><a
                                    href="javascript:" data-id="6810">产品部主管/经理</a><a href="javascript:"
                                                                                     data-id="6811">产品总监</a><a
                                    href="javascript:" data-id="6812">用户研究员</a><a href="javascript:"
                                                                                  data-id="6813">数据分析师</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="6900">设计</a></th>
                        <td>
                            <div><a href="javascript:" data-id="6901">UI设计</a><a href="javascript:"
                                                                                 data-id="6902">平面设计</a><a
                                    href="javascript:" data-id="6903">网页设计/美工</a><a href="javascript:" data-id="6904">游戏设计/原画设计</a><a
                                    href="javascript:" data-id="6905">交互设计</a><a href="javascript:"
                                                                                 data-id="6906">设计师</a><a
                                    href="javascript:" data-id="6907">设计主管/经理</a><a href="javascript:"
                                                                                    data-id="6908">设计总监</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7000">运营/市场</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7001">网店运营</a><a href="javascript:" data-id="7002">SEO/ASO/SEM</a><a
                                    href="javascript:" data-id="7003">网络推广</a><a href="javascript:"
                                                                                 data-id="7004">文案策划</a><a
                                    href="javascript:" data-id="7005">编辑/内容运营</a><a href="javascript:"
                                                                                    data-id="7006">新媒体运营</a><a
                                    href="javascript:" data-id="7007">市场策划</a><a href="javascript:"
                                                                                 data-id="7008">运营/市场专员</a><a
                                    href="javascript:" data-id="7009">运营/市场经理</a><a href="javascript:" data-id="7010">运营/市场总监</a><a
                                    href="javascript:" data-id="7011">用户运营</a><a href="javascript:"
                                                                                 data-id="7012">数据运营</a><a
                                    href="javascript:" data-id="7013">活动运营</a><a href="javascript:"
                                                                                 data-id="7014">商家运营</a><a
                                    href="javascript:" data-id="7015">品类运营</a><a href="javascript:"
                                                                                 data-id="7016">游戏运营</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="7900">通信/网络设备</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7901">移动通信工程师</a><a href="javascript:" data-id="7902">有线传输工程师</a><a
                                    href="javascript:" data-id="7903">网络工程师</a><a href="javascript:"
                                                                                  data-id="7904">通信项目管理</a><a
                                    href="javascript:" data-id="7905">安装技术员</a><a href="javascript:"
                                                                                  data-id="7906">通信技术工程师</a><a
                                    href="javascript:" data-id="7907">通信设备维修</a><a href="javascript:"
                                                                                   data-id="7908">无线通信工程师</a><a
                                    href="javascript:" data-id="7909">电信交换工程师</a><a href="javascript:" data-id="7910">数据通信工程师</a><a
                                    href="javascript:" data-id="7911">电信网络工程师</a><a href="javascript:" data-id="7912">通信电源工程师</a><a
                                    href="javascript:" data-id="7999">其他（通信/网络设备）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9300">电子</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9301">电源开发工程师</a><a href="javascript:"
                                                                                    data-id="9302">工艺工程师</a><a
                                    href="javascript:" data-id="9303">汽车电子工程师</a><a href="javascript:"
                                                                                    data-id="9304">自动化工程师</a><a
                                    href="javascript:" data-id="9305">嵌入式开发</a><a href="javascript:"
                                                                                  data-id="9306">仪器/仪表/计量</a><a
                                    href="javascript:" data-id="9307">测试工程师</a><a href="javascript:"
                                                                                  data-id="9308">SMT工程师</a><a
                                    href="javascript:" data-id="9309">电子工程师</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9400">电器</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9401">家电/数码产品研发</a><a href="javascript:" data-id="9402">光源和照明工程师</a><a
                                    href="javascript:" data-id="9403">音响工程师</a><a href="javascript:"
                                                                                  data-id="9404">电器维修</a><a
                                    href="javascript:" data-id="9405">电器工程师</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="7100">汽车研发/设计</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7101">电器设计师</a><a href="javascript:"
                                                                                  data-id="7102">底盘设计师</a><a
                                    href="javascript:" data-id="7103">车身/造型设计师</a><a href="javascript:" data-id="7104">动力系统工程师</a><a
                                    href="javascript:" data-id="7105">内外饰工程师</a><a href="javascript:"
                                                                                   data-id="7106">机电工程师</a><a
                                    href="javascript:" data-id="7107">涂装工程师</a><a href="javascript:"
                                                                                  data-id="7108">总布置工程师</a><a
                                    href="javascript:" data-id="7109">车辆试验/测试</a><a href="javascript:"
                                                                                    data-id="7110">质量工程师</a><a
                                    href="javascript:" data-id="7111">其他（汽车研发/设计）</a><a href="javascript:"
                                                                                        data-id="7112">汽车设计工程师</a><a
                                    href="javascript:" data-id="7113">汽车电子工程师</a><a href="javascript:" data-id="7114">发动机/总装工程师</a><a
                                    href="javascript:" data-id="7115">汽车项目管理</a><a href="javascript:"
                                                                                   data-id="7116">汽车质量管理</a><a
                                    href="javascript:" data-id="7117">汽车安全性能工程师</a><a href="javascript:" data-id="7118">汽车装配工艺工程师</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7200">汽车销售/市场</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7201">汽车销售顾问</a><a href="javascript:"
                                                                                   data-id="7202">精品销售</a><a
                                    href="javascript:" data-id="7203">零配件销售</a><a href="javascript:"
                                                                                  data-id="7204">销售内勤</a><a
                                    href="javascript:" data-id="7205">销售经理</a><a href="javascript:"
                                                                                 data-id="7206">市场营销专员</a><a
                                    href="javascript:" data-id="7207">市场营销经理</a><a href="javascript:"
                                                                                   data-id="7208">二手车评估师</a><a
                                    href="javascript:" data-id="7209">销售库管</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7300">汽车服务/维修</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7301">汽车美容</a><a href="javascript:"
                                                                                 data-id="7302">洗车工</a><a
                                    href="javascript:" data-id="7303">售后服务/客服</a><a href="javascript:" data-id="7304">售后经理/主管</a><a
                                    href="javascript:" data-id="7305">保险理赔</a><a href="javascript:"
                                                                                 data-id="7306">机电维修</a><a
                                    href="javascript:" data-id="7307">维修钣金工</a><a href="javascript:"
                                                                                  data-id="7308">维修漆工</a><a
                                    href="javascript:" data-id="7399">其他（服务/售后/维修）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7400">机械/设备</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7401">模具设计师</a><a href="javascript:"
                                                                                  data-id="7402">机械工程师</a><a
                                    href="javascript:" data-id="7403">机电工程师</a><a href="javascript:"
                                                                                  data-id="7404">CNC工程师</a><a
                                    href="javascript:" data-id="7405">夹具设计师</a><a href="javascript:"
                                                                                  data-id="7406">结构工程师</a><a
                                    href="javascript:" data-id="7407">绘图员</a><a href="javascript:"
                                                                                data-id="7408">设备管理</a><a
                                    href="javascript:" data-id="7409">设备维修</a><a href="javascript:"
                                                                                 data-id="7410">工艺工程师</a><a
                                    href="javascript:" data-id="7411">工业工程师</a><a href="javascript:"
                                                                                  data-id="7412">材料工程师</a><a
                                    href="javascript:" data-id="7413">技术研发</a><a href="javascript:"
                                                                                 data-id="7414">技术研发经理/主管</a><a
                                    href="javascript:" data-id="7415">注塑工程师/技师</a><a href="javascript:" data-id="7416">焊接工程师/技师</a><a
                                    href="javascript:" data-id="7417">冲压工程师/技师</a><a href="javascript:" data-id="7418">锅炉工程师/技师</a><a
                                    href="javascript:" data-id="7499">其他（机械/设备）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="8000">建筑设计</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8001">总建筑师/设计总监</a><a href="javascript:" data-id="8002">建筑设计师</a><a
                                    href="javascript:" data-id="8003">绘图/效果图制作</a><a href="javascript:"
                                                                                     data-id="8004">规划设计师</a><a
                                    href="javascript:" data-id="8005">方案设计师</a><a href="javascript:"
                                                                                  data-id="8006">结构设计师</a><a
                                    href="javascript:" data-id="8007">暖通设计师</a><a href="javascript:"
                                                                                  data-id="8008">给排水设计师</a><a
                                    href="javascript:" data-id="8009">电气设计师</a><a href="javascript:"
                                                                                  data-id="8010">幕墙设计师</a><a
                                    href="javascript:" data-id="8011">施工图设计师</a><a href="javascript:"
                                                                                   data-id="8012">园林/景观设计</a><a
                                    href="javascript:" data-id="8099">其他（建筑设计）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8100">建筑工程</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8101">总工程师/工程总监</a><a href="javascript:"
                                                                                      data-id="8102">工程经理</a><a
                                    href="javascript:" data-id="8103">建筑工程师/建造师</a><a href="javascript:"
                                                                                      data-id="8104">招投标</a><a
                                    href="javascript:" data-id="8105">配套工程师</a><a href="javascript:"
                                                                                  data-id="8106">开发报建</a><a
                                    href="javascript:" data-id="8107">预结算/造价</a><a href="javascript:"
                                                                                   data-id="8108">土建工程师</a><a
                                    href="javascript:" data-id="8109">安装工程师</a><a href="javascript:"
                                                                                  data-id="8110">路桥/市政工程师</a><a
                                    href="javascript:" data-id="8111">岩土工程师</a><a href="javascript:"
                                                                                  data-id="8112">智能楼宇</a><a
                                    href="javascript:" data-id="8113">测绘/测量</a><a href="javascript:"
                                                                                  data-id="8114">施工员</a><a
                                    href="javascript:" data-id="8115">施工管理/工长</a><a href="javascript:"
                                                                                    data-id="8116">资料员</a><a
                                    href="javascript:" data-id="8117">采购/材料</a><a href="javascript:"
                                                                                  data-id="8118">安全员</a><a
                                    href="javascript:" data-id="8119">质检员</a><a href="javascript:"
                                                                                data-id="8120">监理工程师</a><a
                                    href="javascript:" data-id="8121">建筑机电工程师</a><a href="javascript:" data-id="8122">给排水/暖通工程</a><a
                                    href="javascript:" data-id="8123">幕墙工程师</a><a href="javascript:"
                                                                                  data-id="8124">建筑工程验收</a><a
                                    href="javascript:" data-id="8125">建筑安装施工员</a><a href="javascript:"
                                                                                    data-id="8126">砌筑工</a><a
                                    href="javascript:" data-id="8127">瓦工</a><a href="javascript:"
                                                                               data-id="8128">混凝土工</a><a
                                    href="javascript:" data-id="8129">浇注工</a><a href="javascript:"
                                                                                data-id="8130">钢筋工</a><a
                                    href="javascript:" data-id="8199">其他（建筑工程）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8200">营销/策划/销售</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8201">营销/策划总监</a><a href="javascript:" data-id="8202">营销/策划经理</a><a
                                    href="javascript:" data-id="8203">营销/策划专员</a><a href="javascript:" data-id="8204">置业顾问/房产经纪人</a><a
                                    href="javascript:" data-id="8205">销售经理</a><a href="javascript:"
                                                                                 data-id="8206">招商专员</a><a
                                    href="javascript:" data-id="8207">招商经理</a><a href="javascript:"
                                                                                 data-id="8208">权证员</a><a
                                    href="javascript:" data-id="8299">其他（营销/策划/销售）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8400">装饰装修</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8401">设计总监</a><a href="javascript:"
                                                                                 data-id="8402">设计经理/主管</a><a
                                    href="javascript:" data-id="8403">设计师/高级设计师</a><a href="javascript:" data-id="8404">家装设计师</a><a
                                    href="javascript:" data-id="8405">工装设计师</a><a href="javascript:"
                                                                                  data-id="8406">软装设计师</a><a
                                    href="javascript:" data-id="8407">绘图员</a><a href="javascript:"
                                                                                data-id="8408">家装顾问</a><a
                                    href="javascript:" data-id="8409">工程/项目总监</a><a href="javascript:" data-id="8410">工程/项目经理</a><a
                                    href="javascript:" data-id="8411">工程监理</a><a href="javascript:"
                                                                                 data-id="8412">施工员</a><a
                                    href="javascript:" data-id="8413">水电工</a><a href="javascript:" data-id="8414">木工</a><a
                                    href="javascript:" data-id="8415">泥工</a><a href="javascript:" data-id="8416">资料员</a><a
                                    href="javascript:" data-id="8417">材料专员/经理</a><a href="javascript:" data-id="8499">其他（装饰装修）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8300">物业</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8301">物业经理/主管</a><a href="javascript:"
                                                                                    data-id="8302">物管员</a><a
                                    href="javascript:" data-id="8303">招商/租售</a><a href="javascript:"
                                                                                  data-id="8304">综合维修工</a><a
                                    href="javascript:" data-id="8305">水电维修工</a><a href="javascript:"
                                                                                  data-id="8308">保安经理</a><a
                                    href="javascript:" data-id="8306">保安</a><a href="javascript:" data-id="8307">保洁员</a><a
                                    href="javascript:" data-id="8399">其他（物业）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="9000">银行</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9001">行长/副行长</a><a href="javascript:" data-id="9002">业务部门经理/主管</a><a
                                    href="javascript:" data-id="9003">客户经理</a><a href="javascript:"
                                                                                 data-id="9004">综合业务专员</a><a
                                    href="javascript:" data-id="9005">风险控制</a><a href="javascript:"
                                                                                 data-id="9006">信审核查</a><a
                                    href="javascript:" data-id="9007">大堂经理</a><a href="javascript:"
                                                                                 data-id="9008">资产评估/分析</a><a
                                    href="javascript:" data-id="9009">信贷管理</a><a href="javascript:"
                                                                                 data-id="9010">银行柜员</a><a
                                    href="javascript:" data-id="9011">信用卡销售</a><a href="javascript:"
                                                                                  data-id="9099">其他（银行）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9100">金融/证券/投资</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9101">投融资专员</a><a href="javascript:"
                                                                                  data-id="9102">投融资经理/主管</a><a
                                    href="javascript:" data-id="9103">证券分析师</a><a href="javascript:"
                                                                                  data-id="9104">金融产品经纪人</a><a
                                    href="javascript:" data-id="9105">投资银行业务</a><a href="javascript:"
                                                                                   data-id="9106">金融操盘手</a><a
                                    href="javascript:" data-id="9107">金融研究员</a><a href="javascript:" data-id="9108">投资/基金项目经理</a><a
                                    href="javascript:" data-id="9109">投资顾问</a><a href="javascript:"
                                                                                 data-id="9110">风控专员</a><a
                                    href="javascript:" data-id="9111">金融产品经理</a><a href="javascript:" data-id="9112">拍卖/担保/典当</a><a
                                    href="javascript:" data-id="9199">其他（金融/证券/投资）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9200">保险</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9201">保险经纪人/客户经理</a><a href="javascript:"
                                                                                       data-id="9202">理财顾问</a><a
                                    href="javascript:" data-id="9203">保险业务经理</a><a href="javascript:"
                                                                                   data-id="9204">保险理赔</a><a
                                    href="javascript:" data-id="9205">车险专员</a><a href="javascript:"
                                                                                 data-id="9206">客户服务/续期管理</a><a
                                    href="javascript:" data-id="9207">保险培训师</a><a href="javascript:"
                                                                                  data-id="9208">保险内勤</a><a
                                    href="javascript:" data-id="9209">保险产品开发</a><a href="javascript:"
                                                                                   data-id="9299">其他（保险）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="9500">广告</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9501">广告客户总监</a><a href="javascript:"
                                                                                   data-id="9502">广告销售经理</a><a
                                    href="javascript:" data-id="9503">广告客户专员</a><a href="javascript:"
                                                                                   data-id="9504">广告创意总监</a><a
                                    href="javascript:" data-id="9505">广告创意/设计</a><a href="javascript:"
                                                                                    data-id="9506">美术指导</a><a
                                    href="javascript:" data-id="9507">文案策划</a><a href="javascript:" data-id="9508">广告执行/制作/安装</a><a
                                    href="javascript:" data-id="9509">会务/会展</a><a href="javascript:"
                                                                                  data-id="9599">其他（广告）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9600">设计</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9601">平面设计师</a><a href="javascript:"
                                                                                  data-id="9602">动画/3D设计</a><a
                                    href="javascript:" data-id="9603">网页设计</a><a href="javascript:"
                                                                                 data-id="9604">UI设计</a><a
                                    href="javascript:" data-id="9605">美工</a><a href="javascript:"
                                                                               data-id="9606">装修设计</a><a
                                    href="javascript:" data-id="9607">家具设计</a><a href="javascript:"
                                                                                 data-id="9608">原画师</a><a
                                    href="javascript:" data-id="9609">家居用品设计</a><a href="javascript:"
                                                                                   data-id="9610">服装设计</a><a
                                    href="javascript:" data-id="9611">建筑设计</a><a href="javascript:"
                                                                                 data-id="9612">工艺品/珠宝设计</a><a
                                    href="javascript:" data-id="9613">工业设计</a><a href="javascript:"
                                                                                 data-id="9614">店面/展览设计</a><a
                                    href="javascript:" data-id="9615">设计经理/主管</a><a href="javascript:"
                                                                                    data-id="9616">设计总监</a><a
                                    href="javascript:" data-id="9699">其他（设计）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9700">影视/媒体</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9701">编导/导演</a><a href="javascript:"
                                                                                  data-id="9702">主持人/司仪</a><a
                                    href="javascript:" data-id="9703">演员/模特</a><a href="javascript:"
                                                                                  data-id="9704">摄像/摄影</a><a
                                    href="javascript:" data-id="9705">化妆师/造型师</a><a href="javascript:"
                                                                                    data-id="9706">影视策划</a><a
                                    href="javascript:" data-id="9707">后期制作/剪辑师</a><a href="javascript:"
                                                                                     data-id="9708">经纪人</a><a
                                    href="javascript:" data-id="9709">灯光师</a><a href="javascript:"
                                                                                data-id="9799">其他（影视/媒体）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="9800">写作/出版/印刷</a></th>
                        <td>
                            <div><a href="javascript:" data-id="9801">编辑</a><a href="javascript:"
                                                                               data-id="9802">美术编辑</a><a
                                    href="javascript:" data-id="9803">记者</a><a href="javascript:"
                                                                               data-id="9804">校对/录入</a><a
                                    href="javascript:" data-id="9805">排版设计</a><a href="javascript:"
                                                                                 data-id="9806">制版/印刷操作</a><a
                                    href="javascript:" data-id="9899">其他（写作/出版/印刷）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="8500">餐饮/娱乐</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8501">餐饮/娱乐管理</a><a href="javascript:" data-id="8502">大堂经理/领班</a><a
                                    href="javascript:" data-id="8503">厨师长/行政总厨</a><a href="javascript:"
                                                                                     data-id="8504">厨师</a><a
                                    href="javascript:" data-id="8513">打荷/杂工</a><a href="javascript:"
                                                                                  data-id="8514">切菜/配菜</a><a
                                    href="javascript:" data-id="8515">送餐员</a><a href="javascript:"
                                                                                data-id="8516">面点师</a><a
                                    href="javascript:" data-id="8517">咖啡师</a><a href="javascript:"
                                                                                data-id="8505">服务员</a><a
                                    href="javascript:" data-id="8506">传菜员</a><a href="javascript:"
                                                                                data-id="8507">迎宾/接待</a><a
                                    href="javascript:" data-id="8508">调酒师/吧台员</a><a href="javascript:"
                                                                                    data-id="8509">茶艺师</a><a
                                    href="javascript:" data-id="8510">学徒</a><a href="javascript:" data-id="8511">洗碗工</a><a
                                    href="javascript:" data-id="8512">收银员</a><a href="javascript:"
                                                                                data-id="8599">其他（餐饮/娱乐）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8600">酒店/旅游</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8601">酒店管理</a><a href="javascript:"
                                                                                 data-id="8602">大堂经理/领班</a><a
                                    href="javascript:" data-id="8603">酒店销售</a><a href="javascript:"
                                                                                 data-id="8604">前台接待</a><a
                                    href="javascript:" data-id="8605">预定员</a><a href="javascript:"
                                                                                data-id="8606">服务员</a><a
                                    href="javascript:" data-id="8607">行李员</a><a href="javascript:" data-id="8608">保安</a><a
                                    href="javascript:" data-id="8609">保洁员</a><a href="javascript:"
                                                                                data-id="8610">旅游销售</a><a
                                    href="javascript:" data-id="8611">旅游计调</a><a href="javascript:"
                                                                                 data-id="8612">导游</a><a
                                    href="javascript:" data-id="8613">宴会管理</a><a href="javascript:"
                                                                                 data-id="8614">楼面经理</a><a
                                    href="javascript:" data-id="8615">客房服务</a><a href="javascript:"
                                                                                 data-id="8616">签证专员</a><a
                                    href="javascript:" data-id="8617">票务</a><a href="javascript:"
                                                                               data-id="8618">机场代表</a><a
                                    href="javascript:" data-id="8619">船员/海员</a><a href="javascript:" data-id="8699">其他（酒店/旅游）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8700">美容/健身/运动</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8701">美容师/化妆师</a><a href="javascript:"
                                                                                    data-id="8702">美容顾问</a><a
                                    href="javascript:" data-id="8703">美甲师</a><a href="javascript:"
                                                                                data-id="8704">发型师</a><a
                                    href="javascript:" data-id="8705">宠物美容</a><a href="javascript:"
                                                                                 data-id="8706">按摩/足疗</a><a
                                    href="javascript:" data-id="8707">健身顾问</a><a href="javascript:"
                                                                                 data-id="8708">健身教练</a><a
                                    href="javascript:" data-id="8709">体育运动教练</a><a href="javascript:"
                                                                                   data-id="8710">瑜伽老师</a><a
                                    href="javascript:" data-id="8711">舞蹈老师</a><a href="javascript:"
                                                                                 data-id="8712">彩妆培训师</a><a
                                    href="javascript:" data-id="8713">发型助理/学徒</a><a href="javascript:"
                                                                                    data-id="8714">游泳教练</a><a
                                    href="javascript:" data-id="8715">救生员</a><a href="javascript:"
                                                                                data-id="8716">高尔夫教练</a><a
                                    href="javascript:" data-id="8799">其他（美容/美发/按摩）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8800">保安/家政</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8801">保安经理</a><a href="javascript:"
                                                                                 data-id="8802">保安</a><a
                                    href="javascript:" data-id="8803">搬运工</a><a href="javascript:"
                                                                                data-id="8804">保洁员</a><a
                                    href="javascript:" data-id="8805">保姆/护工</a><a href="javascript:"
                                                                                  data-id="8806">月嫂</a><a
                                    href="javascript:" data-id="8807">钟点工</a><a href="javascript:"
                                                                                data-id="8808">育婴师/保育员</a><a
                                    href="javascript:" data-id="8899">其他（保安/家政）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="8900">百货/零售</a></th>
                        <td>
                            <div><a href="javascript:" data-id="8901">店长</a><a href="javascript:"
                                                                               data-id="8902">卖场经理</a><a
                                    href="javascript:" data-id="8903">品类经理</a><a href="javascript:"
                                                                                 data-id="8904">营业员</a><a
                                    href="javascript:" data-id="8905">导购员</a><a href="javascript:"
                                                                                data-id="8906">防损员</a><a
                                    href="javascript:" data-id="8907">收银员</a><a href="javascript:" data-id="8908">收货员/理货员/陈列员</a><a
                                    href="javascript:" data-id="8909">食品加工/处理</a><a href="javascript:"
                                                                                    data-id="8910">招商人员</a><a
                                    href="javascript:" data-id="8911">督导</a><a href="javascript:"
                                                                               data-id="8912">驻店销售</a><a
                                    href="javascript:" data-id="8999">其他（百货/零售）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011700">婚庆/活动</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011701">主持人/司仪</a><a href="javascript:"
                                                                                     data-id="011702">演员/模特</a><a
                                    href="javascript:" data-id="011703">摄像/摄影</a><a href="javascript:" data-id="011704">化妆师/造型师</a><a
                                    href="javascript:" data-id="011705">影视策划</a><a href="javascript:" data-id="011706">后期制作/剪辑师</a><a
                                    href="javascript:" data-id="011707">灯光师</a><a href="javascript:"
                                                                                  data-id="011708">DJ</a><a
                                    href="javascript:" data-id="011709">驻唱/歌手</a><a href="javascript:"
                                                                                    data-id="011710">舞蹈演员</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="010000">医药</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010001">医药研发</a><a href="javascript:" data-id="010002">生物工程/生物制药</a><a
                                    href="javascript:" data-id="010003">化学分析员</a><a href="javascript:" data-id="010004">药品临床实验</a><a
                                    href="javascript:" data-id="010005">药品生产</a><a href="javascript:" data-id="010006">药品质量管理</a><a
                                    href="javascript:" data-id="010007">医药招商</a><a href="javascript:" data-id="010008">药品市场推广</a><a
                                    href="javascript:" data-id="010009">医药代表</a><a href="javascript:" data-id="010010">医药销售经理/主管</a><a
                                    href="javascript:" data-id="010011">药店店长</a><a href="javascript:"
                                                                                   data-id="010012">药店营业员</a><a
                                    href="javascript:" data-id="010099">其他（医药）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010100">医疗器械</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010101">医疗器械研发</a><a href="javascript:"
                                                                                     data-id="010102">医疗器械临床实验</a><a
                                    href="javascript:" data-id="010103">医疗设备生产/质量管理</a><a href="javascript:"
                                                                                          data-id="010104">医疗器械市场推广</a><a
                                    href="javascript:" data-id="010105">医疗器械销售</a><a href="javascript:"
                                                                                     data-id="010106">医疗器械维修/售后</a><a
                                    href="javascript:" data-id="010199">其他（医疗器械）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010200">医生/技师</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010201">内科医生</a><a href="javascript:"
                                                                                   data-id="010202">外科医生</a><a
                                    href="javascript:" data-id="010203">麻醉医生</a><a href="javascript:"
                                                                                   data-id="010204">妇产科医生</a><a
                                    href="javascript:" data-id="010205">五官科医生</a><a href="javascript:"
                                                                                    data-id="010206">儿科医生</a><a
                                    href="javascript:" data-id="010207">中医医生</a><a href="javascript:"
                                                                                   data-id="010208">放射科医生</a><a
                                    href="javascript:" data-id="010209">B超医生</a><a href="javascript:"
                                                                                   data-id="010210">整形/美容</a><a
                                    href="javascript:" data-id="010211">专科医生</a><a href="javascript:" data-id="010212">综合门诊/全科医生</a><a
                                    href="javascript:" data-id="010213">针灸/推拿</a><a href="javascript:"
                                                                                    data-id="010214">理疗师</a><a
                                    href="javascript:" data-id="010215">检验/化验</a><a href="javascript:"
                                                                                    data-id="010216">药剂师</a><a
                                    href="javascript:" data-id="010299">其他（医生）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010300">医院管理/护理</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010301">医院管理人员</a><a href="javascript:"
                                                                                     data-id="010302">护士长</a><a
                                    href="javascript:" data-id="010303">护士</a><a href="javascript:"
                                                                                 data-id="010304">医助</a><a
                                    href="javascript:" data-id="010305">导医</a><a href="javascript:" data-id="010399">其他（医院管理/护理）</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="010400">销售/市场</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010401">咨询总监</a><a href="javascript:" data-id="010402">咨询经理/主管</a><a
                                    href="javascript:" data-id="010403">专业顾问/咨询</a><a href="javascript:"
                                                                                      data-id="010404">招生顾问</a><a
                                    href="javascript:" data-id="010405">课程顾问</a><a href="javascript:" data-id="010406">调研员/市场专员</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010500">教师/教务</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010501">校长/园长</a><a href="javascript:"
                                                                                    data-id="010502">教务管理</a><a
                                    href="javascript:" data-id="010503">教务人员</a><a href="javascript:" data-id="010504">班主任/辅导员</a><a
                                    href="javascript:" data-id="010505">中学教师</a><a href="javascript:"
                                                                                   data-id="010506">小学教师</a><a
                                    href="javascript:" data-id="010507">幼教/早教</a><a href="javascript:" data-id="010508">职业技术教师</a><a
                                    href="javascript:" data-id="010509">家教</a><a href="javascript:"
                                                                                 data-id="010510">兼职教师</a><a
                                    href="javascript:" data-id="010511">英语教师</a><a href="javascript:"
                                                                                   data-id="010512">音乐教师</a><a
                                    href="javascript:" data-id="010513">美术教师</a><a href="javascript:"
                                                                                   data-id="010514">舞蹈教师</a><a
                                    href="javascript:" data-id="010515">体育老师/教练</a><a href="javascript:"
                                                                                      data-id="010516">托管老师</a><a
                                    href="javascript:" data-id="010517">钢琴老师</a><a href="javascript:" data-id="010599">其他（教师）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010600">培训</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010601">培训讲师</a><a href="javascript:"
                                                                                   data-id="010602">培训助理</a><a
                                    href="javascript:" data-id="010603">学习管理师</a><a href="javascript:" data-id="010604">培训经理/主管</a><a
                                    href="javascript:" data-id="010699">其他（培训）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010700">其他专业服务</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010701">外语翻译</a><a href="javascript:" data-id="010702">猎头/人才中介</a><a
                                    href="javascript:" data-id="010703">律师/法务咨询</a><a href="javascript:"
                                                                                      data-id="010704">财务/会计</a><a
                                    href="javascript:" data-id="010705">心理咨询师</a><a href="javascript:" data-id="010706">企业管理咨询师</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="010800">能源/电力/矿产</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010801">电力/电气工程师</a><a href="javascript:"
                                                                                       data-id="010802">电气维修技术员</a><a
                                    href="javascript:" data-id="010803">水利/水电工程师</a><a href="javascript:"
                                                                                       data-id="010804">制冷/暖通工程师</a><a
                                    href="javascript:" data-id="010805">石油/天然气/煤炭技术人员</a><a href="javascript:"
                                                                                            data-id="010806">新能源工程师</a><a
                                    href="javascript:" data-id="010899">其他（能源/电力/矿产）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="010900">化工</a></th>
                        <td>
                            <div><a href="javascript:" data-id="010901">化工工程师</a><a href="javascript:" data-id="010902">化工实验室研究员</a><a
                                    href="javascript:" data-id="010903">涂料研发工程师</a><a href="javascript:"
                                                                                      data-id="010904">食品/饮料研发</a><a
                                    href="javascript:" data-id="010905">安全工程师</a><a href="javascript:" data-id="010999">其他（化工）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="7800">服装/纺织</a></th>
                        <td>
                            <div><a href="javascript:" data-id="7801">服装设计师</a><a href="javascript:"
                                                                                  data-id="7802">工艺师</a><a
                                    href="javascript:" data-id="7803">打样/制版</a><a href="javascript:"
                                                                                  data-id="7804">电脑放码员</a><a
                                    href="javascript:" data-id="7805">质量管理</a><a href="javascript:"
                                                                                 data-id="7806">裁床</a><a
                                    href="javascript:" data-id="7807">缝纫工</a><a href="javascript:"
                                                                                data-id="7899">其他（服装/纺织）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011000">环保</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011001">环保工程师</a><a href="javascript:" data-id="011002">污水处理工程师</a><a
                                    href="javascript:" data-id="011003">环评工程师</a><a href="javascript:" data-id="011099">其他（环保）</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="011100">进出口</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011101">外贸经理/主管</a><a href="javascript:"
                                                                                      data-id="011102">外贸业务员</a><a
                                    href="javascript:" data-id="011103">跟单员</a><a href="javascript:"
                                                                                  data-id="011104">单证员</a><a
                                    href="javascript:" data-id="011105">报关/报检员</a><a href="javascript:"
                                                                                     data-id="011199">其他（进出口）</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011200">采购</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011201">采购经理/主管</a><a href="javascript:"
                                                                                      data-id="011202">采购员</a><a
                                    href="javascript:" data-id="011203">买手</a><a href="javascript:"
                                                                                 data-id="011204">供应商开发</a><a
                                    href="javascript:" data-id="011299">其他（采购）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011300">物流/仓储</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011301">物流经理/主管</a><a href="javascript:"
                                                                                      data-id="011302">物流专员</a><a
                                    href="javascript:" data-id="011303">快递员</a><a href="javascript:" data-id="011304">配货员/分拣员</a><a
                                    href="javascript:" data-id="011305">供应链管理</a><a href="javascript:"
                                                                                    data-id="011306">调度员</a><a
                                    href="javascript:" data-id="011307">货运代理业务</a><a href="javascript:"
                                                                                     data-id="011308">仓库主管/经理</a><a
                                    href="javascript:" data-id="011309">仓库管理员</a><a href="javascript:"
                                                                                    data-id="011310">搬运工</a><a
                                    href="javascript:" data-id="011311">船务/空运陆运操作</a><a href="javascript:"
                                                                                        data-id="011312">安检员</a><a
                                    href="javascript:" data-id="011399">其他（物流/仓储）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011400">司机</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011401">商务司机</a><a href="javascript:"
                                                                                   data-id="011402">客运司机</a><a
                                    href="javascript:" data-id="011403">货运司机</a><a href="javascript:"
                                                                                   data-id="011404">出租车司机</a><a
                                    href="javascript:" data-id="011405">特种车司机</a><a href="javascript:" data-id="011406">驾校教练/陪练</a><a
                                    href="javascript:" data-id="011407">代驾</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="display: none;" class="child_item" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><a href="javascript:" data-id="011500">农林牧渔</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011501">场长</a><a href="javascript:"
                                                                                 data-id="011502">农艺师</a><a
                                    href="javascript:" data-id="011503">饲养员</a><a href="javascript:"
                                                                                  data-id="011504">兽医</a><a
                                    href="javascript:" data-id="011599">其他（农林牧渔）</a></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="javascript:" data-id="011600">其他</a></th>
                        <td>
                            <div><a href="javascript:" data-id="011601">科研人员</a><a href="javascript:"
                                                                                   data-id="011602">储备干部</a><a
                                    href="javascript:" data-id="011603">兼职</a><a href="javascript:"
                                                                                 data-id="011604">实习生</a><a
                                    href="javascript:" data-id="011699">其他（其他职位）</a></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--<div class="hbJobSortDialog_btns">
    <a id="addFuliSave" href="javascript:void(0);" class="btn1 btnsF12 _dialogOk">确定</a>
    <a id="addFuliCancel" href="javascript:void(0);" class="btn3 btnsF12  dialogClose ">取消</a>
</div>-->
</body>
<script>
    //基于dialog.js控件的代码
    $('#addFuliCancel').click(function () {
        $(top.document).find('.dialog,#_mask').remove();
    });
    $('#addFuliSave').click(function () {

        if(top.$.__box&&top.$.__box.options.onok){
            var result=[];
            $('.jobTopResult span').each(function () {
                var that=this;
                result.push({id: $(that).attr('data-id'), name: $(that).attr('data-name')});
            });
            top.$.__box.options.onok(result);
            $(top.document).find('.dialog,#_mask').remove();
        }
    });
</script>
</html>