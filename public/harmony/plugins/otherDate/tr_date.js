var nowDate = "",		            //左边的日历盒子
id = "",
$tid = "",
$tonid = "",
$new_fdate = "",
sql = "",
dprev = "",
lstrTd = "",					//左日期的行的DOM结构
lrows = 0,						//左日期行数
iHtmlNow = "",					//左边的日历结构
nowTitleDateY = "",				//左边标题年份
nowTitleDateM = "",				//左边显示的月份
nowlastM = "",					//左边的翻月显示
creatbtu = true,				//只创建一次HTML结构的开关
NumDay = 0,					    //左边每个月的天数;
lfday = 0,						//左边当前月份的第一天，是星期几
nowm = 0,
TimeJson = "",
IsLogin = "";
//创建日期行
function creatTr(l) {
    lstrTd = "";
    for (i = 0; i < l; i++) {
        lstrTd += "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>"
    }
}

/*创建当前和下一个月的日期和年份
*这里分三种情况，当前月为12月 当前月为11月，当前月为1月
*/
function getTitleDate(new_fdate) {
    var d_date = new_fdate;
    var d_date_year = new_fdate.substr(0, 4);    // 系统当前年份
    var d_date_month = new_fdate.substr(5, 2);    // 系统当前月份
    var d_date_date = new_fdate.substr(8, 2);   // 系统当前日
    //如果当前月是12月分，那么右边的月份，就应该是1月份
    if (parseInt(d_date_month) + 1 == 12) {
        nowTitleDateY = parseInt(d_date_year);
        nowTitleDateM = parseInt(d_date_month);
        nowLastM = nowTitleDateM - 1;
    } else if (parseInt(d_date_month) + 1 == 11) {
        nowTitleDateY = parseInt(d_date_year);
        nowTitleDateM = parseInt(d_date_month) + 1;
        nowLastM = nowTitleDateM - 1;
    } else if (parseInt(d_date_month) + 1 == 1) {
        nowTitleDateY = parseInt(d_date_year);
        nowTitleDateM = parseInt(d_date_month) + 1;
        nowLastM = 12;
    } else {
        nowTitleDateY = parseInt(d_date_year);
        nowTitleDateM = parseInt(d_date_month);
        nowLastM = nowTitleDateM - 1;;
    }
    //var odate = new Date();
    ////如果当前月是12月分，那么右边的月份，就应该是1月份
    //if (odate.getMonth() + 1 == 12) {
    //    nowTitleDateY = odate.getFullYear();
    //    nowTitleDateM = odate.getMonth() + 1;
    //    nowLastM = nowTitleDateM - 1;
    //} else if (odate.getMonth() + 1 == 11) {
    //    nowTitleDateY = odate.getFullYear();
    //    nowTitleDateM = odate.getMonth() + 1;
    //    nowLastM = nowTitleDateM - 1;
    //} else if (odate.getMonth() + 1 == 1) {
    //    nowTitleDateY = odate.getFullYear();
    //    nowTitleDateM = odate.getMonth() + 1;
    //    nowLastM = 12;
    //} else {
    //    nowTitleDateY = odate.getFullYear();
    //    nowTitleDateM = odate.getMonth() + 1;
    //    nowLastM = nowTitleDateM - 1;;
    //}
}

/*获取当前月份的一号，是星期几
*首先设置你创建日期对象的年份，月份，和你需要知道的日期数，把这些设置好之后，再使用getDay()方法，就可以获取你设置日期的，星期数了；
*/
function getfirstD(m1, y1) {//getfirstD(m1, y1, m2, y2) {
    var odatef = new Date(y1, m1 - 1, 1);
    //odatef.setFullYear(y1);
    //odatef.setMonth(m1 - 1)
    //odatef.setDate(1);
    lfday = odatef.getDay();
}

