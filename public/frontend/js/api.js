(function ($) {
  // post api 
  $("body").on("click", ".postSubmit", function (event) {
    event.preventDefault();
    var postVal = $(".post").val();
    var form_action = $("#addPost").attr("action");
    if (postVal != '') {
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: form_action,
        data: {
          postVal: postVal
        },
        success: function (data) {
          html = `
                  <div class="box shadow-sm border rounded bg-white mb-3 osahan-post">
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="${data.pic}" alt="" />
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">${data.uname}</div>
                        </div>
                        <span class="ml-auto small">
                          ${data.p_time}
                        </span>
                    </div>
                    <div class="p-3 border-bottom osahan-post-body">
                        <p class="mb-0">
                          ${data.post}
                        </p>
                    </div>
                    <div class="p-3 border-bottom osahan-post-footer">
                        <a href="#" class="mr-3 text-secondary"><i class="feather-heart text-danger"></i> 16</a>
                        <a href="#" class="mr-3 text-secondary"><i class="feather-message-square"></i> 8</a>
                        <a href="#" class="mr-3 text-secondary"><i class="feather-share-2"></i> 2</a>
                    </div>
                  </div>
                `
          $('.ar-addPost').prepend(html)
          $(".post").val('');
        }
      })
    }
    else {
      alert("Empty Post");
    }
  })

  var input = $('.postSubmit');
  $(".post").keydown(function (e) {
    if (e.keyCode == 13) {
      $(input).click();
    }
  });

  // img show 
  $("body").on("keyup", "input[name='email']", function (event) {
    var email = $(this).val();    
    var form_action = $("#getImg").attr("action");
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: form_action,
      data: {
        email: email
      },
      success: function (data) {
        if(data.imgIf){
          $(".welcome").html("<h5 class='font-weight-bold text-uppercase mt-3'>Welcome Back <span class='text-warning '> "+(data.name)+"</span></h5>")
          $(".imgAttr").attr('src',(data.imgIf))
        }else{
          $(".welcome").html("<h5 class='font-weight-bold mt-3'>Log In</h5>")
          $(".imgAttr").attr('src',(data.imgElse))
        }
      }
    })
  })

  // emoji change 
  $(".emj_like").click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">👍🏻</span>Like`)
  })
  $(".emj_heard").click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">💖</span>Heart`)
  })
  $(".emj_love").click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">😍</span>Love`)
  })
  $(".emj_cry").click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">😭</span>Cry`)
  })
  
  $(".emojiArea span").click(function(){
    
  })

})(jQuery); // End of use post api
