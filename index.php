<?php include './header.php';?>

<nav class="navbar navbar-light" style="background-color: #1f5881; height: 50px;">
<div class="container-fluid NavbarContainer">
  <h3 class="SiteTitle">მორიკა</h3>
    <form class="d-flex">
      <input class="form-control me-2 Searchinput" type="search" placeholder="Search" aria-label="Search">
      <span class="material-icons SearchIcon">search</span>
    </form>
    <span class="material-icons userIcon" data-bs-toggle="modal" data-bs-target=".AutorizationModal">account_circle</span>
  </div>
</nav>
<div class="d-flex flex-column p-3 text-white bg-dark CategoryBar" style="width: 280px;">
    <!-- <div>
    <span class="fs-4">Sidebar</span> 
    </div> -->
    <ul class="nav nav-pills flex-column mb-auto userCategoryList">
        
    </ul>
</div>

<div class="container-fluid">
    <h4 class="otherfont">პროდუქციის ჩამონათვალი</h4>
    <div class="card" style="width: 18rem;">
    <img src="/upload/Restaurant_Image/Menu_Image/1/5f8476d23b76e.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
</div>


<div class="modal fade AutorizationModal scale-up-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ავტორიზაცია</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">სახელი:</label>
            <input type="text" class="form-control" id="user-name" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">პაროლი:</label>
            <input type="password" class="form-control" id="user-pass" autocomplete="off">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">დახურვა</button>
        <button type="button" class="btn btn-primary InputAdmin">შესვლა</button>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php';?>
<script src="/template/js/Upload_Image/main.js"></script>

<script>
$(document).ready(function(){
    $.post('/uploadindex',
    {
        selectusercategory: 'selectusercategory'
    },
    function(data){
        $('.userCategoryList').html(data);
    })
})
</script>