//根据大小月份取得天数
function getTdDay(m1, y1) {//getTdDay(m1, y1, m2, y2) {
    if (m1 == 1 || m1 == 3 || m1 == 5 || m1 == 7 || m1 == 8 || m1 == 10 || m1 == 12) {
        NumDay = 31;
    } else if (m1 == 4 || m1 == 6 || m1 == 9 || m1 == 11) {
        NumDay = 30;
    } else if (m1 == 2 && isRunYear(y1)) {
        NumDay = 29;
    } else if (m1 == 2) {
        NumDay = 28;
    }
}

//根据传入的年份参数，判断是否是润年，即能够被4整除，但不能被100整除，同时满足时；或者能被400整除；
function isRunYear(y) {
    if (y % 4 == 0 && y % 100 != 0) {
        return true;
    } else if (y % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

//创建HMTL结构
function creatHtml(creatbtu) {
    //根据当前月份的一号是星期几，来生成有几行存放所有日期
    if (lfday > 5) {
        lrows = 6;
    } else {
        lrows = 6;
    }
    creatTr(lrows);//creatTr(lrows, rrows);
    iHtmlNow = "<div class='title'><div class='pre'><img src=\"/Content/img/zjt.png\" alt=\"<<<\" /></div><div class='nowMonthTitle'>" + nowTitleDateM + "月 " + nowTitleDateY + "年</div><div class='next'><img src=\"/Content/img/yjt.png\" alt=\">>>\" /></div></div>" +
            "<table border='0' cellpadding='0' cellspacing='0' class='nowTable'>" + "<thead><tr><th  class='red'>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th  class='red'>六</th></tr></thead>" + "<tbody>" + lstrTd + "</tbody></table>"
}

//将日期插入到对应的TD当中
function insertdate(d) {

    $(id + " .nowDate table tbody td").each(function () {
        if ($(this).hasClass("d_current")) {
            $(this).removeClass("d_current");
        }
        $(this).attr("id", "");
        $(this).html("");
    });

    $(id + " .nowDate table tbody td").add($(id + " .nextDate table tbody td")).css({ "background-color": "", "color": "" }).empty();
    //插入到左边
    for (i = 0; i < NumDay; i++) {
        $(id + " div.nowDate table tbody td").eq(i + d).text(i + 1).attr("id", nowTitleDateY + "-" + padLeft("" + nowTitleDateM, 2) + "-" + padLeft("" + (i + 1), 2));
    }
}

function padLeft(str, lenght) {
    if (str.length >= lenght)
        return str;
    else
        return padLeft("0" + str, lenght);
}

//插入到DOM
function insertHtml() {
    nowDate.append(iHtmlNow);
}

//从DOM中删除
function delHtml() {
    nowDate.empty();
}

//天数和存放位置
function update() {
    //获得左和右的月份的天数
    getTdDay(nowTitleDateM, nowTitleDateY);

    //获得左和右的月份一号是星期几
    getfirstD(nowTitleDateM, nowTitleDateY);
}

//插入到日期数的TD当中
function insertTd() {
    //插入日期到左和右的表格TD当中
    insertdate(lfday);
}

//更新标题
function updateTitle() {
    dprev.html("<img src=\"/Content/img/zjt.png\" alt=\"<<<\" />")
    $(id + " .nowMonthTitle").text(nowTitleDateM + "月" + nowTitleDateY + "年");
}

//点击更新前一个月
function d_prveclick() {
    nowTitleDateM--;
    if (nowTitleDateM == 11) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 0) {
        nowTitleDateY--
        nowTitleDateM = 12;
        nowLastM = nowTitleDateM - 1;
    } else if (nowTitleDateM == 1) {
        nowLastM = 12;
    } else {
        nowLastM = nowTitleDateM - 1
    }

    //天数和存放位置
    update();

    //插入到日期数的TD当中					
    insertTd();

    //更新日期标题
    updateTitle();
    queryInfo($tid, $tonid, $new_fdate, $new_fdate);

}
//点击下一个月
function d_nextclick() {
    nowTitleDateM++;
    if (nowTitleDateM == 12) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 11) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 13) {
        nowTitleDateY++
        nowTitleDateM = 1;
        nowLastM = 12;
    } else if (nowTitleDateM == 1) {
        nowLastM = 12;
    } else {
        nowLastM = nowTitleDateM - 1
    }

    //天数和存放位置
    update();

    //插入到日期数的TD当中					
    insertTd();

    //更新日期标题
    updateTitle();
    queryInfo($tid, $tonid, $new_fdate, $new_fdate);
}
function queryInfo(tid, tonid, new_fdate, ndate) {
    var d_date = new_fdate;
    var d_date_year = new_fdate.substr(0, 4);    // 系统当前年份
    var d_date_month = new_fdate.substr(5, 2);    // 系统当前月份
    var d_date_date = new_fdate.substr(8, 2);   // 系统当前日
    $("td").each(function () {
        if ($(this).hasClass("d_current")) {
            $(this).removeClass("d_current");
        }
    });
    if (nowTitleDateY >= d_date_year && nowTitleDateM >= d_date_month) {
        if (nowTitleDateM > d_date_month) {
            d_date_date = 1;
        }
    }
    var date = new Date();
    var now_date = ndate; //d_date_year + "-" + padLeft("" + d_date_month, 2) + "-" + padLeft("" + d_date_date, 2);
    $(id + " div.nowDate table tbody td").each(function () {
        var td_id = $(this).attr("id");
        if (td_id < now_date) {
            $(this).css("color", "rgb(190,190,190)");
        }
        else {
            $(this).css("color", "");
        }
        if (td_id === now_date) {
            $(this).css("background-color", "rgb(224,224,224)");
            $(this).text("今天");
        } else {
            $(this).css("background-color", "");
        }

        //$(this).html("<span style='text-align:float'>" + $(this).html() + "</span>");
        $(this).css("text-align", "left");
        $(this).css("vertical-align", "top");

        if (TimeJson != null && TimeJson != "") {
            var dataObj = eval("(" + TimeJson + ")");
            for (var index in dataObj) {
                if (td_id == dataObj[index].BeginTime.substring(0, dataObj[index].BeginTime.indexOf("T"))) {
                    $(this).html($(this).html() + "");
                    if (dataObj[index].P_Tag == "推") {
                        $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='tj_span'>推</span>");
                    } else
                        if (dataObj[index].P_Tag == "惠") {
                            $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='hj_span'>惠</span>");
                        } else
                            if (dataObj[index].P_Tag == "新") {
                                $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='xj_span'>新</span>");
                            } else
                                if (dataObj[index].P_Tag == "补") {
                                    $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='bj_span'>补</span>");
                                }
                                else
                                    if (dataObj[index].P_Tag == "春") {
                                        $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='cj_span'>春</span>");
                                    }
                    //else {
                    //    $(this).html($(this).html() + "<span style='margin-right: -60px;margin-left: 42px;' class='bj_span'>无</span>");
                    //}

                    $(this).html($(this).html() + "</br><span style='font-size:12px;'>余位:" + dataObj[index].SurplusNum + "</br>价格:");
                    if (IsLogin == "0") {
                        $(this).html($(this).html() + dataObj[index].GDirectPrice + "</span>");
                    }
                    else {
                        $(this).html($(this).html() + dataObj[index].GAudltPrice + "</span>");
                    }
                    $(this).append("<input type='hidden' name='bTime' value='" + dataObj[index].BeginTime.substring(0, dataObj[index].BeginTime.indexOf("T")) + "'/>");
                    $(this).append("<input type='hidden' name='SurplusNum' value='" + dataObj[index].SurplusNum + "'/>");
                    $(this).append("<input type='hidden' name='GDirectPrice' value='" + dataObj[index].GDirectPrice + "'/>");
                    $(this).append("<input type='hidden' name='GAudltPrice' value='" + dataObj[index].GAudltPrice + "'/>");
                    $(this).append("<input type='hidden' name='PPBID' value='" + dataObj[index].ID + "'/>");
                    $(this).append("<input type='hidden' name='P_Tag' value='" + dataObj[index].P_Tag + "'/>");
                    $(this).click(function () {
                        $("#tone" + tonid).children("td").children("span[name='bTime']").html($(this).children("input[name='bTime']").val());
                        $("#tone" + tonid).children("td").children("span[name='SurplusNum']").html($(this).children("input[name='SurplusNum']").val());
                        $("#tone" + tonid).children("td").children("span[name='GDirectPrice']").html($(this).children("input[name='GDirectPrice']").val());
                        $("#tone" + tonid).children("td").children("span[name='GAudltPrice']").html($(this).children("input[name='GAudltPrice']").val());
                        $("tr[name='tone" + tid + "']").children("input[name='timeid']").val($(this).children("input[name='PPBID']").val());
                        //重新加载联系人
                        if (IsLogin == "1") {
                            ajaxGetDetail($(this).children("input[name='PPBID']").val());
                        }
                        var strhtml;
                        var ptag = $(this).children("input[name='P_Tag']").val();
                        if (ptag == "推") {
                            strhtml += "<span class='tj_span'>推</span>";
                        }
                        if (ptag == "惠") {
                            strhtml += "<span class='hj_span'>惠</span>";
                        }
                        if (ptag == "新") {
                            strhtml += "<span class='xj_span'>新</span>";
                        }
                        if (ptag == "补") {
                            strhtml += "<span class='bj_span'>补</span>";
                        }
                        if (ptag == "春") {
                            strhtml += "<span class='cj_span'>春</span>";
                        }
                        $("#tdProName" + tonid).html((strhtml + $("#tdProName" + tonid).html().substring($("#tdProName" + tonid).html().indexOf("</span>"))).replace("undefined", ""));
                        $("#dshow" + tonid).hide();
                        $(".nowDate").html("");
                    });
                }
            }
        }
    });
}


