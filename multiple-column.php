<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            سنوور
        </div>

        <div class="form-control">
            <div class="title-control">
                ژماردنى ستوونەکان
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="5" value="1" id="slider1">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                بۆشایى ستوونى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="50" value="15" id="slider2">
                </div>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                پانیى خەتی ستوونى
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="20" value="2" id="slider3">
                </div>
            </div>
        </div>


        <div class="form-control">
            <div class="title-control">
                ڕەنگى خەت
            </div>
            <div class="selectOtopn">
                <input type="color" id="color1">
                <span id="choosen-color1">#000000</span>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box">column-count: 1; column-gap: 15px; column-rule: 2px solid #000000;</span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>

    <style>
        .viewOutput p {
            padding: 10px;
        }
    </style>

    <div class="viewOutput">
        <p id="outputColumn">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit inventore commodi quas
            placeat repudiandae facilis, minima sint animi praesentium! At aut, quisquam aliquid repellat illo
            architecto, cum dignissimos numquam ratione voluptate maxime earum voluptatem qui vel dicta ab hic
            inventore, adipisci facere odio cumque necessitatibus veritatis natus corrupti! Sunt eveniet temporibus ut
            placeat vitae obcaecati optio quidem facilis! Ullam quo sequi voluptatibus sit consequatur doloremque ipsam
            distinctio impedit nisi veniam, esse neque, tempore magnam atque! Repudiandae error iste maiores molestiae
            dicta soluta harum temporibus repellat magni pariatur, accusamus laudantium beatae doloribus rerum porro
            amet, debitis nisi unde in! Suscipit necessitatibus eaque quae ducimus maxime nostrum vitae magnam,
            dignissimos quidem tempore sed vel nam officiis possimus porro placeat numquam accusamus obcaecati earum
            aliquam. Repellendus rerum fugiat sapiente placeat explicabo ipsa eius, iste et, nam quaerat repellat
            provident eum facilis quibusdam? Laudantium nobis, nostrum animi sint est magnam tenetur, necessitatibus
            iste quisquam nisi quibusdam quasi alias? Aperiam adipisci, vitae iure eaque magni in eum quos doloribus
            placeat omnis illo eligendi facilis. Laborum harum, qui optio architecto perferendis, natus mollitia sequi
            suscipit eum provident eligendi sapiente minus ad in laboriosam necessitatibus, cumque consequatur deserunt
            illo obcaecati earum quaerat quasi similique. Odit, id ullam.</p>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {

        $("#btnCopeText").on("click", function () {
            var text = $("#box").val();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });


        $('#slider1, #slider2, #slider3, #color1').on("input", function () {
            var Counts = $("#slider1").val();
            var Gaps = $("#slider2").val();
            var WidthRule = $("#slider3").val();
            var color1 = $("#color1").val();


            $("#Grayscale").text(Counts);
            $("#Sepia").text(Gaps + "px");
            $("#Blur").text(WidthRule + "px");
            $("#choosen-color1").text(color1);

            $("#outputColumn").css("column-count", Counts);
            $("#outputColumn").css("column-gap", Gaps + "px");
            $("#outputColumn").css("column-rule", WidthRule + "px solid " + color1);


            $("#box").text("column-count: " + Counts +
                "; column-gap: " + Gaps +
                "px; column-rule: " + WidthRule + "px solid " + color1 + ";");
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