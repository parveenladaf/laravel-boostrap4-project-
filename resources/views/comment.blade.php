

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>

<style>
    .card {
        width: 30% !important;
        padding: 15px;
        margin: 0 auto;
        margin-left: auto;
        margin-right: auto;
        top: 30%;
    }
    .h3 {
        text-align: center;
        padding: 20px;
    }
</style>

<div class="card" style="width: 18rem;">
    <form method="post" action="/api/user/comment" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input id="name" class="form-control" type="text" name="name" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <textarea id="comment" class="form-control" type="text" name="comment" placeholder="Your comment"></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
    </form>
</div>
