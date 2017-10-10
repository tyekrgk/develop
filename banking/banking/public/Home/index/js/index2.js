//@charset "gbk"
function GetCookie(a) {
		var b = "",
			a = a + "=";
		if (0 < document.cookie.length && (offset = document.cookie.indexOf(a), -1 != offset)) {
			offset += a.length;
			end = document.cookie.indexOf(";", offset);
			if (-1 == end) end = document.cookie.length;
			b = unescape(document.cookie.substring(offset, end))
		}
		return b
	}

var index = {
    username: unescape(unescape(GetCookie("escapename"))),
    init : function (){
        this.triggerAddStockEvent();
    },

    triggerAddStockEvent: function() {
        $("body").on("click", ".j_addStock", function(){
            TA.log({id:'qs_add', nj:1});
            if (index.checkLogin()) {
                var stockcode = $(this).parent("td").siblings("td").eq(1).text();
                var stockname = $(this).parent("td").siblings("td").eq(2).text();
                index.addStock(stockcode, stockname);
            }
        });
        this.closeAlertBox();
    },
    
    /**
     * �ж���¼״̬�����ѵ�����λ����Ļ�м�
     */
    checkLogin : function () {
        if (!this.username) {
//            var $loginBox = $("#loginBox");
//            //�ѵ�����λ����Ļ�м�
//            $loginBox.css('top',$(window).height()/2 + $(window).scrollTop() + 'px').show();
        	window.location.href = 'http://upass.10jqka.com.cn/login?redir=HTTP_REFERER';
            return false;
        }
        return true;
    },
    /**
     * �رյ���
     */
    closeAlertBox: function() {
        $("body").on("click", ".alert_box .close", function(){
            $(this).parents(".alert_box").hide();
            clearTimeout(index.t);
        });
    },
    /**
     * �����ѡ��
     */
    addStock: function (stockcode,stockname) {
        $.ajax({
            url : "http://q.10jqka.com.cn/api.php?t=myStocks&op=add&stockcode="+stockcode,
            type : "get",
            dataType : "json",
            success : function (msg) {
                if (msg.success == 1) {
                    $("#resBox .warn_con p").html("���ѳɹ�����Ʊ<a target='_blank' href='http://stockpage.10jqka.com.cn/"+stockcode+"/'>"+stockname+"("+stockcode+")</a>������ѡ�ɣ�")
                } else if(msg.success == -2) {
                    $("#resBox .warn_con p").html("��Ʊ<a target='_blank' href='http://stockpage.10jqka.com.cn/"+stockcode+"/'>"+stockname+"("+stockcode+")</a>����������ѡ���У�")
                } else {
                    $("#resBox .warn_con p").html("����ʧ�ܣ������ԣ�")
                }
                $("#resBox").css('top',$(window).height()/2 + $(window).scrollTop() + 'px').show();
                index.t = setTimeout("$('#resBox').hide();",5000);
                return false;
            }
        })
    }

};


$(function() {
    index.init();
})