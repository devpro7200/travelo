 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>/admin/">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url();?>admin/generalSetting"><i class="fa fa-wrench"></i>General Setting</a></li>
                  <li><a><i class="fa fa-group"></i>Manage Master<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/countryList">Country</a></li>
                      <li><a href="<?php echo base_url();?>admin/stateList">State</a></li>
                      <li><a href="<?php echo base_url();?>admin/cityList">City</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-group"></i>Vendor<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/vendorList">View Vendors</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i>User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/userList">View User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i>Hotels<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/hotelList">View Hotels</a></li>
                    </ul>
                  </li>
				  </ul>
              </div>
            </div>
            <!-- /sidebar menu -->