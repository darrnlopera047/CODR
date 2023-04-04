

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <head>
   <link rel="stylesheet" type="text/css" href="css/nav.css">
   <link rel="stylesheet" type="text/css" href="css/front-page.css">
   <link rel="stylesheet" type="text/css" href="css/feature.css">
   <link rel="stylesheet" type="text/css" href="css/ourservice.css">
   <link rel="stylesheet" type="text/css" href="css/aboutus.css">
   <link rel="stylesheet" type="text/css" href="css/ourwork.css">
   <link rel="stylesheet" type="text/css" href="css/contact.css">
   <link rel="stylesheet" type="text/css" href="css/footer.css">
  <title>Codr</title>


  <style> 


</style>
</head>

<body>

<div>@include('header')</div>
<div>@include('front-page')</div>
<div>@include('feature')</div>
<div>@include('ourservices')</div>
<div>@include('aboutus')</div>
<div>@include('ourwork')</div>
<div>@include('contact')</div>
<div>@include('footer')</div>






</body>
</html>

<script>const menuIcon = document.querySelector(".navbar-container .menu-icon");
const mobileMenus = document.querySelector(".mobile-menus");

menuIcon.addEventListener("click", () => {
  mobileMenus.classList.toggle("active");
});</script>



<script>
    document.getElementById('next').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft += widthItem;
}
document.getElementById('prev').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft -= widthItem;
}

</script>