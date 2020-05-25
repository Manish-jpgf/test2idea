<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='style_ideas.css'>
</head>
<body>

    <section id="header">
        <div class="container">
            <img src="images/logo.png" class="logo">
        </div>
    </section>
    <nav id="sideNav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="ideas.php">Find ideas</a></li>
            <li><a href="consultingidea.php">Find consulting Idea</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menuBtn">
    
    <div class="container">
        <h1 class="text-center"><b>The Business Idea Generator</b></h1>
        <h1 class="text-center">(Generate tons of business ideas quickly)</h1><br>
        <p class="text-center">Click “Generate” to get ideas:</p><br>
        <div class="text-center idea-bg"><br>
            <button class="btn btn-light .btn-lg" id="displayidea"><b><h3>Generate Your Million Dollar Idea</h3><b></button><br><br>
            <div id="response"></div><br>
        </div>
    </div>

     <!--footer-->

     <section id="footer">
        <div class="container footer-row">
            <hr>
            <div class="footer-left-col">
                <div class="footer-links">
                    <div class="link-title">
                        <h4>Product</h4>
                        <small>Our Plan</small><br>
                        <small>Free Trail</small>
                    </div>
                    <div class="link-title">
                        <h4>About Us</h4>
                        <small>Request demo</small><br>
                        <small>FAQS</small>
                    </div>
                    <div class="link-title">
                        <h4>Support</h4>
                        <small>Features</small><br>
                        <small>Contact us</small>
                    </div>
                    <div class="link-title">
                        <h4>Explore</h4>
                        <small>find non profit</small><br>
                        <small>corparate solution</small>
                    </div>
                </div>
            </div>
            <div class="footer-right-col">
                <div class="footer-info">
                    <div class="copyright-text">
                        <small>Support@Xypo.com</small><br>
                        <small>Copyright 2020 Xypo</small>
                    </div>
                    <div class="footer-logo">
                        <img src="images/logo.png" alt="">
                        <button class="common-btn"> English </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#displayidea').click(function(){
            $.ajax({
                url: 'display_idea.php',
                type: 'post',
                success : function(responsedata){
                    $('#response').html(responsedata)
                }
            });
        });
        });
       

        var menuBtn = document.getElementById('menuBtn')
        var sideNav = document.getElementById('sideNav')

        sideNav.style.right = '-250px'
        menuBtn.onclick = function() {
            if (sideNav.style.right == '-250px') {
                sideNav.style.right = '0'
            } else {
                sideNav.style.right = '-250px'
            }
        }

    </script>

</body>
</html>

