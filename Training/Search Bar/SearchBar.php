<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#s1").keyup(function() {
            $.ajax({
                type: "POST",
                url: "Searchdata.php",
                data: {
                    w: $("#s1").val()
                },
                success: function(d) {
                    if (d) {
                        $("#s2").text($v);
                        // $("#s1").append("d");
                    } else if (($("#s1").val()) == "") {
                        $("#s2").text("Enter a name");
                    } else {
                        $("#s2").text("No matching data found");
                    }
                }

            });
        });
    })
    </script>

</head>

<body>
    <div>
        <input type="text" id="s1" placeholder="Search..">
    </div>
    <br>
    <p id="s2"></p>
</body>

</html>
<!-- <html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            jQuery("#s1").keyup(function()
            {
                $.ajax({
                    type:"POST",
                    url:"searchdata.php",
                    data:{w:$("#s1").val()},
                    success:function(d){
                        jQuery("#s2").text(d);
                    }
                });
            });
        });
    </script>

    </head>
    <body>
        <input type="search" id="s1" placeholder="Search.." >
        <br>
        <span id="s2"></span>
    </body>
</html> -->