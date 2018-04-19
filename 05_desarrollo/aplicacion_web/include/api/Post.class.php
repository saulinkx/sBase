<?php
class Post_Block {

     function startPost() {
       $md5Post = md5(uniqid(rand(), true));
       
       return $md5Post;
     }

     function postBlock($postID) {
       if(isset($_SESSION['postID'])) {
           if ($postID == $_SESSION['postID']) {
               return false;
           } else {
               $_SESSION['postID'] = $postID;
               return true;
           }
       } else {
           $_SESSION['postID'] = $postID;
           return true;
       }
     }
}
?>
