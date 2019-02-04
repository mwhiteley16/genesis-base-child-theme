<?php
/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$wd_team_name = get_field( 'wd_team_name' );
$wd_team_position = get_field( 'wd_team_position' );
$wd_team_content = get_field( 'wd_team_content' );
$wd_team_headshot = get_field( 'wd_team_headshot' );
$wd_button = get_field( 'wd_button' );

?>

<div class="team-member">

     <div class="team-member__headshot">
          <img src="<?php echo $wd_team_headshot['url']; ?>" alt="<?php echo $wd_team_headshot['alt']; ?>">
     </div>

     <div class="team-member__content">
          <h2 class="team-member--name"><?php echo $wd_team_name; ?></h2>
          <span class="team-member--position"><?php echo $wd_team_position; ?></span>
          <div class="team-member--content">
               <?php echo $wd_team_content; ?>
               <?php if ( $wd_button ) { ?>
                    <div class="team-member--button">
                         <a class="button" href="<?php echo $wd_button['url']; ?>" target="<?php echo $wd_button['target']; ?>"><?php echo $wd_button['title']; ?></a>
                    </div>
               <?php } ?>
          </div>
     </div>

</div>
