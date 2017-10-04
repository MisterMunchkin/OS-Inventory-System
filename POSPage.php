<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="NiceAdmin/img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <?php include("cssScripts.php") ?>
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style>

    </style>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <?php include("Header.php") ?>

      <?php include("Sidebar.php") ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
              <!--<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>

					</ol>
				</div>
      </div>-->

             <div class="row">
                 <div class="col-lg-6">
                    <section class="panel" >
                        <div class="panel-body">
                            Items in cart
                            <table id="ItemList">
                                <thead>
                                    <tr>

                                        <th>Item name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        </tr>
                                </thead>
                            <tbody>
                              <?php
                                  $inventoryFile = file("ServerScript/cart.txt");

                                  $accessData = array();
                                  foreach($inventoryFile as $line){
                                    list($itemName,$itemPrice,$itemQty) = explode(',',$line);

                                    echo '<tr id='.$itemName.'>
                                            <td>'.$itemName.'</td>
                                            <td>'.$itemPrice.'</td>
                                            <td>'.$itemQty.'</td>
                                            </tr>';
                                  }

                               ?>

                            </tbody>
                            </table>
                          <h4 style="float: left;">Total: </h4>
                          <?php
                            $CartFile = file("ServerScript/cart.txt");

                            $total = 0;
                            foreach($CartFile as $line){
                                list($fitemname, $fitemprice, $fitemqty) = explode(',', $line);

                                $total += $fitemprice;
                            }
                            echo "<h4 class='totalText' style='float: left;'>$total</h4>";
                          ?>

                          <div class = "Column buttonSize" style="float: right;">
                                <button id="checkOutCart" type="button" class="btn btn-primary">Add to cart</button>
                          </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6" >
                   <section class="panel" >
                       <div class="panel-body">
                           List of items in stock
                           <table id="InventoryList">
                               <thead>
                                   <tr>

                                       <th>Item name</th>
                                       <th>Price</th>
                                       <th>Qty</th>
                                       </tr>
                               </thead>
                           <tbody>
                             <?php
                                 $inventoryFile = file("ServerScript/inventory.txt");

                                 $accessData = array();
                                 foreach($inventoryFile as $line){
                                   list($itemName,$itemPrice,$itemStock) = explode(',',$line);

                                   echo '<tr id='.$itemName.'>
                                           <td>'.$itemName.'</td>
                                           <td>'.$itemPrice.'</td>
                                           <td>'.$itemStock.'</td>
                                           </tr>';
                                 }

                              ?>
                           </tbody>
                           </table>
                       </div>
                   </section>
               </div>

                <!--<div class="col-lg-6" >
                   <section class="panel" >
                       <div class="panel-body">
                           Add to cart
                           <form method="POST" action="ServerScript/SendToCart.php">
                           <div class="form-group">
                             <h4>Item name</h4>
                               <input class="form-control" id="AddItemname" placeholder="item name" name="txt_itemname" type="text" readonly="readonly" required>
                           </div>
                           <div class="form-group">
                             <h4>Qty</h4>
                               <input class="form-control" id="Qty" placeholder="quantity" name="txt_itemqty" type="number"  min="0" required>
                           </div>
                           <div class = "Column buttonSize">
                                 <button id="addItemtoCart" type="submit" class="btn btn-primary">Add to cart</button>
                           </div>
                         </form>
                       </div>
                   </section>
               </div>-->

               <button type="button" id="AddCartModalButton"
               class="btn btn-info btn-lg" data-toggle="modal"  data-target="#AddCartModal" style="display: none">Open Modal</button>
               <div class="modal" id="AddCartModal" role="dialog">
                   <div class="modal-dialog">


                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                               </div>
                               <div class="modal-body">
                                   Add to cart
                                  <form method="POST" action="ServerScript/SendToCart.php">
                                   <div class="form-group">
                                     <h4>Item name</h4>
                                       <input class="form-control" id="AddItemname" placeholder="item name" name="txt_itemname" type="text" autofocus required>
                                   </div>
                                   <div class="form-group">
                                     <h4>Qty</h4>
                                       <input class="form-control" id="Qty" placeholder="quantity" name="txt_itemqty" type="number"  min="0" required>
                                   </div>
                                   <div class = "Column buttonSize">
                                         <button id="addItemtoCart" type="submit" class="btn btn-primary">Add to cart</button>
                                   </div>
                                 </form>
                               </div>

                           </div>

                   </div>
               </div>


               <button type="button" id="CheckOutCartModalButton"
               class="btn btn-info btn-lg" data-toggle="modal"  data-target="#CheckoutCartModal" style="display: none">Open Modal</button>
               <div class="modal" id="CheckoutCartModal" role="dialog">
                   <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                               </div>
                               <div class="modal-body">
                                    <form method="POST" action="ServerScript/SendToCart.php">
                                       <div class="form-group">
                                         <h4>Total</h4>
                                           <input class="form-control" id="totalCart" placeholder="total" name="txt_total" type="float" min="0" readonly="readonly" autofocus required>
                                       </div>
                                       <div class="form-group">
                                         <h4>Payment</h4>
                                           <input class="form-control" id="payment" placeholder="payment" name="txt_payment" type="float"  min="0" required>
                                       </div>
                                       <div class="form-group">
                                         <h4>Change</h4>
                                           <input class="form-control" id="change" placeholder="change" name="txt_change" type="float"  min="0" readonly="readonly" required>
                                       </div>
                                       <div class = "Column buttonSize">
                                             <button id="CheckOutCart" type="submit" class="btn btn-primary">Check out</button>
                                       </div>
                                   </form>
                               </div>

                           </div>

                   </div>
               </div>
            </div>


                <!-- statics end -->



          </section>
          <div class="text-right">
          <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <?php include("javascriptScripts.php") ?>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {


          $("#ItemList").DataTable();
          $("#AddCartModal").draggable();
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      var InventoryList = $("#InventoryList").DataTable();
      $("#InventoryList").on("click","td",function(){
        var data = InventoryList.row($(this).parents('tr')).data();

//Qty
        $("#AddItemname").val(data[0]);
        $("#AddCartModalButton").trigger("click");
      });

      $("#checkOutCart").on("click", function(){

        $("#totalCart").val( $('h4.totalText').text() );
          $("#CheckOutCartModalButton").trigger("click");

          $("#payment").on("input", function(){
             var change;

             change = $("#payment").val() - $("#totalCart").val();

             $("#change").val(change);
          });
      })



      /*$("#addItemtoCart").on("click", function(){
        $.ajax({
          url: "ServerScript/SendToCart.php",
          method: "POST",
          dataType: "text",
          data: {itemname: $("#AddItemname").val(),
                itemqty: $("#Qty").val()},
          success: function(data){
            //window.location.replace("POSPage.php");
            alert(data);
          },
          error: function(data){
            console.log(data);
          }
        });
      });/*
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
