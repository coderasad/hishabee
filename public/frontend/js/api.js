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
                            <div class="small text-gray-500">
                                ${data.occupation}
                            </div>
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
                    <div class="p-3 border-bottom osahan-post-footer overflow-hidden"> 
                        <a href="#" class="text-secondary ar_like ar_like_${data.p_id}">
                            <i class="feather-thumbs-up mr-2"></i>Like
                        </a>
                        <a href="#" class="mr-3 pl-3 text-secondary emojiArea">
                            <span class="emj_like" id="${data.p_id}">👍🏻</span>
                            <span class="emj_heart" id="${data.p_id}">💖</span>
                            <span class="emj_love" id="${data.p_id}">😍</span>
                            <span class="emj_cry" id="${data.p_id}">😭</span>
                        </a>
                        <a href="#" class="mr-3 text-secondary ar_like_count_${data.p_id} ar_like_count">
                            
                        </a> 
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

  // Enter key up 
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
  $("body").on("click", ".emj_like", function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">👍🏻</span>Like`)
  })

  $("body").on("click", ".emj_heart", function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">💖</span>Like`)
  })
  
  $("body").on("click", ".emj_love", function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">😍</span>Like`)
  })
  
  $("body").on("click", ".emj_cry", function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $(".ar_like_"+id).html(` <span class="mr-2">😭</span>Like`)
  })
  
  // like store 
  $("body").on("click", ".emojiArea span", function (event) {
    var like = $(this).attr('class');   
    var post_id = $(this).attr('id');  
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: 'like',
      data: {
        like: like,
        post_id: post_id,
      },
      success: function (data) {
        $(".ar_like_count_"+post_id).html(`<span class="mr-2 like_count">${data.countLike}</span>Like`)
      }
    })
  })

  // Image show instant start============  
  function readURLa(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_show').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
  }
  $("#imgInp").change(function () {
      readURLa(this);
  });

})(jQuery); // End of use post api
