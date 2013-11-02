<li class="nav-header">
  <a href="#" data-toggle="collapse" data-target="#userMenu">
    User <i class="icon-angle-down"></i>
  </a>
  <ul style="list-style: none;" class="collapse in" id="userMenu">
    <li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
    <li><a href="#"><i class="icon-envelope-alt"></i>Messages <span class="badge badge-info">4</span></a></li>
    <li><a href="#"><i class="icon-cogs"></i>Settings</a></li>
    <li><a href="#"><i class="icon-comment"></i>Shoutbox</a></li>
    <li><a href="#"><i class="icon-user"></i>Staff List</a></li>
    <li><a href="#"><i class="icon-flag"></i>My Infractions</a></li>
    <li><a href="#"><i class="icon-exclamation-sign"></i>Rules &amp; Regulations</a></li>
    <li><a href="#"><i class="icon-off"></i>Logout</a></li>
  </ul>
</li>
<li class="nav-header">
  <a href="#" data-toggle="collapse" data-target="#radioDJMenu">
    Radio DJ <i class="icon-angle-right"></i>
  </a>
  <ul style="list-style: none;" class="collapse" id="radioDJMenu">
    <li><a href="#">Information &amp; Stats</a></li>
    <li><a href="#">DJ Says</a></li>
    <li><a href="#">Request Line</a></li>
    <li><a href="#">Timetable</a></li>
    <li><a href="#">Banned Songs</a></li>
  </ul>
</li>
<li class="nav-header">
<a href="#" data-toggle="collapse" data-target="#headDJMenu">
    Head DJ <i class="icon-angle-right"></i>
  </a>
  <ul style="list-style: none;" class="collapse" id="headDJMenu">
    <li><a href="#"><i class="icon-"></i>All Banned Songs</a></li>
  </ul>
</li>




$('[data-toggle=collapse]').click(function(){
  
    // toggle icon
    $(this).find("i").toggleClass("icon-angle-right icon-angle-down");
  
});

$('.collapse').on('show', function (e) {
  
    // hide open menus
    $('.collapse').each(function(){
      if ($(this).hasClass('in')) {
          $(this).collapse('toggle');
      }
    });
  
})