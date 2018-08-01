    <style>
        body {
            background-color: #013243;
            -webkit-transition: background-color 0.9s ease-in-out;
            -moz-transition: background-color 0.9s ease-in-out;
            -o-transition: background-color 0.9s ease-in-out;
            -khtml-transition: background-color 0.9s ease-in-out;
            transition: background-color 0.9s ease-in-out;
        }
    </style>
    <form class="form-signin">
        <div class="text-center mb-4">
         <h4 class="text-white">SMART TRAINING</h4>
        </div>
        
        <div class="form-label-group">
         <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
         <label for="inputEmail">Username</label>
        </div>
        
        <div class="form-label-group">
         <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
         <label for="inputPassword">Password</label>
        </div>
        
        <button class="btn btn-lg btn-white btn-block" type="submit"><i class="fa fa-sign-in-alt"></i> Masuk</button>
        <p class="mt-5 mb-3 text-white text-center">&copy; 2018 Lpk Global Alwakil</p>
    </form>
    <script>
        function changeColor(selector, colors, time) {
            var curCol = 0,
                timer = setInterval(function () {
                    if (curCol === colors.length) curCol = 0;
                    $(selector).css("background-color", colors[curCol]);
                    curCol++;
                }, time);
        }
       changeColor("body", ["#446CB3", "#336E7B", "#3A539B", "#013243"], 3000);
    </script>