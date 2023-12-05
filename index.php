<?php
$pageTitle = "Home";
include "view-header.php";
?>
<script>
.page-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  border-color: #0e44f3;
  border-width: 5px;
  flex-direction: column;
  justify-content: center;
  background-color: silver;
}
.page-image {
  width: 483px;
  height: 350px;
  display: none;
  z-index: 100;
  box-shadow: 5px 5px 10px 0px #d4d4d4;
  object-fit: cover;
  border-color: var(--dl-color-gray-900);
  border-width: 1px;
  border-radius: var(--dl-radius-radius-radius4);
}
.page-container1 {
  width: 100%;
  height: 143px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.page-text {
  font-weight: 700;
  text-decoration: underline;
}
.page-container2 {
  width: 100%;
  height: 349px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
}
.page-image1 {
  width: 1110px;
  height: 100%;
  object-fit: cover;
}
</script>

<div>
  <link href="./page.css" rel="stylesheet" />
  <div class="page-container">
    <img
      src="https://play.teleporthq.io/static/svg/default-img.svg"
      class="page-image"
    />
    <div class="page-container1">
      <h1 class="page-text">Project - NFL Database</h1>
    </div>
    <div class="page-container2">
      <img
        alt="image"
        src="https://images.unsplash.com/photo-1512144253214-d94e86cd9189?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8c2VhcmNofDF8fG5mbHxlbnwwfHx8fDE3MDE3NDAxODV8MA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1200"
        class="page-image1"
      />
    </div>
  </div>
</div>

<?php
include "view-footer.php";
?>
