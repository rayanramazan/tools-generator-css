<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            رێکخستنى گۆڕان
        </div>

        <div class="form-control">
            <div class="title-control">
                سورانەوە
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="360" value="0" id="slider1">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                پێوەر
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" value="1" max="1.7" step="0.1" id="slider2">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                لادان
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="180" value="0" id="slider3">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                X وەرگێرانى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="-200" max="200" value="0" id="slider4">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                Y وەرگێرانى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="-200" max="200" value="0" id="slider5">
                </div>
            </div>
        </div>




        <div class="outPutCode">
            <span id="box">transform: rotate(0deg) scale(1) skew(0deg) translate(0px , 0px)</span>
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

        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });

        $('#slider1, #slider2, #slider3, #slider4, #slider5').on("input", function () {
            var rotate = $("#slider1").val();
            var scale = $("#slider2").val();
            var skew = $("#slider3").val();
            var translateY = $("#slider4").val();
            var translateX = $("#slider5").val();

            $("#output").css({
                "transform": "rotate(" + rotate + "deg)" +
                    " scale(" + scale + ")" +
                    " skew(" + skew + "deg)" +
                    " translate(" + translateX + "px , " + translateY + "px)"
            });


            $("#box").text("transform: " + "rotate(" + rotate + "deg)" +
                " scale(" + scale + ")" +
                " skew(" + skew + "deg)" +
                " translate(" + translateX + "px , " + translateY + "px)")
        });

        $("#box").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();
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


</section>

<footer>
    <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
</footer>

</body>

</html>