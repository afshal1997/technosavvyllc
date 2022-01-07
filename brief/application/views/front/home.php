<div class="min-banner" style="background:url('assets/front/images/logo-brief.PNG');background-attachment: fixed;background-position: center;background-size: cover;"> 
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 center">
        <!--<p>Affordable & Reliable</p>-->
        <h1>Logo Brief</h1>
      </div>
    </div>
  </div>
</div>
<section>
    <div class="brief-form">
        <div class="container">
            <div class="form-div">
                <h2>Kindly Fill The Brief</h2>
                <form action="<?php echo base_url('home/brief_form');?>" method="post" enctype="multipart/form-data">
                    <h3>DESIGN SPECIFICATIONS</h3>
                    <div class="form-group row">
                    <label for="logoname" class="col-sm-4 col-form-label">Exact Name To Be Appeared On Logo *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="logoname" id="logoname" required>
      
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="slogan" class="col-sm-4 col-form-label">Slogan (If Any)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="slogan" name="slogan">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="styleoflogo" class="col-sm-4 col-form-label">Preferred Style Of Logo * </label>
                    <div class="col-sm-8">
                      <select class="form-control" id="styleoflogo" name="styleoflogo" required>
                          <option value="">Select Style of Logo</option>
                          <option value="Modern">Modern</option>
                          <option value="Hi-Tec">Hi-Tec</option>
                          <option value="Contemporary">Contemporary</option>
                          <option value="Funny">Funny</option>
                          <option value="Antique">Antique</option>
                          <option value="Corporate">Corporate</option>
                          <option value="Other">Other</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="looknfeel" class="col-sm-4 col-form-label">Look And Feel *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="looknfeel" name="looknfeel">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="additionalcomment" class="col-sm-4 col-form-label">Any Additional Comments:</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id="additionalcomment" name="additionalcomment" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="material" class="col-sm-4 col-form-label">Upload Brief:</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="material" id="material">
                    </div>
                    </div>
                    <h3>BUSINESS DETAIL</h3>
                    <div class="form-group row">
                    <label for="company" class="col-sm-4 col-form-label">Company *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="company" name='company' required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="industry" class="col-sm-4 col-form-label">Industry *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="industry" name='industry' required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="briefdesc" class="col-sm-4 col-form-label">A Brief Description About Your Business</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id="briefdesc" rows="3" name='briefdesc'></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="yourtarget" class="col-sm-4 col-form-label">Your Target Audience</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="yourtarget" name="yourtarget">
                    </div>
                    </div>
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
