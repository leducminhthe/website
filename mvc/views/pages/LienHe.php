<h3>Contact Us</h3>

    <form action="/website/LienHeController/LienHe" method="POST">
         <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" name="HoTen"  placeholder="Enter name" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group col-sm-12">
                <label for="Phone" class="h4">Phone</label>
                <input type="Phone" class="form-control" name="Phone" placeholder="Enter Phone" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-lg pull-right ">Submit</button>
    </form>

<?php if( isset($data['Result'])) { ?>
  <h3>
    <?php 
      if ($data['Result'] == true) {
        echo "Cảm ơn bạn đã liên hệ với chúng tôi, chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể";
      }else{
        echo "liên hệ thất bại";
      }
    ?>
  </h3>
<?php } ?>