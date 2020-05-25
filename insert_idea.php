<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="text-center"> INSERT MILLION DOLLAR IDEAS</h1>
        <br>
        <form action="insert_ideas.php" id="myform" method="post">
            <div class="form-group">
                <label for=""> Idea-part-1 :</label>
                <input type="text" name="idea" class="form-control" placeholder="Start a">
            </div>
            <div class="form-group">
                <label for=""> Idea-par-2 :</label>
                <input type="text" name="idea2" class="form-control"  placeholder="business For">
            </div>
            <input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">
        </form>
    </div>


    <div class="container">
        <h1 class="text-center"> INSERT Consulting IDEAS</h1>
        <br>
        <form action="insert_ideas.php" id="myform1" method="post">
            <div class="form-group">
                <label for=""> Idea-part-1 :</label>
                <input type="text" name="c_idea" class="form-control" placeholder="For">
            </div>
            <div class="form-group">
                <label for=""> Idea-par-2 :</label>
                <input type="text" name="c_idea2" class="form-control"  placeholder="I will">
            </div>
            <div class="form-group">
                <label for=""> Idea-par-2 :</label>
                <input type="text" name="c_idea3" class="form-control"  placeholder="in">
            </div>
            <input type="submit" name="c_submit" id="c_submit" value="submit" class="btn btn-success">
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            var form = $('#myform');
            $('#submit').click(function(){
                $.ajax({
                    url: form.attr("action"),
                    type: 'post',
                    data: $('#myform input').serialize(),
                    success : function(data){
                        console.log(data);
                    }
                });
            });

            var form = $('#myform1');
            $('#c_submit').click(function(){
                $.ajax({
                    url: form.attr("action"),
                    type: 'post',
                    data: $('#myform1 input').serialize(),
                    success : function(data){
                        console.log(data);
                    }
                });
            });

        });
    </script>
</body>
</html>