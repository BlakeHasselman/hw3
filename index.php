<?php
$pageTitle = "Home";
include "view-header.php";
?>
<script>
import React from 'react'

import 'page.css'
</script>

const Page = (props) => {
  return (
    <div className="page-container">
      <img
        src="https://play.teleporthq.io/static/svg/default-img.svg"
        className="page-image"
      />
      <div className="page-container1">
        <h1 className="page-text">Project - NFL Database</h1>
      </div>
      <div className="page-container2">
        <img
          alt="image"
          src="https://images.unsplash.com/photo-1512144253214-d94e86cd9189?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8c2VhcmNofDF8fG5mbHxlbnwwfHx8fDE3MDE3NDAxODV8MA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1200"
          className="page-image1"
        />
      </div>
    </div>
  )
}

export default Page


<?php
include "view-footer.php";
?>
