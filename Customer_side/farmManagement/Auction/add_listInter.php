<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Sign-Up</title>
</head>
<body id="body-color">
<div id="Sign-Up">
    <fieldset style="width:30%"><legend>Auction</legend>
        <table border="0">


            <form method="POST" action="add_list.php" enctype="multipart/form-data">
                <h3>Create Auction</h3>

                <tr>
                    <select name="item_type">

                        <option value="vegetables">Vegetables</option>
                        <option value="fruits">Fruits</option>
                    </select>
                </tr>
                <tr>
                    <td> National Id</td>
                </tr>
                <tr>
                    <td> <input type="text" name="id" placeholder="9574124456v"></td>
                </tr>
                <tr>
                    <td> Listing Title</td>
                </tr>
                <tr>
                    <td> <input type="text" name="name" placeholder="Item name"></td>
                </tr>
                <tr>
                    <td>Maximum Price</td>
                </tr>
                <tr>
                    <td> <input type="text" name="price" placeholder="500"></td>
                </tr>
                <tr>
                    <td>Expiration Date</td>
                </tr>
                <tr>
                    <td> <input type="date" name="date" placeholder="select expiration date"></td>
                </tr>
                <tr>
                    <td>Location</td>
                </tr>
                <tr>
                    <td> <input type="text" name="location" placeholder="location"></td>
                </tr>

                <tr>
                    <td>Auction Description</td>
                </tr>
                <tr>
                    <td> <textarea  name="description"></textarea></td>
                </tr>
                <tr>
                    <td> <input type="file" name="image" id="image" />
                        <br /><!--input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /--></td>
                </tr>
                <tr>
                    <td><input id="insert" type="submit" name="insert" value="Submit Auction" class="btn btn-info"></td>
                </tr>

            </form>
        </table>
    </fieldset>

</div>
</body>
</html><script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>
