<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            رێکخستنى سێبەرى سنووقى
        </div>

        <div class="form-control">
            <div class="title-control">
                درێژى سێبەرى ئاسۆیى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="-200" max="200" value="10" id="slider1">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                درێژى سێبەرى ستوونى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="-200" max="200" value="10" id="slider2">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                تەلخى سێبەر
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="400" value="2" id="slider3">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                بەڵاوکردنەوەى سێبەر
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="-200" max="200" value="2" id="slider4">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                بۆشایى رەنگى سێبەر
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="1" value="0.75" step="0.01" id="slider5">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                ڕەنگى سێبەر
            </div>
            <div class="selectOtopn">
                <input type="color" id="color1">
                <span id="choosen-color1">#000000</span>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box">box-shadow: 10px 10px 2px 2px rgba(0, 0, 0, 0.75);</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>

    <div class="viewOutput">
        <div class="output" id="output" style="box-shadow: 10px 10px 2px 2px rgba(0, 0, 0, 0.75); border-radius: 6px;">
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {

        var Horizontal = 10;
        var Vertical = 10;
        var Blur = 2;
        var Spread = 0.75;
        var color1 = "#000000";



        // convert hex to rgba

        function hexToRGB(hex, alpha) {
            var r = parseInt(hex.slice(1, 3), 16),
                g = parseInt(hex.slice(3, 5), 16),
                b = parseInt(hex.slice(5, 7), 16);

            if (alpha) {
                return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")";
            } else {
                return "rgb(" + r + ", " + g + ", " + b + ")";
            }
        }


        $("#output").css("box-shadow", Horizontal + "px " + Vertical + "px " + Blur + "px " + Spread + "px " +
            color1);

        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });


        $('#slider1, #slider2, #slider3, #slider4, #slider5, #color1').on("input", function () {
            var Horizontal = $("#slider1").val();
            var Vertical = $("#slider2").val();
            var Blur = $("#slider3").val();
            var Spread = $("#slider4").val();
            var Shadow = $("#slider5").val();
            var color1 = $("#color1").val();

            var rgba = hexToRGB(color1, Shadow);


            $("#Grayscale").text(Horizontal + "px");
            $("#Sepia").text(Vertical + "px");
            $("#Blur").text(Blur + "px");
            $("#Blur1").text(Spread + "px");
            $("#opacity").text(Shadow);
            $("#choosen-color1").text(color1);

            $("#output").css("box-shadow", Horizontal + "px " +
                Vertical + "px " +
                Blur + "px " +
                Spread + "px " +
                rgba
            );

            $("#box").text("box-shadow: " + Horizontal + "px " +
                Vertical + "px " +
                Blur + "px " +
                Spread + "px " +
                rgba + ";");
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