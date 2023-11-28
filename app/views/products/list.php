<main class="bg-body-tertiary pb-4">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row   mb-5">
                        <div class="col-12">
                            <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                                <label class="mr-2">Sort by:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relevance <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">Relevance</a>
                                    <a class="dropdown-item" href="#">Price Descending</a>
                                    <a class="dropdown-item" href="#">Price Ascending</a>
                                    <a class="dropdown-item" href="#">Best Selling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][1]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][1]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][1]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][1]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][2]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][2]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][2]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][2]['root-price']) ?></s> $<?php print_r($data['products_list'][2]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][3]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][3]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][3]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][3]['root-price']) ?></s> $<?php print_r($data['products_list'][3]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <a href="<?php echo _WEB_ROOT ?>/san-pham/<?php print_r($data['products_list'][0]['name']) ?>">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        <img src="<?php print_r($data['products_list'][0]['url_img']) ?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            <a href="product.html" class="fs-5 font-weight-bold text-dark text-uppercase small"> <?php print_r($data['products_list'][0]['name']) ?></a>
                                        </h4>
                                        <h5 class="card-price small text-warning">
                                            <i>
                                                <s>$<?php print_r($data['products_list'][0]['root-price']) ?></s> $<?php print_r($data['products_list'][0]['price']) ?>
                                            </i>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                <h3 class="mt-0 mb-5">Showing <span class="text-primary">12</span> Products</h3>
                <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-1">
                        <label class="custom-control-label" for="category-1">Accessories</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-2">
                        <label class="custom-control-label" for="category-2">Coats &amp; Jackets</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-3">
                        <label class="custom-control-label" for="category-3">Hoodies &amp; Sweatshirts</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-4">
                        <label class="custom-control-label" for="category-4">Jeans</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-5">
                        <label class="custom-control-label" for="category-5">Shirts</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-6">
                        <label class="custom-control-label" for="category-6">Underwear</label>
                    </div>
                </div>
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Size</h6>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-1">
                        <label class="custom-control-label" for="filter-size-1">X-Small</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-2">
                        <label class="custom-control-label" for="filter-size-2">Small</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-3">
                        <label class="custom-control-label" for="filter-size-3">Medium</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-4">
                        <label class="custom-control-label" for="filter-size-4">Large</label>
                    </div>
                </div>
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-5">
                        <label class="custom-control-label" for="filter-size-5">X-Large</label>
                    </div>
                </div>
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
                <div class="price-filter-control">
                    <input type="number" class="form-control w-50 pull-left mb-2" value="50" id="price-min-control">
                    <input type="number" class="form-control w-50 pull-right" value="150" id="price-max-control">
                </div>
                <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <a href="#" class="btn btn-lg btn-block btn-primary mt-5">Update Results</a>
            </div>

        </div>
    </div>
</main>