<?php
/**
 * @package mediapress
 * @subpackage mpp-base
 * 
 * Lists all audios
 *	
 * Fallback single Gallery View
 */
?>

<?php if( mpp_have_media() ): ?>

    <?php if( mpp_user_can_list_media( mpp_get_current_gallery_id() ) ):?>


		<?php do_action ( 'mpp_before_single_gallery' ); ?>

		<div class='mpp-g mpp-item-list mpp-media-list mpp-audio-list mpp-single-gallery-media-list mpp-single-gallery-audio-list'>
			
			<?php mpp_get_template_part( 'gallery/media/loop', mpp_get_media_loop_template_slug( mpp_get_gallery() ) );?>
			
		</div>

		<?php do_action ( 'mpp_after_single_gallery' ); ?>

        <?php mpp_media_pagination(); ?>

		<?php do_action ( 'mpp_after_single_gallery_pagination' ); ?>	

		<?php mpp_locate_template( array('gallery/activity/gallery-activity.php'), true ); ?>

		<?php do_action ( 'mpp_after_single_gallery_activity' ); ?>

    <?php else:?>

            <div class="mpp-notice mpp-gallery-prohibited">

                <p><?php printf( __( 'The privacy policy does not allow you to view this.', 'mediapress' ) ); ?></p>
                
            </div>

    <?php endif;?>
        
<?php else:?>

    <div class="mpp-notice mpp-no-gallery-notice">
		
        <p> <?php _ex( 'Nothing to see here!', 'No Gallery Message', 'mediapress' ); ?> </p>
			
    </div>

<?php endif;?>