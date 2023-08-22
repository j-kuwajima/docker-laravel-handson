function showCameraPermission(){
    var cameraDiralog = document.createElement("div");
    cameraDiralog.id = "cameraDiralog";
    cameraDiralog.style.cssText = "height:110%;width:100%;position:absolute;z-index:9999;";
    cameraDiralog.style.backgroundColor = "rgba(0,0,0,0.5)";
    cameraDiralog.innerHTML='<div style="background: white;width: fit-content;padding: 10px 24px;margin-left: auto;margin-right: auto;margin-top: 350px;display: flex;border-radius: 8px;"><img src="https://iconbox.fun/wp/wp-content/uploads/442_ca_f.svg" width="40px" style=" width: 30px; margin: 20px; margin-top: -30;margin-left: 0;"><div class="permission-message" style=" font-size: 20px; width: 180px; font-weight: 600; ">写真と動画の撮影をベスト電器に許可しますか？ <div style=" display: flex; color: #69ea69; font-size: 15px; margin-left: 35px; "> <div class="cansel" style=" margin: 0px 10px; " onclick="hideCameraPermission()"> 許可しない </div> <a href="QRコードスキャン.html" class="OK" style=" margin: 0px 10px;text-decoration: none;color:#69ea69 "> 許可 </a> </div></div></div>';
    var mainContents = document.getElementsByClassName("contents");
    document.body.before(cameraDiralog);

    document.addEventListener('touchmove', handle, { passive: false });
    document.addEventListener('mousewheel', handle, { passive: false });
  }
  function handle(event) {
    event.preventDefault();
}

function hideCameraPermission(){
  var cameraDiralog = document.getElementById("cameraDiralog");
  cameraDiralog.remove();
  document.removeEventListener('touchmove', handle, { passive: false });
  document.removeEventListener('mousewheel', handle, { passive: false })
}

