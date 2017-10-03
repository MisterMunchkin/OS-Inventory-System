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
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>

					</ol>
				</div>
	         </div>

             <div class="row">
                 <div class="col-lg-12">
                    <section class="panel" >
                        <div class="panel-body">
                            <button id="addnewProduct" data-toggle="modal" data-target="#AddProductModal" type="button">add product</button>
                            <table id="InventoryList" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Item name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Edit/Delete/Add</th>
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

                                            <td><button id="deleteStock" type="button" data-toggle="modal" data-target="#DeleteStockModal">Delete stock</button>
                                                <button id="addStock" type="button" >Add stock</button></td>
                                            </tr>';
                                  }

                               ?>
                            </tbody>
                            </table>
                        </div>
                    </section>
                </div>



            </div>
            <button type="button" id="AddStockModalButton"
            class="btn btn-info btn-lg" data-toggle="modal" data-target="#AddStockModal" style="display: none">Open Modal</button>
            <div class="modal fade" id="AddStockModal" role="dialog">
                <div class="modal-dialog">

                        <!-- Modal content modal to add team-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">


                                  <div class="form-group">
                                    <h4>Add Stock</h4>
                                      <input class="form-control" id="Itemstock" placeholder="item stock" type="number"  min="0" required>
                                  </div>
                                  <div class = "Column buttonSize">
                                        <button id="submitAddStock" type="submit" class="btn btn-primary">submit</button>
                                  </div>

                            </div>

                        </div>

                </div>
            </div>
            <!--<button type="button" id="AddTeamModalButton"
            class="btn btn-info btn-lg" data-toggle="modal" data-target="#AddTeamModal" style="display: none">Open Modal</button>-->
            <div class="modal fade" id="AddProductModal" role="dialog">
                <div class="modal-dialog">

                        <!-- Modal content modal to add team-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                              <form method="POST" action="ServerScript/addNewProduct.php">
                                  <div class="form-group">
                                    <h4>Item name</h4>
                                      <input class="form-control" id="Itemname" placeholder="item name" name="txt_itemname" type="text" autofocus required>
                                  </div>
                                  <div class="form-group">
                                    <h4>Price</h4>
                                      <input class="form-control" id="Itemprice" placeholder="item price" name="txt_itemprice" type="number" step="0.01" min="0" required>
                                  </div>
                                  <div class="form-group">
                                    <h4>Stock</h4>
                                      <input class="form-control" id="Itemstock" placeholder="item stock" name="txt_itemstock" type="number"  min="0" required>
                                  </div>
                                  <div class = "Column buttonSize">
                                        <button id="submitNewItem" type="submit" class="btn btn-primary">submit</button>
                                  </div>
                                </form>
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

          /*$("#submitNewItem").on("click", function(){

              $.ajax({
                url: "ServerScript/addNewProduct.php",
                method: "POST",
                data: {item_name: $("#Itemname").val(),
                        item_price: $("#Itemprice").val(),
                          item_stock: $("#Itemstock").val()},
                success: function(data){
                  alert(data);
                },
                error: function(data){
                  alert(data);
                }
              });
          });*/

          var InventoryList = $("#InventoryList").DataTable();

          $("#InventoryList").on("click", "#addStock", function(){
              var data = InventoryList.row($(this).parents('tr')).data();

              $("#AddStockModalButton").trigger("click");

              $("#submitAddStock").on("click", function(){


                  $.ajax({
                      type: "POST",
                      url: "ServerScript/AddStock.php",
                      data: {itemname: data[0], addedstock: $("#Itemstock").val()},
                      dataType: 'text',
                      success: function(data){
                          alert(data);
                      },
                      error: function(data){
                          alert(data);
                      }
                  });
              })
          });

          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

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
