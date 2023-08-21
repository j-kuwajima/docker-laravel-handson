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