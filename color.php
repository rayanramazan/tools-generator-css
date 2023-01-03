<?php include'includes/nav.php'; ?>
<div class="main">

    <style>
        .cards {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .cards .card {
            width: 200px;
            margin: 10px;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px 0 rgba(31, 119, 135, 0.37);
            backdrop-filter: blur(0px);
            -webkit-backdrop-filter: blur(0px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .cards .card .color {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cards .card .color .colorOne {
            width: 50%;
            height: 60px;
            border-top-left-radius: 10px;
        }

        .cards .card .color .colorTwo {
            width: 50%;
            height: 60px;
            border-top-right-radius: 10px;
        }

        .cards .card .titleColor {
            display: flex;
            flex-direction: column;
            padding: 0 8px;
            color: #fff;
        }

        @media only screen and (max-width: 797px) {
            .cards .card {
                width: 40%;
            }
        }

        @media only screen and (max-width: 520px) {
            .cards .card {
                width: 100%;
            }
        }
    </style>
    <div class="cards">
    </div>
</div>
</div>

<script>
    var color_one = ["#5D9CEC", "#4FC1E9", "#48CFAD",
        "#A0D468", "#FFCE54", "#FC6E51",
        "#ED5565", "#AC92EC", "#EC87C0",
        "#F5F7FA", "#CCD1D9", "#656D78"
    ];
    var color_two = ["#4A89DC", "#3BAFDA", "#37BC9B",
        "#8CC152", "#F6BB42", "#E9573F",
        "#DA4453", "#967ADC", "#D770AD",
        "#E6E9ED", "#AAB2BD", "#434A54"
    ];

    var color_name = ["BLUE JEANS", "AQUA", "MINT",
        "GRASS", "SUNFLOWER", "BITTERSWEET",
        "GRAPEFRUIT", "LAVENDER", "PINK ROSE",
        "LIGHT GRAY", "MEDIUM GRAY", "DARK GRAY"
    ];

    for (let i = 0; i <= 11; i++) {
        $(".cards").append("<div class='card'><div class='color'><div class='colorOne' style='background: " + color_one[
                i] + "'></div><div class='colorTwo' style='background: " + color_two[i] +
            "'></div></div><div class='titleColor'><h2>" + color_name[i] + "</h2><span>" + color_one[i] + " , " +
            color_two[i] + "</span></div></div>");
    }
    $("#menu").click(function () {
        $("section nav ul").toggleClass("active");
    })
</script>

</section>

<footer>
    <a href="">رەیان رەمەزان</a> <span>پرۆگراممەر</span>
</footer>

</body>

</html>