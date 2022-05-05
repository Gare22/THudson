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

            #delete button

            echo('</div>');
        }

        #add new images button
        echo '<div class="gallery-item">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image(s) to upload:
        <input type="file" name="filesToUpload" id="filesToUpload" multiple>
        <input type="submit" value="Upload Image(s)" name="submit">
        </form>
        </div>';
    }
    #if none, then...
    else{
        #echo the rest of the navbar (not needed for this portion)
        echo '</div> <div class="l-galleries-list">';

        #for each folder in "imgs/galleries/", generate a link. 
        #If link is clicked, use GET http request with gallery number
        $scan = scandir('../imgs/galleries/');
        $files = array_diff($scan, array('.', '..'));
        
        foreach($files as $file) {
            if (is_dir("../imgs/galleries/$file")) {
                echo '<div class="gallery-folder">';
                echo '<a href="'.'./?'.http_build_query(array('gallery' => $file)).'">';
                echo $file;
                echo '</a></div>';
            }
        }
    }
    
?>

</div>