<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            رێکخستنى رەنگى تێکەڵ
        </div>

        <div class="form-control">
            <div class="title-control">
                پلە
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="360" value="90" id="slider1">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                ڕەنگى دەستپێکردن
            </div>
            <div class="selectOtopn">
                <input type="color" id="color1">
                <span id="choosen-color1">#21d4fd</span>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                ڕەنگى کۆتایى
            </div>
            <div class="selectOtopn">
                <input type="color" id="color2">
                <span id="choosen-color2"> #b721ff </span>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box">background: linear-gradient(90deg,#21d4fd 0%,#b721ff 100%)</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>
    <div class="viewOutput">
        <div class="output" id="output"
            style="background: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%); border-radius: 6px;"></div>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {

        $("#color1").val("#21D4FD");
        $("#choosen-color1").val("#21D4FD");
        $("#color2").val("#B721FF");
        $("#choosen-color2").val("#B721FF");

        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });

        $('#slider1,#color1, #color2').on("input", function () {
            var slider1 = $("#slider1").val();


            var color1 = $("#color1").val();
            var color2 = $("#color2").val();
            $("#choosen-color1").text(color1);
            $("#choosen-color2").text(color2);

            $("#output").css("background", "linear-gradient(" + slider1 + "deg, " + color1 + " 0% , " +
                color2 + " 100% )");

            $("#box").text("background:" + " linear-gradient(" + slider1 + "deg, " + color1 + " 0% , " +
                color2 + " 100% )");
        });

        $("#box").on("click", function () {
            var text = $("#box").val();
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