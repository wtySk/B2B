// JavaScript Document
//扎俊 修改版本
//仅做学习研究之用，修改者不承担版权相关责任。
Date.prototype.dateDiff = function (interval, objDate2) { var d = this, i = {}, t = d.getTime(), t2 = objDate2.getTime(); i['y'] = objDate2.getFullYear() - d.getFullYear(); i['q'] = i['y'] * 4 + Math.floor(objDate2.getMonth() / 4) - Math.floor(d.getMonth() / 4); i['m'] = i['y'] * 12 + objDate2.getMonth() - d.getMonth(); i['ms'] = objDate2.getTime() - d.getTime(); i['w'] = Math.floor((t2 + 345600000) / (604800000)) - Math.floor((t + 345600000) / (604800000)); i['d'] = Math.floor(t2 / 86400000) - Math.floor(t / 86400000); i['h'] = Math.floor(t2 / 3600000) - Math.floor(t / 3600000); i['n'] = Math.floor(t2 / 60000) - Math.floor(t / 60000); i['s'] = Math.floor(t2 / 1000) - Math.floor(t / 1000); return i[interval]; }

Date.prototype.DateAdd=function(strInterval,Number){var dtTmp=this;switch(strInterval){case's':return new Date(Date.parse(dtTmp)+(1000*Number));case'n':return new Date(Date.parse(dtTmp)+(60000*Number));case'h':return new Date(Date.parse(dtTmp)+(3600000*Number));case'd':return new Date(Date.parse(dtTmp)+(86400000*Number));case'w':return new Date(Date.parse(dtTmp)+((86400000*7)*Number));case'q':return new Date(dtTmp.getFullYear(),(dtTmp.getMonth())+Number*3,dtTmp.getDate(),dtTmp.getHours(),dtTmp.getMinutes(),dtTmp.getSeconds());case'm':return new Date(dtTmp.getFullYear(),(dtTmp.getMonth())+Number,dtTmp.getDate(),dtTmp.getHours(),dtTmp.getMinutes(),dtTmp.getSeconds());case'y':return new Date((dtTmp.getFullYear()+Number),dtTmp.getMonth(),dtTmp.getDate(),dtTmp.getHours(),dtTmp.getMinutes(),dtTmp.getSeconds());}}

Date.prototype.DateToParse=function(){var d=this;return Date.parse(d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate());}

function CreateCalendar(c, y, m,a, f,fu) {//c:容器,y:年,m:月,a:出发时间json,f:是否显示双日历,fu:回调
    //LC[c] = [c, y, m,  b, d,f, fu];
    var today = new Date();
    today = new Date(today.getFullYear(),today.getMonth(),today.getDate());
    if (y == 0 || m == 0) { y = today.getFullYear(); m = today.getMonth() + 1; };
	//var dmin=Date.parse(a.first().attr('d').replace(/-/g, '/')),dmax =Date.parse(a.last().attr('d').replace(/-/g, '/'));
	var dmin=a.d1.replace(/-/g,"/"),dmax =a.d2.replace(/-/g,"/");
	
    var i1 = 0, i2 = 0, i3 = 0, d2;
	var d1 = new Date(dmin), 
    today = today.DateToParse();
    if (Date.parse(d1.getFullYear() + '/' + (d1.getMonth() + 1) + '/1') > Date.parse(new Date(y,m-1,1))) {
        y = d1.getFullYear(); m = d1.getMonth() + 1;
   }
    $('#' + c).html('');
	//农历
	//var ca=new Calendar();
	tmp='';		
	for(var i=0;i<=f;i++){
		d1=new Date(y,m-1+i);
		y=d1.getFullYear();
		m=d1.getMonth() + 1;
		
		tmp += '<table cellpadding="0">';
		tmp += '<tr class="month"><th colspan="7"><div class="clearfix"><div class="prevMonth">';
		if(i==0){
			i1=Date.parse(y + '/' + m + '/1');
			d1 = new Date(dmin);
			if(Date.parse(d1.getFullYear() + '/' + (d1.getMonth() + 1) + '/1')<i1){
				d1 = new Date(y,m-2-f,1);
				tmp += '<a class="prev" href="javascript:;" onclick="CreateCalendar(para.c,' + d1.getFullYear() + ',' + (d1.getMonth() + 1) + ',para.a,para.f,para.fu);" title="上个月"></a>';
			}else{
				tmp += '<a class="prev0" href="javascript:;" title="上个月"></a>';
			}
		}
		tmp+='</div>';
		tmp += '<div class="dates"><em>' + y + '</em>年<em>' + m + '</em>月</div>';
		tmp+='<div class="nextMonth">';
		if(i==f){
			i1=Date.parse(y + '/' + m + '/1');
			d1 = new Date(dmax);
			i2=Date.parse(d1.getFullYear() + '/' + (d1.getMonth() + 1) + '/1');
			if(i2>i1){
				d1 = new Date(y,Date.parse(new Date(y,m+1,1))>i2?m-f:m,1);
				tmp += '<a class="next" href="javascript:;" onclick="CreateCalendar(para.c,' + d1.getFullYear() + ',' + (d1.getMonth() + 1) + ',para.a,para.f,para.fu);" title="下个月"></a>';
			}else{
				tmp += '<a class="next0" href="javascript:;" title="下个月"></a>';
			}
		}
		tmp += '</div></div></th></tr>';
		tmp += '  <tr class="week">';
		tmp += '    <th class="weekEnd">星期日</th>';
		tmp += '    <th>星期一</th>';
		tmp += '    <th>星期二</th>';
		tmp += '    <th>星期三</th>';
		tmp += '    <th>星期四</th>';
		tmp += '    <th>星期五</th>';
		tmp += '    <th class="weekEnd">星期六</th>';
		tmp += '  </tr>';
		var maxdays = (new Date(Date.parse(new Date(y,m,1)) - 86400000)).getDate();  //当前月的天数
		d1 = new Date(y,m-1); //要显示的日期
		i1 = d1.getDay(); //这个月的第一天是星期几
		for (var j = 1; j <= 6; j++) {
			tmp += '<tr>';
			for (var k = 1; k <= 7; k++) {
				i2 = (j - 1) * 7 + k - i1;
				if (i2 < 1 || i2 > maxdays) {
					tmp += '<td></td>';
				} else {
					i3 = Date.parse(new Date(y,m-1,i2));
					d1=new Date(i3);
					//农历(ll的值为农历)
					/*var ll=ca.getlf(d1);
					if(ll==''){
						ll=ca.getsf(d1);
						if(ll==''){
							ll=ca.getst(d1)	;
							if(ll=='')ll=ca.getls(d1)[3];
						}
					}*/
					tmp+='<td'
					if (today == i3){tmp+=' class="cur"'};
					if (i3 < dmin || i3 > dmax) {
						tmp += '><p><em class="day_a">' + i2 + '</em></td>';
					} else {
						tmp += ' week="' + (k - 1) + '" id="' + y + '-' + m + '-' + i2 + '"><p><em  class="day_a">' + i2 + '</em></p></td>';
						
					}
				}
			}
			tmp += '</tr>';
		}
		tmp += '</table>';
	
	}
    $('#' + c).append(tmp);
    if ($.isFunction(fu)){
		$('#' + c +' td').click(function (){ 
			fu(this);
			$(this).addClass('hover_two')
			$(this).siblings().removeClass('hover_two')
			$(this).parent('tr').siblings().children('td').removeClass('hover_two')
		}).hover(  function () {
			$(this).addClass("hover");
		  },
		  function () {
			$(this).removeClass("hover");
		  }
		);
	}
}