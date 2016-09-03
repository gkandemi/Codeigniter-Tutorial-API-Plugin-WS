<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>

        $(document).ready(function () {


            $("#get_list_btn").click(function(){

                var url = "http://localhost/jquery_json_parsing_database/welcome/get_product_list";

                $.post(url,{},function(response){

                    var rows = JSON.parse(response);

                    $(".items").html("");
                    $.each(rows, function(key,row){

                        $(".items").append("<li>" + row["title"] + "</li>");

                    })

                })


            })


        })

    </script>
    <style>

        .items{
            padding: 0px;
            margin: 0px;
            list-style: none;
            font-family: Arial;
        }

        .items li{
            width: 400px;
            padding: 5px 10px;
            background-color: #eee;
            margin-bottom: 5px;
        }

    </style>

</head>
<body>

<ul class="items">
<!--    --><?php //foreach ($rows as $row) { ?>
<!--        <li class="item">--><?php //echo $row->title; ?><!--</li>-->
<!--    --><?php //} ?>
</ul>


<button id="get_list_btn">Kayıtları Getir</button>


</body>
</html>