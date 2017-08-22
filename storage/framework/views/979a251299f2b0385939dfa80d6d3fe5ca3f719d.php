<?php if(Auth::User()): ?>
<?php  
	$userdata=Auth::User();
	$first=substr($userdata->first_name, 0, 1);
	$second=substr($userdata->last_name, 0, 1);
 ?>

<div class="glorious-header GlobalHeader" data-section="header">
    <div class="wrapper">
        <div class="row header-row">
            <div class="header-logo">
                <a href="<?php echo e(URL::to('home')); ?>">
                    <svg-icon class="IconContainer ng-scope" style="min-width:178px;min-height:28px" twig-rendered="">
                        <svg class="Icon" viewBox="0 0 178 28">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#thumbprinticon-thumbtack-logo_178x28"></use>
                        </svg>
                    </svg-icon>
                    <img class="GlobalHeader-fallbackLogo" src="https://static1.thumbtackstatic.com/media/logos/thumbtack_brand_152x24.svg" alt="Thumbtack" width="152" height="24">
                </a>
            </div>
            <div class="header-middle-container">
            <a class="middle-tab " href="<?php echo e(URL::to('explore')); ?>" event-track="dashboard/click explore" event-track-on="click">Index
            </a>
            <a class="middle-tab " href="<?php echo e(URL::to('explore')); ?>" event-track="dashboard/click explore" event-track-on="click">Calender
            </a>
            <a class="middle-tab " href="<?php echo e(URL::to('explore')); ?>" event-track="dashboard/click explore" event-track-on="click">Services
            </a>
            <a class="middle-tab " href="<?php echo e(URL::to('explore')); ?>" event-track="dashboard/click explore" event-track-on="click">Insights
            </a>
            </div>

            <!--  <div class="header-right-container">
            <div class="header-navigation ">
               <a href="<?php echo e(URL::to('pro')); ?>" rel="nofollow" event-track="home page/clicked join as a pro" event-track-on="click class="gray-link">
               Join as a Pro
               </a>
               <a href="<?php echo e(URL::to('choose-account')); ?>" rel="nofollow" event-track="home page/clicked sign up" event-track-on="click" class="gray-link">
               Sign Up
               </a>
               <a href="<?php echo e(URL::to('login')); ?>" rel="nofollow" event-track="home page/clicked log in" event-track-on="click" class="gray-link log-in-link">
               Log In
               </a>
            </div> -->
            <div class="header-right-container">
                <div class="header-navigation">
                    <div class="universal-profile-container">
                        <div class="universal-picture" data-section="universal-picture">
                            <avatar class="Avatar Avatar--sm">
                                <div class="Avatar__circle">
                                    <div class="Avatar__initials"><?php echo e($first); ?><?php echo e($second); ?></div>
                                </div>
                            </avatar>
                            <div class="arrow-tip" data-section="arrow-tip" style="display: none;">

                            </div>
                        </div>
                        <p class="universal-name" data-section="universal-name">
                            <span class="name"><?php echo e(Auth::User()->first_name); ?></span>
                            <svg-icon type="down-caret" size="sm" class="ng-scope theme-small IconContainer">
                                <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-down-caret_16"></use>
                                </svg>
                            </svg-icon>
                        </p>
                        <div class="profile-box-caret" data-section="arrow-tip" style="display: none;">

                        </div>
                        <!--  <div class="box profile-box" data-section="profile-box" style="display: none;">
                <div class="box-content">
                  <a href="/profile/information" class="picture-big-link">
                    <avatar class="Avatar Avatar--mdLg"><div class="Avatar__circle">
                      <div class="Avatar__initials"><?php echo e($first); ?><?php echo e($second); ?></div></div>
                    </avatar>
                  </a>
                  <div class="box-text-content">
                    <h3 class="name T2-S ">

                                                    <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>

                                                </h3><span class="email  T2-S theme-secondary ">
                                                        <?php echo e(Auth::user()->email); ?>

                                                    </span><span class="project-count
                                                                                                                    B2-S theme-secondary
                                                        ">
                                                    0 projects
                                                </span></div></div><div class="box-footer profile-box-nav">
                                            <a href="<?php echo e(URL::to('/logout')); ?>">
                                                Profile
                                            </a><a href="/profile/settings">
                                                Settings
                                            </a><a href="<?php echo e(URL::to('/logout')); ?>">
                                                Log Out
                                            </a></div></div>
 -->
                        <div class="box profile-box" data-section="profile-box" style="display: none;">
                            <div class="box-content">
                                <a href="/profile/information" class="picture-big-link">
                                    <avatar class="Avatar Avatar--mdLg">
                                        <div class="Avatar__circle"><img src="https://static.thumbtackstatic.com/pictures/24926/3ddqpgokvac91anh6sr7ta9jaf_100.jpg" class="Avatar__image"></div>
                                    </avatar>
                                </a>
                                <div class="box-text-content">
                                    <h3 class="name T2-S ">

                                                    <?php echo e(Auth::user()->first_name); ?>  <?php echo e(Auth::user()->last_name); ?>

                                                </h3></br><span class="email  T2-S theme-secondary ">
                                                        <?php echo e(Auth::user()->email); ?>

                                                    </span></br><span class="project-count
                                                                                                                    B2-S theme-secondary
                                                        ">
                                                    0 projects
                                                </span></div>
                            </div>
                            <div class="box-footer profile-box-nav"><a class="GlobalHeader-profileLink" href="/customer/profile">
                                                    Profile
                                                </a><a href="/profile/settings">
                                                Settings
                                            </a><a href="<?php echo e(URL::to('logout')); ?>">
                                                Log Out
                                            </a></div>
                        </div>

                    </div>
                </div>
            </div>

            <!--<div class="header-right-container">
               <div class="universal-picture" data-section="universal-picture">
                  <avatar class="Avatar Avatar--sm">
                     <div class="Avatar__circle">
                        <div class="Avatar__initials">VS</div>
                     </div>
                  </avatar>
                  <div class="arrow-tip" data-section="arrow-tip" style="display: none;"></div>
               </div>
               <p class="universal-name" data-section="universal-name">
                  <span class="name">vaibhav</span>
                  <svg-icon type="down-caret" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-down-caret_16"></use>
                     </svg>
                  </svg-icon>
               </p>
               <div class="profile-box-caret" data-section="arrow-tip" style="display: none;"></div>
               <div class="box profile-box" data-section="profile-box" style="display: none;">
                  <div class="box-content">
                     <a href="/profile/information" class="picture-big-link">
                        <avatar class="Avatar Avatar--mdLg">
                           <div class="Avatar__circle">
                              <div class="Avatar__initials">VS</div>
                           </div>
                        </avatar>
                     </a>
                     <div class="box-text-content">
                        <h3 class="name
                           T2-S ">
                           vaibhav shah
                        </h3>
                        <span class="email  T2-S theme-secondary ">
                        vaibhav@gmail.com
                        </span><span class="project-count
                           B2-S theme-secondary
                           ">
                        0 projects
                        </span>
                     </div>
                  </div>
                  <div class="box-footer profile-box-nav"><a href="/profile/settings">
                     Settings
                     </a><a href="/logout">
                     Log Out
                     </a>
                  </div>
               </div>
         </div>-->
        </div>
    </div>
</div>

<?php endif; ?>


 






