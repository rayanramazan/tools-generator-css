<?php include'includes/nav.php'; ?>
<div class="main">
                <div class="controlers">
                    <div class="title">
                        سنوور
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            سنوور
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="100" value="8" id="borderWidth" steps="1">
                            </div>
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            سنوور
                        </div>

                        <div class="selectOtopn">
                            <select name="" id="">
                                <option value="">ستایل</option>
                                <option data-id="solid">solid</option>
                                <option data-id="dotted">dotted</option>
                                <option data-id="dashed">dashed</option>
                                <option data-id="double">double</option>
                                <option data-id="groove">groove</option>
                                <option data-id="ridge">ridge</option>
                                <option data-id="inset">inset</option>
                                <option data-id="outset">outset</option>
                                <option data-id="none">none</option>
                                <option data-id="hidden">hidden</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            سنوور
                        </div>
                        <div class="selectOtopn">
                            <input type="color" id="color">
                            <span id="txtColor">#000000</span>
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            سنوور
                        </div>
                        <div class="selectOtopn">
                            <input type="color" value="#ffffff" id="colorBackground">
                            <span id="txtBackground">#ffffff</span>
                        </div>
                    </div>

                    <div class="outPutCode">
                        <span id="box"></span>
                        <button id="btnCopeText">کۆپى</button>
                    </div>

                </div>
                <div class="viewOutput">
                    <div class="output" id="outputBorder"></div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function(){
            var choosen_color = "#000000";
            var background = "#ffffff";
            var styleBorder = "solid";
            var borderWidth = "8";

            $('#outputBorder').css({"border" : borderWidth+"px " + styleBorder + " " + choosen_color});
            $("#colorBackground").val("#ffffff");
            $("#box").text("border:" + borderWidth + "px " + styleBorder + " " + choosen_color 
                + ";" + "background: " + background + ";");

            $("#btnCopeText").on("click" , function(){
                var text = $("#box").text();
                var tempElement = $("<input>").val(text).appendTo("body").select();
                document.execCommand("copy");
                tempElement.remove();
                
                $("#btnCopeText").text("کۆپى کرا");
            });
            $('select').change(function(){
                // alert($(this).children('option:selected').data('id'));
                styleBorder = $(this).children('option:selected').data('id');
                $("#outputBorder").css("border-style", styleBorder);
                $("#box").text("border:" + borderWidth + "px " + styleBorder + " " + choosen_color 
                + ";" + " background: " + background + ";");
            });
            $('#borderWidth').on("input", function(){
                borderWidth = $("#borderWidth").val();
                $("#Grayscale").text(borderWidth + "px");

                $("#outputBorder").css("border-width", borderWidth);
                $("#box").text("border: " + borderWidth + "px " + styleBorder + " " + choosen_color 
                + ";" + " background: " + background + ";");
                $("#choosen-color").val("#" + color);
                $(".left").text(borderWidth);

            });
            $('#color').on('change',function(){
                $('#choosen-color').text($(this).val());
                choosen_color = $(this).val();
                $("#outputBorder").css("border-color", choosen_color);
                $("#box").text("border:" + borderWidth + "px " + styleBorder + " " + choosen_color 
                + ";" + " background: " + background + ";");
                $("#txtColor").text(choosen_color);
            });

            $('#colorBackground').on('change',function(){
                $('#choosen-color-background').text($(this).val());
                background = $(this).val();
                $("#outputBorder").css("background", background);
                $("#box").text("border:" + borderWidth + "px " + styleBorder + " " + choosen_color 
                + ";" + " background: " + background + ";");
                $("#txtBackground").text(background);
            });

            $("#box").on("click" , function(){
                var text = $("#box").val();
                var tempElement = $("<input>").val(text).appendTo("body").select();
                document.execCommand("copy");
                tempElement.remove();
            });

            $("#instagram").on("click" , function(){
                window.location.href= 'https://www.instagram.com/rayan._.ramazan/';
            });
            $("#telegram").on("click" , function(){
                window.location.href= 'https://t.me/rayankrd';
            });
            $("#facebook").on("click" , function(){
                window.location.href= 'https://www.facebook.com/rayan.kordesh.5/';
            });
        })
    </script>


<script>
    $("#menu").click(function(){
        $("section nav ul").toggleClass("active");
    })
</script>
    </section>

    <footer>
       <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
    </footer>

</body>

</html>