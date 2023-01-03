<?php include'includes/nav.php'; ?>
<style>
    #main {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #cont {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 6rem;
    }
</style>
<div class="main" id="main">
    <div class="controlers" id="cont">
        <div class="title">
            سنوور
        </div>

        <div class="form-control">
            <div class="title-control">
                پیشاندان
            </div>

            <div class="selectOtopn">
                <select name="" id="display">
                    <option data-id="flex">flex</option>
                    <option data-id="block">block</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                ئاڕاستە
            </div>

            <div class="selectOtopn">
                <select name="" id="direction">
                    <option data-id="row">Row</option>
                    <option data-id="row-reverse">Row Reverse</option>
                    <option data-id="column">Column</option>
                    <option data-id="column-reverse">Column Reverse</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                پێچانەوە
            </div>
            <div class="selectOtopn">
                <select name="" id="wrap">
                    <option data-id="wrap">Wrap</option>
                    <option data-id="nowrap">No Wrap</option>
                    <option data-id="wrap-reverse">Wrap Reverse</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                ڕەوایەتیدان بە ناوەڕۆک
            </div>
            <div class="selectOtopn">
                <select name="" id="justifyContent">
                    <option data-id="flex-start">Flex Start</option>
                    <option data-id="flex-end">Flex End</option>
                    <option data-id="center">Center</option>
                    <option data-id="space-between">Space Between</option>
                    <option data-id="space-around">Space Around</option>
                    <option data-id="stretch">Stretch</option>

                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                بابەتەکان ڕێکبخە
            </div>

            <div class="selectOtopn">
                <select name="" id="alignItems">
                    <option data-id="flex-start">Flex Start</option>
                    <option data-id="flex-end">Flex End</option>
                    <option data-id="center">Center</option>
                    <option data-id="baseline">Baseline</option>
                    <option data-id="stretch">Stretch</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="title-control">
                ناوەڕۆک ڕێکبخە
            </div>

            <div class="selectOtopn">
                <select name="" id="alignContent">
                    <option data-id="flex-start">Flex Start</option>
                    <option data-id="flex-end">Flex End</option>
                    <option data-id="center">Center</option>
                    <option data-id="space-between">Space Between</option>
                    <option data-id="space-around">Space Around</option>
                    <option data-id="stretch">Stretch</option>
                </select>
            </div>
        </div>

        <div class="outPutCode">
            <span id="box"></span>
            <button id="btnCopeText">کۆپى</button>
        </div>

    </div>
    <div class="viewOutput flex-output">
        <div class="one">1</div>
        <div class="two">2</div>
        <div class="three">3</div>
        <div class="four">4</div>
        <div class="five">5</div>
    </div>

    <script>
        var wrap = "wrap";
        var display = "flex";
        var direction = "row";
        var justifyContent = "space-between";
        var alignItems = "stretch";
        var alignContent = "stretch";
        $(document).ready(function () {
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        })
        $('#display').change(function () {
            display = $(this).children('option:selected').data('id');

            $(".flex-output").css("display", display);


            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#direction").change(function () {
            direction = $(this).children('option:selected').data('id');
            $(".flex-output").css("flex-direction", direction);
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#wrap").change(function () {
            wrap = $(this).children('option:selected').data('id');
            $(".flex-output").css("flex-wrap", wrap);
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#justifyContent").change(function () {
            justifyContent = $(this).children('option:selected').data('id');
            $(".flex-output").css("justify-content", justifyContent);
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#alignItems").change(function () {
            alignItems = $(this).children('option:selected').data('id');
            $(".flex-output").css("align-items", alignItems);
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#alignContent").change(function () {
            alignContent = $(this).children('option:selected').data('id');
            $(".flex-output").css("align-content", alignContent);
            $("#box").text("display: " + display + "; flex-direction:" + direction + "; flex-wrap: " + wrap +
                "; justify-content: " + justifyContent + "; align-items: " + alignItems +
                "; align-content: " + alignContent + ";");
        });
        $("#menu").click(function () {
            $("section nav ul").toggleClass("active");
        })
    </script>

    <style>
        .flex-output {
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: 70vh;
            align-items: stretch;
            margin: 0px 40px;
        }

        .flex-output div {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
        }

        .flex-output .one {
            width: 70px;
            height: 70px;
            background: rgba(89, 245, 240, 0.275);
        }

        .flex-output .two {
            width: 80px;
            height: 80px;
            background: rgba(89, 245, 240, 0.493);
        }

        .flex-output .three {
            width: 90px;
            height: 90px;
            background: rgba(89, 245, 240, 0.693);
        }

        .flex-output .four {
            width: 100px;
            height: 100px;
            background: rgba(89, 245, 240, 0.893);
        }

        .flex-output .five {
            width: 110px;
            height: 110px;
            background: rgb(89, 245, 240);
        }
    </style>
</div>
</div>

</section>

<footer>
    <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
</footer>

</body>

</html>