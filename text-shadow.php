<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            سنوور
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
                    <input type="range" min="-200" max="200" value="4" id="slider1">
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
                    <input type="range" min="-200" max="200" value="4" id="slider2">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                تاریککردنى سێبەر
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
                    <input type="range" min="0" max="1" value="0.60" step="0.01" id="slider5">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                ڕەنگى سێبەر
            </div>
            <div class="selectOtopn">
                <input type="color" id="color1">
                <span id="choosen-color1"> #000000 </span>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box">text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.6);</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>

    <div class="viewOutput">
        <h1 id="output">ئەم دەقە دەقى پێشبینییە</h1>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {


        var Horizontal = 4;
        var Vertical = 4;
        var Spread = 0.60;
        var color1 = "#000000";

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

        var rgba = hexToRGB(color1, Spread);

        $("#output").css("text-shadow", Horizontal + "px " + Vertical + "px " + rgba);


        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });

        $('#slider1, #slider2, #slider3, #slider5, #color1').on("input", function () {
            Horizontal = $("#slider1").val();
            Vertical = $("#slider2").val();
            Blur = $("#slider3").val();
            Shadow = $("#slider5").val();
            color1 = $("#color1").val();

            rgba = hexToRGB(color1, Shadow);

            $("#output").css("text-shadow", Horizontal + "px " + Vertical + "px " + Blur + "px " +
            rgba);


            $("#box").text("text-shadow: " + Horizontal + "px " + Vertical + "px " + Blur + "px " +
                rgba + ";");
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