var iPrevTime = null;
function formSubmit() {
if (iPrevTime == null) {
  iPrevTime = 1;
  return true;
}
else {
  return false;
}
}
$(function(){
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $('.s_02 .accordion_one .accordion_header').click(function(){
      //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
      $(this).next('.accordion_inner').slideToggle();
      $(this).toggleClass("open");
      //クリックされた.accordion_oneの中の.accordion_header以外の.accordion_oneの中の.accordion_headerに隣接する.accordion_oneの中の.accordion_innerを閉じる
      $('.s_02 .accordion_one .accordion_header').not($(this)).next('.accordion_one .accordion_inner').slideUp();
      $('.s_02 .accordion_one .accordion_header').not($(this)).removeClass("open");
    });
    });

    $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
                controls:false,
                captions:true,
                tickerHover:true,
                buildPager:'function'
            });
        });

    $('.slider').bxSlider



    function tieDisable(element_name,tie_value){
        var ele = document.getElementById(element_name);
        //ele.style.backgroundColor = "#f6f6f6";
        ele.value = tie_value;
        //ele.setAttribute("disabled", true);
    }

    function showUsePolicy() {
        var popup = document.getElementById('modal');
        if (!popup) return;
        var blackBg = document.getElementById('usePolicyModal');
        var policyBox = document.getElementById("policyBox");
        if (policyBox.checked) {
            policyBox.checked = false;
        } else {
            policyBox.checked = true;
        }

        popup.className += ' is-active';
        blackBg.className += ' is-active';
    }

    function hideUsePolicy() {
        var popup = document.getElementById('modal');
        if (!popup) return;
        var blackBg = document.getElementById('usePolicyModal');
        var policyBox = document.getElementById("policyBox");

        popup.removeClass("is-active");
        blackBg.removeClass("is-active");
    }

    function policyCheck() {
        var policyBox = document.getElementById("policyBox");
        var confirmBtn = document.getElementById("confirmBtn");
        if (policyBox.checked) {
            $("#confirmBtn").removeClass("button--disable");
        } else {
            $("#confirmBtn").addClass("button--disable");
        }
    }
        /* ================================================================ *
            ajaxzip3.js ---- AjaxZip3 郵便番号→住所変換ライブラリ

            Copyright (c) 2008-2015 Ninkigumi Co.,Ltd.
            http://ajaxzip3.github.io/

            Copyright (c) 2006-2007 Kawasaki Yusuke <u-suke [at] kawa.net>
            http://www.kawa.net/works/ajax/AjaxZip2/AjaxZip2.html

            Permission is hereby granted, free of charge, to any person
            obtaining a copy of this software and associated documentation
            files (the "Software"), to deal in the Software without
            restriction, including without limitation the rights to use,
            copy, modify, merge, publish, distribute, sublicense, and/or sell
            copies of the Software, and to permit persons to whom the
            Software is furnished to do so, subject to the following
            conditions:

            The above copyright notice and this permission notice shall be
            included in all copies or substantial portions of the Software.

            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
            EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
            OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
            NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
            HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
            WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
            FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
            OTHER DEALINGS IN THE SOFTWARE.
        * ================================================================ */
        AjaxZip3 = function () {};
        AjaxZip3.VERSION = "0.51";
        AjaxZip3.JSONDATA = "https://yubinbango.github.io/yubinbango-data/data";
        AjaxZip3.CACHE = [];
        AjaxZip3.prev = "";
        AjaxZip3.nzip = "";
        AjaxZip3.fzip1 = "";
        AjaxZip3.fzip2 = "";
        AjaxZip3.fpref = "";
        AjaxZip3.addr = "";
        AjaxZip3.fstrt = "";
        AjaxZip3.farea = "";
        AjaxZip3.ffocus = true;
        AjaxZip3.onSuccess = null;
        AjaxZip3.onFailure = null;
        AjaxZip3.PREFMAP = [null, "北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"];
        AjaxZip3.zip2addr = function (h, g, k, b, l, a, m) {
        AjaxZip3.fzip1 = AjaxZip3.getElementByName(h);
        AjaxZip3.fzip2 = AjaxZip3.getElementByName(g, AjaxZip3.fzip1);
        AjaxZip3.fpref = AjaxZip3.getElementByName(k, AjaxZip3.fzip1);
        AjaxZip3.faddr = AjaxZip3.getElementByName(b, AjaxZip3.fzip1);
        AjaxZip3.fstrt = AjaxZip3.getElementByName(a, AjaxZip3.fzip1);
        AjaxZip3.farea = AjaxZip3.getElementByName(l, AjaxZip3.fzip1);
        AjaxZip3.ffocus = m === undefined ? true : m;
        if (!AjaxZip3.fzip1) {
            return
        }
        if (!AjaxZip3.fpref) {
            return
        }
        if (!AjaxZip3.faddr) {
            return
        }
        var c = AjaxZip3.fzip1.value;
        if (AjaxZip3.fzip2 && AjaxZip3.fzip2.value) {
            c += AjaxZip3.fzip2.value
        }
        if (!c) {
            return
        }
        AjaxZip3.nzip = "";
        for (var f = 0; f < c.length; f++) {
            var d = c.charCodeAt(f);
            if (d < 48) {
            continue
            }
            if (d > 57) {
            continue
            }
            AjaxZip3.nzip += c.charAt(f)
        }
        if (AjaxZip3.nzip.length < 7) {
            return
        }
        var j = function () {
            var i = AjaxZip3.nzip + AjaxZip3.fzip1.name + AjaxZip3.fpref.name + AjaxZip3.faddr.name;
            if (AjaxZip3.fzip1.form) {
            i += AjaxZip3.fzip1.form.id + AjaxZip3.fzip1.form.name + AjaxZip3.fzip1.form.action
            }
            if (AjaxZip3.fzip2) {
            i += AjaxZip3.fzip2.name
            }
            if (AjaxZip3.fstrt) {
            i += AjaxZip3.fstrt.name
            }
            if (i == AjaxZip3.prev) {
            return
            }
            AjaxZip3.prev = i
        };
        var n = AjaxZip3.nzip.substr(0, 3);
        var e = AjaxZip3.CACHE[n];
        if (e) {
            return AjaxZip3.callback(e)
        }
        AjaxZip3.zipjsonpquery()
        };
        AjaxZip3.callback = function (h) {
        function d() {
            if (typeof AjaxZip3.onFailure === "function") {
            AjaxZip3.onFailure()
            }
        }
        var m = h[AjaxZip3.nzip];
        var e = (AjaxZip3.nzip - 0 + 4278190080) + "";
        if (!m && h[e]) {
            m = h[e]
        }
        if (!m) {
            d();
            return
        }
        var b = m[0];
        if (!b) {
            d();
            return
        }
        var o = AjaxZip3.PREFMAP[b];
        if (!o) {
            d();
            return
        }
        var c = m[1];
        if (!c) {
            c = ""
        }
        var r = m[2];
        if (!r) {
            r = ""
        }
        var f = m[3];
        if (!f) {
            f = ""
        }
        var q = AjaxZip3.faddr;
        var k = c;
        if (AjaxZip3.fpref.type == "select-one" || AjaxZip3.fpref.type == "select-multiple") {
            var a = AjaxZip3.fpref.options;
            for (var g = 0; g < a.length; g++) {
            var n = a[g].value;
            var p = a[g].text;
            a[g].selected = (n == b || n == o || p == o)
            }
        } else {
            if (AjaxZip3.fpref.name == AjaxZip3.faddr.name) {
            k = o + k
            } else {
            AjaxZip3.fpref.value = o;
            document.getElementById("prefLabel").innerHTML = o;
            }
        }
        if (AjaxZip3.farea) {
            q = AjaxZip3.farea;
            AjaxZip3.farea.value = r
        } else {
            k += r
        }
        if (AjaxZip3.fstrt) {
            q = AjaxZip3.fstrt;
            if (AjaxZip3.faddr.name == AjaxZip3.fstrt.name) {
            k = k + f
            } else {
            if (f) {
                AjaxZip3.fstrt.value = f
            }
            }
        }
        AjaxZip3.faddr.value = k;
        if (typeof AjaxZip3.onSuccess === "function") {
            AjaxZip3.onSuccess()
        }
        if (!AjaxZip3.ffocus) {
            return
        }
        if (!q) {
            return
        }
        if (!q.value) {
            return
        }
        var l = q.value.length;
        q.focus();
        if (q.createTextRange) {
            var j = q.createTextRange();
            j.move("character", l);
            j.select()
        } else {
            if (q.setSelectionRange) {
            q.setSelectionRange(l, l)
            }
        }
        };
        AjaxZip3.getResponseText = function (b) {
        var c = b.responseText;
        if (navigator.appVersion.indexOf("KHTML") > -1) {
            var a = escape(c);
            if (a.indexOf("%u") < 0 && a.indexOf("%") > -1) {
            c = decodeURIComponent(a)
            }
        }
        return c
        };
        AjaxZip3.getElementByName = function (d, b) {
        if (typeof (d) == "string") {
            var e = document.getElementsByName(d);
            if (!e) {
            return null
            }
            if (e.length > 1 && b && b.form) {
            var c = b.form.elements;
            for (var a = 0; a < c.length; a++) {
                if (c[a].name == d) {
                return c[a]
                }
            }
            } else {
            return e[0]
            }
        }
        return d
        };
        AjaxZip3.zipjsonpquery = function () {
        var a = AjaxZip3.JSONDATA + "/" + AjaxZip3.nzip.substr(0, 3) + ".js";
        var b = document.createElement("script");
        b.setAttribute("type", "text/javascript");
        b.setAttribute("charset", "UTF-8");
        b.setAttribute("src", a);
        document.getElementsByTagName("head").item(0).appendChild(b)
        };

        function $yubin(a) {
        AjaxZip3.callback(a)
        };
  

        window.addEventListener('DOMContentLoaded', function () {
            var yy_birth = document.getElementById("yy_birth");
            var mm_birth = document.getElementById("mm_birth");
            var dd_birth = document.getElementById("dd_birth");
            var zip = document.getElementById("zip");
            policyCheck();
            if (yy_birth != null) {
                changePulldown(yy_birth);
            }
            if (mm_birth != null) {
                changePulldown(mm_birth);
            }
            if (dd_birth != null) {
                changePulldown(dd_birth);
            }
            var pref = null;
            if (pref != null && zip.value != "") {
                document.getElementById("prefLabel").innerHTML = prefCodes[pref];
            }
            if (zip.value != "") {
                ziptoaddress(zip, 'pref', 'addr');
            }
        });