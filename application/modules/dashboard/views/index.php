<div class="headerbar">
    <h1><?php echo lang('dashboard'); ?></h1>
</div>

<?php echo $this->layout->load_view('layout/alerts'); ?>

<div class="content">
    <div class="row">
    <div class="col-xs-12 col-md-6">

        <div id="panel-quick-actions" class="panel panel-default quick-actions">

            <div class="panel-heading">
                <h3 class="panel-title"><?php echo lang('quick_actions'); ?></h3>
            </div>

            <div class="panel-body">

                <div class="btn-group btn-group-justified">
                    <a href="<?php echo site_url('clients/form'); ?>"
                       class="btn btn-default">
                        <i class="fa fa-user"></i><span class="hidden-md hidden-xs"><?php echo lang('add_client'); ?></span>
                    </a>
                    <a href="javascript:void(0)" class="create-quote btn btn-default">
                        <i class="fa fa-file"></i><span class="hidden-md hidden-xs"><?php echo lang('create_quote'); ?></span>
                    </a>
                    <a href="javascript:void(0)" class="create-invoice btn btn-default">
                        <i class="fa fa-file-text"></i><span class="hidden-md hidden-xs"><?php echo lang('create_invoice'); ?></span>
                    </a>
                    <a href="<?php echo site_url('payments/form'); ?>"
                       class="btn btn-default">
                        <i class="fa fa-money"></i><span class="hidden-md hidden-xs"><?php echo lang('enter_payment'); ?></span>
                    </a>
                </div>

            </div>

        </div>  
		<div id="panel-search-window" class="panel panel-default search-window">

            <div class="panel-heading">
                <h3 class="panel-title"><?php echo lang('search_window'); ?></h3>
				 <!--div class="btn-group">
					  <button type="button" id="btnQuote" class="btn btn-primary" autocomplete="off" >Quote  </button>
					  <button type="button" id="btnClient" class="btn btn-primary" autocomplete="off" >Client </button>
					  <button type="button" id="btnProduct" class="btn btn-primary" autocomplete="off" >Product </button>
					  <script>
					  $('#btnQuote').on('click', function () {
						var $btn = $(this).button('Quote')
						
						// business logic...
						$btn.button('reset')
					  })
					  </script>
				</div-->
            </div>
			<div class="panel-body">
					

				<ul class="nav nav-tabs">
					<li class="active"><a href="#info-tab" data-toggle="tab">Information <i class="fa"></i></a></li>
					<li><a href="#address-tab" data-toggle="tab">Address <i class="fa"></i></a></li>
				</ul>

				<form id="accountForm" method="post" class="form-horizontal">
					<div class="tab-content">
						<div class="tab-pane active" id="info-tab">
							<div class="form-group">
								<label class="col-sm-3 control-label">Full name</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="fullName" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Company</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="company" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Job title</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="jobTitle" />
								</div>
							</div>
						</div>
						
						<div class="tab-pane" id="address-tab">
							<div class="form-group">
								<label class="col-sm-3 control-label">Address</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="address" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">City</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="city" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
								<div class="col-sm-5">
									<select class="form-control" name="country">
										<option value="">Select a country</option>
										<option value="FR">France</option>
										<option value="DE">Germany</option>
										<option value="IT">Italy</option>
										<option value="JP">Japan</option>
										<option value="RU">Russian</option>
										<option value="US">United State</option>
										<option value="GB">United Kingdom</option>
										<option value="other">Other</option>
									</select>
								</div>
							</div>
						</div>
					</div>
    
					<div style="margin: 15px">
						<div class="form-group">
							<div class="col-sm-5 col-sm-offset-3">
								<button type="submit" class="btn btn-default">Validate</button>
							</div>
						</div>
					</div>
				</form>


			</div>
		</div>   		
	</div>
		
	<div class="col-xs-12 col-md-6">
        <div id="panel-recent-quotes" class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-refresh"></i>
                    <?php echo lang('recent_quotes'); ?>
                </h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped no-margin">
                    <thead>
                    <tr>
                        <th style="width: 15%;"><?php echo lang('status'); ?></th>
                        <th style="width: 15%;"><?php echo lang('date'); ?></th>
                        <th style="width: 10%;"><?php echo lang('quote'); ?></th>
                        <th style="width: 40%;"><?php echo lang('client'); ?></th>
                        <th style="text-align: right; width: 15%;"><?php echo lang('balance'); ?></th>
                        <th style="text-align: center; width: 5%;"><?php echo lang('pdf'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
					
                    <?php $index = 0 ?>
					<?php foreach ($quotes as $quote) { ?>
						<?php if ($index < 5){ ?>
							<tr>
								<td>
									<span class="label
									<?php echo $quote_statuses[$quote->quote_status_id]['class']; ?>">
										<?php echo $quote_statuses[$quote->quote_status_id]['label']; ?>
									</span>
								</td>
								<td>
									<?php echo date_from_mysql($quote->quote_date_created); ?>
								</td>
								<td>
									<?php echo anchor('quotes/view/' . $quote->quote_id, $quote->quote_number); ?>
								</td>
								<td>
									<?php echo anchor('clients/view/' . $quote->client_id, $quote->client_name); ?>
								</td>
								<td style="text-align: right;">
									<?php echo format_currency($quote->quote_total); ?>
								</td>
								<td style="text-align: center;">
									<a href="<?php echo site_url('quotes/generate_pdf/' . $quote->quote_id); ?>"
									   title="<?php echo lang('download_pdf'); ?>">
										<i class="fa fa-print"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
						<?php $index++ ?>
                    <?php } ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">
                            <?php echo anchor('quotes/status/all', lang('view_all')); ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
	
    <div class="col-xs-12 col-md-12">
        
		
        <div id="panel-recent-invoices" class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-refresh"></i>
                    <?php echo lang('recent_invoices'); ?></h3>
            </div>

            <div class="table-responsive">
                <table class="table table-striped no-margin">
                    <thead>
                    <tr>
                        <th style="width: 15%;"><?php echo lang('status'); ?></th>
                        <th style="width: 15%;"><?php echo lang('due_date'); ?></th>
                        <th style="width: 10%;"><?php echo lang('invoice'); ?></th>
                        <th style="width: 40%;"><?php echo lang('client'); ?></th>
                        <th style="text-align: right; width: 15%;"><?php echo lang('balance'); ?></th>
                        <th style="text-align: center; width: 5%;"><?php echo lang('pdf'); ?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($invoices as $invoice) { ?>
                        <tr>
                            <td>
                                <span class="label
                                <?php echo $invoice_statuses[$invoice->invoice_status_id]['class']; ?>">
                                    <?php echo $invoice_statuses[$invoice->invoice_status_id]['label']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="<?php if ($invoice->is_overdue) { ?>font-overdue<?php } ?>">
                                    <?php echo date_from_mysql($invoice->invoice_date_due); ?>
                                </span>
                            </td>
                            <td>
                                <?php echo anchor('invoices/view/' . $invoice->invoice_id, $invoice->invoice_number); ?>
                            </td>
                            <td>
                                <?php echo anchor('clients/view/' . $invoice->client_id, $invoice->client_name); ?>
                            </td>
                            <td style="text-align: right;">
                                <?php echo format_currency($invoice->invoice_balance); ?>
                            </td>
                            <td style="text-align: center;">
                                <a href="<?php echo site_url('invoices/generate_pdf/' . $invoice->invoice_id); ?>"
                                   title="<?php echo lang('download_pdf'); ?>">
                                    <i class="fa fa-print"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                    <tr>
                        <td colspan="6" style="text-align: center;">
                            <?php echo anchor('invoices/status/all', lang('view_all')); ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div><!-- /.col-xs-12 col-md-6 -->
    </div><!-- /.row -->
</div><!-- /.content -->
