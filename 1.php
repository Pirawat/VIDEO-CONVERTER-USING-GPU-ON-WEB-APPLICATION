<form>
<input id="titlee" name="titlee">
<input type="file" name="fileToUpload" id="fileToUpload">
<button  type="submit" value="submit" id="submit" name="submit">Start</button>
<div class="progress"></div>
</form>
<script type="text/javascript">
$(function() 
    {
        $("#submit").click(function() 
            {
                var titlee = $("#titlee").val();
                var fileToUpload= $("#fileToUpload").val();

                var dataString = 'titlee='+ titlee + '&fileToUpload=' + fileToUpload;

                $.ajax(
                    {
                        type: "POST",
                        url: "c_insert_test.php",
                        data: dataString,
                        success: function()
                    });

                return false;
            });
    });
</script>