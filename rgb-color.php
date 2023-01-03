<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            رێکخستنى ڕەنگ
        </div>

        <div class="form-control">
            <div class="title-control">
                سۆر
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="255" value="0" id="slider1">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                سەوز
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="255" value="0" id="slider2">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                شین
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="255" value="0" id="slider3">
                </div>
            </div>
        </div>




        <div class="outPutCode">
            <span id="box">background:rgb(0,0,0);</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>

    <div class="viewOutput">
        <div class="output" id="output" style="background: #000; border-radius: 6px;"></div>
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
        $('#slider1, #slider2, #slider3, #slider4').on("input", function () {
            var r = $("#slider1").val();
            var g = $("#slider2").val();
            var b = $("#slider3").val();

            $("#red").text(r);
            $("#blue").text(b);
            $("#green").text(g);
            $("#output").css("background", "rgb(" + r + "," + g + "," + b + ")");
            $("#box").text("background:" + "rgb(" + r + "," + g + "," + b + ");");


        });
        $("#box").on("click", function () {
            var text = $("#box").val();
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

<script>
    $("#menu").click(function () {
        $("section nav ul").toggleClass("active");
    })
</script>
<footer>
    <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
</footer>

</body>

</html>