function start(did, tid, tonid, new_fdate, ndate, islogin) {

    //获得余位
    $.ajaxSettings.async = false;
    $.get("/Home/GetYW", { "Pid": tid }, function (data) {
        TimeJson = data;
    });
    id = did;
    $tid = tid;
    $tonid = tonid;
    $new_fdate = ndate;
    nowDate = $(did + " .nowDate");
    dprev = null;
    dnext = null;
    dprev = $(did + " .pre");
    dnext = $(did + " .next");
    dprev.die("click");
    dnext.die("click");
    dprev.live("click", d_prveclick);
    dnext.live("click", d_nextclick);
    IsLogin = islogin;
    //获得标题上面的年份和月份
    getTitleDate(new_fdate);

    ////天数和存放位置
    update()

    //创建HTML结构
    creatHtml();

    //将结构插入到DOM当中
    insertHtml();

    //插入到日期数的TD当中					
    insertTd()

    //展开日期
    queryInfo(tid, tonid, new_fdate, ndate);

}
function start_N(proid, did, ndate, datasql, system_time) {

    // 获得数据
     $.ajaxSettings.async = false;
     $.get("/Gys/GProductTourManage/GetYW", { "sql": datasql, "pid": did }, function (data) {
         TimeJson = data;
     });
    //TimeJson = data;
     sql = datasql;
    id = proid;
    $tid = did;
    $tonid = did;
    $new_fdate = system_time;
    nowDate = $(proid + " .nowDate");
    dprev = null;
    dnext = null;
    dprev = $(proid + " .pre");
    dnext = $(proid + " .next");
    dprev.die("click");
    dnext.die("click");
    dprev.live("click", d_prveclick_N);
    dnext.live("click", d_nextclick_N);

    //获得标题上面的年份和月份
    getTitleDate(ndate);

    ////天数和存放位置
    update()

    //创建HTML结构
    creatHtml();

    //将结构插入到DOM当中
    insertHtml();

    //插入到日期数的TD当中					
    insertTd()

    //展开日期
    queryInfo_N(ndate, system_time);

}
function queryInfo_N(ndate, system_time) {
    var d_date = ndate;
    var d_date_year = ndate.substr(0, 4);    // 系统当前年份
    var d_date_month = ndate.substr(5, 2);    // 系统当前月份
    var d_date_date = ndate.substr(8, 2);   // 系统当前日
    $("td").each(function () {
        if ($(this).hasClass("d_current")) {
            $(this).removeClass("d_current");
        }
    });
    if (nowTitleDateY >= d_date_year && nowTitleDateM >= d_date_month) {
        if (nowTitleDateM > d_date_month) {
            d_date_date = 1;
        }
    }
    var date = new Date();
    var now_date = system_time; //d_date_year + "-" + padLeft("" + d_date_month, 2) + "-" + padLeft("" + d_date_date, 2);
    $(id + " div.nowDate table tbody td").each(function () {
        var td_id = $(this).attr("id");
        if (td_id < now_date) {
            $(this).css("color", "rgb(190,190,190)");
        }
        else {
            $(this).css("color", "");
        }
        if (td_id === now_date) {
            $(this).css("background-color", "rgb(224,224,224)");
            $(this).text("今天");
        } else {
            $(this).css("background-color", "");
        }

        //$(this).html("<span style='text-align:float'>" + $(this).html() + "</span>");
        $(this).css("text-align", "left");
        $(this).css("vertical-align", "top");

        if (TimeJson != null && TimeJson != "") {
            var groups = TimeJson.split(";");
            for (var i = 0; i < groups.length; i++) {
                var group = groups[i].split(",");
                if (td_id == group[1]) {
                    $(this).html($(this).html() + "</br><a href=\"javascript:void(0);\" id='jw" + group[0] + "' AttachCompanyId='" + group[5] + "' proid='" + id + "'  style='font-size:12px;' onclick=\"cpairMask($(this),'" + group[0] + "')\">余位:" + group[4] + "</a>"
                        + "</br><a href=\"javascript:void(0);\"  id='jg" + group[0] + "' proid='" + id + "' AttachCompanyId='" + group[5] + "' style='font-size:12px;' onclick=\"cppriceMask($(this),'" + group[0] + "')\">价格:" + group[2] + "</a>");

                }
            }
        }
    });
}

