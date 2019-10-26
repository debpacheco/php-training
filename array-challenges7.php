<?php //CHALLENGE #1 #3 is following 2 lines postID
        //$postID = strip_tags($_GET['postID']);
       $postID = htmlspecialchars( strip_tags($_GET['postID'] ) );
       
       //for database work;
       //mysql_real_escape_string();
       $dirtyID = $_GET ['postID'];
       echo 'clean: ' . $postID;
       echo 'dirty: ' . $dirtyID;
    //    echo $postID;

       //create function
       function currentPost($posts, $id) {
           return $posts[$id];

       }

       $posts = [
            [
            'author' => 'John Doe',
            'title' => 'Post 1',
            'content' => 'Description',
            'image' => 'https://cdn.pixabay.com/photo/2019/10/11/16/56/cat-4542301_1280.jpg'
        ],
        [
            'author' => 'John Doe',
            'title' => 'Post 2',
            'content' => 'Description',
            'image' => 'https://cdn.pixabay.com/photo/2019/10/11/16/56/cat-4542301_1280.jpg'
        ],
        [
            'author' => 'Gator',
            'title' => 'Post 3',
            'content' => 'Description',
            'image' => 'https://cdn.pixabay.com/photo/2019/03/19/15/03/fantasy-4065924_1280.jpg'
        ]
        ];

        // echo $posts[0]['author'];

        foreach ( $posts as $post ) {
            foreach ( $post as $key=>$item) {
                echo '<p>' . $key . ': ' . $item . '</p>';
            }
        }

     

        //CHALLENGE #2 

        foreach ( $posts as $post ) {
            if ( $post['author'] == 'John Doe') {
                echo '<p>Written by ' . $post['author'] . '</p>';
            }
            
        }

        foreach ( $posts as $post ) {
            if ( $post['author'] == 'John Doe' ) {
                echo '<p>Written by ' . $post['author'] . '</p>'; 
            }
        
        }

        $thisPost = currentPost($posts, $postID); ?>
        
        <h1><?php echo $thisPost['title'] ; ?></h1>

         <p>Written By:<?php echo $thisPost['author'] ; ?></p>

         <img src="<?php echo $thisPost['image'] ; ?>" />
         
         <p><?php echo $thisPost['content'] ?></p>
