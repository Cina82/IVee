
<div class="glorious-header 
        " data-section="header">

    <div class="wrapper">
        <div class="row header-row">
            <div class="header-logo">
                <a href="<?php echo e(URL::to('')); ?>"><img class="GlobalHeader-fallbackLogo" src="<?php echo e(URL::to('public/assets/img/Logo/LogoOrange.png')); ?>" width="" height="40" alt="Ivee"></a>
            </div>

            <div class="header-right-container" style="padding-top: 25px !important;">
                <div class="header-navigation "><a href="<?php echo e(URL::to('login')); ?>" rel="nofollow" event-track="home page/clicked log in" event-track-on="click" class="gray-link log-in-link">
                                Log In
                            </a></div>
            </div>
        </div>

    </div>
    <input type="checkbox" id="mobile-navigation-toggle" class="mobile-navigation-toggle ">
    <label for="mobile-navigation-toggle" class="mobile-navigation-trigger "></label>
    <div class="glorious-navigation-wrapper">
        <div class="glorious-navigation">
            <div class="wrapper browse-wrapper empty-default">
                <ul class="navigation-row">
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="<?php echo e(URL::to('login')); ?>" rel="nofollow" event-track="home page/clicked log in" event-track-on="click">Log In</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="<?php echo e(URL::to('explore')); ?>">Explore</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
