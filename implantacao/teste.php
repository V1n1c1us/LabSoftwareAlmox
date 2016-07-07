<html>
<head>
    <title>Live Table Data Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <br />
    <br />
    <div class="table-responsive">
        <h3 align="center">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</h3><br />
        <div id="live_data"></div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        function edit_data(idProduto, quantidade)
        {
            $.ajax({
                url:"edit.php",
                method:"POST",
                data:{idProduto:idProduto, quantidade:quantidade},
                dataType:"text",
                success:function(data){
                    alert(data);
                }
            });
        }
        $(document).on('blur', '.quantidade', function(){
            var id = $(this).data("id1");
            var quantidade = parseInt($(this).val());
            edit_data(id, quantidade);
        });

    });
</script>
