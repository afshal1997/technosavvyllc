<div class="min-banner" style="background:url('assets/front/images/web-landing-bg.jpg');background-attachment: fixed;background-position: center;background-size: cover;"> 
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 center">
        <h1>App Brief</h1>
      </div>
    </div>
  </div>
</div>
<section>
    <div class="brief-form label-400">
        <div class="container">
            <div class="form-div">
                <h2>Kindly Fill The Brief</h2>
                <form action="<?php echo base_url('app');?>" method="post" enctype="multipart/form-data">

                    <h3>GENERAL INFO</h3>
                    
                    <div class="form-group row">
                        <label for="webname" class="col-sm-4 col-form-label">Client Contact Details</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="contact_details" name="contact_details" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="technical_staff" class="col-sm-4 col-form-label">Technical staff involved in the project</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="technical_staff" name="technical_staff" rows="3" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="anyApp" class="col-sm-4 col-form-label">Do you have any apps made in the past?</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="anyApp" name="anyApp" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="budjectTime" class="col-sm-4 col-form-label">Budget and Timing</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="budjectTime" name="budjectTime" rows="3" required></textarea>
                        </div>
                    </div>

                    <h3>APP DETAILS</h3>
                    <div class="form-group row">
                        <label for="webname" class="col-sm-4 col-form-label">App Outline</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="webname" name="webname" required>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Devices *</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment1" name="additionalcomment1" rows="3" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Platforms Accessibility</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment2"  name="additionalcomment2" rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Briefly Describe the Concept of the app</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment3" name="additionalcomment3" rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Do you have any creative/design specifications for the application?</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment4" name="additionalcomment4" rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Do you have ‘Wireframes’ for the app?</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment5"  name="additionalcomment5" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">What content will be included in the app? What is the required functionality?</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment6"  name="additionalcomment6" rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="additionalcomment" class="col-sm-4 col-form-label">Do you need to involve the focus/test group to get feedback about the app/design?</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="additionalcomment7"  name="additionalcomment7" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="material1" class="col-sm-4 col-form-label">Upload Brief:</label>
                        <div class="col-sm-8">
                          <input type="file" class="form-control" name="material1" id="material1">
                        </div>
                    </div>
                    
                    <h3>Domain and Web Hosting Details</h3>
                    <p class="notifiied-p">Please give us a few details about the domain name and hosting of the website.</p>
                    <div class="form-group row radio-tn">
                        <label for="ihave" class="col-sm-4 col-form-label">Do you have a Domain Name?: *</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="yesydomname" name="nodomname1" value="Yes" class="custom-control-input">
                              <label class="custom-control-label" for="yesydomname">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="nodomname" name="nodomname1"  value="No" class="custom-control-input">
                              <label class="custom-control-label" for="nodomname">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row radio-tn">
                        <label for="ihave" class="col-sm-4 col-form-label">Do you want us to provide hosting for your website?: *</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="wanthostyes" name="wanthostyes1"  value="Yes"   class="custom-control-input">
                              <label class="custom-control-label" for="wanthostyes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="wanthostno" name="wanthostyes1" value="No" class="custom-control-input">
                              <label class="custom-control-label" for="wanthostno">No</label>
                            </div>
                        </div>
                    </div>
                    <p class="notifiied-p"><span class="red-tn">Note :</span> We will send you a "Page under construction" template on your respective domain name, very soon. Meanwhile, our professional designers will be working on your custom website design. It will get uploaded as soon as you approve the final design.</p>
                    <h3>CONTACT INFORMATION</h3>
                    <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="name" name="custname" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="phone" class="col-sm-4 col-form-label">Phone *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="phone" name="custphone" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email *</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="custemail" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary btn-gen-tn">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
