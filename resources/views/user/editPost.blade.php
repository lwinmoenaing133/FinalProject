<x-pagelayout>
<div class="container">
    <h1 class="mt-4 mb-4">Edit Post</h1>
    <!-- Default form login -->
<form class="border border-light p-5" action="{{route("updatePost",$updateData->id)}}" method="post"" enctype="multipart/form-data">
    @csrf

    

    <label for="">Title</label>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="title" value="{{$updateData->title}}">

    <label for="">Photo</label>
    <input type="file" id="defaultLoginFormPassword" class="form-control mb-4" name="image">
    <img src="{{asset('image/posts/'.$updateData->image)}}" alt="" width="300px" height="300px"><br><br>
    <label for="">Content</label>
    <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4">{{$updateData->content}}</textarea>
    <button class="btn btn-info btn-block my-4" type="submit">Update Post</button>

    

</form>
<!-- Default form login -->
</div>
</x-pagelayout>