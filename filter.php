<?php include'includes/nav.php'; ?>
<div class="main">
                <div class="controlers">
                    <div class="title">
                        رێکخستنى فلتەر
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            پێوەرى خۆڵەمێشى
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="100" value="0" id="slider1">
                            </div>
                        </div>
                    </div>

        <div class="form-control">
            <div class="title-control">
                سپیا
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="100" value="0" id="slider2">
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="title-control">
                تەلخ
            </div>
            <div class="range">
                <div class="sliderValue">
                    <span id="num">100</span>
                </div>
                <div class="field">
                    <input type="range" min="0" max="10" value="0" id="slider3">
                </div>
            </div>
        </div>

                    <div class="form-control">
                        <div class="title-control">
                            درەوشانەوە
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="200" value="100" id="slider4">
                            </div>
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="title-control">
                            سووڕاندنى ڕەنگ
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">0°</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="360" value="0" id="slider5">
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-control">
                        <div class="title-control">
                            تێرکردن
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="1000" value="100" id="slider6">
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-control">
                        <div class="title-control">
                            بۆشایى
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="100" value="100" id="slider7">
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-control">
                        <div class="title-control">
                            پێککەوتن
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="1000" value="100" id="slider8">
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-control">
                        <div class="title-control">
                            هەڵگەڕان
                        </div>
                        <div class="range">
                            <div class="sliderValue">
                                <span id="num">100</span>
                            </div>
                            <div class="field">
                                <input type="range" min="0" max="100" value="0" id="slider9">
                            </div>
                        </div>
                    </div>


                    <div class="outPutCode">
                        <span id="box">filter: grayscale(0%)blur(0px)sepia(0%)brightness(100%)hue-rotate(0deg)saturate(100%)opacity(100%)contrast(100%)invert(0%);</span>
                        <button id="btnCopeText">کۆپى</button>
                    </div>

                </div>

                <div class="viewOutput">
                    <img src="img/bg.jpg" class="output" id="img" alt="" srcset="">
                </div>
            </div>
        </div>

        <script>
            const slideValue = document.querySelector("#num");
            const inputSlider = document.querySelector("#slider1");
            inputSlider.oninput = (()=>{
              let value = inputSlider.value;
              slideValue.textContent = value;
              slideValue.style.left = (value/2) + "%";
              slideValue.classList.add("show");
            });
            inputSlider.onblur = (()=>{
              slideValue.classList.remove("show");
            });
          </script>

        <script>
            $(document).ready(function(){

                $("#btnCopeText").on("click" , function(){
                    var text = $("#box").text();
                    var tempElement = $("<input>").val(text).appendTo("body").select();
                    document.execCommand("copy");
                    tempElement.remove();
                    
                    $("#btnCopeText").text("کۆپى کرا");
                });

                $('#slider1, #slider2, #slider3, #slider4, #slider5, #slider6, #slider7, #slider8, #slider9').on("input", function(){
                    var Grayscale = $("#slider1").val();
                    var Sepia = $("#slider2").val();
                    var Blur = $("#slider3").val();
                    var Brightness = $("#slider4").val();
                    var Hue_Rotate = $("#slider5").val();
                    var Saturate = $("#slider6").val();
                    var Opacity = $("#slider7").val();
                    var Contrast = $("#slider8").val();
                    var Invert = $("#slider9").val();

                    $("#img").css({
                        "filter" : "grayscale(" + Grayscale + "%)"+
                                    "blur(" + Blur + "px)"+
                                    "sepia(" + Sepia + "%)"+
                                    "brightness(" + Brightness + "%)"+
                                    "hue-rotate(" + Hue_Rotate + "deg)"+
                                    "saturate(" + Saturate + "%)"+
                                    "opacity(" + Opacity + "%)"+
                                    "contrast(" + Contrast + "%)"+
                                    "invert(" + Invert + "%)"

                    });
                    $("#box").text("filter: " + "grayscale(" + Grayscale + "%)"+
                                    "blur(" + Blur + "px)"+
                                    "sepia(" + Sepia + "%)"+
                                    "brightness(" + Brightness + "%)"+
                                    "hue-rotate(" + Hue_Rotate + "deg)"+
                                    "saturate(" + Saturate + "%)"+
                                    "opacity(" + Opacity + "%)"+
                                    "contrast(" + Contrast + "%)"+
                                    "invert(" + Invert + "%);")
                });

                $("#box").on("click" , function(){
                    var text = $("#box").text();
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


    </section>


    <script>
        $("#menu").click(function(){
            $("section nav ul").toggleClass("active");
        })
    </script>
    
    <footer>
       <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
    </footer>

</body>

</html>