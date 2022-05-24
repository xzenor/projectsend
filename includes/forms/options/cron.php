<h3><?php _e('Tasks settings','cftp_admin'); ?></h3>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_enable">
            <input type="checkbox" value="1" name="cron_enable" id="cron_enable" class="checkbox_options" <?php echo (get_option('cron_enable') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("Enable schedule tasks",'cftp_admin'); ?>
        </label>

        <p class="field_note"><?php _e("Sample command to execute the cron job every 5 minutes. You may need to adjust the frequency and paths to match your server's settings.",'cftp_admin'); ?><br>
        <?php _e("The >/dev/null part will discard the result and prevent you from getting a email from your OS after each run.",'cftp_admin'); ?>
            <input type="text" class="form-control" readonly href="<?php echo CRON_COMMAND_EXAMPLE; ?>" value="<?php echo CRON_COMMAND_EXAMPLE; ?>">
        </p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_command_line_only">
            <input type="checkbox" value="1" name="cron_command_line_only" id="cron_command_line_only" class="checkbox_options" <?php echo (get_option('cron_command_line_only') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("Enable cron execution via command line only",'cftp_admin'); ?>
        </label>

        <p class="field_note"><?php _e("It's recommended to keep this checked to prevent unathorized executions of the tasks by accessing the URL directly.",'cftp_admin'); ?></p>

        <p class="field_note"><?php _e('If you disable this option, use the following URL to run your cron job via HTTP request:','cftp_admin'); ?><br>
            <input type="text" class="form-control" readonly href="<?php echo CRON_URL; ?>" value="<?php echo CRON_URL; ?>">
        </p>
    </div>
</div>

<div class="form-group">
    <label for="cron_key" class="col-sm-4 control-label"><?php _e('Cron securiy key','cftp_admin'); ?></label>
    <div class="col-sm-8">
        <input type="text" name="cron_key" id="cron_key" class="form-control" value="<?php echo html_output(get_option('cron_key')); ?>" />
        <p class="field_note"><?php _e('This key must be present in the URL to validate the cron job and execute the required actions.','cftp_admin'); ?></p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_send_emails">
            <input type="checkbox" value="1" name="cron_send_emails" id="cron_send_emails" class="checkbox_options" <?php echo (get_option('cron_send_emails') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("Send pending email notifications",'cftp_admin'); ?>
        </label>

        <p class="field_note"><?php _e('Combine this option with the notifications setting "Max. emails to send at once" to throttle emails and prevent issues.','cftp_admin'); ?></p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_delete_expired_files">
            <input type="checkbox" value="1" name="cron_delete_expired_files" id="cron_delete_expired_files" class="checkbox_options" <?php echo (get_option('cron_delete_expired_files') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("Delete expired files",'cftp_admin'); ?>
        </label>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_delete_orphan_files">
            <input type="checkbox" value="1" name="cron_delete_orphan_files" id="cron_delete_orphan_files" class="checkbox_options" <?php echo (get_option('cron_delete_orphan_files') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("Delete orphan files",'cftp_admin'); ?>
        </label>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <label for="cron_email_summary_send">
            <input type="checkbox" value="1" name="cron_email_summary_send" id="cron_email_summary_send" class="checkbox_options" <?php echo (get_option('cron_email_summary_send') == 1) ? 'checked="checked"' : ''; ?> /> <?php _e("E-mail results summary after each execution",'cftp_admin'); ?>
        </label>
    </div>
</div>

<div class="form-group">
    <label for="cron_email_summary_address_to" class="col-sm-4 control-label"><?php _e('E-mail to send the summary to','cftp_admin'); ?></label>
    <div class="col-sm-8">
        <input type="text" name="cron_email_summary_address_to" id="cron_email_summary_address_to" class="form-control" value="<?php echo html_output(get_option('cron_email_summary_address_to')); ?>" />
    </div>
</div>

<div class="options_divide"></div>