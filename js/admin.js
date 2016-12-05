$(document).ready(function () {
    $('.edt').click(function () {
      var $this = $(this);
      var data = $this.parents('tr').data('info');
      var tp = $this.data('tp');
      $('body').find('#myModal .modal-title').text('Edit Event');
      $('#myModal').modal('show');
      $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title"></h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Description:</p>'+
                        '<textarea style="width: 500px" id="desc">'+data.Dsc+'</textarea>'+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" data-id='+data.Id+' id="edt-sve" data-tp='+tp+' class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
      if(data.Img != null) {
        $('#myModal').find('.modal-body').append('<img id="img" style="height: 50px; height: 50px;" src="/images/uploads/'+data.Img+'">');
        $('#myModal').find('.upld').remove();
      }
    });
    
    $('.new').click(function () {
      $('body').find('#myModal .modal-title').text('Create Event');  
      $('#myModal').modal('show');
      var $this = $(this);
      var data = $this.parents('tr').data('info');
      var tp = $this.data('tp');
      var emlFld = '';
      if(tp == 'ndonr') {
         emlFld = '<p>Email:</p><input style="width: 500px" type="email" id="eml"></textarea>';
      }
      $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title"></h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Description:</p>'+
                        '<textarea style="width: 500px" id="desc"></textarea><br/><br/>'+emlFld+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file" id="uplgImg">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" id="new-sve" data-tp='+tp+' class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
    });
    
    $('.rmv').click(function () {
        var $this = $(this);
        $('#myModal').modal('show');
        var tp = $this.data('tp');
        var ttl = tp == 'rdonr' ? 'Donor' : 'Event';
        var data = $this.parents('tr').data('info');
        $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title">Remove '+ttl+'</h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Are you sure want to remove this '+ttl+'</p>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" id="rmv" data-tp='+tp+' data-id='+data.Id+' class="btn btn-success" data-dismiss="modal">Remove</button>'+
                    '</div>'+
                '</div></div>');
        
    });
    
    $('#myModal').on('click', '#edt-sve', function () {
       var $this = $(this);
       var trgt = $('#myModal'); 
       
       $.ajax({
            url: "admin.php",
            type: 'post',
            data: {
              id: $this.data('id'),
              img: trgt.find("#img").attr('src'),
              dsc: trgt.find("#desc").val(),
              tp: $this.data('tp')
            },
            success: function (res) {
              res = JSON.parse(res);
              if(res.status == 1){
                alert(res.msg);
                location.reload();
              }
              else {
                alert(res.msg);
              }
            }
          });
    });
    
    $('#myModal').on('click', '#new-sve', function () {
       var $this = $(this);
       var trgt = $('#myModal');
       $.ajax({
            url: "admin.php",
            type: 'post',
            data: {
              img: trgt.find("#img").data('src'),
              dsc: trgt.find("#desc").val(),
              eml: trgt.find("#eml").val(),
              tp: $this.data('tp')
            },
            success: function (res) {
              res = JSON.parse(res);
              if(res.status == 1){
                alert(res.msg);
                location.reload();
              }
              else {
                alert(res.msg);
              }
            }
          });
    });
   
    
    $('#myModal').on('click', '#rmv', function () {
       var $this = $(this);
       $.ajax({
            url: "admin.php",
            type: 'post',
            data: {
              id: $this.data('id'),
              tp: $this.data('tp')
            },
            success: function (res) {
              res = JSON.parse(res);
              if(res.status == 1){
                alert(res.msg);
                location.reload();
              }
              else {
                alert(res.msg);
              }
            }
          });
    });
    
    $('#myModal').on('change', '#uplgImg', function () {
        var $this = $(this);
        var file = this.files[0];
        var fd = new FormData();
        fd.append('file', file);
        fd.append('tp', 'UI');

        $.ajax({
            url: "admin.php",
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function (res) {
                res = JSON.parse(res);
                if (res.status == '1') {
                    $this.parent('.upld').append('<img style="height: 50px; height: 50px;" id="img" data-src='+res.msg+' src="/images/uploads/'+res.msg+'"/>');
                    $this.remove();
                } else {
                    alert("Something went wrong please try again");
                }
            }
        });
    });    
});
