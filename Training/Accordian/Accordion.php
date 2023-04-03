<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="Accordian.css">
        <script>
            $(document).ready(function(){
                // $(".b3").each(function(){
                    $(".b3").click(function(){
                        $(this).next().slideToggle();
                        // $(this).next().css("background-color","blue");
                    });
                    $(".ic").mouseenter(function(){
                        $(this).parent().css("background-color","lightblue");
                    });
                    $(".ic").mouseout(function(){
                        $(this).parent().css("background-color","white");
                    });
                // });
            });
        </script>
    </head>
    <body>
        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>

        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>
        
        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>

        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>

        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>

        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>

        <button id="b1" class="b3">B!11
            <span class="material-symbols-outlined ic"> arrow_drop_down </span>
        </button>
        <div class="div1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt qui dicta vel libero sequi modi tempora fugit minus expedita amet!
        </div>
        
    </body>
</html>