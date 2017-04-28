;(function  (global) {
    var pay = global.paypage = {};
    pay.init = function  () {
        this.autoRem();
    };
    pay.autoRem = function(){
        var oH = document.documentElement;
        oCLientWidth = oH.offsetWidth;
        /*oH.style.fontSize = oCLientWidth/320*100+'px';*/
        oH.style.fontSize = oCLientWidth/375*50+'px';
        this.rem = parseInt(oH.style.fontSize);
    };
    pay.init();
}(typeof window !=='undefined'?window : this))