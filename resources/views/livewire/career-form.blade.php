<div>

    <div class="form-heading">
        <h5>Career Form</h5>
        </div>
    <div class="row">
       <div class="col-12 col-md-12 col-lg-4">
          <input class="form-control" type="text" name="contact-name" placeholder="Name" required="">
       </div>
       <div class="col-12 col-md-6 col-lg-4">
          <input class="form-control" type="text" name="contact-email" placeholder="Email" required="">
       </div>
       <div class="col-12 col-md-6 col-lg-4">
          <input class="form-control" type="text" name="contact-phone" placeholder="Phone" required="">
       </div>
       <div class="col-12 col-md-6 col-lg-4">

            <div class="select-container">
            <select class="form-control" style="display: none;">
            <option value="default">Select Department</option>
            <option value="Transport">Transport</option>
            <option value="Projects">Projects</option>
            <option value="Shipping">Shipping</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Commercial">Commercial</option>
            <option value="Admin">Admin</option>
            <option value="Hr">Hr</option>
            <option value="IT">IT</option>
            </select>
            </div>

       </div>
       <div class="col-12 col-md-6 col-lg-4">
        <label for="">Upload Cv</label>
        <input type="file" name="cv" id="" >
       </div>
    </div>
    <h5 class="card-heading">Message <span class="text-danger">*</span></h5>
    <div class="row">

       <div class="col-12">
        <textarea class="form-control" name="contact-tracking-number" cols="30" rows="3" placeholder="Message..." required=""></textarea>
       </div>
       <div class="col-12">
          <input class="btn btn--secondary btn--block" type="submit" value="Submit">
       </div>
       <div class="col-12">
          <div class="contact-result"></div>
       </div>
    </div>

</div>
