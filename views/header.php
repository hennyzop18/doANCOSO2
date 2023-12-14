
 <!-- Preloader -->
 <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>leyen180204@gmail.com</a></li>
                        <li><a>Free shipping khu vực có bán kính 1km</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <?php
                            if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
                                extract($_SESSION['user']); ?>
                                <li><a href="../index.php?act=userinfo" class="login-link"><i class="biolife-icon icon-login"></i><?=$user?></a></li>
                                <li><a href="../index.php?act=editacc">Cập nhật tài khoản</a></li>
                                <li><a href="../index.php?act=thoat">Thoát</a></li>
                          <?php  }else{
                            ?>                        
                        <li><a href="../index.php?act=login" class="login-link"><i class="biolife-icon icon-login"></i>Đăng nhập/Đăng ký</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="../" class="DY-logo"><img src="../assets/images/DY.png" alt="DY logo" width="100" height="34"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                        <?php
                        echo render_menus($menu, $level=0);
                        ?>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">
                                    <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                        <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                        <input type="text" name="s" class="input-text" value="" placeholder="Tìm kiếm...">
                                        <select name="category">
                                            <option value="-1" selected>Tất cả danh mục</option>
                                            <option value="vegetables">Vegetables</option>
                                            <option value="fresh_berries">Fresh Berries</option>
                                            <option value="ocean_foods">Ocean Foods</option>
                                            <option value="butter_eggs">Butter & Eggs</option>
                                            <option value="fastfood">Fastfood</option>
                                            <option value="fresh_meat">Fresh Meat</option>
                                            <option value="fresh_onion">Fresh Onion</option>
                                            <option value="papaya_crisps">Papaya & Crisps</option>
                                            <option value="oatmeal">Oatmeal</option>
                                        </select>
                                        <button type="submit" name="go" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>
                            <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty">4</span>
                                    </span>
                                </a>
                            </div>
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="../index.php?act=viewcart">
                                            <span class="icon-qty-combine">
                                                <i class="icon-cart-mini biolife-icon"></i>
                                            </span>
                                        <span class="title">Giỏ hàng </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">Tất cả danh mục</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Bánh kem</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title"></h4>
                                                            <ul class="menu">
                                                                <li><a href="../index.php?act=prdetail">Bánh tầng</a></li>
                                                                <li><a href="#">Bánh bé trai</a></li>
                                                                <li><a href="#">Bánh bé gái</a></li>
                                                                <li><a href="#">Bánh mini</a></li>
                                                                <li><a href="#">Bánh mừng thọ ông bà</a></li>
                                                                <li><a href="#">Bánh mới</a></li>
                                                                <li><a href="#">Bánh vẽ</a></li>
                                                                <li><a href="#">Bánh trái cây</a></li>
                                                                <li><a href="#">Bánh hoa</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title"></h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Bánh cưới</a></li>
                                                                <li><a href="#">Bánh mẫu tim</a></li>
                                                                <li><a href="#">Bánh nặn tạo hình</a></li>
                                                                <li><a href="#">Bánh 12 con giáp</a></li>
                                                                <li><a href="#">Bánh hũ vàng & khai trương</a></li>
                                                                <li><a href="#">Bánh búp bê</a></li>
                                                                <li><a href="#">Bánh máy bay, ô tô, siêu nhân</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="../index.php?act=product" class="form-search" name="desktop-seacrh" method="post">
                                <input type="text" name="kyw" class="input-text" value="" placeholder="Tìm kiếm...">
                                <button type="submit" name="timkiem" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">+84 1253 891</b></p>
                            <p class="working-time">Thứ 2-Thứ 6: 8:30-19:30; Sat-Sun: 9:30-16:30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>