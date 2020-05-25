<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="text-center"><b>The Consulting Idea Generator</b></h1>
        <h1 class="text-center">(Generate tons of Consulting ideas quickly)</h1><br>
        <p class="text-center">Click “Generate” to get ideas:</p><br>
        <div class="text-center idea-bg"><br>
            <button class="btn btn-light .btn-lg" id="displayidea"><b><h4>Generate Your Passionate Consulting Idea</h4><b></button><br><br>
            <div id="response"></div><br>
        </div>
    </div>

    <style>
        .idea-bg{
            background-color: #f67c92
        }
    </style>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#displayidea').click(function(){
            $.ajax({
                url: 'display_consulting_idea.php',
                type: 'post',
                success : function(responsedata){
                    $('#response').html(responsedata)
                }
            });
        });
        });
       

    </script>

</body>
</html>

