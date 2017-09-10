<?php
	/**
     * Gravatar Image URL Snippet
     *
     * Create URL of Gravatar User Image with fallback to a default image
	   * @author Markus Deuerlein, https://entidia.de
     *
    **/

    $mailHash    = md5(strtolower( 'user@email.com' )); 
    $defaultImg  = md5(strtolower( trim('https://www.domain.com/images/default.jpg') ));
    $gravatarUrl = 'https://www.gravatar.com/avatar/'.$mailHash.'?d='.$imageUrl;
?>

<img src="<?php echo $gravatarUrl; ?>" alt="User Image" class="thumnail">
