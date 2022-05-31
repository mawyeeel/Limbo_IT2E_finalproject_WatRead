
<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf=8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> WatRead</title>
</head>
<body>

	<center>
<div class="container">

    </br></br><h1 class="page-header text-center">WatRead</h1></br></br>
    <td> We offer you books that you'll desire </td></br></br></br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Create Stories</a>
        <a href="indexReal.php" class="btn btn-light" target="_blank"> View Website</a>   


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px; border-spacing: 0 15px;   width: 800px;
  text-align: center;
  border: 1px solid black;
  padding: 5px">
                <thead class="table-dark">
                    <th scope="col">Story ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                        <tr>
                            <td>1001</td>
                            <td>New Story Title</td>
                            <td>Marianne</td>
                            <td>May 29, 2022</td>
                            <td>read more...</td>
                            <td>
                                <a href="#edit_" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="#delete_" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        </tr>
                        

                </tbody>
                <tfoot>
                    <th scope="col">Story ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>
        

</center>
</body>
</html>