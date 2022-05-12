<?php
if(empty($user)){
    header("Location:index.php"); exit();
}
?>
<div class="l-navbar">
    <h1> Admin Menu </h1>
    <a href="auth/logout.php"><h1>log out</h1></a>
<?php #display galleries
#check for http get request named "gallery"
#if found, then show the images in that gallery
if(isset($_GET['gallery'])){
    #echo the back button to allow user to go back to menu of galleries.
    echo '<a href="./"><h1>go back to galleries</h1></a>';
    #now echo the closing tag for the navbar and opening tag for the gallery list
    echo '</div> <div class="l-galleries-list">';
    $images = glob('../imgs/galleries/'.$_GET['gallery'].'/*.{jpg,png,gif}', GLOB_BRACE);
    foreach($images as $image){
        echo('<div class="gallery-item">');
        #print image
        echo('<img src="' . $image . '">');
        echo('<a href=""> Delete </a>');

        #delete button

        echo('</div>');
    }

    #add new images button
    echo '<div class="gallery-item">
    <form id="image-upload" name="image-upload" action="upload.php" method="POST" enctype="multipart/form-data">
    Select image(s) to upload:
    <input type="file" name="filesToUpload[]" id="filesToUpload" accept=".png, .jpg, .gif" multiple>
    <input type="button" value="Upload Image(s)" name="submitButton" onclick="uploadNormal()">
    </form>
    </div>';
}
#if none, then...
else{
    #echo the rest of the navbar (not needed for this portion)
    echo '</div> <div class="l-title"> Photo Galleries</div> <div class="l-galleries-list">';

    #for each folder in "imgs/galleries/", generate a link. 
    #If link is clicked, use GET http request with gallery number
    $scan = scandir('../imgs/galleries/');
    $files = array_diff($scan, array('.', '..'));
    
    foreach($files as $file) {
        if (is_dir("../imgs/galleries/$file")) {
            echo '<a class="gallery-folder" href="'.'./?'.http_build_query(array('gallery' => $file)).'">';
            echo $file;
            echo '</a>';
        }
    }
}
?>
<script>

function uploadNormal(){
    var form = document.getElementById('image-upload');
    
    var gallery = document.createElement('input');
    gallery.setAttribute('name', 'gallery');
    gallery.setAttribute('value', "<?php echo($_GET['gallery']); ?>");
    gallery.setAttribute('type', 'hidden');

    form.appendChild(gallery);

    form.submit();
}

function uploadAJAX(){
    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#image-upload").submit(function(event){

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "upload.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("Hooray, it worked!");
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
}
</script>
</div>