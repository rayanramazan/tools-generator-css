<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            رێکخستنى چەماندنەوە
        </div>

        <div class="form-control">
            <div class="title-control">
                چەماندنەوەى سەرەوەى ڕاست
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" id="slider1" min="0" max="100" value="0">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                چەماندنەوەى سەرەوەى چەپ
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" id="slider2" min="0" max="100" value="0">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                چەماندنەوەى خوارەوەى ڕاست
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" id="slider3" min="0" max="100" value="0">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                چەماندنەوەى خوارەوەى چەپ
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" id="slider4" min="0" max="100" value="0">
                </div>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box">background: #fff;</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>

    <div class="viewOutput">
        <div class="output" id="output" style=" background: rgba(255, 255, 255, 0.45);
                    box-shadow: 0 8px 32px 0 rgba(31, 119, 135, 0.37);
                    backdrop-filter: blur(0px);
                    -webkit-backdrop-filter: blur(0px);"></div>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {

        $("#box").text("border-radius: 0% 0% 0% 0%;");
        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });

        $('#slider1, #slider2, #slider3, #slider4').on("input", function () {
            var slider1 = $("#slider1").val();
            var slider2 = $("#slider2").val();
            var slider3 = $("#slider3").val();
            var slider4 = $("#slider4").val();

            $("#topRight").text(slider1 + "%");
            $("#topLeft").text(slider2 + "%");
            $("#bottomLeft").text(slider3 + "%");
            $("#bottomRight").text(slider4 + "%");

            $("#output").css("border-top-right-radius", slider1 + "%");
            $("#output").css("border-top-left-radius", slider2 + "%");
            $("#output").css("border-bottom-right-radius", slider3 + "%");
            $("#output").css("border-bottom-left-radius", slider4 + "%");
            $("#box").text("border-radius:" + slider1 + "% " + slider2 + "% " + slider3 + "% " +
                slider4 + "%;")
        });

        $("#box").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#box").css("background", "#A0D468");

        });

        $("#instagram").on("click", function () {
            window.location.href = 'https://www.instagram.com/rayan._.ramazan/';
        });
        $("#telegram").on("click", function () {
            window.location.href = 'https://t.me/rayankrd';
        });
        $("#facebook").on("click", function () {
            window.location.href = 'https://www.facebook.com/rayan.kordesh.5/';
        });
    })
</script>

<script>
    $("#menu").click(function () {
        $("section nav ul").toggleClass("active");
    })
</script>
</section>

<footer>
    <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
</footer>

</body>

</html>