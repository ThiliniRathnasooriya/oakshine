<!-- register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resgiter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/register';?>">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" id="signName" required class="form-control" placeholder="Username">
        </div>
        
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" required class="form-control" placeholder="Password">
        </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function() {
        $('#numOfNot').hide();
        // setInterval("ajaxd()", 5000);
        });
    
    function ajaxd(){
        $.ajax({
                //$('#numOfNot').hide();
                url: '<?php echo base_url();?>/admin/returns',
                type: 'GET',
                dataType:'json',
                async: true,
                success: function(res) {
                    
                    if(res && res.length) {
                        $('#numOfNot').show();
                        $('#notify').html('<a href="<?php echo base_url().'admin/vendorR'?>" class="dropdown-item"><i class="fa fa-file mr-2"></i> '+res.length+' vendors will expire in a week</a>');
                    
                    }
                    else{
                        $('#numOfNot').hide();
                        $('#notify').html('<div class="dropdown-item">No notifications</div>');
                    }
                },
                error: function(){
                    console.log('error loading notifications');
                }
                
            });
    }
</script>