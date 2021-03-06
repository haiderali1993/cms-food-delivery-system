
  <section id="content">
    <section class="main padder">
      <div class="clearfix">
        <h3><i class="fa fa-edit"></i><?php echo $form_name ?></h3>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <section class="panel">
            <div class="panel-body">
              <form action="<?php echo site_url();?>outlet/add_outlet" class="form-horizontal" method="post" data-validate="parsley" enctype="multipart/form-data"> 
				<?php echo validation_errors(); ?>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Select Client</label>
                  <div class="col-lg-8">
                    <select name="client-id" value="<?php echo set_value('client-id'); ?>" data-required="true" class="form-control"> 
						<?php if($client_list){
							foreach($client_list as $client){
								echo '<option value="'.$client->id.'">'.$client->company_name.'</option>';
							}
						}?>
					</select>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-name" value="<?php echo set_value('outlet-name'); ?>" placeholder="Outlet Name" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Postal Code</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-postal-code" value="<?php echo set_value('outlet-postal-code'); ?>" placeholder="Postal Code" class="form-control" id="outlet-postal-code" data-required="true" maxlength="6" autocomplete="off">
					<span class="form-error" id="form-error" style="color:red;"></span>
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Location</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-location" value="<?php echo set_value('outlet-location'); ?>" placeholder="Location" data-required="true" class="form-control" id="outlet-location" readonly>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Unite Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-unite-number" value="<?php echo set_value('outlet-unite-number'); ?>" placeholder="#00-00" class="form-control" id="outlet-unite-number" data-required="true">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-contact-number" value="<?php echo set_value('outlet-contact-number'); ?>" placeholder="Contact Number" data-required="true" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Billing Address</label>
                  <div class="col-lg-8">
                    <textarea name="outlet-billing-address" placeholder="Billing Address" class="form-control" id="outlet-billing-address" rows="5" data-required="true"> <?php echo set_value('outlet-billing-address'); ?> </textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-12" style="text-align: center; font-size: 15px; margin-top: 10px;">Contact Person Details</label>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-cp-name" value="<?php echo set_value('outlet-cp-name'); ?>" placeholder="Contact Person Name" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-cp-number" value="<?php echo set_value('outlet-cp-number'); ?>" placeholder="+xx-xxxxxxxx" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-cp-email" value="<?php echo set_value('outlet-cp-email'); ?>" placeholder="test@example.com" class="bg-focus form-control" data-required="true" data-type="email">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Postal Code</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-cp-postal-code" value="<?php echo set_value('outlet-cp-postal-code'); ?>" placeholder="Postal Code" class="form-control" id="outlet-cp-postal-code" data-required="true" maxlength="6" autocomplete="off">
					<span class="form-error-cp" id="form-error-cp" style="color:red;"></span>
				  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address</label>
                  <div class="col-lg-8">
                    <textarea name="outlet-cp-address" placeholder="Billing Address" class="form-control" id="outlet-cp-address" rows="5" data-required="true" readonly ><?php echo set_value('outlet-cp-address'); ?> </textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Unite Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="outlet-cp-unite-number" value="<?php echo set_value('outlet-cp-unite-number'); ?>" placeholder="#00-00" class="form-control" id="outlet-cp-unite-number" data-required="true">
                  </div>
                </div>
				<div class="form-group">
                  <input type="hidden" name="ss-base-url" class="form-control" id="ss-base-url" value="<?php echo base_url();?>"/>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">                      
                    <a href="<?php echo site_url();?>outlet" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Add">
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </section>
  </section>
 