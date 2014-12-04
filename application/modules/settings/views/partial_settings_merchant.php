<div class="tab-info form-horizontal">

	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_enabled]" class="control-label">
                <?php echo lang('merchant_enable'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<select name="settings[merchant_enabled]" class="input-sm form-control">
                <option value="0"><?php echo lang('no'); ?></option>
				<option value="1" <?php if ($this->mdl_settings->setting('merchant_enabled') == 1) { ?>selected="selected"<?php } ?>><?php echo lang('yes'); ?></option>
			</select>
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_driver]" class="control-label">
                <?php echo lang('merchant_driver'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<select name="settings[merchant_driver]" class="input-sm form-control">
                <option value=""></option>
                <?php foreach ($merchant_drivers as $merchant_driver) { ?>
                <option value="<?php echo $merchant_driver; ?>" <?php if ($this->mdl_settings->setting('merchant_driver') == $merchant_driver) { ?>selected="selected"<?php } ?>><?php echo ucwords(str_replace('_', ' ', $merchant_driver)); ?></option>
                <?php } ?>
			</select>
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_test_mode]" class="control-label">
                <?php echo lang('merchant_test_mode'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<select name="settings[merchant_test_mode]" class="input-sm form-control">
                <option value="0"><?php echo lang('no'); ?></option>
				<option value="1" <?php if ($this->mdl_settings->setting('merchant_test_mode') == 1) { ?>selected="selected"<?php } ?>><?php echo lang('yes'); ?></option>
			</select>
		</div>
	</div>

	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_username]" class="control-label">
                <?php echo lang('username'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<input type="text" name="settings[merchant_username]" class="input-sm form-control"
                   value="<?php echo $this->mdl_settings->setting('merchant_username'); ?>">
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_password]" class="control-label">
                <?php echo lang('password'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<input type="password" name="settings[merchant_password]" class="input-sm form-control">
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_signature]" class="control-label">
                <?php echo lang('merchant_signature'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<input type="text" name="settings[merchant_signature]" class="input-sm form-control"
                   value="<?php echo $this->mdl_settings->setting('merchant_signature'); ?>">
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[merchant_currency_code]" class="control-label">
                <?php echo lang('merchant_currency_code'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<select name="settings[merchant_currency_code]" class="input-sm form-control">
                <option value=""></option>
                <?php foreach ($merchant_currency_codes as $val => $key) { ?>
                <option value="<?php echo $val; ?>" <?php if ($this->mdl_settings->setting('merchant_currency_code') == $val) { ?>selected="selected"<?php } ?>><?php echo $val; ?></option>
                <?php } ?>
			</select>
		</div>
	</div>
    
	<div class="form-group">
        <div class="col-xs-12 col-sm-3 text-right text-left-xs">
		    <label for="settings[online_payment_method]" class="control-label">
                <?php echo lang('online_payment_method'); ?>
            </label>
        </div>
        <div class="col-xs-12 col-sm-6">
			<select name="settings[online_payment_method]" class="input-sm form-control">
                <option value=""></option>
                <?php foreach ($payment_methods as $payment_method) { ?>
                <option value="<?php echo $payment_method->payment_method_id; ?>" <?php if ($this->mdl_settings->setting('online_payment_method') == $payment_method->payment_method_id) { ?>selected="selected"<?php } ?>><?php echo $payment_method->payment_method_name; ?></option>
                <?php } ?>
			</select>
		</div>
	</div>

</div>