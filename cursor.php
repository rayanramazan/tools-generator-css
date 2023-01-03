<?php include'includes/nav.php'; ?>
<div class="main">
    <div class="controlers">
        <div class="title">
            سنوور
        </div>

        <div class="form-control">
            <div class="selectOtopn">
                <ul>
                    <li data-tableid="alias">alias</li>
                    <li data-tableid="all-scroll"> all-scroll </li>
                    <li data-tableid="auto"> auto </li>
                    <li data-tableid="cell"> cell </li>
                    <li data-tableid="context-menu"> context-menu </li>
                    <li data-tableid="col-resize"> col-resize </li>
                    <li data-tableid="copy"> copy </li>
                    <li data-tableid="crosshair"> crosshair </li>
                    <li data-tableid="default"> default </li>
                    <li data-tableid="e-resize"> e-resize </li>
                    <li data-tableid="ew-resize"> ew-resize </li>
                    <li data-tableid="grab"> grab </li>
                    <li data-tableid="grabbing"> grabbing </li>
                    <li data-tableid="help"> help </li>
                    <li data-tableid="move"> move </li>
                    <li data-tableid="n-resize"> n-resize </li>
                    <li data-tableid="ne-resize"> ne-resize </li>
                    <li data-tableid="nesw-resize"> nesw-resize </li>
                    <li data-tableid="ns-resize"> ns-resize </li>
                    <li data-tableid="nw-resize"> nw-resize </li>
                    <li data-tableid="nwse-resize"> nwse-resize </li>
                    <li data-tableid="no-drop"> no-drop </li>
                    <li data-tableid="none"> none </li>
                    <li data-tableid="not-allowed"> not-allowed </li>
                    <li data-tableid="pointer"> pointer </li>
                    <li data-tableid="progress"> progress </li>
                    <li data-tableid="row-resize"> row-resize </li>
                    <li data-tableid="s-resize"> s-resize </li>
                    <li data-tableid="se-resize"> se-resize </li>
                    <li data-tableid="sw-resize"> sw-resize </li>
                    <li data-tableid="text"> text </li>
                    <li data-tableid="vertical-text"> vertical-text </li>
                    <li data-tableid="w-resize"> w-resize </li>
                    <li data-tableid="wait"> wait </li>
                    <li data-tableid="zoom-in"> zoom-in </li>
                    <li data-tableid="zoom-out"> zoom-out </li>
                    <li data-tableid="initial"> initial </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="outPutCode cursor">
        <span id="box">cursor: alias;</span>
        <button id="btnCopeText">کۆپى</button>
    </div>

</div>
</div>

<script>
    $(document).ready(function () {

        var styleBorder;

        $("#btnCopeText").on("click", function () {
            var text = $("#box").text();
            var tempElement = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            tempElement.remove();

            $("#btnCopeText").text("کۆپى کرا");
        });

        $('li').mousemove(function () {
            styleBorder = $(this).closest('li').data('tableid');
            $("li").css("cursor", styleBorder);
            $("#box").text("cursor: " + styleBorder + ";");
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