function d_nextclick_N() {
    $.ajaxSettings.async = false;
    $.get("/Gys/GProductTourManage/GetYW", { "sql": sql, "pid": $tid }, function (data) {
        TimeJson = data;
    });

    nowTitleDateM++;
    if (nowTitleDateM == 12) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 11) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 13) {
        nowTitleDateY++
        nowTitleDateM = 1;
        nowLastM = 12;
    } else if (nowTitleDateM == 1) {
        nowLastM = 12;
    } else {
        nowLastM = nowTitleDateM - 1
    }

    //天数和存放位置
    update();

    //插入到日期数的TD当中					
    insertTd();

    //更新日期标题
    updateTitle();
    //queryInfo($tid, $tonid, $new_fdate, $new_fdate);
    queryInfo_N($new_fdate, $new_fdate);
}
//点击更新前一个月
function d_prveclick_N() {
    $.ajaxSettings.async = false;
    $.get("/Gys/GProductTourManage/GetYW", { "sql": sql, "pid": $tid }, function (data) {
        TimeJson = data;
    });
    nowTitleDateM--;
    if (nowTitleDateM == 11) {
        nowLastM = nowTitleDateM - 1
    } else if (nowTitleDateM == 0) {
        nowTitleDateY--
        nowTitleDateM = 12;
        nowLastM = nowTitleDateM - 1;
    } else if (nowTitleDateM == 1) {
        nowLastM = 12;
    } else {
        nowLastM = nowTitleDateM - 1
    }

    //天数和存放位置
    update();

    //插入到日期数的TD当中					
    insertTd();

    //更新日期标题
    updateTitle();
    //queryInfo($tid, $tonid, $new_fdate, $new_fdate);
    queryInfo_N($new_fdate, $new_fdate);

}

function closeThis(e) {
    $(e).parents(".datebox").hide();
    window.location.reload();
}

