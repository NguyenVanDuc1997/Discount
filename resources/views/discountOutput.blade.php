<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Product Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="{{$description}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">List Price</label>
            <input type="text" name="listprice" class="form-control" id="exampleInputEmail1" value="{{$listPrice}}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Discount Percent</label>
            <input type="text" name="percent" class="form-control" id="exampleInputEmail1" value="{{$percent}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Discount Amount</label>
            <input type="text" name="percent" class="form-control" id="exampleInputEmail1" value="{{$discountAmount}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Discount Price</label>
            <input type="text" name="percent" class="form-control" id="exampleInputEmail1" value="{{$discountPrice}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>