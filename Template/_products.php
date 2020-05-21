        <!--start product-->
        <?php 
            $item_id = $_GET['item_id'] ?? 1;
            foreach($product->getData() as $item):
                if($item['item_id'] == $item_id):
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? 'assets/products/1.png'; ?>" alt="apple-5" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'Name'; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? 'Brand'; ?></small>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="" class="px-2 font-rale font-size-14">20.132 ratings | 1000+ answered questions</a>
                        <hr class="m-0">
                        <!--start product price-->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? s0; ?></span><small class="text-dark">&nbsp;&nbsp;inclusive all small taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td>$<span class="font-size-16 text-danger">10.00..</span></td>
                            </tr>
                        </table>
                        <!--end product price-->
                        <!--start policy-->
                        <div class="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 dounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">10 Days <br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 dounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">Product <br>Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 dounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">! year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!--end policy-->
                        <hr>
                        <!--start order details-->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by : Mar 29 - Apr 1</small>
                            <small>Sold by <a href="">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Costumer 424201</small>
                        </div>
                        <!--end order details-->
                        <div class="row">
                            <div class="col-6">
                                <!--color-->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!--end color-->
                            </div>
                            <div class="col-6">
                              <!--qty section-->
                              <div class="qty d-flex">
                                <h6 class="font-baloo">Qty:</h6>
                                <div class="px-4 d-flex font-rale">
                                  <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                  <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                  <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                </div>
                              </div>
                              <!--endqty section-->
                            </div>
                        </div>
                        <!--start size-->
                        <div class="size my-3">
                          <h6 class="font-baloo">Size:</h6>
                          <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">6GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                          </div>
                        </div>
                        <!--end size-->
                    </div>
                    <div class="col-12">
                      <h6 class="font-rubik">Product Description</h6>
                      <hr>
                      <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione consectetur sunt nulla ut ea magnam nemo molestiae ab officia saepe, reprehenderit cupiditate minus. Aspernatur, debitis! Id ipsum, facilis dolor sit omnis consequatur cum dolore maxime deleniti libero enim fuga impedit mollitia reprehenderit repellat odio quaerat vel. Possimus nulla incidunt minima.</p>
                      <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione consectetur sunt nulla ut ea magnam nemo molestiae ab officia saepe, reprehenderit cupiditate minus. Aspernatur, debitis! Id ipsum, facilis dolor sit omnis consequatur cum dolore maxime deleniti libero enim fuga impedit mollitia reprehenderit repellat odio quaerat vel. Possimus nulla incidunt minima.</p>
                    </div>
            </div>
        </section>
        <!--end product-->
        <?php
            endif;
            endforeach;
        ?>