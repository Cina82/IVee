<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="" class="simple-text photo">
                Thumbtack
                </a>
                
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li class="active">
                        <a href="home">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- sidebar for only super admin -->
                    @if(Auth::user()->role_data == 1)
                    <li>
                        <a href="createAdmin">
                            <i class="material-icons">group</i>
                            <p>Admin Management</p>
                        </a>
                    </li>
                    
                    @endif
                    <!  -- sidebar for only Admin -->
                    @if(Auth::user()->role_data == 2)
                    <!-- <li>
                        <a href="createProfessionalUser">
                            <i class="material-icons">group</i>
                            <p>Professional User</p>
                        </a>
                    </li>
                    <li>
                        <a href="createCustomerUser">
                            <i class="material-icons">group</i>
                            <p>Customer User</p>
                        </a>
                    </li> -->
                    <li>
                        <a data-toggle="collapse" href="#userExamples" class="collapsed"   aria-expanded="false">
                           <i class="material-icons">group</i>
                            <p>Users
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="userExamples" aria-expanded="false" style="height: auto;">
                            <ul class="nav">
                                <li>
                                    <a href="createAdmin">Admin</a>
                                </li>
                                <li>
                                    <a href="createProfessionalUser">Professional</a>
                                </li>
                                <li>
                                    <a href="createCustomerUser">Customer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples" class="collapsed"   aria-expanded="false">
                            <i class="material-icons">find_replace</i>
                            <p>Service Management
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples" aria-expanded="false" style="height: auto;">
                            <ul class="nav">
                                <li>
                                    <a href="service">Services</a>
                                </li>
                                <li>
                                    <a href="category">Service Category</a>
                                </li>
                                <li>
                                    <a href="subCategory">Service SubCategory</a>
                                </li>
                                <li>
                                    <a href="question">Service Questions</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="page">
                            <i class="material-icons">assignment</i>
                            <p>Meta Management</p>
                        </a>
                    </li>
                    @endif
                </ul>

            </div>
        </div>
       @section('css')
            
            <style type="text/css">
                .sidebar .nav .caret,
                .off-canvas-sidebar .nav .caret {
                margin-top: 13px;
                position: absolute;
                right: 18px;
                }
                a[data-toggle="collapse"][aria-expanded="true"] .caret,
                .dropdown.open .caret,
                .dropup.open .caret,
                .btn-group.bootstrap-select.open .caret {
                filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
                -webkit-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
                }
                .sidebar .logo .photo,
                .off-canvas-sidebar .user .photo {
                  width: 80px;
                  height: 80px;
                  overflow: hidden;
                  border-radius: 50%;
                  margin: 0 auto;
                  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
                }
                .sidebar .logo .photo img,
                .off-canvas-sidebar .user .photo img {
                  width: 100%;
                }
            </style>    
        @stop
        
        @section('javascript')
            <script type="text/javascript">
                $(".sidebar-wrapper .nav").click(function() {
                $('li').removeClass('active');
                $(this).addClass("active");

                });
            </script>
        @stop

        